<?php
//koneksi

include "../../koneksi/koneksi.php";

$idSesi = $_GET['idsesi'];
$hari = date('l');
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
WHERE hari='$hari' && sesi='$idSesi' 
"; 

$sql = mysqli_query($connect,$query);


while($row = mysqli_fetch_array($sql)){
    
    $nama_matkul = $row['nama_matkul'];
    $nama_dosen = $row['nama_dosen'];
    $kelompok = $row['kelompok'];
    $nama_lab = $row['nama_lab'];
    $tanggal = $row['tanggal'];
    $hari = $row['hari'];
    $jam = $row['jam'];
    $tahun_ajar = $row['tahun_ajar'];
    $keterangan = $row['keterangan'];
    $sesi = $row['sesi'];
    $status = $row['status'];
    $nama = $row['nama'];

    $array[] = array( 
        
                        "nama_matkul"=>$nama_matkul,
                        "nama_dosen"=>$nama_dosen,
                        "kelompok"=>$kelompok,
                        "nama_lab"=>$nama_lab,
                        "tanggal"=>$tanggal,
                        "hari"=>$hari,
                        "jam"=>$jam,
                        "tahun_ajar"=>$tahun_ajar,
                        "keterangan"=>$keterangan,
                        "sesi"=>$sesi,
                        "status"=>$status,
                        "nama"=>$nama
    );
    
}

echo json_encode($array);
?>