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

        <h2 class="text-center text-4xl uppercase"><strong>Verification</strong></h2>
        <form action="/verify" method="post">
            @csrf
            <input type="hidden" value="register" name="type">
            <p class="text-center mb-5">Pleases verify your account!</p>
            <button type="submit" class="bg-blue-400 p-1 m-2 rounded-sm">Send OTP via Email

            </button>
        </form>
    </div>

</body>

</html>
