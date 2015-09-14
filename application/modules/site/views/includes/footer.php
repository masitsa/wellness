<?php

$company_details = $this->site_model->get_contacts();

$popular_query = $this->blog_model->get_popular_posts();

if($popular_query->num_rows() > 0)
{
	$popular_posts = '';
	$count = 0;
	foreach ($popular_query->result() as $row)
	{
		$count++;
		
		if($count < 3)
		{
			$post_id = $row->post_id;
			$post_title = $row->post_title;
			$image = base_url().'assets/images/posts/thumbnail_'.$row->post_image;
			$comments = $this->users_model->count_items('post_comment', 'post_id = '.$post_id);
			$description = $row->post_content;
			$mini_desc = implode(' ', array_slice(explode(' ', $description), 0, 10));
			$created = date('jS M Y',strtotime($row->created));
             $web_name = $this->site_model->create_web_name($post_title);
			
			$popular_posts .= '
            <li><a href="'.site_url().'blog/view-single/'.$web_name.'">'.$post_title.'<br /><span class="event-date">'.$created.'</span></a></li>
				
			';
		}
	}
}

else
{
	$popular_posts = 'There are no posts yet';
}
?>
<div class="complete-footer">
                <footer id="footer">
                
                    <div class="container">
                        <div class="row">
                            <!--Foot widget-->
                            <div class="col-xs-12 col-sm-6 col-md-3 foot-widget">
                            <a href=""><img src="<?php echo base_url().'assets/'?>images/logo.png" alt="" class="img-responsive"></a>
                            <!-- <a href=""><div class="foot-logo col-xs-12 no-pad"></div></a> -->
                            
                            <address class="foot-address">
                                <div class="col-xs-12 no-pad"><i class="icon-globe address-icons"></i>Absolute Wellness & Nutrition Centre <br />General Accident House, 1st Floor, Right Wing</div>
                                <div class="col-xs-12 no-pad"><i class="icon-phone2 address-icons"></i>+254 727 475992 </div>
                                <div class="col-xs-12 no-pad"><i class="icon-file address-icons"></i>+254 731 015231</div>
                                <div class="col-xs-12 no-pad"><i class="icon-mail address-icons"></i>info@absolutewellness.co.ke</div>
                            </address>
                            </div>
                            
                            <!--Foot widget-->
                            <div class="col-xs-12 col-sm-6 col-md-3 recent-post-foot foot-widget">
                                <div class="foot-widget-title">Recent Posts</div>
                                <?php echo $popular_posts;?>
                            </div>
                            
                             <!--Foot widget-->
                            <div class="col-xs-12 col-sm-6 col-md-3 recent-tweet-foot foot-widget">
                                <div class="foot-widget-title">Recent News</div>
                                <ul>
                                    <li>Integer iaculis egestas odio. eget: <b>t.co/RTSoououIdg</b><br /><span class="event-date">7 days ago</span></li>
                                    <li>Integer iaculis egestas odio. eget: <b>t.co/RTSoououIdg</b><br /><span class="event-date">7 days ago</span></li>
                                </ul>
                            </div>
                            
                            <!--Foot widget-->
                            <div class="col-xs-12 col-sm-6 col-md-3 foot-widget">
                                <div class="foot-widget-title">newsletter</div>
                                <p>Enter your email address to receive our newsletters.</p>
                                <div class="news-subscribe"><input type="text" class="news-tb" placeholder="Email Address" /><button class="news-button">Subscribe</button></div>
                                <div class="foot-widget-title">social media</div>
                                <div class="social-wrap">
                                    <ul>
                                    <li><a href="index.html#"><i class="icon-facebook foot-social-icon" id="face-foot" data-toggle="tooltip" data-placement="bottom" title="Facebook"></i></a></li>
                                    <li><a href="index.html#"><i class="icon-social-twitter foot-social-icon" id="tweet-foot" data-toggle="tooltip" data-placement="bottom" title="Twitter"></i></a></li>
                                    <li><a href="index.html#"><i class="icon-google-plus foot-social-icon" id="gplus-foot" data-toggle="tooltip" data-placement="bottom" title="Google+"></i></a></li>
                                    <li><a href="index.html#"><i class="icon-linkedin foot-social-icon" id="link-foot" data-toggle="tooltip" data-placement="bottom" title="Linked in"></i></a></li>
                                    <li><a href="index.html#"><i class="icon-rss foot-social-icon" id="rss-foot" data-toggle="tooltip" data-placement="bottom" title="RSS"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            
                        </div>
                     </div>       
                     
                </footer>
                
                <div class="bottom-footer">
                <div class="container">
                
                    <div class="row">
                        <!--Foot widget-->
                        <div class="col-xs-12 col-sm-12 col-md-12 foot-widget-bottom">
                        <p class="col-xs-12 col-md-5 no-pad">Copyright 2014 Absolute Wellness & Nutrition Centre | All Rights Reserved </p>
                        <ul class="foot-menu col-xs-12 col-md-7 no-pad">
                        <li><a href="<?php echo base_url();?>blog">Blog</a></li>    
                        <li><a href="<?php echo base_url();?>services">Features</a></li>    
                        <li><a href="<?php echo base_url();?>contact-us">Contact</a></li>    
                        <li><a href="<?php echo base_url();?>home">home</a></li>                           
                        
                        </ul>
                        </div>
                    </div>
                </div> 
                </div>
                
                </div>