<?php
	// echo $this->load->view("home/slider", '', TRUE);
	// echo $this->load->view("home/about", '', TRUE);
	// echo $this->load->view("home/blog", '', TRUE);
	// echo $this->load->view("home/testimonials", '', TRUE);
	// echo $this->load->view("home/specialists", '', TRUE);
	// echo $this->load->view("home/partners", '', TRUE);
?>
<div class="complete-content">  
           
            
            <?php
				echo $this->load->view("home/slider", '', TRUE);

				echo $this->load->view("home/linkers", '', TRUE);

		 		echo $this->load->view("home/why_us", '', TRUE);

				 echo $this->load->view("home/banner", '', TRUE);
 
				 echo $this->load->view("home/services", '', TRUE);
     
				//  echo $this->load->view("home/counter", '', TRUE);
     
				 echo $this->load->view("home/testimonials", '', TRUE);
    
				 echo $this->load->view("home/partners", '', TRUE);
        	?>

       <!-- end of clients -->
</div>
           
         