<style>
    /* Gaya tampilan tabel */
table {
  width: 100%;
  border-collapse: collapse;
  margin-top: 20px;
}

th, td {
  border: 1px solid #ddd;
  padding: 8px;
  text-align: left;
}

th {
  background-color: #f5f5f5;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}

/* Gaya tombol dalam tabel */
button {
  background-color: #007bff;
  color: #fff;
  border: none;
  padding: 5px 10px;
  border-radius: 4px;
  cursor: pointer;
  margin-right: 5px;
}

button:hover {
  background-color: #0056b3;
}
/* Gaya elemen pencarian */
.search-container {
  margin-bottom: 10px;
}

#searchInput {
  padding: 8px;
  border: 1px solid #ddd;
  border-radius: 4px;
  margin-right: 5px;
}

#searchButton {
  background-color: #007bff;
  color: #fff;
  border: none;
  padding: 8px 12px;
  border-radius: 4px;
  cursor: pointer;
}

#searchButton:hover {
  background-color: #0056b3;
}

</style>
<div class="content">
      <h2>Data Registrasi Anak Sensory</h2>
      <?= $this->session->flashdata('pesan'); ?>
      
      <table id="datatable"class="table table-striped table-bordered" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>NO</th>
            <th>Nama Anak</th>
            <th>Tanggal Registrasi</th>
            <th style="colspan:2">Aksi</th>
          </tr>
        </thead>
        <?php $no=1;
        foreach($record as $row):?>
        <tbody id="dataBody">
          <tr>
            <td><?= $no++?></td>
            <td><?= $row->nama_anak?></td>
            <td><?= $row->tanggal_registrasi?></td>
            <td>
              <button  onclick="window.location.href='<?= base_url('admin/detail_anak/'. $row->id_registrasi)?>';">Lihat</button>
              <!-- <button  onclick="window.location.href='#';">Edit</button> -->
              <button style="background-color: red;" onclick="window.location.href='<?= base_url('admin/hapus_anak/'. $row->id_registrasi)?>';">Hapus</button>
            </td>
          </tr>
          
          <!-- Data lainnya -->
        </tbody>
        <?php endforeach;?>
        
      </table>
      <!-- <div id="pagination"> -->
      <!-- Tampilkan link halaman di sini -->
      <!-- </div> -->
      <script src="<?= base_url('asset/js/script-dataAnak.js')?>">  
      </script>
