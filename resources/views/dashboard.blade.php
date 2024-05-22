<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                   <h1 class="fw-bold mb-3 display-4"> {{ __("Welcome ". Auth::user()->user_type .' : '. Auth::user()->name) }}</h1>
                    <p class="m-3">This Platform etc</p>
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>User Type</th>
                            <td>{{ Auth::user()->user_type }}</td>
                        </tr>
                        <tr>
                            <th>Full Names</th>
                            <td>{{ Auth::user()->name }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{ Auth::user()->email }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
