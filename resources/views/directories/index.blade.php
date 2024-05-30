<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-3 lg:px-3">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <h1 class="p-3 text-black bg-gray-400">Directories</h1>
            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-3 lg:px-3">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @include('layouts.messages')
                <form action="{{route('directories.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="p-6 text-gray-900">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="p-2">
                                    <x-input-label for="title" :value="__('Title')" />
                                    <x-text-input id="title"  class="block mt-1 w-full" type="text" name="title" :value="old('title')" />
                                    <x-input-error :messages="$errors->get('title')" class="mt-2" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="p-2">
                                    <x-input-label for="document" :value="__('Upload File')" />
                                    <x-text-input id="document"  class="block mt-1 w-full" type="file" name="document" :value="old('file')" />
                                    <x-input-error :messages="$errors->get('document')" class="mt-2" />
                                </div>
                            </div>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ml-4">
                                {{'Upload'}}
                            </x-primary-button>
                        </div>

                    </div>
                </form>
            </div>
        </div>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-3 lg:px-3">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="chat-box">
                                    @if($directories->count()>0)
                                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                            <tr>
                                                <th scope="col" class="px-2 py-1">#</th>
                                                <th scope="col" class="px-2 py-1">Title</th>
                                                <th scope="col" class="px-2 py-1">Document</th>
                                                <th scope="col" class="px-2 py-1">Date</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($directories as $directory)
                                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                    <td class="px-2 py-1">{{$directory->id}}</td>
                                                    <td class="px-2 py-1">{{$directory->title}}</td>
                                                    <td class="px-2 py-1">
                                                        <a class="text-blue-700" target="_blank" href="{{asset('storage/'.$directory->document)}}" download>View</a>
                                                    </td>
                                                    <td class="px-2 py-1">{{$directory->created_at}}</td>
                                                </tr>
                                            @endforeach

                                            </tbody>
                                        </table>
                                    @else
                                        <h4 class="p-2 font-semibold text-xl text-white text-center bg-red-600 leading-tight">You Data Available</h4>
                                    @endif
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>


        </div>
</x-app-layout>
