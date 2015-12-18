<?php    
	include ("cfgmysql.ini");
    class mysql
    {
        //**********************variable******************
    	protected $err;
    	//******************************
    	function mysql()
    	{
    		$this->err="not error";
    	}
    	//*********************************
    	function connect()
    	{
    		$con=mysql_connect(DB_HOSTNAME,DB_USERNAME,DB_PASSWORD);
    		$datasource=mysql_select_db(DB_DATABASE,$con);
            $result = mysql_query("SET CHARACTER SET 'utf8';");
            $result = mysql_query("SET SESSION collation_connection = 'utf8_persian_ci';");
    		if (! $con)
    		{    			
    			$this->err="error in bank";               
    		}    
    	}
    	//**************************Error in Open DataBase*************************
    	function error()
    	{
    		return $this->err;
    	}
    	//********************Close Database***********************
    	function close()
    	{
    		mysql_close();
    	}
    }
?>