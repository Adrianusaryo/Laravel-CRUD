@include('layout.header')
<h3 style="text-align: center">Tambah Penerbit</h3>
<form action="{{ route('penerbit.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="">Nama Penerbit</label>
        <input type="text" name="nama_penerbit" placeholder="Masukan Nama Penerbit">
    </div>
    <button type="submit" class="tombol">Submit</button>
</form>
@include('layout.footer')
