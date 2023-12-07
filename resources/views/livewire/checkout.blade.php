<div class="container">
    <div class="row">
        <div class="col">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a
                            class="text-dark link-offset-2 link-offset-3-hover link-underline-dark link-underline-opacity-0 link-underline-opacity-75-hover"
                            href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a
                            class="text-dark link-offset-2 link-offset-3-hover link-underline-dark link-underline-opacity-0 link-underline-opacity-75-hover"
                            href="{{ route('keranjang') }}">Keranjang</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            @if (session()->has('message'))
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
        <div class="col">
            <a href="{{ route('keranjang') }}" class="btn btn-sm btn-dark mb-3"><i class="fas fa-arrow-left"></i>
                Kembali</a>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col">
            <h4>Informasi Pembayaran</h4>
            <hr>
            <p>Untuk pembayaran silahkan dapat transfer di rekening di bawah ini sebesar: </p>
            <p><strong>Rp. {{ number_format($total_harga) }}</strong></p>
            
            <div class="media">
                <img src="{{ url('assets/bri.png') }}" class="mr-3" alt="Bank BRI" width="60">
                <div class="media-body">
                    <h5 class="mt-0">BANK BRI</h5>
                    No. Rekening <strong>0001-01-012345-67-8</strong> a/n <strong>Ahmad Erpeel</strong>
                </div>
            </div>
        </div>
        <div class="col">
            <h4>Informasi Pengiriman</h4>
            <hr>
            <form wire:submit.prevent="checkout">
                <div class="form-group">
                    <label for="nohp">No. HP</label>
                    <input id="nohp" type="text" class="form-control @error('nohp') is-invalid @enderror"
                        wire:model="nohp" value="{{ old('nohp') }}" required autocomplete="nohp" autofocus>
                    @error('nohp')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" wire:model="alamat"
                        value="{{ old('alamat') }}" required autocomplete="alamat" autofocus></textarea>
                    @error('alamat')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                {{-- button --}}
                <button type="submit" class="btn btn-success btn-block mt-4"><i class="fas fa-arrow-right"></i>
                    Checkout</button>
            </form>
        </div>
    </div>
