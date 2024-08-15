<div class="container mt-3">
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash();?>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal"
                data-bs-target="#formModal">
                Tambah Data Siswa
            </button>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-lg-6">
            <form action="<?=BASEURL;?>/siswa/cari" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari siswa.." name="keyword" id="keyword"
                        autocomplete="off">
                    <button class="btn btn-outline-primary" type="submit" id="tombolCari">Cari</button>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">


            <h3>Daftar Siswa</h3>

            <ul class="list-group">
                <?php foreach($data['siswa'] as $s): ?>
                <li class="list-group-item d-flex justify-content-between align-items-center">

                    <?=$s['nama']?>
                    <div class="justify-self-end">
                        <a href="<?=BASEURL?>/siswa/hapus/<?=$s['id']?>" class="badge text-bg-danger"
                            style="text-decoration: none;" onclick="return confirm('yakin?');">Hapus</a>
                        <a href="<?=BASEURL?>/siswa/ubah/<?=$s['id']?>" class="badge text-bg-success tampilModalUbah"
                            style="text-decoration: none;" data-bs-toggle="modal" data-bs-target="#formModal"
                            data-id="<?=$s['id'];?>">Ubah</a>
                        <a href="<?=BASEURL?>/siswa/detail/<?=$s['id']?>" class="badge text-bg-primary"
                            style="text-decoration: none;">Details</a>
                    </div>



                </li>

                <?php endforeach;?>
            </ul>

        </div>
    </div>
</div>




<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="formModalLabel">Tambah data siswa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/siswa/tambah" method="post">
                    <input type="hidden" name="id" id="id">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="absen" class="form-label">Absen</label>
                        <input type="number" class="form-control" id="absen" name="absen">
                    </div>
                    <div class="mb-3">
                        <label for="kelas" class="form-label">Kelas</label>
                        <input type="text" class="form-control" id="kelas" name="kelas">
                    </div>
                    <label for="jurusan">Jurusan</label>
                    <select class="form-select" aria-label="Default select example" id="jurusan" name="jurusan">
                        <option selected>Pilih data</option>
                        <option value="Multimedia">Multimedia</option>
                        <option value="Pariwisata">Pariwisata</option>
                        <option value="Akutansi">Akutansi</option>
                    </select>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah data</button>
                </form>
            </div>
        </div>
    </div>
</div>