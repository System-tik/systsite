{{--<div>
    --}}{{-- Because she competes with no one, no one can compete with her. --}}{{--
    <section class="bg-white dark:bg-gray-900">
        <div class="flex flex-col items-center w-full mb-8 text-center lg:mb-16 px-10 lg:px-0">
            <h2 class="flex mb-4 lg:text-4xl font-extrabold tracking-tight text-gray-900 dark:text-white text-xl">Voici l'ensemble  des nos services</h2>
            <p class="text-gray-500 sm:text-xl dark:text-gray-400">Avec Systematic les services sont faites avec soin, ne vous inquieté plus de rien </p>
        </div>

        @foreach ($services as $service)
            @if(($loop->index % 2) == 0)
                <div class="grid grid-cols-1 px-4 py-8 lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 lg:px-52 xl:px-72 bg-gray-100 " id="servi{{$service->id}}">
                    <div class="flex flex-col justify-center  col-span-7 max-w-screen-md">
                        <h2 class="mb-4 lg:text-4xl font-extrabold tracking-tight text-gray-900 dark:text-white text-xl">{{$service->titre}}</h2>
                        <div class="flex md:hidden justify-center items-center text-center  w-full flex-col" >
                            {{$service->getMedia('services')[0]}}
                        </div>
                        <p class="mb-8 font-light text-gray-500 sm:text-xl dark:text-gray-400"><?php echo $service['description'] ?></p>
                    </div>
                    <div class="col-span-5 hidden md:block">

                        --}}{{--<img src="{{$service->getMedia('services')}}" alt="" srcset="">--}}{{--
                        {{$service->getMedia('services')[0]}}
                    </div>
                </div>
            @else
                <div class="grid grid-cols-1 px-4 py-8 lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 lg:px-52 xl:px-72" id="servi{{$service->id}}">

                    <div class="col-span-5 hidden md:block">

                        --}}{{--<img src="{{$service->getMedia('services')}}" alt="" srcset="">--}}{{--
                        {{$service->getMedia('services')[0]}}
                    </div>
                    <div class="flex flex-col justify-center max-w-screen-md col-span-7 items-end">
                        <h2 class="mb-4 lg:text-4xl font-extrabold tracking-tight text-gray-900 dark:text-white text-xl">{{$service->titre}}</h2>
                        <div class="flex md:hidden justify-center items-center text-center  w-full flex-col" >
                            {{$service->getMedia('services')[0]}}
                        </div>
                        <p class="mb-8 font-light text-gray-500 sm:text-xl dark:text-gray-400"><?php echo $service['description'] ?></p>
                    </div>
                </div>
            @endif

        @endforeach

    </section>
</div>--}}


<!-- ===== Team Start ===== -->
<section class="i pg ji gp uq  fh rm" id="services">
    <!-- Bg Shapes -->

    <img src="images/shape-08.svg" alt="Shape Bg" class="h q r" />
    <img src="images/shape-09.svg" alt="Shape" class="of h y z/2" />
    <img src="images/shape-10.svg" alt="Shape" class="h _ aa" />
    <img src="images/shape-11.svg" alt="Shape" class="of h m ba" />

    <!-- Section Title Start -->
    <div
        x-data="{ sectionTitle: `Nos services`, sectionTitleText: `Nous mettons à votre disposition tous les services numériques indispensables de l’ère pour booster votre croissance.`}"
    >
        <div class="animate_top bb ze rj ki xn vq">
            <h2
                x-text="sectionTitle"
                class="fk vj pr kk wm on/5 gq/2 bb _b"
            >
            </h2>
            <p class="bb on/5 wo/5 hq" x-text="sectionTitleText"></p>
        </div>

        <div class="bb ze ki xn yq mb en pt-20">
            <div class="wc qf pn xo ng">
                <!-- Service Item -->
                @foreach ($services as $service)
                <div class="animate_top sg oi pi zq ml il am cn _m text-justify">
                    <img src="{{$service->getMedia()[0]['original_url']}}" alt="Icon" />
                    <h4 class="ek zj kk wm nb _b">{{ $service->titre }}</h4>
                    <p>
                        <?php echo $service->description ?>
                    </p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Section Title End -->

    <div class="bb ze i va ki xn xq jb jo">
        <div class="wc qf pn xo gg cp">

        </div>
    </div>
</section>

