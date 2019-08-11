<!-- menampilkan waktu dengan javascript-->
<script type="text/javascript">
var namaBulanI = new Array( "Januari","Februari","Maret","April","Mei","Juni",
"Juli","Agustus","September","Oktober","November","Desember" );
var namaHariI = new Array( "Kamis","Jumat","Sabtu","Minggu","Senin","Selasa","Rabu" );

function showDate() {
now = new Date();

iTanggalM = now.getDate();
iBulanM = now.getMonth();
iTahunM = now.getYear();
if(iTahunM<1900) { iTahunM += 1900; } // Y2K

iJam=now.getHours();
iMenit=now.getMinutes();
iDetik=now.getSeconds();

hr = Date.UTC(iTahunM,iBulanM,iTanggalM,0,0,0)/1000/60/60/24;

sDate = namaHariI[hr%7]+", "+iTanggalM+" "+namaBulanI[iBulanM]+" "+iTahunM+"<br>";
sDate += (iJam<10?"0"+iJam:iJam)+":"+
(iMenit<10?"0"+iMenit:iMenit)+":"+
(iDetik<10?"0"+iDetik:iDetik);

if(document.all)
{ document.all.clock.innerHTML=sDate; }
else if(document.getElementById)
{ document.getElementById( "clock" ).innerHTML=sDate; }
else { document.write(sDate); }
}

function showIt() {
showDate();
if(document.all||document.getElementById)
{ setInterval("showDate()",1000); }
}
</script>

<!-- end JS-->

<h3 align="center" class="font4" id="clock"> <script>showIt();</script> </font></h3>