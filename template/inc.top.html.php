<!doctype html>
<html lang="fr">

<head>
  <title>Briquet Eclat | <?= $title ?? 'Erreur 404' ?></title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="stylesheet" href="css/style.css" class="html">
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="/">Briquet Eclat</a>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
          <ul class="navbar-nav me-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link <?php if (!empty($title)) {
                                    if ($title == "Catégories") {
                                      echo "active";
                                    }
                                  } ?>" href="/categories.php">Catégories</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <main class="py-4">