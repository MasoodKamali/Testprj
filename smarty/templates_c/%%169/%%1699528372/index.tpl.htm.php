<?php /* Smarty version 2.6.0, created on 2015-12-16 20:18:03
         compiled from smarty/templates/index.tpl.htm */ ?>
<!DOCTYPE html>
<!--[if IE 7]>					<html class="ie7 no-js" lang="fa">     <![endif]-->
<!--[if lte IE 8]>              <html class="ie8 no-js" lang="fa">     <![endif]-->
<!--[if IE 9]>					<html class="ie9 no-js" lang="fa">     <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="not-ie no-js" lang="fa">  <!--<![endif]-->
<head>	
	<meta charset="utf-8">
	
	<title><?php if ($this->_tpl_vars['titel']):  echo $this->_tpl_vars['titel'];  else: ?>سایت تست<?php endif; ?></title>	
 
	<link rel="stylesheet" href="css/skeleton.css" media="screen" />
	<link rel="stylesheet" href="css/style.css" media="screen" />	
	
    <!--[if lt IE 9]>
    	<script src="js/selectivizr-and-extra-selectors.min.js"></script>
    <![endif]-->  
    
     <!-- JQUERY KENBURN SLIDER  -->	   	
</head>
<body class="color-1 h-style-1 text-1">	
	<!-- - - - - - - - - - - - - - Header - - - - - - - - - - - - - - - - -->	
	<header id="header">		
		<div class="container">			
			<!-- - - - - - - - - - - - Logo - - - - - - - - - - - - - -->				
			<a href="index.php" id="logo">
				<h1>Test</h1>
			</a><!--/ #logo-->				
			<!-- - - - - - - - - - - end Logo - - - - - - - - - - - - -->			
			<div class="clear"></div>
		</div><!--/ .container-->		
	</header><!--/ #header-->	
	<!-- - - - - - - - - - - - - - end Header - - - - - - - - - - - - - - - - -->	
	<?php if ($this->_tpl_vars['titel'] != null): ?>
     <section class="page-header">		
	  <div class="container">			
		<h1><?php echo $this->_tpl_vars['titel']; ?>
</h1>			
	  </div>		
	</section>
    <section class="main container sbr clearfix">        
      <div class="breadcrumbs">
		<a title="خانه" href="index.php">خانه</a>
		<span><?php echo $this->_tpl_vars['titel']; ?>
</span>
	  </div>
    <?php endif; ?>
    <!--                           شروع tpl-->     
    <?php if ($this->_tpl_vars['show_template'] == 'showproduct'): ?>  
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['dir'])."/showproduct.tpl.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>                       
	<?php else: ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['dir'])."/home.tpl.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>  
	<?php endif; ?>       
		<!-- - - - - - - - - - - - - - - Footer - - - - - - - - - - - - - - - - -->	
	</section>   
	<footer id="footer">		
		<div class="container  clearfix">			
			<div class="four columns">					
				<div class="widget widget_contacts">					
					<div class="vcard">
						<span class="contact street-address">مسعود کمالی</span>						
						<span class="contact email">ایمیل: masoodkamali0@gmail.com</span>						
					</div><!--/ .vcard-->					
				</div><!--/ .widget-->	
			</div><!--/ .four-->			
		</div><!--/ .container-->		
	</footer><!--/ #footer-->	
	<!-- - - - - - - - - - - - - - end Footer - - - - - - - - - - - - - - - -->	
	
	<!-- - - - - - - - - - - - - Bottom Footer - - - - - - - - - - - - - - -->	
	
	<footer id="bottom-footer" class="clearfix">
		
		<div class="container">
			
			<div class="copyright">Copyright SMKSMK.ir·  ThemeMakers  آ·  All rights reserved</div>
			
		</div><!--/ .container-->
		
	</footer><!--/ #bottom-footer-->
	
	<!-- - - - - - - - - - - - - end Bottom Footer - - - - - - - - - - - - - -->
    <!--[if lt IE 9]>
	<script src="js/selectivizr-and-extra-selectors.min.js"></script>
     <![endif]-->     
    <script src="js/custom.js"></script>
</body>
</html>