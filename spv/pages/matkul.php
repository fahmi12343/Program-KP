
<div class="widget-content">
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title" align="center">
                    </div>
          
                    <!--include-->
                    <?php     
                        if(isset($_GET['matkul'])){
                            switch($_GET['matkul']){
                                case 'data'  : include 'pages/list_matkul.php'; break;
                                case 'ubah'  : include 'pages/update_matkul.php'; break;
                                case 'tambah'  : include 'pages/add_matkul.php'; break;

                                default : include 'pages/list_matkul.php';
                            }
                        }else{
                            include 'pages/list_matkul.php';
                        } 
                    ?>  
                    <!--include-->

                </div>
            </div>
        </div>
    </div>
</div>
        
