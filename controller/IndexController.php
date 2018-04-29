<?php

/**
 * @author <kevin.sandoval@ucr.ac.cr>
 * @version 1.0
 * @copyright (c) 2018, Kevin Sandoval Loaiza b46549
 * @access public
 * @category controller
 * Class IndexController     
 */
class IndexController {

    private $distance;
    private $tmp;

    /**
     * Constructor de clase
     */
    function __construct() {
        $this->view = new View();
        require_once 'model/IndexModel.php';
    }

    /**
     * Accion por defecto de controlador
     */
    function defaultAction() {
        $this->view->show("indexView.php");
    }

    /**
     * Funcion que calcula la distancia entre 2 vectores del mismo tamaño, con sus caracteristicas ordenadas. 
     */
    function distanceEuclidean($arrayA, $arrayB) {
        if (count($arrayA) !== count($arrayB)) {
            return NULL;
        }
        $distance = 0;
        $length = count($arrayA);

        for ($i = 0; $i < $length; $i++) {
            $distance += ($arrayA[$i] - $arrayB[$i]) ** 2;
        }
        return 1 / ( 1 + sqrt((float) $distance));
    }

    /**
     * Funcion que calcula el estilo de aprendizaje
     */
    function calcLearningStyles() {
        $model = new IndexModel();
        $vars = $model->selectAllStyle();
        $arrayA = array($_POST['ca'], $_POST['ec'], $_POST['ea'], $_POST['or']);
        foreach ($vars as $var) {
            $arrayB = array($var['ca'], $var['ec'], $var['ea'], $var['or']);
            $tmp = $this->distanceEuclidean($arrayA, $arrayB);
            if ($tmp > $this->distance) {
                $this->distance = $tmp;
                $this->tmp = $var['name'];
            }
        }
        echo json_encode(array('result' => "Estilo= " . $this->tmp . ". | Distancia= " . $this->distance . "."));
    }

    /**
     * Funcion para adivinar el recinto 
     */
    function calcToGuessTheEnclosure() {
        $model = new IndexModel;
        $vars = $model->selectAllStyleGenderEnclosureAverageStyle();
        $style = strcasecmp($_POST['style'], "DIVERGENTE") != 0 ? (strcasecmp($_POST['style'], "ASIMILADOR") != 0 ? (strcasecmp($_POST['style'], "ACOMODADOR") != 0 ? 4 : 3) : 2) : 1;
        $arrayA = array($style, $_POST['average'], ($_POST['gender'] == "M" ? 1 : 2));
        foreach ($vars as $var) {
            $styletmp = strcasecmp($var['style'], "DIVERGENTE") != 0 ? (strcasecmp($var['style'], "ASIMILADOR") != 0 ? (strcasecmp($var['style'], "ACOMODADOR") != 0 ? 4 : 3) : 2) : 1;
            $arrayB = array($styletmp, $var['average'], $var['gender'] == "M" ? 1 : 2);
            $tmp = $this->distanceEuclidean($arrayA, $arrayB);
            if ($tmp > $this->distance) {
                $this->distance = $tmp;
                $this->tmp = $var['enclosure'];
            }
        }
        echo json_encode(array('result' => "Recinto= " . $this->tmp . ". | Distancia= " . $this->distance . "."));
    }

    /**
     * Funcion para adivinar el Genero
     */
    function calcToGuessGender() {
        $model = new IndexModel;
        $vars = $model->selectAllStyleGenderEnclosureAverageStyle();
        $style = strcasecmp($_POST['style'], "DIVERGENTE") != 0 ? (strcasecmp($_POST['style'], "ASIMILADOR") != 0 ? (strcasecmp($_POST['style'], "ACOMODADOR") != 0 ? 4 : 3) : 2) : 1;
        $arrayA = array($style, $_POST['average'], ($_POST['enclosure'] == "Turrialba" ? 1 : 2));
        foreach ($vars as $var) {
            $styletmp = strcasecmp($var['style'], "DIVERGENTE") != 0 ? (strcasecmp($var['style'], "ASIMILADOR") != 0 ? (strcasecmp($var['style'], "ACOMODADOR") != 0 ? 4 : 3) : 2) : 1;
            $arrayB = array($styletmp, $var['average'], ($var['enclosure'] == "Turrialba" ? 1 : 2));
            $tmp = $this->distanceEuclidean($arrayA, $arrayB);
            if ($tmp > $this->distance) {
                $this->distance = $tmp;
                $this->tmp = $var['gender'];
            }
        }
        echo json_encode(array('result' => "Sexo= " . $this->tmp . ". | Distancia= " . $this->distance . "."));
    }

    /**
     * Funcion para adivinar el estilo de aprendizaje del punto 3
     */
    function calcToGuessLearningStyle() {
        $model = new IndexModel;
        $vars = $model->selectAllStyleGenderEnclosureAverageStyle();
        $arrayA = array($_POST['gender'] == "M" ? 1 : 2, $_POST['average'], ($_POST['enclosure'] == "Turrialba" ? 1 : 2));
        foreach ($vars as $var) {
            $arrayB = array($var['gender'] == "M" ? 1 : 2, $var['average'], ($var['enclosure'] == "Turrialba" ? 1 : 2));
            $tmp = $this->distanceEuclidean($arrayA, $arrayB);
            if ($tmp > $this->distance) {
                $this->distance = $tmp;
                $this->tmp = $var['style'];
            }
        }
        echo json_encode(array('result' => "Estilo= " . $this->tmp . ". | Distancia= " . $this->distance . "."));
    }

    /**
     * Funcion para adivinar el tipo de profesor
     */
    function calcToGuessTypeOfProfessor() {
        $model = new IndexModel;
        $vars = $model->selectAllProfessors();
        $arrayA = $this->transformInputGuessTypeOfProfessor($_POST);
        foreach ($vars as $var) {
            $arrayB = $this->transformInputGuessTypeOfProfessor($var);
            $tmp = $this->distanceEuclidean($arrayA, $arrayB);
            if ($tmp > $this->distance) {
                $this->distance = $tmp;
                $this->tmp = $var['class'];
            }
        }
        echo json_encode(array('result' => "Tipo de profesor= " . $this->tmp . ". | Distancia= " . $this->distance . "."));
    }

    /**
     * Funcion para adivinar la clasificacion de la red
     */
    function calcToGuessClassificationOfNetworks() {
        $model = new IndexModel;
        $vars = $model->selectAllNetworks();
        $arrayA = $this->transformInputGuessClassificationOfNetworks($_POST);
        foreach ($vars as $var) {
            $arrayB = $this->transformInputGuessClassificationOfNetworks($var);
            $tmp = $this->distanceEuclidean($arrayA, $arrayB);
            if ($tmp > $this->distance) {
                $this->distance = $tmp;
                $this->tmp = $var['class'];
            }
        }
        echo json_encode(array('result' => "Clase= " . $this->tmp . ". | Distancia= " . $this->distance . "."));
    }

    /**
     * Funcion para transformacion de datos de las redes
     */
    function transformInputGuessClassificationOfNetworks($array = array()) {
        $cost = strcasecmp($array['cost'], "Low") != 0 ? (strcasecmp($array['cost'], "Medium") != 0 ? 3 : 2) : 1;
        $capacity = strcasecmp($array['capacity'], "Low") != 0 ? (strcasecmp($array['capacity'], "Medium") != 0 ? 3 : 2) : 1;
        return array(intval($array['links']), intval($array['reliability']), $capacity, $cost);
    }

    /**
     * Funcion para la transformacion de los datos del tipo del profesor
     */
    function transformInputGuessTypeOfProfessor($array = array()) {
        $experience = $array['experience'];
        $gender = strcasecmp($array['gender'], "M") != 0 ? (strcasecmp($array['gender'], "F") != 0 ? 3 : 2) : 1;
        $evaluation = strcasecmp($array['evaluation'], "B") != 0 ? (strcasecmp($array['evaluation'], "I") != 0 ? 3 : 2) : 1;
        $discipline = strcasecmp($array['discipline'], "DM") != 0 ? (strcasecmp($array['discipline'], "ND") != 0 ? 3 : 2) : 1;
        $abilities_computers = strcasecmp($array['abilities_computers'], "L") != 0 ? (strcasecmp($array['abilities_computers'], "A") != 0 ? 3 : 2) : 1;
        $abilities_use_technologies = strcasecmp($array['abilities_use_technologies'], "N") != 0 ? (strcasecmp($array['abilities_use_technologies'], "S") != 0 ? 3 : 2) : 1;
        $experience_website = strcasecmp($array['experience_website'], "N") != 0 ? (strcasecmp($array['experience_website'], "S") != 0 ? 3 : 2) : 1;
        return array($array['age'], $gender, $evaluation, $experience, $discipline, $abilities_computers, $abilities_use_technologies, $experience_website);
    }

}
