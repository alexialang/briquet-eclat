<?php require 'inc.top.html.php'; ?>

<div class="container">
  <div class="row">
    <h1 class="mb-4">Tous nos briquets</h1>
    <?php foreach ($lighters as $lighter) : ?>
      <div class="col-6 col-md-4 col-lg-3 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="<?= $lighter['lighter_image'] ?>" alt="Image de <?= $lighter['lighter_name'] ?>" />
          <div class="card-body">
            <h3><?= $lighter['lighter_name'] ?></h3>
            <p class="mb-0"> <?= $lighter['lighter_price'] ?> $</p>
          </div>
          <div class="card-footer"> <a class="btn btn-primary" href="/lighter.php?id=<?= $lighter['lighter_id'] ?>">Voir détails</a></div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>

<?php require 'inc.bottom.html.php'; ?>