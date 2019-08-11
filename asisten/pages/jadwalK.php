
<div class="widget-content">
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title" align="center">
                    </div>
          
                    <!--include-->
                    <?php     
                        if(isset($_GET['jadwal'])){
                            switch($_GET['jadwal']){
                                case 'data'  : include 'pages/list_jadwalK.php'; break;
                                case 'tambah'  : include 'pages/add_jadwalK.php'; break;

                                default : include 'pages/list_jadwalK.php';
                            }
                        }else{
                            include 'pages/list_jadwalK.php';
                        } 
                    ?>  
                    <!--include-->

                </div>
            </div>
        </div>
    </div>
</div>
        
