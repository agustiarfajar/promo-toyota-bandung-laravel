<nav class="px-5 text-white bg-gray-800 shadow md:flex md:items-center md:justify-between">
    <div class="flex justify-between items-center ">
        <span class="text-2xl font-[Poppins] cursor-pointer">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-20 w-auto sm:h-22 sm:w-auto">
        </span>

        <span class="text-3xl cursor-pointer mx-2 md:hidden block">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-6 h-6" name="menu" onclick="Menu(this)">
                <path d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </span>
    </div>

    <ul class="md:flex md:items-center z-1000 md:z-auto md:static absolute bg-gray-800 w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500">
        <li class="mx-4 my-6 md:my-0">
            <a href="#" class="text-lg font-bold hover:text-cyan-500 duration-500">HOME</a>
        </li>
        <li class="mx-4 my-6 md:my-0">
            <a href="#productsection" class="text-lg font-bold hover:text-cyan-500 duration-500">PRODUCT</a>
        </li>
        <li class="mx-4 my-6 md:my-0">
            <a href="#servicesection" class="text-lg font-bold hover:text-cyan-500 duration-500">SERVICE</a>
        </li>
        <li class="mx-4 my-6 md:my-0">
            <a href="#contactsection" class="text-lg font-bold hover:text-cyan-500 duration-500">CONTACT</a>
        </li>
    </ul>
</nav>

<script>
    function Menu(e) {
        let list = document.querySelector('ul');
        e.name === 'menu' ? (e.name = "close", list.classList.add('top-[80px]'), list.classList.add('opacity-100')) : (e.name = "menu", list.classList.remove('top-[80px]'), list.classList.remove('opacity-100'))
    }
</script>