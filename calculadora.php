<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link hrel="https://cdn.jsdelivr,net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-">
    <link href="calculadora.css" rel="stylesheet" />
    <script src="https://unpkg.com/sweeetaler/dist/sweetalert.min.js"></script>
    <title>Taller de la calculadora</title>
</head>
<body>
   <div class="container">
        <h1>Calculadora PHP</h1>
        <hr>
        <form method="post">
            <div class="calculadora">
            <label>Número 1</label>
            <input type="number" max=10000 min=0 name="numero1" placeholder="0" required autofocus>
            <label>Número 2</label>
            <input type="number" max="10000" min=0 placeholder="0" name="numero2" required>
            <hr>
            <input type="radio" class="form-check-input" name="opcion" value="sumar" required> sumar
            <input type="radio" class="form-check-input" name="opcion" value="restar" required> restar
            <input type="radio" class="form-check-input" name="opcion" value="multiplicar" required> multiplicar
            <input type="radio" class="form-check-input" name="opcion" value="Division" required> Division
            <input type="radio" class="form-check-input" name="opcion" value="potenciacion" required> potenciación
            <input type="radio" class="form-check-input" name="opcion" value="concatenacion" required> concatenación
            <hr>
            <div class="botones">
            <input type="submit" class="btn btn-success w-25" value="Enviar">
            <input type="reset" class="btn btn-danger w-25" value="Limpiar">
            </div>
            <hr>
            </div>
        </form>
   </div>
   <div class="container">
    <?php
    if ($_POST){
        function Sumar (){
            echo "La suma de los números es: ". ($_POST['numero1']+$_POST['numero2']);
        }
        function Restar (){
            echo "La resta de los numeros es: ". ($_POST['numero1']-$_POST['numero2']);
        }
        function Multiplicar (){
            echo "La multiplicación de los numeros es: ". ($_POST['numero1']*$_POST['numero2']);
        }
        function Division (){
            if ($_POST['numero2']==0)
                $d="Error: division por 0";
            else 
                $d=$_POST['numero1']/$_POST['numero2'];
                echo "La division de los numeros es: ".$d;
        }
        function Potenciacion (){
            echo "La potenciacion de los numeros es: ".(pow($_POST['numero1'],$_POST['numero2']));
        }
        function Concatenacion (){
            echo "La Concatenacion de los numeros es: ".($_POST['numero1'].$_POST['numero2']);
        }
        switch($_POST['opcion']){
            case 'sumar':
                Sumar();
                break;
            case 'restar':
                Restar();
            case 'multiplicar':
                Multiplicar();
                break;
            case 'Division':
                Division();
                break;
            case 'potenciacion': 
                Potenciacion();
                break;
            case 'concatenacion':
                concatenacion();
                break;
            default:
                echo "Error en la opción seleccionada";
                break;
        }
            
    }
    ?>
   </div>
</body>
</html>



