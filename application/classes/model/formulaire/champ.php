<?php

defined('SYSPATH') or die('No direct access allowed.');

/**
 * Associe un un formulaire avec un champ.
 *
 * @package agebdeb.org
 * @category Models
 * @author Guillaume Poirier-Morency <guillaumepoiriermorency@gmail.com>
 */
class Model_Formulaire_Champ {

    protected $_belongs_to = array(
        'formulaire' => array(),
        'champ' => array()
    );

}

?>
