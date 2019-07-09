      <!--Swiper Slider-->
      <section class="swiper-container" data-autoplay="5000" data-loop="true">
        <div class="swiper-wrapper">
        <?php foreach($bannerArt as $banArt): ?>
          <div class="swiper-slide" data-slide-bg="<?= BASE_URL();?>assets/img/banner_artikel/<?= $banArt['gambar'];?>">
            <div class="swiper-slide-caption">
              <div class="container">
                <div class="row">
                  <div class="col-lg-6"><a class="cta-box cta-box-primary" style="text-decoration:none" href="<?= $banArt['link'];?>" data-caption-animate="fadeInRight" data-caption-duration="800">
                            <h1 class="cta-box-heading">Review</h1>
                            <div class="cta-box-inner">
                              <p class="cta-box-content"><?= $banArt['banner'];?></p>
                              <div class="cta-box-icon fa-angle-right"></div>
                            </div></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      
          <div class="swiper-slide" data-slide-bg="<?= BASE_URL();?>assets/img/banner_promosi/<?= $bannerPro['gambar'];?>">
            <div class="swiper-slide-caption">
              <div class="container">
                <div class="row">
                  <div class="col-lg-7"><a class="cta-box" style="text-decoration:none" href="<?= $bannerPro['link'];?>" data-caption-animate="fadeInRight" data-caption-duration="800">
                            <h1 class="cta-box-heading">Promosi</h1>
                            <div class="cta-box-inner">
                              <p class="cta-box-content"><?= $bannerPro['banner'];?></p>
                              <div class="cta-box-icon fa-angle-right"></div>
                            </div></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-overlay">
          <div class="container">
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </section>
      <!--Offers-->
      <section class="section-xs">
        <div class="container">
          <div class="row row-30">
            <div class="col-sm-6 col-lg-4"><a class="thumbnail thumbnail-secondary" href="<?= BASE_URL();?>home/view_artikel/<?= $artikel_trends['artikel_id'];?>" style="background-image: url(<?= BASE_URL();?>assets/img/artikel/<?= $artikel_trends['gambar'];?>)">
                      <div class="thumbnail-caption">
                        <h3 class="thumbnail-heading" style="color:white"><?= $artikel_trends['kategori']?></h3>
                        <div class="thumbnail-inner">
                          <div class="thumbnail-content"><?= $artikel_trend['judul']?></div>
                          <div class="thumbnail-icon fa-angle-right"></div>
                        </div>
                      </div></a>
            </div>
            <div class="col-sm-6 col-lg-8"><a class="thumbnail thumbnail-wide" href="<?= BASE_URL();?>home/view_artikel/<?= $artikel_trend['artikel_id'];?>" style="background-image: url(<?= BASE_URL();?>assets/img/artikel/<?= $artikel_trend['gambar'];?>)">
                      <div class="thumbnail-caption">
                        <h3 class="thumbnail-heading"><?= $artikel_trend['kategori']?></h3>
                        <div class="thumbnail-inner">
                          <div class="thumbnail-content"><?= $artikel_trend['judul']?></div>
                          <div class="thumbnail-icon fa-angle-right"></div>
                        </div>
                      </div></a>
            </div>
            <?php foreach($artikel as $art): ?>
            <div class="col-sm-6 col-lg-4"><a class="thumbnail" href="<?= BASE_URL();?>home/view_artikel/<?= $art['artikel_id'];?>" style="background-image: url(<?= BASE_URL();?>assets/img/artikel/<?= $art['gambar'];?>)">
                      <div class="thumbnail-caption">
                        <h3 class="thumbnail-heading"><?= $art['kategori'];?></h3>
                        <div class="thumbnail-inner">
                          <div class="thumbnail-content"><?= $art['judul'];?></div>
                          <div class="thumbnail-icon fa-angle-right"></div>
                        </div>
                      </div></a>
            </div>
            <?php endforeach; ?>    
          </div>
        </div>
      </section>
     
      <!--Call To Action-->
            <section class="parallax-container" data-parallax-img="<?= BASE_URL();?>assets/img/gadget.jpg">
              <div class="parallax-inner section-cta">
                <div class="section-cta-inner" >
                  <h1 class="section-cta-heading" >Ayo Bekerjasama,<br class="d-none d-lg-block"> Dapatkan Pelanggan,<br> <span class="font-weight-light">grow & succeed</span></h1>
                  <p class="section-cta-caption" style="color:#cacdd1">Mari bekerjasama dengan PhoneX dan tingkatkan penjualanmu dengan mendaftarkan tokomu. Silahkan klik tombol dibawah untuk bekerjasama.</p><a class="section-cta-btn btn btn-primary btn-lg btn-with-icon" href="<?= BASE_URL();?>home/daftarToko">Daftar <span class="btn-icon fa-angle-right"></span></a>
                </div>
              </div>
            </section>
      <!--Clients-->
      <section class="section-md">
        <div class="container">
          <div class="row row-30">
            <div class="col-12">
              <h2 class="text-uppercase">Rekomendasi <span class="font-weight-light">Toko Untuk Anda</span></h2>
            </div>
            <?php foreach($rekShop as $shop): ?>
            <div class="col-6 col-sm-4 col-lg-3"><a class="client" href="<?= $shop['link'];?>"><img class="client-img" src="<?= BASE_URL();?>assets/img/shop/<?= $shop['gambar'];?>" alt="" width="270" height="170"/></a>
            </div>
            <?php endforeach;?>
          </div>
        </div>
      </section>
      <!--Google Map-->
     
    
      


  




    