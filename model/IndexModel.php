<?php

/**
 * @author <kevin.sandoval@ucr.ac.cr>
 * @version 1.0
 * @copyright (c) 2018, Kevin Sandoval Loaiza b46549
 * @access public
 * @category Model
 * Class IndexModel     
 */
class IndexModel {

    private $db;

    /**
     * class constructor
     */
    function __construct() {
        require 'libs/SPDO.php';
        $this->db = SPDO::singleton();
    }

    /**
     * @return array result
     * function to select all enclosure style
     */
    function selectAllStyle() {
        $query = $this->db->prepare("call sp_select_all_style()");
        $query->execute();
        $result = $query->fetchAll();
        $query->closeCursor();
        return $result;
    }

    /**
     * @return array result
     * function to select all enclosure style
     */
    function selectAllStyleGenderEnclosureAverageStyle() {
        $query = $this->db->prepare("call sp_select_all_enclosure_gender_style()");
        $query->execute();
        $result = $query->fetchAll();
        $query->closeCursor();
        return $result;
    }

    /**
     * @return array result
     * function to select all professors
     */
    function selectAllProfessors() {
        $query = $this->db->prepare("call sp_select_all_professors()");
        $query->execute();
        $result = $query->fetchAll();
        $query->closeCursor();
        return $result;
    }

    /**
     * @return array result
     * function to select all professors
     */
    function selectAllNetworks() {
        $query = $this->db->prepare("call sp_select_all_networks()");
        $query->execute();
        $result = $query->fetchAll();
        $query->closeCursor();
        return $result;
    }

}
