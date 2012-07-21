<?php
/**
 * Description of image_name
 *
 * @author Annie
 */
class Model_Image_Name extends ORM{
    //put your code here
    protected $_belongs_to = array(
        'image' => array(), 
        'name' => array()
    );
}
