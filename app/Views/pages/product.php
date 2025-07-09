<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Produk Kami - RumahRoti</title>
    <link rel="icon" href="<?= base_url('logo.ico') ?>" type="image/x-icon">
    <link rel="stylesheet" href="<?= base_url('css/bp_bread.css') ?>">
</head>

<body>
    <?= view('partials/navproduct'); ?>
    <div class="content">
        <?php foreach ($categories as $cat): ?>
            <a href="<?= base_url('product?category=' . $cat); ?>" class="taste" id="taste-<?= esc($cat); ?>"
                data-category="<?= esc($cat); ?>">
                <?= ucfirst($cat === 'dcake' ? 'dry cake' : $cat); ?>
            </a>
        <?php endforeach; ?>
    </div>
    <?php foreach ($categories as $cat): ?>
        <div class="category-container content_<?= esc($cat); ?>"
            style="display: <?= $cat === $activeCategory ? 'flex' : 'none'; ?>">
            <?php
            $filteredProducts = array_filter($products, fn($p) => $p['category'] === $cat);
            foreach ($filteredProducts as $product):
            ?>
                <div class="<?= esc($cat); ?>_cake">
                    <img src="<?= base_url('images/' . $product['image']); ?>" alt="<?= esc($product['name']); ?>">
                    <p><?= esc($product['name']); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endforeach; ?>
    <?= view('partials/footer'); ?>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const buttons = document.querySelectorAll('.taste');
            const containers = document.querySelectorAll('.category-container');
            buttons.forEach(button => {
                button.addEventListener('click', (e) => {
                    e.preventDefault();
                    const category = button.getAttribute('data-category');
                    containers.forEach(container => {
                        container.style.display = 'none';
                    });
                    document.querySelector(`.content_${category}`).style.display = 'flex';
                    history.pushState({}, '', `?category=${category}`);
                    buttons.forEach(btn => btn.classList.remove('active'));
                    button.classList.add('active');
                });
            });
            const activeButton = document.querySelector(`#taste-<?= esc($activeCategory); ?>`);
            if (activeButton) {
                activeButton.classList.add('active');
            }
        });
    </script>
</body>

</html>