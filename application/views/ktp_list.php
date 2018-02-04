<?php defined('BASEPATH') OR exit('No direct script access allowed');
    $this->load->helper('url');
?>

<!DOCTYPE html>
<html>
  <head>
      <link rel="stylesheet" type="text/css" href="<? echo base_url();?>css/style.css">
  </head>
  <body>
    <div class="member_div_table">
      <br><br><br>
      <div>
        <span>Daftar KTP :</span>
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
          </tr>
        <?php } ?>
      </table>
      <br>
    </div>
  </body>
</html>