<html>
    <head>
        <title>Operators in PHP</title>
    </head>
    <body>
        <?php
        echo "Operators in PHP<br>";
        // Arithmetic Operators
        $a=10;
        $b=20;
        echo "a+b=".($a+$b)."<br>";
        echo"a-b=".($a-$b)."<br>";
        echo"a*b=".($a*$b)."<br>";
        echo"a/b=".($a/$b)."<br>";
        echo"a%b=".($a%$b)."<br>";
        // Assignment Operators
        $x=50;
        echo "x=".$x."<br>";
        //Realationa Operators
        echo "a==b:".($a==$b)."<br>";
        echo "a!=b:".($a!=$b)."<br>";
        echo "a>b:".($a>$b)."<br>";
        echo "a<b:".($a<$b)."<br>";
        echo "a>=b:".($a>=$b)."<br>";
        echo "a<=b:".($a<=$b)."<br>";
        //Logical Operators
        $p=true;
        $q=false;
        echo "p and q:".($p and $q)."<br>";
        echo "p or q:".($p or $q)."<br>";
        echo "p xor q:".($p xor $q)."<br>";
        echo "not p:".(!$p)."<br>";
        echo "not q:".(!$q)."<br>";
        //String Operators
        $str1="Hello ";
        $str2="World!";
        echo $str1.$str2."<br>";
        echo $str1.=$str2."<br>";
        //Array Operators
        
        ?>
        </body>
</html>