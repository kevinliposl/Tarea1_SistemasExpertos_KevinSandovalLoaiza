<?php
include_once 'public/header.php';
?>

<h1>Tarea1 Sistemas Expertos 2018</h1>
<main>
    <input id="tab1" type="radio" name="tabs" checked>
    <label for="tab1">Asi Aprendo</label>

    <input id="tab2" type="radio" name="tabs">
    <label for="tab2">Adivinar Recinto de Origen</label>

    <input id="tab3" type="radio" name="tabs">
    <label for="tab3">Adivinar Sexo del Estudiante</label>

    <input id="tab4" type="radio" name="tabs">
    <label for="tab4">Adivinar Estilo de Aprendizaje</label>

    <input id="tab5" type="radio" name="tabs">
    <label for="tab5">Determinar Tipo de Profesor</label>

    <input id="tab6" type="radio" name="tabs">
    <label for="tab6">Clasificaci&oacute;n de Redes</label>

    <section id="content1">
        <?php
        include_once 'asiAprendoView.php';
        ?>
    </section>
    <section id="content2">
        <?php
        include_once 'recintoOrigenView.php';
        ?>
    </section>
    <section id="content3">
        <?php
        include_once 'sexoEstudianteView.php';
        ?>
    </section>
    <section id="content4">
        <?php
        include_once 'estiloAprendizajeView.php';
        ?>
    </section>
    <section id="content5">
        <?php
        include_once 'tipoProfesorView.php';
        ?>
    </section>
    <section id="content6">
        <?php
        include_once 'clasificacionRedesView.php';
        ?>
    </section>
</main>

<?php
include_once 'public/footer.php';