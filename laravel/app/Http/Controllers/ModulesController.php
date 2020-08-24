<?php

namespace App\Http\Controllers;

use App\Module;
use Illuminate\Http\Request;

class ModulesController extends Controller
{
    public function show($hash)
    {
        $module  = Module::whereRaw("md5(`id`) = '{$hash}'")->first();
        $prev    = Module::where('order', '<', $module->order)->orderByDesc('order')->first();
        $next    = Module::where('order', '>', $module->order)->orderBy('order')->first();

        return view('modules.show', [
            'module' => $module,
            'prev'=>$prev, 'next'=>$next
        ]);
    }

    public function play($hash)
    {
        if(!request()->server('HTTP_REFERER')){
            return redirect()->route('home')->with(['status_type'=>'error','status_title' => 'Not authorized!', 'status_message' => 'You are not authorized to view this video directly.']);
        }
        $module  = Module::whereRaw("md5(`id`) = '{$hash}'")->first();
        $url = $module->video;
        ini_set('memory_limit', '1024M');
        set_time_limit(3600);
        ob_start();
        if (isset($_SERVER['HTTP_RANGE'])) $opts['http']['header'] = "Range: " . $_SERVER['HTTP_RANGE'];
        $opts['ssl']['verify_peer']      = false;
        $opts['ssl']['verify_peer_name'] = false;
        $opts['http']['method']          = "HEAD";
        $conh                            = stream_context_create($opts);
        $opts['http']['method']          = "GET";
        $cong                            = stream_context_create($opts);
        $out[]                           = file_get_contents($url, false, $conh);
        $out[]                           = $http_response_header;
        ob_end_clean();
        array_map("header", $http_response_header);
        readfile($url, false, $cong);
    }
}
