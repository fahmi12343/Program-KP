
<?php
    $kd=$_GET['nim'];
    
    $query="SELECT * FROM user WHERE nim='".$_GET['nim']."'";
    $sql=mysqli_query($connect,$query);
    $data=mysqli_fetch_array($sql);

?>         

           

<div class="widget-content nopadding" align="center">
  
    
<table border="0" align="center">
    <tr>
        <td width="600px">
<center>
  <form method="post" action="proses/usr_proses.php" class="form-horizontal" >
    <div class="control-group"  >
                    <label class="control-label" >Nim</label>
                 <div class="controls">
                    <input type="text" maxlength="10" readonly required="" name="nim" onkeypress="return isNumberKey(event)" value="<?php echo $data['nim']?>" class="span8">
                </div>
    </div>

    <div class="control-group">
                    <label class="control-label">password</label>
                    <div class="controls">
                    <input type="password" maxlength="18"  required="" name="password" value="<?php echo $data['password']?>" class="span8">
                </div>
    </div>

    <div class="control-group">
                    <label class="control-label">Nama Lengkap</label>
                    <div class="controls">
                    <input type="text" maxlength="35"  required="" onkeypress="return huruf(event)" name="nama" value="<?php echo $data['nama']?>" class="span8">
                </div>
    </div>

    <div class="control-group">
                    <label class="control-label">E-Mail</label>
                    <div class="controls">
                    <input type="text" maxlength="35" required="" name="email" placeholder="saha@eta.com" value="<?php echo $data['email']?>" class="span8">
                </div>
    </div>

    <div class="control-group">
                    <label for="title" class="col-sm-3 control-label"> Aksi </label>
                    <div class="controls">
                         
                        <select class="custom-select" name="akses" class="span8">
                            <option value="#">-silahkan pilih-</option>
                            <option value="supervisor" <?php echo ($data['akses'] == "supervisor") ? ' selected' : ''  ?>>SUPERVISOR</option>
                            <option value="asisten" <?php echo ($data['akses'] == "asisten") ? ' selected' : ''  ?>>ASISTEN</option>
                        </select>

                    </div>
    </div>
    <br>
                            <button type="submit" name="ubah" class="btn btn-success">Ubah</button>
                            <br><br>
</form>
                         </center>
                  
        </td>
    </tr>
</table>
</div>

