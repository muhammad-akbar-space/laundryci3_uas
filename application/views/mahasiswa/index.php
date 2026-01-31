<style>
   /* Background soft & santai */
   .data-container {
      background: linear-gradient(135deg, #e0f7fa 0%, #b2ebf2 50%, #80deea 100%);
      min-height: 100vh;
      padding: 30px 0;
   }

   /* Card styling soft */
   .main-card {
      background: rgba(255, 255, 255, 0.95);
      border-radius: 20px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
      overflow: hidden;
   }

   /* Header card dengan warna soft */
   .card-header-custom {
      background: linear-gradient(135deg, #26c6da 0%, #00acc1 100%);
      color: white;
      padding: 20px;
      border: none;
   }

   /* Avatar circle */
   .avatar-circle {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      background: linear-gradient(135deg, #26c6da 0%, #00acc1 100%);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 24px;
      font-weight: bold;
      color: white;
   }

   /* List item styling */
   .list-group-item {
      transition: all 0.3s ease;
      border: none;
      border-bottom: 1px solid #e0e0e0;
      padding: 20px;
   }

   .list-group-item:hover {
      background: linear-gradient(135deg, #e0f7fa 0%, #b2ebf2 100%);
      transform: translateX(5px);
   }

   /* Badge status dengan warna soft */
   .badge {
      font-weight: 600;
      letter-spacing: 0.5px;
      padding: 8px 15px;
      border-radius: 20px;
   }

   /* Button tambah data dengan warna soft */
   .btn-add-data {
      background: linear-gradient(135deg, #26c6da 0%, #00acc1 100%);
      border: none;
      color: white;
      padding: 12px 30px;
      border-radius: 25px;
      font-weight: 600;
      box-shadow: 0 4px 15px rgba(38, 198, 218, 0.3);
      transition: all 0.3s ease;
   }

   .btn-add-data:hover {
      transform: translateY(-3px);
      box-shadow: 0 6px 20px rgba(38, 198, 218, 0.5);
      color: white;
   }

   /* Search input styling */
   .search-input {
      border: 2px solid #b2ebf2;
      border-radius: 25px;
      padding: 12px 20px;
      transition: all 0.3s ease;
   }

   .search-input:focus {
      border-color: #26c6da;
      box-shadow: 0 0 0 0.2rem rgba(38, 198, 218, 0.25);
      transform: translateY(-2px);
   }

   /* Button action styling - DIPERJELAS */
   .btn-action-group {
      display: flex;
      gap: 8px;
   }

   /* Button Detail - BIRU */
   .btn-detail {
      background: linear-gradient(135deg, #42a5f5 0%, #1e88e5 100%);
      border: none;
      color: white;
      padding: 10px 20px;
      border-radius: 10px;
      font-weight: 600;
      transition: all 0.3s ease;
      box-shadow: 0 3px 10px rgba(66, 165, 245, 0.3);
   }

   .btn-detail:hover {
      transform: translateY(-3px);
      box-shadow: 0 5px 15px rgba(66, 165, 245, 0.5);
      color: white;
   }

   /* Button Edit - KUNING */
   .btn-edit {
      background: linear-gradient(135deg, #ffca28 0%, #ffa000 100%);
      border: none;
      color: white;
      padding: 10px 20px;
      border-radius: 10px;
      font-weight: 600;
      transition: all 0.3s ease;
      box-shadow: 0 3px 10px rgba(255, 202, 40, 0.3);
   }

   .btn-edit:hover {
      transform: translateY(-3px);
      box-shadow: 0 5px 15px rgba(255, 202, 40, 0.5);
      color: white;
   }

   /* Button Hapus - MERAH */
   .btn-hapus {
      background: linear-gradient(135deg, #ef5350 0%, #d32f2f 100%);
      border: none;
      color: white;
      padding: 10px 20px;
      border-radius: 10px;
      font-weight: 600;
      transition: all 0.3s ease;
      box-shadow: 0 3px 10px rgba(239, 83, 80, 0.3);
   }

   .btn-hapus:hover {
      transform: translateY(-3px);
      box-shadow: 0 5px 15px rgba(239, 83, 80, 0.5);
      color: white;
   }

   /* Alert styling soft */
   .alert-success {
      background: linear-gradient(135deg, #a5d6a7 0%, #81c784 100%);
      border: none;
      color: white;
      border-radius: 15px;
   }

   /* Responsive */
   @media (max-width: 768px) {
      .btn-action-group {
         flex-direction: column;
         width: 100%;
      }

      .btn-detail,
      .btn-edit,
      .btn-hapus {
         width: 100%;
         margin-bottom: 5px;
      }
   }
</style>

<div class="data-container">
   <div class="container">

      <?php if ($this->session->flashdata('flash')) : ?>
         <div class="alert alert-success alert-dismissible fade show" role="alert">
            ✅ <?= $this->session->flashdata('flash'); ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
         </div>
      <?php endif; ?>

      <div class="row mt-4 mb-4">
         <div class="col-md-6 mb-3">
            <a href="<?= base_url(); ?>mahasiswa/tambah" class="btn btn-add-data btn-lg">
               <i class="bi bi-plus-circle me-2"></i>➕ Tambah Data Pelanggan
            </a>
         </div>
         <div class="col-md-6">
            <input type="text" id="searchInput" class="form-control form-control-lg search-input" placeholder="🔍 Cari data pelanggan...">
         </div>
      </div>

      <div class="main-card">
         <div class="card-header-custom">
            <h4 class="mb-0"><i class="bi bi-list-check me-2"></i>🧺 Transaksi Laundry Asrama Kampus</h4>
         </div>
         <div class="card-body p-0">
            <div class="list-group list-group-flush">
               <?php foreach ($mahasiswa as $mhs) : ?>
                  <div class="list-group-item">
                     <div class="d-flex w-100 justify-content-between align-items-start flex-wrap">
                        <div class="flex-grow-1 mb-3">
                           <div class="d-flex align-items-center mb-2">
                              <div class="avatar-circle me-3">
                                 <?= strtoupper(substr($mhs['nama_mahasiswa'], 0, 1)); ?>
                              </div>
                              <div>
                                 <h5 class="mb-1 fw-bold"><?= $mhs['nama_mahasiswa']; ?></h5>
                                 <p class="mb-0 text-muted small">
                                    <i class="bi bi-person-badge"></i> NIM: <?= $mhs['nim']; ?> |
                                    <i class="bi bi-house-door"></i> Kamar: <?= $mhs['kamar']; ?>
                                 </p>
                              </div>
                           </div>

                           <div class="ms-5 ps-3">
                              <div class="row g-2">
                                 <div class="col-md-4 col-6">
                                    <small class="text-muted d-block">
                                       <i class="bi bi-telephone"></i> No. HP
                                    </small>
                                    <span class="fw-semibold"><?= $mhs['no_hp']; ?></span>
                                 </div>
                                 <div class="col-md-4 col-6">
                                    <small class="text-muted d-block">
                                       <i class="bi bi-basket"></i> Jenis Layanan
                                    </small>
                                    <span class="fw-semibold"><?= $mhs['jenis_layanan']; ?></span>
                                 </div>
                                 <div class="col-md-4 col-6">
                                    <small class="text-muted d-block">
                                       <i class="bi bi-weight"></i> Berat
                                    </small>
                                    <span class="fw-semibold"><?= $mhs['berat_kg']; ?> kg</span>
                                 </div>
                              </div>

                              <div class="mt-2">
                                 <small class="text-muted">
                                    <i class="bi bi-credit-card"></i> Pembayaran:
                                    <span class="fw-semibold"><?= $mhs['metode_pembayaran']; ?></span>
                                 </small>
                              </div>
                           </div>
                        </div>

                        <div class="text-end ms-3">
                           <?php if ($mhs['status'] == 'Diambil') : ?>
                              <span class="badge bg-success fs-6 px-3 py-2 mb-3">
                                 <i class="bi bi-check-circle-fill"></i> ✅ Diambil
                              </span>
                           <?php elseif ($mhs['status'] == 'Proses') : ?>
                              <span class="badge bg-warning text-dark fs-6 px-3 py-2 mb-3">
                                 <i class="bi bi-hourglass-split"></i> ⏳ Proses
                              </span>
                           <?php elseif ($mhs['status'] == 'Selesai') : ?>
                              <span class="badge bg-info text-dark fs-6 px-3 py-2 mb-3">
                                 <i class="bi bi-check-all"></i> ✔️ Selesai
                              </span>
                           <?php else : ?>
                              <span class="badge bg-secondary fs-6 px-3 py-2 mb-3">
                                 <?= $mhs['status']; ?>
                              </span>
                           <?php endif; ?>

                           <div class="btn-action-group">
                              <!-- Button Detail - BIRU -->
                              <a href="<?= base_url('mahasiswa/detail/' . $mhs['id_transaksi']); ?>"
                                 class="btn btn-detail"
                                 title="Lihat Detail">
                                 👁️ Detail
                              </a>

                              <!-- Button Edit - KUNING -->
                              <a href="<?= base_url('mahasiswa/edit/' . $mhs['id_transaksi']); ?>"
                                 class="btn btn-edit"
                                 title="Edit Data">
                                 ✏️ Edit
                              </a>

                              <!-- Button Hapus - MERAH -->
                              <a href="<?= base_url('mahasiswa/hapus/' . $mhs['id_transaksi']); ?>"
                                 class="btn btn-hapus"
                                 title="Hapus Data"
                                 onclick="return confirm('❌ Yakin mau hapus data ini?');">
                                 🗑️ Hapus
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               <?php endforeach; ?>
            </div>
         </div>
      </div>

   </div>
</div>

<script>
   // Search functionality
   document.getElementById('searchInput').addEventListener('keyup', function() {
      let filter = this.value.toUpperCase();
      let items = document.querySelectorAll('.list-group-item');

      items.forEach(function(item) {
         let text = item.textContent || item.innerText;
         if (text.toUpperCase().indexOf(filter) > -1) {
            item.style.display = '';
         } else {
            item.style.display = 'none';
         }
      });
   });
</script>