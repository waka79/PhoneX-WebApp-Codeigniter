<div class="content col-md-8">
    <div class="card">
    <div class="card-header">
        Detail Artikel
    </div>
    <div class="card-body">
        <blockquote class="blockquote mb-0">
            <h5 class="card-title"><?= $detail['judul']; ?></h5>
            <?= "<img src='".BASE_URL()."assets/img/artikel/$detail[gambar]' style='width: 300px;vertical-align: middle;margin-top:10px;' />"; ?>
            <p class="card-text"><?= $detail['isi']; ?></p>
        </blockquote>
    </div>
    </div>
</div>