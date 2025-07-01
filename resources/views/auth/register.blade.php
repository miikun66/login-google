<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/039284ea12.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Login Admin</title>
</head>

<body oncontextmenu="return false;"
    class="bg-[url('../../storage/images/wellcome.jpg')] select-none bg-cover bg-center flex items-center justify-center min-h-screen">

    <div
        class="bg-violet-200/50 bg-opa border-4 border-violet-400 p-8 rounded-lg shadow-md w-full max-w-md shadow-black">
        @if (session('failed'))
            <div class="text-red-400">{{ session('failed') }}</div>
        @endif

        <h2 class="text-center text-4xl uppercase"><strong>Okaeri Anata</strong><i
                class="fa-solid fa-heart text-violet-500 animate-bounce"></i></h2>
        <form action="{{ route('register') }}" method="post" class="space-y-4">
            @csrf
            <div class="relative">
                <label for="name" class="text-gray-700"><strong>name :</strong></label>
                <input id="name" type="text" name="name" required value="{{ old('name') }}"
                    class="w-full border border-violet-400 rounded-lg px-4 py-2 focus:outline-0 focus:ring-2 focus:ring-violet-400">
                <div class="absolute top-8 right-4 text-violet-600">
                    <i class="fa-regular fa-user"></i>
                </div>
            </div>
            <div class="relative">
                <label for="email" class="text-gray-700"><strong>Email :</strong></label>
                <input id="email" type="email" name="email" required value="{{ old('email') }}"
                    class="w-full border border-violet-400 rounded-lg px-4 py-2 focus:outline-0 focus:ring-2 focus:ring-violet-400">
                <div class="absolute top-8 right-4 text-violet-600">
                    <i class="fa-regular fa-envelope"></i>
                </div>
            </div>
            @error('password')
                <small class="text-red-400">{{ $message }}</small>
            @enderror
            <div x-data="{ show: false }" class="relative">
                <label for="password" class="text-gray-700"><strong>Password :</strong></label>
                <input :type="show ? 'text' : 'password'" id="password" name="password" required
                    class="w-full border border-violet-400 rounded-lg px-4 py-2 focus:outline-0 focus:ring-2 focus:ring-violet-400">
                <button type="button" @click="show = !show" class="absolute top-8 right-4 text-violet-600">
                    <i :class="show ? 'fa-regular fa-eye-slash' : 'fa-regular fa-eye'"></i>
                </button>
            </div>
            @error('confirm_password')
                <small class="text-red-400">{{ $message }}</small>
            @enderror
            <div x-data="{ show: false }" class="relative">
                <label for="password" class="text-gray-700"><strong>Confirm Password :</strong></label>
                <input :type="show ? 'text' : 'password'" id="confirm_password" name="confirm_password" required
                    class="w-full border border-violet-400 rounded-lg px-4 py-2 focus:outline-0 focus:ring-2 focus:ring-violet-400">
                <button type="button" @click="show = !show" class="absolute top-8 right-4 text-violet-600">
                    <i :class="show ? 'fa-regular fa-eye-slash' : 'fa-regular fa-eye'"></i>
                </button>
            </div>
            <div class="flex items-center justify-between">
                {{-- <label for="remember" class="text-gray-700 flex items-center">
                    <input type="checkbox" id="remember" name="remember" class="mr-2 size-5"><strong>Remember
                        Me</strong>
                </label>
                <a class="hover:text-violet-00 transition duration-300 text-transparent" href="#">Forget
                    Password?</a> --}}
            </div>
            <button type="submit"
                class="shadow-black shadow-[5px_5px_0px] w-full bg-violet-400 py-2 border-2 border-violet-200 rounded-lg hover:bg-violet-500 transition duration-300 cursor-pointer text-white hover:translate-x-2 hover:translate-y-2 hover:shadow-none uppercase"><i
                    class="fa-solid fa-bolt-lightning"></i> <strong>Register</strong></button>
        </form>
    </div>

</body>

</html>
