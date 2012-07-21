<?php
/**
 * Description of tag
 *
 * @author Annie
 */
class Model_Tag extends ORM{
    
    protected $_belongs_to = array(
        'image' => array(
            'model' => 'image',
            'foreign_key' => 'pictureid',
        )
    );
    
    
}

?>
