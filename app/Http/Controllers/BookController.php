<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View 
     {
        $books = [
            [
                'id' => 1,
                'title' => 'Dasar Pemrograman Web',
                'author' => 'Adrian Sudirman',
            ],
            [
                'id' => 2,
                'title' => 'Basis Data Terapan',
                'author' => 'Adrian Sudirman',
            ],
        ];

        return view('books.index', compact('books'));
    }

    public function show(int $id): View
{
    $books = [
        ['id' => 1, 'title' => 'Dasar Pemrograman Web', 'author' => 'Adrian Sudirman', 'tahun' => 2023, 'deskripsi' => 'Belajar HTML, CSS, JS dasar'],
        ['id' => 2, 'title' => 'Basis Data Terapan', 'author' => 'Adrian Sudirman', 'tahun' => 2024, 'deskripsi' => 'Belajar MySQL & relasi tabel'],
    ];

    // cari buku yang id nya sama dengan yang di klik
    $book = collect($books)->firstWhere('id', $id);

    // kalau id gak ketemu
    if (!$book) {
        abort(404, 'Buku tidak ditemukan');
    }

    return view('books.show-static', compact('book'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    // {
    //     //
    // }

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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
