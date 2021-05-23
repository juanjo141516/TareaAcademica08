<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Formulario email</title>
</head>
<body>
    <form action="email.php" method="POST">
    <div class="divContenedor">
        <label for="labelNombre" class="labelForm" id="labelNombre">Tu nombre :</label>
        <input type="text" placeholder="Ingrese su nombre" class="inputForm" id="textoNombre" name="textoNombre" required>
    </div>

    <div class="divContenedor">
        <label for="labelNombre" class="labelForm" id="labelEmail">Tu email :</label>
        <input type="text" placeholder="Destinatario" class="inputForm" id="emailDestino" name="emailDestino" required>
    </div>
 
    <div class="divContenedor">
        <label for="labelNombre" class="labelForm" id="labelAsunto">Asunto :</label>
        <input type="text" placeholder="Escriba el asunto" class="inputForm" id="asunto" name="asunto" required>
    </div>

    <div class="divContenedor" id="divMensaje">
        <label for="labelNombre" class="labelForm" id="labelMensaje">Mensaje :</label>
        <textarea class="inputForm" id="textoMensaje" name="textoMensaje" required></textarea>
    </div>
    <div class="divContenedor" id="divBoton">
        <button type="submit">Enviar mensaje</button>
    </div>
    </form>
</body>
</html>