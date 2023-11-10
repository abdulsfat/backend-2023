<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public $animals = ["kucing", "ayam", "ikan"];

    public function __construct()
    {
        $this->animals = ["kucing", "ayam", "ikan"];
    }

    public function index()
    {
        echo "Menampilkan data animals :";

        return $this->animals;
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
        // tambah data baru
        echo "Menambahkan hewan baru";
        $this->animals[] = $request->name;
        // jalanin fungsi index
        return $this->animals;
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // mengupdate data hewan
        echo "Mengupdate hewan $id";
        $this->animals[$id] = $request->name;
        return $this->animals;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // menghapus data  hewan berdasar id
        echo "Menghapus hewan";
        unset($this->animals[$id]);
        return $this->animals;
    }
}
