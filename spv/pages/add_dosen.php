<div class="widget-content nopadding" align="center">
  
    
<table border="0" align="center">
    <tr>
        <td width="600px">
            <center>
                <form method="post" action="proses/dosen_proses.php" class="form-horizontal" >
                    <div class="control-group"  >
                                    <label class="control-label" >Nip</label>
                                <div class="controls">
                                    <input type="text" maxlength="10"  required="" name="nip" onkeypress="return isNumberKey(event)" class="span8">
                                </div>
                    </div>

                    <div class="control-group">
                                    <label class="control-label">Nama Lengkap</label>
                                    <div class="controls">
                                    <input type="text" maxlength="35"  required="" onkeypress="return huruf(event)" name="nama_dosen" class="span8">
                                </div>
                    </div>

                    <div class="control-group">
                                    <label class="control-label">Alamat</label>
                                    <div class="controls">
                                    <textarea type="text" required="" name="alamat" maxlength="500" rows="5" cols="100" class="span8"></textarea>
                                </div>
                    </div>

                    <div class="control-group">
                                    <label class="control-label">Telepon</label>
                                    <div class="controls">
                                    <input type="text" maxlength="12" required="" name="telepon" onkeypress="return isNumberKey(event)" class="span8">
                                </div>
                    </div>

                    <br>
                    
                    <button type="submit" name="tambah" class="btn btn-success">Tambah</button>
                    
                    <br>
                    <br>

                </form>
            </center>
                  
        </td>
    </tr>
</table>
</div>