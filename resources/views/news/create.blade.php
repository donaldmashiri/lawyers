<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <i class="bi bi-newspaper"></i> {{ __('News & Articles') }}
            <a href="{{route('news.index')}}"
               class="py-2 px-4 text-white text-sm float-right font-semibold rounded-lg border border-yellow-600 bg-yellow-600">
                <i class="bi bi-plus"></i>Back
            </a>
        </h2>
    </x-slot>

    <div class="py-12">
        @include('layouts.messages')
        <div class="max-w-7xl mx-auto sm:px-3 lg:px-3">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <form method="POST" action="{{route('news.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="py-4 px-4">
                            <div class="">
                                <x-input-label for="news_type" :value="__('News Type')" />
                                <select name="news_type" id="" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" >
                                    <option value="">Select Type</option>
                                    <option value="news">News</option>
                                    <option value="article">Article</option>
                                </select>
                                <x-input-error :messages="$errors->get('news_type')" class="mt-2" />
                            </div>

                            <div class="mt-4">
                                <x-input-label for="title" :value="__('Title')" />
                                <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('name')" required autofocus autocomplete="title" />
                                <x-input-error :messages="$errors->get('title')" class="mt-2" />
                            </div>

                            <div class="mt-4">
                                <x-input-label for="summary" :value="__('News Summary')" />
                                <input id="summary" type="hidden" name="summary">
                                <trix-editor input="summary"></trix-editor>
                                <x-input-error :messages="$errors->get('summary')" class="mt-2" />
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


</x-app-layout>
