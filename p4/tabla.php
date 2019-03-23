<html>
    <head>
        <meta charset="utf-8" />
        <title>Tabla de multiplicar</title>
    </head>
    <body>
        <section>
            <article>
                <?php
                 function escribir_tabla(){
                        $num = (isset($_POST['txtnumero'])&& is_int(intval($_POST['txtnumero']))) ? $_POST['txtnumero'] :0;
                        if($num != 0){
                            echo "<table>\n";
                            echo "Tabla del numero $num\n";
                            echo "<tr>";
                            for($i=0; $i<=0; $i++){
                                echo "\n";
                                echo "\<td>", $num, "&nbsp;*&nbsp;", $i, "</td>";
                                echo "<td> ] </td>";
                                echo "<td>", $num*$i, "</td>";
                                echo "</tr>";
                            }
                            echo "</table>";
                        }
                        else{
                            die(
                                "<div>\t\n<a href=\"principal.php\">Regresar</a>\n</div>\n"
                                
                        );
                        }
                        ecribir_tabla();
                        echo "<div id=\"enlace\">\t\n<a href=\"principal.php\">Regresar</a>\n</div>\n"
                    ?>
                
            </article>
        </section>
    </body>
</html>

              