<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Produk - Wisata Haruman</title>
    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/app.css" rel="stylesheet">
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
        <div class="w-auto flex justify-between items-center">
            <h2 class="text-2xl !font-semibold">Produk</h2>
            <a class="bg-green-500 py-1 px-2 rounded-2xl flex items-center justify-center text-gray-200 no-underline duration-150 ease-in-out hover:no-underline hover:bg-green-600 hover:scale-105 hover:text-green-100" href="/adminCreateProduct">
                <span class="max-lg:!text-2xl !text-3xl material-icons">add</span>
                <span class="font-semibold pr-2">Tambah</span>
            </a>
        </div>
        @if ($product_data->count()==0)
            <div class="w-auto flex justify-center items-center mt-5">
                <p class="text-2xl !font-semibold text-center text-gray-700">Hai {{$admin_name}}, <br>
                <span class="text-xl">Kamu belum memiliki produk nih, yuk tambah produk mu sekarang juga, selamat berjualan!</span>
                </p>
            </div>
        @endif
        {{-- foreach content --}}
        @php
            $idx = 0;
        @endphp
        @foreach ($product_data as $data)
        @if ($idx>0)
        <div class="w-auto flex items-center justify-between mt-3 pt-3  border-t-2 border-purple-300">
        @else
        <div class="w-auto flex items-center justify-between mt-3">
        @endif
        @php
            $idx = $idx + 1;
        @endphp
            <div class="flex w-auto items-center">
                <div>
                    <img src={{$data->productImage}} class="max-md:w-auto w-56 rounded-2xl" alt="" srcset="">
                </div>
                <div class="ml-3 flex flex-col">
                    <h3 class="text-2xl capitalize">{{$data->productTitle}}</h3>
                    <p class=" truncate w-80">{{$data->description}}</p>
                    <span>Harga : <b class="text-gray-700">Rp. {{$data->price}}</b></span>
                    <span>Stok Barang : <b class="text-gray-700">{{$data->stocks}}</b></span>
                    <span>Status : 
                    @if ($data->isPreorder==0)
                        <b class="text-gray-700">Tidak Pre-Order</b>
                    @else
                        <b class="text-gray-700">Pre-Order</b> 
                    @endif
                    </span>
                    <span>Kontak : <b class="text-gray-700">{{$data->phoneNumber}}</b></span>
                </div>
            </div>
            <div>
                <a class="bg-cyan-500 py-1 px-2 rounded-2xl flex items-center justify-center text-gray-200 no-underline duration-150 ease-in-out hover:no-underline hover:bg-cyan-600 hover:scale-105 hover:text-green-100 my-1" href="/adminViewProduct/{{$data->id}}">
                    <span class="max-lg:!text-1xl !text-2xl material-icons mr-1">visibility</span>
                    <span class="font-semibold pr-1">Lihat</span>
                </a>
                <a class="bg-orange-500 py-1 px-2 rounded-2xl flex items-center justify-center text-gray-200 no-underline duration-150 ease-in-out hover:no-underline hover:bg-orange-600 hover:scale-105 hover:text-green-100 my-1" href="">
                    <span class="max-lg:!text-1xl !text-2xl material-icons mr-1">edit</span>
                    <span class="font-semibold pr-1">Edit</span>
                </a>
                <a class="bg-red-500 py-1 px-2 rounded-2xl flex items-center justify-center text-gray-200 no-underline duration-150 ease-in-out hover:no-underline hover:bg-red-600 hover:scale-105 hover:text-green-100 my-1" href="/adminDelProduct/{{$data->id}}">
                    <span class="max-lg:!text-1xl !text-2xl material-icons mr-1">delete</span>
                    <span class="font-semibold pr-1">Hapus</span>
                </a>
            </div>
        </div>
        @endforeach
        <footer class="text-center mt-24 pb-8">
            &copy;wisataharuman.com 2023
        </footer>
    </div>
</body>
</html>