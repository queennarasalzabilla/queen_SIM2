<form method="post" action="<?= site_url('anggota/simpan'); ?>">

<div class="form-group">
    <label>Nomor Anggota</label>
    <input type="text" name="nomor_anggota" class="form-control">
</div>

<div class="form-group">
    <label>Nama</label>
    <input type="text" name="nama" class="form-control">
</div>

<div class="form-group">
    <label>Alamat</label>
    <textarea name="alamat" class="form-control"></textarea>
</div>

<div class="form-group">
    <label>Telepon</label>
    <input type="text" name="telepon" class="form-control">
</div>

<div class="form-group">
    <label>Email</label>
    <input type="email" name="email" class="form-control">
</div>

<div class="form-group">
    <label>Tanggal Daftar</label>
    <input type="date" name="tanggal_daftar" class="form-control">
</div>

<button type="submit" class="btn btn-success">Simpan</button>
<a href="<?= site_url('anggota'); ?>" class="btn btn-secondary">Kembali</a>

</form>