<html lang="es">

<head>
    <title>Sistema para anteproyecto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./view/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@3.1.0/dist/css/multi-select-tag.css">
</head>

<body>
    <form action="./control/verEstudiantes.php" name="" method="POST">
        <div id="form-anteproyecto">
            <h1>Formualción Anteproyecto</h1>
            <?php if (isset($message)) {
                echo "<p>" . $message . "</p>";
            } ?>
            <div class="input-group">
                <span class="input-group-text">Nombre completo</span>
                <input type="text" placeholder="Nombres" name="nombre" aria-label="First name" class="form-control" require>
                <input type="text" placeholder="Apellido" name="apellido" aria-label="Last name" class="form-control">
            </div>
            <br>
            <div class="input-group">
                <span class="input-group-text">Nombre completo</span>
                <input type="text" placeholder="Nombres" name="nombre2" aria-label="First name" class="form-control" require>
                <input type="text" placeholder="Apellido" name="apellido2" aria-label="Last name" class="form-control" require>
            </div>
            <br>
            <div class="form-floating">
                <select class="form-select" name="carrera" aria-label="Default select example">
                    <option selected>Proyecto curricular</option>
                    <option value="Tecnologia en sistematizacion de datos">Tecnologia en sistematizacion de datos</option>
                    <option value="Tecnología en Mecánica Industrial">Tecnología en Mecánica Industrial </option>
                    <option value="Tecnología en Electricidad de Media y Baja Tensión">Tecnología en Electricidad de Media y Baja Tensión</option>
                    <option value="Tecnología en Electrónica Industrial">Tecnología en Electrónica Industrial</option>

                </select>
            </div>
            <br>
            <div class="form-group">
                <input type="text" class="form-control" name="codigo" id="inputCodigo" placeholder="Codigo Estudiantil" require>
            </div>
            <br>
            <div class="form-group">
                <input type="text" class="form-control" name="codigo2" id="inputCodigo" placeholder="Codigo Estudiantil">
            </div>
            <br>
            <div class="form-group">
                <input type="text" class="form-control" name="telefono" id="inputCodigo" placeholder="Numero de Telefono" require>
            </div>
            <br>
            <div class="form-group">
                <input type="text" class="form-control" name="telefono2" id="inputCodigo" placeholder="Numero de Telefono">
            </div>
            <br>
            <div class="form-group">
                <input type="text" class="form-control" name="correo" id="inputCodigo" placeholder="Correo electronico" require>
            </div>
            <br>
            <div class="form-group">
                <input type="text" class="form-control" name="correo2" id="inputCodigo" placeholder="Correo electronico">
            </div>
            <br>
            <h4>Informacion de proyecto</h4>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="tipo_proyecto" id="Monografia" value="1">
                <label class="form-check-label" for="Monografia">
                    Monografia
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="tipo_proyecto" id="Pasantias" value="2">
                <label class="form-check-label" for="flexRadioDefault2">
                    Pasantias
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="tipo_proyecto" id="Monografia" value="3">
                <label class="form-check-label" for="Monografia">
                    Investigación e Innovación
                </label>
            </div>
            <div class="form-group row">
                <label for="staticDate" class="col-sm-4 col-form-label">Fecha de Elaboracion:</label>
                <div class="col-sm-8">
                    <?php
                    date_default_timezone_set("America/Bogota");
                    $fechaHora = date("Y-m-d");
                    $dia = date('d');
                    $mes = date('m');
                    $ano = date('Y');
                    ?>
                    <input type="date" class="form-control" value="<?php echo $ano . '-' . $mes . '-' . $dia; ?>" readonly>
                </div>
            </div>
            <br>
            <div>
                <label for="entregable">Entregables especificos</label>
                <br>
                <br>
                <select name="entregable" id="entregable" multiple>
                    <option value="1">Programa inédito</option>
                    <option value="2">Diagrama de arquitectura</option>
                    <option value="3">Documento técnico</option>
                    <option value="5">Documento de arquitectura</option>
                    <option value="6">Modelo logico de datos</option>
                    <option value="7">Modelo físico de datos</option>
                    <option value="8">API</option>
                    <option value="9">Front</option>
                    <option value="10">Middleware</option>
                    <option value="11">Backend</option>
                    <option value="12">Diseño de red</option>
                    <option value="13">Diseño eléctrico</option>
                    <option value="14">Planeación estratégica</option>
                    <option value="15">Simulador educativo</option>
                    <option value="16">Ambiente virtual de aprendizaje</option>
                    <option value="17">Objeto virtual de aprendizaje</option>
                    <option value="18">Aplicación móvil</option>
                    <option value="19">Sistema experto</option>
                    <option value="20">Red Neuronal</option>
                    <option value="21">Ecuación resuelta</option>
                    <option value="22">Ecuación planteada</option>
                    <option value="23">Ecuación interpretada</option>
                    <option value="24">Cronograma</option>
                    <option value="25">Plan de negocios</option>
                    <option value="26">Análisis de riesgos</option>
                    <option value="27">Implementación de una norma</option>
                    <option value="28">Plan de calidad</option>
                    <option value="29">Plan de mejoramiento</option>
                    <option value="30">Metodología</option>
                    <option value="31">Plan de integración</option>
                    <option value="32">Plan de seguridad</option>
                    <option value="33">Juego</option>
                    <option value="34">Aplicación de escritorio</option>
                    <option value="35">Aplicación multiplataforma</option>
                    <option value="36">Diseño de navegación</option>
                    <option value="37">CRM Custom Relation Management.</option>
                    <option value="38">Metodología para implementar norma</option>
                    <option value="39">Implementación de tecnología BlockChain</option>
                    <option value="40">Implementación de Tecnología IoT</option>
                    <option value="41">Diseño de dispositivos electrónicos</option>
                    <option value="42">Estudio de viabilidad</option>
                    <option value="43">Modelo de optimización</option>
                    <option value="44">Aplicación Web</option>
                    <option value="45">Aplicación empotrada</option>
                    <option value="46">Modelo arquitectónico</option>
                    <option value="47">Sistema de gestión de conocimiento</option>
                    <option value="48">Patrón de diseño</option>
                    <option value="49">Propuesta de investigación</option>
                    <option value="50">Red implementada</option>
                    <option value="51">Simulación</option>
                    <option value="52">Modelado matemático</option>
                    <option value="53">Plan de gestión</option>
                    <option value="54">Análisis de un sistema</option>
                    <option value="55">Diseño de un sistema</option>
                    <option value="56">Estado financiero</option>
                    <option value="57">Servicios Cloud</option>
                    <option value="58">Sistema telemétrico</option>
                    <option value="59">Bodega de datos</option>
                    <option value="60">Minería de datos</option>
                    <option value="61">Desarrollo de una técnica</option>
                    <option value="62">Evaluación de una técnica</option>
                    <option value="63">Aplicación de una técnica</option>
                    <option value="64">Análisis de requisitos</option>
                    <option value="65">Pruebas de usabilidad y/o accesibilidad</option>
                    <option value="66">Pruebas de rendimiento y/o seguridad</option>
                    <option value="67">Artículo</option>
                    <option value="68">Análisis de tecnologías</option>
                    <option value="69">Prospectiva tecnológica</option>
                    <option value="70">Recomendación de arquitecturas</option>
                    <option value="71">Recomendaciones de tecnologías</option>
                    <option value="72">Recomendación de metodologías</option>
                    <option value="73">Recomendación de dispositivos</option>
                    <option value="74">Análisis de eficiencia de un algoritmo</option>
                    <option value="75">Recomendación de líneas de investigación</option>
                    <option value="76">Recomendación de contenidos temáticos a los syllabus</option>
                </select>
            </div>
            <br>
            <div class="form-group">
                <input type="text" class="form-control" name="director" id="inputDirector" placeholder="Director interno" require>
                <br>
                <input type="text" class="form-control" name="IdDirector" id="inputIdDirector" placeholder="Codigo de Direactor" require>
                <br>
                <input type="text" class="form-control" name="duracion" id="inputDuracion" placeholder="Duración esimada de proyecto" require>
                <br>
                <input type="text" class="form-control" name="nombreProyecto" id="inputNombreProyecto" placeholder="Nombre del proyecto" require>
                <br>
                <label for="DescripcionProyecto" class="form-label">Descripcion del Proyecto</label>
                <textarea name="descripcionProyecto" class="form-control" id="DescripcionProyecto" rows="3"></textarea>
            </div>
            <br>
            <button class="btn btn-primary" name="submit" type="submit">Submit form</button>

        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@3.1.0/dist/js/multi-select-tag.js"></script>
    <script>
        new MultiSelectTag('entregable')
    </script>
</body>

</html>