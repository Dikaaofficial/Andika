<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;
use App\Models\Aspirasi;

class HelloInformatikaController extends Controller
{
    // HOME
    public function home()
    {
        return view('andika');
    }

    // FORM
    public function formAnggota()
    {
        return view('form_anggota');
    }

    public function formAspirasi()
    {
        return view('form_aspirasi');
    }

    // ================= ANGGOTA =================

  public function storeAnggota(Request $request)
{
    Anggota::create([
        'nama' => $request->nama,
        'nim' => $request->nim,
        'email' => $request->email,
        'no_hp' => $request->no_hp,
       'jenis_kelamin' => $request->jk ?? 'Laki-laki',
        'alasan' => $request->alasan,
    ]);

    return redirect('/anggota');
}

    public function listAnggota()
    {
        $data = Anggota::all();
        return view('list_anggota', compact('data'));
    }

    public function deleteAnggota($id)
    {
        Anggota::find($id)->delete();
        return redirect('/anggota');
    }

    // ================= ASPIRASI =================

    public function storeAspirasi(Request $request)
    {
       Aspirasi::create([
    'nama' => $request->nama,
    'nim' => $request->nim,
    'topik' => $request->topik,
    'isi' => $request->isi,
    'aksi' => 'kirim', 
]);

        return redirect('/aspirasi');
    }

    public function listAspirasi()
    {
        $data = Aspirasi::all();
        return view('list_aspirasi', compact('data'));
    }

    public function deleteAspirasi($id)
    {
        Aspirasi::find($id)->delete();
        return redirect('/aspirasi');
    }
    // ================= EDIT ANGGOTA (BARU) =================

    public function editAnggota($id)
    {
        $data = Anggota::findOrFail($id);
        return view('edit_anggota', compact('data'));
    }

    // ================= UPDATE ANGGOTA (BARU) =================

    public function updateAnggota(Request $request, $id)
    {
        $anggota = Anggota::findOrFail($id);

        $anggota->update([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'email' => $request->email,
        ]);

        return redirect('/anggota');
    }



    // ================= EDIT ASPIRASI (BARU) =================

    public function editAspirasi($id)
    {
        $data = Aspirasi::findOrFail($id);
        return view('edit_aspirasi', compact('data'));
    }

    // ================= UPDATE ASPIRASI (BARU) =================

    public function updateAspirasi(Request $request, $id)
    {
        $aspirasi = Aspirasi::findOrFail($id);

        $aspirasi->update([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'topik' => $request->topik,
            'isi' => $request->isi,
        ]);

        return redirect('/aspirasi');
    }
}