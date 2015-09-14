
<!DOCTYPE HTML>
<!--[if gt IE 8]> <html class="ie9" lang="en"> <![endif]-->
<html xmlns="http://www.w3.org/1999/xhtml">
     <?php echo $this->load->view('includes/header', '', TRUE);?>

<body>

     <?php echo $this->load->view('includes/navigation', '', TRUE);?>
    <!--Mid Content Start-->
    
    
     <section class="complete-content content-footer-space"> 
	<div id="service-version-two">
     <div class="about-intro-wrap pull-left">
     
   		<?php echo $this->load->view('services/includes/sub_header', '', TRUE);?>
     
        <?php echo $content;?>
       </div>
            
        <?php echo $this->load->view('services/includes/banner', '', TRUE);?>  
    	<?php echo $this->load->view('services/includes/testimonials', '', TRUE);?> 
    	<?php echo $this->load->view('home/partners', '', TRUE);?> 

		 
	</div><!--service-version-two-->
  </section>

    
    
<section class="complete-footer">
    
    	<?php echo $this->load->view('includes/footer', '', TRUE);?> 
    </section>
    
  
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

</body>
</html>