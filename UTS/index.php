<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>POS 24410100063</title>
  <link href="bootstrap.min.css" rel="stylesheet">
  <script src="bootstrap.bundle.min.js"></script>
  <script src="jquery-4.0.0.min.js"></script>
  <script src="chartjs.js"></script>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-success navbar-dark sticky-top shadow">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">POS 24410100063</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <button class="nav-link btn" id="dashboard">Dashboard</button>
          </li>
          <li class="nav-item">
            <button class="nav-link btn" id="penjualan">Penjualan</button>
          </li>
          <li class="nav-item">
            <button class="nav-link btn" id="pembelian">Pembelian</button>
          </li>
        </ul>
      </div>
  </nav>
  <div class="container">
    <div id="isi">
    </div>
  </div>
  <script>
    $("#isi").load("dashboard.php");
    $(document).ready(function () {
      $("#dashboard").on("click", function () {
        $("#isi").load("dashboard.php");
      });
      $("#penjualan").on("click", function () {
        $("#isi").load("penjualan.php");
      });
      $("#pembelian").on("click", function () {
        $("#isi").load("pembelian.php");
      });
    });
  </script>
</body>

</html>
<?php

?>