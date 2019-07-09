<div class="content col-md-8">
    <div class="card">
    <div class="card-header">
        Shop Promotion
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
    <a class="btn btn-primary" href="<?= BASE_URL();?>admin/tambahShop" role="button">+ Tambah Data</a>
    <form class="form-inline mr-auto mt-3" method="POST" action="<?= BASE_URL();?>admin/searchShop">
        <input id="myInput" class="form-control mr-sm-2 col-md-6" type="text" placeholder="Search. . ." aria-label="Search" name="keyword">
        <button id="myBtn" class="btn btn-unique btn-rounded btn-sm my-0" type="submit">Search</button>
    </form>
    <table class="table mt-3">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama Toko</th>
                <th scope="col">Level</th>
                <th scope="col">link</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($shop as $shp): ?>
        <tr>
            <th scope="row"><?= $shp['toko_id']; ?></th>
            <td><?= $shp['nama']; ?></td>
            <td><?= $shp['level']; ?></td>
            <td> <a href="<?= $shp['link']; ?>"><?=substr( $shp['link'], 0, 40).'...'; ?></a> </td>
            <td><?= $shp['status']; ?></td>
            <td>
                <a class="btn btn-success btn-sm" href="<?= BASE_URL();?>admin/ubahShop/<?= $shp['toko_id'];?>" role="button">Edit</a>
                <a class="btn btn-danger btn-sm" href="<?= BASE_URL();?>admin/hapusShop/<?= $shp['toko_id'];?>" role="button">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    </div>
    </div>
</div>
<script>
    var input = document.getElementById("myInput");
    input.addEventListener("keyup", function(event) {
        if (event.keyCode === 13) {
            event.preventDefault();
            document.getElementById("myBtn").click();
        }
    });
</script>