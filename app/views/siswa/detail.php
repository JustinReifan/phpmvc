<div class="container mt-5">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?=$data['siswa']['nama']?></h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">Absen <?=$data['siswa']['absen']?></h6>
            <p class="card-text"><?=$data['siswa']['kelas']?></p>
            <p class="card-text"><?=$data['siswa']['jurusan']?></p>
            <a href="<?=BASEURL;?>/siswa" class="card-link">Kembali</a>

        </div>
    </div>
</div>