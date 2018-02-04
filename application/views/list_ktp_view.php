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
            <li><a href="<?php echo site_url(); ?>/home">BERANDA</a></li>
            <li class="active"><a href="<?php echo site_url(); ?>/ktp">Data KTP</a></li>
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
      <div class="member_div_table">
        <br><br><br>
        <div>
          <span>Daftar KTP :</span>
          <span style="float: right"><a href="<?php echo site_url(); ?>/ktp/add"> <input type="submit" value="+ Tambah KTP" class="border_button border_button_blue"> </a></span>
        </div>
        <br><br>
        <table class="member_table" style="width: 100%">
          <tr style="background-color: #eee">
            <th>NIK</th>
            <th>Jenis Kelamin</th>
            <th>Nama</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Kecamatan</th>
            <th>Berlaku Hingga</th>
            <th>Aksi</th>
          </tr>
          <?php foreach($ktp as $k){ ?>
            <tr>
            <td><?php echo $k['nik']; ?></td>
            <td><?php echo $k['jenis_kelamin']; ?></td>
            <td><?php echo $k['nama']; ?></td>
            <td><?php echo $k['tempat_lahir']; ?></td>
            <td><?php echo $k['tanggal_lahir']; ?></td>
            <td><?php echo $k['kecamatan']; ?></td>
            <td><?php echo $k['berlaku_hingga']; ?></td>
            <td>
              <center>
                <a href="<?php echo site_url('ktp/show/'.$k['nik']); ?>" style="text-decoration: none">
                  <button class="border_button border_button_gray">
                    <img height="15px" width="15px" src="<?php echo base_url('assets/icon/IconZoom.png'); ?>"></img>
                  </button>
                </a>
                <a href="<?php echo site_url('ktp/edit/'.$k['nik']); ?>" style="text-decoration: none">
                  <button class="border_button border_button_gray">
                    <img height="15px" width="15px" src="<?php echo base_url('assets/icon/IconPencil.png'); ?>"></img>
                  </button>
                </a>
                <a href="<?php echo site_url('ktp/remove/'.$k['nik']); ?>" style="text-decoration: none">
                  <button class="border_button border_button_gray">
                    <img height="15px" width="15px" src="<?php echo base_url('assets/icon/IconTrash.png'); ?>"></img>
                  </button>
                </a>
              </center>
            </td>
            </tr>
          <?php } ?>
        </table>
        <br>
        <!-- Print to pdf -->
        <a href="<?php echo site_url(); ?>/ktp/mypdf"> <input type="submit" value="Print to PDF" class="print_button"> </a>
      </div>
      <div class="footer">
        <hr>
        &copy; 2017 Bayu Febry Asmoro
      </div>
    </div>
  </body>
</html>