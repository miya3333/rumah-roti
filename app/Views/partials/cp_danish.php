<head>
    <link rel="stylesheet" href="<?= base_url('css/cp_danish.css') ?>">
</head>

<div class="content_danish">
    <?php foreach ($danishProducts as $product): ?>
        <div class="danish_cake">
            <img src="<?php echo base_url('images/' . $product['image']); ?>" alt="<?php echo esc($product['name']); ?>">
            <p><?php echo esc($product['name']); ?></p>
        </div>
    <?php endforeach; ?>
</div>