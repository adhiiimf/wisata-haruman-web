<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Belanja - Wisata Haruman</title>
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
            <div class="w-[1200px] flex flex-wrap max-[900px]:w-auto max-[900px]:flex max-[900px]:flex-col justify-center items-center">
                @foreach ($product_data as $product)
                <div class="flex justify-center">
                    <a href="/product/{{$product->id}}">
                        <div class="relative flex text-center items-center justify-center w-72 h-56 bg-violet-800 bg-cover bg-center rounded-2xl brightness-90 max-sm:w-52 max-sm:h-48 m-4" style="background-image: url('{{$product->productImage}}')">
                            <span class="text-2xl flex relative !brightness-100 bg-black w-full py-2 bg-opacity-30 text-center justify-center items-center text-white">
                                {{$product->productTitle}}
                            </span>
                        </div>
                    </a>
                </div>    
                @endforeach
            </div>
        </div>
    </div>
</body>
</html>