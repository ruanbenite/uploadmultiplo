<pre>
<?php
if(isset($_FILES['arquivo'])){
    echo 'teste';
   if(count($_FILES['arquivo']['tmp_name']) >0) {
       for($q=0;$q<count($_FILES['arquivo']['tmp_name']);$q++){
           $nomedoarquivo = md5($_FILES['arquivo']['tmp_name'][$q].time().rand(0,999));
           move_uploaded_file($_FILES['arquivo']['tmp_name'][$q], 'arquivos/'.$nomedoarquivo);
       }
   }
}
?>
</pre>
<form method="POST" enctype="multipart/form-data">
    <h2>Arquivos:<h2/><br/>
     
    <input type="file" name="arquivo[]" multiple/> <br/><br/>
    <div>
    <input type="submit" value="Enviar Arquivos"/>  
    </div>
    </form>

<pre> 
<?php
if(isset($_FILES['arquivo'])){
 //   for($cont=0;$cont<=count($_FILES['arquivo']['tmp_name']); $cont++){
 //       echo  $_FILES['arquivo']['tmp_name'][$cont];
 //   }
    print_r($_FILES);
}
$max = ini_get('post_max_size');

echo $max.'<br/>';
if(isset($_SERVER['CONTENT_LENGTH'])){
    $server = $_SERVER['CONTENT_LENGTH'];
    echo $server;
}
?>
</pre>