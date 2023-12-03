<section>
    <div class="pt-5 relative flex items-center justify-center">
        <h1 class="bg-red-500 font-bold h-1 w-auto bottom-0 rounded-xl absolute text-4xl">NEWS & EVENTS</h1>
    </div>
    <div class="p-16">
        <div class="max-w-4xl mx-auto relative" x-data="{
                activeSlide: 1,
                slides: [
                    { id: 1, imgSrc: '/images/a.jpg'},
                    { id: 2, imgSrc: '/images/b.jpg'},
                    { id: 3, imgSrc: '/images/c.jpg'},
                    { id: 4, imgSrc: '/images/d.jpg'},
                    { id: 5, imgSrc: '/images/e.jpg'},
                    ],
                    loop(){
                        setInterval(()=>{this.activeSlide = this.activeSlide === 5 ? 1 : this.activeSlide + 1}, 10000)
                    }
                }" x-init="loop">
            <!-- Data Loop -->
            <template x-for="slide in slides" :key="slide.id">
                <div x-show="activeSlide === slide.id" class="max-w-[1500px] h-auto w-full m-auto py-5 px-4 relative md:h-[1000px] sm:h-[800px]">
                    <img :src="slide.imgSrc" alt="Slide Image" class="w-full h-full rounded-2xl bg-center bg-cover ">
                </div>
            </template>
            <!-- Back/Next -->
            <div class="absolute inset-0 flex">
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
            <div class="absolute w-full flex items-center justify-center px-4">
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