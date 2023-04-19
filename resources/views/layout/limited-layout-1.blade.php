<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Nisha - @yield('title')</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
      
        <!-- Font Awesome -->
        <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="dist/css/ionicons.min.css"> 
        <!-- iCheck Bootstrap -->
        <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
       
        <!-- DataTables -->
        <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css"> 
        
        <!-- daterange picker -->
        <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
        <link rel="stylesheet" href="plugins/datepicker/bootstrap-datepicker.min.css">
        
         <!-- jqueryui --> 
        <link rel="stylesheet" href="plugins/jquery-ui/jquery-ui.min.css">
         @stack('stylesheet')
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
        <!-- Theme style -->       
        <link rel="stylesheet" href="dist/css/adminlte.min.css">
        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="dist/css/fonts.googleapis.css">
        <!-- Custom -->
        <link rel="stylesheet" href="dist/css/custom.css">
        @stack('styles')

        <style>
            #gifLoading{
                position: fixed;
                width: 100%;
                height: 100vh;
                background: #fff url('dist/img/ajaxLoading.gif') no-repeat center center;
                background-size: 100px auto;	
                z-index: 99999;
            }

            .overlayLoader{
                display: none;
                position: fixed;
                width: 100%;
                height: 100vh;                
                background: rgba(0,0,0,0.5) url("dist/img/ajaxLoading.gif") no-repeat center center;
                background-size: 100px auto;
                z-index: 99999;
            }
            /* Turn off scrollbar when body element has the loading class */
            body.loading{
                overflow: hidden;   
            }
            /* Make spinner image visible when body element has the loading class */
            body.loading .overlayLoader{
                display: block;
            }
            .chgeUserApp a{
    cursor: pointer;
} 

        </style>
    </head>
     
     <body oncontextmenu="return false" oncopy="return false" onpaste="return false" class="hold-transition sidebar-mini">      
        
        
        <div id="gifLoading"></div>
        <div class="overlayLoader"></div>

        <div class="wrapper">
            @include('common.header')
            @include('common.sidebar')
            @yield('wrapperContent')
        </div>

        <!-- jQuery -->
        <script src="plugins/jquery/jquery-3.6.3.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- InputMask -->
       
        <script src="plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
        <!--date-range-picker--> 
        <script src="plugins/daterangepicker/daterangepicker.js"></script>
        {{-- <script src="plugins/datepicker/bootstrap-datepicker.min.js"></script> --}}
        
        <!-- jqueryui --> 
        <script src="plugins/jquery-ui/jquery-ui.min.js"></script>        
        @stack('src')                
         
        <!-- DataTables -->
        <script src="plugins/datatables/jquery.dataTables.js"></script>
        <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>  
       
        <!-- bs-custom-file-input -->
        <script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
        <!-- overlayScrollbars -->
        <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
        <!-- SweetAlert2 11.0 -->
        <script src="plugins/sweetalert2/sweetalert2.all.min.js"></script> 

         <!-- OPTIONAL SCRIPTS -->
        
<!--        <script src="dist/js/demo.js"></script>
        <script src="dist/js/pages/dashboard3.js"></script>
        -->
        <!-- AdminLTE App -->
        <script src="dist/js/adminlte.min.js"></script> 
        
        <!-- Custom -->
        <!--<script src="dist/js/custom.js"></script>-->
        
        
     
        <script type="text/javascript">
            var preloader = document.getElementById("gifLoading");
            window.addEventListener('load', function () {
                preloader.style.display = 'none';
            });
        
            $(document).ready(function () {
                
          
                

                
                
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                setTimeout(function () {
                    $("div.alert").fadeOut();
                }, 3500);
 
                $('[data-toggle="tooltip"]').tooltip();
                bsCustomFileInput.init();
            


window.onload = disableBackButton();
window.onpageshow = function (evt) {
   if (evt.persisted)
       disableBackButton()
}
window.onunload = function () {
   void(0)
}
function disableBackButton(){
    window.history.forward()
}





            });

           
    $(document).on({
                ajaxStart: function(){
                    $("body").addClass("loading"); 
                 },
                ajaxStop: function () {
                    $("body").removeClass("loading");
                }
            });
            
        </script>  
        @stack('scripts')
    </body>
</html>

