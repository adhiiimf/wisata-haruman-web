@if (request()->is('product/*') || request()->is('product'))
<div class=" bg-transparent text-purple-700">
    <div class="flex w-full p-2 pt-5 pb-5 max-sm:px-0 justify-between">
        <a href="" class="w-1/5">
            <div class="flex items-center ml-8 max-sm:ml-4">
                <img class="h-auto w-[35px] inline-block" src="{{asset('assets/logo-color.png')}}" alt="">
                <div class="ml-2">
                    <div class="">Wisata</div>
                    <div class=" font-bold">Haruman</div>
                </div>
            </div>
        </a>
        <div class="absolute flex justify-center items-center inset-x-1/2 max-[800px]:hidden">
            <a href="/" class="px-3 py-2  mr-1 duration-150 ease-out hover:bg-indigo-700 rounded-2xl hover:text-purple-100">Beranda</a>
            <a href="/travel" class="px-3 py-2  mr-1 duration-150 ease-out hover:bg-indigo-700 rounded-2xl hover:text-purple-100">Wisata</a>
            <a href="/product" class="px-3 py-2 mr-1 rounded-2xl bg-indigo-700 text-purple-100">Belanja</a>
            <a href="/article" class="px-3 py-2 duration-150 ease-out hover:bg-indigo-700 rounded-2xl hover:text-purple-100">Artikel</a>
        </div>
        <div class="flex mr-8 max-sm:mr-4 px-3 items-center bg-gradient-to-tr from-green-500 to-emerald-500 rounded-2xl duration-150 ease-out hover:!scale-105 ">
                <a href="/login" class="flex items-center text-white">
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

@else
<div class="bg-indigo-700 text-slate-100">
    <div class="flex w-full p-2 pt-5 pb-5 max-sm:px-0 justify-between">
        <a href="" class="w-1/5">
            <div class="flex items-center ml-8 max-sm:ml-4">
                <img class="h-auto w-[35px] inline-block" src="{{asset('assets/logo-white.png')}}" alt="">
                <div class="ml-2">
                    <div class="">Wisata</div>
                    <div class=" font-bold">Haruman</div>
                </div>
            </div>
        </a>
        <div class="absolute flex justify-center items-center inset-x-1/2 max-[800px]:hidden">
            <a href="/" class="px-3 py-2 mr-1 rounded-2xl bg-indigo-800">Beranda</a>
            <a href="/travel" class="px-3 py-2  mr-1 duration-150 ease-out hover:bg-indigo-800 rounded-2xl">Wisata</a>
            <a href="/product" class="px-3 py-2  mr-1 duration-150 ease-out hover:bg-indigo-800 rounded-2xl">Belanja</a>
            <a href="/article" class="px-3 py-2 duration-150 ease-out hover:bg-indigo-800 rounded-2xl">Artikel</a>
        </div>
        <div class="flex mr-8 max-sm:mr-4 px-3 items-center bg-gradient-to-tr from-green-500 to-emerald-500 rounded-2xl duration-150 ease-out hover:!scale-105 ">
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

@endif