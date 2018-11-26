<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include 'data/Donnees.inc.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    </head>
    <body>
        <div class="container">
            <div class="row">
                 
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="header btn btn-success">Aliment</div>
                    <ul class="list-group">
                        <?php
                        $sscat=$Hierarchie["Aliment"]["sous-categorie"];
                        foreach ($sscat as $key=>$val)
                            echo "<li  class='list-group-item'><a href=''>".$val."</a>";
                        ?>
                    </ul>
                     
                </div> 
            </div>
        </div>
        <h1>Aliments</h1>
        <form method="post" action="VerificationFormulaire.php" >
            <fieldset>
                <legend>Informations personnelles</legend>
                Pfze:
                <input name="aliments" list="pays" />
                <datalist id ="aliments">
                    <option value="aa"/>
                    <option value="bb"/>
                </datalist>
            </fieldset>
        </form>
    </body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>
