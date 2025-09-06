@include('layout.header')
<h3 style="text-align: center">Tambah Kategori</h3>
<form action="{{ route('kategori.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="">Nama Kategori</label>
        <input type="text" name="nama_kategori" placeholder="Masukan Nama Kategori">
    </div>
    <button type="submit" class="tombol">Submit</button>
</form>
@include('layout.footer')
