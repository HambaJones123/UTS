<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.5.0"></script>
</head>
<body>
  <nav class="navbar navbar-expand-sm bg-success navbar-dark">
    <div class="container-fluid">
      <ul class="navbar-nav">
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
<div class = "container">
    <div id = "isi">
    </div>
</div>
<script>
    $("#isi").load("dashboard.php");
    $(document).ready(function(){
        $("#dashboard").on("click",function(){
            $("#isi").load("dashboard.php");
        });
        $("#penjualan").on("click",function(){
            $("#isi").load("penjualan.php");
        });
        $("#pembelian").on("click",function(){
            $("#isi").load("pembelian.php");
        });
    });
</script>
</body>
</html>
<?php

?>