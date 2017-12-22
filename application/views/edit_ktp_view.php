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
      <div class="home_div_table">
        <br><br><br>
        <center><font style="font-size: 18pt">Ubah KTP</font></center>
        <br><br>

		<?php echo form_open('ktp/edit/'.$ktp['nik']); ?>
			<div>
				Jenis Kelamin : 
				<select name="jenis_kelamin">
					<option value="">select</option>
					<?php 
					$jenis_kelamin_values = array(
						'Laki-Laki'=>'Laki-Laki',
						'Perempuan'=>'Perempuan',
					);

					foreach($jenis_kelamin_values as $value => $display_text)
					{
						$selected = ($value == $ktp['jenis_kelamin']) ? ' selected="selected"' : "";

						echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
					} 
					?>
				</select>
			</div>
			<div>
				Golongan Darah : 
				<select name="golongan_darah">
					<option value="">select</option>
					<?php 
					$golongan_darah_values = array(
						'AB'=>'AB',
						'A'=>'A',
						'B'=>'B',
						'O'=>'O',
					);

					foreach($golongan_darah_values as $value => $display_text)
					{
						$selected = ($value == $ktp['golongan_darah']) ? ' selected="selected"' : "";

						echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
					} 
					?>
				</select>
			</div>
			<div>
				Nama : 
				<input type="text" name="nama" value="<?php echo ($this->input->post('nama') ? $this->input->post('nama') : $ktp['nama']); ?>" />
			</div>
			<div>
				Tempat Lahir : 
				<input type="text" name="tempat_lahir" value="<?php echo ($this->input->post('tempat_lahir') ? $this->input->post('tempat_lahir') : $ktp['tempat_lahir']); ?>" />
			</div>
			<div>
				Tanggal Lahir : 
				<input type="date" name="tanggal_lahir" value="<?php echo ($this->input->post('tanggal_lahir') ? $this->input->post('tanggal_lahir') : $ktp['tanggal_lahir']); ?>" />
			</div>
			<div>
				Rt : 
				<input type="text" name="rt" value="<?php echo ($this->input->post('rt') ? $this->input->post('rt') : $ktp['rt']); ?>" />
			</div>
			<div>
				Rw : 
				<input type="text" name="rw" value="<?php echo ($this->input->post('rw') ? $this->input->post('rw') : $ktp['rw']); ?>" />
			</div>
			<div>
				Kelurahan : 
				<input type="text" name="kelurahan" value="<?php echo ($this->input->post('kelurahan') ? $this->input->post('kelurahan') : $ktp['kelurahan']); ?>" />
			</div>
			<div>
				Kecamatan : 
				<input type="text" name="kecamatan" value="<?php echo ($this->input->post('kecamatan') ? $this->input->post('kecamatan') : $ktp['kecamatan']); ?>" />
			</div>
			<div>
				Agama : 
				<input type="text" name="agama" value="<?php echo ($this->input->post('agama') ? $this->input->post('agama') : $ktp['agama']); ?>" />
			</div>
			<div>
				Status Perkawinan : 
				<input type="text" name="status_perkawinan" value="<?php echo ($this->input->post('status_perkawinan') ? $this->input->post('status_perkawinan') : $ktp['status_perkawinan']); ?>" />
			</div>
			<div>
				Pekerjaan : 
				<input type="text" name="pekerjaan" value="<?php echo ($this->input->post('pekerjaan') ? $this->input->post('pekerjaan') : $ktp['pekerjaan']); ?>" />
			</div>
			<div>
				Kewarganegaraan : 
				<input type="text" name="kewarganegaraan" value="<?php echo ($this->input->post('kewarganegaraan') ? $this->input->post('kewarganegaraan') : $ktp['kewarganegaraan']); ?>" />
			</div>
			<div>
				Berlaku Hingga : 
				<input type="date" name="berlaku_hingga" value="<?php echo ($this->input->post('berlaku_hingga') ? $this->input->post('berlaku_hingga') : $ktp['berlaku_hingga']); ?>" />
			</div>
			<div>
				Alamat : 
				<textarea name="alamat"><?php echo ($this->input->post('alamat') ? $this->input->post('alamat') : $ktp['alamat']); ?></textarea>
			</div>
			
			<button type="submit">Save</button>
		</div>		
		<?php echo form_close(); ?>
	</div>
</body>
</html>