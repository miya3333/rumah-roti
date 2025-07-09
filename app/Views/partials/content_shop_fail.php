<!-- baru -->
<div class="content_danish">
    <?php foreach ($produk['bread'] as $item): ?>
        <div class="danish_cake">
            <img src="<?= base_url('images/' . $item['gambar']) ?>" alt="<?= esc($item['nama']) ?>">
            <p class="name-cake"><?= esc($item['nama']) ?></p>
            <p class="harga">Rp<?= number_format($item['harga'], 0, ',', '.') ?></p>
        </div>
    <?php endforeach; ?>
</div>

<!-- lama -->
<div class="dropdown">
    <label for="location">Pilih Lokasi:</label>
    <select id="location" name="location">
        <option value="bekasi">Bekasi</option>
        <option value="bandung">Bandung</option>
        <option value="jakarta">Jakarta</option>
        <option value="kota-tanggerang">Kota Tanggerang</option>
        <option value="banten">Banten</option>
    </select>
</div>

<div id="product-detail-panel" class="detail-panel hidden">
    <button id="close-panel">❌</button>
    <img id="detail-image" src="" alt="">
    <p class="name-cake" id="detail-name"></p>
    <p class="harga" id="detail-price"></p>

    <div class="quantity-control">
        <button id="decrease">−</button>
        <input type="number" id="product-quantity" value="1" min="1">
        <button id="increase">+</button>
    </div>

    <button id="add-to-cart">🛒 Tambah ke Keranjang</button>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const panel = document.getElementById('product-detail-panel');
        const img = document.getElementById('detail-image');
        const name = document.getElementById('detail-name');
        const price = document.getElementById('detail-price');
        const qty = document.getElementById('product-quantity');
        const addToCartBtn = document.getElementById('add-to-cart');
        const closeBtn = document.getElementById('close-panel');

        // Buat semua elemen product bisa diklik
        document.querySelectorAll('.danish_cake').forEach(item => {
            item.addEventListener('click', () => {
                const image = item.querySelector('img').src;
                const productName = item.querySelector('.name-cake').innerText;
                const productPrice = item.querySelector('.harga').innerText;

                img.src = image;
                name.textContent = productName;
                price.textContent = productPrice;
                qty.value = 1;

                panel.classList.remove('hidden');
                panel.classList.add('show');
            });
        });

        // Close panel
        closeBtn.addEventListener('click', () => {
            panel.classList.remove('show');
            setTimeout(() => {
                panel.classList.add('hidden');
            }, 300);
        });

        // Quantity logic
        document.getElementById('increase').addEventListener('click', () => {
            qty.value = parseInt(qty.value) + 1;
        });
        document.getElementById('decrease').addEventListener('click', () => {
            if (parseInt(qty.value) > 1) {
                qty.value = parseInt(qty.value) - 1;
            }
        });

        // Button Tambah ke Keranjang
        addToCartBtn.addEventListener('click', () => {
            alert(`${qty.value}x ${name.textContent} masuk ke keranjang!`);
            // Nanti tinggal kirim ke backend via fetch/ajax post
        });
    });
</script>