<p>Deskripsi:</p>
Zofuta merupakan hasil dari kolaborasi yang luar biasa antara para peserta pelatihan pemrograman perangkat lunak untuk bisnis dari Badan Bantuan dan Pemberdayaan Masyarakat Vokasi Provinsi (BBPVP) Bandung. Pengerjaan proyek ini memakan waktu kurang lebih 16 hari. Tim terdiri dari 9 orang developer, yang masing-masing memiliki peran penting dalam menghadirkan platform inovatif ini.</p>

<p>Dalam proses pengembangan Zofuta, kami berupaya untuk menyempurnakan fitur-fitur yang dibutuhkan oleh para pecinta futsal dan pemilik lapangan futsal atau gor. Sistem pemesanan online, pemrosesan pembayaran uang muka (DP), dan manajemen jadwal lapangan yang terintegrasi merupakan beberapa fitur unggulan yang berhasil kami implementasikan.</p>

<p>Kami merasa bangga atas hasil kerja keras kami dalam menciptakan Zofuta sebagai solusi yang praktis dan efisien bagi masyarakat futsal di Purwakarta. Kolaborasi dengan BBPVP Bandung memberikan kesempatan berharga untuk mengasah keterampilan kami dalam pengembangan teknologi dan berkontribusi positif dalam meningkatkan layanan dan pengalaman bagi para pengguna Zofuta.</p>

<p>Kami berkomitmen untuk terus mengembangkan Zofuta dan menjadikannya sebagai platform penyewaan lapangan futsal yang terdepan dan menjadi bagian dari upaya memperkuat sektor bisnis berbasis teknologi di daerah kami. Terima kasih kepada BBPVP Bandung dan seluruh tim yang terlibat dalam kesuksesan proyek ini!</p>

<p>Teknologi yang digunakan:</p>

-   Laravel 10
-   mySQL
-   Bootstrap 5.2.x
-   Trix-editor

<p>Prasyarat:</p>

-   Git https://git-scm.com/
-   PHP ^8.1, Mysql
-   Composer https://getcomposer.org/

<p>Cara Install Project:</p>

-   Download atau clone project => $git clone https://github.com/maulanayusup701/Laravel-Zofuta.git
-   Buka folder project dan buka gitbash
-   Install dependency => $composer install
-   Setup environt variabel dengan mengcopy file .env => $cp .env.example .env
-   Buka file .env kemudian isi DB_DATABASE dengan nama zofuta
-   Buat DB zofuta di mysql
-   Generate APP_KEY => $php artisan key:generate
-   Lakukan migrate dan seed => $php artisan migrate --seed

<p>Akun Admin :</p>

1.  Role Developer

-   Username = dev
-   Password = dev

2.  Role Admin lapangan

-   Username = admin
-   Password = admin

3.  Role User

-   Username = usera
-   Password = user
