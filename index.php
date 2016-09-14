<pre>
<?php
if(isset($_FILES['arquivo'])){
   if(count($_FILES['arquivo']['tmp_name']) >0) {
       for($q=0;$q<count($_FILES['arquivo']['tmp_name']);$q++){
           
       }
   }
}
?>
</pre>

<form action="action" method="POST" enctype="multipart/form-data">
    arquivos:<br/>
    <input type="file" name="arquivo[]" multiple/> <br/><br/>
    <input type="submit" value="Enviar Arquivos"/>
</form>