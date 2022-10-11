<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Tambah data mahasiswa UIN STS JAMBI</title>
    <style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: salmon;
      }
    button {
          background-color: salmon;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
          border: 0px;
          margin-top: 20px;
    }
    label {
      margin-top: 10px;
      float: left;
      text-align: left;
      width: 100%;
    }
    input {
      padding: 6px;
      width: 100%;
      box-sizing: border-box;
      background: #f8f8f8;
      border: 2px solid #ccc;
      outline-color: salmon;
    }
    div {
      width: 100%;
      height: auto;
    }
    .base {
      width: 400px;
      height: auto;
      padding: 20px;
      margin-left: auto;
      margin-right: auto;
      background: #ededed;
    }
    </style>
  </head>
  <body>
      <center>
        <h1>Tambah data</h1>
      <center>
      <form method="POST" action="proses_tambah.php" enctype="multipart/form-data" >
      <section class="base">
        <div>
          <label>NIM</label>
          <input type="text" name="NIM" autofocus="" required="" />
        </div>
        <div>
          <label>nama</label>
         <input type="text" name="nama" />
        </div>
        <div>
          <label>email</label>
         <input type="text" name="email" required="" />
        </div>
        <div>
          <label>jurusan</label>
         <input type="text" name="jurusan" required="" />
        </div>
        <div>
          <label>fakultas</label>
         <input type="file" name="fakultas" required="" />
        </div>
        <div>
        <label>gambar produk</label>
         <input type="file" name="gambar" required="" />
        </div>
        <div>
         <button type="submit">Simpan data</button>
        </div>
        </section>
      </form>
  </body>
</html>