{{-- resources/views/books/index.blade.php --}}
{{-- <h1>Daftar Buku</h1>
<ul>
@foreach($books as $book)
    <li>
        <a href="/books/{{ $book['id'] }}">
            {{ $book['title'] }} - {{ $book['author'] }}
        </a>
    </li>
@endforeach
</ul> --}}

@extends('layouts.app')

@section('title', 'Data Buku')

@section('content')
    <h1>Data Buku</h1>

    <ul>
        @forelse ($books as $book)
            <li>
                <a href="{{ route('books.show', $book['id']) }}">
                    {{ $book['title'] }}
                </a>
                - {{ $book['author'] }}
            </li>
        @empty
            <li>Data belum tersedia.</li>
        @endforelse
    </ul>
@endsection