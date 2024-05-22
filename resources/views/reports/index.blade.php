<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="fw-bold mb-3"> {{ __("Dashboard Reports ") }}</h1>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <h5 style="background-color: saddlebrown" class="card-header text-white"> Users Reports</h5>
                                <table class="w-full table table-striped">
                                    <thead>
                                    <tr class="bg-gray-100">
                                        <th class="py-3 px-4 text-left">Description</th>
                                        <th class="py-3 px-4 text-left">Count</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="border-t text-sm">
                                        <td class="py-3 px-4"><i class="fas fa-star text-info"></i>Users Total</td>
                                        <td class="py-3 px-4">{{$usersCount}}</td>
                                    </tr>
                                    <tr class="border-t text-sm">
                                        <td class="py-3 px-4"><i class="fas fa-star text-info"></i>Lawyers</td>
                                        <td class="py-3 px-4">{{$lawyersCount}}</td>
                                    </tr>
                                    <tr class="border-t text-sm">
                                        <td class="py-3 px-4"><i class="fas fa-star text-info"></i>Customers</td>
                                        <td class="py-3 px-4">{{$customersCount}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-12 mt-4">
                            <div class="card">
                                <h5 style="background-color: sandybrown" class="card-header text-white"> Cases Reports</h5>
                                <table class="w-full table table-striped">
                                    <thead>
                                    <tr class="bg-gray-100">
                                        <th class="py-3 px-4 text-left">Description</th>
                                        <th class="py-3 px-4 text-left">Count</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="border-t text-sm">
                                        <td class="py-3 px-4"><i class="fas fa-star text-info"></i>Cases Total</td>
                                        <td class="py-3 px-4">{{$casesCount}}</td>
                                    </tr>
                                    <tr class="border-t text-sm">
                                        <td class="py-3 px-4"><i class="fas fa-star text-info"></i>Pending Cases</td>
                                        <td class="py-3 px-4">{{$pendingCount}}</td>
                                    </tr>
                                    <tr class="border-t text-sm">
                                        <td class="py-3 px-4"><i class="fas fa-star text-info"></i>Auctioned Cases</td>
                                        <td class="py-3 px-4">{{$auctionedsCount}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
