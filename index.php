<?php            
       require ('configs/config.php');
       //*****************************��� ����� ������� ���� ��� � �������� ����� ����� 
       require (DIR_SMARTY.'Smarty.class.php');	  
	   require (DIR_DATABASE.'mysql.php');
       require (DIR_DATABASE.'sql_infosazman.php');
       $smarty=new Smarty;//��� ������ ����� ����Ԑ� ���� ��� html
       require (DIR_LIBRARY.'jalali.php');
       require (DIR_LIBRARY.'information.php');      
	   $smarty->compile_dir=DIR_TEMPLATE_C;	  	   
	   $smarty->assign('dir',DIR_TEMPLATE);  	           
       $smarty->display(DIR_TEMPLATE.'/index.tpl.htm'); 
?>