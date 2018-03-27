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

    function __construct() {
        $this->view = new View();
        require_once 'model/IndexModel.php';
    }

    function defaultAction() {
        $this->view->show("indexView.php");
    }

    function distanceEuclidean($arrayA, $arrayB) {
        if (count($arrayA) !== count($arrayB)) {
            return NULL;
        }
        $distance = 0;
        $length = count($arrayA);

        for ($i = 0; $i < $length; $i++) {
            if (!is_string($arrayA[$i])) {
                $distance += ($arrayA[$i] - $arrayB[$i]) ** 2;
            } else {
                $distance += levenshtein($arrayA[$i], $arrayB[$i]);
            }
        }
        return 1 / ( 1 + sqrt((float) $distance));
    }

    function calcDistanceEnclosureStyle() {
        $model = new IndexModel();
        $vars = $model->selectAllEnclosureStyle();
        $arrayA = array($_POST['ca'], $_POST['ec'], $_POST['ea'], $_POST['or']);
        foreach ($vars as $var) {
            $arrayB = array($var['style_ca'], $var['style_ec'], $var['style_ea'], $var['style_or']);
            $tmp = $this->distanceEuclidean($arrayA, $arrayB);
            if ($tmp > $this->distance) {
                $this->distance = $tmp;
                $this->tmp = $var['style_name'];
            }
        }
        echo json_encode(array('result' => $this->tmp));
    }

    function calcDistanceStyleGenderAverageEnclosure() {
        $model = new IndexModel;
        $vars = $model->selectAllStyleGenderAverageEnclosure();
        $arrayA = array($_POST['style'], $_POST['average'], $_POST['gender']);
        foreach ($vars as $var) {
            $arrayB = array($var['ssae_style'], $var['ssae_average'], $var['ssae_gender']);
            $tmp = $this->distanceEuclidean($arrayA, $arrayB);
            if ($tmp > $this->distance) {
                $this->distance = $tmp;
                $this->tmp = $var['ssae_enclosure'];
            }
        }
        echo json_encode(array('result' => $this->tmp));
    }

}
