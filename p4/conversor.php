<html lang="es">
    <head>
        <meta charset="utf-8"
        <title>Convertir entre monedas</title>
    </head>
    <body>
        <header id="boarname">
        </header>
        
        <?php 
            $conversion = array("aDolares","aQuetzal","aLempira","aCordova","aColon");
            $precios = array(500,750,1000,1500,750,12000);
            function aDolares($dato) {
                return sprintf("%02.2f",$dato*0.11425);
            }
            function aQuetzal($dato) {
                return sprintf("%02.2f",$dato*0.87214);
            }
            function aLempira($dato) {
                return sprintf("%02.2f",$dato*2.14132);
            }
            function aCordova($dato) {
                return sprintf("02.2f",$dato*2.60470);
            }
            function aColon($dato) {
                return sprintf("02.2f",$dato*58.1205);
            }
        
        echo "<section>
            <article>
                <table class=\"column-options\">
                    <thead>
                        <tr>
                            <th>Colones (sv)</th>
                            <th>Dolares (sv)</th>
                            <th>Quetzales (gt)</th>
                            <th>Lempiras (ho)</th>
                            <th>Cordovas(ni)</th>
                            <th>Colones (cr)</th>
                        </tr>
                    </thead>";
                    
                        for($i=0;$i<sizeof($precios);$i++){
                            if($i%2 == 0){
                                echo "\t<tr>\n";
                            }else{
                                echo "\t<tr class=\"odd\">\n";
                            }
                            echo "\t\t<td>\t\t&cent; ".$precios[$i] . "\t\t</td>\n\t\t";
                            for($j=0; $j<sizeof($conversion); $j++):
                                $resultado = $conversion[$j];
                                switch ($resultado):
                                    case "aDolares":
                                        $signo = "$";
                                        break;
                                    case "aQuetzal":
                                        $signo = "Q";
                                        break;
                                    case "aLempira":
                                        $signo = "L$";
                                        break;
                                    case "aCordova":
                                        $signo = "C$";
                                        break;
                                    case "aColon":
                                        $signo = "&Cent;";
                                        break;
                                        endswitch;
                                        echo "<td>\t\t$signo".number_format($resultado($precios[$i]),3,".",",")."\t\t</td>\n\t";
                                        endfor;
                            echo "\t</tr>\n";
                        }
                   ?>
                </table>
            </article>
        </section>
    </body>
</html>
