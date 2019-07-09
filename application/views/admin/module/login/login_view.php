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
    <div class="row">
        <div class="container">
            <div class="container-login col-sm-6">
                <div class="card">
                <div class="card-body">
                    <form action="<?= BASE_URL(); ?>admin/login" method="POST">
                        <center><h3>Admin Panel</h3></center>
                        <small class="form-text text-danger"><?= (isset($message))? $message : "";?></small> 
                        <div class="form-group">
                            <label for="exampleInputEmail1">Username</label>
                            <input type="text" class="form-control"  placeholder="Enter email" name="username">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control"  placeholder="Password" name="password">
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit">Login</button>
                    </form>
                </div>
                </div>
            </div>
        </div>        
    </div>
    

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>