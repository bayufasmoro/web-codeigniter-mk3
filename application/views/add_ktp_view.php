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
        <center><font style="font-size: 18pt">Tambah KTP</font></center>
        <br><br>
        <?php echo form_open_multipart('ktp/add'); ?>
        <table class="tableForm">
			<tr>
				<td>NIK<span class="field-required">*</span> : </td>
				<td><input type="text" name="nik" value="<?php echo $this->input->post('nik'); ?>" maxlength="16" required /></td>
			</tr>
			<tr>
				<td>Jenis Kelamin<span class="field-required">*</span> : </td>
				<td>
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
				</td>
			</tr>
			<tr>
				<td>Golongan Darah<span class="field-required">*</span> : </td>
				<td>
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
				</td>
			</tr>
			<tr>
				<td>Nama<span class="field-required">*</span> : </td>
				<td><input type="text" name="nama" value="<?php echo $this->input->post('nama'); ?>" required /></td>
			</tr>
			<tr>
				<td>Tempat Lahir<span class="field-required">*</span> : </td>
				<td><input type="text" name="tempat_lahir" value="<?php echo $this->input->post('tempat_lahir'); ?>" required /></td>
			</tr>
			<tr>
				<td>Tanggal Lahir<span class="field-required">*</span> : </td>
				<td><input type="date" name="tanggal_lahir" value="<?php echo $this->input->post('tanggal_lahir'); ?>" required /></td>
			</tr>
			<tr>
				<td>Rt : </td>
				<td><input type="text" name="rt" value="<?php echo $this->input->post('rt'); ?>" maxlength="4" /></td>
			</tr>
			<tr>
				<td>Rw : </td>
				<td><input type="text" name="rw" value="<?php echo $this->input->post('rw'); ?>" maxlength="4" /></td>
			</tr>
			<tr>
				<td>Kelurahan : </td>
				<td><input type="text" name="kelurahan" value="<?php echo $this->input->post('kelurahan'); ?>" /></td>
			</tr>
			<tr>
				<td>Kecamatan : </td>
				<td><input type="text" name="kecamatan" value="<?php echo $this->input->post('kecamatan'); ?>" /></td>
			</tr>
			<tr>
				<td>Agama<span class="field-required">*</span> : </td>
				<td><input type="text" name="agama" value="<?php echo $this->input->post('agama'); ?>" required /></td>
			</tr>
			<tr>
				<td>Status Perkawinan<span class="field-required">*</span> : </td>
				<td><input type="text" name="status_perkawinan" value="<?php echo $this->input->post('status_perkawinan'); ?>" required /></td>
			</tr>
			<tr>
				<td>Pekerjaan : </td>
				<td><input type="text" name="pekerjaan" value="<?php echo $this->input->post('pekerjaan'); ?>" /></td>
			</tr>
			<tr>
				<td>Kewarganegaraan<span class="field-required">*</span> : </td>
				<td><input type="text" name="kewarganegaraan" value="<?php echo $this->input->post('kewarganegaraan'); ?>" required /></td>
			</tr>
			<tr>
				<td>Berlaku Hingga<span class="field-required">*</span> : </td>
				<td><input type="date" name="berlaku_hingga" value="<?php echo $this->input->post('berlaku_hingga'); ?>" required /></td>
			</tr>
			<tr>
				<td>Alamat<span class="field-required">*</span> : </td>
				<td><textarea name="alamat" required ><?php echo $this->input->post('alamat'); ?></textarea></td>
			</tr>
			<tr>
				<td>Upload Foto<span class="field-required">*</span> : </td>
				<td><input type="file" name="userfile" size="20" required /></td>
			</tr>
			<tr>
				<td colspan="2"><div style="float: right"><button type="submit" class="save_button" value="upload">Save</button></div></td>
			</tr>
		</table>
		<?php echo form_close(); ?>
	</div>
</body>
</html>