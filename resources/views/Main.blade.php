<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Wisata Harumann</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="assets/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    {{--  Glide.js  --}}
    <link href="https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/css/glide.core.min.css" rel="stylesheet">

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
    <link href="css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

</head>

<body class="font-poppins">

    <!-- Navbar Start -->
    <div class=" bg-indigo-700 text-slate-100">
        <div class="flex w-full p-2 pt-5 justify-between">
            <a href="" class="w-1/5">
                <div class="flex items-center ml-8">
                    <img class="h-auto w-[35px] inline-block" src="{{asset('assets/logo-white.png')}}" alt="">
                    <div class="ml-2">
                        <div class="">Wisata</div>
                        <div class=" font-bold">Haruman</div>
                    </div>
                </div>
            </a>
            <div class="absolute flex justify-center items-center inset-x-1/2">
                <a href="/" class="px-3 py-2 mr-1 rounded-2xl bg-indigo-800">Beranda</a>
                <a href="/travel" class="px-3 py-2  mr-1 duration-150 ease-out hover:bg-indigo-800 rounded-2xl">Wisata</a>
                <a href="/product" class="px-3 py-2  mr-1 duration-150 ease-out hover:bg-indigo-800 rounded-2xl">Belanja</a>
                <a href="/article" class="px-3 py-2 duration-150 ease-out hover:bg-indigo-800 rounded-2xl">Artikel</a>
            </div>
            <div class="flex mr-8 px-3 items-center bg-gradient-to-tr from-green-500 to-emerald-500 rounded-2xl duration-150 ease-out hover:!scale-105 ">
                    <a href="/login" class="flex items-center">
                        <div class="items-center mx-1">
                            <i class="fa fa-sign-in-alt"></i>
                        </div>
                        <div class="mx-1">
                            <div class="">masuk</div>
                        </div>
                    </a>
            </div>
            
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Welcome Start -->
    <div class="flex justify-center bg-gradient-to-t from-violet-600 to-indigo-700 text-slate-100 pt-8 pb-12">
        <div class="container flex p-2 items-center">
            <div class="w-1/2 flex flex-col 2xl:text-6xl xl:text-5xl lg:text-4xl md:text-3xl">
                <div>
                    <span class="leading-tight">
                        Jelajahi Keindahan
                        <div class="font-bold">Desa Haruman</div>
                        Sekarang Juga
                    </span>
                </div>
                <a href="" class="flex text-base">
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
            <div class="w-1/2">
                <div class="mb-5 rounded-lg overflow-auto shadow-lg shadow-gray-700">
                    <img class=" h-auto w-full" src="{{asset('assets/img5.jpg')}}" alt="">
                </div>
                <hr class="border-2 border-violet-500">
            </div>
        </div>
    </div>
    <!-- Welcome End -->

    <!-- Intro Start -->
    <div class="flex justify-center items-center bg-gradient-to-t from-indigo-600 to-violet-600 text-slate-100 p-20">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide !flex !justify-center">
                <div class="container flex p-2 items-center">
                    <div class="w-1/2">
                        <div class="mb-5 rounded-xl overflow-auto shadow-lg shadow-gray-700">
                            <img class="w-full" src="{{asset('assets/img1.jpg')}}" alt="">
                        </div>
                        <hr class="border-2 border-violet-500">
                    </div>
                    <div class="w-1/2 flex flex-col m-24">
                        <div class="mb-2">
                            <h1 class="text-5xl">Apa itu <br><span class="font-bold">Desa Haruman?</span></h1>
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
                <div class="container flex p-2 items-center">
                    <div class="w-1/2">
                        <div class="mb-5 rounded-xl overflow-auto shadow-lg shadow-gray-700">
                            <img class="w-full" src="{{asset('assets/coffeeroaster.jpg')}}" alt="">
                        </div>
                        <hr class="border-2 border-violet-500">
                    </div>
                    <div class="w-1/2 flex flex-col m-24">
                        <div class="mb-2">
                            <h1 class="text-5xl">Inovasi untuk<br><span class="font-bold">Desa Haruman</span></h1>
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

    <!-- Destination Start -->
    <div class="flex justify-center bg-gradient-to-t from-violet-700 to-indigo-600 text-slate-100 p-20">
        <div class="container p-2">
            <div class="w-1/2 mb-10">
                <h1 class="text-5xl">Destinasi <span class="font-bold">Haruman</span></h1>
                <hr class="w-1/4 mt-5 border-2 border-violet-500">
            </div>
            <div class="destinasi_glide">
                <div class="glide__track relative mb-3" data-glide-el="track">
                    <ul class="glide__slides">
                        <li class="glide__slide">
                            <div class="flex justify-center items-center text-4xl w-full h-64 rounded-xl bg-slate-400">
                                Air Terjun
                            </div>
                        </li>
                        <li class="glide__slide">
                            <div class="flex justify-center items-center text-4xl w-full h-64 rounded-xl bg-slate-400">
                                Milky Way
                            </div>
                        </li>
                        <li class="glide__slide">
                            <div class="flex justify-center items-center text-4xl w-full h-64 rounded-xl bg-slate-400">
                                Petik Kebun
                            </div>
                        </li>
                        <li class="glide__slide">
                            <div class="flex justify-center items-center text-4xl w-full h-64 rounded-xl bg-slate-400">
                                Lainnya
                            </div>
                        </li>
                    </ul>
                    <div class="glide__arrows w-full absolute top-1/2 -translate-y-1/2 z-20 flex justify-between"
                        data-glide-el="controls">
                        <button class="glide__arrow glide__arrow--left ml-6" data-glide-dir="<"><i
                                class="fas fa-chevron-circle-left text-3xl opacity-75 hover:text-white hover:opacity-100 transition-all duration-500"></i></button>
                        <button class="glide__arrow glide__arrow--right mr-6" data-glide-dir=">"><i
                                class="fas fa-chevron-circle-right text-3xl opacity-75 hover:text-white hover:opacity-100 transition-all duration-500"></i></button>
                    </div>
                </div>
                <div class="glide__bullets" data-glide-el="controls[nav]">
                    <button class="glide__bullet" data-glide-dir="=0"></button>
                    <button class="glide__bullet" data-glide-dir="=1"></button>
                </div>
            </div>
        </div>
    </div>
    <!-- Destination End -->

    <!-- Belanja Start -->
    <div class="flex justify-center bg-violet-200 text-slate-100 p-20">
        <div class="container p-2">
            <div class="w-1/2 mb-10">
                <h1 class="text-5xl text-slate-900">Belanja <span class="font-bold">Haruman</span></h1>
                <hr class="w-1/4 mt-5 border-2 border-violet-500">
            </div>
            <div class="belanja_glide">
                <div class="glide__track relative mb-3" data-glide-el="track">
                    <ul class="glide__slides">
                        <li class="glide__slide">
                            <div class="flex justify-center items-center text-4xl w-full h-64 rounded-xl bg-slate-400">
                                Kopi Arabika
                            </div>
                        </li>
                        <li class="glide__slide">
                            <div class="flex justify-center items-center text-4xl w-full h-64 rounded-xl bg-slate-400">
                                Jeruk Sunkist
                            </div>
                        </li>
                        <li class="glide__slide">
                            <div class="flex justify-center items-center text-4xl w-full h-64 rounded-xl bg-slate-400">
                                Wortel
                            </div>
                        </li>
                        <li class="glide__slide">
                            <div class="flex justify-center items-center text-4xl w-full h-64 rounded-xl bg-slate-400">
                                Lainnya
                            </div>
                        </li>
                    </ul>
                    <div class="glide__arrows w-full absolute top-1/2 -translate-y-1/2 z-20 flex justify-between"
                        data-glide-el="controls">
                        <button class="glide__arrow glide__arrow--left ml-6" data-glide-dir="<"><i
                                class="fas fa-chevron-circle-left text-3xl opacity-75 hover:text-white hover:opacity-100 transition-all duration-500"></i></button>
                        <button class="glide__arrow glide__arrow--right mr-6" data-glide-dir=">"><i
                                class="fas fa-chevron-circle-right text-3xl opacity-75 hover:text-white hover:opacity-100 transition-all duration-500"></i></button>
                    </div>
                </div>
                <div class="glide__bullets belanja_glide" data-glide-el="controls[nav]">
                    <button class="glide__bullet !bg-purple-400 hover:!bg-purple-600 hover:!border-purple-600"
                        data-glide-dir="=0"></button>
                    <button class="glide__bullet !bg-purple-400 hover:!bg-purple-600 hover:!border-purple-600"
                        data-glide-dir="=1"></button>
                </div>
            </div>
        </div>
    </div>
    <!-- Belanja End -->

    <!-- Artikel Start -->
    <div class="flex justify-center bg-purple-200 text-slate-100 p-20">
        <div class="container p-2">
            <div class="w-1/2 mb-10">
                <h1 class="text-5xl text-slate-900">Artikel <span class="font-bold">Haruman</span></h1>
                <hr class="w-1/4 mt-5 border-2 border-violet-500">
            </div>
            <div class="grid grid-cols-2 gap-8 mx-32 mt-12">
                <div
                    class="flex justify-center relative items-center h-full text-4xl rounded-xl bg-slate-400 overflow-hidden">
                    <img src="assets/garden-1.jpeg" alt="" class="object-cover brightness-50">
                    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full text-clip">
                        <p class="m-5 text-center">Cara menanam bibit buah jeruk yang baik dan benar</p>
                    </div>
                    <a href="#" class="absolute right-8 bottom-8 underline text-lg">Baca Artikel</a>
                </div>
                <div
                    class="flex justify-center relative items-center h-full text-4xl rounded-xl bg-slate-400 overflow-hidden">
                    <img src="assets/garden-1.jpeg" alt="" class="object-cover brightness-50">
                    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full text-clip">
                        <p class="m-5 text-center">Cara menanam bibit buah jeruk yang baik dan benar</p>
                    </div>
                    <a href="#" class="absolute right-8 bottom-8 underline text-lg">Baca Artikel</a>
                </div>
                <div
                    class="flex justify-center relative items-center h-full text-4xl rounded-xl bg-slate-400 overflow-hidden">
                    <img src="assets/garden-1.jpeg" alt="" class="object-cover brightness-50">
                    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full text-clip">
                        <p class="m-5 text-center">Cara menanam bibit buah jeruk yang baik dan benar</p>
                    </div>
                    <a href="#" class="absolute right-8 bottom-8 underline text-lg">Baca Artikel</a>
                </div>
                <div
                    class="flex justify-center relative items-center h-full text-4xl rounded-xl bg-slate-400 overflow-hidden">
                    <img src="assets/garden-1.jpeg" alt="" class="object-cover brightness-50">
                    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full text-clip">
                        <p class="m-5 text-center">Cara menanam bibit buah jeruk yang baik dan benar</p>
                    </div>
                    <a href="#" class="absolute right-8 bottom-8 underline text-lg">Baca Artikel</a>
                </div>
            </div>
            <div class="flex float-right underline text-slate-900 mx-32 mt-3">
                <a href="" class="text-2xl font-semibold">Artikel lainnya..</a>
            </div>
        </div>
    </div>
    <!-- Artikel End -->

    <!-- Footer Start -->
    <div class="flex justify-center bg-purple-300 text-slate-900 p-20">
        <div class="container p-2 flex">
            <div class="w-1/2">
                <div class="w-1/2 mb-10">
                    <h1 class="text-4xl">wisata <span class="font-bold">Haruman</span></h1>
                    <hr class="w-full mt-1 border-2 border-violet-500">
                    <div class="text-xl">
                        <div class="flex items-center">
                            <div class="flex justify-center h-full w-1/12 items-center p-1">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="h-full w-full p-1">
                                <div class="">helpdesk@wisataharuman.com</div>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="flex justify-center h-full w-1/12 items-center p-1">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="h-full w-full p-1">
                                <div class="">Mekarsari, Kec.Cimaung, Kabupaten Bandung, Jawa Barat</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-1/2 mb-10">
                    <h1 class="text-4xl">explore <span class="font-bold">Us!</span></h1>
                    <hr class="w-full mt-1 border-2 border-violet-500">
                    <div class="text-xl">
                        <div class="flex items-center">
                            <div class="flex justify-center h-full w-1/12 items-center p-1">
                                <i class="fas fa-compass"></i>
                            </div>
                            <div class="h-full w-full p-1">
                                <div class="">Destinasi Wisata</div>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="flex justify-center h-full w-1/12 items-center p-1">
                                <i class="fa fa-shopping-cart"></i>
                            </div>
                            <div class="h-full w-full p-1">
                                <div class="">Belanja</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="h-full w-1/2 rounded-2xl overflow-hidden shadow-2xl shadow-slate-800">
                <div id="map" class="h-full w-full"></div>
            </div>
        </div>
    </div>
    <hr class="w-full border-2 border-violet-500">
    <div class="flex justify-center p-5 text-[15px] text-center bg-purple-300 text-slate-700 hover:text-slate-900">
        <div class="container cursor-default">
            ©Wisata Haruman 2023
        </div>
    </div>
    <!-- Footer End -->

    <style>
        .glide__bullets {
            bottom: 2em;
            display: inline-flex;
            list-style: none;
        }

        .glide__bullet {
            background-color: rgba(255, 255, 255, 0.5);
            width: 20px;
            height: 20px;
            padding: 0;
            border-radius: 50%;
            border: 2px solid transparent;
            transition: all 300ms ease-in-out;
            cursor: pointer;
            line-height: 0;
            box-shadow: 0 0.25em 0.5em 0 rgba(0, 0, 0, 0.1);
            margin: 0 0.25em;
        }

        .glide__bullet:hover {
            border: 2px solid white;
        }

        .glide__bullet--active {
            background-color: white;
        }

        .belanja_glide>.glide__bullet--active {
            --tw-bg-opacity: 1 !important;
            background-color: rgb(147 51 234 / var(--tw-bg-opacity)) !important;
        }
    </style>

     <script src="js/app.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
    <script>
        var destination_glide = new Glide('.destinasi_glide', {
            type: 'slider',
            bound: true,
            startAt: 0,
            perView: 3,
            gap: 50,
            peek: {
                before: 0,
                after: 200
            }
        })

        var belanja_glide = new Glide('.belanja_glide', {
            type: 'slider',
            bound: true,
            startAt: 0,
            perView: 3,
            gap: 50,
            peek: {
                before: 0,
                after: 200
            }
        })

        destination_glide.mount()
        belanja_glide.mount()

        {{--  Map Js  --}}

        var map = L.map('map').setView([-7.072505262549012, 107.94232816547856], 13);
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);
        var marker = L.marker([-7.072505262549012, 107.94232816547856]).addTo(map);
    </script>

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {
    loop: true,
    spaceBetween: 30,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
  });

</script>
</body>

</html>
