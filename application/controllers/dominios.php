<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH.'libraries/REST_Controller.php');
class  Dominios extends REST_Controller  {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

    
   function user_get($id,$id2)
   {
     $this->load->model('model_dominios');
     $data['title'] = $this->get('id2');
     $data['page_header'] = $this->get('id');
     $data['domains'] = $this->model_dominios->getDomains();
       $this->response($data);
   }

   function user_post()
   {
       $data = array('returned: '. $this->post('id'));
       $this->response($data);
   }

   function user_put()
   {
       $data = array('returned: '. $this->put('id'));
       $this->response($data);
   }

   function user_delete()
   {
       $data = array('returned: '. $this->delete('id'));
       $this->response($data);
   }


}
