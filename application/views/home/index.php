<style>
    /* Background dengan gradient simple */
    .home-container {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #f093fb 100%);
        min-height: 100vh;
        padding: 50px 0;
        position: relative;
        overflow: hidden;
    }

    /* Bubble Sabun - DIKURANGI jadi 5 aja */
    .bubble {
        position: absolute;
        bottom: -100px;
        background: radial-gradient(circle at 30% 30%, rgba(255, 255, 255, 0.6), rgba(255, 255, 255, 0.1));
        border-radius: 50%;
        opacity: 0.5;
        animation: rise 15s infinite ease-in;
    }

    .bubble:nth-child(1) {
        width: 60px;
        height: 60px;
        left: 10%;
        animation-duration: 12s;
    }

    .bubble:nth-child(2) {
        width: 80px;
        height: 80px;
        left: 30%;
        animation-duration: 15s;
        animation-delay: 3s;
    }

    .bubble:nth-child(3) {
        width: 50px;
        height: 50px;
        left: 50%;
        animation-duration: 10s;
        animation-delay: 1s;
    }

    .bubble:nth-child(4) {
        width: 70px;
        height: 70px;
        left: 70%;
        animation-duration: 13s;
        animation-delay: 4s;
    }

    .bubble:nth-child(5) {
        width: 55px;
        height: 55px;
        left: 90%;
        animation-duration: 11s;
        animation-delay: 2s;
    }

    @keyframes rise {
        0% {
            bottom: -100px;
            opacity: 0;
        }

        10% {
            opacity: 0.5;
        }

        90% {
            opacity: 0.5;
        }

        100% {
            bottom: 110vh;
            opacity: 0;
        }
    }

    /* Hero Section */
    .hero-card {
        background: rgba(255, 255, 255, 0.95);
        border-radius: 25px;
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
        padding: 50px 30px;
        margin-bottom: 40px;
    }

    .hero-card h1 {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        font-size: 2.5rem;
        font-weight: 900;
        margin-bottom: 20px;
    }

    .hero-card p {
        font-size: 1.2rem;
        color: #555;
    }

    /* Info cards */
    .info-cards {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
        margin-bottom: 30px;
    }

    .info-card {
        background: rgba(255, 255, 255, 0.95);
        padding: 30px;
        border-radius: 20px;
        text-align: center;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }

    .info-card:hover {
        transform: translateY(-5px);
    }

    .info-card .icon {
        font-size: 3rem;
        margin-bottom: 15px;
    }

    .info-card h3 {
        color: #667eea;
        font-weight: 700;
        margin-bottom: 10px;
    }

    .info-card p {
        color: #666;
        font-size: 0.95rem;
    }

    /* Accordion */
    .accordion-item {
        background: rgba(255, 255, 255, 0.95);
        border: none;
        margin-bottom: 15px;
        border-radius: 15px !important;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    .accordion-button {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        font-weight: 700;
        font-size: 1.1rem;
        padding: 18px 25px;
        border-radius: 15px !important;
    }

    .accordion-button:not(.collapsed) {
        background: linear-gradient(135deg, #764ba2 0%, #667eea 100%);
        color: white;
    }

    .accordion-button:focus {
        box-shadow: none;
        border: none;
    }

    .accordion-button::after {
        filter: brightness(0) invert(1);
    }

    .accordion-body {
        background: white;
        padding: 25px;
        font-size: 1rem;
        line-height: 1.7;
        color: #333;
    }

    .accordion-body strong {
        color: #667eea;
        font-weight: 700;
    }

    .accordion-body ul {
        list-style: none;
        padding-left: 0;
    }

    .accordion-body ul li {
        padding: 8px 0;
        padding-left: 25px;
        position: relative;
    }

    .accordion-body ul li::before {
        content: '✨';
        position: absolute;
        left: 0;
    }

    /* Feature badges */
    .feature-badge {
        display: inline-block;
        background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
        color: white;
        padding: 8px 20px;
        border-radius: 20px;
        font-weight: 600;
        margin: 5px;
    }

    /* FAB Button */
    .fab-button {
        position: fixed;
        bottom: 30px;
        right: 30px;
        width: 60px;
        height: 60px;
        border-radius: 50%;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        border: none;
        box-shadow: 0 4px 20px rgba(102, 126, 234, 0.5);
        font-size: 24px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        transition: transform 0.3s ease;
        z-index: 999;
    }

    .fab-button:hover {
        transform: scale(1.1);
        color: white;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .hero-card h1 {
            font-size: 1.8rem;
        }

        .hero-card p {
            font-size: 1rem;
        }
    }
</style>

<div class="home-container">
    <!-- Bubble Sabun - CUMA 5 -->
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>

    <div class="container">
        <!-- HERO SECTION -->
        <div class="hero-card text-center">
            <h1>🧺 Sistem Transaksi Laundry Asrama 🧺</h1>
            <p>Aplikasi pencatatan dan pengelolaan laundry khusus mahasiswa asrama kampus</p>
        </div>

        <!-- INFO CARDS -->
        <div class="info-cards">
            <div class="info-card">
                <div class="icon">⚡</div>
                <h3>Cepat & Efisien</h3>
                <p>Proses transaksi laundry yang cepat dan mudah dipahami</p>
            </div>
            <div class="info-card">
                <div class="icon">📊</div>
                <h3>Terkelola Rapi</h3>
                <p>Data transaksi tersimpan dengan aman dan terstruktur</p>
            </div>
            <div class="info-card">
                <div class="icon">💯</div>
                <h3>Akurat & Terpercaya</h3>
                <p>Mengurangi kesalahan pencatatan manual</p>
            </div>
        </div>

        <!-- ACCORDION -->
        <div class="accordion" id="homeAccordion">

            <!-- ITEM 1 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        🧺 Tentang Sistem Laundry Asrama
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#homeAccordion">
                    <div class="accordion-body">
                        <strong>Sistem Transaksi Laundry Asrama</strong> merupakan aplikasi
                        berbasis web yang digunakan untuk mencatat dan mengelola transaksi
                        laundry mahasiswa yang tinggal di asrama kampus.
                        <br><br>
                        Sistem ini dibuat untuk menggantikan pencatatan manual agar proses
                        laundry menjadi <b>lebih cepat, rapi, dan terkontrol</b>.
                        <br><br>
                        <div class="mt-3">
                            <span class="feature-badge">📱 User Friendly</span>
                            <span class="feature-badge">🔒 Aman</span>
                            <span class="feature-badge">⚡ Real-time</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ITEM 2 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        ⚙️ Fitur Utama Aplikasi
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#homeAccordion">
                    <div class="accordion-body">
                        <strong>Fitur-fitur yang tersedia dalam sistem ini:</strong>
                        <ul class="mt-3">
                            <li>📝 Pencatatan transaksi laundry mahasiswa</li>
                            <li>👥 Pengelolaan data pelanggan</li>
                            <li>🧺 Pemilihan jenis layanan laundry (Cuci Kering, Cuci Setrika, Setrika Saja)</li>
                            <li>💳 Metode pembayaran (Cash / Transfer / QRIS)</li>
                            <li>📊 Status laundry (Proses, Selesai, Diambil)</li>
                            <li>🔍 Pencarian dan filter data transaksi</li>
                            <li>📱 Antarmuka responsif dan mobile-friendly</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- ITEM 3 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        🎯 Tujuan & Manfaat
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#homeAccordion">
                    <div class="accordion-body">
                        <strong>Tujuan dibuatnya aplikasi ini:</strong>
                        <ul class="mt-3">
                            <li>🎯 Mengurangi kesalahan pencatatan manual</li>
                            <li>📈 Mempermudah monitoring transaksi laundry</li>
                            <li>⭐ Meningkatkan pelayanan laundry asrama</li>
                            <li>💻 Mendukung sistem administrasi kampus digital</li>
                            <li>♻️ Meningkatkan efisiensi operasional</li>
                            <li>📊 Menyediakan laporan yang akurat</li>
                        </ul>
                        <div class="mt-4 p-3 text-center" style="background: linear-gradient(135deg, #ffecd2 0%, #fcb69f 100%); border-radius: 15px;">
                            <strong style="color: #d63031;">
                                🎓 Aplikasi ini dikembangkan sebagai bagian dari tugas UAS
                            </strong>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <!-- Floating Action Button -->
    <a href="<?= base_url('mahasiswa'); ?>" class="fab-button" title="Lihat Data Transaksi">
        📋
    </a>
</div>