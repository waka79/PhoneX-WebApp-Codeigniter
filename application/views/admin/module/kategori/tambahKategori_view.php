<div class="content col-md-8">
    <div class="card">
    <div class="card-header">
        Tambah Data Kategori
    </div>
    <div class="card-body">

    <form method="POST" action="">
        <div class="form-group">
            <label for="nama">Nama Kategori</label>
            <input type="text" class="form-control" name="nama">
            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
        </div>

        <div class="mt-3">
		<label class="mr-5">Status</label>
            <span>
                <input type="radio" name="status" value="on"/> On
                <input type="radio" name="status" value="off"/> Off
            </span>
            <small class="form-text text-danger"><?= form_error('status'); ?></small>
        </div>

        <div class="mt-3 mr-5 float-right">
		    <span><button type="submit" name="tambah" class="btn btn-primary pr-4 pl-4">Tambah Data</button></span>
	    </div>
    </form>
    </div>
</div>
