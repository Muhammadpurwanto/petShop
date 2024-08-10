<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="/../css/style.css">
  </head>
  <body>
    <nav class="bg-body-tertiary">
        <a class="navbar-brand" href="/admin">
        <i class="icon mb-3" data-feather="home"></i>
        <span class="navbar-brand ms-3 fs-2">Hallo <?= $admin['name']; ?></span>
          
        </a>
        <?php if(!isset($akun)){ ?>
            <a href="/admin/akun" class="btn btn-outline-secondary justify-content-end me-3" type="button">Akun</a>
          <?php }else{ ?>
            <a href="/admin/logout" class="btn btn-danger justify-content-end me-3" type="button">Logout</a>
          <?php } ?>
    </nav>
    <hr>

    <?= $this->renderSection('content'); ?>
     
    <hr>
    <footer class="footer">
        <div class="container">
          <div class="row">            
              <div class="row mt-4">
                <div class="col text-center">
                    <p>&copy; 2024 Your Company. All rights reserved.</p>
                </div>
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