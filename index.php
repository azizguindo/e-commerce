<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include 'Donnees.inc.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title></title>
    </head>
    <body>
    <input type="hidden" class="path" value="Aliment"/>
    <div class="container">
         <div class="row" style="margin-left:30%">
                <nav aria-label="breadcrumb " >
                            <ol class="breadcrumb alert alert-primary"  >
                               
                             </ol>
                 </nav>
        </div>

        <div class="row">
        
            <div class="col-lg-3">
                    <ul class="hierarchie list-group">
                        <?php
                        $sscat=$Hierarchie["Aliment"]["sous-categorie"];
                        foreach ($sscat as $key=>$val)
                            echo "<li class='list-group-item' ><a class='btn btn-default'>".$val."</a>";
                        ?>
                    </ul>
            </div>
            
            <div class="col-lg-9 well jumbotron middle pannel-group">
            
            </div>
         <div>
    
    </div>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="data/lib/js/main.js"></script>
</html>
