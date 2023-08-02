<style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
    .gallery {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 20px;
      padding: 20px;
    }
    .gallery img {
      max-width: 100%;
      height: auto;
      border: 1px solid #ddd;
      border-radius: 5px;
      width: 100%; /* Set lebar gambar menjadi 100% */
      height: 310px; /* Set tinggi gambar sesuai keinginan */
      object-fit: cover; /* Mengatur gambar agar terisi sesuai aspek rasio */
    }
  </style>
<div class="gallery">
    <img src="<?= base_url('asset/image/galeri (1).jpg')?>" alt="Gambar 1">
    <img src="<?= base_url('asset/image/galeri (2).jpg')?>" alt="Gambar 2">
    <img src="<?= base_url('asset/image/galeri (3).jpg')?>" alt="Gambar 3">
    <img src="<?= base_url('asset/image/galeri (4).jpg')?>" alt="Gambar 4">
    <img src="<?= base_url('asset/image/galeri (5).jpg')?>" alt="Gambar 5">
    <img src="<?= base_url('asset/image/galeri (6).jpg')?>" alt="Gambar 6">
    <img src="<?= base_url('asset/image/galeri (7).jpg')?>" alt="Gambar 7">
    <img src="<?= base_url('asset/image/galeri (8).jpg')?>" alt="Gambar 8">
    <img src="<?= base_url('asset/image/galeri (9).jpg')?>" alt="Gambar 9">
    <img src="<?= base_url('asset/image/galeri (10).jpg')?>" alt="Gambar 10">
    <img src="<?= base_url('asset/image/galeri (11).jpg')?>" alt="Gambar 11">
    <img src="<?= base_url('asset/image/galeri (12).jpg')?>" alt="Gambar 12">
</div>
<center>
<a class="btn-utama" href="https://www.instagram.com/the.kiddosofc/">Mari lihat Instagram-nya yukkkk..</a>

</center>