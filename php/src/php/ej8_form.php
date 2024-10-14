<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Alta Llibre</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $module = htmlspecialchars($_POST['module']);
            $publisher = htmlspecialchars($_POST['publisher']);
            $price = htmlspecialchars($_POST['price']);
            $pages = htmlspecialchars($_POST['pages']);
            $status = htmlspecialchars($_POST['status']);
            $comments = htmlspecialchars($_POST['comments']);
            $photo = $_FILES['photo'];

            echo "<h2>Formulari enviat</h2>";
            echo "<p>Mòdul: $module</p>";
            echo "<p>Editorial: $publisher</p>";
            echo "<p>Preu: $price</p>";
            echo "<p>Pàgines: $pages</p>";
            echo "<p>Estat: $status</p>";
            echo "<p>Comentaris: $comments</p>";
            echo "<p>Foto: $photo</p>";


        }else{
        ?>
            <form action="newbook.php" method="post" enctype="multipart/form-data">
                <div>
                    <label for="module">Mòdul:</label>
                    <select id="module" name="module">
                        <!-- Opcions del mòdul aquí -->
                        <?php
                            //===ARRAY CON LOS MODULOS DE LOS LIBROS===
                            $modulos =  array("DIW", "DWES", "DWEC", "DAW", "Ingles");
                            echo "<option value=''></option>";
                            //====ESCRIBIR LAS OPCIONES DEL MODULO===
                            foreach($modulos as $modulo){
                                echo "<option value='$modulo'>$modulo</option>";
                            }
                        ?>

                    </select>
                        
                    <!--===APARTADO DE ESCRIBIR ERRORES===-->
                    <span class="error"><!-- Missatge d'error per al mòdul aquí --></span>
                </div>
                <!--===========================-->
                <div>
                    <label for="publisher">Editorial:</label>
                    <input type="text" id="publisher" name="publisher" value="">
                        
                    <!--===APARTADO DE ESCRIBIR ERRORES===-->
                    <span class="error"><!-- Missatge d'error per a l'editorial aquí --></span>
                </div>
                <!--===========================-->
                <div>
                    <label for="price">Preu:</label>
                    <input type="text" id="price" name="price" value="">
                        
                    <!--===APARTADO DE ESCRIBIR ERRORES===-->
                    <span class="error"><!-- Missatge d'error per al preu aquí --></span>
                </div>
                <!--===========================-->
                <div>
                    <label for="pages">Pàgines:</label>
                    <input type="text" id="pages" name="pages" value="">
                        
                    <!--===APARTADO DE ESCRIBIR ERRORES===-->
                    <span class="error"><!-- Missatge d'error per a les pàgines aquí --></span>
                </div>
                <!--===========================-->
                <div>
                    <label for="status">Estat:</label><br>
                    <input type="radio" name="status" value=" " checked/>  <br />
                        <?php
                            //===ARRAY CON LOS ESTADOS DE LOS LIBROS=== 
                            $status = array("nuevo", "poco_gastado", "bastante_gastado", "muy_gastado");
                        
                            //====ESCRIBIR LAS OPCIONES DEL ESTADO===
                            foreach($status as $estado){
                                $texto = match ($estado) {
                                    "nuevo" => "Nuevo",
                                    "poco_gastado" => "Poco gastado",
                                    "bastante_gastado" => "Bastante gastado",
                                    "muy_gastado" => "Muy gastado",
                                    default => " "
                                };
                            
                                echo "<input type='radio' name='status' value='$estado'>$texto<br>";
                            }
                        ?>

                    <!--===APARTADO DE ESCRIBIR ERRORES===-->
                    <span class="error"><!-- Missatge d'error per a l'estat aquí --></span>
                </div>
                <!---------------------------->
                <div>
                    <label for="photo">Foto:</label>
                    <input type="file" id="photo" name="photo">
                </div>
                <!---------------------------->
                <div>
                    <label for="comments">Comentaris:</label><br>
                    <textarea id="comments" name="comments"></textarea>
                </div>
                <!---------------------------->
                <div>
                    <button type="submit">Donar d'alta</button>
                </div>
            </form>
        <?php
        }
    ?>
</body>
</html>

