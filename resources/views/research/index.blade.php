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
                    <form action="{{ route('research.index') }}" method="get">
                        @csrf
                        <div class="p-2">
                            <label for="case_type">{{ __('Case Type') }}</label>
                            <input type="text" name="search" class="form-group form-control">
                            @if($errors->has('search'))
                                <span class="mt-2">{{ $errors->first('search') }}</span>
                            @endif
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <button type="submit" class="btn btn-dark text-dark ml-4">
                                {{ __('Get Help') }}
                            </button>
                        </div>
                    </form>

                    @if(isset($search))
                        @if($results->isNotEmpty())
                            <div class="mt-4">
                                <h2>{{ __('Search Results') }}</h2>
                                <ul>
                                    @foreach($results as $result)
                                        <li>{{ $result->type }} - {{ $result->details }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @else
                            <div class="mt-4">
                                <p class="alert alert-danger">{{ __('This is not related to Law.') }}</p>
                            </div>
                        @endif
                    @endif
                </div>
            </div>
        </div>

    </div>



</x-app-layout>
