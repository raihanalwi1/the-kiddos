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
                            <h4>Tambah Data Review</h4>
                        </div>
                        <div class="card-body">
                            <form action="<?= base_url('admin/tambah_review')?>" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="nama review">nama review</label>
                                    <input type="text" class="form-control" id="nama_review" name="nama_review" required>
                                </div>
                                
                                <div class="form-group">
                                    <label for="rating">Rating</label>
                                    <input type="number" class="form-control" id="rating" name="rating" min="1" max="5" required>
                                </div>
                                <div class="form-group">
                                    <label for="Comment">Comment</label>
                                    <textarea id="comment" name="comment"></textarea>
                                </div>
                               
                                <button type="submit" class="btn btn-primary">Tambah Review</button>
                                <a href="<?= base_url('admin/data_review')?>" class="btn btn-back">Kembali</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>