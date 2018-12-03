var chemin=Array();
chemin.push("Aliment");
function getPath(aliment)
{    
    
    var path=$("input[type='hidden']").attr("value")+"/"+aliment;
    $.ajax({
        type:"GET",
        url:"service.php",
        dataType:"json",
        data:"isPath=true&path="+path,
    
    }).done(function(data){
             if(data["success"].length==1)
                    getRecetteByAliment(aliment);
        getPath_success(data)
        if(aliment!="Aliment"&&chemin.indexOf(aliment)==-1){
            chemin.push(aliment);
            $("input[type='hidden']").attr("value",$("input[type='hidden']").attr("value")+"/"+aliment);
        }
            
        
        
    });
    
}
function getRecette(id)
{
 $.ajax({
     url:"service.php",
     type:"GET",
     dataType:"json",
     data:"id="+id,
    
 })
 .done(function(data){
     getRecetteById_success(data);
 });
}
function getRecetteByAliment(name)
{
    $.ajax({
        url:"service.php",
        type:"POST",
        data:"ingredient="+name,
        dataType:"json"
    })
    .done(function(data){
        alert(data);
    });
}

//event success
function getPath_success(data)
{
    if(typeof(data["success"])=="string")
       {
          // getRecetteByAliment(data["success"]);
          alert(data["success"]);
           return;
       }
    if(Object.keys(data).length>0)
        $(".hierarchie").empty();
    
    d=data["success"];
    for(var key in d){
        $(".hierarchie") .append("<li class='list-group-item' ><a class='btn btn-default'>"+d[key]+"</a>"); 
        //alert(data[i]);
    }
    $(function(){load();})
}
function getRecetteById_success(data)
{
  if(data["success"]!="undenifined")
  {
      var d=data["success"];
      $(".middle").empty();
      var middle=document.querySelector(".middle");
      for(var key in data["success"])
      {
         var div=document.createElement("div");
         div.classList.add("panel");
         div.classList.add("panel-primary");
         var header=document.createElement("div");
         header.classList.add("panel-heading");
         var panelBody=document.createElement("div");
         panelBody.classList.add("panel-body");
         panelBody.classList.add("row");
         div.appendChild(header);
         div.appendChild(panelBody);
       // $(".middle").append("<div><span>Titre</span>:"+d[key]["titre"]+"</div>");
         var src="data/Photos/"+d[key]["titre"]+".jpg".replace(" ","_");
         var image= document.createElement("img");
         image.setAttribute("width","50");
         image.setAttribute("src",src);
        //image.classList.add("media-object");
         var containeImg=document.createElement('div');
         containeImg.classList.add("col-lg-1");
         containeImg.appendChild(image);
         containeImg.classList.add("push-rigth");
         panelBody.appendChild(containeImg);
         var prepa=document.createElement("div");
         //prepa.insertAdjacentHTML(1,);
         prepa.textContent=d[key]["preparation"];
         panelBody.appendChild(prepa);
         var ingredient=d[key]["ingredients"].split("|");
         var ul=document.createElement("ul");
         ul.classList.add("col-lg-11");

         panelBody.appendChild(ul);
       // var balIngr=$("<ul><span class='list-group'>Ingredient :<span></ul>")
        for(var i=0;i<ingredient.length;i++)
        {
           // balIngr.append("<li>"+ingredient[i]+"</li>");
           var li=document.createElement("li");
           // li.append(span);
           li.appendChild(document.createTextNode(ingredient[i]));
           ul.appendChild(li);

        }
        var separator=document.createElement("li");
        separator.classList.add("btn");
        separator.classList.add("btn-primary");
        separator.setAttribute("data","separator");
        ul.appendChild(separator);
        //$(".middle").append(balIngr);
        middle.append(div);
        
      }
  }
    
}
//////////////////////////////








$(function()
{
 load();
// getPath("Aliment")
 getRecette(-1);
});







function load()
{
    updateChemin();
    var children=$(".hierarchie a");
    $.each(children,function(index)
    {
       // alert(t);
   $(this).click(function(){
       //alert(getPath($(".path").text()+"/"+$(this).text()));
       
       getPath($(this).text());
       
      
   });
    });
}
function updateChemin()
{
    $("ol").empty();
    for(var i=0;i<chemin.length;i++){
       $("ol").append('<li class="breadcrumb-item ">'+chemin[i]+'</li>');
    }
}

