<!DOCTYPE html>
<head>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$travel_data->travelTitle}} - Wisata Haruman</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
</head>
    
<body class="bg-purple-200 font-poppins">
    @component('components.NavGuest')
        
    @endcomponent
    {{-- content --}}
    <div class="p-5">
        {{-- heading --}}
        <div class="flex justify-center">
            <div class="w-[900px] flex flex-col">
                <h1 class="text-lg text-gray-600"><a href="/travel" class="text-purple-600">Wisata</a>/{{$travel_data->travelTitle}}</h1>
                <h2 class="text-4xl mt-4">{{$travel_data->travelTitle}}</h2>
                <img class="rounded-3xl mt-2 shadow-xl w-[600px]" src="{{$travel_data->travelImage}}" alt="">
                <div class="mt-4 flex flex-col">
                    <span class="text-3xl font-semibold text-gray-800">Jadwal : {{$travel_data->name}}</span>
                </div>
                <hr class="my-2 border-purple-400 border-2 rounded-full">
                <p class="text-xl text-gray-600">{{$travel_data->description}}</p>
                <div class="flex">
                    <a class="mt-3 flex items-center py-2 px-3 bg-green-500 text-white rounded-full duration-150 ease-out hover:no-underline hover:scale-105 hover:bg-green-600" href="https://wa.me/{{$travel_data->phoneNumber}}" target="_blank">
                        <img class="w-7 invert" src="{{asset('assets/whatsapp.svg')}}" alt="">
                        <span class="text-lg ml-1 pr-1">
                            Pesan Tiket
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