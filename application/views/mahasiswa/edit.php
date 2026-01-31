<style>
    /* Background dengan gradient warna crunchy */
    .edit-container {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 25%, #f093fb 50%, #4facfe 75%, #00f2fe 100%);
        min-height: 100vh;
        padding: 30px 0;
        position: relative;
        overflow: hidden;
    }

    /* Bubble Sabun Animation */
    .bubble {
        position: absolute;
        bottom: -100px;
        background: radial-gradient(circle at 30% 30%, rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0.2));
        border-radius: 50%;
        opacity: 0.7;
        animation: rise 15s infinite ease-in;
        box-shadow: inset 0 0 20px rgba(255, 255, 255, 0.5);
    }

    .bubble:nth-child(1) {
        width: 40px;
        height: 40px;
        left: 10%;
        animation-duration: 8s;
    }

    .bubble:nth-child(2) {
        width: 60px;
        height: 60px;
        left: 20%;
        animation-duration: 10s;
        animation-delay: 2s;
    }

    .bubble:nth-child(3) {
        width: 30px;
        height: 30px;
        left: 30%;
        animation-duration: 12s;
        animation-delay: 4s;
    }

    .bubble:nth-child(4) {
        width: 50px;
        height: 50px;
        left: 50%;
        animation-duration: 9s;
        animation-delay: 1s;
    }

    .bubble:nth-child(5) {
        width: 45px;
        height: 45px;
        left: 60%;
        animation-duration: 11s;
        animation-delay: 3s;
    }

    .bubble:nth-child(6) {
        width: 35px;
        height: 35px;
        left: 75%;
        animation-duration: 13s;
        animation-delay: 5s;
    }

    .bubble:nth-child(7) {
        width: 55px;
        height: 55px;
        left: 85%;
        animation-duration: 10s;
    }

    .bubble:nth-child(8) {
        width: 25px;
        height: 25px;
        left: 95%;
        animation-duration: 14s;
        animation-delay: 6s;
    }

    @keyframes rise {
        0% {
            bottom: -100px;
            transform: translateX(0);
            opacity: 0;
        }

        10% {
            opacity: 0.7;
        }

        90% {
            opacity: 0.7;
        }

        100% {
            bottom: 110vh;
            transform: translateX(100px);
            opacity: 0;
        }
    }

    /* Card styling dengan glassmorphism */
    .edit-card {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(10px);
        border-radius: 20px;
        box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        border: 1px solid rgba(255, 255, 255, 0.18);
        overflow: hidden;
        animation: slideUp 0.6s ease-out;
    }

    @keyframes slideUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Header dengan gradient */
    .edit-header {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 20px;
        text-align: center;
        position: relative;
        overflow: hidden;
    }

    .edit-header::before {
        content: '🧼';
        position: absolute;
        font-size: 100px;
        opacity: 0.1;
        right: -20px;
        top: -20px;
        animation: rotate 10s linear infinite;
    }

    @keyframes rotate {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }

    .edit-header h4 {
        margin: 0;
        font-weight: bold;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
    }

    /* Form groups dengan warna colorful */
    .form-group {
        margin-bottom: 20px;
        position: relative;
    }

    .form-group label {
        font-weight: 600;
        color: #667eea;
        margin-bottom: 8px;
        display: block;
    }

    /* Input fields dengan efek focus keren */
    .form-control {
        border: 2px solid #e0e7ff;
        border-radius: 10px;
        padding: 12px 15px;
        transition: all 0.3s ease;
        background: rgba(255, 255, 255, 0.9);
    }

    .form-control:focus {
        border-color: #667eea;
        box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
        transform: translateY(-2px);
        background: white;
    }

    /* Select dropdown styling */
    select.form-control {
        cursor: pointer;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 12 12'%3E%3Cpath fill='%23667eea' d='M6 9L1 4h10z'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: right 15px center;
        padding-right: 40px;
    }

    /* Button styling dengan gradient */
    .btn-edit {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border: none;
        color: white;
        padding: 12px 30px;
        border-radius: 25px;
        font-weight: 600;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
    }

    .btn-edit:hover {
        transform: translateY(-3px);
        box-shadow: 0 6px 20px rgba(102, 126, 234, 0.6);
        color: white;
    }

    .btn-back {
        background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
        border: none;
        color: white;
        padding: 12px 30px;
        border-radius: 25px;
        font-weight: 600;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(240, 147, 251, 0.4);
    }

    .btn-back:hover {
        transform: translateY(-3px);
        box-shadow: 0 6px 20px rgba(240, 147, 251, 0.6);
        color: white;
    }

    /* Kolom warna-warni untuk tanggal */
    .date-select-group {
        background: linear-gradient(135deg, #ffecd2 0%, #fcb69f 100%);
        padding: 15px;
        border-radius: 15px;
        margin-bottom: 10px;
    }

    /* Hover effect untuk input readonly */
    input[readonly] {
        background: linear-gradient(135deg, #e0c3fc 0%, #8ec5fc 100%);
        color: #333;
        font-weight: 600;
        cursor: not-allowed;
    }

    /* Invalid feedback styling */
    .invalid-feedback {
        color: #f5576c;
        font-weight: 600;
    }

    .is-invalid {
        border-color: #f5576c !important;
        animation: shake 0.3s;
    }

    @keyframes shake {

        0%,
        100% {
            transform: translateX(0);
        }

        25% {
            transform: translateX(-10px);
        }

        75% {
            transform: translateX(10px);
        }
    }
</style>

<div class="edit-container">
    <!-- Bubble Sabun Elements -->
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8">
                <div class="edit-card">
                    <div class="edit-header">
                        <h4>✨ Edit Data Transaksi Laundry ✨</h4>
                        <small>Perbarui informasi transaksi dengan mudah</small>
                    </div>
                    <div class="card-body p-4">
                        <form action="" method="post">
                            <input type="hidden" name="id_transaksi" value="<?= $mahasiswa['id_transaksi']; ?>">

                            <div class="row">
                                <!-- NIM -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nim">🎓 NIM</label>
                                        <input type="text" class="form-control <?= form_error('nim') ? 'is-invalid' : ''; ?>"
                                            id="nim" name="nim" value="<?= $mahasiswa['nim']; ?>">
                                        <div class="invalid-feedback"><?= form_error('nim'); ?></div>
                                    </div>
                                </div>

                                <!-- Nama Mahasiswa -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nama_mahasiswa">👤 Nama Mahasiswa</label>
                                        <input type="text" class="form-control <?= form_error('nama_mahasiswa') ? 'is-invalid' : ''; ?>"
                                            id="nama_mahasiswa" name="nama_mahasiswa" value="<?= $mahasiswa['nama_mahasiswa']; ?>">
                                        <div class="invalid-feedback"><?= form_error('nama_mahasiswa'); ?></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Kamar -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="kamar">🏠 Kamar</label>
                                        <input type="text" class="form-control <?= form_error('kamar') ? 'is-invalid' : ''; ?>"
                                            id="kamar" name="kamar" placeholder="Contoh: A101" value="<?= $mahasiswa['kamar']; ?>">
                                        <div class="invalid-feedback"><?= form_error('kamar'); ?></div>
                                    </div>
                                </div>

                                <!-- No HP -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="no_hp">📱 No HP</label>
                                        <input type="text" class="form-control <?= form_error('no_hp') ? 'is-invalid' : ''; ?>"
                                            id="no_hp" name="no_hp" placeholder="08xxxxxxxxxx" value="<?= $mahasiswa['no_hp']; ?>">
                                        <div class="invalid-feedback"><?= form_error('no_hp'); ?></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Jenis Layanan -->
                            <div class="form-group">
                                <label for="jenis_layanan">🧺 Jenis Layanan</label>
                                <select class="form-control <?= form_error('jenis_layanan') ? 'is-invalid' : ''; ?>"
                                    id="jenis_layanan" name="jenis_layanan">
                                    <option value="">-- Pilih Jenis Layanan --</option>
                                    <option value="Cuci Kering" data-harga="5000" <?= $mahasiswa['jenis_layanan'] == 'Cuci Kering' ? 'selected' : ''; ?>>Cuci Kering - Rp 5.000/kg</option>
                                    <option value="Cuci Setrika" data-harga="7000" <?= $mahasiswa['jenis_layanan'] == 'Cuci Setrika' ? 'selected' : ''; ?>>Cuci Setrika - Rp 7.000/kg</option>
                                    <option value="Setrika Saja" data-harga="6000" <?= $mahasiswa['jenis_layanan'] == 'Setrika Saja' ? 'selected' : ''; ?>>Setrika Saja - Rp 6.000/kg</option>
                                </select>
                                <div class="invalid-feedback"><?= form_error('jenis_layanan'); ?></div>
                            </div>

                            <div class="row">
                                <!-- Harga Per KG -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="harga_per_kg">💰 Harga Per KG</label>
                                        <input type="number" class="form-control" id="harga_per_kg" name="harga_per_kg" readonly value="<?= $mahasiswa['harga']; ?>">
                                    </div>
                                </div>

                                <!-- Berat KG -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="berat_kg">⚖️ Berat (KG)</label>
                                        <input type="number" class="form-control <?= form_error('berat_kg') ? 'is-invalid' : ''; ?>"
                                            id="berat_kg" name="berat_kg" step="0.1" min="0" value="<?= $mahasiswa['berat_kg']; ?>">
                                        <div class="invalid-feedback"><?= form_error('berat_kg'); ?></div>
                                    </div>
                                </div>

                                <!-- Total Harga -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="total_harga">💵 Total Harga</label>
                                        <input type="number" class="form-control" id="total_harga" name="total_harga" readonly value="<?= $mahasiswa['total_harga']; ?>">
                                    </div>
                                </div>
                            </div>

                            <!-- Tanggal Masuk -->
                            <div class="form-group">
                                <label for="tanggal_masuk">📅 Tanggal Masuk</label>
                                <div class="date-select-group">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <select class="form-control" id="tgl_masuk" name="tgl_masuk">
                                                <option value="">Tanggal</option>
                                                <?php for ($i = 1; $i <= 31; $i++): ?>
                                                    <option value="<?= str_pad($i, 2, '0', STR_PAD_LEFT); ?>" <?= date('d', strtotime($mahasiswa['tanggal_masuk'])) == str_pad($i, 2, '0', STR_PAD_LEFT) ? 'selected' : ''; ?>><?= $i; ?></option>
                                                <?php endfor; ?>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="form-control" id="bln_masuk" name="bln_masuk">
                                                <option value="">Bulan</option>
                                                <option value="01" <?= date('m', strtotime($mahasiswa['tanggal_masuk'])) == '01' ? 'selected' : ''; ?>>Januari</option>
                                                <option value="02" <?= date('m', strtotime($mahasiswa['tanggal_masuk'])) == '02' ? 'selected' : ''; ?>>Februari</option>
                                                <option value="03" <?= date('m', strtotime($mahasiswa['tanggal_masuk'])) == '03' ? 'selected' : ''; ?>>Maret</option>
                                                <option value="04" <?= date('m', strtotime($mahasiswa['tanggal_masuk'])) == '04' ? 'selected' : ''; ?>>April</option>
                                                <option value="05" <?= date('m', strtotime($mahasiswa['tanggal_masuk'])) == '05' ? 'selected' : ''; ?>>Mei</option>
                                                <option value="06" <?= date('m', strtotime($mahasiswa['tanggal_masuk'])) == '06' ? 'selected' : ''; ?>>Juni</option>
                                                <option value="07" <?= date('m', strtotime($mahasiswa['tanggal_masuk'])) == '07' ? 'selected' : ''; ?>>Juli</option>
                                                <option value="08" <?= date('m', strtotime($mahasiswa['tanggal_masuk'])) == '08' ? 'selected' : ''; ?>>Agustus</option>
                                                <option value="09" <?= date('m', strtotime($mahasiswa['tanggal_masuk'])) == '09' ? 'selected' : ''; ?>>September</option>
                                                <option value="10" <?= date('m', strtotime($mahasiswa['tanggal_masuk'])) == '10' ? 'selected' : ''; ?>>Oktober</option>
                                                <option value="11" <?= date('m', strtotime($mahasiswa['tanggal_masuk'])) == '11' ? 'selected' : ''; ?>>November</option>
                                                <option value="12" <?= date('m', strtotime($mahasiswa['tanggal_masuk'])) == '12' ? 'selected' : ''; ?>>Desember</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="form-control" id="thn_masuk" name="thn_masuk">
                                                <option value="">Tahun</option>
                                                <?php for ($i = 2024; $i <= 2030; $i++): ?>
                                                    <option value="<?= $i; ?>" <?= date('Y', strtotime($mahasiswa['tanggal_masuk'])) == $i ? 'selected' : ''; ?>><?= $i; ?></option>
                                                <?php endfor; ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" id="tanggal_masuk" name="tanggal_masuk" value="<?= $mahasiswa['tanggal_masuk']; ?>">
                            </div>

                            <!-- Tanggal Selesai -->
                            <div class="form-group">
                                <label for="tanggal_selesai">✅ Tanggal Selesai</label>
                                <div class="date-select-group">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <select class="form-control" id="tgl_selesai" name="tgl_selesai">
                                                <option value="">Tanggal</option>
                                                <?php for ($i = 1; $i <= 31; $i++): ?>
                                                    <option value="<?= str_pad($i, 2, '0', STR_PAD_LEFT); ?>" <?= date('d', strtotime($mahasiswa['tanggal_selesai'])) == str_pad($i, 2, '0', STR_PAD_LEFT) ? 'selected' : ''; ?>><?= $i; ?></option>
                                                <?php endfor; ?>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="form-control" id="bln_selesai" name="bln_selesai">
                                                <option value="">Bulan</option>
                                                <option value="01" <?= date('m', strtotime($mahasiswa['tanggal_selesai'])) == '01' ? 'selected' : ''; ?>>Januari</option>
                                                <option value="02" <?= date('m', strtotime($mahasiswa['tanggal_selesai'])) == '02' ? 'selected' : ''; ?>>Februari</option>
                                                <option value="03" <?= date('m', strtotime($mahasiswa['tanggal_selesai'])) == '03' ? 'selected' : ''; ?>>Maret</option>
                                                <option value="04" <?= date('m', strtotime($mahasiswa['tanggal_selesai'])) == '04' ? 'selected' : ''; ?>>April</option>
                                                <option value="05" <?= date('m', strtotime($mahasiswa['tanggal_selesai'])) == '05' ? 'selected' : ''; ?>>Mei</option>
                                                <option value="06" <?= date('m', strtotime($mahasiswa['tanggal_selesai'])) == '06' ? 'selected' : ''; ?>>Juni</option>
                                                <option value="07" <?= date('m', strtotime($mahasiswa['tanggal_selesai'])) == '07' ? 'selected' : ''; ?>>Juli</option>
                                                <option value="08" <?= date('m', strtotime($mahasiswa['tanggal_selesai'])) == '08' ? 'selected' : ''; ?>>Agustus</option>
                                                <option value="09" <?= date('m', strtotime($mahasiswa['tanggal_selesai'])) == '09' ? 'selected' : ''; ?>>September</option>
                                                <option value="10" <?= date('m', strtotime($mahasiswa['tanggal_selesai'])) == '10' ? 'selected' : ''; ?>>Oktober</option>
                                                <option value="11" <?= date('m', strtotime($mahasiswa['tanggal_selesai'])) == '11' ? 'selected' : ''; ?>>November</option>
                                                <option value="12" <?= date('m', strtotime($mahasiswa['tanggal_selesai'])) == '12' ? 'selected' : ''; ?>>Desember</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="form-control" id="thn_selesai" name="thn_selesai">
                                                <option value="">Tahun</option>
                                                <?php for ($i = 2024; $i <= 2030; $i++): ?>
                                                    <option value="<?= $i; ?>" <?= date('Y', strtotime($mahasiswa['tanggal_selesai'])) == $i ? 'selected' : ''; ?>><?= $i; ?></option>
                                                <?php endfor; ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" id="tanggal_selesai" name="tanggal_selesai" value="<?= $mahasiswa['tanggal_selesai']; ?>">
                            </div>

                            <div class="row">
                                <!-- Status -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="status">📊 Status</label>
                                        <select class="form-control <?= form_error('status') ? 'is-invalid' : ''; ?>"
                                            id="status" name="status">
                                            <option value="">-- Pilih Status --</option>
                                            <option value="Proses" <?= $mahasiswa['status'] == 'Proses' ? 'selected' : ''; ?>>Proses</option>
                                            <option value="Selesai" <?= $mahasiswa['status'] == 'Selesai' ? 'selected' : ''; ?>>Selesai</option>
                                            <option value="Diambil" <?= $mahasiswa['status'] == 'Diambil' ? 'selected' : ''; ?>>Diambil</option>
                                        </select>
                                        <div class="invalid-feedback"><?= form_error('status'); ?></div>
                                    </div>
                                </div>

                                <!-- Metode Pembayaran -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="metode_pembayaran">💳 Metode Pembayaran</label>
                                        <select class="form-control <?= form_error('metode_pembayaran') ? 'is-invalid' : ''; ?>"
                                            id="metode_pembayaran" name="metode_pembayaran">
                                            <option value="">-- Pilih Metode --</option>
                                            <option value="Cash" <?= $mahasiswa['metode_pembayaran'] == 'Cash' ? 'selected' : ''; ?>>Cash</option>
                                            <option value="QRIS" <?= $mahasiswa['metode_pembayaran'] == 'QRIS' ? 'selected' : ''; ?>>QRIS</option>
                                            <option value="Transfer" <?= $mahasiswa['metode_pembayaran'] == 'Transfer' ? 'selected' : ''; ?>>Transfer</option>
                                        </select>
                                        <div class="invalid-feedback"><?= form_error('metode_pembayaran'); ?></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Tanggal Pembayaran -->
                            <div class="form-group">
                                <label for="tanggal_pembayaran">💸 Tanggal Pembayaran</label>
                                <input type="date" class="form-control" id="tanggal_pembayaran" name="tanggal_pembayaran" value="<?= $mahasiswa['tanggal_pembayaran']; ?>">
                            </div>

                            <!-- Catatan -->
                            <div class="form-group">
                                <label for="catatan">📝 Catatan</label>
                                <textarea class="form-control" id="catatan" name="catatan" rows="3" placeholder="Catatan tambahan (opsional)"><?= isset($mahasiswa['catatan']) ? $mahasiswa['catatan'] : ''; ?></textarea>
                            </div>

                            <!-- Buttons -->
                            <div class="text-center mt-4">
                                <button type="submit" class="btn btn-edit">💾 Simpan Perubahan</button>
                                <a href="<?= base_url(); ?>mahasiswa" class="btn btn-back">🔙 Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript untuk Auto Calculate -->
<script>
    document.getElementById('jenis_layanan').addEventListener('change', function() {
        var harga = this.options[this.selectedIndex].getAttribute('data-harga');
        document.getElementById('harga_per_kg').value = harga;
        hitungTotal();
    });

    document.getElementById('berat_kg').addEventListener('input', function() {
        hitungTotal();
    });

    function hitungTotal() {
        var hargaPerKg = parseFloat(document.getElementById('harga_per_kg').value) || 0;
        var beratKg = parseFloat(document.getElementById('berat_kg').value) || 0;
        var total = hargaPerKg * beratKg;
        document.getElementById('total_harga').value = total;
    }

    document.getElementById('tgl_masuk').addEventListener('change', gabungTanggalMasuk);
    document.getElementById('bln_masuk').addEventListener('change', gabungTanggalMasuk);
    document.getElementById('thn_masuk').addEventListener('change', gabungTanggalMasuk);

    function gabungTanggalMasuk() {
        var tgl = document.getElementById('tgl_masuk').value;
        var bln = document.getElementById('bln_masuk').value;
        var thn = document.getElementById('thn_masuk').value;
        if (tgl && bln && thn) {
            document.getElementById('tanggal_masuk').value = thn + '-' + bln + '-' + tgl;
        }
    }

    document.getElementById('tgl_selesai').addEventListener('change', gabungTanggalSelesai);
    document.getElementById('bln_selesai').addEventListener('change', gabungTanggalSelesai);
    document.getElementById('thn_selesai').addEventListener('change', gabungTanggalSelesai);

    function gabungTanggalSelesai() {
        var tgl = document.getElementById('tgl_selesai').value;
        var bln = document.getElementById('bln_selesai').value;
        var thn = document.getElementById('thn_selesai').value;
        if (tgl && bln && thn) {
            document.getElementById('tanggal_selesai').value = thn + '-' + bln + '-' + tgl;
        }
    }
</script>