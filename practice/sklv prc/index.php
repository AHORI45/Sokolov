<?php
require 'src/init-index.php';
include 'src/header.php';
?>

    <main id="main" class="flex-shrink-0" role="main">
        <h1 class="mt-5">Бизнес</h1>
        <?php foreach($feedbacks as $item): ?>
        <div class="card mb-3">
        <div class="card-body">
        <h5 class="card-title"><?= $item['name'] ?></h5>
        <p class="card-text"><?= $item['feedback'] ?></p>
        <small class="text-muted"><?= $item['phone'] ?></small>
        <div class="card" style="width: 18rem;">
        <img src="<?= $item['img'] ?>" alt="Фото" class="card-img-top">
        </div>
    </div>
</div>
<?php endforeach ?>
    </main>
    

<?php include 'src/footer.php'?>