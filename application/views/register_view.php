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
              <li><a href="#">SELAMAT DATANG</a></li>
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
            <center>
                <h1>Formulir Pendaftaran</h1>
                <h3>Silahkan isi seluruh data di bawah ini dengan benar</h3>
            </center>
            <form method="post" action="<?php echo site_url(); ?>/register/create">
                <table class="tableForm">
                    <tr>
                        <td>User Name</td>
                        <td><input type="text" name="username"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="password"></td>
                    </tr>
                    <tr>
                        <td>Re-type Password</td>
                        <td><input type="password" name="repassword"></td>
                    </tr>
                    <tr>
                        <td>E-mail</td>
                        <td><input type="email" name="email" size="40"></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td><input type="text" name="name"></td>
                    </tr>
                    <tr>
                        <td>NIM</td>
                        <td><input type="text" name="nim"></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td><input type="text" name="address"></td>
                    </tr>
                    <tr>
                        <td>Kota Asal</td>
                        <td>
                            <select name="city">
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
                        <td><input type="radio" name="gender" value="male"> Pria <input type="radio" name="gender" value="female"> Wanita</td>
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
                        <td colspan="2" class="tdButton"><input type="submit" value="Kirim" class="btn"> <input type="reset" value="Hapus" class="btn"></td>
                    </tr>
                </table>
            </form>
        </div>
        <div class="wrapper">
            <center>Bayu Febry Asmoro - 2017</center>
        </div>
    </body>
</html>