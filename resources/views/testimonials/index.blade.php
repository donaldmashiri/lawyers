<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <i class="bi bi-newspaper"></i> {{ __('Testimonials') }}
            <a href="{{route('testimonials.create')}}"
               class="py-2 px-4 text-white text-sm float-right font-semibold rounded-lg border border-yellow-600 bg-yellow-600">
                <i class="bi bi-plus"></i>Add Testimony
            </a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-3 lg:px-3">
            <div class="bg-white overflow-hidden  text-center shadow-sm sm:rounded-lg">
                @foreach($testimonials as $data)
                <div class="grid grid-cols-1 gap-1 text-center sm:px-3 lg:px-3">
                    <a href="#" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="{{asset('images/testimony.jpg')}}" alt="">
                        <div class="flex flex-col justify-between p-4 leading-normal">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Case Type : {{$data->case_type}}</h5>
                            <small> USR00{{$data->user_id}}</small>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"> {!! $data->case_description !!}</p>
                        </div>
                    </a>
                </div>
                @endforeach

                    @foreach($cases as $data)
                        <div class="grid grid-cols-1 gap-1 text-center sm:px-3 lg:px-3">
                            <a href="#" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                                <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="{{asset('images/testimony.jpg')}}" alt="">
                                <div class="flex flex-col justify-between p-4 leading-normal">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Case Type : {{$data->case_type}}</h5>
                                    <small> USR00{{$data->user_id}}</small>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"> {!! $data->case_description !!}</p>
                                </div>
                            </a>
                        </div>
                    @endforeach


            </div>
        </div>

    </div>
</x-app-layout>
