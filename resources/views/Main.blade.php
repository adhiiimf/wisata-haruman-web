<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Wisata Haruman</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Wisata Haruman, Travelling, Nature" name="keywords">
    <meta content="Wisata Haruman Warjabakti" name="description">

    <!-- Favicon -->
    <link href="assets/favicon.ico" rel="icon">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Map Libraries Stylesheet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
        integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
    <!-- Make sure you put this AFTER Leaflet s CSS -->
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
        integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>

    <!-- Customized Bootstrap Stylesheet -->
    {{--  <link href="css/style.css" rel="stylesheet">  --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

</head>

<body class="font-poppins">
    
    <!-- Navbar Start -->
    @component('components.NavGuest')
        
    @endcomponent
    <!-- Navbar End -->

    <!-- Welcome Start -->
    <div class="flex justify-center bg-gradient-to-t from-violet-600 to-indigo-700 text-slate-100 px-8 pt-8 pb-8 max-sm:px-4">
        <div class="container flex p-2 items-center max-sm:flex max-sm:flex-col-reverse">
            <div class="w-1/2 max-sm:mt-4 max-sm:w-full flex flex-col 2xl:text-6xl xl:text-5xl lg:text-4xl md:text-3xl max-sm:text-2xl">
                <div>
                    <span class="leading-tight">
                        Jelajahi Keindahan
                        <div class="font-bold">Desa Haruman</div>
                        Sekarang Juga
                    </span>
                </div>
                <a href="https://goo.gl/maps/MAmHda9moL54YTPQA" target="_blank" class="flex text-base">
                    <div class="flex py-2 px-4 mt-2 bg-slate-700 rounded-xl shadow-lg shadow-slate-800">
                        <div class="flex items-center">
                            <div class="h-full items-center p-1">
                                <i class="fa fa-road"></i>
                            </div>
                            <div class="h-full p-1">
                                <div class="">Jelajahi</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="w-1/2 max-sm:w-full">
                <div class="mb-5 rounded-lg overflow-auto shadow-lg shadow-gray-700">
                    <img class=" h-auto w-full" src="{{asset('assets/img5.jpg')}}" alt="">
                </div>
                <hr class="border-2 border-violet-500">
            </div>
        </div>
    </div>
    <!-- Welcome End -->
    <div class="flex flex-col bg-gradient-to-t from-violet-600 via-indigo-600 to-violet-600 text-slate-100 py-20 max-[800px]:py-10 px-20 max-sm:px-6">
        <div class="w-1/2 max-sm:w-full mb-10">
            <h1 class="text-5xl max-[800px]:text-3xl">Denah Peta <span class="font-bold">Haruman</span></h1>
            <hr class="w-1/4 mt-5 border-2 border-violet-500">
        </div>
        <div class="flex justify-center items-start max-[800px]:items-center max-[800px]:flex max-[800px]:flex-col-reverse">
            <div class="mr-8 max-[800px]:mr-0 text-center mt-3 max-[800px]:mt-10 flex justify-center items-center flex-col">
                <span class="mb-2 mt-4 text-lg">Scan QR Code Berikut</span>
                <img class="w-auto max-sm:w-24 max-[800px]:w-52 my-3 max-sm:my-1" src="{{asset('assets/warjabaktiqrcode.png')}}" alt="">
                <span class=" mt-5 max-sm:mt-2">Lokasi <b>Warjabakti</b></span>
            </div>
            <img class="w-4/5 h-auto rounded-3xl shadow-2xl max-[800px]:w-auto" src="{{asset('assets/haruman_map.png')}}" alt="haruman map">
        </div>
    </div>
    <!-- Intro Start -->
    <div class="flex justify-center items-center bg-gradient-to-t from-yellow-500 to-violet-600 text-slate-100 py-20 max-[800px]:py-10 px-20 max-sm:px-6">
        <div class="swiper videoSwiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide !flex !justify-center">
                <div class="container flex p-2 pb-20 items-center max-[800px]:flex max-[800px]:flex-col">
                    <div class="w-1/2 max-[800px]:w-3/4 max-sm:w-full">
                        <div class="mb-5 rounded-xl overflow-auto shadow-lg shadow-gray-700">
                            <img class="w-full" src="{{asset('assets/img1.jpg')}}" alt="">
                        </div>
                        <hr class="border-2 border-violet-500">
                    </div>
                    <div class="w-1/2 flex flex-col mt-8 mx-24 max-[800px]:mx-4 max-[800px]:w-3/4  max-sm:w-full">
                        <div class="mb-2">
                            <h1 class="text-3xl">Apa itu <br><span class="font-bold">Desa Haruman?</span></h1>
                            <hr class="w-1/4 mt-2 border-2 border-violet-500">
                            <br>
                            <p class="text-xl text-gray-300">
                                Hai Semua, yuk tonton video berikut untuk mengetahui apa itu desa haruman dan kenapa kamu harus berkunjung kesini.
                            </p>
                        </div>
                        <a class="flex item-center" href="https://www.youtube.com/watch?v=hMHOxXZvsnI&t=81s" target="_blank">
                            <div class="rounded-full py-2 px-4 bg-gradient-to-tr from-red-200 to-red-100 shadow-2xl flex items-center hover:scale-105 duration-150 ease-linear">
                                <img class="w-7 filter" src="{{asset('assets/youtube.svg')}}" alt="" srcset="">
                                <span class="ml-2 text-red-600 font-semibold">
                                    Tonton Video
                                </span>
                                
                            </div>
                        </a>
                    </div>
                </div>
              </div>
              <div class="swiper-slide !flex !justify-center">
                <div class="container flex p-2 pb-20 items-center max-[800px]:flex max-[800px]:flex-col">
                    <div class="w-1/2 max-[800px]:w-3/4">
                        <div class="mb-5 rounded-xl overflow-auto shadow-lg shadow-gray-700">
                            <img class="w-full" src="{{asset('assets/coffeeroaster.jpg')}}" alt="">
                        </div>
                        <hr class="border-2 border-violet-500">
                    </div>
                    <div class="w-1/2 flex flex-col mt-8 mx-24 max-[800px]:mx-4 max-[800px]:w-3/4">
                        <div class="mb-2">
                            <h1 class="text-3xl">Inovasi untuk<br><span class="font-bold">Desa Haruman</span></h1>
                            <hr class="w-1/4 mt-2 border-2 border-violet-500">
                            <br>
                            <p class="text-xl text-gray-300">
                                Salah satu produk unggulan desa haruman yaitu biji kopi arabica. Oleh karena itu Telkom University berinovasi dengan alat roasting kopi semi otomatis untuk membantu petani kopi.
                            </p>
                        </div>
                        <a class="flex item-center" href="https://youtu.be/jIabTYFgUJo" target="_blank">
                            <div class="rounded-full py-2 px-4 bg-gradient-to-tr from-red-200 to-red-100 shadow-2xl flex items-center hover:scale-105 duration-150 ease-linear">
                                <img class="w-7 filter" src="{{asset('assets/youtube.svg')}}" alt="" srcset="">
                                <span class="ml-2 text-red-600 font-semibold">
                                    Tonton Video
                                </span>
                                
                            </div>
                        </a>
                    </div>
                </div>
              </div>
            </div>
            <div class="swiper-pagination ![--swiper-theme-color: #e5e5e5]"></div>
        </div>
    </div>
    <!-- Intro End -->
    <div class="flex flex-col bg-gradient-to-t from-orange-400 to-yellow-500  text-slate-100 py-20 max-[800px]:py-10 px-20 max-sm:px-6 justify-center items-center">
        <div class="container flex p-2 pb-20 items-center justify-center max-[800px]:flex max-[800px]:flex-col">
            <div class="w-1/2 max-[800px]:w-3/4 max-sm:w-full">
                <div class="mb-5 rounded-xl overflow-auto shadow-lg shadow-gray-700">
                    <img class="w-full" src="{{asset('assets/treasureofharuman.jpg')}}" alt="">
                </div>
                <hr class="border-2 border-yellow-800">
            </div>
            <div class="w-1/2 flex flex-col mt-8 mx-24 max-[800px]:mx-4 max-[800px]:w-3/4  max-sm:w-full">
                <div class="mb-2">
                    <h1 class="text-3xl">Treasure <br><span class="font-bold">of Haruman</span></h1>
                    <hr class="w-1/4 mt-2 border-2 border-yellow-800">
                    <br>
                    <p class="text-xl text-gray-100">
                        Artikel seputar rahasia dari Desa Haruman. Yuk Baca untuk lihat lebih lanjut keindahan alam dan masyarakat Desa Haruman
                    </p>
                </div>
                <a class="flex item-center" href="https://www.youtube.com/watch?v=hMHOxXZvsnI&t=81s" target="_blank">
                    <div class="rounded-full py-2 px-4 bg-gradient-to-tr from-gray-800 to-gray-900 shadow-2xl flex items-center hover:scale-105 duration-150 ease-linear">
                        <i class="fas fa-book-open text-orange-300"></i>
                        <span class="ml-2 text-orange-300 font-semibold">
                            Baca Artikel
                        </span>
                        
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- Destination Start -->
    <div class="flex justify-center bg-gradient-to-t from-violet-700 to-orange-400 text-slate-100 py-20 max-[800px]:py-10 px-20 max-sm:px-4">
        <div class="container p-2">
            <div class="w-1/2 mb-10">
                <h1 class="text-5xl max-[800px]:text-3xl">Destinasi <span class="font-bold">Haruman</span></h1>
                <hr class="w-1/4 mt-5 border-2 border-violet-500">
            </div>
            <div class="swiper travelSwiper">
                <div class="swiper-wrapper pb-20">
                    @foreach ($travel_data as $travel)
                        <div class="swiper-slide !flex !justify-center">
                            <a href="/travel/{{$travel->id}}">
                                <div class="relative flex text-center items-center justify-center w-72 h-56 bg-violet-800 bg-cover bg-center rounded-2xl brightness-90 max-sm:w-52 max-sm:h-48" style="background-image: url('{{$travel->travelImage}}')">
                                    <span class="text-2xl flex relative !brightness-100 bg-black w-full py-2 bg-opacity-30 text-center justify-center items-center">
                                        {{$travel->travelTitle}}
                                    </span>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
    <!-- Destination End -->

    <!-- Belanja Start -->
    <div class="flex justify-center bg-gradient-to-t from-violet-200 to-indigo-200 text-slate-100 py-20 max-[800px]:py-10 px-20 max-sm:px-4">
        <div class="container p-2">
            <div class="w-1/2 mb-10">
                <h1 class="text-5xl max-[800px]:text-3xl text-slate-900">Belanja <span class="font-bold">Haruman</span></h1>
                <hr class="w-1/4 mt-5 border-2 border-violet-500">
            </div>
            <div class="swiper productSwiper">
                <div class="swiper-wrapper pb-20">
                    @foreach ($product_data as $product)
                        <div class="swiper-slide !flex !justify-center">
                            <a href="/product/{{$product->id}}">
                                <div class="relative flex text-center items-center justify-center w-72 h-56 bg-violet-800 bg-cover bg-center rounded-2xl brightness-90 max-sm:w-52 max-sm:h-48" style="background-image: url('{{$product->productImage}}')">
                                    <span class="text-2xl flex relative !brightness-100 bg-black w-full py-2 bg-opacity-30 text-center justify-center items-center">
                                        {{$product->productTitle}}
                                    </span>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
    <!-- Belanja End -->

    <!-- Artikel Start -->
    <div class="flex justify-center bg-gradient-to-t from-cyan-100 to-violet-200 text-slate-100 py-20 max-[800px]:py-10 px-20 max-sm:px-4">
        <div class="container p-2">
            <div class="w-1/2 mb-10">
                <h1 class="text-5xl max-[800px]:text-3xl text-slate-900">Artikel <span class="font-bold">Haruman</span></h1>
                <hr class="w-1/4 mt-5 border-2 border-violet-500">
            </div>
            <div class="grid grid-cols-2 gap-8 mx-32 max-lg:mx-10 max-[800px]:mx-14 max-[800px]:grid-cols-1 mt-12 max-sm:mx-0">
                @for ($i = 0; $i < 4; $i++)
                <a href="">
                    <div
                    class="flex justify-center relative items-center h-full text-xl rounded-xl bg-slate-400 overflow-hidden duration-100 ease-linear hover:scale-105">
                    <img src="{{asset('assets/jeruk-min.jpg')}}" alt="" class="object-cover brightness-50">
                    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full text-clip">
                        <p class="m-5 text-start">Cara menanam bibit buah jeruk yang baik dan benar</p>
                    </div>
                </div>
                </a>
                @endfor
            </div>
            <div class="flex float-right underline text-slate-900 mx-32 max-[800px]:mx-0 mt-3">
                <a href="" class="text-xl font-semibold">Artikel lainnya..</a>
            </div>
        </div>
    </div>
    <!-- Artikel End -->

    <!-- Footer Start -->
    <div class="flex justify-center bg-gradient-to-t from-violet-300 to-cyan-100 text-slate-900 py-20 max-[800px]:py-10 px-20 max-sm:px-4">
        <div class="container p-2 flex flex-row max-[800px]:flex max-[800px]:flex-col">
            <div class="w-1/2 max-[800px]:w-auto">
                <div class="w-1/2 max-[800px]:w-auto mb-10">
                    <h1 class="text-2xl">wisata <span class="font-bold">Haruman</span></h1>
                    <hr class="w-full mt-1 border-2 border-violet-500">
                    <div class="text-xl">
                        <div class="flex items-center">
                            <div class="flex justify-center h-full w-1/12 items-center p-1">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="h-full w-full p-1">
                                <div class="text-lg">qna@wisataharuman.com</div>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex justify-center h-full w-1/12 items-center p-1">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="h-full w-full p-1">
                                <div class="text-lg">Mekarsari, Kec.Cimaung, Kabupaten Bandung, Jawa Barat</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-1/2 max-[800px]:w-auto mb-10">
                    <h1 class="text-2xl">explore <span class="font-bold">Us!</span></h1>
                    <hr class="w-full mt-1 border-2 border-violet-500">
                    <div class="text-xl">
                        <div class="flex items-center">
                            <div class="flex justify-center h-full w-1/12 items-center p-1">
                                <i class="fas fa-compass"></i>
                            </div>
                            <div class="h-full w-full p-1">
                                <div class="text-lg">Destinasi Wisata</div>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="flex justify-center h-full w-1/12 items-center p-1">
                                <i class="fa fa-shopping-cart"></i>
                            </div>
                            <div class="h-full w-full p-1">
                                <div class="text-lg">Belanja</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="h-auto w-1/2 max-[800px]:hidden rounded-2xl overflow-hidden shadow-2xl shadow-slate-800">
                <div id="map" class="h-full w-full"></div>
            </div>
        </div>
    </div>
    <hr class="w-full border-2 border-violet-400">
    <div class="flex justify-center p-5 text-[15px] text-center bg-violet-300 text-slate-700 hover:text-slate-900">
        <div class="container cursor-default">
            ©Wisata Haruman 2023
        </div>
    </div>
    <!-- Footer End -->

    @component('components.Script')
        
    @endcomponent

</body>

</html>
