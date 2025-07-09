<!DOCTYPE html>
<html>

<head>
    <title>Add Product</title>
    <link rel="stylesheet" href="<?= base_url('css/admin.css') ?>">
</head>

<body>
    <h1>Add New Product</h1>
    <?php if (session()->getFlashdata('error')): ?>
        <p style="color: red;"><?= session()->getFlashdata('error') ?></p>
    <?php endif; ?>
    <form action="<?= base_url('admin/create') ?>" method="post" enctype="multipart/form-data">
        <?= csrf_field() ?>
        <p>
            <label for="name">Name</label><br>
            <input type="text" name="name" id="name" required>
        </p>
        <p>
            <label for="category">Category</label><br>
            <select name="category" id="category" required>
                <option value="">-- Pilih Kategori --</option>
                <option value="bread">Bread</option>
                <option value="danish">Danish</option>
                <option value="cake">Cake</option>
                <option value="toast">Toast</option>
                <option value="dcake">Dry Cake</option>
            </select>
        </p>
        <p>
            <label for="price">Price</label><br>
            <input type="number" name="price" id="price" required>
        </p>
        <p>
            <label for="image">Upload Image</label><br>
            <input type="file" name="image" id="image" accept="image/*">
        </p>
        <p>
            <input type="submit" value="Save" class="btn btn-large">
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