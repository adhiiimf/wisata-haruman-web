<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Produk - Wisata Haruman</title>
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
            <div class="w-auto flex justify-between items-center">
                <h2 class="text-2xl !font-semibold">Tambah Produk Kamu</h2>
                <a class="bg-red-500 py-1 px-2 rounded-2xl flex items-center justify-center text-gray-200 no-underline duration-150 ease-in-out hover:no-underline hover:bg-red-600 hover:scale-105 hover:text-green-100" href="/adminProduct">
                    <span class="max-lg:!text-2xl !text-3xl material-icons">arrow_back</span>
                    <span class="font-semibold pr-2">Kembali</span>
                </a>
            </div>
            <form method="post" action="{{ route('post.product') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group pt-3">
                    <label>Nama Produk/Barang</label>
                    <input type="text" name="productTitle" class="form-control rounded-xl border-purple-500 border-2 placeholder:text-gray-400 focus:border-purple-400" placeholder="ketik judul artikel/blog disini" />
                </div>
                <label class="block mb-4">
                    <span class="sr-only">Choose File</span>
                    <label>Thumbnail Produk/Barang</label>
                    <input type="file" name="productImage"
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
                        <label for="description">Deskripsi Produk/Barang</label>
                    </div>
                    <div>
                        <textarea id="description" name="description" class="border-purple-500 border-2 w-full rounded-xl py-4 px-4" rows="20" placeholder="Produk ini merupakan..."></textarea>
                    </div>
                </div>
                <div>
                    <label for="stocks">Ketersediaan Produk/Barang</label>
                </div>
                <div class="flex items-center mb-4">
                    <select name="stocks" class="py-2 bg-purple-200 rounded-xl px-1">
                        <option class="mx-2" value="1">Ada</option>
                        <option class="mx-2" value="2">Pre-Order</option>
                        <option class="mx-2" value="3">Habis</option>
                    </select>
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