<?php 

 class user extends CI_controller{
    
    function index(){

        $this->load->model('user_model');
        $users = $this->user_model->all();
        $data = array();
        $data['users'] = $users;
        $this->load->view('list',$data);
    }


   function create()
   {
       $this->load->model('user_model');
    $this->form_validation->set_rules('name','Name','required');
    $this->form_validation->set_rules('email','Email','required|valid_email');

    if ($this->form_validation->run() == false)
    {
        $this->load->view('create');
    }else{
        $formArray = array();
        $formArray['name'] = $this->input->post('name');
        $formArray['email'] = $this->input->post('email');
        $formArray['mnum'] = $this->input->post('mn');   
        $formArray['dob'] = date('d-m-y');
        $formArray['pincode'] = $this->input->post('pc');
        $this->user_model->create($formArray);
        $this->session->set_flashdata('success','Record added');
        redirect(base_url().'index.php/user/index');
    
    
    }
    //$this->load->view('create');
   } 


   function edit($id)
   {
       $this->load->model('user_model');
      $user = $this->user_model->getuser($id);
      $data = array();
      $data['user'] = $user;

      
    $this->form_validation->set_rules('name','Name','required');
    $this->form_validation->set_rules('email','Email','required|valid_email');


    
    if ($this->form_validation->run() == false)
    {
         $this->load->view('edit',$data);
  
    } else
    {


        $formArray = array();
        $formArray['name'] = $this->input->post('name');
        $formArray['email'] = $this->input->post('email');
        $formArray['mnum'] = $this->input->post('mn');   
        $formArray['dob'] = date('d-m-y');
        $formArray['pincode'] = $this->input->post('pc');
        $this->user_model->updateuser($id,$formArray);
        $this->session->set_flashdata('success','Record added');
        redirect(base_url().'index.php/user/index');
    



    }
  
  
  
  
  
  
        }


          function delete($id)
          {
                 $this->load->model('user_model');
                 $user = $this->user_model->getuser($id);

                 if(empty($user)){
                      $this->session->set_flashdata('failure','Record  not found in db');
                      redirect(base_url().'index.php/user/index');
                 }
                      $this->user_model->deleteuser($id);
                      $this->session->set_flashdata('success','Record  deleted successfully');
                      redirect(base_url().'index.php/user/index');



                 

          }





 }

?>