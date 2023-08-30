<style>
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
    button[type="submit"] {
      background-color: #007bff;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 4px;
      cursor: pointer;
    }
    textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 14px;
        resize: vertical; /* Memungkinkan pengguna mengubah tinggi textarea */
    }
    input[type="date"] {
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 14px;
    }
    input[type="file"] {
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 14px;
        background-color: #f7f7f7;
    }
    
</style>
<div class="content">
    
    <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Data Jadwal</h4>
                        </div>
                        <div class="card-body">
                            <form action="<?= base_url('admin/update_jadwal/'.$jadwal->id_jadwal);?>" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="judul_jadwal">Judul Jadwal</label>
                                    <input type="hidden" class="form-control" id="id_jadwal" name="id_jadwal" value="<?= $jadwal->id_jadwal ?>" required>
                                    <input type="text" class="form-control" id="judul_jadwal" name="judul_jadwal" value="<?= $jadwal->judul_jadwal ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="tanggal">Tanggal</label>
                                    <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?= $jadwal->tanggal ?>">
                                </div>
                                <div class="form-group">
                                    <label for="kategori_jadwal">Kategori Jadwal</label>
                                    <select id="kategori_jadwal" name="kategori_jadwal" required>
                                        <option value="bulanan" <?php echo ($jadwal->kategori_jadwal == 'bulanan') ? 'selected' : ''; ?>>Bulanan</option>
                                        <option value="event" <?php echo ($jadwal->kategori_jadwal == 'event') ? 'selected' : ''; ?>>Event</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="keterangan">Keterangan</label>
                                    <textarea id="keterangan" name="keterangan"><?php echo $jadwal->keterangan; ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="gambar_jadwal">Gambar Jadwal</label>
                                    <input type="file" class="form-control-file" id="gambar_jadwal" name="gambar_jadwal" accept="image/*">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="<?= base_url('admin/data_jadwal')?>" class="btn btn-back">Kembali</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>