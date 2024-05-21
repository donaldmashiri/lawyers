<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <i class="bi bi-briefcase"></i> Lawyer Cases
        </h2>
    </x-slot>

    <div class="py-12">
        @include('layouts.messages')
        <div class="max-w-7xl mx-auto sm:px-3 lg:px-3">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <h1 class="p-3 text-black bg-gray-200">Laywer Details</h1>
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-2 py-1">#</th>
                            <th scope="col" class="px-2 py-1">Name</th>
                            <th scope="col" class="px-2 py-1">Type</th>
                            <th scope="col" class="px-2 py-1">Email</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="px-2 py-1">{{$lawyer->id}}</td>
                                <td class="px-2 py-1">{{$lawyer->name}}</td>
                                <td class="px-2 py-1">{{$lawyer->user_type}}</td>
                                <td class="px-2 py-1">{{$lawyer->email}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <hr>
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-5">

                    <h4 class="p-2 font-semibold text-xl text-gray-800 bg-gray-400 leading-tight">
                        <i class="bi bi-folder"></i> Cases
                    </h4>

                    @if($cases->count()>0)
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-2 py-1">#</th>
                                <th scope="col" class="px-2 py-1">Type</th>
                                <th scope="col" class="px-2 py-1">Description</th>
                                <th scope="col" class="px-2 py-1">Deadline</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($cases as $case)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <td class="px-2 py-1">CS00{{$case->id}}</td>
                                    <td class="px-2 py-1">{{$case->case_type}}</td>
                                    <td class="px-2 py-1">{!! $case->case_description !!}</td>
                                    <td class="px-2 py-1">{{$case->case_deadline}}</td>
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

        <div class="py-3">
            <div class="max-w-7xl mx-auto sm:px-3 lg:px-3 mt-4">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <h4 class="p-2 font-semibold text-xl text-gray-800 bg-gray-400 leading-tight">
                            <i class="bi bi-folder"></i> Request
                            <a href="" data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                               class="p-1 text-white text-sm float-right font-semibold rounded-sm border border-grey-200 bg-blue-400">
                                <i class="bi bi-plus"></i> Add Request
                            </a>
                        </h4>

                        @if($customer_requests->count()>0)
                            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-2 py-1">#</th>
                                    <th scope="col" class="px-2 py-1">details</th>
                                    <th scope="col" class="px-2 py-1">Payments</th>
                                    <th scope="col" class="px-2 py-1">Date</th>
                                    <th scope="col" class="px-2 py-1"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($customer_requests as $data)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <td class="px-2 py-1">{{$data->id}}</td>
                                        <td class="px-2 py-1">{!! $data->details !!}</td>
                                        <td class="px-2 py-1">{{$data->payment}}
                                            <br>
                                        @if($data->payment === 'paid')
                                                <!-- join_zoom_meeting.blade.php -->
                                                <a href="https://zoom.us/j/99798397225?pwd=eE4zcGorMU1oU3R6TDZwMUd1QnVGUT09" class="text-red-500" target="_blank">Video Conference Meeting Link</a>

                                            @endif
                                        </td>
                                        <td class="px-2 py-1">{{$data->created_at}}</td>
                                        <td class="px-2 py-1">
                                            <form id="payment-form-{{ $data->id }}" action="{{ route('requests.update', $data->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <input type="hidden" name="payment" value="paid">
                                                <button type="submit" id="paynow-button-{{ $data->id }}">
                                                    <img src="https://www.paynow.co.zw/Content/Buttons/Medium_buttons/button_pay-now_medium.png" style="border:0" />
                                                </button>
                                            </form>
                                        </td>

                                        <script>
                                            document.getElementById('payment-form-{{ $data->id }}').addEventListener('submit', function(event) {
                                                event.preventDefault(); // Prevent the default form submission

                                                const form = event.target;
                                                const formData = new FormData(form);

                                                fetch(form.action, {
                                                    method: 'POST',
                                                    headers: {
                                                        'X-CSRF-TOKEN': formData.get('_token')
                                                    },
                                                    body: formData
                                                })
                                                    .then(response => {
                                                        if (response.ok) {
                                                            // If the update was successful, open the Paynow link in a new tab
                                                            window.open('https://www.paynow.co.zw/Payment/Link/?q=c2VhcmNoPWRvbmFsZHRvbmRlbWFzaGlyaSU0MGdtYWlsLmNvbSZhbW91bnQ9MS4wMCZyZWZlcmVuY2U9bGF5d2VyJmw9MQ%3d%3d', '_blank');
                                                        } else {
                                                            // Handle the error if the update failed
                                                            alert('Failed to update payment status.');
                                                        }
                                                    })
                                                    .catch(error => console.error('Error:', error));
                                            });
                                        </script>


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

    </div>


    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Enter Cases </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form method="POST" action="{{route('requests.store') }}">
                        @csrf
                        <div class="py-2 px-2">

                            <input type="hidden" name="lawyer_id" value="{{$lawyer->id}}">
                            <div class="mt-2">
                                <x-input-label for="details" :value="__('Enter Details')" />
                                <input id="details" type="hidden" name="details">
                                <trix-editor input="details"></trix-editor>
                                <x-input-error :messages="$errors->get('case_ruling')" class="mt-2" />
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

</x-app-layout>
