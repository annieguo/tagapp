<?php
/**
 * Description of name
 *
 * @author Annie
 */
class Model_Name extends ORM{
    //put your code here
    protected $_has_many = array(
        'images' => array(
            'model' => 'image',
            'through' => 'image_names'
        )
    );
}
