<!doctype html>
<html class="!scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Main Page</title>
</head>

<body>

    <!-- HERO START -->
    <section class="flex flex-col z-1 min-h-screen font-sans text-white bg-center bg-cover bg-blend-overlay bg-fixed bg-black/20" style="background-image:url(images/hero.jpg);">

        <!-- NAVBAR START -->
        @include('header')
        <!-- NAVBAR END -->

        <div class="flex-1 flex items-center">
            <div class="text-center mx-auto">
                <h1 class="text-4xl font-semibold pb-2">Promo Toyota Bandung</h1>
                <h1 class="text-2xl font-semibold pb-5">Selamat Datang di Website Resmi Dealer Mobil Baru Toyota Bandung - Jawa Barat (Jabar)</h1>
                <p class="text-light text-xl mt-5">Informasi Promo Harga OTR / Price List Toyota Terbaru Cash / Tunai, Trade In / Tukar Tambah, Tabel Simulasi Kredit, DP minim / rendah Cicilan dan angsuran ringan / murah. Dapatkan Mobil Baru Toyota termurah. Dapatkan Bonus Menarik Serta Diskon / Cashback Terbesar dan Hitungan Terbaik.</p>
            </div>
        </div>
    </section>
    <!-- HERO END -->

    <!-- PROMO START -->
    @include('promo')
    <!-- PROMO END -->

    <!-- PRODUCT START -->
    @include('product')
    <!-- PRODUCT END -->

    <!-- CONTACT START -->
    @include('contact')
    <!-- CONTACT END -->

    <!-- SERVICE START -->
    @include('service')
    <!-- SERVICE END -->

    <!-- FOOTER START -->
    @include('footer')
    <!-- FOOTER END -->


    <!-- FLOATING BUTTON START -->
    <div class="group fixed bottom-0 right-0 p-2  flex items-end justify-end w-24 h-24 ">
        <a href="https://wa.me/6281275013477?text=Halo%20Pak%20Hasan%2C%0ASaya%20mau%20beli%20Mobil%20Toyota.%0A%E2%80%A2%20Nama%20%3A%20%0A%E2%80%A2%20Pembelian%20%3A%20Credit%2FCash%0A%E2%80%A2%20Unit%20%3A%20%0A%E2%80%A2%20Estimasi%C2%A0Budget%C2%A0DP%C2%A0%3A" class="text-white shadow-xl flex items-center justify-center p-3 rounded-full bg-green-500 z-50 absolute hover:bg-green-600 hover:shadow-2xl transition h-14 w-14 hover:w-16 hover:h-16 duration-500">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 256 256" xml:space="preserve" class="h-8 w-8">
                <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
                    <path d="M 0.576 44.596 C 0.573 52.456 2.626 60.129 6.53 66.892 L 0.201 90 l 23.65 -6.201 c 6.516 3.553 13.852 5.426 21.318 5.429 h 0.019 c 24.586 0 44.601 -20.009 44.612 -44.597 c 0.004 -11.917 -4.633 -23.122 -13.055 -31.552 C 68.321 4.65 57.121 0.005 45.188 0 C 20.597 0 0.585 20.005 0.575 44.595 M 14.658 65.727 l -0.883 -1.402 c -3.712 -5.902 -5.671 -12.723 -5.669 -19.726 C 8.115 24.161 24.748 7.532 45.201 7.532 c 9.905 0.004 19.213 3.865 26.215 10.871 c 7.001 7.006 10.854 16.32 10.851 26.224 c -0.009 20.439 -16.643 37.068 -37.08 37.068 h -0.015 c -6.655 -0.004 -13.181 -1.79 -18.872 -5.168 l -1.355 -0.803 l -14.035 3.68 L 14.658 65.727 z M 45.188 89.228 L 45.188 89.228 L 45.188 89.228 C 45.187 89.228 45.187 89.228 45.188 89.228" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                    <path d="M 34.038 25.95 c -0.835 -1.856 -1.714 -1.894 -2.508 -1.926 c -0.65 -0.028 -1.394 -0.026 -2.136 -0.026 c -0.744 0 -1.951 0.279 -2.972 1.394 c -1.022 1.116 -3.902 3.812 -3.902 9.296 c 0 5.485 3.995 10.784 4.551 11.529 c 0.558 0.743 7.712 12.357 19.041 16.825 c 9.416 3.713 11.333 2.975 13.376 2.789 c 2.044 -0.186 6.595 -2.696 7.524 -5.299 c 0.929 -2.603 0.929 -4.834 0.651 -5.299 c -0.279 -0.465 -1.022 -0.744 -2.137 -1.301 c -1.115 -0.558 -6.595 -3.254 -7.617 -3.626 c -1.022 -0.372 -1.765 -0.557 -2.509 0.559 c -0.743 1.115 -2.878 3.625 -3.528 4.368 c -0.65 0.745 -1.301 0.838 -2.415 0.28 c -1.115 -0.559 -4.705 -1.735 -8.964 -5.532 c -3.314 -2.955 -5.551 -6.603 -6.201 -7.719 c -0.65 -1.115 -0.069 -1.718 0.489 -2.274 c 0.501 -0.499 1.115 -1.301 1.673 -1.952 c 0.556 -0.651 0.742 -1.116 1.113 -1.859 c 0.372 -0.744 0.186 -1.395 -0.093 -1.953 C 37.195 33.666 35.029 28.154 34.038 25.95" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                </g>
            </svg>
        </a>
    </div>
    <!-- FLOATING BUTTON END -->

</body>

</html>