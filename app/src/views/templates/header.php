<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $data['judul']; ?> Page</title>
        <script src="/js/app.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/css/app.css">
    </head>
    <body>
        <nav class="navbar d-flex navbar-expand-lg bg-body-tertiary">
            <div class="container">
              <a class="navbar-brand fw-bold flex-grow-1" href="<?= BASEURL; ?>">CERDAS</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse item " style="flex-grow: 0;" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>/Auth">EduSphere</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?= BASEURL;?>/Auth">Administration</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?= BASEURL;?>/About">Academic</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?= BASEURL;?>/About">About</a>
                      </li>
                  </ul>
              </div>
            </div>
          </nav>
