<div class="content col-md-8">
    <div class="card">
    <div class="card-header">
        Ubah Data Banner Banner
    </div>
    <div class="card-body">

    <?=
        form_open_multipart("", array('enctype'=>'multipart/formdata'));
    ?>
        <input type="hidden" name="id" value="<?= $banPro_id['banner_id']; ?>">
        <div class="form-group">
            <label>Nama Banner</label>
            <input type="text" class="form-control" name="nama" value="<?= $banPro_id['banner']; ?>">
            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
        </div>

        <div class="form-group">
            <label>Link</label>
            <input type="text" class="form-control" name="link" value="<?= $banPro_id['link']; ?>">
            <small class="form-text text-danger"><?= form_error('link'); ?></small>
        </div>

        <div id="wd-file">
            <label>Gambar</label>
            <input type="file" class="form-control-file" name="gambar">
            <small class="form-text text-danger"><?= (isset($message))? $message : "";?></small> 
            <?= "<img src='".BASE_URL()."assets/img/banner_promosi/$banPro_id[gambar]' style='width: 200px;vertical-align: middle;margin-top:10px;' />"; ?>
        </div>

        <div class="mt-3">
		<label class="mr-5">Status</label>
            <span>
                <input type="radio" name="status" value="on" <?php if($banPro_id['status'] == 'on'){echo "checked='true'"; } ?>/> On
                <input type="radio" name="status" value="off" <?php if($banPro_id['status'] == 'off'){echo "checked='true'"; } ?>/> Off
            </span>
            <small class="form-text text-danger"><?= form_error('status'); ?></small>
        </div>

        <div class="mt-3 mr-5 float-right">
		    <span><input type="submit" class="btn btn-primary pr-4 pl-4" value="Submit"></span>
	    </div>
    <?= form_close(); ?>
    </div>
</div>
