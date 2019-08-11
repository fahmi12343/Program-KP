
<?php
    $kd=$_GET['kd_lab'];
    
    $query="SELECT * FROM lab WHERE kd_lab='".$_GET['kd_lab']."'";
    $sql=mysqli_query($connect,$query);
    $data=mysqli_fetch_array($sql);

?>         

           

<div class="widget-content nopadding" align="center">
  
    
<table border="0" align="center">
    <tr>
        <td width="600px">
            <center>
                <form method="post" action="proses/lab_proses.php" class="form-horizontal" >
                    <div class="control-group"  >
                                    <label class="control-label" >Kode Lab</label>
                                <div class="controls">
                                    <input readonly type="text"  name="kd_lab" value="<?php echo $data['kd_lab']?>"  class="span8">
                                </div>
                    </div>

                    <div class="control-group">
                                    <label class="control-label">Nama Lab</label>
                                    <div class="controls">
                                    <input type="text" maxlength="8" required="" name="nama_lab" value="<?php echo $data['nama_lab']?>" class="span8">
                                </div>
                    </div>

                    <div class="control-group">
                                    <label class="control-label">Deskripsi Lab</label>
                                    <div class="controls">
                                    <textarea type="text" required="" name="desc_lab" maxlength="500" rows="5" cols="100" class="span8"><?php echo $data['desc_lab']?></textarea>
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

