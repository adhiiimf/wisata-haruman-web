<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wisata - Wisata Haruman</title>
    <!-- Customized Bootstrap Stylesheet -->
    {{-- <link href="css/style.css" rel="stylesheet"> --}}
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
</head>
    
<body class="bg-purple-200">
    {{-- aside navbar --}}
    @component('components.NavAdmin')
        
    @endcomponent
    {{-- content --}}
    <div class=" sm:ml-64 p-5">
        {{-- heading --}}
        <div class="flex justify-center">
            <div class="w-[900px] flex flex-col">
                <h1 class="text-5xl mb-3">{{$travel_data->travelTitle}}</h1>
                <span class="flex items-center text-gray-500"><span class="max-lg:!text-2xl !text-3xl material-icons mr-1">account_circle</span>{{$admin_name}}</span>
                <span class="flex items-center text-gray-500"><span class="max-lg:!text-2xl !text-3xl material-icons mr-1">schedule</span>{{$travel_data->created_at}}</span>
                <img class="rounded-3xl mt-3 shadow-xl" src="{{$travel_data->travelImage}}" alt="">
                <div class="mt-4 flex flex-col">
                    <span class="text-5xl font-semibold text-gray-800">Jadwal : {{$travel_data->name}}</span>
                    
                </div>
                <h2 class="text-4xl mt-3">Deskripsi</h2>
                <hr class="my-2">
                <p class="text-xl">{{$travel_data->description}}</p>
                <h2 class="text-4xl mt-5 flex items-center flex-wrap">
                    Cara Beli
                </h2>
                <hr class="my-2">
                <p class="text-xl">
                    Hai netizen haruman, untuk bertanya tentang wisata ini kamu dapat bertanya melalui nomor whatsapp berikut
                </p>
                <div class="flex">
                    <a class="mt-3 flex items-center py-2 px-3 bg-green-500 text-white rounded-full duration-150 ease-out hover:no-underline hover:scale-105 hover:bg-green-600" href="https://wa.me/{{$travel_data->phoneNumber}}" target="_blank">
                        <img class="w-7 invert" src="{{asset('assets/whatsapp.svg')}}" alt="">
                        <span class="text-lg ml-1 pr-1">
                            Chat Penjual
                        </span>
                    </a>
                </div>
                <footer class="text-center mt-24 pb-8">
                    &copy;wisataharuman.com 2023
                </footer>
            </div>
        </div>
    </div>
</body>
</html>