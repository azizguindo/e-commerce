<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            include 'Donnees.inc.php';
            $super_categorie=[];
            foreach ($Hierarchie as $key => $value) {
               if($key == "Aliment"){
                   foreach ($value["sous-categorie"] as $value1 ){
                       $super_categorie[] = $value1;
                    }
                    $categorie[Aliment]=$super_categorie;
                      
               }
            }
            
            foreach ($Hierarchie as $key => $value) {
                foreach ($super_categorie as $value1) {
                   if($key == $value1){
                       $sous_categorie=[];
                       if(!empty($value["sous-categorie"])){
                            foreach ($value["sous-categorie"] as $value2 ){
                            $sous_categorie[]=$value2;
                            }
                       }
                       $categorie2[$key] = $sous_categorie;
                    }
                }
            }
            

            foreach ($Hierarchie as $key => $value) {
                foreach ($categorie2 as $key1 => $value1) {
                    foreach ($value1 as $key2 => $value3) {
                       if($key == $value3){
                            $sous_sous_categorie=[];
                            if(!empty($value["sous-categorie"])){
                                 foreach ($value["sous-categorie"] as $value2 ){
                                     $sous_sous_categorie[] =$value2;
                                 }
                            }
                            $categorie3[$key] = $sous_sous_categorie;
                         }
                }  
            }
            }
            
            print_r($categorie2);
            echo '</br>';
            echo '</br>';
            echo '</br>';
            function getHierarchie($nom,$data){
                $chemin = array_search($nom, $data);
                //foreach ($data as $key=>$value){
                    echo $chemin;
                //}  
            }
            
            getHierarchie("Melon Vert",$categorie3);
        ?>
        <h1>Aliments</h1>
    </body>
</html>
