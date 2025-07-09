<head>
    <link rel="stylesheet" href="<?= base_url('css/fillhome.css') ?>">
</head>

<div class="banner" style="background-image: url('<?= base_url('images/banner_welcome.jpg') ?>');">
    <div class="banner-text">
        <p>Welcome To</p>
        <p>Rumah Roti</p>
    </div>
</div>

<div class="content">
    <div class="titlebab">
        <div class="bab">
            <div class="name">
                <img src="<?= base_url('images/line.svg') ?>" alt="line" class="line">
                <div class="text">Our Products</div>
            </div>
        </div>
        <div class="ourline">
            <p>Indulge yourself with our</p>
            <p>premium <span class="c2">bread</span> and <span class="c2">pastries</span></p>
        </div>
    </div>

    <a href="<?= base_url('/product') ?>" class="banner_product"
        style="background: linear-gradient(rgba(0,0,0,0.2), rgba(0,0,0,0.2)), url('<?= base_url('images/bread.jpg') ?>'); background-size: cover; background-position: center; height: 33.625rem; color: white; display: flex; justify-content: center; align-items: center; text-align: center;">
        <div class="banner_product-text">
            <p class="title_bread">BREAD</p>
            <p class="seemore">SEE MORE</p>
        </div>
    </a>

    <a href="<?= base_url('/product?category=danish'); ?>" class="banner_product"
        style="background: linear-gradient(rgba(0,0,0,0.2), rgba(0,0,0,0.2)), url('<?= base_url('images/danish.jpg') ?>'); background-size: cover; background-position: center; height: 33.625rem; color: white; display: flex; justify-content: center; align-items: center; text-align: center;">
        <div class="banner_product-text">
            <p class="title_bread">DANISH</p>
            <p class="seemore">SEE MORE</p>
        </div>
    </a>

    <a href="<?= base_url('/product?category=toast') ?>" class="banner_product"
        style="background: linear-gradient(rgba(0,0,0,0.2), rgba(0,0,0,0.2)), url('<?= base_url('images/toast.jpg') ?>'); background-size: cover; background-position: center; height: 33.625rem; color: white; display: flex; justify-content: center; align-items: center; text-align: center;">
        <div class="banner_product-text">
            <p class="title_bread">TOAST</p>
            <p class="seemore">SEE MORE</p>
        </div>
    </a>

    <a href="<?= base_url('/product?category=dcake') ?>" class="banner_product"
        style="background: linear-gradient(rgba(0,0,0,0.2), rgba(0,0,0,0.2)), url('<?= base_url('images/slice_cake.jpg') ?>'); background-size: cover; background-position: center; height: 33.625rem; color: white; display: flex; justify-content: center; align-items: center; text-align: center;">
        <div class="banner_product-text">
            <p class="title_bread">SLICE CAKE</p>
            <p class="seemore">SEE MORE</p>
        </div>
    </a>

    <a href="<?= base_url('/product?category=cake') ?>" class="banner_product"
        style="background: linear-gradient(rgba(0,0,0,0.2), rgba(0,0,0,0.2)), url('<?= base_url('images/whole_cake.jpg') ?>'); background-size: cover; background-position: center; height: 33.625rem; color: white; display: flex; justify-content: center; align-items: center; text-align: center;">
        <div class="banner_product-text">
            <p class="title_bread">WHOLE CAKE</p>
            <p class="seemore">SEE MORE</p>
        </div>
    </a>

    <a href="<?= base_url('/product?category=dcake') ?>" class="banner_product"
        style="background: linear-gradient(rgba(0,0,0,0.2), rgba(0,0,0,0.2)), url('<?= base_url('images/dry_cake.jpg') ?>'); background-size: cover; background-position: center; height: 33.625rem; color: white; display: flex; justify-content: center; align-items: center; text-align: center;">
        <div class="banner_product-text">
            <p class="title_bread">DRY CAKE</p>
            <p class="seemore">SEE MORE</p>
        </div>
    </a>

</div>