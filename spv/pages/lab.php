
<div class="widget-content">
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title" align="center">
                    </div>
          
                    <!--include-->
                    <?php     
                        if(isset($_GET['lab'])){
                            switch($_GET['lab']){
                                case 'data'  : include 'pages/list_lab.php'; break;
                                case 'ubah'  : include 'pages/update_lab.php'; break;
                                case 'tambah'  : include 'pages/add_lab.php'; break;

                                default : include 'pages/list_lab.php';
                            }
                        }else{
                            include 'pages/list_lab.php';
                        } 
                    ?>  
                    <!--include-->

                </div>
            </div>
        </div>
    </div>
</div>
        
