<div>
    {{-- The Master doesn't talk, he acts. --}}
    <section class="text-center bg-gray-50 dark:bg-gray-900">
        <div class="px-4 py-8 lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 lg:px-52 xl:px-72">
            <div class="flex flex-col items-center w-full mb-8 text-center lg:mb-16">
                <h2 class="flex mb-4 text-4xl font-extrabold tracking-tight text-gray-900 dark:text-white">Nos realisations</h2>
                <p class="text-gray-500 sm:text-xl dark:text-gray-400">Les realisations faites par Systematik sonts la preuve meme du professionnalisme  </p>
            </div>
            <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0 ">
                @foreach($realisations as $realisation)
                
                    <div class="flex flex-col items-center">
                        <div class="flex items-center justify-center w-10 h-10 mb-4 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                            <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd"></path><path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z"></path></svg>                    
                        </div>
                        <h3 class="mb-2 text-xl font-bold dark:text-white">{{$realisation->titre}}</h3>
                        <p class="text-gray-500 dark:text-gray-400 ">{{$realisation->url}}</p>
                    </div>
                @endforeach
            </div>
        </div>
      </section>
</div>
