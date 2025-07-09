<!DOCTYPE html>
<html>

<head>
    <title>Admin - Products</title>
    <link rel="stylesheet" href="<?= base_url('css/admin.css') ?>">
</head>

<body>
    <h1>Manage Products</h1>
    <a href="<?= base_url('/admin/create') ?>">Add New Product</a>
    <?php if (session()->getFlashdata('message')): ?>
        <p style="color: green;"><?= session()->getFlashdata('message') ?></p>
    <?php endif; ?>
    <?php if (session()->getFlashdata('error')): ?>
        <p style="color: red;"><?= session()->getFlashdata('error') ?></p>
    <?php endif; ?>
    <table>
        <tr>
            <th>Name</th>
            <th>Category</th>
            <th>Price</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
        <?php foreach ($products as $product): ?>
            <tr>
                <td><?= esc($product['name']) ?></td>
                <td><?= esc($product['category'] === 'dcake' ? 'Dry Cake' : ucfirst($product['category'])) ?></td>
                <td>Rp<?= number_format($product['price'], 0, ',', '.') ?></td>
                <td><img src="<?= base_url('images/' . $product['image']) ?>" width="100"
                        alt="<?= esc($product['name']) ?>"></td>
                <td>
                    <a href="<?= base_url('/admin/edit/' . $product['id']) ?>">Edit</a>
                    <a href="<?= base_url('/admin/delete/' . $product['id']) ?>"
                        onclick="return confirm('Are you sure?')">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>