
<footer class="p-4 bg-gray-200 sm:p-6 dark:bg-gray-900 lg:px-52 xl:px-72 lg:py-20">
    <div class="md:flex md:justify-between">
        <div class="mb-6 md:mb-0">
            <a href="#home" class="flex items-center">
                <img src="{{asset('imgs/logo.jpg')}}" class="h-8 mr-3" alt="FlowBite Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Systematik</span>
            </a>
        </div>
        <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
            <div>
                <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Services</h2>
                @foreach ($services as $service)
                    <ul class="text-gray-600 dark:text-gray-400">
                        <li class="mb-4">
                            <a href="#servi{{$service->id}}" class="hover:underline">{{$service->titre}}</a>
                        </li>
                    </ul>
                @endforeach
            </div>
            <div>
                <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Réalisations</h2>
                @foreach ($realisations as $realisation)    
                    <ul class="text-gray-600 dark:text-gray-400">
                        <li class="mb-4">
                            <a href="#realisations" class="hover:underline ">{{$realisation->titre}}</a>
                        </li>
                      
                    </ul>
                @endforeach
            </div>
            <div>
                <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Contacts</h2>
                @foreach ($contacts as $contact)
                    <ul class="text-gray-600 dark:text-gray-400">   
                        <li class="mb-4">
                            @if ($contact->type == 'Email')
                            <a href="mailto:{{$contact->contenu}}" class="hover:underline">{{$contact->contenu}}</a>
                            @elseif ($contact->type == 'Tel')
                            <a href="tel:{{$contact->contenu}}" class="hover:underline">{{$contact->contenu}}</a>
                            {{-- @elseif ($contact->type == 'Reseau social')
                            <a href="{{$contact->contenu}}" target="_blanc" class="hover:underline">{{$contact->contenu}}</a> --}}
                            @elseif ($contact->type == 'Adresse')
                            <p><b>{{$contact->type}} : </b>{{$contact->contenu}}</p>
                            @endif
                        </li>
                    </ul>
                @endforeach
            </div>
        </div>
    </div>
    <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
    <div class="sm:flex sm:items-center sm:justify-between">
        <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="https://flowbite.com/" class="hover:underline">Systematik</a>. All Rights Reserved.
        </span>
        <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
            @foreach($sociaux as $so)
            <a href="{{$so->url}}" class="text-gray-500 hover:text-gray-900 dark:hover:text-white" target="_blanc">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="{{$so->icon}}" clip-rule="evenodd" /></svg>
                <span class="sr-only">{{$so->type}}</span>
            </a>
            @endforeach
        </div>
    </div>
</footer>
