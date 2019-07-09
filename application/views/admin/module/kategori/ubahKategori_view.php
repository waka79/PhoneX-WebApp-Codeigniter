<div class="content col-md-8">
    <div class="card">
    <div class="card-header">
        Ubah Data Kategori
    </div>
    <div class="card-body">

    <form method="POST" action="">
        <input type="hidden" name="id" value="<?= $ubahKategori['kategori_id'];?>">
        <div class="form-group">
            <label for="nama">Nama Kategori</label>
            <input type="text" class="form-control" name="nama" value="<?= $ubahKategori['kategori'];?>">
            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
        </div>

        <div class="mt-3">
		<label class="mr-5">Status</label>
            <span>
                <input type="radio" name="status" value="on" <?php if($ubahKategori['status'] == 'on') { echo "checked='true'";}?>/> On
                <input type="radio" name="status" value="off" <?php if($ubahKategori['status'] == 'off') { echo "checked='true'";}?>/> Off
            </span>
            <small class="form-text text-danger"><?= form_error('status'); ?></small>
        </div>

        <div class="mt-3 mr-5 float-right">
		    <span><button type="submit" name="ubah" class="btn btn-primary pr-4 pl-4">Ubah Data</button></span>
	    </div>
    </form>
    </div>
</div>
