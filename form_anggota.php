<form method="post" action="<?= base_url('anggota/simpan') ?>">
    <input type="text" name="nomor_anggota" placeholder="Nomor Anggota" class="form-control"><br>

    <input type="text" name="nama" placeholder="Nama" class="form-control"><br>

    <textarea name="alamat" class="form-control" placeholder="Alamat"></textarea><br>

    <input type="text" name="telepon" placeholder="Telepon" class="form-control"><br>

    <input type="email" name="email" placeholder="Email" class="form-control"><br>

    <input type="date" name="tanggal_daftar" class="form-control"><br>

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>