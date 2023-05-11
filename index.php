<!DOCTYPE html>
<html>
    <head>
        <title> Pit&aacute;goras</title>
    </head>
    <body>
        <center>
            <h1>Teorema de Pit&aacute;goras</h1>
            <h2>A<sup>2</sup> + B<sup>2</sup> = C<sup>2</sup></h2>
        
        <form method="POST" id="my_form"></form>
        <table>
            <tr>
                <th>A</th>
                <td>
                    <?php
                        if($_POST){
                            $a = $_POST["a"];
                            echo $a;
                        }
                    ?>
                    <input type="number" name="a" form="my_form">
                </td>
                <td></td>
              </tr>
              <tr>
                <th>B</th>
                <td>
                    <?php
                        if($_POST){
                            $b = $_POST["b"];
                            echo $b;
                        }
                    ?>
                    <input type="number" name="b" form="my_form">
                </td>
                <td><input type="submit" form="my_form"></td>
              </tr>
              <tr>
                <th>C</th>
                <td> <?php
                    if($_POST){
                        $a = $_POST["a"];
                        $b = $_POST["b"];
                        $c = sqrt(($a * $a) + ($b * $b));
                        echo $c;
                    }
                ?>
                <td>
                <td></td>
              </tr>
        </table>
        </center>
        
        <?php
            if($_POST){
                $a = $_POST["a"];
	            $b = $_POST["b"];
	            $c = sqrt(($a * $a) + ($b * $b));
                if($c > 100){
                    echo "La hipotenusa es mayor a 100";
                }  else{
                    echo "La hipotenusa es menor a 100";
                }
            }
        ?> 
    </body>
</html>