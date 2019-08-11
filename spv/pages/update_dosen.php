
<?php
    $kd=$_GET['nip'];
    
    $query="SELECT * FROM dosen WHERE nip='".$_GET['nip']."'";
    $sql=mysqli_query($connect,$query);
    $data=mysqli_fetch_array($sql);

?>     



<div class="widget-content nopadding" align="center">
  
    
<table border="0" align="center">
    <tr>
        <td width="600px">
            <center>
                <form method="post" action="proses/dosen_proses.php" class="form-horizontal" >
                    <div class="control-group"  >
                                    <label class="control-label" >Nip</label>
                                <div class="controls">
                                    <input type="text" readonly  required="" name="nip" value="<?php echo $data['nip']?>" class="span8">
                                </div>
                    </div>

                    <div class="control-group">
                                    <label class="control-label">Nama Lengkap</label>
                                    <div class="controls">
                                    <input type="text" maxlength="35"  required="" onkeypress="return isAlphabetKey(event)" name="nama_dosen" value="<?php echo $data['nama_dosen']?>" class="span8">
                                </div>
                    </div>

                    <div class="control-group">
                                    <label class="control-label">Alamat</label>
                                    <div class="controls">
                                    <textarea type="text" required="" name="alamat" maxlength="500" rows="5" cols="100" class="span8"><?php echo $data['alamat']?></textarea>
                                </div>
                    </div>

                    <div class="control-group">
                                    <label class="control-label">Telepon</label>
                                    <div class="controls">
                                    <input type="text" maxlength="12" required="" name="telepon" onkeypress="return isNumberKey(event)" value="<?php echo $data['telepon']?>" class="span8">
                                </div>
                    </div>

                    <br>
                    
                    <button type="submit" name="ubah" class="btn btn-success">Ubah</button>
                    
                    <br>
                    <br>

                </form>
            </center>
                  
        </td>
    </tr>
</table>
</div>