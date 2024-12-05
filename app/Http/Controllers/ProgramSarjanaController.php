<?php

namespace App\Http\Controllers;

use App\Helpers\GlobalFunction;
use App\Models\ProgramSarjana;
use Illuminate\Http\Request;

class ProgramSarjanaController extends MasterController
{
    public function __construct()
    {
        $this->model = ProgramSarjana::class;
        $this->viewPath = 'admin.pages.programsarjana';
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
        $dataProgramSarjana = ProgramSarjana::first();
        if ($dataProgramSarjana) {
            return view('admin.pages.programsarjana.edit', compact('dataProgramSarjana'));
        } else {
            return view('admin.pages.programsarjana.create');
        }
    }

    public function manageStore(Request $request)
    {
        $imagePath = 'programsarjana';
        $validated = $request->validate($this->model::$rules);
        if ($request->hasFile('image')) {
            $imageName = GlobalFunction::saveImage($request->file('image'), uniqid(), $imagePath);
            $validated['image'] = $imageName;
        }
        $this->model::create($validated);
        return redirect()->route('programsarjana.manage')->with('success', 'Data created successfully');
    }

    public function edit($id)
    {
        $dataProgramSarjana = ProgramSarjana::findOrFail($id);
        return view('admin.pages.programsarjana.edit', compact('dataProgramSarjana'));
    }

    public function manageUpdate(Request $request, $id)
    {
        $dataProgramSarjana = ProgramSarjana::findOrFail($id);

        $validated = $request->validate($this->model::$rules);

        $imagePath = 'programsarjana';

        if ($request->hasFile('image')) {
            if ($dataProgramSarjana->image) {
                GlobalFunction::deleteImage($dataProgramSarjana->image, $imagePath);
            }

            $imageName = GlobalFunction::saveImage($request->file('image'), uniqid(), $imagePath);
            $validated['image'] = $imageName;
        }

        $dataProgramSarjana->update($validated);

        return redirect()->route('programsarjana.edit', $id)->with('success', 'Data updated successfully');
    }
}
