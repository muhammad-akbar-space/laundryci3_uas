<div class="container mt-3">
    <div class="row">
        <div class="col-md-8 col-lg-6 mx-auto">
            <div class="card shadow-lg border-0">
                <div class="card-header text-white" style="background: linear-gradient(135deg, #4A90E2 0%, #357ABD 100%);">
                    <h5 class="mb-0"><i class="bi bi-receipt"></i> Detail Data Transaksi Mahasiswa</h5>
                </div>
                <div class="card-body p-3">
                    <table class="table table-sm table-hover mb-3">
                        <tr>
                            <td width="40%" style="background-color: #E3F2FD;"><strong>Nama Mahasiswa</strong></td>
                            <td><?= $mahasiswa['nama_mahasiswa']; ?></td>
                        </tr>
                        <tr>
                            <td style="background-color: #FFF9E6;"><strong>NIM</strong></td>
                            <td><?= $mahasiswa['nim']; ?></td>
                        </tr>
                        <tr>
                            <td style="background-color: #E3F2FD;"><strong>Kamar</strong></td>
                            <td><?= $mahasiswa['kamar']; ?></td>
                        </tr>
                        <tr>
                            <td style="background-color: #FFF9E6;"><strong>Jenis Layanan</strong></td>
                            <td><?= $mahasiswa['jenis_layanan']; ?></td>
                        </tr>
                        <tr>
                            <td style="background-color: #FFF9E6;"><strong>Berat</strong></td>
                            <td><?= $mahasiswa['berat_kg']; ?> Kg</td>
                        </tr>
                        <tr>
                            <td style="background-color: #FFF9E6;"><strong>Status</strong></td>
                            <td>
                                <?php if ($mahasiswa['status'] == 'Diambil'): ?>
                                    <span class="badge" style="background-color: #4A90E2; color: white;"><?= $mahasiswa['status']; ?></span>
                                <?php else: ?>
                                    <span class="badge" style="background-color: #FFE082; color: #333;"><?= $mahasiswa['status']; ?></span>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="background-color: #E3F2FD;"><strong>Metode Pembayaran</strong></td>
                            <td><?= $mahasiswa['metode_pembayaran']; ?></td>
                        </tr>
                    </table>
                    <a href="<?= base_url(); ?>mahasiswa" class="btn text-white" style="background-color: #4A90E2;">
                        <i class="bi bi-arrow-left"></i> Kembali
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>