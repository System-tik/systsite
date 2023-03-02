<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <section class="bg-white dark:bg-gray-900">
        <div class="flex flex-col items-center w-full mb-8 text-center lg:mb-16">
            <h2 class="flex mb-4 text-4xl font-extrabold tracking-tight text-gray-900 dark:text-white">Voici l'ensemble  des nos services</h2>
            <p class="text-gray-500 sm:text-xl dark:text-gray-400">Avec Systematic les services sont faites avec soin, ne vous inquieté plus de rien </p>
        </div>

        @foreach ($services as $service)
            @if(($loop->index % 2) == 0)
                <div class="grid grid-cols-12 px-4 py-8 lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 lg:px-52 xl:px-72 bg-gray-100" id="servi{{$service->id}}">
                    <div class="flex flex-col justify-center max-w-screen-md col-span-7">
                        <h2 class="mb-4 text-4xl font-extrabold tracking-tight text-gray-900 dark:text-white">{{$service->titre}}</h2>
                        <p class="mb-8 font-light text-gray-500 sm:text-xl dark:text-gray-400"><?php echo $service['description'] ?></p>
                    </div>
                    <div class="col-span-5">

                        {{--<img src="{{$service->getMedia('services')}}" alt="" srcset="">--}}
                        {{$service->getMedia('services')[0]}}
                    </div>
                </div>
            @else
                <div class="grid grid-cols-12 px-4 py-8 lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 lg:px-52 xl:px-72" id="servi{{$service->id}}">

                    <div class="col-span-5">

                        {{--<img src="{{$service->getMedia('services')}}" alt="" srcset="">--}}
                        {{$service->getMedia('services')[0]}}
                    </div>
                    <div class="flex flex-col justify-center max-w-screen-md col-span-7 items-end">
                        <h2 class="mb-4 text-4xl font-extrabold tracking-tight text-gray-900 dark:text-white">{{$service->titre}}</h2>
                        <p class="mb-8 font-light text-gray-500 sm:text-xl dark:text-gray-400"><?php echo $service['description'] ?></p>
                    </div>
                </div>
            @endif

        @endforeach

    </section>
</div>
{{-- <div class="flex flex-col space-y-4 sm:flex-row sm:space-y-0 sm:space-x-4">
                        <a href="#" class="inline-flex items-center justify-center px-4 py-2.5 text-base font-medium text-center text-white bg-primary-700 rounded-lg hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                            Get started
                        </a>
                        <a href="#" class="inline-flex items-center justify-center px-4 py-2.5 text-base font-medium text-center text-gray-900 border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                            <svg class="w-5 h-5 mr-2 -ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z"></path></svg>
                            View more
                        </a>
                    </div> --}}
