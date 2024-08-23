<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Menu';
        $subtitle = "Halaman Menu";
        $menu = Menu::all();
        return view('back.menu.index', compact('title', 'menu','subtitle'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:menus',

        ],[
            'name.required' => 'Nama menu harus diisi',
            'slug.required' => 'Slug harus diisi',
            'slug.unique' => 'Slug sudah ada',
        ]);

        Menu::create($request->all());
        return redirect()->route('menu.index')->with('success', 'Menu berhasil ditambahkan');
        $id = Auth::id();

        $this->simpanLogHistori("Menambahkan menu", "Menambahkan menu", $id);


       
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
    public function edit(string $id)
    {
        $menu = Menu::find($id);
        return response()->json($menu);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:menus,slug,'.$id,
        ],[
            'name.required' => 'Nama menu harus diisi',
            'slug.required' => 'Slug harus diisi',
            'slug.unique' => 'Slug sudah ada',
        ]);

        $menu = Menu::find($id);
        $menu->update($request->all());
        return redirect()->route('menu.index')->with('success', 'Menu berhasil diubah');
        $id = Auth::id();

        $this->simpanLogHistori("Mengubah menu", "Mengubah menu", $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $menu = Menu::find($id);
        $menu->delete();
        return redirect()->route('menu.index')->with('success', 'Menu berhasil dihapus');
        $id = Auth::id();

        $this->simpanLogHistori("Menghapus menu", "Menghapus menu", $id);
    }
}
