<?php

namespace App\Http\Controllers;

use App\Kategori;
use App\Pesanan;
use App\PesananDetail;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Livewire\WithPagination;

class AdminController extends Controller
{
    use WithPagination;
    public function __construct()
    {
        // jika belum login maka redirect ke login
        $this->middleware('auth');
    }

    public function index()
    {
        // jika role admin
        if (auth()->user()->role == 'admin') {
            return view('admin-page', [
                'kategoris' => Kategori::all(),
                'pesanans' => Pesanan::all(),
                'products' => Product::all(),
                'users' => User::all(),
            ]);
        } else {
            return redirect()->route('home');
        }
    }

    public function product()
    {
        $products = Product::paginate(8);
        // jika role admin
        if (auth()->user()->role == 'admin') {
            return view('admin-product', [
                'kategoris' => Kategori::all(),
                'products' => $products,
            ]);
        } else {
            return redirect()->route('home');
        }
    }

    public function productAdd()
    {
        // jika role admin
        if (auth()->user()->role == 'admin') {
            return view('admin-product-add', [
                'kategoris' => Kategori::all(),
            ]);
        } else {
            return redirect()->route('home');
        }
    }

    public function productCreate(Request $request)
    {
        // jika role admin
        if (auth()->user()->role == 'admin') {
            // simpan gambar
            $gambar = $request->file('gambar');
            $namaGambar = time() . '.' . $gambar->getClientOriginalExtension();
            $gambar->move('assets/produk', $namaGambar);

            Product::create([
                'nama' => $request->input('nama'),
                'kategori_id' => $request->input('kategori'),
                'harga' => $request->input('harga'),
                'merek' => $request->input('merek'),
                'deskripsi' => $request->input('deskripsi'),
                'gambar' => $namaGambar,
                'is_ready' => $request->input('is_ready'),
            ]);
            session()->flash('message', 'Sukses Menambahkan Produk');
            return redirect()->route('admin-product');
        } else {
            return redirect()->route('home');
        }
    }

    public function productEdit($id)
    {
        $product = Product::find($id);
        // jika role admin
        if (auth()->user()->role == 'admin') {
            return view('admin-product-edit', [
                'kategoris' => Kategori::all(),
                'product' => $product,
            ]);
        } else {
            return redirect()->route('home');
        }
    }

    public function productUpdate(Request $request, $id)
    {
        $product = Product::find($id);
        // jika role admin
        if (auth()->user()->role == 'admin') {
            // jika gambar tidak diubah
            if ($request->file('gambar') == "") {
                $product->update([
                    'nama' => $request->input('nama'),
                    'kategori_id' => $request->input('kategori'),
                    'harga' => $request->input('harga'),
                    'merek' => $request->input('merek'),
                    'deskripsi' => $request->input('deskripsi'),
                    'is_ready' => $request->input('is_ready'),
                ]);
                session()->flash('message', 'Sukses Mengupdate Produk');
                return redirect()->route('admin-product');
            }
            // jika gambar diubah
            else {
                // hapus gambar lama
                unlink('assets/produk/' . $product->gambar);
                // simpan gambar baru
                $gambar = $request->file('gambar');
                $namaGambar = time() . '.' . $gambar->getClientOriginalExtension();
                $gambar->move('assets/produk', $namaGambar);
                $product->update([
                    'nama' => $request->input('nama'),
                    'kategori_id' => $request->input('kategori'),
                    'harga' => $request->input('harga'),
                    'merek' => $request->input('merek'),
                    'deskripsi' => $request->input('deskripsi'),
                    'gambar' => $namaGambar,
                    'is_ready' => $request->input('is_ready'),
                ]);
                session()->flash('message', 'Sukses Mengupdate Produk');
                return redirect()->route('admin-product');
            }
        } else {
            return redirect()->route('home');
        }
    }

    public function productDelete($id)
    {
        $product = Product::find($id);
        // jika role admin
        if (auth()->user()->role == 'admin') {
            $product->delete();
            session()->flash('message', 'Sukses Menghapus Produk');
            return redirect()->route('admin-product');
        } else {
            return redirect()->route('home');
        }
    }

    public function pesanan()
    {
        $pesanans = Pesanan::paginate(8);
        // jika role admin
        if (auth()->user()->role == 'admin') {
            return view('admin-pesanan', [
                'kategoris' => Kategori::all(),
                'pesanans' => $pesanans,
                'pesanan_detail' => PesananDetail::all(),
            ]);
        } else {
            return redirect()->route('home');
        }
    }

    public function pesananUpdate(Request $request, $id)
    {
        $pesanan = Pesanan::find($id);
        // jika role admin
        if (auth()->user()->role == 'admin') {
            $pesanan->update([
                'status' => $request->input('status'),
            ]);
            session()->flash('message', 'Sukses Mengupdate Pesanan');
            return redirect()->route('admin-pesanan');
        } else {
            return redirect()->route('home');
        }
    }

    public function pesananDetail($id)
    {
        $pesanan = Pesanan::find($id);
        // jika role admin
        if (auth()->user()->role == 'admin') {
            return view('admin-pesanan-detail', [
                'kategoris' => Kategori::all(),
                'pesanan' => $pesanan,
                'pesanan_details' => PesananDetail::paginate(8)
            ]);
        } else {
            return redirect()->route('home');
        }
    }
}
