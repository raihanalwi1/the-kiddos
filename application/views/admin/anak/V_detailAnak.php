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
        <span class="label">Nama:</span>
        <span class="value"><?= $record->nama_anak?></span>
      </div>
      <div class="field">
        <span class="label">Usia:</span>
        <span class="value"><?= $record->usia?></span>
      </div>
      <div class="field">
        <span class="label">Usia Kelas:</span>
        <span class="value"><?= $record->usia_kelas?></span>
      </div>
      <div class="field">
        <span class="label">Tanggal Kelas:</span>
        <span class="value"><?= $record->tanggal_kelas?></span>
      </div>
      <div class="field">
        <span class="label">No WhatsApp: </span>
        <span class="value"><?= $record->no_wa?></span>
      </div>
      <div class="field">
        <span class="label">Email:</span>
        <span class="value"><?= $record->email?></span>
      </div>
      <div class="field">
        <span class="label">Lokasi Kelas:</span>
        <span class="value"><?= $record->lokasi_kelas?></span>
      </div>
      <div class="field">
        <span class="label">Apakah anak sedang atau pernah menjalani terapi tumbuh kembang?</span>
        <span class="value"><?= $record->q1?>, <?= $record->q1_ex?></span>
      </div>
      <div class="field">
        <span class="label">Apakah anak memiliki alergi?</span>
        <span class="value"><?= $record->q2?>, <?= $record->q2_ex?></span>
      </div>
      <div class="field">
        <span class="label">Apakah anak memiliki riwayat penyakit tertentu?</span>
        <span class="value"><?= $record->q3?>, <?= $record->q3_ex?></span>
      </div>
      <div class="field">
        <span class="label">Apakah anak di perbolehkan di foto/video atau di post di media sosial The Kiddos?</span>
        <span class="value"><?= $record->q4?></span>
      </div>
      <div class="field">
        <span class="label">Bukti:</span> <br/>
        <img src="<?= base_url('asset/image/bukti/'.$record->bukti) ?>" alt="bukti" style="width:53%; height:20%;">
        
      </div>
    </div>
    <a href="<?= base_url('admin/data_anak')?>" class="back-link">Kembali</a>
  </div>
  