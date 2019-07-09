<div class="content col-md-8">
    <div class="card">
    <div class="card-header">
        Artikel
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
    <a class="btn btn-primary" href="<?= BASE_URL();?>admin/tambahArtikel" role="button">+ Tambah Data</a>
    <table class="table mt-3">
        <thead class="thead-dark">
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Judul Artikel</th>
            <th scope="col">Kategori</th>
            <th scope="col">Status</th>
            <th scope="col">Jumlah Pengunjung</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($artikel as $art):?>
        <tr>
            <th scope="row"><?= $art['artikel_id'];?></th>
            <td><?= $art['judul'];?></td>
            <td><?= $art['kategori'];?></td>
            <td><?= $art['status'];?></td>
            <td>1200</td>
            <td>
                <a class="btn btn-primary btn-sm" href="<?= BASE_URL();?>admin/detailArtikel/<?= $art['artikel_id'];?>" role="button">Detail</a>
                <a class="btn btn-success btn-sm" href="<?= BASE_URL();?>admin/ubahArtikel/<?= $art['artikel_id'];?>" role="button">Edit</a>
                <a class="btn btn-danger btn-sm" href="<?= BASE_URL();?>admin/hapusArtikel/<?= $art['artikel_id'];?>" role="button">Hapus</a>
            </td>
        </tr>
        <?php endforeach;?>
        </tbody>
    </table>
    </div>
    </div>
</div>
