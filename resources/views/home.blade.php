@extends('layouts.main')
@section('container')

        <body>
            <div class="scroll-up-btn">
                <i class="fas fa-angle-up"></i>
            </div>

            <!-- Home Section Start -->
            <section class="home" id="home">
                <div class="max-width">
                    <div class="home-content">
                        <div class="text-1">Halo, Kami Dari</div>
                        <div class="text-2">SYAUWQILAUNDRY</div>
                        <div class="text-3">Kami Menyediakan Jasa <span class="jasa"></span></div>
                    </div>
                </div>
            </section>

            <!-- About Section -->

            <section class="about" id="about">
                <div class="max-width">
                    <h2 class="rinci">Tentang Kami</h2>
                    <div class="about-content">
                        <div class="column left">
                            <img src="img/iimage_we.jpg" alt="">
                        </div>
                        <div class="column right">
                            <div class="text">Halo, Kami dari Syauwqilaundry</div>
                            <p>Syauwqilaundry merupakan usaha yang bergerak di bidang jasa. Kami menawarkan berbagai jasa pelayanan laundry yang aman, cepat, dan terjangkau. Syauwqilaundry yang telah menjadi kepercayaan pelanggan sejak lama, berlokasi di <strong>Jl. Sekeloa Tengah No.11</strong>. Kami percaya dapat memberikan pelayan yang terbaik untuk pelanggan.</p>
                            <a href="">Lokasi Kami</a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Service Section -->

            <section class="services" id="services">
                <div class="max-width">
                    <h2 class="rinci">Daftar Jasa</h2>
                    <div class="serv-content">
                        <div class="card">
                            <div class="box">
                                <i class="fas fa-paint-brush"></i>
                                <div class="text">Regular</div>
                                <p>Jasa cuci regular dijamin bersih anti kotor. Harga mulai dari <strong>Rp.5000/Kg</strong></p>
                            </div>
                        </div>

                        <div class="card">
                            <div class="box">
                                <i class="fas fa-chart-line"></i>
                                <div class="text">Quick</div>
                                <p>Jasa cuci Quick dengan waktu cuci cepat tanpa repot. Lama cuci hanya <strong>2 Hari</strong></p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="box">
                                <i class="fas fa-code"></i>
                                <div class="text">Express</div>
                                <p>Jasa cuci Express anti lama nunggu, cuci bersih bisa di <strong>tunggu</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </section>

            <!-- Skill section -->
            <section class="skills" id="skills">
                <div class="max-width">
                    <h2 class="rinci">Sejarah Syauwqilaundry</h2>
                    <div class="skills-content">
                        <div class="column left">
                            <div class="text">SYAUWQILAUNDRY</div>
                            <p>Syauwqilaundry dikelola oleh Syauwqilaundry telah berdiri sejak tahun... dan telah melayani lebih dari ribuan pelayanan. Syauwqilaundry sendiri dikelola oleh ... dari awal pembukaan jasa laundry. Berlokasi di Jl. Sekeloa Tengah No.11, Syauwqilaundry telah menjadi tempat laundry yang terkenal dan terpercaya.</p>
                            <a href="#">Read more</a>
                        </div>
                        <div class="column right">
                            <div class="bars">
                                <div class="info">
                                    <span>HTML</span>
                                    <span>80%</span>
                                </div>
                                <div class="line html"></div>
                            </div>
                            <div class="bars">
                                <div class="info">
                                    <span>CSS</span>
                                    <span>70%</span>
                                </div>
                                <div class="line css"></div>
                            </div>
                            <div class="bars">
                                <div class="info">
                                    <span>JavaScript</span>
                                    <span>60%</span>
                                </div>
                                <div class="line js"></div>
                            </div>
                            <div class="bars">
                                <div class="info">
                                    <span>PHP</span>
                                    <span>50%</span>
                                </div>
                                <div class="line php"></div>
                            </div>
                            <div class="bars">
                                <div class="info">
                                    <span>MySQL</span>
                                    <span>40%</span>
                                </div>
                                <div class="line mysql"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- team section -->
            <section class="teams" id="teams">
                <div class="max-width">
                    <h2 class="rinci">Tim Kami</h2>
                    <div class="carousel owl-carousel">
                        <div class="card">
                            <div class="box">
                                <img src="img/ariza.jpeg" alt="">
                                <div class="text">Arisza Zufar F</div>
                                <p>Manajer Proyek</p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="box">
                                <img src="img/image1.jpg" alt="">
                                <div class="text">Ahmad Fahmi Fahlevi</div>
                                <p>System Analyst</p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="box">
                                <img src="img/image1.jpg" alt="">
                                <div class="text">Marfi Bastian Sampul</div>
                                <p>System Documentation</p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="box">
                                <img src="img/mridwan.jpg" alt="">
                                <div class="text">Muhamad Ridwan</div>
                                <p>Programmer, System Testing</p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="box">
                                <img src="img/fauzan.jpeg" alt="">
                                <div class="text">Nur Fauzan Halim</div>
                                <p>System Design</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- contact section -->
        <section class="contact" id="contact">
            <div class="max-width">
                <h2 class="rinci">Kontak</h2>
                <div class="contact-content">
                    <div class="column left">
                        <div class="text">Hubungi Kami</div>
                        <p>Kini Anda tidak perlu repot keluar rumah, karena kami <strong>Menerima Pesanan Antar Jasa Laundry</strong>. Cukup dengan menghubungi kami.</p>
                        <div class="icons">
                            <div class="row">
                                <i class="fas fa-user"></i>
                                <div class="info">

                                    <div class="sub-title"><strong>SYAUWQILAUNDRY</strong></div>
                                </div>
                            </div>
                            <div class="row">
                                <i class="fas fa-map-marker-alt"></i>
                                <div class="info">
                                    <div class="head">Alamat</div>
                                    <div class="sub-title">Jl. Sekeloa Tengah No.11</div>
                                </div>
                            </div>
                            <div class="row">
                                <i class="fas fa-envelope"></i>
                                <div class="info">
                                    <div class="head">Telepon</div>
                                    <div class="sub-title">089888777665</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column right">
                        <div class="text">Pesan</div>
                        <form action="#">
                            <div class="fields">
                                <div class="field name">
                                    <input type="text" placeholder="Nama" required>
                                </div>
                                <div class="field email">
                                    <input type="email" placeholder="Email" required>
                                </div>
                            </div>
                                <div class="field">
                                    <input type="text" placeholder="Subjek" required>
                                </div>
                                <div class="field textarea">
                                    <textarea cols="30" rows="10" placeholder="Ketikan Pesan..." required></textarea>
                                </div>
                                <div class="button">
                                    <button type="submit">Kirim</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- footer section -->
            <footer>
                <span>Created By <a href="#">Syauwqilaundry</a> | <span class="far fa-copyright"></span> 2022 All right reserved.</span>
            </footer>


@endsection
