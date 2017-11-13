<?php defined('BASEPATH') OR exit('No direct script access allowed');
    $this->load->helper('url');
?>

<!DOCTYPE html>
<html>
  <head>
      <link rel="stylesheet" type="text/css" href="<? echo base_url();?>css/style.css">
  </head>
  <body>
    <div class="home_content">
      <div class="navbar">
          <ul>
            <li class="active"><a href="<?php echo site_url(); ?>/home">BERANDA</a></li>
            <?php
              $username = $session['username'];
              if (isset($username)) {
            ?>
            <li style="float:right"><a href="<?php echo site_url(); ?>/home/logout">KELUAR</a></li>
            <?php    
              } else {
            ?>
            <li style="float:right"><a href="<?php echo site_url(); ?>/register">REGISTER</a></li>
            <li style="float:right"><a href="<?php echo site_url(); ?>/login">MASUK</a></li>
            <?php
              }
            ?>
          </ul>
      </div>
      <div>
        <center>
        <h1>
        <?php
        $name = $session['name'];
        if ($name != "") {
          echo "Selamat Datang, ".$name;
        }
        ?>
        </h1>
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
        <!-- Silahkan cetak menjadi pdf di sini</a> -->
        <a href="<?php echo site_url(); ?>/home/mypdf"> <input type="submit" value="Print to PDF" class="print_button"> </a>
      </div>
      <div class="footer">
        <hr>
        &copy; 2017 Bayu Febry Asmoro
      </div>
    </div>
  </body>
</html>