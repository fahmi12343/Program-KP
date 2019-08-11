
<?php
    $kd=$_GET['kd_matkul'];
    
    $query="SELECT * FROM matkul WHERE kd_matkul='".$_GET['kd_matkul']."'";
    $sql=mysqli_query($connect,$query);
    $data=mysqli_fetch_array($sql);

?>         

           
<br>
<div class="widget-content nopadding" align="center">
  
    
<table border="0" align="center">
    <tr>
        <td width="600px">
            <center>
                <form method="post" action="proses/matkul_proses.php" class="form-horizontal" ><br>
                    <div class="control-group"  >
                                    <label class="control-label" >Kode Mata Kuliah</label>
                                <div class="controls">
                                    <input readonly type="text"  name="kd_matkul" value="<?php echo $data['kd_matkul']?>"  class="span8">
                                </div>
                    </div>

                    <div class="control-group">
                                    <label class="control-label">Nama Mata Kuliah</label>
                                    <div class="controls">
                                    <input type="text" maxlength="35" required="" name="nama_matkul" value="<?php echo $data['nama_matkul']?>" class="span8">
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
<br>
<br>

