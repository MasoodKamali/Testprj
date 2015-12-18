<?php     
    function Set_date()
    {
       $year=date("Y");
       $mount= date("m")-3;
       $day=date("d");
       if ($mount<=0)
       {
          $mount=$mount+12;
          $year=$year-1;
       } 
       return gregorian_to_jalali($year,$mount,$day); 
    }
    //-----------------------------------------کد مربوط به مشاهده محصولات-----------------	
	if (isset($_REQUEST['showproduct']))
	{	
	    $mysql=new sql_infosazman;
        $mysql->connect();          
         //تبدیل تاریخ میلادی به شمسی                   
        $LstProduct=$mysql->Show_Product(0,Set_date());  //فراخوانی محصولات از بانک اطلاعاتی             
        $mysql->close();         
        $smarty->assign('recno','0'); //کنترل مکان لیست نمایش اطلاعات       
        $smarty->assign('HideBtnPerv','Yes') ;//کنترل ابتدای لیست
	    $smarty->assign('LstProduct',$LstProduct);
        $smarty->assign('titel','محصولات');	
		$smarty->assign('show_template','showproduct');	   
	} 
    //-----------------------------------کد دکمه بعدی در صفحه محصولات----  
    if (isset($_POST['btnnext']))
	{
	    $mysql=new sql_infosazman;
        $mysql->connect();                  
        $LstProduct=$mysql->Show_Product($_POST['recno']+20,Set_date());                  
        $mysql->close(); 
        $smarty->assign('recno',$_POST['recno']+20);       
	    $smarty->assign('LstProduct',$LstProduct);
        if (count($LstProduct)<20) $smarty->assign('HideBtnNext','Yes') ;//کنترل انتهای لیست
        $smarty->assign('titel','محصولات');	
		$smarty->assign('show_template','showproduct');	   
	}   
    //--------------------------------------- کد دکمه قبلی در صفحه محصولات 
    if (isset($_POST['btnperv']))
	{	
	    $recno=$_POST['recno']/20; //کنترل ابتدای لیست 
	    $mysql=new sql_infosazman;
        $mysql->connect();          
        $date=gregorian_to_jalali(date("Y"),(date("m")-3),date("d"));   
        $LstProduct=$mysql->Show_Product($_POST['recno']-20,Set_date());         
        $mysql->close();         
        $smarty->assign('recno',$_POST['recno']-20);//کنترل گشت لیست
	    $smarty->assign('LstProduct',$LstProduct);  
        if ($recno==1) $smarty->assign('HideBtnPerv','Yes') ;//کنترل ابتدای لیست
        $smarty->assign('titel','محصولات');	
		$smarty->assign('show_template','showproduct');	  
	}   
    
?>