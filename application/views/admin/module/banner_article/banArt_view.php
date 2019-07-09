<div class="content col-md-9">
    <div class="card">
    <div class="card-header">
        Banner Artikel
    </div>
    <div class="card-body">
    <?php if($this->session->flashdata('flash')):?>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Artikel <strong>berhasil</strong> <?= $this->session->flashdata('flash');?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
    <?php endif;?>
    <a class="btn btn-primary" href="<?= BASE_URL();?>admin/tambah_banArt" role="button">+ Tambah Data</a>
    <table class="table mt-3">
        <thead class="thead-dark">
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Judul Artikel</th>
            <th scope="col">Gambar</th>
            <th scope="col">Link</th>            
            <th scope="col">Status</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($banArt as $banner): ?>
        <tr>
            <th scope="row"><?= $banner['banner_id']; ?></th>
            <td><?= $banner['banner']; ?></td>
            <td><?= "<img src='".BASE_URL()."assets/img/banner_artikel/$banner[gambar]' style='width: 150px;vertical-align: middle;margin-top:10px;' />"; ?></td>
            <td> <a href="<?= $banner['link']; ?>"><?=substr( $banner['link'], 0, 40).'...'; ?></a> </td>
            <td><?= $banner['status']; ?></td>
            <td>
                <a class="btn btn-success btn-sm" href="<?= BASE_URL();?>admin/ubah_BanArt/<?= $banner['banner_id']; ?>" role="button">Edit</a>
                <a class="btn btn-danger btn-sm" href="<?= BASE_URL();?>admin/hapusBanArt/<?= $banner['banner_id']; ?>" role="button">Hapus</a>
            </td>
        </tr>
<?php endforeach; ?>
        </tbody>
    </table>
    </div>
    </div>
</div>