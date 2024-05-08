<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <i class="bi bi-briefcase"></i>Show Case CS00{{$case->id}}
            <a href="{{route('cases.index')}}"
               class="py-2 px-4 text-dark text-sm float-right font-semibold rounded-lg border border-grey-200 bg-grey-700">
                <i class="bi bi-arrow-left"></i> back
            </a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-3 lg:px-3">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <h1 class="p-3 text-black bg-gray-200">Cases Details</h1>
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-2 py-1">Type</th>
                            <th scope="col" class="px-2 py-1">Description</th>
                            <th scope="col" class="px-2 py-1">Document</th>
                            <th scope="col" class="px-2 py-1">Client details</th>
                            <th scope="col" class="px-2 py-1">Deadline</th>
                            <th scope="col" class="px-2 py-1">Status</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="px-2 py-1">{{$case->case_type}}</td>
                                <td class="px-2 py-1">{!! $case->case_description !!}</td>
                                <td class="px-2 py-1">
                                    <a class="text-blue-700" target="_blank" href="{{asset('storage/'.$case->case_document)}}" download>Download</a></td>
                                <td class="px-2 py-1"><b>Name: </b>{{$case->client_name}} <br> <b>Contact:</b> {{$case->client_contact}} </td>
                                <td class="px-2 py-1">{{$case->case_deadline}}</td>
                                <td class="px-2 py-1">{{$case->case_status}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-3">
                    <h4 class="p-2 font-semibold text-xl text-gray-800 bg-gray-50 leading-tight">
                        <i class="bi bi-folder"></i> Cases Ruling
                        <a href="{{route('cases.index')}}"
                           class="py-2 px-4 text-dark text-sm float-right font-semibold rounded-sm border border-grey-200 bg-grey-700">
                            <i class="bi bi-plus"></i> Add Ruling
                        </a>
                    </h4>
                    <table class="w-full table table-bordered text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-2 py-1">Case#</th>
                            <td class="px-2 py-1">{{$case->case_type}}</td>
                        </tr>
                        <tr>
                            <th scope="col" class="px-2 py-1">Ruling</th>
                            <td class="px-2 py-1">{{$case->case_type}}</td>
                        </tr>
                        <tr>
                            <th scope="col" class="px-2 py-1">Result</th>
                            <td class="px-2 py-1">{{$case->case_type}}</td>
                        </tr>
                        <tr>
                            <th scope="col" class="px-2 py-1">Date</th>
                            <td class="px-2 py-1">{{$case->case_type}}</td>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>

        <div class="py-3">
            <div class="max-w-7xl mx-auto sm:px-3 lg:px-3">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <h2 class="p-3 font-semibold text-xl text-gray-800 bg-gray-50 leading-tight">
                            <i class="bi bi-link"></i>Related Cases
                        </h2>

                    </div>
                </div>
            </div>
        </div>

        <div class="py-3">
            <div class="max-w-7xl mx-auto sm:px-3 lg:px-3">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <h2 class="p-3 font-semibold text-xl text-gray-800 bg-gray-50 leading-tight">
                            <i class="bi bi-search"></i> AI Research
                        </h2>

                    </div>
                </div>
            </div>
        </div>


    </div>
</x-app-layout>
