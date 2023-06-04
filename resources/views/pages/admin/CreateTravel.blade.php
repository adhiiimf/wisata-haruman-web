<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Wisata - Wisata Haruman</title>
    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('/css/app.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
</head>
    
<body>
    {{-- aside navbar --}}
    @component('components.NavAdmin')
        
    @endcomponent
    {{-- content --}}
    <div class=" sm:ml-64 p-5">
        <div class="container">
            <h1 class="text-3xl">Tambah Wisata Haruman</h1>
            <form method="post" action="{{ route('post.travel') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group pt-3">
                    <label>Judul Wisata</label>
                    <input type="text" name="travelTitle" class="form-control rounded-xl border-purple-500 border-2 placeholder:text-gray-400 focus:border-purple-400" placeholder="ketik judul wisata disini" />
                </div>
                <label class="block mb-4">
                    <span class="sr-only">Choose File</span>
                    <label>Thumbnail Wisata</label>
                    <input type="file" name="travelImage"
                        class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:text-purple-100 file:bg-purple-700 hover:file:bg-purple-800 hover:file:text-white ease-in-out duration-200" />
                    @error('productImage')
                    <span class="text-red-600 text-sm">Ukuran File max 2mb</span>
                    @enderror
                </label>
                <div class="form-group">
                    <label>Nomor Whatsapp</label>
                    <input type="text" name="phoneNumber" class="form-control rounded-xl border-purple-500 border-2 placeholder:text-gray-400 focus:border-purple-400" placeholder="08xxxxxxx" />
                </div>
                <div>
                    <label for="travelStatus">Jadwal Wisata</label>
                </div>
                <div class="flex items-center mb-4">
                    <select name="travels__schedules_id" class="py-2 bg-purple-200 rounded-xl px-1">
                        @foreach ($schedule_data as $option)
                        <option class="mx-2" value="{{$option->id}}">{{$option->name}}</option>
                        @endforeach        
                    </select>
                </div>
                <div class="form-group flex flex-col">
                    <div>
                        <label for="description">Deskripsi Wisata</label>
                    </div>
                    <div>
                        <textarea id="description" name="description" class="border-purple-500 border-2 w-full rounded-xl py-4 px-4" rows="20" placeholder="Wisata ini merupakan..."></textarea>
                    </div>
                </div>
                <div class="form-group text-center mt-2">
                    <button type="submit" class="text-green-100 font-bold hover:bg-green-600 bg-green-500 border-2 py-1 px-4 rounded-xl  ease-in-out duration-150 flex items-center hover:scale-105">
                        <span class="max-lg:!text-2xl !text-3xl material-icons">add</span>
                        <span class="pr-2">Tambah</span>
                    </button>
                </div>
            </form>
            <footer class="text-center mt-24 pb-8">
                &copy;wisataharuman.com 2023
            </footer>
        </div>
    </div>  
      
</body>
</html>