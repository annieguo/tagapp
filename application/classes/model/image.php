<?php
/**
 * Description of image
 *
 * @author Annie
 */
class Model_Image extends ORM{
    
    protected $_has_many = array(
        'tags' => array(
            'model' => 'tag',
            'foreign_key' => 'pictureid'
        ),
        'names' => array(
            'model' => 'name',
            'through' => 'image_names'
        )
    );
    
   
}


