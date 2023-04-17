<div class="row">

    <div class="col-lg-6 d-flex align-items-center">
        <i class='bx bxs-group' style="font-size:10rem; color:#000;"></i>
        <div>
            <h4>Jumlah Pembina</h4>
            <h4>{{ $data['pembina'] }}</h4>
        </div>
    </div>

    <div class="col-lg-6 d-flex align-items-center">

        @if ($data['magang'] >= 20)
            <i class='bx bxs-group' style="font-size:10rem; color:red;"></i>
            <div>
                <h4>Jumlah Magang Penuh</h4>
            @else
            <i class='bx bxs-group' style="font-size:10rem; color:#000;"></i>
            <div>
                <h4>Jumlah Magang</h4>
            @endif
            <h4>{{ $data['magang'] }}</h4>
        </div>
    </div>

    <div class="card-body">
        <h4>Magang Aktif</h4>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Instansi Pendidikan</th>
                    <th>Jurusan</th>
                    <th>Mulai Magang</th>
                    <th>Selesai Magang</th>
                    <th>Pembina</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data['magang_aktif'] as $magang)
                    <tr>
                        <td>{{ $data['magang_aktif']->firstItem() + $loop->index }}</td>
                        <td>{{ $magang->User->nama_lengkap }}</td>
                        <td>{{ $magang->instansi_pendidikan }}</td>
                        <td>{{ $magang->jurusan }}</td>
                        <td>{{ $magang->mulai_magang }}</td>
                        <td>{{ $magang->selesai_magang }}</td>
                        <td>{{ $magang->pembina->nama_pembina ?? $tidak }}</td>
                        <td>{{ $magang->status }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="d-flex align-items-baseline align-items-betweeen mt-4">
            <p>Showing {{ $data['magang_aktif']->lastItem() }} of total {{ $data['magang_aktif']->total() }} enteries
            </p>
            {{ $data['magang_aktif']->links() }}
        </div>

    </div>

</div>
