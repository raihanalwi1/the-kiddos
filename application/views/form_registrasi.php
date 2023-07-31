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
  <form action="<?= base_url('home/form_registrasi')?>" method="POST">
    <div class="form-group">
      <label for="namaAnak">Nama Anak:</label>
      <input type="text" id="namaAnak" name="namaAnak" required>
    </div>
    
    <div class="form-group">
      <label for="usiaAnak">Usia Anak:</label>
      <input type="number" id="usia" name="usia" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==2) return false;" required>
    </div>
    
    <div class="form-group">
      <label for="tanggalKelas">Pilih Tanggal Kelas:</label>
      <input type="date" id="tanggalKelas" name="tanggalKelas" required>
      
    </div>

    <div class="form-group">
      <label for="usiaKelas">Usia Anak (Baby/Toddler):</label>
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
      <input type="text" name="q1_ex" id="q1_ex" placeholder="Jika Iya, Jelaskan">
    </div>

    <div class="form-group">
      <label>Apakah anak memiliki alergi? (Ya/Tidak):</label>
      <input type="radio" name="pertanyaan2" value="Iya" required>Iya
      <input type="radio" name="pertanyaan2" value="Tidak" required> Tidak
      <input type="text" name="q2_ex" id="q2_ex" placeholder="Jika Iya, Jelaskan">
    </div>

    <div class="form-group">
      <label>Apakah anak memiliki riwayat penyakit tertentu? (Ya/Tidak):</label>
      <input type="radio" name="pertanyaan3" value="Iya" required> Iya
      <input type="radio" name="pertanyaan3" value="Tidak" required>Tidak
      <input type="text" name="q3_ex" id="q3_ex" placeholder="Jika Iya, Jelaskan">
    </div>

    <div class="form-group">
      <label>Apakah anak di perbolehkan di foto/video atau di post di media sosial The Kiddos? (Ya/Tidak):</label>
      <input type="radio" name="pertanyaan4" value="Iya" required> Iya
      <input type="radio" name="pertanyaan4" value="Tidak" required>Tidak
    </div>

    <button type="submit" id="submitButton" disabled>Daftar</button>
  </form>

  <script>
    
    function validateForm() {
      // Mendapatkan nilai dari setiap elemen input
      const namaAnak = document.getElementById('namaAnak').value;
      const usiaAnak = document.getElementById('usia').value;
      const tanggalKelas = document.getElementById('tanggalKelas').value;
      const usiaKelas1 = document.getElementById('usiaKelas1').checked;
      const usiaKelas2 = document.getElementById('usiaKelas2').checked;
      const lokasiKelas = document.getElementById('lokasiKelas').value;
      const pertanyaan1 = document.querySelector('input[name="pertanyaan1"]:checked');
      const pertanyaan2 = document.querySelector('input[name="pertanyaan2"]:checked');
      const pertanyaan3 = document.querySelector('input[name="pertanyaan3"]:checked');
      const pertanyaan4 = document.querySelector('input[name="pertanyaan4"]:checked');

      // Memeriksa apakah semua input telah diisi
      if (
        namaAnak.trim() === '' ||
        usiaAnak.trim() === '' ||
        tanggalKelas.trim() === '' ||
        (usiaKelas1 === false && usiaKelas2 === false) ||
        lokasiKelas.trim() === '' ||
        !pertanyaan1 || !pertanyaan2 || !pertanyaan3 || !pertanyaan4
      ) {
        return false; // Mencegah form submit jika data belum diisi lengkap
      }

      return true; // Izinkan form submit jika data telah diisi lengkap
    }

    // Event listener untuk memantau perubahan pada form
    const formInputs = document.querySelectorAll('input, select');
    formInputs.forEach(input => {
      input.addEventListener('change', function() {
        const submitButton = document.getElementById('submitButton');
        const isFormValid = validateForm();

        // Mengaktifkan atau menonaktifkan tombol "Daftar" berdasarkan validitas form
        if (isFormValid) {
          submitButton.removeAttribute('disabled');
        } else {
          submitButton.setAttribute('disabled', 'true');
        }
      });
    });
  </script>
