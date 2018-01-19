<div class="header-wrap cf">
  	<div class="header">
  		<h1 class="">
			<?php if ($logo): ?>
			  <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
				<img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
			  </a>
			  <?php else: ?>			  
				  <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a>			  		  
			<?php endif; ?>
		</h1>
		<div class="nav">
			<ul class="cf">
				<li><a class="alt" href="#">ABOUT OPEN CHARITY</a></li>
				<li><a class="alt" href="#">THE BLOG</a></li>
				<li class="thin-blue-btn"><a class="sky-color alt" href="#">JOIN US</a></li>
			</ul>
		</div>
	</div>	
</div>
<!--Uncomment next line for allowing login in the theme-->
	  <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
	  <br>
	 <!--<?php print render($page['content']); ?>


  <div id="container" class="cf">  
	<?php if ($page['header']): ?>
		  <div id="header-region">
			<?php print render($page['header']); ?>
		  </div>
	<?php endif; ?>
	<?php if ($action_links): ?><ul class="action-links">	<?php print render($action_links); ?></ul>
	<?php endif; ?>
	<?php print $messages; ?>
	 <?php 
	 // print "<pre>";
	 // print_r($page); 
	 // print "</pre>";
	 ?>	
	<?php if ($page['jumbotron']): ?>		
	<div id="slogan"class="span6">
		<?php print render ($page['jumbotron']); ?>
		<!--<div id="big_text" class="high_text_margin">SHARING IDEAS FOR CHARITIES</div>
		
		<div id="medium_text" class="high_text_margin">Many charities’ goals are similar, as is the functionality we require, but little shared working takes place.</div>
		<div id="small_text" class="high_text_margin">By working together, driving shared areas of interest and influencing open source<br> developments we can bring efficiencies, improve the digital experience for our users, and have great impact.</div>
		<div id="medium_text" class="high_text_margin">Together we can make a bigger diference.</div>-->
		
	</div>
	<?php endif; ?>
  	<div class="span6">
		<?php if ($page['next_event']): ?>
		<div id="next_event">
				<?php print render ($page['next_event']); ?>
		<!--			
		  <div id='next_event_text'>
			  <p class='bold'><span class='sky-color'>Next Event:</span><span class='next_event_date'>June 23rd 2016  18:30 - 21:00</p>
			  <p class='next_event_location'>Cancer Research UK, Angel Building, 407 St John Street, London EC1V 4AD</p>
		  </div>-->
		  <div id='regist_btn'><a href="#">REGISTER</a></div>
		</div>
		<?php endif; ?>
		<!---->
		<?php if ($page['get_invol_group_1'] || $page['get_invol_group_2'] || $page['get_invol_group_3']): ?>
        <div id="get_invo">
          <h2>GET INVOLVED</h2>
			<div id="invo_wrap">				
			   <?php print render($page['get_invol_group_1']); ?>
			   <!--<div id='meetup' class='invo_elem'>				  
				  <img class='img_invol' src="./sites/all/themes/sd/images/meetup.png" alt=""/>
				  <p class='bold'><span class=''>WE DO MEETINGS </span></p>
				  <p>We organise our meetings through the OpenCharity Meetup group</p>
				  <br>
				  <a class="thin-blue-btn sky-color" href="#">MEETUP GROUP</a>
			  </div>-->
			  <?php print render($page['get_invol_group_2']); ?>
			  <!--<div id='slack' class='invo_elem'>				  
				  <img class='img_invol' src="./sites/all/themes/sd/images/slack.png" alt=""/>
				  <p class='bold'><span class=''>WE DO MEETINGS </span></p>
				  <p>We organise our meetings through the OpenCharity</p>
				  <br>
				  <a class="thin-blue-btn sky-color" href="#">SLACK GROUP</a>
			  </div>-->
			  <?php print render($page['get_invol_group_3']); ?>
			  <!--<div id='colla' class='invo_elem'>				  
				  <img class='img_invol' src="./sites/all/themes/sd/images/share.png" alt=""/>
				  <p class='bold'><span class=''>WE DO MEETINGS </span></p>
				  <p>We organise our meetings through the OpenCharity</p>
				  <br>
				  <a class="thin-blue-btn sky-color" href="#">WIKI GROUP</a>
			  </div>-->
			</div>
        </div>
		<?php endif; ?>
		
		<?php if ($page['mission_statement']): ?>
        <div id="our_mission">			
			<div class="margin-bottom-10p">			  
			  <h2 class='bold high_text_margin'>OUR MISSION</h2>
			  <?php print render($page['mission_statement']); ?>
			  <!--<p>Charities and Partners collaborating and sharing open solutions and ideas to create value in the digital space.</p>
			  <p class='bold high_text_margin'>If you are a charity or a supplier, we are ready to welcome you.</p>-->
			</div>
			<?php endif; ?>
			<!---->
			<?php if ($page['miss_elem_1'] || $page['miss_elem_2'] || $page['miss_elem_3']): ?>
			<div id="mission_wrap">
				   <div id='meetup' class='miss_elem '>
						 <?php print render($page['miss_elem_1']); ?>
					  <!--<img class='circle' src="./sites/all/themes/sd/images/bulb-alt.png" alt="" />
					  <div id='' class='white_square'>
						  <p class='bold'><span class='sky-color'>We help charities </span></p>
						  <p>share knowledge and working practice to make the best technology choices.</p>
					  </div>-->
					  <br>
				  </div>
				  <div id='slack' class='miss_elem'>
					  <?php print render($page['miss_elem_2']); ?>
					  <!--<img class='circle' src="./sites/all/themes/sd/images/together-alt.png" alt="" />
					  <div id='' class='white_square'>
						  <p class='bold'><span class='sky-color'>We bring together </span></p>
						  <p>charities and suppliers to the charity sector to share best practices.</p>
					  </div>-->
					  <br>
				  </div>
				  <div id='colla' class='miss_elem'>
					  <?php print render($page['miss_elem_3']); ?>
					  <!--<img class='circle' src="./sites/all/themes/sd/images/encourage-alt.png" alt="" />
					  <div id='' class='white_square'>
						  <p class='bold'><span class='sky-color'>We encourage </span></p>
						  <p>collaboration and innovation for the good of the charity sector.</p>
					  </div>-->
					  <br>					  
				  </div>
			</div>
			<hr/>
			<?php endif; ?>
			
			<?php if ($page['our_mem_logo_1'] || $page['our_mem_logo_2'] || $page['our_mem_logo_3'] || $page['our_mem_logo_4']): ?>			
			<div class="margin-bottom-10p">
			  <h2 class='bold high_text_margin'>OUR MEMBERS</h2>
			  <div class="our_members_wrap">
					 <?php print render($page['our_mem_logo_1']); ?>
					 <?php print render($page['our_mem_logo_2']); ?>
					 <?php print render($page['our_mem_logo_3']); ?>
					 <?php print render($page['our_mem_logo_4']); ?>
					 <?php print render($page['our_mem_logo_5']); ?>
				  <!--<div id='' class='miss_elem'>						  
						  <!---->
						  <!--<img class='' src="./sites/all/themes/sd/images/cancer-research.png" alt="" />					  
						  <br>					  
				  </div>			  
				   <!--<div id='' class='miss_elem'>						  
						  <!--<img class='' src="./sites/all/themes/sd/images/compucorp.png" alt="" />					  
						  <br>					  
				  </div>
				  <div id='' class='miss_elem'>
						  
						  <!--<img class='' src="./sites/all/themes/sd/images/kop.png" alt="" />					  
						  <br>					  
				  </div>
				  <div id='' class='miss_elem'>
						  
						  <!--<img class='' src="./sites/all/themes/sd/images/zing.png" alt="" />					  
						  <br>					  
				  </div>
				  <div id='' class='miss_elem'>
						  
						  <!--<img class='' src="./sites/all/themes/sd/images/comic-relief.png" alt="" />					  
						  <br>					  
				  </div>-->
			  </div>
			</div>			
		</div>
		<?php endif; ?>
		<?php if ($page['blog_entry_1'] || $page['blog_entry_2'] || $page['blog_entry_3'] || $page['blog_entry_4']): ?>
		<div id="blog_wrap">
          <h2>BLOG</h2>
			<div id="blog_entries_wrap">
				 <?php print render($page['blog_entry_1']); ?>
				 <!---->
			   <!--<div class='invo_elem blog_entry'>				  
				  <p class='bold'><span class='sky-color'>Online Donations Special... </span></p>
				  <br>
				  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				  <br>
				  <span class=''>14 Nov 2014 </span>
			  </div>-->
			  <?php print render($page['blog_entry_2']); ?>
			  <!--<div class='invo_elem'>
				  <p class='bold'><span class='sky-color'>Online Donations Special... </span></p>
				  <br>
				  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				  <br>
				  <span class=''>14 Nov 2014 </span>
			  </div>-->
			  <?php print render($page['blog_entry_3']); ?>
			  <!--<div class='invo_elem'>				  
				  <p class='bold'><span class='sky-color'>Online Donations Special... </span></p>
				  <br>
				  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				  <br>
				  <span class=''>14 Nov 2014 </span>
			  </div>-->
			  <?php print render($page['blog_entry_4']); ?>
			  <!--<div id='colla' class='invo_elem'>			  
				  <p class='bold'><span class='sky-color'>Online Donations Special... </span></p>
				  <br>
				  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				  <br>
				  <span class=''>14 Nov 2014 </span>
			  </div>-->
			</div>
        </div>
		<?php endif; ?>
	</div>
  </div> <!--! end of #container -->

  <div class="footer span6">
		<i class="fa fa-facebook" aria-hidden="true"></i>
        This site was built as a collaboration between <span class='sky-color'>Manifesto Digital</span> and <span class='sky-color'>Compucorp</span>
    </div>
	
	 <?php 
	 // print "<pre>";
	 // print_r($page); 
	 // print "</pre>";
	 ?>
	 <?php //var_dump($page); ?>
	 

