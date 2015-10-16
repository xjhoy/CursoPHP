<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script language="JavaScript">

        function habilita(){
            $(".inputText").removeAttr("disabled");
        }

        function deshabilita(){
            $(".inputText").attr("disabled","disabled");
        }

    </script>

</head>
<body>

    <form name='frm'>

        <b>Sexo:</b><br>

        <input type="radio" name="rad" value="M" onclick="deshabilita()">

        Masculino<br>

        <input type="radio" name="rad" value="F" onclick="deshabilita()">

        Femenino<br>

        <input type="radio" name="rad" value="O" onclick="habilita()">

        Otro (Indique cual:

        <input type='text' name='txt1' disabled class='inputText'>

        <input type='text' name='txt2' disabled class='inputText'>

    </form>

    <div class="container">
    <form>  
        <div class="form-group">
          <label for="disabledTextInput">Disabled input</label>
          <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
        </div>
        <div class="form-group">
          <label for="disabledSelect">Disabled select menu</label>
          <select id="disabledSelect" class="form-control">
            <option>Disabled select</option>
          </select>
        </div>
    <fieldset disabled>
        <div class="checkbox">
          <label>
            <input type="checkbox"> Can't check this
          </label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </fieldset>
    </form>
    </div>
    
    
</body>

</html>