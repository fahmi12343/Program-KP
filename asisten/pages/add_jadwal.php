<?php
    include "../../koneksi/koneksi.php";
    $query = "SELECT max(kd_jadwal) as maxKode FROM jadwal";
    $hasil = mysqli_query($connect,$query);
    $data  = mysqli_fetch_array($hasil);
    $kode = $data['maxKode'];
    $noUrut = (int) substr($kode, 3, 3);
    $noUrut++;
    $char = "JDL";
    $newID = $char . sprintf("%03s", $noUrut);
?>

<div class="widget-content nopadding" align="center">
  
    
<table border="0" align="center">
    <tr>
        <td width="600px">
            <center>
                <form method="post" action="proses/jadwal_proses.php" class="form-horizontal" >
                    <div class="control-group"  >
                                    <label class="control-label" ></label>
                                    <div class="controls">
                                    <input required type="hidden" maxlength="5" readonly required="" name="kd_jadwal" value="<?php echo $newID?>" class="span8">
                                </div>
                    </div>
                    
                    <div class="control-group">
                        <label for="title" class="col-sm-3 control-label"> Mata Kuliah </label>
                            <div class="controls">

                                <select required name="kd_matkul" required> 
                                    <option value=''>-Silahkan Pilih-</option>
                                    <?php
                                        $konek = mysqli_connect("localhost","root","","sistem_kp");
                                        $query = "select * from matkul";
                                        $hasil = mysqli_query($konek,$query);
                                        while($data=mysqli_fetch_array($hasil)){
                                            echo "<option value=$data[kd_matkul]>$data[nama_matkul]</option>";
                                        }
                                    ?>
                                </select>
                            </div>
                    </div>
                
                    <div class="control-group">
                                    <label class="control-label">Kelompok</label>
                                    <div class="controls">
                                    <input required type="text" maxlength="2"  required="" name="kelompok" class="span8">
                                </div>
                    </div>

                    <div class="control-group">
                        <label for="title" class="col-sm-3 control-label"> Nama Dosen </label>
                            <div class="controls">

                                <select required name="nip" required> 
                                    <option value=''>-Silahkan Pilih-</option>
                                    <?php
                                        $konek = mysqli_connect("localhost","root","","sistem_kp");
                                        $query = "select * from dosen";
                                        $hasil = mysqli_query($konek,$query);
                                        while($data=mysqli_fetch_array($hasil)){
                                            echo "<option value=$data[nip]>$data[nama_dosen]</option>";
                                        }
                                    ?>
                                </select>
                            </div>
                    </div>

                    <div class="control-group">
                        <label for="title" class="col-sm-3 control-label"> Hari </label>
                            <div class="controls">  
                                
                                <select required class="custom-select" name="hari" class="span8" required> 
                                    <option value="">-Silahkan Pilih-</option>
                                    <option value="Monday">Senin</option>
                                    <option value="Tuesday">Selasa</option>
                                    <option value="Wednesday">Rabu</option>
                                    <option value="Thursday">Kamis</option>
                                    <option value="Friday">Jum'at</option>
                                    <option value="Saturday">Sabtu</option>
                                </select>

                            </div>
                    </div>

                    <div class="control-group">
                        <label for="title" class="col-sm-3 control-label"> Lab </label>
                            <div class="controls">

                                <select required name="kd_lab" required> 
                                    <option value=''>-Silahkan Pilih-</option>
                                    <?php
                                        $konek = mysqli_connect("localhost","root","","sistem_kp");
                                        $query = "select * from lab";
                                        $hasil = mysqli_query($konek,$query);
                                        while($data=mysqli_fetch_array($hasil)){
                                            echo "<option value=$data[kd_lab]>$data[nama_lab]</option>";
                                        }
                                    ?>
                                </select>
                            </div>
                    </div>

                    <div class="control-group">
                                    <label class="control-label">Tanggal</label>
                                    <div class="controls">
                                    <input required type="date" name="tanggal" class="span8">
                                </div>
                    </div>

                    <div class="control-group">
                                    <label class="control-label">Jam</label>
                                    <div class="controls">
                                    <input required type="text" maxlength="11" required="" name="jam" class="span8">
                                </div>
                    </div>

                    <div class="control-group">
                        <label for="title" class="col-sm-3 control-label"> Tahun Ajar </label>
                            <div class="controls">
                                
                                <select required class="custom-select" name="tahun_ajar" class="span8"> 
                                    <option value="">-Silahkan Pilih-</option>
                                    <option value="2018/2019">2018/2019</option>
                                    <option value="2019/2020">2019/2020</option>
                                    <option value="2020/2021">2020/2021</option>
                                    <option value="2022/2023">2022/2023</option>
                                    <option value="2024/2025">2024/2025</option>
                                </select>

                            </div>
                    </div>

                    <div class="control-group">
                        <label for="title" class="col-sm-3 control-label"> Keterangan </label>
                            <div class="controls">
                                
                                <select required class="custom-select" name="keterangan" class="span8" > 
                                    <option value="">-Silahkan Pilih-</option>
                                    <option value="Hadir">Hadir</option>
                                    <option value="Tidak Hadir">Tidak Hadir</option>
                                </select>
                            </div>
                    </div>

                    <div class="control-group">
                        <label for="title" class="col-sm-3 control-label"> Sesi </label>
                            <div class="controls">
                                
                                <select required class="custom-select" name="sesi" class="span8"> 
                                    <option value="">-Silahkan Pilih-</option>
                                    <option value="Genap">Genap</option>
                                    <option value="Ganjil">Ganjil</option>
                                </select>
                            </div>
                    </div>

                    <div class="control-group">
                        <label for="title" class="col-sm-3 control-label"> Status </label>
                            <div class="controls">
                                
                            <input type="text" readonly  name="status" value="Pengganti" class="span8" >
                            </div>
                    </div>
                                        
                    <div class="control-group">
                                    <label class="control-label"> Penginput </label>
                                    <div class="controls">
                                    <input type="text" readonly  name="nim" value="<?php echo $nim;?>" class="span8" >
                                </div>
                    </div>

                    
                    <button type="submit" name="tambah" class="btn btn-success">Tambah</button>
                    
                    <br>
                    <br>

                </form>
            </center>
                  
        </td>
    </tr>
</table>
</div>