<head>
    <link rel="stylesheet" href="<?= base_url('css/cp_toast.css') ?>">
</head>

<div class="content_toast">
    <?php foreach ($toastProducts as $product): ?>
        <div class="toast_cake">
            <img src="<?php echo base_url('images/' . $product['image']); ?>" alt="<?php echo esc($product['name']); ?>">
            <p><?php echo esc($product['name']); ?></p>
        </div>
    <?php endforeach; ?>
</div>