<div class="container">
    <h1>Detail Data Registrasi Anak</h1>
    <div class="user-details">
      <div class="field">
        <span class="label">Nama:</span>
        <span class="value"><?= $record->nama_anak?></span>
      </div>
      <div class="field">
        <span class="label">Usia:</span>
        <span class="value"><?= $record->usia?></span>
      </div>
      <div class="field">
        <span class="label">Tanggal Kelas:</span>
        <span class="value"><?= $record->tanggal_kelas?></span>
      </div>
      <div class="field">
        <span class="label">Lokasi Kelas:</span>
        <span class="value"><?= $record->lokasi_kelas?></span>
      </div>
      <div class="field">
        <span class="label">Pertanyaan 1:</span>
        <span class="value"><?= $record->q1?></span>
      </div>
      <div class="field">
        <span class="label">Pertanyaan 2:</span>
        <span class="value"><?= $record->q2?></span>
      </div>
      <div class="field">
        <span class="label">Pertanyaan 3:</span>
        <span class="value"><?= $record->q3?></span>
      </div>
      <div class="field">
        <span class="label">Pertanyaan 4:</span>
        <span class="value"><?= $record->q4?></span>
      </div>
    </div>
    <a href="<?= base_url('admin/data_anak')?>" class="back-link">Kembali</a>
  </div>