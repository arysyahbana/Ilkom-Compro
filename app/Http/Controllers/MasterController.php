<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterController extends Controller
{
    protected  $model;
    protected  $viewPath;

    protected $withRelations = [];

    public function index()
    {
        $page = ucwords(str_replace(['-', '_'], ' ', last(explode('.', $this->viewPath))));

        $query = $this->model::query();

        if (!empty($this->withRelations)) {
            $query->with($this->withRelations);
        }

        // Dapatkan semua data dengan atau tanpa relasi
        $data = $query->get();

        // dd($data);
        return view("{$this->viewPath}.index", compact('data', 'page'));
    }

    public function create()
    {
        $page = ucwords(str_replace(['-', '_'], ' ', last(explode('.', $this->viewPath))));
        return view("{$this->viewPath}.create", compact('page'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate($this->model::$rules);
        $this->model::create($validated);
        return redirect()->route(last(explode('.', $this->viewPath)) . '.index')->with('success', 'Data created successfully');
    }

    public function edit($id)
    {
        $page = ucwords(str_replace(['-', '_'], ' ', last(explode('.', $this->viewPath))));
        $item = $this->model::findOrFail($id);
        return view("{$this->viewPath}.edit", compact('item', 'page'));
    }

    public function update(Request $request, $id)
    {
        $rules = $this->model::$rules;
        $validated = $request->validate($rules);

        $item = $this->model::findOrFail($id);
        $item->update($validated);
        return redirect()->route(last(explode('.', $this->viewPath)) . '.index')->with('success', 'Data updated successfully');
    }

    public function destroy($id)
    {
        $this->model::destroy($id);
        return redirect()->route(last(explode('.', $this->viewPath)) . '.index')->with('success', 'Data deleted successfully');
    }
}
