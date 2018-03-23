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
        $result = $model->selectAll();
        $arrayA = array($_POST['ca'],$_POST['ec'],$_POST['ea'],$_POST['or'],$_POST['caec'],$_POST['eaor']);
        $distancetmp = 1000;
        $idTmp = 0;
        $styletmp = '';
        foreach($result as $var){
            $arrayB = array($var['style_ca'],$var['style_ec'],$var['style_ea'],$var['style_or'],$var['style_ca_ec'],$var['style_ea_or']);
            $tmp = $this->distanceEuclidean($arrayA,$arrayB);
              if($tmp<$distancetmp){
                 $distancetmp = $tmp;
                 $styletmp = $var['style_name'];
              }
        }
        echo json_encode(array('result'=>$styletmp));
    }

    private function distanceEuclidean($arrayA, $arrayB){    
        if (count($arrayA) !== count($arrayB)) {
            return -1;
        }
        $distance = 0;
        $length = count($arrayA);
        for ($i=0; $i<$length; $i++) {
            $distance += ($arrayA[$i] - $arrayB[$i]) ** 2;
        }
        return sqrt((float) $distance);
    }

}
