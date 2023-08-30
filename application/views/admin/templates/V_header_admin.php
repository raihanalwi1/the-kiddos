<!DOCTYPE html>
<html>

<head>
  <title><?= $title; ?></title>
  <link rel="icon" href="<?= base_url('asset/image/logo.jpg')?>" type="image/gif">
  <script src="https://cdn.tiny.cloud/1/htxbljzeh2xolq17uq0bfreiveo1l2gng3wungtepmg6gbb4/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
  
  <style>
    body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

.container {
  max-width: 800px;
  margin: 0 auto;
  padding: 20px;
}

h1 {
  color: #007bff;
  text-align: center;
}

.menu {
  margin-top: 20px;
  background-color: #f5f5f5;
  border: 1px solid #ddd;
  border-radius: 5px;
}

.menu ul {
  list-style: none;
  padding: 0;
  margin: 0;
  display: flex;
  justify-content: space-around;
}

.menu li {
  display: inline-block;
  padding: 10px 20px;
}

.menu li a {
  text-decoration: none;
  color: #333;
}

.menu li a:hover {
  background-color: #007bff;
  color: #fff;
}

.content {
  margin-top: 20px;
  background-color: #fff;
  border: 1px solid #ddd;
  border-radius: 5px;
  padding: 20px;
}

  </style>
</head>

<body>
<div class="container">
    <h1>Selamat Datang, Admin</h1>
    <div class="menu">
      <ul>
        <li><a href="<?= base_url('admin') ?>">Beranda</a></li>
        <!-- <li><a href="<?= base_url('admin/banner') ?>">Banner</a></li> -->
        <li><a href="<?= base_url('admin/data_review') ?>">Review</a></li>
        <li><a href="<?= base_url('admin/data_jadwal') ?>">Data Jadwal</a></li>
        <li><a href="<?= base_url('admin/data_anak') ?>">Data Register Anak Sensory</a></li>
        <li><a href="<?= base_url('admin/data_anak_program') ?>">Data Register Anak Program</a></li>
        <li><a href="<?= base_url('auth/logout') ?>">Keluar</a></li>
      </ul>
    </div>