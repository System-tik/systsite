{{--

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
                            --}}
{{-- @elseif ($contact->type == 'Reseau social')
                            <a href="{{$contact->contenu}}" target="_blanc" class="hover:underline">{{$contact->contenu}}</a> --}}{{--

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
--}}



<section id="footer" class="i pg fh rm ji gp uq">
    <!-- Bg Shapes -->
    <img src="images/shape-06.svg" alt="Shape" class="h aa y" />
    <img src="images/shape-03.svg" alt="Shape" class="h ca u" />
    <img src="images/shape-07.svg" alt="Shape" class="h w da ee" />
    <img src="images/shape-12.svg" alt="Shape" class="h p s" />
    <img src="images/shape-13.svg" alt="Shape" class="h r q" />

    <!-- Section Title Start -->
    <div
        x-data="{ sectionTitle: `Restez connecté`, sectionTitleText: `Voici nos coordonnées`}"
    >
        <div class="animate_top bb ze rj ki xn vq">
            <h2
                x-text="sectionTitle"
                class="fk vj pr kk wm on/5 gq/2 bb _b"
            >
            </h2>
            <p class="bb on/5 wo/5 hq" x-text="sectionTitleText"></p>
        </div>


    </div>
    <!-- Section Title End -->

    <div class="i va bb ye ki xn wq jb mo">
        <div class="tc uf sn tf rn un zf xl:gap-10">
            <div class="animate_top w-full mn/5 to/3 vk sg hh sm yh rq i pg">
                <!-- Bg Shapes -->
                <img src="images/shape-03.svg" alt="Shape" class="h la x wd" />
                <img src="images/shape-06.svg" alt="Shape" class="h la ma ne kf" />

                @foreach ($contacts as $contact)
                <div class="fb">
                    <h4 class="wj kk wm cc">{{ $contact->type }}</h4>

                    @if ($contact->type == 'Email')
                        <a href="mailto:{{$contact->contenu}}" class="hover:underline">{{$contact->contenu}}</a>
                    @elseif ($contact->type == 'Tel')
                        <a href="tel:{{$contact->contenu}}" class="hover:underline">{{$contact->contenu}}</a>
                    @elseif ($contact->type == 'Reseau social')
                        <a href="{{$contact->contenu}}" target="_blanc" class="hover:underline">{{$contact->contenu}}</a>
                    @elseif ($contact->type == 'Adresse')
                        <p><b>{{$contact->type}} : </b>{{$contact->contenu}}</p>
                    @endif
                </div>
                @endforeach


                <span class="rc nd rh tm lc fb"></span>

                <div>
                    <h4 class="wj kk wm qb">Reseaux sociaux</h4>
                    <ul class="tc wf fg">
                        @foreach($sociaux as $so)
                        <li>
                            <a href="{{ $so->url }}" target="_blank">
                                <svg class="vh ul cl il" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_48_1499)">
                                        <path d="{{ $so->icon }}" fill="" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_48_1499">
                                            <rect width="24" height="24" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="animate_top w-full nn/5 vo/3 vk sg hh sm yh tq">
                <livewire:components.c-message />
            </div>
        </div>
    </div>
</section>
<!-- ===== Contact End ===== -->

<!-- ===== CTA Start ===== -->
<section class="i pg gh ji">
    <!-- Bg Shape -->
    <img class="h p q" src="images/shape-16.svg" alt="Bg Shape" />

    <div class="bb ye i z-10 ki xn dr">
        <div class="tc uf sn tn un gg">
            <div class="animate_left to/2">
                <h2 class="fk vj zp pr lk ac">
                    {{$abouts[5]->titre}}
                </h2>
                <p class="lk text-white">
                    <?php echo $abouts[5]->description ?>
                </p>
            </div>
            <div class="animate_right bf">
                <a href="#footer" class="vc ek kk hh rg ol il cm gi hi">
                    Commencez maintenant
                </a>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="bb ze ki xn 2xl:ud-px-0">
        <!-- Footer Top -->
        <div class="ji gp">
            <div class="tc uf ap gg fp">
                <div class="animate_top zd/2 to/4">
                    <a href="index.html">
                        <img src="imgs/logo.jpg" alt="Logo" class="om w-12" />
                        <img src="imgs/logo.jpg" alt="Logo" class="xc nm w-12" />
                    </a>

                    <p class="lc fb">Le partenaire numérique des entrepreneurs.</p>

                    <ul class="tc wf cg">
                        @foreach($sociaux as $so)
                        <li>
                            <a href="{{ $so->url }}" target="_blank">
                                <svg class="vh ul cl il" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_48_1499)">
                                        <path d="{{ $so->icon }}" fill="" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_48_1499">
                                            <rect width="24" height="24" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>

                <div class="vd ro tc sf rn un gg vn">
                    <div class="animate_top">
                        <h4 class="kk wm tj ec">Liens rapide</h4>

                        <ul>
                            <li><a href="#header" class="sc xl vb">Accueil</a></li>
                            <li><a href="#system" class="sc xl vb">Systematik</a></li>
                            <li><a href="#services" class="sc xl vb">Services</a></li>
                            <li><a href="#realisations" class="sc xl vb">Réalisations</a></li>
                        </ul>
                    </div>

                    <div class="animate_top">
                        <h4 class="kk wm tj ec">Services</h4>

                        <ul>
                            @foreach ($services as $service)
                            <li><a href="#services" class="sc xl vb">{{ $service->titre }}</a></li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="animate_top">
                        <h4 class="kk wm tj ec">Réalisations</h4>

                        <ul>
                            @foreach ($realisations as $realisation)
                            <li><a href="#realisations" class="sc xl vb">{{ $realisation->titre }}</a></li>
                            @endforeach
                        </ul>
                    </div>


                </div>
            </div>
        </div>
        <!-- Footer Top -->

        <!-- Footer Bottom -->
        <div class="bh ch pm tc uf sf yo wf xf ap cg fp bj">
            {{--<div class="animate_top">
                <ul class="tc wf gg">
                    <li><a href="#" class="xl">English</a></li>
                    <li><a href="#" class="xl">Privacy Policy</a></li>
                    <li><a href="#" class="xl">Support</a></li>
                </ul>
            </div>--}}

            <div class="animate_top">
                <p>&copy; 2023 Systematik. All rights reserved</p>
            </div>
        </div>
        <!-- Footer Bottom -->
    </div>
</footer>


