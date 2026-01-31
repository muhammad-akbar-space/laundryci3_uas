<style>
    /* Background soft & santai */
    .about-container {
        background: linear-gradient(135deg, #e8eaf6 0%, #c5cae9 50%, #9fa8da 100%);
        min-height: 100vh;
        padding: 50px 0;
        position: relative;
        overflow: hidden;
    }

    /* Bubble decoration */
    .bubble-about {
        position: absolute;
        border-radius: 50%;
        opacity: 0.3;
        animation: float 8s ease-in-out infinite;
    }

    .bubble-about:nth-child(1) {
        width: 80px;
        height: 80px;
        background: #7986cb;
        top: 10%;
        left: 10%;
        animation-delay: 0s;
    }

    .bubble-about:nth-child(2) {
        width: 60px;
        height: 60px;
        background: #5c6bc0;
        top: 60%;
        left: 80%;
        animation-delay: 2s;
    }

    .bubble-about:nth-child(3) {
        width: 100px;
        height: 100px;
        background: #9fa8da;
        top: 80%;
        left: 20%;
        animation-delay: 4s;
    }

    @keyframes float {

        0%,
        100% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(-30px);
        }
    }

    /* Card styling */
    .about-card {
        background: rgba(255, 255, 255, 0.95);
        border-radius: 25px;
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
        padding: 40px;
        margin-bottom: 30px;
        animation: fadeInUp 0.8s ease-out;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Header styling */
    .about-header {
        text-align: center;
        margin-bottom: 40px;
    }

    .about-header h1 {
        background: linear-gradient(135deg, #5c6bc0 0%, #3f51b5 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        font-size: 3rem;
        font-weight: 900;
        margin-bottom: 15px;
    }

    .about-header p {
        font-size: 1.2rem;
        color: #666;
    }

    /* Section styling */
    .about-section {
        margin-bottom: 40px;
    }

    .about-section h3 {
        color: #5c6bc0;
        font-weight: 700;
        margin-bottom: 20px;
        display: flex;
        align-items: center;
    }

    .about-section h3 i {
        font-size: 2rem;
        margin-right: 15px;
    }

    .about-section p,
    .about-section ul {
        font-size: 1.1rem;
        line-height: 1.8;
        color: #555;
    }

    .about-section ul {
        list-style: none;
        padding-left: 0;
    }

    .about-section ul li {
        padding: 10px 0;
        padding-left: 35px;
        position: relative;
    }

    .about-section ul li::before {
        content: '✨';
        position: absolute;
        left: 0;
        font-size: 1.3rem;
    }

    /* Profile section */
    .profile-section {
        background: linear-gradient(135deg, #e8eaf6 0%, #c5cae9 100%);
        border-radius: 20px;
        padding: 30px;
        text-align: center;
    }

    .profile-img {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        background: linear-gradient(135deg, #5c6bc0 0%, #3f51b5 100%);
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 4rem;
        margin: 0 auto 20px;
        box-shadow: 0 4px 20px rgba(92, 107, 192, 0.3);
    }

    .profile-info h4 {
        color: #3f51b5;
        font-weight: 700;
        margin-bottom: 10px;
    }

    .profile-info p {
        color: #666;
        margin: 5px 0;
    }

    /* Tech stack badges */
    .tech-badge {
        display: inline-block;
        background: linear-gradient(135deg, #5c6bc0 0%, #3f51b5 100%);
        color: white;
        padding: 10px 20px;
        border-radius: 20px;
        margin: 5px;
        font-weight: 600;
        box-shadow: 0 3px 10px rgba(92, 107, 192, 0.3);
    }

    /* Contact section */
    .contact-item {
        background: white;
        padding: 20px;
        border-radius: 15px;
        margin-bottom: 15px;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        display: flex;
        align-items: center;
        transition: transform 0.3s ease;
    }

    .contact-item:hover {
        transform: translateX(10px);
    }

    .contact-item i {
        font-size: 2rem;
        color: #5c6bc0;
        margin-right: 20px;
    }

    .contact-item a {
        color: #3f51b5;
        text-decoration: none;
        font-weight: 600;
    }

    .contact-item a:hover {
        text-decoration: underline;
    }

    /* Back button */
    .btn-back-home {
        background: linear-gradient(135deg, #5c6bc0 0%, #3f51b5 100%);
        color: white;
        padding: 15px 40px;
        border-radius: 30px;
        font-weight: 700;
        text-decoration: none;
        display: inline-block;
        box-shadow: 0 4px 15px rgba(92, 107, 192, 0.4);
        transition: all 0.3s ease;
    }

    .btn-back-home:hover {
        transform: translateY(-3px);
        box-shadow: 0 6px 20px rgba(92, 107, 192, 0.6);
        color: white;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .about-header h1 {
            font-size: 2rem;
        }

        .about-section h3 {
            font-size: 1.3rem;
        }
    }
</style>

<div class="about-container">
    <!-- Bubble decorations -->
    <div class="bubble-about"></div>
    <div class="bubble-about"></div>
    <div class="bubble-about"></div>

    <div class="container">
        <!-- Header -->
        <div class="about-header">
            <h1>ℹ️ About This Project ℹ️</h1>
            <p>Sistem Transaksi Laundry Asrama Kampus</p>
        </div>

        <!-- Main Content -->
        <div class="row">
            <div class="col-lg-8">
                <!-- Tentang Aplikasi -->
                <div class="about-card">
                    <div class="about-section">
                        <h3><i class="bi bi-info-circle-fill"></i> Tentang Aplikasi</h3>
                        <p>
                            <strong>Sistem Transaksi Laundry Asrama</strong> adalah aplikasi berbasis web yang dikembangkan untuk memudahkan
                            pengelolaan transaksi laundry mahasiswa yang tinggal di asrama kampus. Aplikasi ini dirancang untuk menggantikan
                            sistem pencatatan manual yang rawan kesalahan menjadi sistem digital yang lebih efisien dan terorganisir.
                        </p>
                    </div>

                    <!-- Fitur Utama -->
                    <div class="about-section">
                        <h3><i class="bi bi-stars"></i> Fitur Utama</h3>
                        <ul>
                            <li>Pencatatan data pelanggan (NIM, Nama, Kamar, No HP)</li>
                            <li>Manajemen jenis layanan laundry (Cuci Kering, Cuci Setrika, Setrika Saja)</li>
                            <li>Perhitungan otomatis total harga berdasarkan berat dan jenis layanan</li>
                            <li>Tracking status laundry (Proses, Selesai, Diambil)</li>
                            <li>Multiple metode pembayaran (Cash, Transfer, QRIS)</li>
                            <li>Fitur pencarian data transaksi</li>
                            <li>CRUD lengkap (Create, Read, Update, Delete)</li>
                            <li>Soft delete untuk keamanan data</li>
                        </ul>
                    </div>

                    <!-- Teknologi -->
                    <div class="about-section">
                        <h3><i class="bi bi-code-slash"></i> Teknologi yang Digunakan</h3>
                        <div class="mt-3">
                            <span class="tech-badge">🐘 PHP</span>
                            <span class="tech-badge">🔥 CodeIgniter 3</span>
                            <span class="tech-badge">🎨 Bootstrap 5</span>
                            <span class="tech-badge">🗄️ MySQL</span>
                            <span class="tech-badge">📱 Responsive Design</span>
                            <span class="tech-badge">✨ CSS3 Animation</span>
                        </div>
                    </div>

                    <!-- Tujuan -->
                    <div class="about-section">
                        <h3><i class="bi bi-bullseye"></i> Tujuan Pengembangan</h3>
                        <ul>
                            <li>Meningkatkan efisiensi pengelolaan laundry asrama</li>
                            <li>Mengurangi kesalahan pencatatan manual</li>
                            <li>Mempermudah monitoring status laundry</li>
                            <li>Memberikan laporan yang akurat dan real-time</li>
                            <li>Mendukung digitalisasi administrasi kampus</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <!-- Profile Card -->
                <div class="about-card profile-section">
                    <div class="profile-img">
                        👨‍💻
                    </div>
                    <div class="profile-info">
                        <h4>Aspiring Developer</h4>
                        <p><strong>Nama:</strong>Muhammad Akbar Firnanda</p>
                        <p><strong>NIM:</strong>2410051</p>
                        <p><strong>Program Studi:</strong>Teknik Informatika</p>
                        <p><strong>Universitas:</strong>Sekolah Tinggi Ilmu Komputer Antar Bangsa</p>
                    </div>
                </div>

                <!-- Contact Card -->
                <div class="about-card">
                    <h4 class="text-center mb-3" style="color: #5c6bc0; font-weight: 700;">📞 Kontak</h4>

                    <div class="contact-item">
                        <i class="bi bi-envelope-fill"></i>
                        <div>
                            <small class="d-block text-muted">Email</small>
                            <a href="mailto:your@email.com">akbarfirnanda154
                                @gmail.com</a>
                        </div>
                    </div>

                    <div class="contact-item">
                        <i class="bi bi-github"></i>
                        <div>
                            <small class="d-block text-muted">GitHub</small>
                            <a href="https://github.com/yourusername" target="_blank">https://github.com/
                                muhammadakbar.github.io</a>
                        </div>
                    </div>

                    <div class="contact-item">
                        <i class="bi bi-linkedin"></i>
                        <div>
                            <small class="d-block text-muted">LinkedIn</small>
                            <a href="https://linkedin.com/in/yourprofile" target="_blank">www.linkedin.com/in/
                                muhammad-akbar-
                                firnanda-096522318</a>
                        </div>
                    </div>
                </div>

                <!-- Info Card -->
                <div class="about-card text-center">
                    <h5 style="color: #5c6bc0; font-weight: 700;">📅 Project Info</h5>
                    <hr>
                    <p><strong>Versi:</strong>29.01.26</p>
                    <p><strong>Tahun:</strong> 2026</p>
                    <p><strong>Tugas:</strong> UAS</p>
                    <hr>
                    <small class="text-muted">
                        © 2025 Sistem Laundry Asrama.<br>
                        Dibuat Untuk Memenuhi tugas UAS
                    </small>
                </div>
            </div>
        </div>

        <!-- Back Button -->
        <div class="text-center mt-4">
            <a href="<?= base_url(); ?>" class="btn-back-home">
                <i class="bi bi-house-door-fill"></i> Kembali ke Home
            </a>
        </div>
    </div>
</div>