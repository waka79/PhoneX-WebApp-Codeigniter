<div class="content col-md-8">
    <div class="card">
    <div class="card-header">
        Tambah Data Artikel
    </div>
    <div class="card-body">
    <script src="<?= BASE_URL();?>assets/js/ckeditor/ckeditor.js"></script>
    <?=
        form_open_multipart("", array('enctype'=>'multipart/formdata'));
    ?>
        <div class="form-group">
            <label>Kategori</label>
            
            <select class="form-control" name="kategori">
                <?php foreach($kategori as $catg): ?>
                    <option value="<?= $catg['kategori_id'];?>"><?= $catg['kategori'];?></option>
                <?php endforeach; ?>
            </select>
            
            <small class="form-text text-danger"><?= form_error('kategori'); ?></small>
        </div>

        <div class="form-group">
            <label>Judul Artikel</label>
            <input type="text" class="form-control" name="judul">
            <small class="form-text text-danger"><?= form_error('judul'); ?></small>
        </div>        

        <div class="form-group">
            <label>Isi Artikel</label>
            <span><textarea id="editor" name="isi"></textarea></span>
            <small class="form-text text-danger"><?= form_error('isi'); ?></small>
        </div>

        <div id="wd-file">
            <label>Gambar</label>
            <input type="file" class="form-control-file" name="gambar">
            <small class="form-text text-danger"><?= (isset($message))? $message : "";?></small>            
        </div>

        <div class="mt-3">
		<label class="mr-5 ml-2">Status</label>
            <span>
                <input type="radio" name="status" value="on"/> On
                <input type="radio" name="status" value="off"/> Off
            </span>
            <small class="form-text text-danger"><?= form_error('status'); ?></small>
        </div>

        <div class="mb-3 ml-2">
		    <span><button type="submit" name="tambah" class="btn btn-primary pr-4 pl-4">Tambah Data</button></span>
	    </div>
    <?= form_close(); ?>
    </div>
</div>

<script>
	CKEDITOR.replace("editor");
</script>