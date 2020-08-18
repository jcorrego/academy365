@extends('layouts.app')

@section('content')
    <x-pages.header title="Edit course"
                    description="Here you can update this course information"></x-pages.header>
    <div class="mx-auto sm:px-6 lg:px-8 my-8">
        <form action="{{ route('course-update',[$course->id]) }}" method="POST">
            @csrf
            @method('put')
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">General</h3>
                        <p class="mt-1 text-sm leading-5 text-gray-600">
                            This is the general information for this course 
                        </p>
                    </div>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <div class="shadow sm:rounded-md sm:overflow-hidden">
                        <div class="px-4 py-5 bg-white sm:p-6 space-y-6">
                            <x-forms.input id="name" label="Course name" placeholder="Ex. Wordpress tutorial" value="{{ $course->name }}"></x-forms.input>
                            <x-forms.textarea id="description" label="Description" placeholder="Describe your course" value="{{ $course->description }}" help="Course description."></x-forms.textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden sm:block">
                <div class="py-5">
                    <div class="border-t border-gray-200"></div>
                </div>
            </div>
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Modules</h3>
                        <p class="mt-1 text-sm leading-5 text-gray-600">
                            Here you can manage course modules and videos.
                        </p>
                    </div>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <div class="shadow sm:rounded-md sm:overflow-hidden">
                        <div class="px-4 py-5 bg-white sm:p-6 space-y-6">
                            @foreach ($course->modules as $module)
                                <div class="mt-5 first:mt-0 border-t first:border-t-0 border-gray-200 pt-5 first:pt-0 flex items-center">
                                    <div class="w-10/12 space-y-2">
                                        <input type="hidden" name="modules[{{ $module->id }}][id]" value="{{ $module->id }}">
                                        <x-forms.input id="modules[{{ $module->id }}][name]" label="Title" placeholder="This is the module title..." value="{{ $module->name }}"></x-forms.input>
                                        <div class="flex space-x-4">
                                            <div class="w-2/12">
                                                <x-forms.input id="modules[{{ $module->id }}][order]" label="Order" placeholder="" value="{{ $module->order }}"></x-forms.input>
                                            </div>
                                            <div class="w-10/12">
                                                <x-forms.input id="modules[{{ $module->id }}][video]" label="Video URL" placeholder="https://..." value="{{ $module->video }}"></x-forms.input>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-2/12 flex justify-center">
                                        <x-forms.button type="submit" id="delete_module[{{ $module->id }}]" format="secondary" size="xs"><i class="fad fa-trash mr-2"></i>Delete</x-forms.button>
                                    </div>
                                    
                                </div>
                            @endforeach
                        </div>
                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <x-forms.button type="submit" id="add_module" format="secondary"><i class="fad fa-save mr-2"></i>Save and Add new Module</x-forms.button>
                            <x-forms.button type="submit"><i class="fad fa-save mr-2"></i>Save</x-forms.button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection