<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        
    <title>Tambah Artikel - Wisata Haruman</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.css" />
    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/app.css" rel="stylesheet">
</head>
    
<body>
    <div class="container mt-5">
        <h1 class="text-3xl">Artikel Wisata Haruman</h1>
        <form method="post" action="{{ route('post.article') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group pt-3">
                <label>Judul Artikel/Blog</label>
                <input type="text" name="articleTitle" class="form-control rounded-xl border-purple-500 border-2 placeholder:text-gray-400 focus:border-purple-400" placeholder="ketik judul artikel/blog disini" />
            </div>
            <label class="block mb-4">
                <span class="sr-only">Choose File</span>
                <label>Thumbnail Artikel/Blog</label>
                <input type="file" name="articleImage"
                    class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:text-purple-100 file:bg-purple-700 hover:file:bg-purple-800 hover:file:text-white ease-in-out duration-200" />
                @error('articleImage')
                <span class="text-red-600 text-sm">Ukuran File max 2mb</span>
                @enderror
            </label>
            <div class="form-group">
                <label>Konten Artikel/Blog</label>
                <textarea id="summernote" name="content" class="border-purple-500 border-2"></textarea>
            </div>
            <div class="form-group text-center">
                <button type="submit" class="text-green-600 font-bold hover:bg-green-600 block border-green-500 border-2 py-2 px-5 rounded-xl hover:text-green-100 ease-in-out duration-150">Simpan Artikel</button>
            </div>
        </form>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.js"></script>
  
    <script type="text/javascript">
        $(document).ready(function () {
            $('#summernote').summernote({
                height: 350,
                // codeviewFilter: false,
                // codeviewIframeFilter: true
            });
        });
    </script>
      
</body>
</html>