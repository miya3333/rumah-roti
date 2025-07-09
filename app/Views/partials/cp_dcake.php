<head>
    <link rel="stylesheet" href="<?= base_url('css/cp_dcake.css') ?>">
</head>

<div class="content_dcake">
    <?php foreach ($dcakeProducts as $product): ?>
        <div class="dcake_cake">
            <img src="<?php echo base_url('images/' . $product['image']); ?>" alt="<?php echo esc($product['name']); ?>">
            <p><?php echo esc($product['name']); ?></p>
        </div>
    <?php endforeach; ?>
</div>