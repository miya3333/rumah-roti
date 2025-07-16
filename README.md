# Laporan Proyek Pemrograman Web

## RUMAH ROTI - Kelompok 5:
Nama - NIM: <br>
[Aldi Hermansyah - 312310200](https://github.com/miya3333) <br>
[Dzikry Eza Yusuf - 312310731](https://github.com/ezaaysf) <br>
[Pranaja Widyadhana Wardana - 312310194](https://github.com/Pranaa22) <br>
[Sartika Agustin - 312310174](https://github.com/sartika312310174)

---
[halooo(https://dummyimage.com/1x1/ffffff/ffffff)](https://github.com/test) <br>

# Penentuan Ide Proyek
## Latar Belakang
Website ini bertujuan membantu toko roti menjangkau lebih banyak pelanggan, meningkatkan efisiensi layanan, serta menjadi sarana pembelajaran praktis bagi tim pengembang dalam menerapkan ilmu pemrograman web dari tahap perencanaan hingga evaluasi. Laporan ini mendokumentasikan proses pengembangan sebagai bentuk akuntabilitas akademik dan referensi pengembangan lebih lanjut.

## Tujuan Proyek
Membangun sebuah website yang berfungsi sebagai etalase digital untuk menampilkan produk-produk roti kepada pelanggan secara online.

## Fitur Utama
* **Halaman Beranda (Homepage)**: Berisi tampilan awal dari website yang menampilkan rekomendasi produk.
* **Daftar Produk Roti (Menu)**: Menampilkan daftar produk yang disediakan Rumah Roti.
* **Halaman Informasi Toko (About Us)**: Menampilkan informasi tentang filosofi Rumah Roti.
* **Halaman Lokasi Toko (Outlet)**: Menampilkan informasi lokasi tempat Rumah Roti berada.
* **Halaman kontak (Contact)**: Menampilkan informasi alamat toko, jam operasional, dan menyediakan tombol langsung ke Whatsapp untuk menghubungi toko untuk memudahkan pelanggan yang ingin bertanya langsung.
* **Daftar harga (Shop Now)**: Menampilkan daftar harga dari produk. 
* **Halaman Admin**: Menampilkan halaman admin yang berisi manajemen produk roti.

---

## Link Dokumentasi Proyek
[Link Poster](http://bit.ly/4ktvD0Y) - 
[Link GiThub](https://github.com/miya3333/rumah-roti) - 
[Link Demo](https://github.com/miya3333/rumah-roti) - 
[Link Figma](https://www.figma.com/design/kfcJXoDy8FGFOzYLEEz4Ly/project_web2?node-id=0-1&t=boOK8RvDKZyYTVwC-1)

# Framework yang dipakai ⬇️
## CodeIgniter 4 Framework

### What is CodeIgniter?

CodeIgniter is a PHP full-stack web framework that is light, fast, flexible and secure.
More information can be found at the [official site](https://codeigniter.com).

This repository holds the distributable version of the framework.
It has been built from the
[development repository](https://github.com/codeigniter4/CodeIgniter4).

More information about the plans for version 4 can be found in [CodeIgniter 4](https://forum.codeigniter.com/forumdisplay.php?fid=28) on the forums.

You can read the [user guide](https://codeigniter.com/user_guide/)
corresponding to the latest version of the framework.

### Important Change with index.php

`index.php` is no longer in the root of the project! It has been moved inside the *public* folder,
for better security and separation of components.

This means that you should configure your web server to "point" to your project's *public* folder, and
not to the project root. A better practice would be to configure a virtual host to point there. A poor practice would be to point your web server to the project root and expect to enter *public/...*, as the rest of your logic and the
framework are exposed.

**Please** read the user guide for a better explanation of how CI4 works!

### Repository Management

We use GitHub issues, in our main repository, to track **BUGS** and to track approved **DEVELOPMENT** work packages.
We use our [forum](http://forum.codeigniter.com) to provide SUPPORT and to discuss
FEATURE REQUESTS.

This repository is a "distribution" one, built by our release preparation script.
Problems with it can be raised on our forum, or as issues in the main repository.

### Contributing

We welcome contributions from the community.

Please read the [*Contributing to CodeIgniter*](https://github.com/codeigniter4/CodeIgniter4/blob/develop/CONTRIBUTING.md) section in the development repository.

## Server Requirements

PHP version 8.1 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

> [!WARNING]
> - The end of life date for PHP 7.4 was November 28, 2022.
> - The end of life date for PHP 8.0 was November 26, 2023.
> - If you are still using PHP 7.4 or 8.0, you should upgrade immediately.
> - The end of life date for PHP 8.1 will be December 31, 2025.

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) if you plan to use MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library
