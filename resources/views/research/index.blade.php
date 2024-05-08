<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-3 lg:px-3">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <h1 class="p-3 text-black bg-gray-400">Research AI</h1>
            </div>
        </div>


        <div class="max-w-7xl mx-auto sm:px-3 lg:px-3">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="p-2">
                        <x-input-label for="case_type" :value="__('Case Type')" />
                        <select name="case_type" id="case_type" class="block mt-1 p-2.5 w-full text-sm  rounded-lg border border-gray-300" >
                            <option value="">Contract disputes</option>
                            <option value="">Criminal cases</option>
                            <option value="">Bankruptcy</option>
                            <option value="">Personal injury</option>
                            <option value="">Property law</option>
                            <option value="">Family law</option>
                        </select>
                        <x-input-error :messages="$errors->get('case_type')" class="mt-2" />
                    </div>

                    <div class="p-2">
                        <x-input-label for="contents" :value="__('Content')" />
                        <input id="contents" value="{{ isset($post) ? $post->title : ''}}" type="hidden" name="contents">
                        <trix-editor input="contents"></trix-editor>
                        <x-input-error :messages="$errors->get('contents')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-4">

                        <x-primary-button class="ml-4">
                            {{'Get Help'}}
                        </x-primary-button>
                    </div>

                </div>
            </div>
        </div>

    </div>



</x-app-layout>
