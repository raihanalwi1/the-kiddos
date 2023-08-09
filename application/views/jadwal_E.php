<style>
    .schedule {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

.day {
  flex-basis: calc(33.33% - 20px);
  background-color: #fff;
  border-radius: 5px;
  box-shadow: 0 6px 4px rgba(0, 0, 0, 0.1);
  padding: 20px;
  margin: 10px 0;
}

h2 {
  font-size: 20px;
  margin-bottom: 10px;
}

ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

li {
  margin-bottom: 5px;
}

@media screen and (max-width: 768px) {
  .day {
    flex-basis: calc(50% - 20px);
  }
}
</style>

<div class="container">
    <center>
    <h3> Schedule <?php echo date('F'); ?></h3>
    </center>
    <div class="schedule">
    <?php foreach($record as $row):?>

      <div class="day">
        <h2><?= $row->judul_jadwal?></h2>
        <ul>
          <li><img src="<?= base_url('asset/image/jadwal/'.$row->gambar_jadwal)?>" alt=""></li>
          <li><?= $row->tanggal?></li>
          <li><?= $row->keterangan?></li>
        </ul>
      </div>
    <?php endforeach;?>
    
      <!-- Add more days and courses as needed -->
    </div>
  </div>




