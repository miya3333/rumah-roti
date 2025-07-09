<head>
    <link rel="stylesheet" href="<?= base_url('css/cp_bread.css') ?>">
</head>

<div class="content_bread">
    <?php foreach ($breadProducts as $product): ?>
        <div class="bread_cake">
            <img src="<?php echo base_url('images/' . $product['image']); ?>" alt="<?php echo esc($product['name']); ?>">
            <p><?php echo esc($product['name']); ?></p>
        </div>
    <?php endforeach; ?>
</div>