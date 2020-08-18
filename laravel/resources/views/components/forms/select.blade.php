@props(['label'=>'Label', 'id'=>null, 'options'=>[], 'value'=>'', 'help'=>''])
<div>
    <label {{ $id?'for='.$id:'' }} class="block text-sm font-medium leading-5 text-gray-700">{{ $label }}</label>
    <div class="mt-1 relative rounded-md shadow-sm">
        <select {{ $id?'id='.$id:'' }} {{ $id?'name='.$id:'' }}
                value="{{ old($id, $value) }}"
                class="mt-1 block form-select w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
            @foreach($options as $key=>$option)
                <option value="{{ $key }}">{{ $option }}</option>
            @endforeach
        </select>
        @error($id)
        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
            <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
            </svg>
        </div>
        @enderror
    </div>
    @error($id)
    <p class="mt-2 text-sm text-red-600" id="{{ $id }}-error">{{ $message }}</p>
    @enderror
    @if($help)
        <p class="mt-2 text-sm text-gray-500">{{ $help }}</p>
    @endif
</div>
