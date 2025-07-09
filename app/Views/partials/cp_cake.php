<head>
    <link rel="stylesheet" href="<?= base_url('css/cp_cake.css') ?>">
</head>

<div class="content_cake">
    <?php foreach ($cakeProducts as $product): ?>
    <div class="cake_cake">
        <img src="<?php echo base_url('images/' . $product['image']); ?>" alt="<?php echo esc($product['name']); ?>">
        <p><?php echo esc($product['name']); ?></p>
    </div>
    <?php endforeach; ?>
</div>