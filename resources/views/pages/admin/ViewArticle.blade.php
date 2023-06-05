<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$article_data->articleTitle}} - Wisata Haruman</title>
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
                <h1 class="text-5xl mb-3">{{$article_data->articleTitle}}</h1>
                <span class="flex items-center text-gray-500"><span class="max-lg:!text-2xl !text-3xl material-icons mr-1">schedule</span>{{$article_data->created_at}}</span>
                <img class="rounded-3xl mt-3 shadow-xl" src="{{$article_data->articleImage}}" alt="">
                <hr class="my-2 mb-4">
                <p class="text-xl">{!! $article_data->content !!}</p>
                <footer class="text-center mt-24 pb-8">
                    &copy;wisataharuman.com 2023
                </footer>
            </div>
        </div>
    </div>
</body>
</html>