<pre>
<?php
if(isset($_FILES['arquivo'])){
   if(count($_FILES['arquivo']['tmp_name']) >0) {
       for($q=0;$q<count($_FILES['arquivo']['tmp_name']);$q++){
           $nomedoarquivo = md5($_FILES['arquivo']['tmp_name'][$q].time().rand(0,999));
           move_uploaded_file($_FILES['arquivo']['tmp_name'][$q], 'arquivos/'.$nomedoarquivo);
       }
   }
}
?>
</pre>
<script src="js/jquery-3.0.0.min.js" type="text/javascript"></script>
<script src="js/meujs.js" type="text/javascript"></script>
<form method="POST" enctype="multipart/form-data">
    <h2>Arquivos:<h2/><br/>
     
    <input id="arquivo" type="file" name="arquivo[]" multiple  /> <br/><br/>
    <div>
    <input type="submit" value="Enviar Arquivos" name="enviar"/>  
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
$max = ini_get('post_max_size')*1024;


echo "Suporta arquivo do tamanho de ".$max.'<br/><br/>';

if(isset($_SERVER['CONTENT_LENGTH'])){
    $server = ($_SERVER['CONTENT_LENGTH']/1024);
    echo "Arquivo enviado de ".$server.'<br/><br/>';
    $falta = $max-$server;
   
    if($falta >0){
    echo "Ainda cabe mais ". $falta."<br/>";
      echo "Importado com sucesso.";
    }else if($falta <0){
         echo "Arquivo grande, o arquivo suportado eh ". $falta ." menor que o arquivo enviado <br/>";
         echo "Atenção importe novamente o arquivo";
    }
    
}
?>
</pre>