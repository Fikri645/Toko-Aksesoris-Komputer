<div class="container">
    <div class="row">
        <div class="col">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-dark link-offset-2 link-offset-3-hover link-underline-dark link-underline-opacity-0 link-underline-opacity-75-hover" href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-dark link-offset-2 link-offset-3-hover link-underline-dark link-underline-opacity-0 link-underline-opacity-75-hover" href="{{ route('products') }}">List Products</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Product Detail</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            @if(session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session('message') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card gambar-product">
                <div class="card-body">
                    <img src="{{ url('assets/produk') }}/{{ $product->gambar }}" alt="{{ $product->gambar }}" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col">
                    <h2><strong>{{$product->nama}}</strong></h2>
                </div>
                <div class="col">
                    @if($product->is_ready == 1)
                    <span class="badge badge-success" style="background-color: green;"><i class="fas fa-check"></i> Ready stok</span>
                    @else
                    <span class="badge badge-danger" style="background-color: red;"><i class="fas fa-times"></i> Stok Habis</span>
                    @endif
                </div>
            </div>
            <h4>Rp. {{ number_format ($product->harga)}}</h4>
            <hr>
            <div class="row">
                <div class="col">
                    <form wire:submit.prevent="masukkanKeranjang">
                        <table class="table" style="border-top: hidden;">
                            <tr>
                                <td>Kategori</td>
                                <td>:</td>
                                @if($product->kategori_id == 1)
                                <td>Mouse</td>
                                @elseif($product->kategori_id == 2)
                                <td>Keyboard</td>
                                @elseif($product->kategori_id == 3)
                                <td>Headset</td>
                                @elseif($product->kategori_id == 4)
                                <td>MousePad</td>
                                @endif
                            </tr>
                            <tr>
                                <td>Merek</td>
                                <td>:</td>
                                <td>{{ $product->merek }}</td>
                            </tr>
                            <tr>
                                <td>Deskripsi</td>
                                <td>:</td>
                                <td>{{ $product->deskripsi }}</td>
                            </tr>
                            <tr>
                                <td>Jumlah</td>
                                <td>:</td>
                                <td>
                                    <input id="jumlah_pesanan" type="text" class="form-control @error('jumlah_pesanan') is-invalid @enderror" wire:model="jumlah_pesanan" value="{{ old('jumlah_pesanan') }}" required autocomplete="jumlah_pesanan" autofocus>
                                    @error('jumlah_pesanan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3" class="text-center">
                                    <button type="submit" class="btn btn-dark btn-block" @if($product->is_ready !== 1) disabled @endif ><i class="fas fa-shopping-cart"></i> Masukkan Keranjang</button>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>