<head>
    <link rel="stylesheet" href="<?= base_url('css/bp_danish.css') ?>">
</head>

<div class="content">
    <a href="<?= base_url('product/bread'); ?>" class="taste" id="bread">Bread</a>
    <a href="<?= base_url('product/danish'); ?>" class="taste" id="danish">Danish</a>
    <a href="<?= base_url('product/cake'); ?>" class="taste" id="cake">Cake</a>
    <a href="<?= base_url('product/toast'); ?>" class="taste" id="toast">Toast</a>
    <a href="<?= base_url('product/dcake'); ?>" class="taste" id="drycake">Dry Cake</a>
</div>

<div class="content_danish">
    <?php foreach ($danishProducts as $product): ?>
        <div class="danish_cake">
            <img src="<?php echo base_url('images/' . $product['image']); ?>" alt="<?php echo esc($product['name']); ?>">
            <p><?php echo esc($product['name']); ?></p>
        </div>
    <?php endforeach; ?>
</div>