<div class="gj do ir hj sp jr i pg " style="" x-init="init({{$total}})" x-data="{
    index : 0,
    tab : [],
    tarif(ind, t){
        this.tab[t] = ind
        console.log(this.tab[t])
    },
    init(val){
        if(this.tab.length < val){
            for(i=0; i < val; i++) this.tab.push([0])
        }
        console.log(this.tab)
    }
}">
    {{-- Be like water. --}}
    <div class="sm:text-center bg-indigo-700 text-white py-5 px-5" >
        <h2 class="text-3xl font-bold tracking-tight  sm:text-4xl">{{$service->titre}}</h2>
        {{--<p class="mt-6 text-lg leading-8 text-gray-600"><?php echo $service['description'] ?></p>--}}
    </div>
    <div class="bg-white py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            @foreach($service->sous as $indexS => $sous)
            <div class="mx-auto mt-16 max-w-2xl rounded-3xl ring-1 ring-gray-200 sm:mt-20 lg:mx-0 lg:flex lg:max-w-none">
                <div class="p-8 sm:p-10 lg:flex-auto">
                    <h3 class="text-2xl font-bold tracking-tight text-gray-900">{{$sous->nom}}</h3>
                    <p class="mt-6 text-base leading-7 text-gray-600"><?php echo $sous['description'] ?></p>
                    <div class="mt-10 flex items-center gap-x-4">
                        <h4 class="flex-none text-sm md:text-lg font-semibold leading-6 text-indigo-600">Chosir le type de tarif qui vous convient</h4>
                        <div class="h-px flex-auto bg-gray-100"></div>
                    </div>
                    <ul role="list" class="mt-8 grid grid-cols-1 gap-4 text-sm leading-6 text-gray-600 sm:grid-cols-3 sm:gap-6">
                        @foreach($sous->tarifs as $indexT => $tar)
                        <li class="flex gap-x-3 cursor-pointer bg-gray-100 rounded-lg p-3 hover:bg-indigo-600 hover:text-white transition duration-300 text-center flex items-center justify-center" @click="tarif({{$indexT}}, {{$indexS}})">
                            {{--<svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                            </svg>--}}
                            {{$tar->titre}}

                        </li>
                        @endforeach
                    </ul>
                </div>
                @foreach($sous->tarifs as $tarif)
                    <div class="-mt-2 p-2 lg:mt-0 lg:w-full lg:max-w-md lg:flex-shrink-0" x-show="tab[{{$indexS}}] == {{$loop->index}}">
                        <div class="rounded-2xl bg-gray-50 py-10 text-center ring-1 ring-inset ring-gray-900/5 lg:flex lg:flex-col lg:justify-center lg:py-16">
                            <div class="mx-auto max-w-xs px-8">
                                <p class="text-base font-semibold text-gray-600 text-blue-700 text-xl">{{$tarif->titre}} </p>
                                <p class="text-base font-semibold text-gray-600">La formule à  </p>
                                <p class="mt-6 flex items-baseline justify-center gap-x-2">
                                    <span class="text-5xl font-bold tracking-tight text-gray-900">${{$tarif->prix}}</span>
                                    <span class="text-sm font-semibold leading-6 tracking-wide text-gray-600">USD</span>
                                </p>
                                <a href="https://wa.me/+243810930187?text=www.systematik.tech,%20*commanade:*%20{{$sous->nom}},%20Formule%20{{$tarif->titre}}." class="mt-10 block w-full rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Commander</a>
                                <p class="mt-6 text-xs leading-5 text-gray-600"><?php echo  $tarif['description']?></p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            @endforeach
        </div>
    </div>



</div>
