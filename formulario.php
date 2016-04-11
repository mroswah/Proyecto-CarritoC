<html>
<title>POST</title>
<body>
<h2>Formulario de envío con método POST</h2>
<!------Hay que alinear los cuadros de texto a una sola posición, a la derecha de las etiquetas----->
<!------Los acentos no se necesitan en estos archivos, en la máquina virtual están puestos----->

<form action="insert.php" method="POST">
        <p>Nombre: <input type="text" name="nombre" value=""/></p>

        <p>Apellido Paterno: <input type="text" name="apellidop" value=""/></p>

        <p>Apellido Materno: <input type="text" name="apellidom" value=""/></p>

        <p>Crea una contraseña: <input type="password" name="password" value="" /></p>
		<p>Repite tu contraseña: <input type="password" name="verificar" value=""/></p>
        
		<p>Sexo</p>
        <input type="radio" name="sexo" value="hombre" checked="checked"/>Hombre
        <input type="radio" name="sexo" value="mujer"/>Mujer
		
		<p>Telefono: <input type="text" name="telefono" value=""/></p>
		
		<p>Correo Electrónico: <input type="text" name="correo" value=""/></p>
		
		<p>Cuenta Bancaria: <input type="text" name="cuentaB" value=""/></p>
		
		<p>Banco</p>
        <input type="radio" name="banco" value="Banamex" checked="checked"/>Banamex
        <input type="radio" name="banco" value="Bancomer"/>Bancomer
		
		<br />
        <br />
        <input type="submit" value="Enviar" />
</form>
</body>
</html>
