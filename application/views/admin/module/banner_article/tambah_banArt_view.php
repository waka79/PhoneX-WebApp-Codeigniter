<div class="content col-md-8">
    <div class="card">
    <div class="card-header">
        Tambah Data Banner Artikel
    </div>
    <div class="card-body">

    <?=
        form_open_multipart("", array('enctype'=>'multipart/formdata'));
    ?>
        <div class="form-group">
            <label>Nama Banner</label>
            <input type="text" class="form-control" name="nama">
            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
        </div>

        <div class="form-group">
            <label>Link</label>
            <input type="text" class="form-control" name="link">
            <small class="form-text text-danger"><?= form_error('link'); ?></small>
        </div>

        <div id="wd-file">
            <label>Gambar</label>
            <input type="file" class="form-control-file" name="gambar">
            <small class="form-text text-danger"><?= (isset($message))? $message : "";?></small> 
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
		    <span><input type="submit" class="btn btn-primary pr-4 pl-4" value="Submit"></span>
	    </div>
    <?= form_close(); ?>
    </div>
</div>
