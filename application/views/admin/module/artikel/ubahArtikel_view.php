<div class="content col-md-8">
    <div class="card">
    <div class="card-header">
        Ubah Data Artikel
    </div>
    <div class="card-body">
    <script src="<?= BASE_URL();?>assets/js/ckeditor/ckeditor.js"></script>
    <?=
        form_open_multipart("", array('enctype'=>'multipart/formdata'));
    ?>
        <input type="hidden" name="id" value="<?= $artikel_id['artikel_id'];?>">
        <div class="form-group">
            <label>Kategori</label>
            
            <select class="form-control" name="kategori">
                <?php foreach($kategori as $catg): ?>
                    <?php if($artikel_id['kategori_id'] == $catg['kategori_id']): ?>
                        <option value="<?= $catg['kategori_id'];?>" selected><?= $catg['kategori'];?></option>
                    <?php else: ?>
                        <option value="<?= $catg['kategori_id'];?>" ><?= $catg['kategori'];?></option>
                    <?php endif; ?>
                <?php endforeach; ?>
            </select>
            
            <small class="form-text text-danger"><?= form_error('kategori'); ?></small>
        </div>

        <div class="form-group">
            <label>Judul Artikel</label>
            <input type="text" class="form-control" name="judul" value="<?= $artikel_id['judul']; ?>">
            <small class="form-text text-danger"><?= form_error('judul'); ?></small>
        </div>        

        <div class="form-group">
            <label>Isi Artikel</label>
            <span><textarea id="editor" name="isi"><?= $artikel_id['isi']; ?></textarea></span>
            <small class="form-text text-danger"><?= form_error('isi'); ?></small>
        </div>

        <div id="wd-file">
            <label>Gambar</label>
            <span>
                <input type="file" class="form-control-file" name="gambar"> 
                <?= "<img src='".BASE_URL()."assets/img/artikel/$artikel_id[gambar]' style='width: 200px;vertical-align: middle;margin-top:10px;' />"; ?>
            </span> 
            <small class="form-text text-danger"><?= (isset($message))? $message : "";?></small>            
        </div>

        <div class="mt-3">
		<label class="mr-5 ml-2">Status</label>
            <span>
                <input type="radio" name="status" value="on" <?php if($artikel_id['status'] == 'on') { echo "checked='true'";}?>/> On
                <input type="radio" name="status" value="off" <?php if($artikel_id['status'] == 'off') { echo "checked='true'";}?>/> Off
            </span>
            <small class="form-text text-danger"><?= form_error('status'); ?></small>
        </div>

        <div class="mb-3 ml-2">
		    <span><button type="submit" name="ubah" class="btn btn-primary pr-4 pl-4">Ubah Data</button></span>
	    </div>
    <?= form_close(); ?>
    </div>
</div>

<script>
	CKEDITOR.replace("editor");
</script>