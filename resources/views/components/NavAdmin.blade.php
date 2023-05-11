<aside class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0 bg-gradient-to-t from-indigo-600 to-purple-600 shadow-inner">
    <div class="p-4">
        <ul>
            <li class="flex items-center ml-2">
                <img src="/assets/logo-white.png" class="w-8" alt="" srcset="">
                <h1 class="ml-2 text-gray-200 tracking-widest font-medium">Wisata <br> Haruman</h1>
            </li>
            @if (request()->is('adminDashboard'))
            <li class="flex items-center my-2 mt-4">
                <a href="/adminDashboard" class="flex items-center text-gray-200 bg-purple-700 hover:bg-purple-700 hover:text-gray-200 w-full p-2 rounded-xl hover:no-underline no-underline">
                    <span class="material-icons">pie_chart</span>
                    <span class="ml-2">Beranda</span>
                </a>
            </li>
            @else
            <li class="flex items-center my-2 mt-4">
                <a href="/adminDashboard" class="flex items-center text-gray-200 hover:bg-purple-700 hover:text-gray-200 w-full p-2 rounded-xl hover:no-underline no-underline">
                    <span class="material-icons">pie_chart</span>
                    <span class="ml-2">Beranda</span>
                </a>
            </li>    
            @endif
            @if (request()->is('adminProduct') || request()->is('adminCreateProduct') || request()->is('adminViewProduct/*'))
            <li class="flex items-center my-2">
                <a href="/adminProduct" class="flex items-center text-gray-200 bg-purple-700 hover:bg-purple-700 hover:text-gray-200 w-full p-2 rounded-xl hover:no-underline no-underline">
                    <span class="material-icons">inventory_2</span>
                    <span class="ml-2">Produk</span>
                </a>
            </li>
            @else
            <li class="flex items-center my-2">
                <a href="/adminProduct" class="flex items-center text-gray-200 duration-150 ease-linear hover:bg-purple-700 hover:scale-105 hover:text-gray-200 w-full p-2 rounded-xl hover:no-underline no-underline">
                    <span class="material-icons">inventory_2</span>
                    <span class="ml-2">Produk</span>
                </a>
            </li>  
            @endif
            @if (request()->is('adminTravel'))
            <li class="flex items-center my-2">
                <a href="/adminTravel" class="flex items-center text-gray-200 bg-purple-700 hover:bg-purple-700 hover:text-gray-200 w-full p-2 rounded-xl hover:no-underline no-underline">
                    <span class="material-icons">travel_explore</span>
                    <span class="ml-2">Wisata</span>
                </a>
            </li>
            @else
            <li class="flex items-center my-2">
                <a href="/adminTravel" class="flex items-center text-gray-200 duration-150 ease-linear hover:bg-purple-700 hover:scale-105 hover:text-gray-200 w-full p-2 rounded-xl hover:no-underline no-underline">
                    <span class="material-icons">travel_explore</span>
                    <span class="ml-2">Wisata</span>
                </a>
            </li>
            @endif
            @if (request()->is('adminArticle'))
            <li class="flex items-center my-2">
                <a href="/adminArticle" class="flex items-center text-gray-200 bg-purple-700 hover:bg-purple-700 hover:text-gray-200 w-full p-2 rounded-xl hover:no-underline no-underline">
                    <span class="material-icons">newspaper</span>
                    <span class="ml-2">Artikel</span>
                </a>
            </li>
            @else
            <li class="flex items-center my-2">
                <a href="/adminArticle" class="flex items-center text-gray-200 duration-150 ease-linear hover:bg-purple-700 hover:scale-105 hover:text-gray-200 w-full p-2 rounded-xl hover:no-underline no-underline">
                    <span class="material-icons">newspaper</span>
                    <span class="ml-2">Artikel</span>
                </a>
            </li>  
            @endif
            <li class="flex items-center my-2">
                <a href="/logout" class="flex items-center text-gray-200 duration-150 ease-linear hover:bg-red-500 hover:opacity-90 hover:scale-105 hover:text-gray-200 w-full p-2 rounded-xl hover:no-underline no-underline">
                    <span class="material-icons rotate-180">logout</span>
                    <span class="ml-2">Keluar</span>
                </a>
            </li>
        </ul>
    </div>
</aside>