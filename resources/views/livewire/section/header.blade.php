{{--<section class="bg-white dark:bg-gray-900 h-screen w-screen flex justify-center items-center svg" id="home" style="background-image: url('{{asset('imgs/bg2.gif')}}')">
    <div class="splide h-full">
        <div class="splide__track h-full">
            <div class="splide__list h-full">
                @foreach ($abouts as $ab)
                    <div class="splide__slide h-full">
                        <div class="grid  px-4 py-8 lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 lg:px-52 xl:px-72 h-full">
                            <div class="mr-auto place-self-center lg:col-span-7">
                                <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">{{$ab->titre}}</h1>
                                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400"><?php echo $ab->description ?></p>
                            </div>
                            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex justify-center items-center">
                                {{ $ab->getMedia()[0] }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>--}}




    <section class="gj do ir hj sp jr i pg " id="header">
    <!-- Hero Images -->
    <div class="xc fn zd/2 2xl:ud-w-187.5 bd 2xl:ud-h-171.5 h q r">
        <img src="images/shape-01.svg" alt="shape" class="xc 2xl:ud-block h t -ud-left-[10%] ua" />
        <img src="images/shape-02.svg" alt="shape" class="xc 2xl:ud-block h u p va" />
        <img src="images/shape-03.svg" alt="shape" class="xc 2xl:ud-block h v w va" />
        <img src="images/shape-04.svg" alt="shape" class="h q r" />
        <img src="imgs/i2.svg" alt="Woman" class="h q r ua" />
    </div>

    <!-- Hero Content -->
    <div class="bb ze ki xn 2xl:ud-px-0">
        <div class="tc _o">
            <div class="animate_left jn/2 text-justify">
                <h1 class="fk vj zp or kk wm wb">{{$abouts[0]->titre}}</h1>
                <p class="fq">
                    <?php echo $abouts[0]->description ?>
                </p>
                <div class="tc tf yo zf mb">
                    <span class="tc sf">
                        <a href="tel:+243810930187" class="inline-block ek xj kk wm"> Appelez le (00243) 81-09-30-187 </a>
                        <span class="inline-block">Pour toute question</span>
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>
