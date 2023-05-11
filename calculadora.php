<!DOCTYPE html>
<html>
    <head>
        <title> Calculadora </title>
    </head>
    <body>
        <center>
            <h1>Operaciones</h1>
            <form method="POST" id="my_form"></form>
            <table>
                <tr>
                    <td>
                        <input type="number" name="a" form="my_form">
                    </td>
                </tr>
                <tr>
                    <td>
                        <select name="operador" id="operador" form="my_form">
                            <option value="suma">+</option>
                            <option value="resta">-</option>
                            <option value="multiplicacion">*</option>
                            <option value="division">/</option>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="number" name="b" form="my_form">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" form="my_form">
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php
                            if($_POST){
                                $a = $_POST["a"];
                                $b = $_POST["b"];
                                $operador = $_POST["operador"];
                                if($operador == 'suma'){
                                    $c = $a + $b;
                                    echo $c;
                                } else if($operador == 'resta'){
                                    $c = $a - $b;
                                    echo $c;
                                }else if($operador == 'multiplicacion'){
                                    $c = $a * $b;
                                    echo $c;
                                } else {
                                    $c = $a / $b;
                                    echo $c;
                                }
                            }   
                        ?>
                    </td>
                </tr>
        </center>
    </body>
</html>