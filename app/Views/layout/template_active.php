<?php use App\Controllers\Keranjang;
$keranjang = new Keranjang();

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="/../css/style.css">
  </head>
  <body>
    <nav class="bg-body-tertiary">
        <a class="navbar-brand" href="/">
          <i class="icon mb-3" data-feather="home"></i>
          <span class="navbar-brand ms-3 fs-2">Hallo <?= $user['name']; ?></span>          
        </a>

        
        <?php if(!isset($akun)){ ?>
          <div class="">
            <a class="navbar-brand position-relative me-5" href="/keranjang">
              <i data-feather="shopping-cart"></i> 
              <span class="position-absolute top-0 start-100 translate-small badge rounded-pill bg-danger">
                <?= $keranjang->countKeranjang(); ?>
                <span class="visually-hidden">unread messages</span>
              </span>
            </a>
            <a href="/users/akun" class="me-3" type="button">
              <img src="/img/<?= $user['image']; ?>" class="rounded-circle" alt="..." width="30"> 
            </a> 
          </div>
        <?php }else{ ?>
          <a href="/users/logout" class="btn btn-danger me-3" type="button">Logout</a>
        <?php } ?>
        </nav>
        <hr>

    <?= $this->renderSection('content'); ?>
    
    <hr>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center">
                    <h5>About App</h5>
                    <p>Welcome to our application, built with <strong>CodeIgniter 4</strong>. We use this powerful PHP framework to provide a high-performance, scalable solution for managing your needs.</p>
                </div>
                <div class="col-md-6 text-center">
                    <h5>Follow Us</h5>
                    <div class="social-icons">
                        <a href="#" class="fab fa-facebook-f"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-linkedin-in"></a>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col text-center">
                    <p>&copy; 2024 Your Company. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script>
      feather.replace();
    </script>
  </body>
</html>