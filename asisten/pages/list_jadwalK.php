<?php

// Fetch all users data from database
$result = mysql_query("SELECT * FROM jadwal ORDER BY kd_jadwal DESC ");
?>

    <div id="content-wrapper">
        <div class="container-fluid">
            <div class="card-body">
                <div class="table-responsive">
                    <div style="height:50px;"></div>
                        <!-- <div class="well" style="margin:auto; padding:auto; width:100%;"> -->
                            <span style="font-size:30px; color:black"><center><strong>JADWAL KARYAWAN</strong></center></span><br><br>
                                <div class="span">
                                    <span><a href="index.php?page=add_jadwal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span>Tambah</a></span>
                                </div>
                                        <div class="span">
                                            <div class="buttons"><a href="<?php $_SERVER['PHP_SELF']; ?>" class="btn btn-medium btn-success"><i class="icon-refresh"></i> Refresh</a></div>
                                        </div>
                                        
                                        <div style="height:60px;"></div>
                                            <div style="height:60px;"></div>
                                                <select name="sesi" id="sesiJadwal"> 
                                                    <option value="#">Silahkan Pilih Sesi</option>
                                                    <option value="Ganjil">Ganjil</option>
                                                    <option value="Genap">Genap</option>
                                                </select>
                                                
                                                <div id="santuy">
                                                    
                                                <table class="table table-hover" id="example" width="100%" >
                                                
                                                    <?php
                                                        $hari = date('l');
                                                    if ($hari == 'Monday')
                                                            echo "<h2 align='center'> Hari Senin <h2>";
                                                        if ($hari == 'Tuesday')
                                                            echo "<h2 align='center'> Hari Selasa <h2>";
                                                        if ($hari == 'Wednesday')
                                                            echo "<h2 align='center'> Hari Rabu <h2>";
                                                        if ($hari == 'Thursday')
                                                            echo "<h2 align='center'> Hari Kamis <h2>";
                                                        if ($hari == 'Friday')
                                                            echo "<h2 align='center'> Hari Jum'at <h2>";
                                                        if ($hari == 'Saturday')
                                                            echo "<h2 align='center'> Hari Sabtu <h2>";
                                                    ?>

                                                    <?php
                                                        $tanggal = date("Y-m-d");
                                                        if ($tanggal == date("Y-m-d"))
                                                            echo "<h2 align='center'>Tanggal $tanggal <h2>";
                                                    ?>

                                                    <?php
                                                        
                                                    ?>

                                                    

                                                    <thead>
                                                        <tr>
                                                        <th><center>No.</center></th>
                                                        <th><center>Nama Matkul</center></th>
                                                        <th><center>Nama Dosen</center></th>
                                                        <th><center>Kelompok</center></th>
                                                        <th><center>Lab</center></th>
                                                        <th><center>Tanggal</center></th>
                                                        <th><center>Hari</center></th>
                                                        <th><center>Jam</center></th>
                                                        <th><center>Tahun Ajar</center></th>
                                                        <th><center>Keterangan</center></th>
                                                        <th><center>Sesi</center></th>
                                                        <th><center>Status</center></th>
                                                        <th><center>Penginput</center></th>
                                                        </tr>
                                                    </thead>

                                                
                                                    <?php
                                                            $date= date('Y-m-d');
                                                            $query = "SELECT
                                                            `jadwal`.`kd_jadwal`,
                                                            `matkul`.`nama_matkul`,
                                                            `dosen`.`nama_dosen`,
                                                            `jadwal`.`kelompok`,
                                                            `lab`.`nama_lab`,
                                                            `jadwal`.`hari`,
                                                            `jadwal`.`tanggal`,
                                                            `jadwal`.`jam`,
                                                            `jadwal`.`tahun_ajar`,
                                                            `jadwal`.`keterangan`,
                                                            `jadwal`.`sesi`,
                                                            `jadwal`.`status`,
                                                            `user`.`nama`
                                                          FROM
                                                            `dosen`
                                                            INNER JOIN `jadwal` ON `jadwal`.`nip` = `dosen`.`nip`
                                                            INNER JOIN `user` ON `jadwal`.`nim` = `user`.`nim`
                                                            INNER JOIN `lab` ON `jadwal`.`kd_lab` = `lab`.`kd_lab`
                                                            INNER JOIN `matkul` ON `jadwal`.`kd_matkul` = `matkul`.`kd_matkul` 
                                                            WHERE hari='$hari' && tanggal='$date' || tanggal='0000-00-00'
                                                            "; 
                                                        $sql = mysqli_query($connect, $query);
                                                        if(mysqli_num_rows($sql) == 0) { 
                                                            echo '<tr><td colspan = 6 >Tidak ada data !</td></tr>';
                                                        }else 
                                                            {
                                                            $no = 1;
                                                            while($data = mysqli_fetch_assoc($sql)){
                                                                if($hari == $data['hari']){
                                                                    if($data['tanggal'] == nul || $tanggal){
                                                                        if($data['sesi'] != null){
                                                                            echo "<tr class='gradeA'>";
                                                                            echo "<td><center><b>".$no."</b></td>";
                                                                            echo "<td><center>".$data['nama_matkul']."</center></td>";
                                                                            echo "<td><center>".$data['nama_dosen']."</td>";
                                                                            echo "<td><center>".$data['kelompok']."</td>";
                                                                            echo "<td><center>".$data['nama_lab']."</td>";
                                                                            echo "<td><center>".$data['tanggal']."</td>";
                                                                            echo "<td><center>".$data['hari']."</td>";
                                                                            echo "<td><center>".$data['jam']."</td>";
                                                                            echo "<td><center>".$data['tahun_ajar']."</td>";
                                                                            echo "<td><center>".$data['keterangan']."</td>";
                                                                            echo "<td><center>".$data['sesi']."</td>";
                                                                            echo "<td><center>".$data['status']."</td>";
                                                                            echo "<td><center>".$data['nama']."</td>";
                                                                            $no++;
                                                                        }
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    ?>
                                                </table>
                    <!-- </div> -->
                                                    </div>
                </div>
            </div>
        </div>
    </div>

