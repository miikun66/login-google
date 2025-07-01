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
        <form action="/verify/{{ $unique_id }}" method="post" class="space-y-4">
            @method('PUT')
            @csrf
            <div class="relative">
                
                <input type="number" name="otp" placeholder="Enter OTP" required
                    class="w-full border border-violet-400 rounded-lg px-4 py-2 focus:outline-0 focus:ring-2 focus:ring-violet-400">
                <div class="absolute top-8 right-4 text-violet-600">
                    <i class="fa-regular fa-envelope"></i>
                </div>
            </div>
            
            <div class="flex items-center justify-between">
                
                <a class="hover:text-violet-400 transition duration-300" href="#!">Resend OTP??</a>
            </div>
            <button type="submit"
                class="shadow-black shadow-[5px_5px_0px] w-full bg-violet-400 py-2 border-2 border-violet-200 rounded-lg hover:bg-violet-500 transition duration-300 cursor-pointer text-white hover:translate-x-2 hover:translate-y-2 hover:shadow-none uppercase"><i
                    class="fa-solid fa-bolt-lightning"></i> <strong>Submit</strong></button>
        </form>
    </div>

</body>

</html>
