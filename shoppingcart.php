<?php
while(list($arr, $value)=each($_COOKIE)){
    if(isset($_COOKIE[$arr])&&
            is_array($_COOKIE[$arr])){
                if($flag){
                    $flag=false;
                    $color="#FF99CC";
                }else{
                    $flag=true;
                    $color="#99FFC";
                }
                echo"<tr bgcolor='".$color."'><td>";
                echo"<a href='delete.php?Id=".$arr."'>";
                echo"刪除</a></td>";
                $price=0;
                $quantity=0;
                while(list($name, $value)=each($_COOKIE[$arr])){
                    echo"<td>".$value."</td>"
                    if($name=="Price") $price=$value;
                    if($name=="Quantity") $quantity=$value;
                }
                $total+-$price*$quantity;
                echo"</tr>";
            }
}
?>