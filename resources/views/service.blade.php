<section id="servicesection" class="min-h-screen">
    <div class="relative flex items-center justify-center p-5">
        <h1 class="bg-purple-500 font-bold h-1 w-auto rounded-xl text-4xl">PELAYANAN YANG KAMI BERIKAN</h1>
    </div>
    <div class="pt-16">
        <img src="{{ asset('images/serv/mt.jpg') }}" alt="MT">
    </div>
    <div class="p-16">
        <div class="rounded-2xl grid grid-cols-1 md:grid-cols-2 gap-5 text-white bg-center bg-cover bg-blend-overlay bg-black/80" style="background-image:url(images/serv/aaa.jpg);">
            <div class="flex flex-wrap items-center justify-center sm:-mx-3">
                <div class="w-full px-3 pb-6 space-y-4 sm:max-w-md lg:max-w-lg lg:space-y-4 lg:pr-0 md:pb-0">
                    <h2 class="font-bold text-4xl py-5">Apa saja yang dikerjakan pada Servis Berkala?</h2>
                    <p class="mx-auto text-base sm:max-w-md lg:text-lg md:max-w-3xl">
                        Servis Berkala mencakup pemeriksaan dan pemeliharaan komponen kendaraan Toyota Anda secara lengkap dan menyeluruh, seperti: mesin, sistem penggerak, sistem kelistrikan, sistem pembakaran, wiper dan washer, sistem rem, sistem kemudi serta lampu-lampu klakson.
                    </p>
                    <p class="mx-auto text-base sm:max-w-md lg:text-lg md:max-w-3xl">
                        Servis berkala setiap 6 bulan dilakukan untuk memastikan kendaraan Anda dalam kondisi aman dikendarai, hal ini dikarenakan elemen kendaraan bisa berkurang kualitasnya seiring berjalannya waktu, mendeteksi lebih dini kerusakan yang diakibatkan oleh kondisi tertentu kemudian mempengaruhi kerja mesin yang bisa menyebabkan kerusakan yang lebih berat. Servis berkala dapat dilakukan lebih cepat, apabila kilometer kendaraan mencapai 10,000 KM sebelum 6 bulan.
                    </p>
                </div>
            </div>
            <div class="max-w-4xl mx-auto relative" x-data="{
                activeSlide: 1,
                slides: [
                    { id: 1, imgSrc: '/images/serv/01.jpg'},
                    { id: 2, imgSrc: '/images/serv/02.jpg'},
                    { id: 3, imgSrc: '/images/serv/03.jpg'},
                    { id: 4, imgSrc: '/images/serv/04.jpg'},
                    { id: 5, imgSrc: '/images/serv/05.jpg'},
                    { id: 6, imgSrc: '/images/serv/06.jpg'},
                    { id: 7, imgSrc: '/images/serv/07.jpg'},
                    { id: 8, imgSrc: '/images/serv/08.jpg'},
                    { id: 9, imgSrc: '/images/serv/09.jpg'},
                    { id: 10, imgSrc: '/images/serv/10.jpg'},
                    { id: 11, imgSrc: '/images/serv/11.jpg'}
                    ],
                    loop(){
                        setInterval(()=>{this.activeSlide = this.activeSlide === 11 ? 1 : this.activeSlide + 1}, 7000)
                    }
                }" x-init="loop">
                <!-- Data Loop -->
                <template x-for="slide in slides" :key="slide.id">
                    <div x-show="activeSlide === slide.id" class="max-w-[1500px] h-auto w-full m-auto py-4 px-4 shadow-md rounded-2xl relative md:h-[600px] sm:h-[400px]">
                        <img :src="slide.imgSrc" alt="Slide Image" class="w-full h-full rounded-2xl bg-center bg-cover">
                    </div>
                </template>
                <!-- Back/Next -->
                <div class="absolute inset-0 flex group">
                    <div class="flex items-center justify-start w-1/2">
                        <button x-on:click="activeSlide = activeSlide === 1 ? slides.length : activeSlide - 1" class="hidden group-hover:block absolute top-[40%] -translate-x-0 translate-y-[40%] left-5 text-2xl rounded-full p-2 bg-black/20 text-white cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                            </svg>
                        </button>
                    </div>
                    <div class="flex items-center justify-end w-1/2">
                        <button x-on:click="activeSlide = activeSlide === slides.length ? 1 : activeSlide + 1" class="hidden group-hover:block absolute top-[40%] -translate-x-0 translate-y-[40%] right-5 text-2xl rounded-full p-2 bg-black/20 text-white cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                            </svg>
                        </button>
                    </div>

                    <!-- Pointer Buttons -->
                    <div class="hidden group-hover:block absolute w-full flex items-center justify-center px-4 bottom-4">
                        <template x-for="slide in slides" :key="slide.id">
                            <button class="flex-1 w-4 h-2 mt-4 mx-2 mb-2 rounded-full overflow-hidden transition-colors duration-200 ease-out hover:bg-slate-600 hover:shadow-lg" :class="{
                                'bg-cyan-600' : activeSlide === slide.id,
                                'bg-slate-300' : activeSlide !== slide.id,
                            }" x-on:click="activeSlide = slide.id"></button>
                        </template>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <div>
        <img src="{{ asset('images/serv/tcare.jpeg') }}" alt="T-CARE">
    </div>

    <div class="relative flex items-center justify-center pt-10 ">
        <h1 class="bg-slate-500 font-bold h-1 w-auto bottom-0 rounded-xl absolute text-4xl">JAMINAN</h1>
    </div>
    <div class="p-10 bg-gray-900 grid grid-cols-1 md:grid-cols-2 gap-5 my-10 items-center justify-center">
        <div class="p-4 text-white">
            <h1 class="font-bold text-3xl">VEHICLE WARRANTY</h1>
            <h1 class="text-3xl">3 Tahun / 100.000 KM*</h1>

            <h2 class="text-sm pt-6 font-semibold">
                Tuntutan warranty akan dikabulkan dengan syarat pemilik kendaraan melakukan servis secara berkesinambungan di bengkel Resmi Toyota mulai servis ke-1 (1 bulan atau 1.000 KM) hingga servis ke-11 (36 Bulan atau 100.000 KM)
            </h2>
        </div>
        <div>
            <img src="{{ asset('images/serv/warrantyCar.png') }}" alt="T-CARE">
        </div>
    </div>
    <div class="p-10 bg-slate-500 grid grid-cols-1 md:grid-cols-2 gap-5 my-10 items-center justify-center">
        <div>
            <img src="{{ asset('images/serv/warrantyParts.png') }}" alt="T-CARE">
        </div>
        <div class="p-4 text-black">
            <h1 class="font-bold text-3xl">BATTERY / AKI WARRANTY</h1>
            <h1 class="text-3xl">1 Tahun / 20.000 KM*</h1>

            <h1 class="font-bold text-3xl pt-4">HYBRID BATTERY WARRANTY**</h1>
            <h1 class="text-3xl">8 Tahun / 160.000 KM*</h1>

            <h2 class="text-sm pt-6 font-semibold">
                * Mana yang tercapai lebih dahulu.<br>
                ** Khusus untuk hybrid battery/aki, warranty berlaku selama 8 tahun dengan 3 tahun pertama sesuai ketentuan manufaktur dan tambahan 5 tahun sesuai ketentuan Toyota Astra Motor.
            </h2>
        </div>
    </div>

</section>