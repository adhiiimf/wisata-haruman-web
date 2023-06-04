<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Produk - Wisata Haruman</title>
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
                <h2 class="text-2xl !font-semibold">Edit Produk Kamu</h2>
                <a class="bg-red-500 py-1 px-2 rounded-2xl flex items-center justify-center text-gray-200 no-underline duration-150 ease-in-out hover:no-underline hover:bg-red-600 hover:scale-105 hover:text-green-100" href="/adminProduct">
                    <span class="max-lg:!text-2xl !text-3xl material-icons">arrow_back</span>
                    <span class="font-semibold pr-2">Kembali</span>
                </a>
            </div>
            <form method="post" action="{{ route('pages.admin.UpdateProduct', $product->id) }}" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div>
                    <img class=" w-56 rounded-xl" src="{{$product->productImage}}" alt="">
                </div>
                <div class="form-group pt-3">
                    <label>Nama Produk/Barang</label>
                    <input type="text" name="productTitle" value="{{old('productTitle', $product->productTitle)}}" class="form-control rounded-xl border-purple-500 border-2 placeholder:text-gray-400 focus:border-purple-400" placeholder="ketik judul artikel/blog disini" required/>
                </div>
                <div class="form-group">
                    <label>Nomor Whatsapp</label>
                    <input type="number" name="phoneNumber" value="{{old('phoneNumber', $product->phoneNumber)}}" class="form-control rounded-xl border-purple-500 border-2 placeholder:text-gray-400 focus:border-purple-400" placeholder="08xxxxxxx" required/>
                </div>
                <div class="form-group">
                    <label>Harga (Rupiah)</label>
                    <input type="number" name="price" value="{{old('price', $product->price)}}" class="form-control rounded-xl border-purple-500 border-2 placeholder:text-gray-400 focus:border-purple-400" placeholder="4000" required/>
                </div>
                <div class="form-group">
                    <label>Stok Barang</label>
                    <input type="number" name="stocks" value="{{old('stocks', $product->stocks)}}" class="form-control rounded-xl border-purple-500 border-2 placeholder:text-gray-400 focus:border-purple-400" placeholder="500" required/>
                </div>
                <div>
                    <label for="stocks">Apakah harus Pre-Order?</label>
                </div>
                <div class="flex items-center mb-4">
                    <select name="isPreorder" class="py-2 bg-purple-200 rounded-xl px-1" required>
                        @if (!old('isPreorder', $product->isPreorder))
                        <option class="mx-2" value="0" selected>Tidak</option>
                        <option class="mx-2" value="1">Pre-Order</option>   
                        @else
                        <option class="mx-2" value="0">Tidak</option>
                        <option class="mx-2" value="1" selected>Pre-Order</option>    
                        @endif
                    </select>
                </div>
                <div class="form-group flex flex-col">
                    <div>
                        <label for="description">Deskripsi Produk/Barang</label>
                    </div>
                    <div>
                        <textarea id="description" name="description" class="border-purple-500 border-2 w-full rounded-xl py-4 px-4" rows="20" placeholder="Produk ini merupakan..." required>{{old('description', $product->description)}}</textarea>
                    </div>
                </div>
                <div class="form-group text-center mt-2">
                    <button type="submit" class="text-green-100 font-bold hover:bg-green-600 bg-green-500 border-2 py-1 px-4 rounded-xl  ease-in-out duration-150 flex items-center hover:scale-105">
                        <span class="max-lg:!text-2xl !text-3xl material-icons">save</span>
                        <span class="pr-2">Simpan</span>
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