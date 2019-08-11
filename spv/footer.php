<!-- /main -->
<div class="extra">
  <div class="extra-inner">
    <div class="container">
      <div class="row">
                    <div class="span3">
                        <h3> Social Media </h3><br>
                          <h4>
                            <ul>
                              <li class=""><a title="" href="https://www.facebook.com/"><i class="icon icon-facebook-sign"></i> <span class="text"> Facebook</span></a></li>
                            </ul>
                          </h4>
                    </div>
                    <!-- /span3 -->

                    <!-- /span3 -->
                    <div class="span3">
                        <h3> Social Media </h3><br>
                          <h4>
                            <ul>
                            <li class=""><a title="" href="https://twitter.com/"><i class="icon icon-twitter-sign"></i> <span class="text"> Twiter</span></a></li>
                            </ul>
                          </h4>
                    </div>
                    <!-- /span3 -->
                    <div class="span3">
                        <h3> Social Media </h3><br>
                          <h4>
                            <ul>
                            <li class=""><a title="" href="https://www.instagram.com/labictubl/"><i class="icon icon-instagram"></i> <span class="text"> Instagram</span></a></li>
                            </ul>
                          </h4>
                    </div>
                    <!-- /span3 -->
                    <!-- /span3 -->
                    <div class="span3">
                        <h3> WebSite </h3><br>
                          <h4>
                            <ul>
                            <li class=""><a title="" href="http://labict.budiluhur.ac.id/"><i class="icon icon-globe "></i> <span class="text"> WebSite</span></a></li>
                            </ul>
                          </h4>
                    </div>
                    <!-- /span3 -->
                </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /extra-inner --> 
</div>
<!-- /extra -->
<div class="footer">
  <div class="footer-inner">
    <div class="container">
      <div class="row">
        <div class="span12"> &copy; Copyright 2019 - 2020. Sistem Jadwal LAB ICT. </div>
        <!-- /span12 --> 
      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /footer-inner --> 
</div>
<!-- /footer --> 
<!-- Le javascript
================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script src="../assets/js/jquery-1.7.2.min.js"></script> 
<script src="../assets/js/excanvas.min.js"></script>
<script src="../assets/js/chart.min.js" type="text/javascript"></script>
<script src="../assets/js/bootstrap.js"></script>
<script src="../assets/datatables/jquery.dataTables.js"></script>
<script src="../assets/datatables/dataTables.bootstrap4.js"></script>

<script src="../assets/js/base.js"></script> 

<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>

<script>
	$(document).ready(function() {
    $('#example').DataTable();
} );
  </script>
  
</body>
</html>