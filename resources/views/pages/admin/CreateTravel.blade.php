<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Wisata - Wisata Haruman</title>
    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/app.css" rel="stylesheet">
</head>
    
<body>
    <div class="container mt-5">
        <h1 class="text-3xl">Produk Wisata Haruman</h1>
        <form method="post" action="{{ route('post.travel') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group pt-3">
                <label>Judul Wisata</label>
                <input type="text" name="travelTitle" class="form-control rounded-xl border-purple-500 border-2 placeholder:text-gray-400 focus:border-purple-400" placeholder="ketik judul wisata disini" />
            </div>
            <label class="block mb-4">
                <span class="sr-only">Choose File</span>
                <label>Thumbnail Wisata</label>
                <input type="file" name="travelImg-1"
                    class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:text-purple-100 file:bg-purple-700 hover:file:bg-purple-800 hover:file:text-white ease-in-out duration-200" />
                @error('productImage')
                <span class="text-red-600 text-sm">Ukuran File max 2mb</span>
                @enderror
            </label>
            <div class="form-group">
                <label>Nomor Whatsapp</label>
                <input type="text" name="phoneNumber" class="form-control rounded-xl border-purple-500 border-2 placeholder:text-gray-400 focus:border-purple-400" placeholder="08xxxxxxx" />
            </div>
            <div class="form-group flex flex-col">
                <div>
                    <label for="description">Deskripsi Wisata</label>
                </div>
                <div>
                    <textarea id="description" name="description" class="border-purple-500 border-2 w-full rounded-xl py-4 px-4" rows="20" placeholder="Wisata ini merupakan..."></textarea>
                </div>
            </div>
            <div>
                <label for="travelStatus">Status Wisata</label>
            </div>
            <div class="flex items-center">
                <input checked id="travelStatus" type="radio" value="1" name="travelStatus" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2">
                <label for="default-radio-1" class="ml-2 mt-2 text-sm font-medium text-gray-900 ">Setiap Hari</label>
            </div>
            <div class="flex items-center">
                <input id="travelStatus" type="radio" value="2" name="travelStatus" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 ">
                <label for="default-radio-1" class="ml-2 mt-2 text-sm font-medium text-gray-900 ">Tutup</label>
            </div>
            <div class="form-group text-center mt-2">
                <button type="submit" class="text-green-600 font-bold hover:bg-green-600 block border-green-500 border-2 py-2 px-5 rounded-xl hover:text-green-100 ease-in-out duration-150">Tambah</button>
            </div>
        </form>
    </div>
      
</body>
</html>