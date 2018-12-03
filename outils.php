<?php
function getChild($enfant,$pere,$data){
    $estFeuille=false;
    if($enfant=="Aliment")
    {
        return $composant["sous-categorie"];
    }else{
   foreach($data as $aliment=>$composant)
   {
       if($enfant==$aliment and in_array($pere,$composant["super-categorie"]))
       {
           return array("success"=>(isset($composant["sous-categorie"])?$composant["sous-categorie"]:$enfant));
       }
       if($pere==$aliment&&in_array($enfant,$composant["sous-categorie"]))
       {
           $estFeuille=true;
       }
   }
   return $estFeuille;
}
}
function getRecetteById($id,$data)
{
if($id==-1)
{
    return $data;
}
if(count($data)<=$id)
  return "";
else
return $data[$id];
}

?>