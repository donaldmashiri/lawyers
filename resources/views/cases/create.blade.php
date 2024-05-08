<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <i class="bi bi-briefcase"></i> {{ __('Add Cases') }}
            <a href="{{route('cases.index')}}"
               class="py-2 px-4 text-dark text-sm float-right font-semibold rounded-lg border border-grey-200 bg-grey-700">
                <i class="bi bi-arrow-left"></i> back
            </a>
        </h2>
    </x-slot>

    <div class="py-12">
        @include('layouts.messages')
        <div class="max-w-7xl mx-auto sm:px-3 lg:px-3">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <form method="POST" action="{{route('cases.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="py-4 px-4">
                            <div class="">
                                <x-input-label for="case_type" :value="__('Case Type')" />
                                <select name="case_type" id="" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" >
                                    <option value="">Select Type</option>
                                    <option value="Contract disputes">Contract disputes</option>
                                    <option value="Criminal cases">Criminal cases</option>
                                    <option value="Bankruptcy">Bankruptcy</option>
                                    <option value="Personal injury">Personal injury</option>
                                    <option value="Property law">Property law</option>
                                    <option value="Family law">Family law</option>
                                </select>
                                <x-input-error :messages="$errors->get('user_type')" class="mt-2" />
                            </div>

                            <div class="mt-4">
                                <x-input-label for="case_description" :value="__('Case Description')" />
                                <input id="case_description" type="hidden" name="case_description">
                                <trix-editor input="case_description"></trix-editor>
                                <x-input-error :messages="$errors->get('case_description')" class="mt-2" />
                            </div>

                            <div class="mt-4 p-1">
                                <x-input-label for="case_document" :value="__('Case Document')" />
                                <input type="file" name="case_document" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                                <x-input-error :messages="$errors->get('case_document')" class="mt-2" />
                            </div>

                            <div class="mt-4">
                                <x-input-label for="client_name" :value="__('Client Name')" />
                                <x-text-input id="client_name" class="block mt-1 w-full" type="text" name="client_name" :value="old('name')" required autofocus autocomplete="client_name" />
                                <x-input-error :messages="$errors->get('client_name')" class="mt-2" />
                            </div>

                            <div class="mt-4">
                                <x-input-label for="client_contact" :value="__('Client Contact')" />
                                <x-text-input id="client_contact" class="block mt-1 w-full" type="text" name="client_contact" :value="old('name')" required autofocus autocomplete="client_contact" />
                                <x-input-error :messages="$errors->get('client_contact')" class="mt-2" />
                            </div>

                            <div class="mt-4 p-1">
                                <x-input-label for="case_deadline" :value="__('Case Deadline')" />
                                <input type="text" id="case_deadline" name="case_deadline" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                                <x-input-error :messages="$errors->get('case_deadline')" class="mt-2" />
                            </div>

                            <div class="mt-4">
                                <x-primary-button class="m-4 bg-blue-700 float-right">
                                    {{ __('Submit') }}
                                </x-primary-button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        flatpickr('#case_deadline', {
            enableTime: true
        });
    </script>

</x-app-layout>
