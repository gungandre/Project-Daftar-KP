@if ($errors->all())
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger">
            {{ $error }}
        </div>
    @endforeach
@endif

<form action="{{ route('pembina.update', $pembina->id) }}" method="POST">

    @csrf
    @method('PATCH')

    <div class="mb-3 row">

        <div class="col-lg-6">
            <div class="mb-3">
                <label for="nama_pembina" class="form-label">Nama Pembina</label>
                <input type="text" name="nama_pembina" id="nama_pembina" class="form-control"
                    placeholder="Nama Pembina" value="{{ $pembina->nama_pembina }}">
            </div>

            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea name="alamat" id="alamat" class="form-control" cols="0" rows="10" placeholder="alamat">{{ $pembina->alamat }}
                </textarea>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="mb-3">
                <label for="bagian_kerja" class="form-label">Bagian Kerja</label>
                <input type="text" name="bagian_kerja" id="bagian_kerja" class="form-control" placeholder="Jabatan"
                    value="{{ $pembina->bagian_kerja }}">
            </div>
            <div class="mb-3">
                <label for="no_hp" class="form-label">No Hp</label>
                <input type="text" name="no_hp" id="no_hp" class="form-control" placeholder="nomor phone"
                    value="{{ $pembina->no_hp }}">
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select name="status" id="status" class="form-control">
                    <option value="" disabled selected>-- Pilih Status --</option>
                    <option value="aktif" @if ($pembina->status == 'aktif') selected @endif>Aktif</option>
                    <option value="tidak_aktif" @if ($pembina->status == 'tidak_aktif') selected @endif>Tidak aktif</option>
                </select>
            </div>

        </div>

    </div>

    <hr>

    <div class="row">

        <h6>Account User</h6>
        <div class="col">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" name="email" id="email" class="form-control" placeholder="email"
                    value="{{ $pembina->user->email }}">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="password">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">password confirm</label>
                <input type="password" name="password_confirmation " id="password_confirmation " class="form-control"
                    placeholder="password">
            </div>
        </div>

    </div>

    <div class="gap-2 d-flex">
        <button type="submit" class="btn btn-primary d-block">Update</button>
    </div>
</form>
