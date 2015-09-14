<?php
	$contacts = $this->site_model->get_contacts();
	
	if(count($contacts) > 0)
	{
		$email = $contacts['email'];
		$email2 = $contacts['email'];
		$facebook = $contacts['facebook'];
		$twitter = $contacts['twitter'];
		$linkedin = $contacts['linkedin'];
		$logo = $contacts['logo'];
		$company_name = $contacts['company_name'];
		$phone = $contacts['phone'];
		
		if(!empty($email))
		{
			$email = '<div class="top-number"><p><i class="fa fa-envelope-o"></i> '.$email.'</p></div>';
		}
		
		if(!empty($facebook))
		{
			$twitter = '<li class="pm_tip_static_bottom" title="Twitter"><a href="#" class="fa fa-twitter" target="_blank"></a></li>';
		}
		
		if(!empty($facebook))
		{
			$linkedin = '<li class="pm_tip_static_bottom" title="Linkedin"><a href="#" class="fa fa-linkedin" target="_blank"></a></li>';
		}
		
		if(!empty($facebook))
		{
			$google = '<li class="pm_tip_static_bottom" title="Google Plus"><a href="#" class="fa fa-google-plus" target="_blank"></a></li>';
		}
		
		if(!empty($facebook))
		{
			$facebook = '<li class="pm_tip_static_bottom" title="Facebook"><a href="#" class="fa fa-facebook" target="_blank"></a></li>';
		}
	}
	else
	{
		$email = '';
		$facebook = '';
		$twitter = '';
		$linkedin = '';
		$logo = '';
		$company_name = '';
		$google = '';
	}
?>
<header>
            
            <div class="header-bg">
            
            <div id="search-overlay">
            <div class="container">
                                <div id="close">X</div>
            
                                <input id="hidden-search" type="text" placeholder="Start Typing..." autofocus autocomplete="off"  /> <!--hidden input the user types into-->
                                <input id="display-search" type="text" placeholder="Start Typing..." autofocus autocomplete="off" /> <!--mirrored input that shows the actual input value-->
                            </div></div>
               
                    
                    <!--Topbar-->
                    <div class="topbar-info no-pad">                    
                        <div class="container">                     
                            <div class="social-wrap-head col-md-2 no-pad">
                                <ul>
                                <li><a href="index.html#"><i class="icon-facebook head-social-icon" id="face-head" data-original-title="" title=""></i></a></li>
                                <li><a href="index.html#"><i class="icon-social-twitter head-social-icon" id="tweet-head" data-original-title="" title=""></i></a></li>
                                <li><a href="index.html#"><i class="icon-google-plus head-social-icon" id="gplus-head" data-original-title="" title=""></i></a></li>
                                <li><a href="index.html#"><i class="icon-linkedin head-social-icon" id="link-head" data-original-title="" title=""></i></a></li>
                                <li><a href="index.html#"><i class="icon-rss head-social-icon" id="rss-head" data-original-title="" title=""></i></a></li>
                                </ul>
                            </div>                            
                            <div class="top-info-contact pull-right col-md-6">Call Us Today! +254 727535987  |    info@absolutewellness.co.ke  <div id="search" class="fa fa-search search-head"></div>
                            </div>                      
                        </div>
                    </div><!--Topbar-info-close-->
                    
                    
                    
                    
                    
                    <div id="headerstic">
                    
                    <div class=" top-bar container">
                        <div class="row">
                            <nav class="navbar navbar-default" role="navigation">
                              <div class="container-fluid">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                          
                                  <button type="button" class="navbar-toggle icon-list-ul" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                  </button>
                                  <button type="button" class="navbar-toggle icon-rocket" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                                    <span class="sr-only">Toggle navigation</span>
                                  </button>

                                  <!-- <a href=""><div class="logo"></div></a> -->
                                  <a href=""><img src="<?php echo base_url().'assets/'?>images/logo.png" alt="" class="img-responsive" style="height:61px"></a>

                                </div>
                                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                        <ul class="nav navbar-nav navbar-right">
                                           <?php echo $this->site_model->get_navigation();?>
                                        </ul>
                                    </div>

         
                                <div class="hide-mid collapse navbar-collapse option-drop" id="bs-example-navbar-collapse-2">
                                  
                                  
                                  <ul class="nav navbar-nav navbar-right other-op">
                                    <li><i class="icon-phone2"></i>+91 9028556688</li>
                                    <li><i class="icon-mail"></i><a href="index.html#" class="mail-menu">demo@companyname.com</a></li>
                                    
                                    <li><i class="icon-globe"></i>
                                        <a href="index.html#" class="mail-menu"><i class="icon-facebook"></i></a>
                                        <a href="index.html#" class="mail-menu"><i class="icon-google-plus"></i></a>
                                        <a href="index.html#" class="mail-menu"><i class="icon-linkedin"></i></a>
                                        <a href="index.html#" class="mail-menu"><i class="icon-social-twitter"></i></a>
                                    </li>
                                    <li><i class="icon-search"></i>
                                    <div class="search-wrap"><input type="text" id="search-text" class="search-txt" name="search-text">
                                    <button id="searchbt" name="searchbt" class="icon-search search-bt"></button></div>
                                    </li>
                                    
                                  </ul>
                                </div><!-- /.navbar-collapse -->
                                
                                <div class="hide-mid collapse navbar-collapse cart-drop" id="bs-example-navbar-collapse-3">
                                  
                                  
                                  <ul class="nav navbar-nav navbar-right">
                                    <li><a href="index.html#"><i class="icon-cart"></i>0 item(s) - $0.00</a></li>
                                    <li><a href="index.html#"><i class="icon-user"></i>My Account</a></li>
                                  </ul>
                                </div><!-- /.navbar-collapse -->
                                
                                
                                
                              </div><!-- /.container-fluid -->
                            </nav>
                        </div>    
                    </div><!--Topbar End-->
                    </div>
                    
                    
                    
                    
                    
                    
                    
              </div>
            </header>