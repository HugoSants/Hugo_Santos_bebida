<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <h1>Bebidas</h1>
</br>
<hr>
    <fieldset>
    <legend><h2>Vinho</h2></legend>
        <table border="1">
            <tr>
            <th>Nome</th>
            <td><input type="text" name="nome" id="idnome"></td>

            </tr>
            <tr>
                <th>Preço</th>
                <td><input type="number" name="preco" id="idpreco"></td>

            </tr>
            <tr>
                <th>Safra</th>
                <td><input type="number" name="safra" id="idsafra"></td>

            </tr>
            <tr>
                <th>Tipo</th>
                <td><input type="text" name="tipo" id="idtipo"></td>

            </tr>
        </table>
        <input type="submit" value="Enviar" name="vinho">
        <?php
        require_once "Vinho.php";

        if (isset($_POST['vinho'])) {
            $nome = $_POST['nome'];
            $preco = $_POST['preco'];
            $safra = $_POST['safra'];
            $tipo = $_POST['tipo'];
        
            $vin = new Vinho($nome, $preco, $safra, $tipo);
            echo $vin->mostrarBebida();
            $res;
            $res = $vin->verificarPreco();
        
            switch ($res){
                case true:
                    echo "Produto em Oferta";
                    break;
                case false:
                    echo "Produto com o 
                    preço normal! ";
                    break;
            }
        }
        ?>
        </fieldset>
</br>

<fieldset>
    <legend><h2>Suco</h2></legend>
        <table border="1">
            <tr>
            <th>Nome</th>
            <td><input type="text" name="nome" id="idnome"></td>

            </tr>
            <tr>
                <th>Preço</th>
                <td><input type="number" name="preco" id="idpreco"></td>

            </tr>
            <tr>
                <th>Sabor</th>
                <td><input type="text" name="sabor" id="idsabor"></td>

            </tr>
            </tr>
        </table>
        <input type="submit" value="Enviar" name="suco">
        <?php
        require_once "Suco.php";

        if (isset($_POST['suco'])) {
            $nome = $_POST['nome'];
            $preco = $_POST['preco'];
            $sabor = $_POST['sabor'];
        
            $suco = new Suco($nome, $preco, $sabor);
            echo $suco->mostrarBebida();
            $res;
            $res = $suco->verificarPreco();
        
            switch ($res){
                case true:
                    echo "</br>Produto em Oferta";
                    break;
                case false:
                    echo "</br>Produto com o 
                    preço normal! ";
                    break;
            }
        }
        ?>

        </fieldset>
</br>

<fieldset>
    <legend><h2>Refrigerante</h2></legend>
        <table border="1">
            <tr>
            <th>Nome</th>
            <td><input type="text" name="nome" id="idnome"></td>

            </tr>
            <tr>
                <th>Preço</th>
                <td><input type="number" name="preco" id="idpreco"></td>

            </tr>
            <tr>
                <th>Retornavel</th>
                <td><input type="number" name="safra" id="idsafra"></td>

            </tr>
        </table>
        <input type="submit" value="Enviar" name="refri">
        <?php
        require_once "Refrigerante.php";

        if (isset($_POST['refri'])) {
            $nome = $_POST['nome'];
            $preco = $_POST['preco'];
            $retorn = $_POST['retorn'];
        
            $re = new Refri($nome, $preco, $retorn);
            echo $re->mostrarBebida();
            $res;
            $res = $re->verificarPreco();
        
            switch ($res){
                case true:
                    echo "</br>Produto em Oferta";
                    break;
                case false:
                    echo "</br>Produto com o 
                    preço normal! ";
                    break;
            }
        }
        ?>

        </fieldset>

    </form>


</body>
</html>