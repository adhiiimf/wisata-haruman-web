<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Produk - Wisata Haruman</title>
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
                <div class="mb-10 flex flex-col justify-center items-center">
                    <h1 class="text-3xl text-center">Apakah anda yakin hapus Produk ini?</h1>
                    <p class="text-center w-96">*Silahkan lihat kembali halaman produk di bawah sebelum anda memastikan menghapus produk ini</p>
                    <div class="flex justify-center mt-2">
                        <a class="mx-1 bg-green-500 py-1 px-2 rounded-2xl flex items-center justify-center text-gray-200 no-underline duration-150 ease-in-out hover:no-underline hover:bg-green-600 hover:scale-105 hover:text-green-100 my-1" href="/adminProduct">
                            <span class="max-lg:!text-1xl !text-2xl material-icons mr-1">arrow_back</span>
                            <span class="font-semibold pr-1">Batal</span>
                        </a>
                        <form action="/adminDelProduct/del/{{$product_data->id}}" method="post">
                            @csrf
                            <button class="mx-1 bg-red-500 py-1 px-2 rounded-2xl flex items-center justify-center text-gray-200 no-underline duration-150 ease-in-out hover:no-underline hover:bg-red-600 hover:scale-105 hover:text-green-100 my-1" href="/adminDelProduct/del/{{$product_data->id}}">
                                <span class="max-lg:!text-1xl !text-2xl material-icons mr-1">delete</span>
                                <span class="font-semibold pr-1">Hapus</span>
                            </button>
                        </form>
                        
                    </div>
                    
                </div>
                <h1 class="text-5xl mb-3 text-center">{{$product_data->productTitle}}</h1>
                <img class="rounded-3xl mt-3 shadow-xl" src="{{$product_data->productImage}}" alt="">
                <h2 class="text-4xl mt-5">Deskripsi</h2>
                <hr class="my-2">
                <p class="text-xl">{{$product_data->description}}</p>
                <h2 class="text-4xl mt-5 flex items-center flex-wrap">
                    Cara Beli
                    @if ($product_data->stocks==1)
                    <span class="ml-3 text-lg py-1 px-2 border-2 border-green-600 rounded-full text-green-600">Tersedia</span>
                    @elseif ($product_data->stocks==2)
                    <span class="ml-3 text-lg py-1 px-2 border-2 border-blue-600 rounded-full text-blue-600">Pre-Order</span>
                    @elseif ($product_data->stocks==3)
                    <span class="ml-3 text-lg py-1 px-2 border-2 border-red-600 rounded-full text-red-600">Habis</span>
                    @endif
                </h2>
                <hr class="my-2">
                <p class="text-xl">
                    @if ($product_data->stocks==1)
                    Hai netizen haruman, produk ini tersedia loh. Kontak Nomor Whatsapp berikut untuk melakukan pembelian produk. Selamat Belanja!
                    @elseif ($product_data->stocks==2)
                    Hai netizen haruman, produk ini tersedia untuk pre-order. Kontak Nomor Whatsapp berikut untuk melakukan pre-order produk. Selamat Belanja!
                    @elseif ($product_data->stocks==3)
                    Hai netizen haruman, ketersediaan produk ini sedang habis. Kontak Nomor Whatsapp berikut untuk memastikan ketersediaan produk. Selamat Belanja!
                    @endif
                    
                </p>
                <div class="flex">
                    <a class="mt-3 flex items-center py-2 px-3 bg-green-500 text-white rounded-full duration-150 ease-out hover:no-underline hover:scale-105 hover:bg-green-600" href="https://wa.me/{{$product_data->phoneNumber}}" target="_blank">
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