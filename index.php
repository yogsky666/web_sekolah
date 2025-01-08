<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Programming</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <nav class="nav-panel">
        <div class="layar-dalam">
            <div class="logo">
                <a href=""><img src="asset/logo.png"></a>
            </div>
            <div class="menu">
                <a href="#" class="tombol-menu">
                    <span class="garis"></span>
                    <span class="garis"></span>
                    <span class="garis"></span>
                </a>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="#visimisi">Visi Misi</a></li>
                    <li><a href="#berita">Berita</a></li>
                    <li><a href="#ektra">Ekstrakurikuler</a></li>
                    <li><a href="#ptn">Jalur PTN</a></li>
                    <li><a href="#kontak">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="layar-penuh">
        <?= include "layout/header.html" ?>
        <main>
            <section class="visimisi">
                <div id="visimisi" class="container1">
                    <div class="imagevsms">
                        <img src="asset/hompage.jpeg" alt="SMA Negeri 5 Tambun Selatan">
                    </div>
                    <div class="textvsms">
                        <h2>Visi & Misi Sekolah</h2>
                        <h3>Visi</h3>
                        <ul>
                            <li>Mulia, Berprestasi, dan Berwawasan Global</li>
                        </ul>
                        <h3>Misi</h3>
                        <ul>
                            <li>Meningkatkan Pendidikan dan Penghayatan terhadap Ajaran yang dianut sehingga menjadi sumber Kearifan dalam bertindak dan Bertutur Sapa.</li>
                            <li>Melaksanakan Pembelajaran dan Bimbingan secara Berkualitas dengan meningkatkan Profesionalitas Tenaga Pendidik dan Kependidikan.</li>
                            <li>Mempersiapkan Peserta Didik untuk melanjutkan Ke Perguruan Tinggi Negeri (PTN) dan memiliki kemampuan Berwirausaha.</li>
                            <li>Meningkatkan kepedulian terhadap Lingkungan dan Memelihara Keseimbangan Lingkungan.</li>
                        </ul>
                    </div>
                </div>
            </section>
            <section id="ptn" class="ptn">
                <h2>Daftar Siswa diterima Di PTN</h2>
                <div class="container2">
                    <div class="siswa">
                        <div class="kartu">
                            <img src="asset/img5.JPG" alt="Mohammad Safrudin">
                            <div class="kartu-text">
                                <h3>Mohammad Safrudin</h3>
                                <span>IPB</span><br>
                                <span>Teknik Pangan</span>
                            </div>
                        </div>
                        <div class="kartu">
                            <img src="asset/img2.JPG" alt="Dian Widyasari">
                            <div class="kartu-text">
                                <h3>Dian Widyasari</h3>
                                <span>UI</span><br>
                                <span>Arsitektur</span>
                            </div>
                        </div>
                        <div class="kartu">
                            <img src="asset/img6.JPG" alt="Dede Supriatna">
                            <div class="kartu-text">
                                <h3>Dede Supriatna</h3>
                                <span>ITB</span><br>
                                <span>Teknik Sipil</span>
                            </div>
                        </div>
                        <div class="kartu">
                            <img src="asset/img4.JPG" alt="Siti Warsih">
                            <div class="kartu-text">
                                <h3>Siti Warsih</h3>
                                <span>UNAIR</span><br>
                                <span>Teknologi Pendidikan</span>
                            </div>
                        </div>
                    </div>
                </div>
                <p><a href="#ptn" class="tombole">Lihat Selengkapnya</a></p>
            </section>
            <section id="ektra" class="eskul">
                <h2>Ekstrakurikuler</h2>
                <div class="container5">
                    <div class="box">
                        <div class="kartu-box">
                            <img src="asset/reading.png" class="icone"></i>
                            <div class="texxx">
                                <h3>OSIS</h3>
                                <span>Organisasi Intra Sekolah</span>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="kartu-box">
                            <img src="asset/reading.png" class="icone"></i>
                            <div class="texxx">
                                <h3>PMR</h3>
                                <span>Palang Merah Remaja</span>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="kartu-box">
                            <img src="asset/reading.png" class="icone"></i>
                            <div class="texxx">
                                <h3>Pramuka</h3>
                                <span>Praja Muda Karana</span>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="kartu-box">
                            <img src="asset/reading.png" class="icone"></i>
                            <div class="texxx">
                                <h3>Paskibra</h3>
                                <span>Pasukan Pengibar Bendera</span>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="kartu-box">
                            <img src="asset/reading.png" class="icone"></i>
                            <div class="texxx">
                                <h3>Ekstrakurikuler Lainnya</h3>
                                <span>Olahraga, Seni Tari</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="berita" class="berita">
                <h2>Berita</h2>
                <div class="container3">
                    <!-- Card 1 -->
                    <div class="card">
                        <img src="asset/001.jpeg">
                        <div class="card-content">
                            <h3>Informasi PPDB 2025</h3>
                            <p>Berikut tautan untuk mendownload: Informasi PPDB, Persyaratan dan Alur Pendaftaran, Materi Sosialisasi.</p>
                            <a href="#">Read More</a>
                        </div>
                        <div class="card-footer">
                            <span>ADMIN</span>
                            <span><a href="#">KOMENTAR</a></span>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="card">
                        <img src="asset/002.jpeg">
                        <div class="card-content">
                            <h3>Memperingati Idul Adha</h3>
                            <p>Pada Tanggal 17 Juni 2024, Sekolah kami mengadakan pemotongan qurban berupa sapi dan kambing untuk memperingati Hari Raya Idul Adha.</p>
                            <a href="#">Read More</a>
                        </div>
                        <div class="card-footer">
                            <span>ADMIN</span>
                            <span><a href="#">KOMENTAR</a></span>
                        </div>
                    </div>
                    <!-- Card 1 -->
                    <div class="card">
                        <img src="asset/003.jpeg">
                        <div class="card-content">
                            <h3>Memperingati Hari Guru</h3>
                            <p>Pada Tanggal 25 November 2024, Sekolah kami mengadakan perayaan Hari Guru sebagai bentuk apresiasi para guru karena telah memberikan yang terbaik bagi kami.</p>
                            <a href="#">Read More</a>
                        </div>
                        <div class="card-footer">
                            <span>ADMIN</span>
                            <span><a href="#">KOMENTAR</a></span>
                        </div>
                    </div>
                    <!-- Card 1 -->
                    <div class="card">
                        <img src="asset/004.jpeg">
                        <div class="card-content">
                            <h3>Memperingati Hari Kemerdekaan</h3>
                            <p>Pada Tanggal 17 Agustus 2024, Sekolah merayakan ulang tahun negara Indonesia yang ke - 79.</p>
                            <a href="#">Read More</a>
                        </div>
                        <div class="card-footer">
                            <span>ADMIN</span>
                            <span><a href="#">KOMENTAR</a></span>
                        </div>
                    </div>
                    <!-- Card 1 -->
                    <div class="card">
                        <img src="asset/005.jpeg">
                        <div class="card-content">
                            <h3>Pelantikan OSIS Periode 2024</h3>
                            <p>Pada Tanggal 30 Mei 2024, Sekolah kami melakukan pelantikan kepengurusan OSIS untuk periode 2024 - 2025.</p>
                            <a href="#">Read More</a>
                        </div>
                        <div class="card-footer">
                            <span>ADMIN</span>
                            <span><a href="#">KOMENTAR</a></span>
                        </div>
                    </div>
                    <!-- Card 1 -->
                    <div class="card">
                        <img src="asset/002.jpeg">
                        <div class="card-content">
                            <h3>Informasi PPDB 2024</h3>
                            <p>Berikut tautan untuk mendownload: Informasi PPDB, Persyaratan dan Alur Pendaftaran, Materi Sosialisasi.</p>
                            <a href="#">Read More</a>
                        </div>
                        <div class="card-footer">
                            <span>ADMIN</span>
                            <span><a href="#">KOMENTAR</a></span>
                        </div>
                    </div>
                </div>
                <p><a href="#berita" class="tombole">Lihat Selengkapnya</a></p>
            </section>
            <section id="kontak" class="hubungikami">
                <div class="container4">
                    <h2>Hubungi Kami</h2>
                    <div class="wrapper">
                        <div class="maps">
                            <h3>Lokasi Kami</h3>
                            <iframe class="tempatkami" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.838580948555!2d107.03583777418356!3d-6.284938861516643!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698e25bcda5915%3A0x80bd179f14d75dc4!2sState%20Senior%20High%20School%205%20South%20Tambun!5e0!3m2!1sen!2sid!4v1734938193874!5m2!1sen!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <div class="kontakkami">
                            <h3>Contact Us</h3>
                            <p>Tetap terhubung dengan kami melalui media sosial kami untuk mendapatkan pembaruan terbaru dan informasi menarik tentang SMA Negeri 5 Tambun Selatan.</p>
                            <div class="form">
                                <form action="index.php" method="POST">
                                    <div class="input-inbox">
                                        <input type="text" name="nama" placeholder="Nama" required>
                                    </div>
                                    <div class="input-inbox">
                                        <input type="text" name="email" placeholder="Email" required>
                                    </div>
                                    <div class="input-inbox">
                                        <input type="text" name="telepon" placeholder="Telepon" required>
                                    </div>
                                    <div class="input-inbox">
                                        <textarea name="saran" placeholder="Berikan kami saran anda *" rows="8"></textarea>
                                    </div>
                                    <button type="button" name="submit"><i class="fa-solid fa-paper-plane"></i> SEND MESSAGE</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <?= include "layout/footer.html" ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="javascript.js"></script>
</body>

</html>