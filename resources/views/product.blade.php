<section id="productsection">
    <div class="relative flex items-center justify-center">
        <h1 class="bg-blue-500 font-bold h-1 w-auto bottom-0 rounded-xl absolute text-4xl">LIST MOBIL KAMI</h1>
    </div>
    <div class="p-16">
        <div class="max-w-6xl mx-auto shadow-xl bg-white rounded-xl relative" x-data="{
                activeSlide: 1,
                slides: [
                    { id: 1, imgSrc: '/images/mobil/calya.png', title: 'ALL NEW CALYA', 
                        body:'All | 1197 cc | Bensin | 7 Penumpang', 
                        body2: 'Rp 176.000.000 s/d Rp 189.800.000',
                        type1 : 'CALYA 1.2 E STD (MANUAL)',
                        harga1 : 'Rp 167.860.000',
                        type2 : 'CALYA 1.2 E (MANUAL)',
                        harga2 : 'Rp 170.760.000',
                        type3 : 'CALYA 1.2 G (MANUAL)',
                        harga3 : 'Rp 175.660.000',
                        type4 : 'CALYA 1.2 G (AUTOMATIC)',
                        harga4 : 'Rp 189.800.000'
                    },
                    { id: 2, imgSrc: '/images/mobil/agyagr.png', title: 'ALL NEW AGYA GR', 
                        body:'Hatchback | 1198 cc | Bensin | 5 Penumpang', 
                        body2: 'Rp 176.000.000 s/d Rp 257.400.000',
                        type1 : 'AGYA 1.2 G (MANUAL)',
                        harga1 : 'Rp 176.000.000',
                        type2 : 'AGYA 1.2 G (AUTOMATIC)',
                        harga2 : 'Rp 192.800.000',
                        type3 : 'AGYA 1.2 GR SPORT (MANUAL)',
                        harga3 : 'Rp 240.600.000',
                        type4 : 'AGYA 1.2 GR SPORT (AUTOMATIC)',
                        harga4 : 'Rp 257.400.000'
                    },
                    { id: 3, imgSrc: '/images/mobil/avanza.png', title: 'ALL NEW AVANZA', 
                        body:'MPV | 1329 cc - 1496 cc | Bensin | 7 Penumpang', 
                        body2: 'Rp 237.050.000 s/d Rp 300.450.000',
                        type1 : 'AVANZA 1.3 E (MANUAL)',
                        harga1 : 'Rp 237.050.000',
                        type2 : 'AVANZA 1.3 E (AUTOMATIC)',
                        harga2 : 'Rp 251.850.000',
                        type3 : 'AVANZA 1.5 G (MANUAL)',
                        harga3 : 'Rp 259.850.000',
                        type4 : 'AVANZA 1.5 G (AUTOMATIC)',
                        harga4 : 'Rp 274.450.000',
                        type5 : 'AVANZA 1.5 G TSS (AUTOMATIC)',
                        harga5 : 'Rp 300.450.000 '
                    },
                    { id: 4, imgSrc: '/images/mobil/raize.png', title: 'ALL NEW RAIZE GR', 
                        body:'SUV | 998 cc - 1198 cc | Bensin | 5 Penumpang', 
                        body2: 'Rp 250.800.000 s/d Rp 308.400.000',
                        type1 : 'RAIZE 1.2 G ONE TONE (AUTOMATIC)',
                        harga1 : 'Rp 250.800.000',
                        type2 : 'RAIZE 1.0 G ONE TONE (MANUAL)',
                        harga2 : 'Rp 255.300.000',
                        type3 : 'RAIZE 1.0 G ONE TONE (AUTOMATIC)',
                        harga3 : 'Rp 270.200.000',
                        type4 : 'RAIZE 1.0 T GR SPORT TWO TONE (AUTOMATIC)',
                        harga4 : 'Rp 266.700.000',
                        type5 : 'RAIZE 1.0 T GR SPORT TSS TWO TONE (AUTOMATIC)',
                        harga5 : 'Rp 308.400.000'
                    },
                    { id: 5, imgSrc: '/images/mobil/rushgr.png', title: 'ALL NEW RUSH GR', 
                        body:'SUV | 1496 CC | Bensin | 7 Penumpang', 
                        body2: 'Rp 288.000.000 s/d Rp 311.200.000',
                        type1 : 'RUSH 1.5 G (MANUAL)',
                        harga1 : 'Rp 288.000.000',
                        type2 : 'RUSH 1.5 G (AUTOMATIC)',
                        harga2 : 'Rp 298.800.000',
                        type3 : 'RUSH 1.5 GR SPORT (MANUAL)',
                        harga3 : 'Rp 300.500.000',
                        type4 : 'RUSH 1.5 GR SPORT (AUTOMATIC)',
                        harga4 : 'Rp 311.200.000'
                    },
                    { id: 6, imgSrc: '/images/mobil/veloz.png', title: 'ALL NEW VELOZ', 
                        body:'MPV | 1496 cc | Bensin | 7 Penumpang', 
                        body2: 'Rp 292.150.000 s/d Rp 338.650.000',
                        type1 : 'VELOZ 1.5 V (Premium Color) (MANUAL)',
                        harga1 : 'Rp 292.150.000',
                        type2 : 'VELOZ 1.5 V (Premium Color) (AUTOMATIC)',
                        harga2 : 'Rp 307.800.000',
                        type3 : 'VELOZ 1.5 Q (Premium Color) (AUTOMATIC)',
                        harga3 : 'Rp 316.650.000',
                        type4 : 'VELOZ 1.5 Q TSS (Premium Color) (AUTOMATIC)',
                        harga4 : 'Rp 338.650.000'
                    },
                    { id: 7, imgSrc: '/images/mobil/yaris.png', title: 'ALL NEW YARIS CROSS', 
                        body:'SUV | 1496 CC | All | 5 Penumpang', 
                        body2: 'Rp 351.600.000 s/d Rp 455.550.000',
                        type1 : 'YARIS CROSS 1.5 G (MANUAL)',
                        harga1 : 'Rp 351.600.000',
                        type2 : 'YARIS CROSS 1.5 G (AUTOMATIC)',
                        harga2 : 'Rp 364.600.000',
                        type3 : 'YARIS CROSS 1.5 S TSS (Premium Color) (AUTOMATIC)',
                        harga3 : 'Rp 410.800.000',
                        type4 : 'YARIS CROSS 1.5 S GR TSS (Premium Color) (AUTOMATIC)',
                        harga4 : 'Rp 420.600.000',
                        type5 : 'YARIS CROSS 1.5 GR HV TSS (AUTOMATIC)',
                        harga5 : 'Rp 453.050.000',
                        type6 : 'YARIS CROSS 1.5 GR HV TSS DUAL TONE (AUTOMATIC)',
                        harga6 : 'Rp 454.550.000',
                        type7 : 'YARIS CROSS 1.5 GR HV TSS DUAL TONE (Premium Color) (AUTOMATIC)',
                        harga7 : 'Rp 455.550.000'
                    },
                    { id: 8, imgSrc: '/images/mobil/ireborn.png', title: 'NEW INNOVA REBORN', 
                        body:'MPV | 2000 cc - 2400 cc | All | 6 / 7 Penumpang', 
                        body2: 'Rp 383.150.000 s/d Rp 427.500.000',
                        type1 : 'INNOVA REBORN G 2.0 BENSIN (MANUAL)',
                        harga1 : 'Rp 383.150.000',
                        type2 : 'INNOVA REBORN G 2.0 DIESEL (MANUAL)',
                        harga2 : 'Rp 410.350.000',
                        type3 : 'INNOVA REBORN G 2.0 DIESEL (AUTOMATIC)',
                        harga3 : 'Rp 427.500.000'
                    },
                    { id: 9, imgSrc: '/images/mobil/hilux.png', title: 'ALL NEW HILUX', 
                        body:'All | 2393 cc | Solar | 5 Penumpang', 
                        body2: 'Rp 411.080.000 s/d Rp 528.180.000',
                        type1 : 'SINGLE CABIN 2.4 DSL 4X4 (MANUAL)',
                        harga1 : 'Rp 411.080.000',
                        type2 : 'DOUBLE CABIN 2.4 E(4X4) DIESEL (MANUAL)',
                        harga2 : 'Rp 446.130.000',
                        type3 : 'DOUBLE CABIN 2.4 G(4X4) DIESEL (MANUAL)',
                        harga3 : 'Rp 479.130.000',
                        type4 : 'DOUBLE CABIN 2.4 V(4X4) DIESEL (AUTOMATIC)',
                        harga4 : 'Rp 528.180.000'
                    },
                    { id: 10, imgSrc: '/images/mobil/izenix.png', title: 'ALL NEW INNOVA ZENIX', 
                        body:'MPV | 1987 cc | Bensin | 7 Penumpang', 
                        body2: 'Rp 432.000.000 s/d Rp 631.700.000',
                        type1 : 'INNOVA ZENIX 2.0 G (Premium Color) (AUTOMATIC)',
                        harga1 : 'Rp 432.000.000',
                        type2 : 'INNOVA ZENIX 2.0 V (Premium Color) (AUTOMATIC)',
                        harga2 : 'Rp 477.900.000',
                        type3 : 'INNOVA ZENIX 2.0 G HV (Premium Color) (AUTOMATIC)',
                        harga3 : 'Rp 478.400.000',
                        type4 : 'INNOVA ZENIX 2.0 V HV MODELISTA (Premium Color) (AUTOMATIC)',
                        harga4 : 'Rp 555.500.000',
                        type5 : 'INNOVA ZENIX 2.0 Q HV MODELISTA (Premium Color) (AUTOMATIC)',
                        harga5 : 'Rp 631.700.000'
                    },
                    { id: 11, imgSrc: '/images/mobil/caltis.png', title: 'NEW COROLLA ALTIS', 
                        body:'Hybrid | 1798 cc | Hybrid | 5 Penumpang', 
                        body2: 'Rp 545.000.000 s/d	Rp 599.200.000',
                        type1 : 'NEW ALTIS 1.8 V (Premium Color) (AUTOMATIC)',
                        harga1 : 'Rp 545.000.000',
                        type2 : 'NEW ALTIS 1.8 HV (Premium Color) (AUTOMATIC)',
                        harga2 : 'Rp 599.200.000'
                    },
                    { id: 12, imgSrc: '/images/mobil/ccross.png', title: 'ALL NEW COROLLA CROSS', 
                        body:'SUV | 1496 cc | All | 5 Penumpang', 
                        body2: 'Rp 547.020.000 s/d	Rp 455.550.000',
                        type1 : 'COROLLA CROSS 1.8 HYBRID (Premium Color) (AUTOMATIC)',
                        harga1 : 'Rp 547.020.000',
                        type2 : 'COROLLA CROSS 1.8 HYBRID GR (AUTOMATIC)',
                        harga2 : 'Rp 609.000.000',
                        type3 : 'COROLLA CROSS 1.8 HYBRID GR DUAL TONE (AUTOMATIC)',
                        harga3 : 'Rp 612.500.000',
                        type4 : 'COROLLA CROSS 1.8 HYBRID GR SPORT DUAL TONE (Premium Color) (AUTOMATIC)',
                        harga4 : 'Rp 614.000.000'
                    },
                    { id: 13, imgSrc: '/images/mobil/hiace.png', title: 'NEW HIACE', 
                        body:'Commercial | 2755 cc - 2982 cc | Solar | 15 Penumpang', 
                        body2: 'Rp 556.630.000 s/d	Rp 650.900.000',
                        type1 : 'HIACE PREMIO 2.8 (MANUAL)',
                        harga1 : 'Rp 650.900.000',
                        type2 : 'HIACE COMMUTER (MANUAL)',
                        harga2 : 'Rp 556.630.000'
                    },
                    { id: 14, imgSrc: '/images/mobil/voxy.png', title: 'ALL NEW VOXY', 
                        body:'MPV | 1986 cc | Bensin | 7 Penumpang', 
                        body2: 'Rp 604.600.000',
                        type1 : 'NEW VOXY 2.0 (Premium Color) (AUTOMATIC)',
                        harga1 : 'Rp 604.600.000'
                    },
                    { id: 15, imgSrc: '/images/mobil/fortuner.png', title: 'NEW FORTUNER GR', 
                        body:'SUV | 2393 CC | Bensin | 7 Penumpang', 
                        body2: 'Rp 618.200.000 s/d Rp 726.950.000',
                        type1 : 'FORTUNER 4X2 2.8 VRZ (AUTOMATIC)',
                        harga1 : 'Rp 618.200.000',
                        type2 : 'FORTUNER 4X2 2.8 VRZ GR SPORT (AUTOMATIC)',
                        harga2 : 'Rp 637.050.000',
                        type3 : 'FORTUNER 4X4 2.8 VRZ GR SPORT (AUTOMATIC)',
                        harga3 : 'Rp 726.950.000'
                    },                    
                    { id: 16, imgSrc: '/images/mobil/camry.png', title: 'NEW CAMRY HYBRID', 
                        body:'Sedan | 2487 cc | Bensin | 5 Penumpang', 
                        body2: 'Rp 803.100.000 s/d Rp 944.600.000',
                        type1 : 'CAMRY 2.5 V (Premium Color) (AUTOMATIC)',
                        harga1 : 'Rp 803.100.000',
                        type2 : 'CAMRY 2.5 L HYBRID (Premium Color) (AUTOMATIC)',
                        harga2 : 'Rp 944.600.000'
                    },
                    { id: 17, imgSrc: '/images/mobil/vellfire.png', title: 'NEW VELLFIRE', 
                        body:'MPV | 2500 cc | Bensin | 7 Penumpang',
                        body2: 'Rp 1.411.320.000',
                        type1 : 'VELFIRE 2.5 G (Premium Color) (AUTOMATIC)',
                        harga1 : 'Rp 1.411.320.000'
                    },
                    { id: 18, imgSrc: '/images/mobil/alphard.png', title: 'NEW ALPHARD', 
                        body:'MPV | 2362 cc - 2995 cc | Bensin | 7 Penumpang', 
                        body2: 'Rp 1.661.100.000',
                        type1 : 'NEW ALPHARD 2.5 HYBRID (Premium Color) (AUTOMATIC)',
                        harga1 : 'Rp 1.661.100.000'
                    },                                        
                    ]
                }">

            <!-- Data Loop -->
            <template x-for="slide in slides" :key="slide.id">
                <div class="container shadow-xl items-center max-w-6xl px-8 mx-auto xl:px-5 bg-gray-100 rounded-lg">
                    <div x-show="activeSlide === slide.id" class="flex flex-wrap items-center sm:-mx-3">
                        <div class="w-full md:w-1/2 md:px-3">
                            <div class="w-full p-5 pt-10 sm:max-w-md lg:max-w-lg">
                                <h2 class="font-bold text-2xl" x-text="slide.title"></h2>
                                <p class="mx-auto text-sm text-gray-500 sm:max-w-md lg:text-lg md:max-w-2xl" x-text="slide.body"></p>
                                <p class="mx-auto text-sm text-gray-500 sm:max-w-md lg:text-lg md:max-w-2xl pt-4">Harga Mulai Dari</p>
                                <p class="mx-auto text-base text-black font-semibold sm:max-w-md lg:text-2xl md:max-w-4xl" x-text="slide.body2"></p>
                            </div>

                            <div class="relative w-auto overflow-hidden">
                                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-12 opacity-0 z-10 cursor-pointer">
                                <div class="bg-blue-600 h-12 w-full pl-5 flex items-center">
                                    <h4 class="text-lg font-semibold text-white">Harga Selengkapnya</h4>
                                </div>
                                <div class="absolute top-3 right-3 text-white transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                    </svg>
                                </div>
                                <div class="bg-white overflow-hidden transition-all ease-in-out duration-500 max-h-0 peer-checked:max-h-[500px]">
                                    <div class="p-4">
                                        <div x-text="slide.type1" class="font-semibold bg-gray-200"></div>
                                        <div x-text="slide.harga1" class="bg-gray-200 pb-2"></div>
                                        <div x-text="slide.type2" class="font-semibold bg-white"></div>
                                        <div x-text="slide.harga2" class="bg-white pb-2"></div>
                                        <div x-text="slide.type3" class="font-semibold bg-gray-200"></div>
                                        <div x-text="slide.harga3" class="bg-gray-200 pb-2"></div>
                                        <div x-text="slide.type4" class="font-semibold bg-white"></div>
                                        <div x-text="slide.harga4" class="bg-white pb-2"></div>
                                        <div x-text="slide.type5" class="font-semibold bg-gray-200"></div>
                                        <div x-text="slide.harga5" class="bg-gray-200 pb-2"></div>
                                        <div x-text="slide.type6" class="font-semibold bg-white"></div>
                                        <div x-text="slide.harga6" class="bg-white pb-2"></div>
                                        <div x-text="slide.type7" class="font-semibold bg-gray-200"></div>
                                        <div x-text="slide.harga7" class="bg-gray-200 pb-2"></div>
                                        <div class="text-sm">*Harga OTR dapat berubah sewaktu-waktu & berbeda setiap wilayah</div>
                                    </div>
                                </div>
                                <div class="p-5"></div>
                            </div>

                        </div>
                        <div class="py-5 w-full md:w-1/2">
                            <div class="w-full h-auto overflow-hidden rounded-md sm:rounded-xl">
                                <img :src="slide.imgSrc" alt="Slide Image">
                            </div>
                        </div>
                    </div>
                </div>
            </template>

            <!-- Back/Next -->
            <div class=" absolute inset-0 flex">
                <div class="flex items-center justify-start w-1/2">
                    <button x-on:click="activeSlide = activeSlide === 1 ? slides.length : activeSlide - 1" class="bg-slate-100 text-slate-500 hover:bg-cyan-500 hover:text-white transition font-bold rounded-full w-12 h-12 shadow flex justify-center items-center ml-[-4rem]">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                        </svg>
                    </button>
                </div>
                <div class="flex items-center justify-end w-1/2">
                    <button x-on:click="activeSlide = activeSlide === slides.length ? 1 : activeSlide + 1" class="bg-slate-100 text-slate-500 hover:bg-cyan-500 hover:text-white transition font-bold rounded-full w-12 h-12 shadow flex justify-center items-center mr-[-4rem]">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </button>
                </div>
            </div>
            <!-- Pointer Buttons -->
            <div class="absolute w-full flex items-center justify-center px-4 py-4">
                <template x-for="slide in slides" :key="slide.id">
                    <button class="flex-1 w-4 h-2 mt-4 mx-2 mb-2 rounded-full overflow-hidden transition-colors duration-200 ease-out hover:bg-slate-600 hover:shadow-lg" :class="{
                            'bg-cyan-600' : activeSlide === slide.id,
                            'bg-slate-300' : activeSlide !== slide.id,
                        }" x-on:click="activeSlide = slide.id"></button>
                </template>
            </div>
        </div>
    </div>
</section>