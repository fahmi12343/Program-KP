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
                            <span style="font-size:30px; color:black"><center><strong>DATA JADWAL</strong></center></span><br><br>
                                <div class="span">
                                    <span><a href="index.php?page=add_jadwal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span>Tambah</a></span>
                                </div>
                                        <div class="span">
                                            <div class="buttons"><a href="<?php $_SERVER['PHP_SELF']; ?>" class="btn btn-medium btn-success"><i class="icon-refresh"></i> Refresh</a></div>
                                        </div>
                                            <div style="height:60px;"></div>
                                                <table class="table table-hover" id="example" width="100%" >

                                                    <thead>
                                                        <tr>
                                                        <th><center>No.</center></th>
                                                        <th><center>Nama Matkul</center></th>
                                                        <th><center>Nama Dosen</center></th>
                                                        <th><center>Kelompok</center></th>
                                                        <th><center>Lab</center></th>
                                                        <th><center>Hari</center></th>
                                                        <th><center>Jam</center></th>
                                                        <th><center>Tahun Ajar</center></th>
                                                        <th><center>Keterangan</center></th>
                                                        <th><center>Sesi</center></th>
                                                        <th><center>Status</center></th>
                                                        <th><center>Penginput</center></th>
                                                        <th><center>Option</center></th>
                                                        </tr>
                                                    </thead>


                                                    <?php
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
                                                        "; 
                                                        $sql = mysqli_query($connect, $query);
                                                        $no = 1; 
                                                        while($data = mysqli_fetch_array($sql)){

                                                            echo "<tr class='gradeA'>";
                                                            echo "<td><center><b>".$no."</b></td>";
                                                            echo "<td><center>".$data['nama_matkul']."</center></td>";
                                                            echo "<td><center>".$data['nama_dosen']."</td>";
                                                            echo "<td><center>".$data['kelompok']."</td>";
                                                            echo "<td><center>".$data['nama_lab']."</td>";
                                                            echo "<td><center>".$data['hari']."</td>";
                                                            echo "<td><center>".$data['jam']."</td>";
                                                            echo "<td><center>".$data['tahun_ajar']."</td>";
                                                            echo "<td><center>".$data['keterangan']."</td>";
                                                            echo "<td><center>".$data['sesi']."</td>";
                                                            echo "<td><center>".$data['status']."</td>";
                                                            echo "<td><center>".$data['nama']."</td>";
                                                        $kd=$data['kd_jadwal'];
                                                            echo "<td><center>
                                                                <a class='btn btn-info'  href='index.php?page=jadwal&&jadwal=ubah&&kd_jadwal=$kd'>Ubah</a>
                                                                ";?>
                                                                <a class="btn btn-danger" href="javascript: if (confirm('Apakah anda yakin ingin menghapus data?')) { window.location.href='proses/jadwal_proses.php?id=<?php echo $data['kd_jadwal']?>&&act=del' } else { void('') }; ">Hapus</a>
                                                                
                                                                </td>
                                                                
                                                        <?php
                                                        
                                                            echo "</tr>";
                                                        $no++;  
                                                    }
                                                    ?>
                                                </table>
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </div>

