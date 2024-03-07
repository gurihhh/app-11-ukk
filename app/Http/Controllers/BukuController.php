<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Models\Buku;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Buku::query();
        
        //pencarian berdasarkan buku
    //     if ($request->has('search')) {
    //         $searchTerm = $request->input('search');
    //         $query->where(function ($query) use ($searchTerm) {
    //         $query->where('buku.judul', 'like', '%' . $searchTerm . '%')
    //               ->orWhere('buku.penulis', 'like', '%' . $searchTerm . '%')
    //               ->orWhere('buku.penerbit', 'like', '%' . $searchTerm . '%');
    //             });
    //         }
            
    //     // Pencarian berdasarkan kategori
    //     if ($request->has('kategori')) {
    //         $kategori = $request->input('kategori');
    //         $query->whereHas('kategori', function ($query) use ($kategori) {
    //             $query->whereIn('kategori.id', $kategori);
    //         }); 
    // }
    $buku = Buku::with('kategori')
    ->get();
        $model = $query->paginate(10);
        return view('admin.data_buku',[
            'routePrefix' => 'buku',
            'title' => 'Data Buku',
            'model' => $model,
            // 'buku'=>$buku,
        ]);
    }

    public function pinjem(Request $request, $id)
    {
        $model = Model::findOrFail($id);
        return view('peminjam.peminjaman_create', compact('model'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('admin.create_buku', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'judul'     => 'required',
            'penulis'   => 'required',
            'penerbit'  => 'required',
            'tahun_terbit' => 'required',
            'deskripsi' => 'required',
            'gambar'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'id_kategori'  => 'required',
            'stok'       => 'required',
        ]);
        $gambar = $request->file('gambar');
        $gambar->storeAs('public/buku', $gambar->hashName());

        $buku = Buku::create([
            'gambar'     => $gambar->hashName(),
            'judul'     => $request->get('judul'),
            'penulis'   => $request->get('penulis'),
            'penerbit'  => $request->get('penerbit'),
            'tahun_terbit' => $request->get('tahun_terbit'),
            'deskripsi' => $request->get('deskripsi'),
            'stok'       => $request->get('stok'),
            'id_kategori' => $request->get('id_kategori'),
        ]);
        // $model->kategori()->attach($request->input('kategori'));
        return redirect()->to('buku');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $buku = Buku::findOrFail($id);
        $kategori = Kategori::all();
        return view('admin.buku_update', compact('buku', 'kategori'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Buku $buku)
    {
        $this->validate($request, [
            'judul'     => 'required',
            'penulis'   => 'required',
            'penerbit'  => 'required',
            'tahun_terbit' => 'required',
            'deskripsi' => 'required',
            'gambar'     => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'id_kategori'  => 'required',  
            'stok'       => 'required',
        ]);

        //check if image is uploaded
        if ($request->hasFile('gambar')) {

            //upload new image
            $gambar = $request->file('gambar');
            $gambar->storeAs('public/buku', $gambar->hashName());

            //delete old image
            Storage::delete('public/buku/'.$buku->image);

            //update post with new image
            $buku->update([
                'gambar'     => $gambar->hashName(),
                'judul'     => $request->get('judul'),
                'penulis'   => $request->get('penulis'),
                'penerbit'  => $request->get('penerbit'),
                'tahun_terbit' => $request->get('tahun_terbit'),
                'deskripsi' => $request->get('deskripsi'),
                'id_kategori'=> $request->get('id_kategori'),
                'stok'       => $request->get('stok'),
            ]);
            // $buku->kategori()->sync($request->input('kategori'));

        } else {

            //update post without image
            $buku->update([
                'judul'     => $request->get('judul'),
                'penulis'   => $request->get('penulis'),
                'penerbit'  => $request->get('penerbit'),
                'tahun_terbit' => $request->get('tahun_terbit'),
                'deskripsi' => $request->get('deskripsi'),
                'id_kategori'=> $request->get('id_kategori'),
                'stok'       => $request->get('stok'),
            ]);
            // $buku->kategori()->sync($request->input('kategori'));
        }
        //redirect to index
        return redirect()->to('buku');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $buku = buku::findorFail($id);
        //delete image
        Storage::delete('public/buku/'. $buku->gambar);

        // $buku->kategori()->detach();

        //delete buku
        $buku->delete();


        //redirect to index
        return redirect()->to('buku');
    }
}