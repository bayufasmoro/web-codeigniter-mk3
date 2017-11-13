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
          <br>
          <br>
          <br>
          <center><h1>Daftar Anggota</h1></center>
          <br>
          <br>
          <table class="member_table">
            <tr style="background-color: #eee">
              <th>Username</th>
              <th>Email</th>
              <th>Name</th>
              <th>NIM</th>
              <th>Address</th>
              <th>City</th>
              <th>Gender</th>
              <th>Hobby</th>
              <th>Decription</th>
            </tr>
            <?php foreach($query as $row): ?>
            <tr>   
                <td><?php echo $row->username; ?></td>
                <td><?php echo $row->email; ?></td>
                <td><?php echo $row->name; ?></td>
                <td><?php echo $row->nim; ?></td>
                <td><?php echo $row->address; ?></td>
                <td><?php echo $row->city; ?></td>
                <td><?php echo $row->gender; ?></td>
                <td><?php echo $row->hobby; ?></td>
                <td><?php echo $row->desc; ?></td>
            </tr>
            <?php endforeach; ?>
          </table>
        </div>
    </body>
</html>