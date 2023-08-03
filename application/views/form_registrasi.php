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
    .required-label {
      color: red;
      font-size: 12px;
      margin-left: 4px;
    }
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
  <h2>Form Registrasi Anak</h2>
  <form action="<?= base_url('home/form_registrasi')?>" method="POST">
    <div class="form-group">
      <label for="namaAnak">Nama Anak:</label>
      <input type="text" id="namaAnak" name="namaAnak" required>
    </div>
    
    <div class="form-group">
      <label for="usiaAnak">Usia Anak:</label>
      <input type="text" id="usia" name="usia" maxlength="8" required>
    </div>
    
    <div class="form-group">
      <label for="tanggalKelas">Pilih Tanggal Kelas:</label>
      <label class="required-label">* Hanya tersedia di hari sabtu & minggu.</label>
      <input type="date" id="tanggalKelas" name="tanggalKelas" required>
    </div>
    <div class="form-group">
      <label for="noWa">No WhatsApp:</label>
      <input type="number" id="noWa" name="noWa" required>
    </div>
    <div class="form-group">
      <label for="emai">Email:</label>
      <input type="text" id="email" name="email" required>
    </div>

    <div class="form-group">
      <label for="usiaKelas">Usia Anak (Baby/Toddler):</label>
      <label class="required-label">* Bagi anak berusia 1 tahun belum bisa berjalan maka akan join di kelas baby</label>
      <input type="checkbox" id="usiaKelas1" name="usiaKelas" value="Baby"> Baby (6 - 12 Month) <br>
      <input type="checkbox" id="usiaKelas2" name="usiaKelas" value="Toddler"> Toddler (1 - 3 Year) <br>
    </div>

    <div class="form-group">
      <label for="lokasiKelas">Lokasi Kelas:</label>
      <select id="lokasiKelas" name="lokasiKelas" required>
        <option value="Rawa Mangun">Rawa Mangun</option>
        <option value="JGC">JGC</option>
        <option value="Duren Sawit">Duren Sawit</option>
        <option value="Bekasi">Bekasi</option>
      </select>
    </div>

    <div class="form-group">
      <label>Apakah anak sedang atau pernah menjalani terapi tumbuh kembang? (Ya/Tidak):</label>
      <input type="radio" name="pertanyaan1" value="Iya" required> Iya
      <input type="radio" name="pertanyaan1" value="Tidak" required>Tidak
      <input type="text" name="q1_ex" id="q1_ex" placeholder="Kalau iya, Sebutkan diagnosa..">
    </div>

    <div class="form-group">
      <label>Apakah anak memiliki alergi? (Ya/Tidak):</label>
      <input type="radio" name="pertanyaan2" value="Iya" required>Iya
      <input type="radio" name="pertanyaan2" value="Tidak" required> Tidak
      <input type="text" name="q2_ex" id="q2_ex" placeholder="Jika Iya, Sebutkan alerginya..">
    </div>

    <div class="form-group">
      <label>Apakah anak memiliki riwayat penyakit tertentu? (Ya/Tidak):</label>
      <input type="radio" name="pertanyaan3" value="Iya" required> Iya
      <input type="radio" name="pertanyaan3" value="Tidak" required>Tidak
      <input type="text" name="q3_ex" id="q3_ex" placeholder="Jika Iya, sebutkan penyakitnya..">
    </div>

    <div class="form-group">
      <label>Apakah anak di perbolehkan di foto/video atau di post di media sosial The Kiddos? (Ya/Tidak):</label>
      <input type="radio" name="pertanyaan4" value="Iya" required> Iya
      <input type="radio" name="pertanyaan4" value="Tidak" required>Tidak
    </div>
    <div class="form-group">
      <label for="pembayaran">Metode Pembayaran:</label>
      <label class="required-label">* 4 Sesi Rp. 500.000-. Ribu</label>
      <label class="required-label">* 1x Visit Rp. 150.000-. Ribu</label>
      <select id="pembayaran" name="pembayaran" required>
        <option >-- Pilih Pembayaran --</option>
        <option value="bca">BCA - 3691159742 A/N Fenti P</option>
        
      </select>
    </div>

    <button type="submit" id="submitButton" disabled>Daftar</button>
    <a type="button" href="<?= base_url()?>" class="btn btn-primary">Kembali</a>
  </form>

  <script src="<?= base_url('asset/js/form-registrasi.js')?>">
  </script>
