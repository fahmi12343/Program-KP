<div class="widget-content nopadding" align="center">
  
    
<table border="0" align="center">
    <tr>
        <td width="600px">
<center>
  <form method="post" action="proses/usr_proses.php" class="form-horizontal" >
    <div class="control-group"  >
                    <label class="control-label" >Nim</label>
                 <div class="controls">
                    <input type="text" maxlength="10"  required="" name="nim" onkeypress="return isNumberKey(event)" class="span8">
                </div>
    </div>

    <div class="control-group">
                    <label class="control-label">password</label>
                    <div class="controls">
                    <input type="password" maxlength="18"  required="" name="password" class="span8">
                </div>
    </div>

    <div class="control-group">
                    <label class="control-label">Nama Lengkap</label>
                    <div class="controls">
                    <input type="text" maxlength="35"  required="" onkeypress="return isAlphabetKey(event)" name="nama" class="span8">
                </div>
    </div>

    <div class="control-group">
                    <label class="control-label">E-Mail</label>
                    <div class="controls">
                    <input type="text" maxlength="35" required="" name="email" placeholder="saha@eta.com" class="span8">
                </div>
    </div>

    <div class="control-group">
                    <label for="title" class="col-sm-3 control-label"> Aksi </label>
                    <div class="controls">
                         
                        <select class="custom-select" name="akses" class="span8"> 
                            <option value="#">-silahkan pilih-</option>
                            <option value="supervisor">SUPERVISOR</option>
                            <option value="asisten">ASISTEN</option>
                        </select>

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