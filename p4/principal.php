<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Tabla</title>
        <link type="text/css" rel="stylesheet" media="screen" href="form.css" />
    </head>
    <body>
        <header id="encabezado">
            <h1>Tabla de multiplicar</h1>
        </header>
        <section>
            <article>
            <form method="POST" action="tabla.php" name="frmingreso" id="frmingreso" class="formulario">
                <h3>
                    Ingrese un numero entero:
                </h3>
                <ul>
                    <li class="campo">
                        <label for="txtnumero">Numero: </label>
                        <input type="text" name="txtnumero" id="txtnumero" maxlength="3" placeholder="Ej. 5" required="required" /><br />
                        <span id="numbersOnly">Ingrese numeros enteros</span>
                    </li>
                    <li class="campo">
                        <input type="submit" name="enviar" value="Mostrar" class="button" />&nbsp;
                        <input type="reset" name="limpiar" class="button" />
                    </li>
                </ul>
            </form>
            </article>
        </section>
    </body>
</html>
