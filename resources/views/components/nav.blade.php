<nav class="md:text-lg lg:text-2xl">
    <ul class="flex space-x-1 lg:space-x-6 flex-col md:flex-row space-y-4 md:space-y-0 flex items-center justify-center">
        <li
            class="transition duration-300 md:hover:-translate-y-1 hover:translate-x-1 md:hover:translate-x-0 flex uppercase w-full cursor-pointer inline-block align-middle hover:bg-gradient-to-r from-white/10 md:hover:bg-gradient-to-t from-white/10 to-transparent to-transparent rounded-sm p-2">
            <a class="hover:text-violet-400" href="#"><i
                    class="fa-solid fa-newspaper text-gray-400 md:invisible md:absolute"></i> News</a>
        </li>
        <li x-data="{ open: false }"
            class="transition duration-300 md:hover:-translate-y-1 hover:translate-x-1 md:hover:translate-x-0 uppercase w-full cursor-pointer inline-block rel align-middle hover:bg-gradient-to-r from-white/10 md:hover:bg-gradient-to-t from-white/10 to-transparent to-transparent rounded-sm p-2">

            <button @click="open = !open" @click.outside="open = false" class="uppercase mr-6">
                <a class="hover:text-violet-400" href="#"><i
                        class="fa-solid fa-book text-blue-400 md:invisible md:absolute"></i> Book <i
                        class="fa-solid fa-caret-down md:absolute md:ml-2 md:mt-2"></i></a>
            </button>

            <ul x-show="open" x-transition:enter="transition ease-out duration-1000"
                x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-0" x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-90" class="relative md:absolute overflow-hidden md:w-96 w-full h-full md:h-50 md:bg-violet-200 text-violet-200 md:border-2 md:border-violet-400 md:text-zinc-800 rounded-sm md:p-3 p-2 z-50">
                <li x-show="open" x-transition:enter.duration.500ms>1 <a class="hover:text-violet-400 hover:translate-x-2 transition duration-300 inline-block"
                        href="">makan</a> </li>
                <li x-show="open" x-transition:enter.duration.800ms>2 <a class="hover:text-violet-400 hover:translate-x-2 transition duration-300 inline-block"
                        href="">makan</a> </li>
                <li x-show="open" x-transition:enter.duration.1100ms>3 <a class="hover:text-violet-400 hover:translate-x-2 transition duration-300 inline-block"
                        href="">makan</a> </li>
                <li x-show="open" x-transition:enter.duration.1400ms>4 <a class="hover:text-violet-400 hover:translate-x-2 transition duration-300 inline-block"
                        href="">makan</a> </li>
                <li x-show="open" x-transition:enter.duration.1700ms>5 <a class="hover:text-violet-400 hover:translate-x-2 transition duration-300 inline-block"
                        href="">makan</a> </li>
            </ul>
        </li>
        <li
            class="transition duration-300 md:hover:-translate-y-1 hover:translate-x-1 md:hover:translate-x-0 flex uppercase w-full cursor-pointer inline-block align-middle hover:bg-gradient-to-r from-white/10 md:hover:bg-gradient-to-t from-white/10 to-transparent to-transparent rounded-sm p-2">
            <a class="hover:text-violet-400 inline-block text-center" href="#"><i
                    class="fa-solid fa-music text-red-400 md:invisible md:absolute"></i> Music</a>
        </li>
        <li
            class="transition duration-300 md:hover:-translate-y-1 hover:translate-x-1 md:hover:translate-x-0 flex uppercase w-full cursor-pointer inline-block align-middle hover:bg-gradient-to-r from-white/10 md:hover:bg-gradient-to-t from-white/10 to-transparent to-transparent rounded-sm p-2">
            <a class="hover:text-violet-400 inline-block text-center" href="#"><i
                    class="fa-solid fa-cart-shopping text-green-400 md:invisible md:absolute"></i> Shop</a>
        </li>
        <li
            class="transition duration-300 md:hover:-translate-y-1 hover:translate-x-1 md:hover:translate-x-0 flex uppercase w-full cursor-pointer inline-block align-middle hover:bg-gradient-to-r from-white/10 md:hover:bg-gradient-to-t from-white/10 to-transparent to-transparent rounded-sm p-2">
            <a class="hover:text-violet-400 inline-block text-center" href="#"><i
                    class="fa-solid fa-address-card text-amber-300 md:invisible md:absolute"></i>
                About Me</a>
        </li>
        <hr class="w-full text-violet-400 md:hidden">
        <button class="text-2xl md:text-3xl w-full animate-pulse hover:scale-110 transition duration-300">
            <a class="hover:text-violet-400 inline-block text-center" href="/auth-google-redirect"><i class="fa-brands fa-google text-red-400 text-2xl lg:text-6xl invisible md:visible absolute md:relative"></i>
                <p class="md:hidden"><span class="text-blue-400">G</span><span class="text-red-400">o</span><span class="text-yellow-400">o</span><span class="text-blue-400">g</span><span class="text-green-400">l</span><span class="text-red-400">e</span></p>
            </a>

        </button>
        <hr class="w-full text-violet-400 md:hidden">
    </ul>

</nav>
