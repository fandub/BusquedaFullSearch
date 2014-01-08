<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Busqueda Full Search</title>
    </head>
    <style type="text/css">
        #buscador input[type=text]{
            padding: 10px; 
            color: black;
            font-weight: bold;
            border-radius: 40px;
            width: 520px; 
            text-align: center;
            margin: auto;
            display:block;
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
            echo form_open('busqueda/query', array('id' => 'query'));
            echo form_input(array('name' => 'query', 'id' => 'search-input', 'type' => 'text', 'size' => '70', ' maxlength' => '50', 'placeholder' => 'Ingrese busqueda'));
            echo form_button(array('id' => 'search-btn', 'type' => 'submit', 'name' => 'search-btn'));
            echo form_close();
            ?>
    </body>     
    <br></br>
    <br></br>
    <br></br>
    <br></br>
    <br></br>
    <br></br>
    <br></br>
    <center>Unidad de Informatica</center>
    <center>UTEM 2014</center>
</html>