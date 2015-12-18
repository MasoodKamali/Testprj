<?php	
    class sql_infosazman extends mysql
    {        
        function Show_Product($start,$date)
        {
            $count=0;   
            $result=mysql_query("select id,name,description,price from product left join (SELECT po.product_id,order_date,sum(count*price) as kol FROM products_ordered as po inner join orders on orders.id = po.order_id and orders.order_date>'$date' group by po.product_id) as m on product.id=m.product_id order by kol desc LIMIT $start,20");
            //***************ÊÌÑÈå ËÇÈÊ ˜ÑÏå ˜Ï ÒíÑ ÓÑÚÊÔ ÈíÔÊÑå
            //$result=mysql_query("SELECT *,(SELECT sum(count*price) FROM products_ordered , orders WHERE product_id = p.id AND orders.id = products_ordered.id AND order_date > '$date' group by product_id) as m FROM product as p order by m desc LIMIT $start,20");             
    		if ($result)
    		{ 
    			while($row=mysql_fetch_row($result))
    			   $lstsample[$count++]=$row;                
				return $lstsample;				  
    		}
    		else
   			     $this->err="Show_Product"; 
                 
        }               
    }        		
?>	   
