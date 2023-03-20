<div class="row">
    <div class="col-sm-4 card-image center">
        <img class=" img-thumbnail" src="{{ asset('Image/' . $data->foto) }}" alt=""
            style="max-width: 250px;Object-fit: cover;">
    </div>
    <div class="col-sm-8 ">
        <table class="table table-borderless">


            <ul class="list-group list-group-light">
                <li class="" style="list-style: none
                ">
                    <p><b>Nama :</b> <br> {{ $data->nama_lengkap }}</p>
                    <hr>
                    <p> <b>NIM :</b> <br> {{ $data->nim_nis }}</p>
                    <hr>
                    <p> <b>Alamat :</b> <br> {{ $data->alamat }} </p>
                    <hr>
                    <p> <b>No Telp :</b> <br> {{ $data->no_hp }} </p>
                    <hr>
                    <p> <b>Email :</b> <br> {{ $data->email }} </p>
                    <hr>
                    <p> <b>Jurusan :</b> <br> {{ $data->jurusan }} </p>
                    <hr>
                    <p> <b>Mulai Magang :</b> <br> {{ $data->mulai_magang }} </p>
                    <hr>
                    <p> <b>Selesai Magang :</b> <br> {{ $data->selesai_magang }} </p>
                    <hr>
                    <p> <b>Pembimbing Lapangan :</b> <br> {{ $data->Pembina->nama_pembina ?? '-' }} </p>
                    <hr>

                    <p><b>Status Penerimaan Magang :</b><br>
                        @if (Auth::user()->status == 'active')
                            Diterima
                        @elseif (Auth::user()->status == 'inactive')
                            Sedang Di Proses
                        @else
                            Ditolak
                        @endif
                    </p>
                    <hr>
                    <p> <b>Alasan Diterima :</b> <br> {{ $magang->status_desc }} </p>
                    <hr>
                </li>




            </ul>


            {{-- <tr>
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
                <td>Jurusan : {{ $data->jurusan }}</td>
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
            </tr> --}}
        </table>
        <a class="btn btn-primary" href="{{ route('magang.editprofile', $data->id) }}">Edit Data</a>
    </div>
</div>
