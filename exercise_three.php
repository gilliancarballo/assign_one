<head>
    <h3>Finding GCD</h3>

<form action="" method="post">
    Input the first number: <br><br><input type="type" name="num3" value="" ><br>
    Input the second number: <br><br><input type="type" name="num4" value="" ><br>
    <input type="submit" name="Submit" value=" Submit " >

</form>
</head>
<?php
 if (isset ($_POST['Submit']))
 {
     $num3 = $_POST['num3'];
     $num4 = $_POST['num4'];
     $min = ($num3 < $num4) ? $num3 : $num4;
     for($i=1;$i<=$min;$i++)
     {
         if ($num3%$i==0 && $num4%$i==0)
         {
             $gcd = $i;
             
         }
         
     }
     echo "The GCD is ".$gcd;  
 }
?>