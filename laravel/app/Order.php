<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];
//    protected $casts = [
//        'valid' => 'datetime:Y-m-d',
//    ];
    protected $dates = ['created_at', 'updated_at', 'valid'];
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
