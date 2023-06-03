<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$product_data->productTitle}} - Wisata Haruman</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <!-- Customized Bootstrap Stylesheet -->
    {{-- <link href="css/style.css" rel="stylesheet"> --}}
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    {{-- <link href="{{asset('css/style.css')}}" rel="stylesheet"> --}}
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
</head>
    
<body class="bg-purple-100 font-poppins">
    @component('components.NavGuest')
        
    @endcomponent
    <div class="p-5 pb-20">
        {{-- heading --}}
        <div class="flex justify-center">
            <div class="w-[1200px] flex max-[900px]:w-auto max-[900px]:flex max-[900px]:flex-col">
                <div class="w-1/2 max-[900px]:w-full">
                    <img class="rounded-2xl" src="{{$product_data->productImage}}" alt="">
                </div>
                <div class="w-1/2 max-[900px]:w-full ml-5 max-[900px]:ml-0 mt-2">
                    <h1 class=" text-gray-600">Produk</h1>
                    <h2 class="text-3xl">{{$product_data->productTitle}}</h2>
                    <h3 class="text-4xl mt-2 font-semibold">Rp. {{$product_data->price}} / Kg</h3>
                    @if ($product_data->isPreorder)
                    <div class="flex mt-3">
                        <div class="border-2 border-purple-600 py-1 px-4 rounded-full text-purple-600">
                            Pre-Order
                        </div>
                    </div>    
                    @endif
                    <p class="mt-3 text-gray-500">{{$product_data->description}}</p>
                    <div class="flex">
                        <a class="mt-3 flex items-center py-2 px-3 bg-green-500 text-white rounded-full duration-150 ease-out hover:no-underline hover:scale-105 hover:bg-green-600" href="https://wa.me/{{$product_data->phoneNumber}}" target="_blank">
                            <img class="w-7 invert" src="{{asset('assets/whatsapp.svg')}}" alt="">
                            <span class="text-lg ml-1 pr-1">
                                Chat Penjual
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <footer class="text-center mt-24 pb-8">
            &copy;wisataharuman.com 2023
        </footer>
    </div>
</body>
</html>