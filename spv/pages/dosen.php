
<div class="widget-content">
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title" align="center">
                    </div>
          
                    <!--include-->
                    <?php     
                        if(isset($_GET['dosen'])){
                            switch($_GET['dosen']){
                                case 'data'  : include 'pages/list_dosen.php'; break;
                                case 'ubah'  : include 'pages/update_dosen.php'; break;
                                case 'tambah'  : include 'pages/add_dosen.php'; break;

                                default : include 'pages/list_dosen.php';
                            }
                        }else{
                            include 'pages/list_dosen.php';
                        } 
                    ?>  
                    <!--include-->

                </div>
            </div>
        </div>
    </div>
</div>
        
