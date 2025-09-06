@include('layout.header')
<h3 style="text-align: center">Detail Kategori</h3>
<table>
    <tbody>
        <tr>
            <td style="width: 150px">Nama Kategori</td>
            <td style="width: 2px">:</td>
            <td>{{ $kategori->nama_kategori }}</td>
        </tr>
    </tbody>
</table>
@include('layout.footer')
