<?php
//header('Content-type: application/json');
include 'Donnees.inc.php';
include_once("outils.php");
if(isset($_GET["isPath"])&&isset($_GET['path']))
{
    $path=explode("/",$_GET["path"]);
    $count=count($path);
    if($count>=2){
    $children=getChild($path[$count-1],$path[$count-2],$Hierarchie);
    if($children)
      echo json_encode($children);
      
    }else
    {
    echo  json_encode(array ("success"=>$children));
    }
}else if(isset($_GET["id"]))
{

  echo json_encode(array("success"=>getRecetteById($_GET["id"],$Recettes)));
}
else if(isset($_POST["alimentName"]))
{

}
?>