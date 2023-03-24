<div id="realisations">
    {{-- The Master doesn't talk, he acts. --}}
    <section class="text-center  dark:bg-gray-900">
        <div class="px-4 py-8 lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 lg:px-52 xl:px-72">
            <div class="flex flex-col items-center w-full mb-8 text-center lg:mb-16">
                <h2 class=" mb-4  tracking-tight fk vj zp pr kk wm qb">Ils nous ont fait confiance</h2>
                <p class="text-gray-500 sm:text-xl dark:text-gray-400">Les réalisations faites par Systematik</p>
            </div>
            <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0 ">
                @foreach($realisations as $realisation)

                    <a class="flex flex-col items-center" href="{{$realisation->url}}" target="_blanc">
                        <div class="flex items-center justify-center mb-4 rounded-full w-24 h-24">
                            <img src="{{$realisation->getMedia('realisations')[0]['original_url']}}" class="text-primary-600  dark:text-primary-300">
                            
                        </div>
                        <h3 class="mb-2 text-xl font-bold dark:text-white">{{$realisation->titre}}</h3>
                        {{-- <p class="text-gray-500 dark:text-gray-400 "></p> --}}
                    </a>
                @endforeach
            </div>
        </div>
      </section>
</div>
