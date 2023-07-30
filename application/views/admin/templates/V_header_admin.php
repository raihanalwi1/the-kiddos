<!DOCTYPE html>
<html>

<head>
  <title><?= $title; ?></title>
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
        <li><a href="<?= base_url('admin/data_anak') ?>">Data Register Anak</a></li>
        <li><a href="<?= base_url('auth/logout') ?>">Keluar</a></li>
      </ul>
    </div>