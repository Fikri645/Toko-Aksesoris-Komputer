<div class="container">
    <div class="row">
        <div class="col">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a
                            class="text-dark link-offset-2 link-offset-3-hover link-underline-dark link-underline-opacity-0 link-underline-opacity-75-hover"
                            href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Keranjang</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            @if (session()->has('message'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
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
            <div class="table-responsive">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <td>No.</td>
                            <td>Gambar</td>
                            <td>Nama Produk</td>
                            <td>Harga</td>
                            <td>Jumlah</td>
                            <td>Subtotal</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        @forelse($pesanan_details as $pesanan_detail)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td><img src="{{ url('assets/produk') }}/{{ $pesanan_detail->product->gambar }}" alt="{{ $pesanan_detail->product->gambar }}" class="img-fluid" width="100"></td>
                                <td>{{ $pesanan_detail->product->nama }}</td>
                                <td>Rp. {{ number_format($pesanan_detail->product->harga) }}</td>
                                <td>{{ $pesanan_detail->jumlah_pesanan }}</td>
                                <td><strong>Rp. {{ number_format($pesanan_detail->total_harga) }}</strong></td>
                                <td>
                                    <button wire:click="destroy({{ $pesanan_detail->id }})" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                        @empty
                        <tr>
                            <td colspan="7">Data Kosong</td>
                        </tr>
                        @endforelse
                        @if(!empty($pesanan))
                            <tr>
                                <td colspan="5" align="right"><strong>Total Harga :</strong></td>
                                <td><strong>Rp. {{ number_format($pesanan->total_harga) }}</strong></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td colspan="5" align="right"><strong>Kode Unik :</strong></td>
                                <td><strong>Rp. {{ number_format($pesanan->kode_unik) }}</strong></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td colspan="5" align="right"><strong>Total yang harus dibayar :</strong></td>
                                <td><strong>Rp. {{ number_format($pesanan->total_harga+$pesanan->kode_unik) }}</strong></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td colspan="5"></td>
                                <td colspan="2" align="right">
                                    <a href="{{ route('checkout') }}" class="btn btn-success btn-sm"><i class="fas fa-arrow-right"></i> Checkout</a>
                                </td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>