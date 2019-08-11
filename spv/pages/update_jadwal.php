<?php
    $kd=$_GET['kd_jadwal'];
    
    $query="SELECT * FROM jadwal WHERE kd_jadwal='".$_GET['kd_jadwal']."'";
    $sql=mysqli_query($connect,$query);
    $data=mysqli_fetch_array($sql);

?>  

<div class="widget-content nopadding" align="center">
  
    
<table border="0" align="center">
    <tr>
        <td width="600px">
            <center>
                <form method="post" action="proses/jadwal_proses.php" class="form-horizontal" >
                    <div class="control-group"  >
                                    <label class="control-label" >Kode Jadwal</label>
                                    <div class="controls">
                                    <input type="text" maxlength="5" readonly required="" name="kd_jadwal" value="<?php echo $data['kd_jadwal']?>" class="span8">
                                </div>
                    </div>
                    
                    <div class="control-group">
                        <label for="title" class="col-sm-3 control-label"> Mata Kuliah </label>
                            <div class="controls">

                                <select name="kd_matkul" required> 
                                    <option value=''>-Silahkan Pilih-</option>
                                    <?php
                                        $konek = mysqli_connect("localhost","root","","sistem_kp");
                                        $query = "select * from matkul";
                                        $hasil2 = mysqli_query($konek,$query);
                                        while($data2=mysqli_fetch_array($hasil2)){
                                    ?>
                                            <option value='<?php echo $data2[kd_matkul]; ?>' <?php echo ($data2[kd_matkul] == $data[kd_matkul]) ? ' selected' : '' ?>><?php echo $data2[nama_matkul]; ?></option>";
                                    <?php
                                        }
                                    ?>
                                </select>
                            </div>
                    </div>
                
                    <div class="control-group">
                                    <label class="control-label">Kelompok</label>
                                    <div class="controls">
                                    <input type="text" maxlength="2"  required="" name="kelompok" value="<?php echo $data['kelompok']?>" class="span8">
                                </div>
                    </div>

                    <div class="control-group">
                        <label for="title" class="col-sm-3 control-label"> Nama Dosen </label>
                            <div class="controls">

                                <select name="nip" required> 
                                    <option value=''>-Silahkan Pilih-</option>
                                    <?php
                                        $konek = mysqli_connect("localhost","root","","sistem_kp");
                                        $query = "select * from dosen";
                                        $hasil3 = mysqli_query($konek,$query);
                                        while($data3 =mysqli_fetch_array($hasil3)){
                                    ?>
                                            <option value='<?php echo $data3[nip]; ?>' <?php echo ($data3[nip] == $data[nip]) ? ' selected' : '' ?>> <?php echo $data3[nama_dosen]; ?></option>";
                                    <?php
                                        }
                                    ?>
                                </select>
                            </div>
                    </div>

                    <div class="control-group">
                        <label for="title" class="col-sm-3 control-label"> Hari </label>
                            <div class="controls">
                                
                                <select class="custom-select" name="hari" class="span8" required> 
                                    <option value="#">-Silahkan Pilih-</option>
                                    <option value="senin" <?php echo ($data['hari'] == "Monday") ? ' selected' : ''  ?>>Senin</option>
                                    <option value="selasa" <?php echo ($data['hari'] == "Tuesday") ? ' selected' : ''  ?>>Selasa</option>
                                    <option value="rabu" <?php echo ($data['hari'] == "Wednesday") ? ' selected' : ''  ?>>Rabu</option>
                                    <option value="kamis" <?php echo ($data['hari'] == "Thursday") ? ' selected' : ''  ?>>Kamis</option>
                                    <option value="jum'at" <?php echo ($data['hari'] == "Friday") ? ' selected' : ''  ?>>Jum'at</option>
                                    <option value="sabtu" <?php echo ($data['hari'] == "Saturday") ? ' selected' : ''  ?>>Sabtu</option>
                                </select>

                            </div>
                    </div>

                    <div class="control-group">
                        <label for="title" class="col-sm-3 control-label"> Lab </label>
                            <div class="controls">

                                <select name="kd_lab" required> 
                                    <option value=''>-Silahkan Pilih-</option>
                                    <?php
                                        $konek = mysqli_connect("localhost","root","","sistem_kp");
                                        $query = "select * from lab";
                                        $hasil4 = mysqli_query($konek,$query);
                                        while($data4=mysqli_fetch_array($hasil4)){
                                    ?>
                                            <option value='<?php echo $data4[kd_lab]; ?>' <?php echo ($data4[kd_lab] == $data[kd_lab]) ? ' selected' : '' ?>> <?php echo $data4[nama_lab]; ?></option>";
                                    <?php
                                        }
                                    ?>
                                </select>
                            </div>
                    </div>

                    <div class="control-group">
                                    <label class="control-label">Tanggal</label>
                                    <div class="controls">
                                    <input type="date" name="tanggal" value="<?php echo $data['tanggal']?>" class="span8">
                                </div>
                    </div>

                    <div class="control-group">
                                    <label class="control-label">Jam</label>
                                    <div class="controls">
                                    <input type="text" maxlength="11" required="" name="jam" value="<?php echo $data['jam']?>" class="span8">
                                </div>
                    </div>

                    <div class="control-group">
                        <label for="title" class="col-sm-3 control-label"> Tahun Ajar </label>
                            <div class="controls">
                                
                                <select class="custom-select" name="tahun_ajar" class="span8"> 
                                    <option value="#">-Silahkan Pilih-</option>
                                    <option value="2018/2019" <?php echo ($data['tahun_ajar'] == "2018/2019") ? ' selected' : ''  ?>>2018/2019</option>
                                    <option value="2019/2020" <?php echo ($data['tahun_ajar'] == "2019/2020") ? ' selected' : ''  ?>>2019/2020</option>
                                    <option value="2020/2021" <?php echo ($data['tahun_ajar'] == "2020/2021") ? ' selected' : ''  ?>>2020/2021</option>
                                    <option value="2022/2023" <?php echo ($data['tahun_ajar'] == "2022/2023") ? ' selected' : ''  ?>>2022/2023</option>
                                    <option value="2024/2025" <?php echo ($data['tahun_ajar'] == "2024/2025") ? ' selected' : ''  ?>>2024/2025</option>
                                </select>

                            </div>
                    </div>

                    <div class="control-group">
                        <label for="title" class="col-sm-3 control-label"> Semester </label>
                            <div class="controls">
                                
                                <select class="custom-select" name="semester" class="span8"> 
                                    <option value="#">-Silahkan Pilih-</option>
                                    <option value="1" <?php echo ($data['semester'] == "1") ? ' selected' : ''  ?>>1</option>
                                    <option value="2" <?php echo ($data['semester'] == "2") ? ' selected' : ''  ?>>2</option>
                                </select>
                            </div>
                    </div>

                    <div class="control-group">
                        <label for="title" class="col-sm-3 control-label"> Sesi </label>
                            <div class="controls">
                                
                                <select class="custom-select" name="sesi" class="span8"> 
                                    <option value="#">-Silahkan Pilih-</option>
                                    <option value="Genap" <?php echo ($data['sesi'] == "Genap") ? ' selected' : ''  ?>>Genap</option>
                                    <option value="Ganjil" <?php echo ($data['sesi'] == "Ganjil") ? ' selected' : ''  ?>>Ganjil</option>
                                </select>
                            </div>
                    </div>

                    <div class="control-group">
                        <label for="title" class="col-sm-3 control-label"> Keterangan </label>
                            <div class="controls">
                                
                                <select class="custom-select" name="keterangan" class="span8"> 
                                    <option value="#">-Silahkan Pilih-</option>
                                    <option value="Hadir" <?php echo ($data['keterangan'] == "Hadir") ? ' selected' : ''  ?>>Hadir</option>
                                    <option value="Tidak Hadir" <?php echo ($data['keterangan'] == "Tidak Hadir") ? ' selected' : ''  ?>>Tidak Hadir</option>
                                </select>
                            </div>
                    </div>

                    <div class="control-group">
                        <label for="title" class="col-sm-3 control-label"> Status </label>
                            <div class="controls">
                                
                                <select class="custom-select" name="status" class="span8"> 
                                    <option value="#">-Silahkan Pilih-</option>
                                    <option value="Biasa" <?php echo ($data['status'] == "Reguler") ? ' selected' : ''  ?>>Reguler</option>
                                    <option value="Pengganti" <?php echo ($data['status'] == "Pengganti") ? ' selected' : ''  ?>>Pengganti</option>
                                </select>
                            </div>
                    </div>
                                        
                    <div class="control-group">
                                    <label class="control-label"> Penginput </label>
                                    <div class="controls">
                                    <input type="text" readonly  name="nim" value="<?php echo $data['nim']?>" class="span8" >
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