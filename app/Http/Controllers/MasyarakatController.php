<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;
use App\Models\Tanggapan;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;
use File;

class MasyarakatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user()->nik;
        // dd($user);

        return view('pages.masyarakat.index', ['liat'=>$user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.masyarakat.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
        'description' => 'required',
        'image' => 'required',
        ]);

        $nik = Auth::user()->nik;
        $id = Auth::user()->id;
        $name = Auth::user()->name;

        $data = $request->all();
        $data['user_nik']=$nik;
        $data['user_id']=$id;
        $data['name']=$name;
        $data['image'] = $request->file('image')->store('assets/laporan', 'public');



        Alert::success('Berhasil', 'Pengaduan terkirim');
        Pengaduan::create($data);
        return redirect('user');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function lihat() {


        // $user = Auth::user()->pengaduan()->get();
        $user = Auth::user()->nik;


        $items = Pengaduan::all();

        return view('pages.masyarakat.detail', [
            'items' => $items
        ]);

    }

    public function show($id)
    {
        $item = Pengaduan::with([
        'details', 'user'
        ])->findOrFail($id);

        $tangap = Tanggapan::where('pengaduan_id',$id)->first();

        return view('pages.masyarakat.show',[
        'item' => $item,
        'tangap' => $tangap
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
{
    $pengaduan = Pengaduan::findOrFail($id);

    if ($pengaduan->user_id !== auth()->id()) {
        abort(403, 'Anda tidak memiliki akses untuk memperbarui laporan ini.');
    }

    $request->validate([
        'description' => 'required|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
    ]);

    $pengaduan->description = $request->description;

    if ($request->hasFile('image')) {
        if ($pengaduan->image) {
            Storage::disk('public')->delete($pengaduan->image);
        }
        $path = $request->file('image')->store('assets/pengaduan', 'public');
        $pengaduan->image = $path;
    }

    $pengaduan->save();

    Alert::success('Berhasil', 'Laporan berhasil diperbarui.');
    return redirect()->route('pengaduan.show', $id);
}


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        // Cari pengaduan berdasarkan ID dan pastikan pengaduan milik user yang sedang login
        $pengaduan = Pengaduan::where('id', $id)
                             ->where('user_id', auth()->user()->id) // Pastikan pengaduan milik user yang sedang login
                             ->first();

        if (!$pengaduan) {
            Alert::error('Gagal', 'Anda tidak dapat menghapus pengaduan yang bukan milik Anda.');
            // Jika pengaduan tidak ditemukan atau bukan milik user, tampilkan pesan error
            return redirect()->route('masyarakat-dashboard');
        }

        // Hapus pengaduan
        $pengaduan->delete();

        // Tampilkan pesan sukses
        Alert::success('Berhasil', 'Pengaduan telah dihapus');

        // Redirect ke halaman daftar pengaduan user
        return redirect()->route('masyarakat-dashboard');
    }
}
