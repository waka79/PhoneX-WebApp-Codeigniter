<div class="content offset-md-2 col-md-8 mt-5">
    <div class="card">
    <div class="card-header">
        Daftarkan Toko Anda
    </div>
    <div class="card-body">
 
    <?=
        form_open_multipart("home/tambahToko", array('enctype'=>'multipart/formdata'));
    ?>
        <div class="form-group">
            <label>Nama Toko</label>
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
            <label>Note :</label>
            <ul>
                <li>Anda akan terdaftar sebagai pengiklan reguler. jika ingin upgrade ke premium silahkan hubungi kami : 082162237009(WA)</li>
                <li>Dengan mengupgrade ke premium toko anda akan kami iklankan ke setiap artikel yang kami upload. untuk lebih lanjut silahkan hubungi nomor diatas.</li>
            </ul>
        </div>

        <div class="mt-3 mr-5 float-right">
		    <span><input type="submit" class="btn btn-primary pr-4 pl-4" value="Submit"></span>
	    </div>
    <?= form_close(); ?>
    </div>
</div>
