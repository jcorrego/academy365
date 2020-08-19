<x-menu.section-title>Courses</x-menu.section-title>
@foreach(App\Course::all() as $course)
    @if($course->status == 'active')
    <div x-data="{ isExpanded: {{ isset($module) && request()->is('modules/*') && $course->modules()->where('id',$module->id)->first() ?'true':'false' }} }">
        <button @click="isExpanded = !isExpanded" class="mt-1 group w-full flex items-center px-2 md:pl-2 md:pr-1 py-2 text-base md:text-sm leading-6 md:leading-5 font-medium rounded-md text-blue-300 hover:text-white hover:bg-blue-700 focus:outline-none focus:text-white focus:bg-blue-700 transition ease-in-out duration-150">
            <i class="fal fa-graduation-cap mr-4 md:mr-2"></i>{{ $course->name }}
            <svg :class="{'text-blue-400 rotate-90': isExpanded, 'text-blue-300': !isExpanded }" class="ml-auto h-5 w-5 transform group-hover:text-blue-400 group-focus:text-blue-400 transition-colors ease-in-out duration-150" viewBox="0 0 20 20">
                <path d="M6 6L14 10L6 14V6Z" fill="currentColor"/>
            </svg>
        </button>
        <div x-show="isExpanded" class="mt-1 space-y-1">
            @foreach($course->modules()->orderBy('order')->get() as $mod)
                <a href="{{ route('module',md5($mod->id)) }}" 
                   :class="{'bg-blue-900 text-blue-50':{{ isset($module) && $module->id == $mod->id?'true':'false' }}, 'text-blue-400':{{!isset($module)|| $module->id != $mod->id?'true':'false'}} }" 
                   class="group w-full flex items-center pl-11 md:pl-4 pr-2 py-2 text-xs leading-5 font-medium text-blue-400 rounded-md hover:text-white hover:bg-blue-700 focus:outline-none focus:text-blue-900 focus:bg-blue-700 transition ease-in-out duration-150">
                    {{ $mod->name }}
                </a>
            @endforeach
        </div>
    </div>
    @endif
@endforeach
<x-menu.link href="{{ route('tests') }}"><i class="fad fa-tasks-alt mr-4 md:mr-2"></i>Take tests</x-menu.link>
<x-menu.link href="{{ route('certificates') }}"><i class="fad fa-file-certificate mr-4 md:mr-2"></i>Certificates</x-menu.link>