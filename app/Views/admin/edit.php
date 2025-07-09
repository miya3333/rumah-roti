<!DOCTYPE html>
<html>

<head>
    <title>Edit Product</title>
    <link rel="stylesheet" href="<?= base_url('css/admin.css') ?>">
</head>

<body>
    <h1>Edit Product</h1>
    <?php if (session()->getFlashdata('error')): ?>
        <p style="color: red;"><?= session()->getFlashdata('error') ?></p>
    <?php endif; ?>
    <form action="<?= base_url('admin/edit/' . $product['id']) ?>" method="post" enctype="multipart/form-data">
        <?= csrf_field() ?>
        <p>
            <label for="name">Name</label><br>
            <input type="text" name="name" id="name" value="<?= esc($product['name']) ?>" required>
        </p>
        <p>
            <label for="category">Category</label><br>
            <select name="category" id="category" required>
                <option value="">-- Pilih Kategori --</option>
                <option value="bread" <?= $product['category'] == 'bread' ? 'selected' : '' ?>>Bread</option>
                <option value="danish" <?= $product['category'] == 'danish' ? 'selected' : '' ?>>Danish</option>
                <option value="cake" <?= $product['category'] == 'cake' ? 'selected' : '' ?>>Cake</option>
                <option value="toast" <?= $product['category'] == 'toast' ? 'selected' : '' ?>>Toast</option>
                <option value="dcake" <?= $product['category'] == 'dcake' ? 'selected' : '' ?>>Dry Cake</option>
            </select>
        </p>
        <p>
            <label for="price">Price</label><br>
            <input type="number" name="price" id="price" value="<?= esc($product['price']) ?>" required>
        </p>
        <p>
            <label for="image">Upload Image (Optional)</label><br>
            <input type="file" name="image" id="image" accept="image/*">
        </p>
        <?php if (!empty($product['image'])): ?>
            <p>
                <label>Current Image:</label><br>
                <img src="<?= base_url('images/' . $product['image']) ?>" alt="<?= esc($product['name']) ?>"
                    style="max-width: 200px;">
            </p>
        <?php endif; ?>
        <p>
            <input type="submit" value="Update" class="btn btn-large">
        </p>
        <?php if (isset($validation)): ?>
            <div style="color: red;">
                <?= $validation->listErrors() ?>
            </div>
        <?php endif; ?>
    </form>
    <a href="<?= base_url('/admin') ?>">Back</a>

    <?php if (isset($validation)): ?>
        <div style="color: red;">
            <?= $validation->listErrors() ?>
        </div>
    <?php endif; ?>
</body>

</html>