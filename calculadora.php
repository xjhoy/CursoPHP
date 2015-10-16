<!DOCTYPE html>
<html>
    <head>
        <title>Calculadora - Tienda Stitch</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
	<link href='http://fonts.googleapis.com/css?family=Rock+Salt' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <div class="container espacio-arriba">
            <table class="tabla-cal">
                <tr>
                    <td colspan="4"><input type="text" id="Calcs"></td>
                </tr>
                <tr>
                    <td><button class="button">1</button></td>
                    <td><button class="button">2</button></td>
                    <td><button class="button">3</button></td>
                    <td><button class="button">+</button></td>
                </tr>
                <tr>
                    <td><button class="button">4</button></td>
                    <td><button class="button">5</button></td>
                    <td><button class="button">6</button></td>
                    <td><button class="button">-</button></td>
                </tr>
                <tr>
                    <td><button class="button">7</button></td>
                    <td><button class="button">8</button></td>
                    <td><button class="button">9</button></td>
                    <td><button class="button">/</button></td>
                </tr>
                <tr>
                    <td><button class="button">0</button></td>
                    <td><button class="button">(</button></td>
                    <td><button class="button">)</button></td>
                    <td><button class="button">*</button></td>
                </tr>
                <tr>
                    <td colspan="2"><button id="Calculate">Calculate</button></td>
                    <td colspan="2"><button id="Clear">Clear</button></td>
                </tr>
            </table>
        </div>
    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script>
        $(document).ready(function(){
            $(".button").click(function(){
                $("#Calcs").val($("#Calcs").val()+$(this).html());
            });
            $("#Calculate").click(function(){
                $("#Calcs").val(eval($("#Calcs").val()));
            });
            $("#Clear").click(function(){
                $("#Calcs").val("");
            });
            $("#Calcs").keydown(function(e){
                if(e.keyCode==13){
                    $("#Calculate").trigger("click");
                }
            })
        });
    </script>
    </body>
</html>


