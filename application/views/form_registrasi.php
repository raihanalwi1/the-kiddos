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
  <form action="proses_registrasi.php" method="POST">
    <div class="form-group">
      <label for="namaAnak">Nama Anak:</label>
      <input type="text" id="namaAnak" name="namaAnak" required>
    </div>
    
    <div class="form-group">
      <label for="usiaAnak">Usia Anak:</label>
      <input type="number" id="usia" name="usia" required>
    </div>
    
    <div class="form-group">
      <label for="tanggalKelas">Pilih Tanggal Kelas:</label>
      <input type="date" id="tanggalKelas" name="tanggalKelas" required>
    </div>

    <div class="form-group">
      <label for="usiaKelas">Usia Anak (Baby/Toddler):</label>
      <input type="checkbox" value="Baby"> Baby (6 - 12 Month) <br>
      <input type="checkbox" value="Toddler"> Toddler (1 - 3 Year) <br>
    </div>

    <div class="form-group">
      <label for="lokasiKelas">Lokasi Kelas:</label>
      <select id="lokasiKelas" name="lokasiKelas" required>
        <option value="rawaMangun">Rawa Mangun</option>
        <option value="JGC">JGC</option>
        <option value="durenSawit">Duren Sawit</option>
        <option value="bekasi">Bekasi</option>
      </select>
    </div>

    <div class="form-group">
      <label>Pertanyaan 1 (Ya/Tidak):</label>
      <input type="radio" name="pertanyaan1" value="Ya" required> Iya
      <input type="radio" name="pertanyaan1" value="Tidak" required>Tidak
      <input type="text" placeholder="Jika Iya, Jelaskan">
    </div>

    <div class="form-group">
      <label>Pertanyaan 2 (Ya/Tidak):</label>
      <input type="radio" name="pertanyaan2" value="Ya" required>Iya
      <input type="radio" name="pertanyaan2" value="Tidak" required> Tidak
      <input type="text" placeholder="Jika Iya, Jelaskan">
    </div>

    <div class="form-group">
      <label>Pertanyaan 3 (Ya/Tidak):</label>
      <input type="radio" name="pertanyaan3" value="Ya" required> Iya
      <input type="radio" name="pertanyaan3" value="Tidak" required>Tidak
      <input type="text" placeholder="Jika Iya, Jelaskan">
    </div>

    <div class="form-group">
      <label>Pertanyaan 4 (Ya/Tidak):</label>
      <input type="radio" name="pertanyaan4" value="Ya" required> Iya
      <input type="radio" name="pertanyaan4" value="Tidak" required>Tidak
      <input type="text" placeholder="Jika Iya, Jelaskan">
    </div>

    <button type="submit" id="submitButton" disabled>Daftar</button>
  </form>

  <script>
    
    // Mengambil elemen opsi pertama dan tombol submit berdasarkan id
    var option1 = document.getElementById("option1");
    var submitButton = document.getElementById("submitButton");

    // Menambahkan event listener pada elemen select jika opsi selain pertama dipilih
    document.getElementById("usiaKelas").addEventListener("change", function() {
      // Mengaktifkan kembali tombol submit jika opsi selain pertama dipilih
      submitButton.disabled = false;
    });
  </script>
