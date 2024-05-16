<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-3 lg:px-3">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <h1 class="p-3 text-black bg-gray-400">Messaging</h1>
            </div>
        </div>


        <div class="max-w-7xl mx-auto sm:px-3 lg:px-3">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="p-2">
                        <x-input-label for="title" :value="__('Title')" />
                        <x-text-input id="title"  class="block mt-1 w-full" type="text" name="title" :value="old('title')" />
                        <x-input-error :messages="$errors->get('title')" class="mt-2" />
                    </div>

                    <div class="p-2">
                        <x-input-label for="file" :value="__('Upload File')" />
                        <x-text-input id="file"  class="block mt-1 w-full" type="file" name="file" :value="old('file')" />
                        <x-input-error :messages="$errors->get('file')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-4">

                        <x-primary-button class="ml-4">
                            {{'Submit'}}
                        </x-primary-button>
                    </div>

                </div>
            </div>
        </div>

    </div>
</x-app-layout>
