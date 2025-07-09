<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Silahkan Belanja - RumahRoti</title>
    <link rel="icon" href="<?= base_url('logo.ico') ?>" type="image/x-icon">
</head>

<body>
    <?= view('partials/navshop'); ?>
    <?= view('partials/content_shop', ['categories' => $categories, 'products' => $products]); ?>
    <?= view('partials/footer'); ?>
</body>

</html>