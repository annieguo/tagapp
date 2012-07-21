<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

        public function action_index()
	{
            $view = new View('welcome');
            if($this->request->post())
            {
                $array = Validation::factory($_FILES);
                $array->rule('image', 'Upload::not_empty');
                $array->rule('image', 'Upload::image');
                $array->rule('image', 'Upload::type', 
                        array(':value', array('jpg', 'png', 'gif')));
                $array->rule('image', 'Upload::valid');
                
                if ($array->check())
                {
                    $path = 'images'.'/'.time().'/';
                    $dest = DOCROOT.$path;
                    $image = $_FILES['image'];
                    $name = $_FILES['image']['name'];
                    if( ! file_exists($dest)){
                        @mkdir($dest, 0777);
                    }
                    Upload::save($image,$name, $dest);
                    $image = new Model_Image();
                    $image->set('path', $path);
                    $image->set('title', $name);
                    $image->save();
                    $this->request->redirect('index.php/tagging/index/'.$image->pk());
                }
                else
                {
                    $view->set('upload_error', 'Invalid file type. Please upload a image.');
                }
                    
            }
            $this->response->body($view);
	}

        public function action_list()
        {
            $id = $this->request->param('id');
            $name = new Model_Name($id);
            $tags = ORM::factory('name')->find_all();
            $view = new View('listing');
            if($id){
                $images = $name->images->find_all();
                $view->set('images', $images);
            }
            
            
            $view->set('tags', $tags);
            
            $this->response->body($view);
        }
        
        public function action_images()
        {
            $images = ORM::factory('image')->find_all();
            $view = new View('image');
            $view->set('images', $images);
            $this->response->body($view);
        }

}
