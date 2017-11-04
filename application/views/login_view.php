<?php defined('BASEPATH') OR exit('No direct script access allowed');
    $this->load->helper('url');
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
              <!-- <li><a href="<?php echo site_url(); ?>/home">Beranda</a></li> -->
              <li style="float:right"><a href="<?php echo site_url(); ?>/register">Register</a></li>
              <li class="active" style="float:right"><a href="<?php echo site_url(); ?>/login">Masuk</a></li>
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
        <div class="wrapper_login">
            <center><h3>Silahkan Login</h3></center>
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
                        <td colspan="2" class="tdButton"><input type="submit" value="Masuk" class="btn"></td>
                    </tr>
                </table>
            </form>
        </div>
        <div class="wrapper_login">
            <center>Bayu Febry Asmoro - 2017</center>
        </div>
    </body>
</html>