<?php defined('BASEPATH') OR exit('No direct script access allowed');
    $this->load->helper('url');
    $this->load->library('form_validation');
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="<? echo base_url();?>css/style.css">
        <style>
        body {
            background-image: url(../assets/img/spiration-light.png);
            background-repeat: repeat;
        }
        </style>
    </head>
    <body>
        <div class="navbar">
            <ul>
              <li style="float:right"><a href="<?php echo site_url(); ?>/register">DAFTAR</a></li>
              <li class="active" style="float:right"><a href="<?php echo site_url(); ?>/login">MASUK</a></li>
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
            }
        ?>
        <br>
        <center><h3>WEBSITE PENDATAAN PENDUDUK INDONESIA</h3></center>
        <div class="wrapper_login">
            <center><h3>SILAHKAN MASUK</h3></center>
            <form method="post" action="<?php echo site_url(); ?>/login/login">
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
                        <td colspan="2"><input type="submit" value="MASUK" class="btn_login"></td>
                    </tr>
                </table>
            </form>
        </div>
        <div class="wrapper_login">
            <center>&copy; 2017 Bayu Febry Asmoro</center>
        </div>
    </body>
</html>