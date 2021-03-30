<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //Half Pyramid  	
        for ($rows=1; $rows<=5; $rows++)
        {	 
            for($col=1;$col<=$rows;$col++)
            {	  	
                echo " * ";	 	 
            }	  	
            echo "<br/>";   	
        }  
        echo "----------------------------------------------------------";
        echo "<br>";  
        
        //Inverted Half Pyramid 
        for($rows=0;$rows<=5;$rows++)
        {  
            for($col=5-$rows;$col>=1;$col--)
            {  
                echo "* ";  
            }  
            echo "<br>";  
        }   	
        echo "----------------------------------------------------------";
        echo "<br>";  
        
        //Full Pyramid
        for ($rows=1; $rows<=5; $rows++) 	       
        { 	 
            for ($space=5; $space>$rows; $space--)	 
            {	  
                echo "&nbsp";	//adding whitespace  
            }   	
            
            for($col=1;$col<=$rows;$col++)	  
            {	  	
                echo "*";	  
            }
            
            echo "<br/>";	
        }  
        echo "----------------------------------------------------------";
        echo "<br>";
        
        //Inverted Full Pyramid
        for ($rows=0; $rows<=5; $rows++) 	       
        { 	 
            for ($space=0; $space<$rows; $space++)	 
            {	  
                echo "&nbsp";	//adding whitespace  
            }   	
            
            for($col=5-$rows;$col>=1;$col--)	  
            {	  	
                echo "*";	  
            }
            
            echo "<br/>";	
        }  
        echo "----------------------------------------------------------";
        echo "<br>";  
        
        //Hollow Pyramid
        for($rows=1;$rows<=5;$rows++)
        {
            for($space=1;$space<=5-$rows;$space++)
            {
                echo '&nbsp;'; //adding whitespace
            }
            for($col=1;$col<=2*$rows-1;$col++)
            {
                if($col==1||$col==2*$rows-1)
                {
                    echo '*'; //output asterisk
                }
                else
                {
                    echo '&nbsp;'; //output whitespace
                }
            }
            echo '<br>';
        }
        //last row
        for ($i=0; $i<=5; $i++)
        {
            echo "*";
        }
        
        echo '<br>';
        echo "----------------------------------------------------------";
        echo "<br>";
        
        
        //Hollow Inverted half Pyramid
        //first row
        for ($i=0; $i<=5; $i++)
        {
            echo "*";
        }
        echo '<br>';
        for($rows=5; $rows>=1 ; $rows--) { 
            for($col=1;$col<=2*$rows-1;$col++){
                if($col==1||$col==2*$rows-1){
                    echo '*';
                }else{
                    echo '&nbsp;';
                }
            }
            echo '<br>';
        }
        echo "----------------------------------------------------------";
        echo "<br>";
        
        //Fibonacci Series
        $n      = 6; //length of the series 
        $first  = 0;
        $second = 1;
        echo $first.$second;
        for($i=1; $i<=$n-2; $i++)
        {
            $third = $first + $second;
            echo $third;
            $first = $second;
            $second = $third;
            
        }
        echo '<br>';
        echo "----------------------------------------------------------";
        echo "<br>";
        
        //Factorial
        $num        = 5;  
        $factorial  = 1;  
        for ($i=$num; $i>=1; $i--)   
        {   
            if( $i == 1 )
            {
                echo $i.'=' .$factorial;

            }
            else
            {
                echo $i.'*';
                $factorial = $factorial * $i;  
            } 
        }
        echo '<br>';
        echo "----------------------------------------------------------";
        echo "<br>";

        //Prime Numbers
        for ($i=0; $i<=10; $i++)
        {
            if($i % 2 != 0)
            {
                echo $i;
            }
        }
    ?>
</body>
</html>