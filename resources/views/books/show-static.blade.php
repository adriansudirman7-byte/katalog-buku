{{-- resources/views/books/show-static.blade.php --}}
<h1>Detail Buku</h1>

<h2>{{ $book['title'] }}</h2>
<p><b>Penulis:</b> {{ $book['author'] }}</p>
<p><b>Tahun:</b> {{ $book['tahun'] }}</p>
<p><b>ID:</b> {{ $book['id'] }}</p>
<p>{{ $book['deskripsi'] }}</p>

<br>
<a href="/books">Kembali ke Daftar</a>