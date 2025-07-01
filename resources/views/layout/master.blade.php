<div class="h-full w-64 bg-zinc-800 fixed z-40 top-0 left-0 border-r-2 border-violet-400 hidden md:flex">
    <div class="m-5 text-white">
        <x-logo />
        <hr class="text-violet-400 my-5">
        @include('layout.sidebar')
    </div>
</div>
<div class="md:ml-69 m-5">

    <div x-data="{ open: false }"
        class="flex items-center md:hidden mx-4 right-0 border-2 border-violet-400 p-1 rounded-xl fixed">
        <button @click="open = !open" class="transition duration-300">
            <i x-show="open" class="fa-solid fa-xmark text-violet-400 text-3xl"></i>
            <i x-show="!open" class="fa-solid fa-bars-staggered text-violet-400 text-3xl rotate-180"></i>
        </button>
        <div x-show="open" @click="open = false" x-transition:enter="transition-opacity ease-linear duration-300"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0" class="fixed inset-0 bg-black/60 z-40"></div>
        <!-- Sidebar (hanya muncul saat open == true) -->
        <div x-show="open" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
            x-transition:leave="transition ease-in duration-300" x-transition:leave-start="translate-x-0"
            x-transition:leave-end="-translate-x-full"
            class="h-full w-64 bg-zinc-800 fixed z-40 top-0 left-0 border-r-2 border-violet-400 md:hidden">
            <div class="m-5 text-white">
                <x-logo />
                <hr class="text-violet-400 my-5">
                @include('layout.sidebar')
            </div>
        </div>
    </div>
    {{-- ini konten --}}
    <div class="">
        <h2>ini tampilan isi Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos doloribus nulla ducimus
            dolorem
            voluptatem temporibus assumenda itaque, corporis quo, eveniet veniam cumque animi deserunt deleniti, autem
            suscipit recusandae a? Pariatur.</h2>
    </div>

</div>
