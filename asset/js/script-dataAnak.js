// Ambil elemen input dan tombol cari
const searchInput = document.getElementById('searchInput');
const searchButton = document.getElementById('searchButton');


// Fungsi untuk melakukan pencarian
function search() {
  const keyword = searchInput.value.toLowerCase();
  const rows = document.querySelectorAll('tbody tr');

  // Loop melalui semua baris data pada tabel
  for (let i = 0; i < rows.length; i++) {
    const namaAnak = rows[i].querySelector('td:nth-child(2)').innerText.toLowerCase(); // Kolom dengan nama anak

    // Ubah visibilitas baris berdasarkan apakah nama anak cocok dengan keyword pencarian
    if (namaAnak.includes(keyword)) {
      rows[i].style.display = 'table-row'; // Tampilkan baris
    } else {
      rows[i].style.display = 'none'; // Sembunyikan baris
    }
  }
  paginateData();
}

// Tambahkan event listener untuk saat tombol cari diklik
searchButton.addEventListener('click', search);

// Tambahkan event listener untuk saat tombol "Enter" ditekan pada input pencarian
searchInput.addEventListener('keypress', function(event) {
  if (event.key === 'Enter') {
    search();
  }
});

// Fungsi untuk melakukan refresh otomatis setiap 5 detik
function autoRefresh() {
const keyword = searchInput.value.toLowerCase();
  if (!keyword) {
    location.reload();
  }
}

// Set interval untuk melakukan refresh otomatis setiap 5 detik (5000ms)
setInterval(autoRefresh, 5000);

const dataBody = document.getElementById('dataBody');
const paginationContainer = document.getElementById('pagination');
// Fungsi untuk membagi data menjadi halaman-halaman
function paginateData() {
    const rows = dataBody.querySelectorAll('tbody tr');
    const pageSize = 6; // Jumlah data per halaman
    const pageCount = Math.ceil(rows.length / pageSize); // Jumlah halaman

    // Dapatkan nomor halaman yang sedang aktif (default halaman 1)
    let activePage = 1;
    const urlParams = new URLSearchParams(window.location.search);
    const pageParam = urlParams.get('page');
    if (pageParam) {
      activePage = parseInt(pageParam);
    }

    // Hapus semua data dari tbody
    dataBody.innerHTML = '';

    // Tampilkan data untuk halaman yang sedang aktif
    const startIdx = (activePage - 1) * pageSize;
    const endIdx = Math.min(startIdx + pageSize, rows.length);
    for (let i = startIdx; i < endIdx; i++) {
      dataBody.appendChild(rows[i]);
    }

    // Tampilkan link halaman di paginationContainer
    let paginationHtml = '';
    for (let i = 1; i <= pageCount; i++) {
      paginationHtml += `<a href="?page=${i}">${i}</a> `;
    }
    paginationContainer.innerHTML = paginationHtml;
  }

  // Panggil fungsi paginateData saat halaman pertama kali dimuat
  paginateData();