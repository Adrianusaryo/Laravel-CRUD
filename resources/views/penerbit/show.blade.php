@include('layout.header')
<h3 style="text-align: center">Detail Penerbit</h3>
<table>
    <tbody>
        <tr>
            <td style="width: 150px">Nama Penerbit</td>
            <td style="width: 2px">:</td>
            <td>{{ $penerbit->nama_penerbit }}</td>
        </tr>
    </tbody>
</table>
@include('layout.footer')
