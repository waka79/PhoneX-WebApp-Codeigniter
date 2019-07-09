<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="<?=BASE_URL(); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?=BASE_URL(); ?>assets/css/style.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap-responsive.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="<?= BASE_URL();?>assets/js/jquery-3.1.1.min.js"></script>
		<script src="<?= BASE_URL();?>js/Slides-SlidesJS-3/source/jquery.slides.min.js"></script>

    <title>Admin Panel</title>
  </head>
  <body>
    <!-- Image and text -->
    <nav class="navbar bg-header">
        <a class="navbar-brand" href="<?= BASE_URL();?>home" target="_blank">
            <img src="" width="30" height="30" class="d-inline-block align-top" alt="">
            PhoneX
        </a>              
    </nav>

    <div id="sidebar">
        <ul>
            <li>
              <a href="<?= BASE_URL();?>admin/kategori">
              <i class="icon icon-bookmark"></i> <span>Category</span></a>
            </li>
            <li>
              <a href="<?= BASE_URL();?>admin/artikel">
              <i class="icon icon-file"></i> <span>Article</span></a> 
            </li>
            <li>
              <a href="<?= BASE_URL();?>admin/shop">
              <i class="icon icon-shopping-cart"></i> <span>Shop Promotion</span></a> 
            </li>
            <li>
              <a href="<?= BASE_URL();?>admin/banArt">
              <i class="icon icon-h-sign"></i> <span>Banner Article</span></a> 
            </li>
            <li>
              <a href="<?= BASE_URL();?>admin/banPro">
              <i class="icon icon-github-alt"></i> <span>Banner Promotion</span></a> 
            </li>
            <li>
              <a href="<?= BASE_URL();?>admin/logout">
              <i class="icon icon-signout"></i> <span>Sign Out</span></a>
            </li>
        </ul>
    </div>


