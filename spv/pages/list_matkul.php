<?php

// Fetch all users data from database
$result = mysql_query("SELECT * FROM matkul ORDER BY kd_matkul DESC ");
?>


<div id="content-wrapper">
<div class="container-fluid">
    <div id="content-wrapper">
        <div class="container-fluid">
            <div class="card-body">
                <div class="table-responsive">
                    <div style="height:20px;"></div>
                        <!-- <div class="well" style="margin:auto; padding:auto; width:90%;"> -->
                            <span style="font-size:30px; color:black"><center><strong>DATA DOSEN</strong></center></span><br><br>
                                <div class="span">
                                    <span><a href="index.php?page=add_matkul" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span>Tambah</a></span>
                                </div>
                                        <div class="span">
                                            <div class="buttons"><a href="<?php $_SERVER['PHP_SELF']; ?>" class="btn btn-medium btn-success"><i class="icon-refresh"></i> Refresh</a></div>
                                        </div>
                                            <div style="height:60px;"></div>
                                                <table class="table table-hover" id="example" width="90%">

                                                    <thead>
                                                        <tr>
                                                        <th><center>No.</center></th> 
                                                        <th><center>Kode Mata Kuliah</center></th>
                                                        <th><center>Nama Mata Kuliah</center></th>
                                                        <th><center>Option</center></th>
                                                        </tr>
                                                    </thead>


                                                    <?php
                                                        $query = "SELECT
                                                        *
                                                    FROM
                                                        `matkul`
                                                        "; 
                                                        $sql = mysqli_query($connect, $query);
                                                        $no = 1; 
                                                        while($data = mysqli_fetch_array($sql)){

                                                            echo "<tr class='gradeA'>";
                                                            echo "<td><center><b>".$no."</b></td>";
                                                            echo "<td><center>".$data['kd_matkul']."</td>";
                                                            echo "<td><center>".$data['nama_matkul']."</center></td>";
                                                        $kd=$data['kd_matkul'];
                                                            echo "<td><center>
                                                                <a class='btn btn-info'  href='index.php?page=matkul&&matkul=ubah&&kd_matkul=$kd'>Ubah</a>
                                                                ";?>
                                                                <a class="btn btn-danger" href="javascript: if (confirm('Apakah anda yakin ingin menghapus data?')) { window.location.href='proses/matkul_proses.php?id=<?php echo $data['kd_matkul']?>&&act=del' } else { void('') }; ">Hapus</a>
                                                                
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
</div>
</div>