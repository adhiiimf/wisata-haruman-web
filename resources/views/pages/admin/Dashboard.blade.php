<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard - Wisata Haruman</title>
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
    <div class="sm:ml-64 p-5 w-auto h-screen">
        <h1 class="text-xl">Selamat Datang, <span class="capitalize">{{$name}}</span>!</h1>
        <div class="flex justify-center items-center">
            <div class="mt-3 flex flex-row px-7 py-4 lg:py-5 items-center justify-around w-[900px] border-purple-500 border-4 rounded-3xl flex-wrap">
                <div class="flex items-center m-2">
                    <div class="flex flex-col justify-center items-center">
                        <div>
                            <span class="max-lg:!text-3xl !text-5xl material-icons mr-1 text-purple-600">inventory_2</span>
                        </div>
                        <span class="max-lg:text-lg text-xl text-purple-700 font-semibold">Produk</span>
                    </div>
                    <span class="max-lg:text-4xl text-6xl font-semibold ml-2 mb-2 lg:ml-4 text-purple-700">{{$productTotal}}</span>
                </div>
                <div class="flex items-center m-2">
                    <div class="flex flex-col justify-center items-center">
                        <div>
                            <span class="max-lg:!text-3xl !text-5xl material-icons mr-1 text-purple-600">travel_explore</span>
                        </div>
                        <span class="max-lg:text-lg text-xl text-purple-700 font-semibold">Wisata</span>
                    </div>
                    <span class="max-lg:text-4xl text-6xl font-semibold ml-2 mb-2 lg:ml-4 text-purple-700">{{$travelTotal}}</span>
                </div>
                <div class="flex items-center m-2">
                    <div class="flex flex-col justify-center items-center">
                        <div>
                            <span class="max-lg:!text-3xl !text-5xl material-icons mr-1 text-purple-600">newspaper</span>
                        </div>
                        <span class="max-lg:text-lg text-xl text-purple-700 font-semibold">Artikel</span>
                    </div>
                    <span class="max-lg:text-4xl text-6xl font-semibold ml-2 mb-2 lg:ml-4 text-purple-700">{{$articleTotal}}</span>
                </div>
            </div>
        </div>
        <div class=" flex flex-row py-4 lg:py-5 justify-center w-full rounded-3xl flex-wrap">
            
            <a class="no-underline hover:no-underline" href="/adminProduct">
                <div class="flex items-center justify-center m-2 py-3 px-7 bg-gradient-to-tr from-indigo-600 to-purple-600 rounded-3xl w-60 duration-100 ease-linear hover:scale-105 hover:to-indigo-600 hover:from-purple-600">
                    <div class="flex flex-col justify-center items-center ">
                        <div>
                            <span class="max-lg:!text-3xl !text-5xl material-icons mr-1 text-gray-200">inventory_2</span>
                        </div>
                        <span class="text-center max-lg:text-lg text-xl text-gray-200 font-normal">Halaman <br> Produk</span>
                    </div>
                </div>
            </a>
            <a class="no-underline hover:no-underline" href="/adminTravel">
                <div class="flex items-center justify-center m-2 py-3 px-7 bg-gradient-to-tr from-indigo-600 to-purple-600 rounded-3xl w-60 duration-100 ease-linear hover:scale-105 hover:to-indigo-600 hover:from-purple-600">
                    <div class="flex flex-col justify-center items-center ">
                        <div>
                            <span class="max-lg:!text-3xl !text-5xl material-icons mr-1 text-gray-200">travel_explore</span>
                        </div>
                        <span class="text-center max-lg:text-lg text-xl text-gray-200 font-normal">Halaman <br> Wisata</span>
                    </div>
                </div>
            </a>
            <a class="no-underline hover:no-underline" href="/adminArticle">
                <div class="flex items-center justify-center m-2 py-3 px-7 bg-gradient-to-tr from-indigo-600 to-purple-600 rounded-3xl w-60 duration-100 ease-linear hover:scale-105 hover:to-indigo-600 hover:from-purple-600">
                    <div class="flex flex-col justify-center items-center ">
                        <div>
                            <span class="max-lg:!text-3xl !text-5xl material-icons mr-1 text-gray-200">newspaper</span>
                        </div>
                        <span class="text-center max-lg:text-lg text-xl text-gray-200 font-normal">Halaman <br> Artikel</span>
                    </div>
                </div>
            </a>
        </div>
    </div>
</body>
</html>