<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Buscador con paginador codeIgniter</title>
<style type="text/css">
    body{
        background-color: #111;
    }
    #buscador{
       width: 500px;
       background-color: #333;
       color: #fff;
       padding: 20px;
       margin: 100px 0px 0px 350px;

    }
    #buscador input[type=text]{
        padding: 10px; 
        background-color: indianred;
        color: #fff;
        font-weight: bold;
        border-radius: 4px;
        width: 250px; 
        margin-left: 30px;
    }
    #buscador input[type=submit]{
        padding: 10px; 
        background-color: sandybrown;
        color: #222;
        border-radius: 4px;
        width: 150px
    }
    #buscador span{
        color: #fff; 
        font-weight: bold; 
        font-size: 14px;
        text-align: center;
    }
</style>
</head>
<body>
    
    <div id="buscador">
    <span><?php echo validation_errors(); ?></span>
    <form method="post" action="vista.php">
    <input type="text" name="buscador" size="70" >
    <input type="submit" value="BUSCAR">
</form>
    </div>
</body>
</html>