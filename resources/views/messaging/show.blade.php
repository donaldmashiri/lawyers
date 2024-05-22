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
                @include('layouts.messages')
                <form action="{{route('messaging.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="p-6 text-gray-900">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="hidden" name="receiver_id" value="{{$user->id}}">
                                <div class="p-2">
                                    <x-input-label for="message" :value="__('Message')" />
                                    <x-text-input id="message"  class="block mt-1 w-full" type="text" name="message" :value="old('message')" />
                                    <x-input-error :messages="$errors->get('message')" class="mt-2" />
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
                                {{'Send'}}
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
                                    @foreach($messages as $message)
                                        @if($message->user_id == Auth::user()->id)
                                            <div class="message right-message bg-secondary p-3">
                                                <p>{{ $message->message }}</p>
                                                <span class="message-info">{{ $message->created_at }}</span>
                                            </div>
                                        @else
{{--                                            <div class="message left-message">--}}
{{--                                                <p>{{ $message->message }}</p>--}}
{{--                                                <span class="message-info">{{ $message->created_at }}</span>--}}
{{--                                            </div>--}}
                                        @endif
                                    @endforeach
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>


    </div>
</x-app-layout>
