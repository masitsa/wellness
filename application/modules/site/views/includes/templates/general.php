<!DOCTYPE HTML>
<!--[if gt IE 8]> <html class="ie9" lang="en"> <![endif]-->
<html xmlns="http://www.w3.org/1999/xhtml" class="ihome">
   <?php echo $this->load->view('includes/header', '', TRUE);?>
    <body>
            <div id="loader-overlay"><img src="<?php echo base_url().'assets/themes/iMedica/'?>images/loader.gif" alt="Loading" /></div>              
            <!-- Collect the nav links, forms, and other content for toggling -->
            <?php echo $this->load->view('includes/navigation', '', TRUE);?>
            <!-- /.navbar-collapse -->          
            <?php echo $content; ?>
            <?php echo $this->load->view('includes/footer', '', TRUE);?>
            
        
    <!--JS Inclution-->
    <script type="text/javascript" src="<?php echo base_url().'assets/themes/iMedica/'?>js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/themes/iMedica/'?>js/jquery-ui-1.10.3.custom.min.js"></script>  
    <script type="text/javascript" src="<?php echo base_url().'assets/themes/iMedica/'?>bootstrap-new/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/themes/iMedica/'?>rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/themes/iMedica/'?>rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/themes/iMedica/'?>js/jquery.scrollUp.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/themes/iMedica/'?>js/jquery.sticky.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/themes/iMedica/'?>js/wow.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/themes/iMedica/'?>js/jquery.flexisel.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/themes/iMedica/'?>js/jquery.imedica.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/themes/iMedica/'?>js/custom-imedicajs.min.js"></script>


    <script type='text/javascript'>
        $(window).load(function(){
            $('#loader-overlay').fadeOut(900);
            $("html").css("overflow","visible");
        });
    </script>

    </body>
</html>
