<?php require 'inc.top.html.php'; ?>

<div class="container">
  <div class="row">
    <div class="mb-4">
      <p class="h1 d-inline"><a class="h1" href="categories.php">Catégories</a> /&nbsp <a class="h1 " href="category.php?id=<?= $lighter['category_id'] ?>"><?= $lighter['category_name'] ?></a> /&nbsp
      <h1 class="d-inline"><?= $lighter['lighter_name'] ?> </h1>
      </p>
    </div>
    <div class="col-sm-12 col-md-6 mb-4">
      <img class="img-fluid rounded" src="<?= $lighter['lighter_image'] ?>" alt="Image de <?= $lighter['lighter_name'] ?>" />
    </div>
    <div class="col-sm-12 col-md-6 mb-4">
      <h2 class="mb-2"><?= $lighter['lighter_name'] ?></h2>
      <p class="mb-2"><?= $lighter['lighter_description'] ?></p>
      <p class="mb-2 font-italic"> <?= $lighter['lighter_price'] ?> $</p><a class="btn btn-primary" href="/lighter.php?id=<?= $lighter['lighter_id'] ?>">Ajouter au panier</a>
    </div>
  </div>
</div>
</div>

</div>
</div>

<?php require 'inc.bottom.html.php'; ?>