   
      <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
                <a href="../../index.php">
                  Book Library
                </a>
              </li>
              <li>
                <a href="#">
                  Liên Hệ
                </a>
              </li>

            </ul>
          </nav>
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, Library Book <i class="material-icons">favorite</i> <strong>bởi</strong> TT-BT-AV</a>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="<?php echo $level.js_path_AD."core/jquery.min.js"?>"></script>
  <script src="<?php echo $level.js_path_AD."core/popper.min.js"?>"></script>
  <script src="<?php echo $level.js_path_AD."core/bootstrap-material-design.min.js"?>"></script>
  <script src="<?php echo $level.js_path_AD."plugins/perfect-scrollbar.jquery.min.js"?>"></script>
  <!-- Plugin for the momentJs  -->
  <script src="<?php echo $level.js_path_AD."plugins/moment.min.js"?>"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="<?php echo $level.js_path_AD."plugins/sweetalert2.js"?>"></script>
  <!-- Forms Validations Plugin -->
  <script src="<?php echo $level.js_path_AD."plugins/jquery.validate.min.js"?>"></script>
  <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="<?php echo $level.js_path_AD."plugins/jquery.bootstrap-wizard.js"?>"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="<?php echo $level.js_path_AD."plugins/bootstrap-selectpicker.js"?>"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="<?php echo $level.js_path_AD."plugins/bootstrap-datetimepicker.min.js"?>"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src="<?php echo $level.js_path_AD."plugins/jquery.dataTables.min.js"?>"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="<?php echo $level.js_path_AD."plugins/bootstrap-tagsinput.js"?>"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="<?php echo $level.js_path_AD."plugins/jasny-bootstrap.min.js"?>"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="<?php echo $level.js_path_AD."plugins/fullcalendar.min.js"?>"></script>

  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="<?php echo $level.js_path_AD."plugins/nouislider.min.js"?>"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- Library for adding dinamically elements -->
  <script src="<?php echo $level.js_path_AD."plugins/arrive.min.js"?>"></script>

  <!-- Chartist JS -->
  <script src="<?php echo $level.js_path_AD."plugins/chartist.min.js"?>"></script>
  <!--  Notifications Plugin    -->
  <script src="<?php echo $level.js_path_AD."plugins/bootstrap-notify.js"?>"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?php echo $level.js_path_AD."material-dashboard.js?v=2.1.2"?>" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="<?php echo $level.demo_path_AD."demo/demo.js"?>"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();

    });
  </script>
</body>
