<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\OwnerDataKosts;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class OwnerKosController extends Controller
{
    public function data_kos()
    {
        $datas = OwnerDataKosts::all();
        return view('owner.data_kos', compact('datas'));
    }

    public function create()
    {
        return view('owner.create_data_kos');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'nama_kost' => 'required|string|max:255',
            'ketentuan' => 'required|string',
            'lokasi' => 'required|string',
            'peraturan' => 'required|string',
            'spesifikasi' => 'required|string',
            'harga' => 'required|numeric',
            'fasilitas_kamar' => 'required|array',
            'fasilitas_kamar.*' => 'required|string',
            'fasilitas_kamar_mandi' => 'required|string',
            'fasilitas_tempat_parkir' => 'required|string',
            'foto_depan' => 'required|image|mimes:jpeg,png,jpg',
            'foto_dalam' => 'required|image|mimes:jpeg,png,jpg',
        ], [
            'nama_kost.required' => 'Nama kost wajib diisi.',
            'nama_kost.string' => 'Nama kost harus berupa teks.',
            'nama_kost.max' => 'Nama kost tidak boleh lebih dari :max karakter.',
            'ketentuan.required' => 'Ketentuan wajib diisi.',
            'ketentuan.string' => 'Ketentuan harus berupa teks.',
            'lokasi.required' => 'Lokasi wajib diisi.',
            'lokasi.string' => 'Lokasi harus berupa teks.',
            'peraturan.required' => 'Peraturan wajib diisi.',
            'peraturan.string' => 'Peraturan harus berupa teks.',
            'spesifikasi.required' => 'Spesifikasi wajib diisi.',
            'spesifikasi.string' => 'Spesifikasi harus berupa teks.',
            'harga.required' => 'Harga wajib diisi.',
            'harga.numeric' => 'Harga harus berupa angka.',
            'fasilitas_kamar.required' => 'Fasilitas kamar wajib diisi.',
            'fasilitas_kamar.string' => 'Fasilitas kamar harus berupa teks.',
            'fasilitas_kamar_mandi.required' => 'Fasilitas kamar mandi wajib diisi.',
            'fasilitas_kamar_mandi.string' => 'Fasilitas kamar mandi harus berupa teks.',
            'fasilitas_tempat_parkir.required' => 'Fasilitas tempat parkir wajib diisi.',
            'fasilitas_tempat_parkir.string' => 'Fasilitas tempat parkir harus berupa teks.',
            'foto_depan.required' => 'Foto depan wajib diunggah.',
            'foto_depan.image' => 'Foto depan harus berupa file gambar.',
            'foto_depan.mimes' => 'Foto depan hanya dapat menerima file dengan tipe :values.',
            'foto_depan.max' => 'Ukuran file foto depan tidak boleh lebih dari :max kilobita.',
            'foto_dalam.required' => 'Foto dalam wajib diunggah.',
            'foto_dalam.image' => 'Foto dalam harus berupa file gambar.',
            'foto_dalam.mimes' => 'Foto dalam hanya dapat menerima file dengan tipe :values.',
            'foto_dalam.max' => 'Ukuran file foto dalam tidak boleh lebih dari :max kilobita.',
        ]);

        // Mengonversi array fasilitas_kamar menjadi JSON
        $fasilitasKamar = json_encode($request->fasilitas_kamar);

        // Simpan foto_depan
        $fotodepan = $request->file('foto_depan');
        $fotoDepanPath = Str::random(40) . '.' . $fotodepan->getClientOriginalExtension();
        $fotodepan->move(public_path('ownerkos'), $fotoDepanPath);

        // Simpan foto_dalam
        $fotodalam = $request->file('foto_dalam');
        $fotoDalamPath = Str::random(40) . '.' . $fotodalam->getClientOriginalExtension();
        $fotodalam->move(public_path('ownerkos'), $fotoDalamPath);

        // Gunakan create untuk menyimpan data ke dalam database
        $result = OwnerDataKosts::create([
            'nama_kost' => $request->nama_kost,
            'ketentuan' => $request->ketentuan,
            'lokasi' => $request->lokasi,
            'peraturan' => $request->peraturan,
            'spesifikasi' => $request->spesifikasi,
            'harga' => $request->harga,
            'fasilitas_kamar' => $fasilitasKamar,
            'fasilitas_kamar_mandi' => $request->fasilitas_kamar_mandi,
            'fasilitas_tempat_parkir' => $request->fasilitas_tempat_parkir,
            'foto_depan' => $fotoDepanPath,
            'foto_dalam' => $fotoDalamPath,
        ]);

        return redirect()->route('owner.data_kos');
    }

    public function edit(OwnerDataKosts $OwnerDataKosts)
    {
        return view('owner.edit_data_kos', compact('OwnerDataKosts'));
    }

    public function update(Request $request, OwnerDataKosts $OwnerDataKosts)
    {
        $request->validate([
            'nama_kost' => 'required|string|max:255',
            'ketentuan' => 'required|string',
            'lokasi' => 'required|string',
            'peraturan' => 'required|string',
            'spesifikasi' => 'required|string',
            'harga' => 'required|numeric',
            'fasilitas_kamar' => 'required|array',
            'fasilitas_kamar.*' => 'required|string',
            'fasilitas_kamar_mandi' => 'required|string',
            'fasilitas_tempat_parkir' => 'required|string',
            'foto_depan' => 'nullable|image|mimes:jpeg,png,jpg',
            'foto_dalam' => 'nullable|image|mimes:jpeg,png,jpg',
        ], [
            'nama_kost.required' => 'Nama kost wajib diisi.',
            'nama_kost.string' => 'Nama kost harus berupa teks.',
            'nama_kost.max' => 'Nama kost tidak boleh lebih dari :max karakter.',
            'ketentuan.required' => 'Ketentuan wajib diisi.',
            'ketentuan.string' => 'Ketentuan harus berupa teks.',
            'lokasi.required' => 'Lokasi wajib diisi.',
            'lokasi.string' => 'Lokasi harus berupa teks.',
            'peraturan.required' => 'Peraturan wajib diisi.',
            'peraturan.string' => 'Peraturan harus berupa teks.',
            'spesifikasi.required' => 'Spesifikasi wajib diisi.',
            'spesifikasi.string' => 'Spesifikasi harus berupa teks.',
            'harga.required' => 'Harga wajib diisi.',
            'harga.numeric' => 'Harga harus berupa angka.',
            'fasilitas_kamar.required' => 'Fasilitas kamar wajib diisi.',
            'fasilitas_kamar.string' => 'Fasilitas kamar harus berupa teks.',
            'fasilitas_kamar_mandi.required' => 'Fasilitas kamar mandi wajib diisi.',
            'fasilitas_kamar_mandi.string' => 'Fasilitas kamar mandi harus berupa teks.',
            'fasilitas_tempat_parkir.required' => 'Fasilitas tempat parkir wajib diisi.',
            'fasilitas_tempat_parkir.string' => 'Fasilitas tempat parkir harus berupa teks.',
            'foto_depan.required' => 'Foto depan wajib diunggah.',
            'foto_depan.image' => 'Foto depan harus berupa file gambar.',
            'foto_depan.mimes' => 'Foto depan hanya dapat menerima file dengan tipe :values.',
            'foto_depan.max' => 'Ukuran file foto depan tidak boleh lebih dari :max kilobita.',
            'foto_dalam.required' => 'Foto dalam wajib diunggah.',
            'foto_dalam.image' => 'Foto dalam harus berupa file gambar.',
            'foto_dalam.mimes' => 'Foto dalam hanya dapat menerima file dengan tipe :values.',
            'foto_dalam.max' => 'Ukuran file foto dalam tidak boleh lebih dari :max kilobita.',
        ]);

        // Mengonversi array fasilitas_kamar menjadi JSON
        $fasilitasKamar = json_encode($request->fasilitas_kamar);

        if ($request->hasFile('foto_depan')) {
            $fotodepan = $request->file('foto_depan');
            $fotoDepanPath = Str::random(40) . '.' . $fotodepan->getClientOriginalExtension();
            $fotodepan->move(public_path('ownerkos'), $fotoDepanPath);

            // Hapus foto depan yang lama jika ada
            if ($OwnerDataKosts->foto_depan) {
                File::delete(public_path('ownerkos') . '/' . $OwnerDataKosts->foto_depan);
            }
        } else {
            // Jika tidak ada foto depan yang diunggah, gunakan foto lama
            $fotoDepanPath = $OwnerDataKosts->foto_depan;
        }

        // Simpan foto_dalam jika diunggah
        if ($request->hasFile('foto_dalam')) {
            $fotodalam = $request->file('foto_dalam');
            $fotoDalamPath = Str::random(40) . '.' . $fotodalam->getClientOriginalExtension();
            $fotodalam->move(public_path('ownerkos'), $fotoDalamPath);

            // Hapus foto dalam yang lama jika ada
            if ($OwnerDataKosts->foto_dalam) {
                File::delete(public_path('ownerkos') . '/' . $OwnerDataKosts->foto_dalam);
            }
        } else {
            // Jika tidak ada foto dalam yang diunggah, gunakan foto lama
            $fotoDalamPath = $OwnerDataKosts->foto_dalam;
        }

        $result = $OwnerDataKosts->update([
            'nama_kost' => $request->nama_kost,
            'ketentuan' => $request->ketentuan,
            'lokasi' => $request->lokasi,
            'peraturan' => $request->peraturan,
            'spesifikasi' => $request->spesifikasi,
            'harga' => $request->harga,
            'fasilitas_kamar' => $fasilitasKamar,
            'fasilitas_kamar_mandi' => $request->fasilitas_kamar_mandi,
            'fasilitas_tempat_parkir' => $request->fasilitas_tempat_parkir,
            'foto_depan' => $fotoDepanPath,
            'foto_dalam' => $fotoDalamPath,
        ]);

        return redirect()->route('owner.data_kos');
    }

    public function delete(OwnerDataKosts $OwnerDataKosts)
    {

        // Hapus entitas dari database
        $OwnerDataKosts->delete();
        if ($OwnerDataKosts->foto_depan) {
            # code...
            Storage::disk('public')->delete($OwnerDataKosts->foto_depan);
        }
        if ($OwnerDataKosts->foto_dalam) {
            # code...
            Storage::disk('public')->delete($OwnerDataKosts->foto_dalam);
        }

        return redirect()->back()->with('success', 'Data berhasil dihapus.');
    }
}
