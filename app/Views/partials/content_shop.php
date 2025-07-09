<head>
    <link rel="stylesheet" href="<?= base_url('css/fillshop.css') ?>">
</head>

<div id="top" class="content-shop">
    <?= view('partials/bp_shop'); ?>
    <div class="content-product">
        <?php foreach ($categories as $category): ?>
        <div id="<?= esc($category); ?>" class="product-price">
            <p class="title"><?= ucfirst($category === 'dcake' ? 'dry cake' : $category); ?></p>
            <div class="content_<?= esc($category); ?>">
                <?php
                    $filteredProducts = array_filter($products, fn($p) => $p['category'] === $category);
                    foreach ($filteredProducts as $product):
                    ?>
                <div class="<?= esc($category); ?>_cake">
                    <img src="<?= base_url('images/' . $product['image']); ?>" alt="<?= esc($product['name']); ?>">
                    <p class="name-cake"><?= esc($product['name']); ?></p>
                    <p class="harga">Rp<?= number_format($product['price'], 0, ',', '.'); ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<a href="#top" class="scroll-to-top">🔝</a>