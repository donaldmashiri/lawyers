<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <i class="bi bi-newspaper"></i> {{ __('News & Articles') }}
            <a href="{{route('news.create')}}"
               class="py-2 px-4 text-white text-sm float-right font-semibold rounded-lg border border-yellow-600 bg-yellow-600">
                <i class="bi bi-plus"></i>Add News / Article
            </a>
        </h2>
    </x-slot>

    <div class="py-12">
{{--        <img src="{{asset('images/law.jpg')}}" alt="" srcset="">--}}
        <div class="max-w-7xl mx-auto sm:px-3 lg:px-3">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <h1 class="p-3 text-black">News</h1>
                <div class="p-3 text-gray-900">
                    <div id="default-carousel" class="relative w-full" data-carousel="slide">
                        <!-- Carousel wrapper -->
                        <div class="relative h-56 overflow-hidden rounded-lg md:h-36">
                            <!-- Item 1 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="{{asset('images/news1.png')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                            </div>
                            <!-- Item 2 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="{{asset('images/news2.jpg')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                            </div>
                            <!-- Item 3 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="{{asset('images/news3.png')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                            </div>
                        </div>
                        <!-- Slider indicators -->
                        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                        </div>
                        <!-- Slider controls -->
                        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
                        </button>
                        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
                        </button>
                    </div>

                </div>
            </div>
        </div>


        <div class="max-w-7xl mx-auto sm:px-3 lg:px-3">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="grid grid-cols-2 gap-2">
                    @foreach($news as $new)
                        <a href="#" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                            <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="{{asset('images/news1.png')}}" alt="">
                            <div class="flex flex-col justify-between p-4 leading-normal">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$new->title}}</h5>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><b>Summary:</b> {!! $new->summary !!}
                                    <b>Published at:</b> {{$new->created_at}} </p>
                            </div>
                        </a>
                    @endforeach
                </div>
                {{$news->links()}}
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="">
                    <p class="mb-2 p-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Research Tool:</p>
                    <div class="flex flex-col p-1 justify-between leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Westlaw:</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"> Westlaw is a comprehensive online legal research platform that offers access to an extensive collection of legal resources, including case law, statutes, regulations, secondary materials, and legal news. It provides powerful search capabilities and advanced features to facilitate efficient legal research. </p>
                    </div>
                    <div class="flex flex-col p-1 justify-between leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">LexisNexis::</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"> LexisNexis is another widely used legal research tool that offers a vast database of legal materials, including court cases, statutes, legal publications, and news. It provides sophisticated search functionalities, citation analysis tools, and customizable alerts to keep lawyers updated on relevant legal developments. </p>
                    </div>
                    <div class="flex flex-col p-1 justify-between leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Bloomberg Law:</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Bloomberg Law is a comprehensive legal research platform that combines legal research, news, and analysis. It offers access to a wide range of legal materials, including court cases, statutes, regulations, and secondary sources. It also provides news alerts, legal analysis, and practice tools tailored to specific legal practice areas. </p>
                    </div>
                    <div class="flex flex-col p-1 justify-between leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Fastcase:</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Fastcase is a user-friendly legal research tool that provides access to a large database of primary legal materials, including cases, statutes, regulations, and court rules. It offers powerful search capabilities, interactive visualizations, and advanced filtering options to help lawyers quickly find relevant legal information. </p>
                    </div>
                    <div class="flex flex-col p-1 justify-between leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Fastcase:</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Casetext is an innovative legal research platform that leverages artificial intelligence and machine learning technologies to enhance legal research efficiency. It offers a vast collection of case law, statutes, regulations, and secondary sources, along with AI-powered features such as CARA, an advanced legal research assistant.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-app-layout>
