<?php
    include "../../koneksi/koneksi.php";
    $query = "SELECT max(kd_lab) as maxKode FROM lab";
    $hasil = mysqli_query($connect,$query);
    $data  = mysqli_fetch_array($hasil);
    $kode = $data['maxKode'];
    $noUrut = (int) substr($kode, 3, 3);
    $noUrut++;
    $char = "LAB";
    $newID = $char . sprintf("%03s", $noUrut);
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
                                            <input readonly type="text" name="kd_lab" value="<?php echo $newID?>"  class="span8">
                                        </div>
                            </div>

                            <div class="control-group">
                                            <label class="control-label">Nama Lab</label>
                                            <div class="controls">
                                            <input type="text" maxlength="8" required="" name="nama_lab" class="span8">
                                        </div>
                            </div>

                            <div class="control-group">
                                            <label class="control-label">Deskripsi Lab</label>
                                            <div class="controls">
                                            <textarea type="text" required="" name="desc_lab" maxlength="500" rows="5" cols="100" class="span8"></textarea>
                                        </div>
                            </div>
                            <br>
                                                    <button type="submit" name="tambah" class="btn btn-success">Tambah</button>
                                                    <br><br>
                        </form>
            </center>
                  
        </td>
    </tr>
</table>
</div>

