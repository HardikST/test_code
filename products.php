<?php

if (!defined('BASEPATH'))
     exit('No direct script access allowed');

class Products extends FrontendController
{

     function __construct()
     {
          $this->data['pagetitle'] = 'Products';
          $this->data['smalltitle'] = 'Products Listing';
          $this->data['breadcrumb'] = 'Products';
          parent::__construct($this->data);
          $this->load->model('product_model');
          $this->load->model('module_model');
     }

     public function index()
     {
          $product = $this->product_model->get_products_list();
          $this->data['product'] = $product;
          
          $this->template->write_view('css', 'product/css', $this->data, true);
          $this->template->write_view('content', 'product/index', $this->data, true);
          $this->template->write_view('js', 'product/js', $this->data, true);
          $this->template->render();
     }
     
     public function add()
     {
        $user = $this->session->userdata('current_user_admin');
        $logged_in_user_id = $user[0]->Id;
        if(!empty($user))
        {
            if ($this->input->post())
            {   
              $data['name']=$this->input->post('name');
              $data['no_attendee']=$this->input->post('attendee');
              $data['no_speaker']=$this->input->post('speaker');
              $data['max_events']=$this->input->post('max_events');
              $data['max_active_events']=$this->input->post('max_active_events');
              $data['no_admins']=$this->input->post('total_admins');
              $data['module_allow']=$this->input->post('module_allow');
              if($this->input->post('module_allow') == '1')
                $data['module_list']= json_encode($this->input->post('module_list'));
              else
                $data['module_list']= null;
              $data['max_storage']=$this->input->post('max_storage');
              $this->product_model->add_product($data);
              $this->session->set_flashdata('product_data', 'Added');
              redirect("products/index/");
            }
            
            $this->data['menu'] = $this->module_model->get();
            
            $this->template->write_view('css', 'product/add_css', $this->data, true);
            $this->template->write_view('content', 'product/add', $this->data, true);
            $this->template->write_view('js', 'product/add_js', $this->data, true);
            $this->template->render();
        }
     }
     public function edit($id)
     {
        $user = $this->session->userdata('current_user_admin');
        $logged_in_user_id = $user[0]->Id;
        if(!empty($user))
        {            
            if ($this->input->post())
            {
              $data['name']=$this->input->post('name');
              $data['no_attendee']=$this->input->post('attendee');
              $data['no_speaker']=$this->input->post('speaker');
              $data['max_events']=$this->input->post('max_events');
              $data['max_active_events']=$this->input->post('max_active_events');
              $data['no_admins']=$this->input->post('total_admins');
              $data['module_allow']=$this->input->post('module_allow');
              if($this->input->post('module_allow')==1)
                $data['module_list']= json_encode($this->input->post('module_list'));
              else
                $data['module_list']= null;
              $data['max_storage']=$this->input->post('max_storage');
              $this->product_model->update_product($id,$data);
              $this->session->set_flashdata('product_data', 'Updated');
              redirect("products/index/");
            }

            $product=$this->product_model->get_products_list($id);
            $this->data['product']=$product[0];
            $this->data['menu'] = $this->module_model->get();
                       
            $this->template->write_view('css', 'product/add_css', $this->data, true);
            $this->template->write_view('content', 'product/edit', $this->data, true);
            $this->template->write_view('js', 'product/edit_js', $this->data, true);
            $this->template->render();
        }
     }
     public function delete($id)
     {
         $this->product_model->delete_product($id);
         $this->session->set_flashdata('product_data', 'Deleted');
         redirect("products/index/");
     }

}
