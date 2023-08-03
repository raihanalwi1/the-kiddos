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
 
