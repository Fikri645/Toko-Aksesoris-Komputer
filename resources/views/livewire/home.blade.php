<div class="container">
    <div class="banner">
        <img src="{{ url('assets/slider/slider.png') }}" alt="banner" class="img-fluid shadow">
    </div>

    <section class="pilih-kategori">
        <h3 class="mt-5"><strong>Pilih Kategori</strong></h3>
        <div class="row mt-4">
            @foreach($kategoris as $kategori)
            <div class="col">
                <div class="card shadow">
                    <a class="btn" href="{{ route('products.kategori', $kategori->id) }}">
                        <div class="card-body text-center">
                            <img src="{{ url('assets/kategori') }}/{{ $kategori->gambar }}" alt="{{ $kategori->gambar }}" class="img-fluid shadow">
                            <h3 class="card-title mt-3"><strong>{{ $kategori->nama }}</strong></h3>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <section class="products mt-5 mb-5">
        <h3 class="mt-5"><strong>Best Products</strong> <a href="{{ route('products') }}" class="btn btn-dark float-right"><i class="fas fa-eye"></i> Lihat Semua</a></h3>
        <div class="row mt-4">
            @foreach($products as $product)
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <img src="{{ url('assets/produk') }}/{{ $product->gambar }}" alt="{{ $product->gambar }}" class="img-fluid">
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <h5><strong>{{ $product->nama }}</strong></h5>
                                <h5>Rp. {{ number_format($product->harga) }}</h5>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <a href="{{ route('products.detail', $product->id) }}" class="btn btn-dark btn-block"><i class="fas fa-eye"></i> Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
</div>