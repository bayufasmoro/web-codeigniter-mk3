<?php defined('BASEPATH') OR exit('No direct script access allowed');
    $this->load->helper('url');
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="<? echo base_url();?>css/style.css">
    </head>
    <body>
        <div class="navbar">
            <ul>
              <li class="active"><a href="<?php echo site_url(); ?>/home">Beranda</a></li>
              <?php
                $username = $session['username'];
                if (isset($username)) {
              ?>
              <li style="float:right"><a href="<?php echo site_url(); ?>/home/logout">Keluar</a></li>
              <?php    
                } else {
              ?>
              <li style="float:right"><a href="<?php echo site_url(); ?>/register">Register</a></li>
              <li style="float:right"><a href="<?php echo site_url(); ?>/login">Masuk</a></li>
              <?php
                }
              ?>
            </ul>
        </div>
        <div>
          <center><h1>Selamat datang</h1>
          <h3>
          <?php
          $name = $session['name'];
          if ($name != "") {
            echo "Hai ".$name;
          }
          ?>
          </h3>
          </center>
        </div>
        <div class="home_div_table">
          <br>
          <br>
          <br>
          Daftar anggota :
          <br>
          <br>
          <table class="home_table">
            <tr style="background-color: #eee">
              <th>Username</th>
              <th>Email</th>
              <th>Name</th>
              <th>NIM</th>
              <th>Address</th>
              <th>City</th>
              <th>Gender</th>
              <th>Hobby</th>
              <th>Decription</th>
            </tr>
            <?php foreach($query as $row): ?>
            <tr>   
                <td><?php echo $row->username; ?></td>
                <td><?php echo $row->email; ?></td>
                <td><?php echo $row->name; ?></td>
                <td><?php echo $row->nim; ?></td>
                <td><?php echo $row->address; ?></td>
                <td><?php echo $row->city; ?></td>
                <td><?php echo $row->gender; ?></td>
                <td><?php echo $row->hobby; ?></td>
                <td><?php echo $row->desc; ?></td>
            </tr>
            <?php endforeach; ?>
          </table>
          <br>
          <a href="<?php echo site_url(); ?>/home/mypdf">Silahkan cetak menjadi pdf di sini</a>
        </div>
        <div class="footer">
          <hr>
          Bayu Febry Asmoro - 2017
        </div>
    </body>
</html>