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
        <center><font style="font-size: 18pt">Tambah KTP</font></center>
        <br><br>
        <?php echo form_open('ktp/add'); ?>
			<div>
				NIK<span class="field-required">*</span> : 
				<input type="text" name="nik" value="<?php echo $this->input->post('nik'); ?>" maxlength="16" required />
			</div>
			<div>
				Jenis Kelamin<span class="field-required">*</span> : 
				<select name="jenis_kelamin" required>
					<option value="">select</option>
					<?php 
					$jenis_kelamin_values = array(
						'Laki-Laki'=>'Laki-Laki',
						'Perempuan'=>'Perempuan',
					);

					foreach($jenis_kelamin_values as $value => $display_text)
					{
						$selected = ($value == $this->input->post('jenis_kelamin')) ? ' selected="selected"' : "";

						echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
					} 
					?>
				</select>
			</div>
			<div>
				Golongan Darah<span class="field-required">*</span> : 
				<select name="golongan_darah" required >
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
						$selected = ($value == $this->input->post('golongan_darah')) ? ' selected="selected"' : "";

						echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
					} 
					?>
				</select>
			</div>
			<div>
				Nama<span class="field-required">*</span> : 
				<input type="text" name="nama" value="<?php echo $this->input->post('nama'); ?>" required />
			</div>
			<div>
				Tempat Lahir<span class="field-required">*</span> : 
				<input type="text" name="tempat_lahir" value="<?php echo $this->input->post('tempat_lahir'); ?>" required />
			</div>
			<div>
				Tanggal Lahir<span class="field-required">*</span> : 
				<input type="date" name="tanggal_lahir" value="<?php echo $this->input->post('tanggal_lahir'); ?>" required />
			</div>
			<div>
				Rt : 
				<input type="text" name="rt" value="<?php echo $this->input->post('rt'); ?>" />
			</div>
			<div>
				Rw : 
				<input type="text" name="rw" value="<?php echo $this->input->post('rw'); ?>" />
			</div>
			<div>
				Kelurahan : 
				<input type="text" name="kelurahan" value="<?php echo $this->input->post('kelurahan'); ?>" />
			</div>
			<div>
				Kecamatan : 
				<input type="text" name="kecamatan" value="<?php echo $this->input->post('kecamatan'); ?>" />
			</div>
			<div>
				Agama<span class="field-required">*</span> : 
				<input type="text" name="agama" value="<?php echo $this->input->post('agama'); ?>" required />
			</div>
			<div>
				Status Perkawinan<span class="field-required">*</span> : 
				<input type="text" name="status_perkawinan" value="<?php echo $this->input->post('status_perkawinan'); ?>" required />
			</div>
			<div>
				Pekerjaan : 
				<input type="text" name="pekerjaan" value="<?php echo $this->input->post('pekerjaan'); ?>" />
			</div>
			<div>
				Kewarganegaraan<span class="field-required">*</span> : 
				<input type="text" name="kewarganegaraan" value="<?php echo $this->input->post('kewarganegaraan'); ?>" required />
			</div>
			<div>
				Berlaku Hingga<span class="field-required">*</span> : 
				<input type="date" name="berlaku_hingga" value="<?php echo $this->input->post('berlaku_hingga'); ?>" required />
			</div>
			<div>
				Alamat<span class="field-required">*</span> : 
				<textarea name="alamat" required ><?php echo $this->input->post('alamat'); ?></textarea>
			</div>
			
			<button type="submit" class="save_button">Save</button>
		</div>
		<?php echo form_close(); ?>
	</div>
</body>
</html>