<div class="row">
    <div class="col-sm-3 card-image ">
        <img class="d-flex justify-content-end" src="{{ asset('Image/' . $data->foto) }}" alt=""
            style="max-width: 250px;Object-fit: cover;">
    </div>
    <div class="col-sm-8 ">
        <table class="table table-borderless">
            <tr>
                <td>Name : {{ $data->nama_lengkap }}</td>
            </tr>
            <tr>
                <td>Nim : {{ $data->nim_nis }}</td>
            </tr>
            <tr>
                <td>alamat : {{ $data->alamat }}</td>
            </tr>
            <tr>
                <td>No Telp : {{ $data->no_hp }}</td>
            </tr>
            <tr>
                <td>Email : {{ $data->email }}</td>
            </tr>
            <tr>
                <td>Jurasan : {{ $data->jurusan }}</td>
            </tr>
            <tr>
                <td>Mulai Magang : {{ $data->mulai_magang }}</td>
            </tr>
            <tr>
                <td>Selesai Magang : {{ $data->selesai_magang }}</td>
            </tr>
            <tr>
                <td>Status : {{ $data->status }}</td>
            </tr>
            <tr>
                <td>Pembimbing Lapangan : {{ $data->Pembina->nama_pembina ?? null }}</td>
            </tr>
        </table>
        <a class="btn btn-primary" href="{{ route('magang.editprofile', $data->id) }}">Edit Data</a>
    </div>
</div>
