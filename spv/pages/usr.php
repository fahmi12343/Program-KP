
<div class="widget-content">
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title" align="center">
                    </div>
          
                    <!--include-->
                    <?php     
                        if(isset($_GET['user'])){
                            switch($_GET['user']){
                                case 'data'  : include 'pages/list_usr.php'; break;
                                case 'ubah'  : include 'pages/update_usr.php'; break;
                                case 'tambah'  : include 'pages/add_usr.php'; break;

                                default : include 'pages/list_usr.php';
                            }
                        }else{
                            include 'pages/list_usr.php';
                        } 
                    ?>  
                    <!--include-->

                </div>
            </div>
        </div>
    </div>
</div>
        
