<style>
 

    h2 {
      color: #333;
      text-align: center;
    }

    form {
      max-width: 80%;
      margin: 0 auto;
      background-color: #DCDCDC;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    label {
      display: block;
      margin-bottom: 5px;
      color: #333;
      font-weight: bold;
      font-size: 20px;
    }

    input[type="text"],
    input[type="number"],
    input[type="email"],
    select {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      margin-bottom: 10px;
    }

    select {
      height: 45px;
    }

    input[type="radio"] {
      margin-right: 5px;
    }
    input[type="date"] {
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 14px;
    }
    input[type="file"] {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 14px;
        background-color: #f7f7f7;
    }
    .required-label {
      color: red;
      font-size: 12px;
      margin-left: 4px;
    }
    label.required:after { content: '*';color:red; }
    button[type="submit"] {
      background-color: #007bff;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 4px;
      cursor: pointer;
    }

    button[type="submit"]:hover {
      background-color: #0056b3;
    }

    button[type="submit"]:disabled {
      background-color: #ccc;
      cursor: not-allowed;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group:last-child {
      margin-bottom: 0;
    }
  </style>
  
  <hr>
  <h2>Form Registrasi Anak Program</h2>
  <?= $this->session->flashdata('pesan'); ?>

  <form action="<?= base_url('home/form_registrasi_program')?>" method="POST" enctype="multipart/form-data">
    
  <div class="form-group">
    <label for="nama_lengkap" class="required">Nama Lengkap</label>
    <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required>
  </div>

  <div class="form-group">
    <label for="nama_panggilan" class="required">Nama Panggilan</label>
    <input type="text" class="form-control" id="nama_panggilan" name="nama_panggilan" required>
  </div>

  <div class="form-group">
    <label for="kelas" class="required">Kelas</label>
    <select class="form-control" id="kelas" name="kelas" required>
      <option readonly>-- Pilih Kelas --</option>
      <option value="weekday">Weekday</option>
      <option value="weekend">Weekend</option>
    </select>
  </div>

  <div class="form-group">
    <label for="tempat_lahir" class="required">Tempat Lahir</label>
    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required>
  </div>

  <div class="form-group">
    <label for="tanggal_lahir" class="required">Tanggal Lahir</label>
    <input type="date" id="tanggal_lahir" name="tanggal_lahir" required>
  </div>

  <div class="form-group">
    <label for="kategori_kelas" class="required">Kategori Kelas</label>
    <select class="form-control" id="kategori_kelas" name="kategori_kelas" required>
      <option readonly>-- Pilih Kategori Kelas --</option>
      <option value="pre_toddler">Pre-Toddler</option>
      <option value="toddler">Toddler</option>
      <option value="kinder">Kinder</option>
    </select>
  </div>

  <div class="form-group">
    <label for="jadwal" class="required">Jadwal</label>
    <input type="checkbox" id="jadwal_senin" name="jadwal[]" value="senin"> Senin
    <input type="checkbox" id="jadwal_selasa" name="jadwal[]" value="selasa"> Selasa
    <input type="checkbox" id="jadwal_rabu" name="jadwal[]" value="rabu"> Rabu
    <input type="checkbox" id="jadwal_kamis" name="jadwal[]" value="kamis"> Kamis
    <input type="checkbox" id="jadwal_jumat" name="jadwal[]" value="jumat"> Jumat
    <input type="checkbox" id="jadwal_sabtu" name="jadwal[]" value="sabtu"> Sabtu
    <input type="checkbox" id="jadwal_minggu" name="jadwal[]" value="minggu"> Minggu

  </div>

  <div class="form-group">
    <label for="nama_ayah">Nama Ayah</label>
    <input type="text" class="form-control" id="nama_ayah" name="nama_ayah">
  </div>

  <div class="form-group">
    <label for="nama_ibu">Nama Ibu</label>
    <input type="text" class="form-control" id="nama_ibu" name="nama_ibu">
  </div>

  <div class="form-group">
    <label for="no_hp" class="required">Nomor HP</label>
    <input type="number" class="form-control" id="no_hp" name="no_hp" required>
  </div>

  <div class="form-group">
    <label for="kontak_darurat">Kontak Darurat</label>
    <input type="number" class="form-control" id="kontak_darurat" name="kontak_darurat">
  </div>

  <div class="form-group">
    <label for="alamat_email" class="required">Alamat Email</label>
    <input type="email" class="form-control" id="alamat_email" name="alamat_email" required>
  </div>
  <div class="form-group">
    <label for="size" class="required">Size Baju</label>
    <select class="form-control" id="size_baju" name="size_baju" required>
      <option readonly>-- Pilih Size Baju --</option>
      <option value="S">S</option>
      <option value="M">M</option>
      <option value="L">L</option>
      <option value="XL">XL</option>
    </select>
  </div>
  <div class="form-group">
    <label for="Lokasi_kelas" class="required">Lokasi Kelas</label>
    <input type="checkbox" id="lokasi_kelas" name="lokasi_kelas" value="Jakarta Garden City"> Jakarta Garden City
    <input type="checkbox" id="lokasi_kelas" name="lokasi_kelas" value="Masalalu Duren Sawit"> Masalalu Duren Sawit
    <input type="checkbox" id="lokasi_kelas" name="lokasi_kelas" value="Bekasi"> Bekasi
  </div>
  <div class="form-group">
      <label class="required">Apakah anak sedang menjalankan terapi? (Ya/Tidak):</label>
      <input type="radio" name="pertanyaan1" value="Iya" required> Iya
      <input type="radio" name="pertanyaan1" value="Tidak" required>Tidak
      <input type="text" name="q1_ex" id="q1_ex" placeholder="Kalau iya, Sebutkan diagnosa..">
    </div>

    <div class="form-group">
      <label class="required">Riwayat Penyakit? (Ya/Tidak):</label>
      <input type="radio" name="pertanyaan2" value="Iya" required>Iya
      <input type="radio" name="pertanyaan2" value="Tidak" required> Tidak
      <input type="text" name="q2_ex" id="q2_ex" placeholder="Jika Iya, Sebutkan penyakit..">
    </div>

    <div class="form-group">
      <label class="required">Riwayat Alergi? (Ya/Tidak):</label>
      <input type="radio" name="pertanyaan3" value="Iya" required> Iya
      <input type="radio" name="pertanyaan3" value="Tidak" required>Tidak
      <input type="text" name="q3_ex" id="q3_ex" placeholder="Jika Iya, sebutkan alergi..">
    </div>

    <div class="form-group">
      <label class="required">Apakah anak di izinkan untuk di foto, video dan di publish di media sosial? (Ya/Tidak):</label>
      <input type="radio" name="pertanyaan4" value="Iya" required> Iya
      <input type="radio" name="pertanyaan4" value="Tidak" required>Tidak
    </div>
    <button type="submit" id="submitButton">Daftar</button>
    <a type="button" href="<?= base_url()?>" class="btn btn-primary">Kembali</a>
  </form>
  

  <script src="<?= base_url('asset/js/form-registrasi.js')?>">
  </script>
