<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Busqueda Full Search</title>
</head>
<style type="text/css">
    #buscador input[type=text]{
        padding: 10px; 
        color: #fff;
        font-weight: bold;
        border-radius: 40px;
        width: 520px; 
        margin-left: 700px;
    }
</style>

<body>
    <h1>
    	<br></br>
    	<br></br>
        <center>Busqueda Full Search</center>
    </h1>
    <div id="buscador">
    	<span><?php echo validation_errors(); ?></span>
    <?php
        
        echo form_open('controlador/querySphinx',array('id' => 'query'));
        echo form_input(array('name'=>'query','id'=>'search-input','type'=>'text', 'size'=> '70',' maxlength'=>'50','placeholder'=>'Ingrese busqueda'));
        echo form_button(array('id'=>'search-btn','type'=>'submit','name'=>'search-btn')); 
        echo form_close(); 
	?>
</body>     


</html>