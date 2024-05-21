<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <i class="bi bi-briefcase"></i> Show Case CS00{{$case->id}}
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
                <hr>
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-5">

                    <h4 class="p-2 font-semibold text-xl text-gray-800 bg-gray-400 leading-tight">
                        <i class="bi bi-folder"></i> Cases Ruling
                        <a href="" data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                           class="p-1 text-white text-sm float-right font-semibold rounded-sm border border-grey-200 bg-blue-400">
                            <i class="bi bi-plus"></i> Add Ruling
                        </a>
                    </h4>

                    @if($caseRulings->count()>0)

                        <table class="w-full table table-bordered text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-2 py-1">Case#</th>
                                <th scope="col" class="px-2 py-1">Ruling</th>
                                <th scope="col" class="px-2 py-1">Result</th>
                                <th scope="col" class="px-2 py-1">Date</th>
                            </thead>
                            <tbody>
                                @foreach($caseRulings as $caseRuling)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <td class="px-2 py-1">CS00{{$caseRuling->cases_id}}</td>
                                        <td class="px-2 py-1">{!! $caseRuling->case_ruling  !!}</td>
                                        <td class="px-2 py-1">
                                            @if($case->case_results == 'pass')
                                                <p class="text-green-600 font-bold">{{$caseRuling->case_results}}</p>
                                            @else
                                                <p class="text-green-600">{{$caseRuling->case_results}}</p>
                                            @endif

                                        </td>
                                        <td class="px-2 py-1">{{$caseRuling->created_at}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <h4 class="p-2 font-semibold text-sm text-white text-center bg-red-600 leading-tight">No Case Ruling Done</h4>
                    @endif
                </div>
            </div>
        </div>

        <div class="py-3">
            <div class="max-w-7xl mx-auto sm:px-3 lg:px-3 mt-4">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <h4 class="p-2 font-semibold text-xl text-gray-800 bg-gray-400 leading-tight">
                            <i class="bi bi-link"></i> Related Cases
                        </h4>

                        @if($caseResearches->count()>0)
                            <table class="w-full table table-bordered text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-2 py-1">Case#</th>
                                    <th scope="col" class="px-2 py-1">Type</th>
                                    <th scope="col" class="px-2 py-1">Description</th>
                                    <th scope="col" class="px-2 py-1">Ruling</th>
                                </thead>
                                <tbody>
                                @foreach($caseResearches as $caseResearch)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <td class="px-2 py-1">CS00{{$caseResearch->id}}</td>
                                        <td class="px-2 py-1">{{$caseResearch->case_type}}</td>
                                        <td class="px-2 py-1">{!! $caseResearch->case_description  !!}</td>
                                        <td class="px-2 py-1">
                                            @foreach($caseResearch->caseRulings as $caseRuling)
                                                {{$caseRuling->case_results}}
                                            @endforeach
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @else
                            <h4 class="p-2 font-semibold text-sm text-center text-white bg-red-600 leading-tight">No Related Cases Found</h4>
                        @endif
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

                        @foreach($researches as $research)
                            <p class="mb-2 p-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$research->type}}</p>
                            <div class="flex flex-col p-1 justify-between leading-normal">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Ruling: {{$research->ruling}}</h5>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"> Details: {{$research->details}}
                                    <br>Date: {{$research->date}}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Ruling</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <form method="POST" action="{{route('casesruling.store') }}">
                            @csrf
                            <div class="py-2 px-2">
                                <input type="hidden" name="cases_id" value="{{$case->id}}">

                                <div class="mt-2">
                                    <x-input-label for="case_ruling" :value="__('Case Ruling')" />
                                    <input id="case_ruling" type="hidden" name="case_ruling">
                                    <trix-editor input="case_ruling"></trix-editor>
                                    <x-input-error :messages="$errors->get('case_ruling')" class="mt-2" />
                                </div>

                                <div class="mt-4">
                                    <x-input-label for="case_results" :value="__('Case Results')" />
                                    <select name="case_results" id="case_results" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" >
                                        <option value="">Select Results</option>
                                        <option value="pass">Pass</option>
                                        <option value="fail">Fail</option>
                                        <option value="extended">Extended</option>
                                    </select>
                                    <x-input-error :messages="$errors->get('user_type')" class="mt-2" />
                                </div>


                                <div class="modal-footer">
                                    <button type="button" class="bg-gray-50" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="py-2 px-4 text-dark text-sm float-right font-semibold rounded-sm border border-blue-400 bg-blue-300">Save</button>
                                </div>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


    </div>
</x-app-layout>
