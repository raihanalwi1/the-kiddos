<style>
  .user-details {
  background-color: #f5f5f5;
  border: 1px solid #ddd;
  border-radius: 5px;
  padding: 20px;
  margin-top: 20px;
}

.field {
  margin-bottom: 10px;
}

.label {
  font-weight: bold;
}

.value {
  margin-left: 10px;
}

.back-link {
  display: block;
  text-align: center;
  margin-top: 20px;
  color: #007bff;
  text-decoration: none;
}

.back-link:hover {
  text-decoration: underline;
}
</style>
<div class="container">
    <h2>Detail Data Registrasi Anak</h2>
    
    <div class="user-details">

    <div class="field">
        <span class="label">Tanggal Registrasi:</span>
        <span class="value"><?= $record->tanggal_registrasi?></span>
      </div>
      <div class="field">
        <span class="label">Nama Lengkap:</span>
        <span class="value"><?= $record->nama_lengkap?></span>
      </div>
      <div class="field">
        <span class="label">Nama Panggilan:</span>
        <span class="value"><?= $record->nama_panggilan?></span>
      </div>
      <div class="field">
        <span class="label">Kelas:</span>
        <span class="value"><?= $record->kelas?></span>
      </div>
      <div class="field">
        <span class="label">Email:</span>
        <span class="value"><?= $record->alamat_email?></span>
      </div>
      <div class="field">
        <span class="label">Tempat Tanggal Lahir:</span>
        <span class="value"><?= $record->tempat_lahir?>, <?= $record->tanggal_lahir?></span>
      </div>
      
      <div class="field">
        <span class="label">Jadwal:</span>
        <span class="value"><?= $record->jadwal?></span>
      </div>
      <div class="field">
        <span class="label">Nama Orang Tua:</span><br/>
        <span class="value">Ayah :<?= $record->nama_ayah?></span><br/>
        <span class="value">Ibu :<?= $record->nama_ibu?></span>
      </div>
      <div class="field">
        <span class="label">No HP:</span>
        <span class="value"><?= $record->no_hp?></span>
      </div>
      <div class="field">
        <span class="label">Kontak darurat:</span>
        <span class="value"><?= $record->kontak_darurat?></span>
      </div>
      <div class="field">
        <span class="label">Size Baju:</span>
        <span class="value"><?= $record->size_baju?></span>
      </div>
      <div class="field">
        <span class="label">Lokasi Kelas:</span>
        <span class="value"><?= $record->lokasi_kelas?></span>
      </div>
      <div class="field">
        <span class="label">Apakah anak sedang menjalankan terapi:</span>
        <span class="value"><?= $record->q1?>, <?= $record->q1_ex?></span>
      </div>
      <div class="field">
        <span class="label">Riwayat Penyakit:</span>
        <span class="value"><?= $record->q2?>, <?= $record->q2_ex?></span>
      </div>
      <div class="field">
        <span class="label">Riwayat Alergi:</span>
        <span class="value"><?= $record->q3?>, <?= $record->q3_ex?></span>
      </div>
      <div class="field">
        <span class="label">Apakah anak di izinkan untuk di foto, video dan di publish di media sosial:</span>
        <span class="value"><?= $record->q4?></span>
      </div>
      
    </div>
    <a href="<?= base_url('admin/data_anak_program')?>" class="back-link">Kembali</a>
  </div>
  