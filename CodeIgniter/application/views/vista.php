<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Busqueda Full Search</title>
<body>
    <h1>
        Busqueda Full Search
    </h1>
    <?php
        
        echo form_open('controlador/querySphinx',array('id' => 'query'));
        echo form_input(array('name'=>'query','id'=>'search-input','type'=>'text', 'size'=> '70',' maxlength'=>'50','placeholder'=>'Ingrese busqueda'));
        echo form_button(array('id'=>'search-btn','type'=>'submit','name'=>'search-btn')); 
        echo form_close(); 
	?>
</body>     


</html>