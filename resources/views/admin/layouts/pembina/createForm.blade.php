@if ($errors->all())
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger">
            {{ $error }}
        </div>
    @endforeach
@endif

<form action="{{ route('pembina.store') }}" method="POST">

    @csrf

    <div class="row">
        <h4>Form Pembina</h4>
        <p>Merupakan halaman pembuatan akun sekaligus data pembina</p>

        <div class="col-lg-6">
            <div class="mb-3">
                <label for="nama_pembina" class="form-label">Nama Pembina</label>
                <input type="text" name="nama_pembina" id="nama_pembina" class="form-control"
                    placeholder="Nama Pembina">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="password">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea name="alamat" id="alamat" class="form-control" cols="20" rows="10" placeholder="alamat"></textarea>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" name="email" id="email" class="form-control" placeholder="email">
            </div>
            <div class="mb-3">
                <label for="bagian_kerja" class="form-label">Bagian Kerja</label>
                <input type="text" name="bagian_kerja" id="bagian_kerja" class="form-control" placeholder="Jabatan">
            </div>
            <div class="mb-3">
                <label for="no_hp" class="form-label">No Hp</label>
                <input type="text" name="no_hp" id="no_hp" class="form-control" placeholder="nomor phone">
            </div>

        </div>

    </div>

    <div class="d-flex gap-2">
        <button type="submit" class="btn btn-primary d-block">Submit</button>
        <button type="rest" class="btn btn-secondary">Reset</button>
    </div>
</form>
