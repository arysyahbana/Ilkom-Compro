<?php

namespace App\Http\Controllers;

use App\Helpers\GlobalFunction;
use App\Models\StrukturOrganisasi;
use Illuminate\Http\Request;

class StrukturOrganisasiController extends MasterController
{
    public function __construct()
    {
        $this->model = StrukturOrganisasi::class;
        $this->viewPath = 'admin.pages.strukturorganisasi';
    }

    public function create()
    {
        abort(404);
    }

    public function store(Request $request)
    {
        abort(404);
    }

    public function update(Request $request, $id)
    {
        abort(404);
    }

    public function destroy($id)
    {
        abort(404);
    }

    public function manage()
    {
        $dataStrukturOrganisasi = StrukturOrganisasi::first();
        if ($dataStrukturOrganisasi) {
            return view('admin.pages.strukturorganisasi.edit', compact('dataStrukturOrganisasi'));
        } else {
            return view('admin.pages.strukturorganisasi.create');
        }
    }

    public function manageStore(Request $request)
    {
        $imagePath = 'strukturorganisasi';
        $validated = $request->validate($this->model::$rules);
        if ($request->hasFile('image')) {
            $imageName = GlobalFunction::saveImage($request->file('image'), uniqid(), $imagePath);
            $validated['image'] = $imageName;
        }
        $this->model::create($validated);
        return redirect()->route('strukturorganisasi.edit')->with('success', 'Data created successfully');
    }

    public function edit($id)
    {
        $dataStrukturOrganisasi = StrukturOrganisasi::findOrFail($id);
        return view('admin.pages.strukturorganisasi.edit', compact('dataStrukturOrganisasi'));
    }

    public function manageUpdate(Request $request, $id)
    {
        // Cari data berdasarkan ID
        $dataStrukturOrganisasi = StrukturOrganisasi::findOrFail($id);

        // Validasi data berdasarkan rules
        $validated = $request->validate($this->model::$rules);

        // Path untuk menyimpan gambar
        $imagePath = 'strukturorganisasi';

        // Cek jika ada file gambar yang diupload
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($dataStrukturOrganisasi->image) {
                GlobalFunction::deleteImage($dataStrukturOrganisasi->image, $imagePath);
            }

            // Simpan gambar baru
            $imageName = GlobalFunction::saveImage($request->file('image'), uniqid(), $imagePath);
            $validated['image'] = $imageName;
        }

        // Update data dalam database
        $dataStrukturOrganisasi->update($validated);

        // Redirect ke halaman edit dengan pesan sukses
        return redirect()->route('strukturorganisasi.edit', $id)->with('success', 'Data updated successfully');
    }
}
