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
            <li class="active"><a href="<?php echo site_url(); ?>/ktp/index">Data KTP</a></li>
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
      <div class="wrapper">
        <br>
        <center><font style="font-size: 18pt">Data KTP</font></center>
        <br><br>

		<?php echo form_open_multipart('ktp/edit/'.$ktp['nik']); ?>
		<table class="tableKtpShow">
			<tr>
				<td colspan="2"><center><img src="<?php echo base_url().'uploads/'.$ktp['photo']; ?>" height="150" width="auto" /></center></td>
			</tr>
			<tr>
				<td>NIK: </td>
				<td><?php echo $ktp['nik']; ?> </td>
			</tr>
			<tr>
				<td>Jenis Kelamin: </td>
				<td><?php echo $ktp['jenis_kelamin']; ?> </td>
			</tr>
			<tr>
				<td>Golongan Darah: </td>
				<td><?php echo $ktp['golongan_darah']; ?>
				</select>
				</td>
			</tr>
			<tr>
				<td>Nama: </td>
				<td><?php echo $ktp['nama']; ?></td>
			</tr>
			<tr>
				<td>Tempat Lahir: </td>
				<td><?php echo $ktp['tempat_lahir']; ?></td>
			</tr>
			<tr>
				<td>Tanggal Lahir: </td>
				<td><?php echo $ktp['tanggal_lahir']; ?></td>
			</tr>
			<tr>
				<td>Rt : </td>
				<td><?php echo $ktp['rt']; ?></td>
			</tr>
			<tr>
				<td>Rw : </td>
				<td><?php echo $ktp['rw']; ?></td>
			</tr>
			<tr>
				<td>Kelurahan : </td>
				<td><?php echo $ktp['kelurahan']; ?></td>
			</tr>
			<tr>
				<td>Kecamatan : </td>
				<td><?php echo $ktp['kecamatan']; ?></td>
			</tr>
			<tr>
				<td>Agama: </td>
				<td><?php echo $ktp['agama']; ?></td>
			</tr>
			<tr>
				<td>Status Perkawinan: </td>
				<td><?php echo $ktp['status_perkawinan']; ?></td>
			</tr>
			<tr>
				<td>Pekerjaan : </td>
				<td><?php echo $ktp['pekerjaan']; ?></td>
			</tr>
			<tr>
				<td>Kewarganegaraan: </td>
				<td><?php echo $ktp['kewarganegaraan']; ?></td>
			</tr>
			<tr>
				<td>Berlaku Hingga: </td>
				<td><?php echo $ktp['berlaku_hingga']; ?></td>
			</tr>
			<tr>
				<td>Alamat: </td>
				<td><?php echo $ktp['alamat']; ?></td>
			</tr>
		</table>
		<?php echo form_close(); ?>
	</div>
</body>
</html>