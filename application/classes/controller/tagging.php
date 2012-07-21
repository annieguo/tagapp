<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Description of tagging
 *
 * @author Annie
 */
class Controller_Tagging extends Controller{
    
    public function action_index()
    {
        $id = $this->request->param('id');
        $image = new Model_Image($id);
        
        $view = new View('tagging');
        if($image->loaded()){
            $view->set('image', $image);
            $names = $image->names->find_all();
            $tags = $image->tags->find_all();
            $view->set('tags', $tags);
            $view->set('names', $names);
        }
        else{
            $view->set('error', 'Not found');
        }
        $this->response->body($view);
    }
    
    public function action_save()
    {
        if($this->request->is_ajax()){
            $tag = new Model_Tag();
            $tag->values($this->request->post());
            $tag->save();
            $desc = $this->request->post('description');
            $pictureid = $this->request->post('pictureid');
            
            $json['width'] = $this->request->post('width');
            $json['height'] = $this->request->post('height');
            $json['top'] = $this->request->post('top');
            $json['left'] = $this->request->post('left');
            
            $name = ORM::factory('name')->where('name', '=', $desc)->find();
            $json['name'] = $desc;
            if($name->loaded()){
                //$nameid = $name->id;
                //$imageid = $this->request->post('pictureid');
                $image_name = new Model_Image_Name();
                $image_name->set('name_id', $name->id);
                $image_name->set('image_id', $pictureid);
                $image_name->save();
                $json['id'] = $nameid;
            }
            else{
                $name = new Model_Name();
                $name->set('name',  $desc);
                $name->save();
                $image_name = new Model_Image_Name();
                $image_name->set('name_id', $name->pk());
                $image_name->set('image_id', $pictureid);
                $image_name->save();
                $json['id'] = $name->pk();
            }
            $json['error'] = false;
            $json['tag'] = $desc;
            $this->response->body(json_encode($json));
        }
        else{
            $this->response->body('Invalid request');
        }
    }
    
    public function action_names()
    {
        if($this->request->is_ajax())
        {
            $name = $this->request->param('name');
            $names = ORM::factory('name')->where('name', '=', $name)->find_all();
            $json['error'] = false;
            $json['names'] = $names;
            $this->response->body(json_encode($json));
        }
        else
        {
            $this->response->body('Invalid request');
        }
    }
    
    
}
