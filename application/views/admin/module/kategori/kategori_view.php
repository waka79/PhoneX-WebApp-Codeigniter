<div class="content col-md-8">
    <div class="card">
    <div class="card-header">
        Kategori
    </div>
    <div class="card-body">

    <?php if($this->session->flashdata('flash')):?>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data kategori <strong>berhasil</strong> <?= $this->session->flashdata('flash');?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
    <?php endif;?>

    <a class="btn btn-primary" href="<?= BASE_URL();?>admin/tambahKategori" role="button">+ Tambah Data</a>
    
    <table class="table mt-3">
        <thead class="thead-dark">
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Nama Kategori</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($kategori as $catg):?>
        <tr>
            <th scope="row"><?= $catg['kategori_id'];?></th>
            <td><?= $catg['kategori'];?></td>
            <td><?= $catg['status'];?></td>
            <td>
                <a class="btn btn-success btn-sm" href="<?= BASE_URL();?>admin/ubahKategori/<?= $catg['kategori_id'];?>" role="button">Edit</a>
                <a class="btn btn-danger btn-sm" href="<?= BASE_URL();?>admin/hapusKategori/<?= $catg['kategori_id'];?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');" role="button">Hapus</a>
            </td>
        </tr>
        <?php endforeach;?>
        </tbody>
    </table>
    </div>
    </div>
</div>
