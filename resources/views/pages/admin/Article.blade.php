<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Artikel - Wisata Haruman</title>
    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
</head>
    
<body class="bg-purple-200 font-poppins">
    {{-- aside navbar --}}
    @component('components.NavAdmin')
        
    @endcomponent
    {{-- content --}}
    <div class=" sm:ml-64 p-5">
        {{-- heading --}}
        <div class="w-auto flex justify-between items-center">
            <h2 class="text-2xl !font-semibold">Artikel</h2>
            <a class="bg-green-500 py-1 px-2 rounded-2xl flex items-center justify-center text-gray-200 no-underline duration-150 ease-in-out hover:no-underline hover:bg-green-600 hover:scale-105 hover:text-green-100" href="/adminCreateArticle">
                <span class="max-lg:!text-2xl !text-3xl material-icons">add</span>
                <span class="font-semibold pr-2">Tambah</span>
            </a>
        </div>
        @if ($message = Session::get('success'))
            <div id="msgBox" class="p-2 bg-green-300 mt-4 rounded-2xl">
                <button type="button" class="close mr-2" onclick="closeMsg()">×</button>	
                <strong class="text-black ml-2">{{ $message }}</strong>
            </div>
        @endif
        @if ($article_data->count()==0)
            <div class="w-auto flex justify-center items-center mt-5">
                <p class="text-2xl !font-semibold text-center text-gray-700">Hai {{$admin_name}}, <br>
                <span class="text-xl">Kamu belum memiliki Artikel nih, yuk buat Artikel mu sekarang juga!</span>
                </p>
            </div>
        @endif
        {{-- foreach content --}}
        @php
            $idx = 0;
        @endphp
        @foreach ($article_data as $data)
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
                    <img src={{$data->articleImage}} class="max-md:w-auto w-56 rounded-2xl" alt="" srcset="">
                </div>
                <div class="ml-3 flex flex-col">
                    <h3 class="text-2xl capitalize">{{$data->articleTitle}}</h3>
                    <p class="text-sm capitalize">Update Terakhir: {{$data->updated_at}}</p>
                </div>
            </div>
            <div>
                <a class="bg-cyan-500 py-1 px-2 rounded-2xl flex items-center justify-center text-gray-200 no-underline duration-150 ease-in-out hover:no-underline hover:bg-cyan-600 hover:scale-105 hover:text-green-100 my-1" href="/adminViewArticle/{{$data->id}}">
                    <span class="max-lg:!text-1xl !text-2xl material-icons mr-1">visibility</span>
                    <span class="font-semibold pr-1">Lihat</span>
                </a>
                <a class="bg-orange-500 py-1 px-2 rounded-2xl flex items-center justify-center text-gray-200 no-underline duration-150 ease-in-out hover:no-underline hover:bg-orange-600 hover:scale-105 hover:text-green-100 my-1" href="/adminEditArticle/{{$data->id}}">
                    <span class="max-lg:!text-1xl !text-2xl material-icons mr-1">edit</span>
                    <span class="font-semibold pr-1">Edit</span>
                </a>
                <a class="bg-red-500 py-1 px-2 rounded-2xl flex items-center justify-center text-gray-200 no-underline duration-150 ease-in-out hover:no-underline hover:bg-red-600 hover:scale-105 hover:text-green-100 my-1" href="/adminDelArticle/{{$data->id}}">
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
    <script>
        function closeMsg(){
            var el = document.getElementById("msgBox");
            el.classList.add("hidden");
        }
    </script>
</body>
</html>