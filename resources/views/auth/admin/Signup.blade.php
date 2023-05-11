<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin - Login</title>

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <link href="css/app.css" rel="stylesheet">
</head>

<body class="bg-violet-700 w-screen h-screen flex justify-center items-center font-poppins">
    <form method="POST" action="{{ route('auth.admin.logincheck') }}"
        class="flex flex-col justify-center items-center bg-slate-200 rounded-2xl shadow-2xl shadow-violet-900 px-16 py-12">
        @csrf
        <div class="flex items-center">
            <img src="/assets/logo-color.png" class="h-12 w-auto" alt="" srcset="">
            <div class="ml-2 text-2xl">
                <div class="leading-none">wisata</div>
                <div class="font-bold">Haruman</div>
            </div>
        </div>

        {{--  Name Start  --}}
        <div class="mt-3 rounded-xl outline-none bg-slate-300 relative">
            <i class="	fa fa-font absolute top-1/2 left-2 -translate-y-1/2 text-xl text-slate-500"></i>
            <input type="text"
                class="form-control w-full py-3 px-10 rounded-xl outline-none bg-slate-300 focus:bg-slate-100 focus:ring-2 focus:ring-slate-700  "
                name="name" placeholder="name" required="required">
        </div>
        @if ($errors->has('name'))
            <div class="w-full text-xs font-semibold text-red-700">
                <p>*{{ $errors->first('name') }}</p>
            </div>
        @endif
        {{--  Name End  --}}

        {{--  Email Start  --}}
        <div class="mt-3 rounded-xl outline-none bg-slate-300 relative">
            <i class="fas fa-user-circle absolute top-1/2 left-2 -translate-y-1/2 text-xl text-slate-500"></i>
            <input type="text"
                class="form-control w-full py-3 px-10 rounded-xl outline-none bg-slate-300 focus:bg-slate-100 focus:ring-2 focus:ring-slate-700  "
                name="email" placeholder="email" required="required">
        </div>
        @if ($errors->has('email'))
            <div class="w-full text-xs font-semibold text-red-700">
                <p>*{{ $errors->first('email') }}</p>
            </div>
        @endif
        {{--  Email End  --}}

        {{--  Password Start  --}}
        <div class="mt-3 rounded-xl outline-none bg-slate-300 relative">
            <i class="fa fa-key absolute top-1/2 left-2 -translate-y-1/2 text-xl text-slate-500  "></i>
            <input type="password"
                class="form-control w-full py-3 px-10 rounded-xl outline-none bg-slate-300 focus:bg-slate-100 focus:ring-2 focus:ring-slate-700  "
                name="password" placeholder="Password" required="required">
        </div>
        @if ($errors->has('password'))
            <div class="w-full text-xs font-semibold text-red-700">
                <p>*{{ $errors->first('password') }}</p>
            </div>
        @endif
        {{--  Password End  --}}

        {{--  Password Confirmation Start  --}}
        <div class="mt-3 rounded-xl outline-none bg-slate-300 relative">
            <i class="fa fa-key absolute top-1/2 left-2 -translate-y-1/2 text-xl text-slate-500  "></i>
            <input type="password"
                class="form-control w-full py-3 px-10 rounded-xl outline-none bg-slate-300 focus:bg-slate-100 focus:ring-2 focus:ring-slate-700  "
                name="passwordConfirmation" placeholder="Confirm Password" required="required">
        </div>
        @if ($errors->has('password'))
            <div class="w-full text-xs font-semibold text-red-700">
                <p>*{{ $errors->first('password') }}</p>
            </div>
        @endif
        {{--  Password Confirmation End  --}}

        <button type="submit"
            class="flex py-1 px-3 mt-3 bg-green-500 hover:bg-green-700 active:bg-green-600 text-slate-100 rounded-xl  ">
            <a href="/login" class="flex items-center">
                <div class="h-full items-center p-1">
                    <i class="fa fa-sign-in-alt"></i>
                </div>
                <div class="h-full p-1">
                    <div class="">Daftar</div>
                </div>
            </a>
        </button>

        <div class="mt-3 text-xs font-semibold">
            <span class="text-slate-900">sudah punya akun? <a href="/login"
                    class="text-violet-700 hover:text-violet-500 active:text-violet-900  ">masuk di
                    sini</a></span>
        </div>
    </form>
</body>

</html>
