<?php require 'inc.top.html.php'; ?>

<div class="container">
  <div class="row">
    <h1 class="mb-4">Catégories</h1>
    <?php foreach ($categories as $category) : ?>
      <div class="col-6 col-md-4 col-lg-3 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="<?= $category['lighter_image'] ?>" alt="Image de <?= $category['category_name'] ?>" />
          <div class="card-body">
            <h3 class="mb-0"><?= $category['category_name'] ?></h3>
          </div>
          <div class="card-footer"> <a class="btn btn-primary" href="/category.php?id=<?= $category['category_id'] ?>">
              <?php if ($category['lighter_count'] == 1) : ?>
                Voir le briquet

              <?php endif; ?>
              Voir les <?= $category['lighter_count'] ?> briquets</a></div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>

<?php require 'inc.bottom.html.php'; ?>