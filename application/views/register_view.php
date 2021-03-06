<?php defined('BASEPATH') OR exit('No direct script access allowed');
    $this->load->library('form_validation');
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="<? echo base_url();?>css/style.css">
    </head>
    <body>
        <div class="navbar">
            <ul>
              <li class="active" style="float:right"><a href="<?php echo site_url(); ?>/register">DAFTAR</a></li>
              <li style="float:right"><a href="<?php echo site_url(); ?>/login">MASUK</a></li>
            </ul>
        </div>
        <?php
            if (isset($error_message)) {
        ?>
        <div class="alert">
          <?php 
            echo $error_message;
          ?>
        </div>
        <?php
            } else if (isset($success_message)) {
        ?>
        <div class="success">
          <?php 
            echo $success_message;
          ?>
        </div>
        <?php
            }
        ?>
        <div class="wrapper">
            <center><h3>FORMULIR PENDAFTARAN</h3></center>
            <form method="post" action="<?php echo site_url(); ?>/register/create">
                <table class="tableForm">
                    <tr>
                        <td>User Name</td>
                        <td><input type="text" name="username" required></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="password" required></td>
                    </tr>
                    <tr>
                        <td>Re-type Password</td>
                        <td><input type="password" name="repassword" required></td>
                    </tr>
                    <tr>
                        <td>E-mail</td>
                        <td><input type="email" name="email" size="40" required></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td><input type="text" name="name" required></td>
                    </tr>
                    <tr>
                        <td>NIM</td>
                        <td><input type="text" name="nim" required></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td><input type="text" name="address" required></td>
                    </tr>
                    <tr>
                        <td>Kota Asal</td>
                        <td>
                            <select name="city" required>
                                <option value="bandung">Bandung</option>
                                <option value="bekasi">Bekasi</option>
                                <option value="cimahi">Cimahi</option>
                                <option value="jakarta">Jakarta</option>
                                <option value="karawang">Karawang</option>
                                <option value="purwakarta">Purwakarta</option>
                                <option value="semarang">Semarang</option>
                                <option value="surabaya">Surabaya</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td><input type="radio" name="gender" value="male" checked="checked"> Pria <input type="radio" name="gender" value="female"> Wanita</td>
                    </tr>
                    <tr>
                        <td>Hobi</td>
                        <td>
                            <input type="checkbox" name="hobby[]" value="coding"> Coding<br>
                            <input type="checkbox" name="hobby[]" value="design"> PSan<br>
                            <input type="checkbox" name="hobby[]" value="billiard"> Bilyard<br>
                        </td>
                    </tr>
                    <tr>
                        <td>Deskripsi Pribadi</td>
                        <td><textarea name="description"></textarea></td>
                    </tr>
                    <tr>
                        <td colspan="2"><div style="float: right"><input type="reset" value="HAPUS" class="btn_register_reset"> <input type="submit" value="KIRIM" class="btn_register_submit"></div></td>
                    </tr>
                </table>
            </form>
        </div>
        <div class="wrapper">
            <center>&copy; 2017 Bayu Febry Asmoro</center>
        </div>
    </body>
</html>