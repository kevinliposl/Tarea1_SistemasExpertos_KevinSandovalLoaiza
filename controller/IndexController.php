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

    function __construct() {
        $this->view = new View;
        require_once 'model/IndexModel.php';
    }

    /**
     * @return null
     * Función para mostrar index
     */
    function default() {
        $this->view->show("indexView.php");
    }

    function calcDistanceEnclosureStyle(){
        $model= new IndexModel;
        $result = $model->selectAllEnclosureStyle();
        $arrayA = array($_POST['ca'],$_POST['ec'],$_POST['ea'],$_POST['or']);
        $distancetmp = 1000;
        $styletmp = '';
        foreach($result as $var){
            $arrayB = array($var['style_ca'],$var['style_ec'],$var['style_ea'],$var['style_or']);
            $tmp = $this->distanceEuclidean($arrayA,$arrayB);
              if($tmp<$distancetmp){
                 $distancetmp = $tmp;
                 $styletmp = $var['style_name'];
              }
        }
        echo json_encode(array('result'=>$styletmp));
    }

    function calcDistanceStyleGenderAverageEnclosure(){
        $model= new IndexModel;
        $result = $model->selectAllStyleGenderAverageEnclosure();
        $arrayA = array($_POST['style'],$_POST['average'],$_POST['gender']);
        $distancetmp = 1000;
        $enclosuretmp;
        foreach($result as $var){
            $arrayB = array($var['ssae_style'],$var['ssae_average'],$var['ssae_gender']);
            $tmp = $this->distanceEuclidean($arrayA,$arrayB);
              if($tmp<$distancetmp){
                 $distancetmp = $tmp;
                 $enclosuretmp = $var['ssae_enclosure'];
              }
        }
        echo json_encode(array('result'=>$enclosuretmp));
    }

    private function distanceEuclidean($arrayA, $arrayB){    
        if (count($arrayA) !== count($arrayB)) {
            return -1;
        }
        $distance = 0;
        $length = count($arrayA);
        for ($i=0; $i<$length; $i++) {
            if(!is_string($arrayA[$i])){
                $distance += ($arrayA[$i] - $arrayB[$i]) ** 2;
            }else{
                $distance += (levenshtein($arrayA[$i], $arrayB[$i])) ** 2;
            }
        }
        return sqrt((float) $distance);
    }

}
