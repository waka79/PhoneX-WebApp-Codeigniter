<div class="content col-md-8">
    <div class="card">
    <div class="card-header">
        Ubah Data Banner Artikel
    </div>
    <div class="card-body">

    <?=
        form_open_multipart("", array('enctype'=>'multipart/formdata'));
    ?>
        <input type="hidden" name="id" value="<?= $ubahBanArt['banner_id']; ?>">
        <div class="form-group">
            <label>Judul Artikel</label>
            <input type="text" class="form-control" name="nama" value="<?= $ubahBanArt['banner']; ?>">
            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
        </div>

        <div class="form-group">
            <label>Link</label>
            <input type="text" class="form-control" name="link" value="<?= $ubahBanArt['link']; ?>">
            <small class="form-text text-danger"><?= form_error('link'); ?></small>
        </div>

        <div id="wd-file">
            <label>Gambar</label>
            <span>
                <input type="file" class="form-control-file" name="gambar">
                <small class="form-text text-danger"><?= (isset($message))? $message : "";?></small> 
                <?= "<img src='".BASE_URL()."assets/img/banner_artikel/$ubahBanArt[gambar]' style='width: 200px;vertical-align: middle;margin-top:10px;' />"; ?>
            </span>

        </div>

        <div class="mt-3">
		<label class="mr-5">Status</label>
            <span>
                <input type="radio" name="status" value="on" <?php if($ubahBanArt['status'] == 'on'){echo "checked='true'"; } ?>/> On
                <input type="radio" name="status" value="off" <?php if($ubahBanArt['status'] == 'off'){echo "checked='true'"; } ?>/> Off
            </span>
            <small class="form-text text-danger"><?= form_error('status'); ?></small>
        </div>

        <div class="mb-3 ml-2">
		    <span><button type="submit" name="ubah" class="btn btn-primary pr-4 pl-4">Ubah Data</button></span>
	    </div>
    <?= form_close(); ?>
    </div>
</div>
