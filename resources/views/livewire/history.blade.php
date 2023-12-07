<div class="container">
    <div class="row">
        <div class="col">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a
                            class="text-dark link-offset-2 link-offset-3-hover link-underline-dark link-underline-opacity-0 link-underline-opacity-75-hover"
                            href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">History</li>
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

    <div class="row mt-4">
        <div class="col">
            <div class="table-responsive">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <td>No.</td>
                            <td>Tanggal Pesan</td>
                            <td>Kode Pemesanan</td>
                            <td>Pesanan</td>
                            <td>Status</td>
                            <td>Total Harga</td>
                        </tr>
                    </thead>
                    <tbody>
                        @auth
                        <?php $no = 1; ?>
                        @forelse($pesanans as $pesanan)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $pesanan->created_at }}</td>
                                <td>{{ $pesanan->kode_pemesanan }}</td>
                                <td>
                                    <?php $pesanan_details = \App\PesananDetail::where('pesanan_id', $pesanan->id)->get(); ?>
                                    @foreach ($pesanan_details as $pesanan_detail)
                                        <img src="{{ url('assets/produk') }}/{{ $pesanan_detail->product->gambar }}"
                                            alt="{{ $pesanan_detail->product->gambar }}" class="img-fluid"
                                            width="50">
                                        {{ $pesanan_detail->product->nama }} <br>
                                    @endforeach
                                </td>
                                <td>
                                    @if ($pesanan->status == 1)
                                        Belum Lunas
                                    @else
                                        Lunas
                                    @endif
                                </td>
                                <td>Rp. {{ number_format($pesanan->total_harga + $pesanan->kode_unik) }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7">Data Kosong</td>
                            </tr>
                        @endforelse
                        @endauth
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <p>Untuk pembayaran silahkan dapat transfer di rekening di bawah ini: </p>

                    <div class="media">
                        <img src="{{ url('assets/bri.png') }}" class="mr-3" alt="Bank BRI" width="60">
                        <div class="media-body">
                            <h5 class="mt-0">BANK BRI</h5>
                            No. Rekening <strong>0001-01-012345-67-8</strong> a/n <strong>Ahmad Erpeel</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
