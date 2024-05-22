<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <i class="bi bi-briefcase"></i> {{ __('Cases') }}
            <a href="{{route('cases.create')}}"
               class="py-2 px-4 text-white text-sm float-right font-semibold rounded-lg border border-grey-200 bg-blue-700">
                <i class="bi bi-plus"></i>Add
            </a>
        </h2>
    </x-slot>

    <div class="py-12">
        @include('layouts.messages')
        <div class="max-w-7xl mx-auto sm:px-3 lg:px-3">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    @if($cases->count()>0)
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 ">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-2 py-1">#</th>
                            <th scope="col" class="px-2 py-1">Type</th>
                            <th scope="col" class="px-2 py-1">Description</th>
{{--                            <th scope="col" class="px-2 py-1">Document</th>--}}
                            <th scope="col" class="px-2 py-1">Client details</th>
                            <th scope="col" class="px-2 py-1">Deadline</th>
                            <th scope="col" class="px-2 py-1">Duration</th>
                            <th scope="col" class="px-2 py-1">Status</th>
                            <th scope="col" class="px-2 py-1"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($cases as $case)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="px-2 py-1">CS00{{$case->id}}</td>
                                <td class="px-2 py-1">{{$case->case_type}}</td>
                                <td class="px-2 py-1">{!! $case->case_description !!}</td>
{{--                                <td class="px-2 py-1">--}}
{{--                                    <a class="text-blue-700" target="_blank" href="{{asset('storage/'.$case->case_document)}}" download>Download</a>--}}
{{--                                </td>--}}
                                <td class="px-2 py-1"><b>Name: </b>{{$case->client_name}} <br> <b>Contact:</b> {{$case->client_contact}} </td>
                                <td class="px-2 py-1">{{$case->case_deadline}}</td>
                                <td class="px-2 py-1 text-danger">put duration</td>
                                <td class="px-2 py-1">
                                    @if($case->case_status === 'pending')
                                        <p class="text-yellow-500 font-bold">{{$case->case_status}}</p>
                                    @else
                                        <p class="text-blue-500 font-bold">{{$case->case_status}}</p>
                                    @endif


                                </td>
                                <td class="px-2 py-1">
                                    <a href="{{route('cases.show', $case->id)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View</a>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                    @else
                        <h4 class="p-2 font-semibold text-xl text-white text-center bg-red-600 leading-tight">You Have No Cases Added</h4>
                    @endif
                </div>

            </div>
        </div>


    </div>
</x-app-layout>
