
<div class="row">
<div class="container">
		<div id="slides">
      <?php foreach($bannerPro as $banner): ?>
        <a href="<?= $banner['link'];?>"><img style="background-size:cover;" src="<?= BASE_URL(); ?>/assets/img/banner_promosi/<?= $banner['gambar']; ?>"></a>
      <?php endforeach; ?>
    </div>
    <?php foreach($promosi as $art): ?>
    <div class="card mt-3 mb-3 ml-3 mr-3 float-left" style="width: 18rem;">
      <a href="<?= $art['link']; ?>"><img src="<?= BASE_URL();?>assets/img/shop/<?= $art['gambar'];?>" class="card-img-top" alt="..."></a>
      <div class="card-body">
        <h4 class="card-text"><?= $art['nama']?></h4>
      </div>
    </div>
    <?php endforeach;?>
</div>
</div>



    