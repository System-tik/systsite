<!-- ===== Small Features Start ===== -->
<section id="features" class="md:pt-24">
    <div class="bb ze ki yn 2xl:ud-px-12.5">
        <div class="flex gap-5 md:flex-row md:gap-2 flex-col justify-between items-stretch md:hidden lg:flex">
            <!-- Small Features Item -->
            <div class="animate_top kn to/3 tc cg oq">
                <div class="tc wf xf cf ae cd rg mh ">
                    <img src="images/icon-01.svg" alt="Icon" />
                </div>
                <div>
                    <h4 class="ek yj go kk wm xb ">{{ $abouts[1]->titre }}</h4>
                    <p class="text-justify">{{ $abouts[1]->description }}</p>
                </div>
            </div>

            <!-- Small Features Item -->
            <div class="animate_top kn to/3 tc cg oq">
                <div class="tc wf xf cf ae cd rg nh">
                    <img src="images/icon-02.svg" alt="Icon" />
                </div>
                <div>
                    <h4 class="ek yj go kk wm xb">{{ $abouts[2]->titre }}</h4>
                    <p class="text-justify">{{ $abouts[2]->description }}</p>
                </div>
            </div>

            <!-- Small Features Item -->
            <div class="animate_top kn to/3 tc cg oq">
                <div class="tc wf xf cf ae cd rg oh">
                    <img src="images/icon-03.svg" alt="Icon" />
                </div>
                <div>
                    <h4 class="ek yj go kk wm xb">{{ $abouts[3]->titre }}</h4>
                    <p class="text-justify">{{ $abouts[3]->description }}</p>
                </div>
            </div>
        </div>
        <div class="gap-5 md:grid-cols-3 md:gap-2  items-stretch hidden md:grid lg:hidden ">
            <!-- Small Features Item -->
            <div class="animate_top text-center  flex flex-col justify-center items-center ">
                <div class="tc wf xf cf ae cd rg mh ">
                    <img src="images/icon-01.svg" alt="Icon" />
                </div>
                <div class="text-center">
                    <h4 class="ek yj go kk wm xb">{{ $abouts[1]->titre }}</h4>
                    <p class="">{{ $abouts[1]->description }}</p>
                </div>
            </div>

            <!-- Small Features Item -->
            <div class="animate_top text-center  flex flex-col justify-center items-center">
                <div class="tc wf xf cf ae cd rg nh">
                    <img src="images/icon-02.svg" alt="Icon" />
                </div>
                <div>
                    <h4 class="ek yj go kk wm xb">{{ $abouts[2]->titre }}</h4>
                    <p class="text-justify">{{ $abouts[2]->description }}</p>
                </div>
            </div>

            <!-- Small Features Item -->
            <div class="animate_top text-center  flex flex-col justify-center items-center">
                <div class="tc wf xf cf ae cd rg oh">
                    <img src="images/icon-03.svg" alt="Icon" />
                </div>
                <div>
                    <h4 class="ek yj go kk wm xb">{{ $abouts[3]->titre }}</h4>
                    <p class="text-justify">{{ $abouts[3]->description }}</p>
                </div>
            </div>
        </div>
        
    </div>
</section>
<!-- ===== Small Features End ===== -->
<!-- ===== Small Features End ===== -->

<!-- ===== About Start ===== -->
<section class="ji gp uq 2xl:ud-py-35 pg" id="system">
    <div class="bb ze ki xn wq">
        <div class="tc wf gg qq">
            <!-- About Images -->
            <div class="animate_left xc gn gg jn/2 i">
                <div>
                    <img src="images/shape-05.svg" alt="Shape" class="h -ud-left-5 x" />
                    <img src="imgs/1.png" alt="About" class="ib" />
                    <img src="imgs/2.png" alt="About" />
                </div>
                <div>
                    <img src="images/shape-06.svg" alt="Shape" />
                    <img src="imgs/3.png" alt="About" class="ob gb" />
                    <img src="images/shape-07.svg" alt="Shape" class="bb" />
                </div>
            </div>

            <!-- About Content -->
            <div class="animate_right jn/2 text-justify">
                <h4 class="ek yj mk gb">Pourquoi nous choisir</h4>
                <h2 class="fk vj zp pr kk wm qb">{{ $abouts[4]->titre }}</h2>
                <p class="uo text-justify"><?php echo $abouts[4]->description ?></p>

                <a href="https://www.youtube.com/watch?v=wJr3KQiO40g" data-fslightbox class="vc wf hg mb">
                <span class="tc wf xf be dd rg i gh ua">
                  <span class="nf h vc yc vd rg gh qk -ud-z-1"></span>
                  <img src="images/icon-play.svg" alt="Play" />
                </span>
                    <span class="kk">A visionner</span>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- ===== About End ===== -->
