<div x-data="{ muted: true }" class="flex cursor-pointer ">
    <div class="flex items-center justify-center">
        <button @click="muted = !muted" class="mr-1 cursor-pointer text-violet-400 md:text-2xl lg:text-3xl flex">
            <i x-show="!muted" class="fa-solid fa-volume-high"></i>
            <i x-show="muted" class="fa-solid fa-volume-xmark"></i>
        </button>
    </div>
    <div class="relative overflow-hidden w-36 md:w-40 xl:w-80 h-16 flex items-center justify-center">
        <div class="w-36 md:w-40 xl:w-80 h-8 lg:h-8 border-y-2 border-violet-400">
        </div>
        <p class="md:text-lg lg:text-2xl overflow-hidden absolute animate-marquee text-center whitespace-nowrap">ini
            adalah musiic
        </p>
    </div>
</div>


<style>
    @keyframes marquee {
        0% {
            transform: translateX(100%);
            opacity: 0%;
        }

        5% {
            opacity: 100%;
        }

        10% {
            opacity: 0%;
        }

        15% {
            opacity: 100%;
        }

        20% {
            opacity: 0%;
        }

        25% {
            opacity: 100%;
        }

        30% {
            opacity: 0%;
        }

        35% {
            opacity: 100%;
        }

        40% {
            opacity: 0%;
        }

        45% {
            opacity: 100%;
        }

        50% {
            opacity: 0%;
        }

        55% {
            opacity: 100%;
        }

        60% {
            opacity: 0%;
        }

        65% {
            opacity: 100%;
        }

        70% {
            opacity: 0%;
        }

        75% {
            opacity: 100%;
        }

        80% {
            opacity: 0%;
        }

        85% {
            opacity: 100%;
        }

        90% {
            opacity: 0%;
        }

        5% {
            opacity: 100%;
        }

        100% {
            transform: translateX(-100%);
            opacity: 0%;
        }
    }

    .animate-marquee {
        animation: marquee 5s linear infinite
    }
</style>
