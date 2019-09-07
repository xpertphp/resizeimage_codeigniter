<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Resizeimage extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('common_model');
	
	}
	public function index()
	{
		$arrData['middle'] = 'product/add';
		$this->load->view('template',$arrData);
	}
 
	/**
	* add
	*
	* This help to add slider
	* 
	* @author	Nilesh dabhi
	* @access	public
	* @return	void
	*/
	
	public function add()
	{
		 if(isset($_POST['btnProduct']))
         {
                if ($_FILES['productImage']['name'] != '')
                {
					//echo "dfdf"; die;
                    //$config['upload_path'] = $_SERVER['DOCUMENT_ROOT'].'/assets/upload/product/';
					$config['upload_path'] = './assets/upload/product/';
                    $config['allowed_types'] = 'gif|jpg|png|jpeg';
                    $config['max_size'] = '10240';
					$ext = pathinfo($_FILES['productImage']['name'], PATHINFO_EXTENSION);
					$image = 'xpertphp' . '_' . rand(10000, 100000) . '.' . $ext;
					$config['file_name'] = $image;

					//if no folder in directory then create new folder

                
                    $this->load->library('upload', $config);
                    if (!$this->upload->do_upload('productImage'))
                    {
                        // case - failure
                        $upload_error = array('error' => $this->upload->display_errors());
                        print_r($upload_error); die;
                    }
                    else
                    {
                        $inData["product_image"] = $this->upload->file_name;
                        $data = $this->upload->data();
                        $upload_data = $this->upload->data();

                        $config = array(
                            'source_image'     => $data['full_path'], //get original image
                            'new_image'        => $data['file_path'].'thumb', //save as new image //need to create thumbs first
                            'maintain_ratio'   => true,
                            'width'            => 150
                        );
                        //print_r($config); die;
                    

                        $this->load->library('image_lib',$config); //load library
                        $this->image_lib->resize(); //do whatever specified in config

                    }//end do-upload condition
                }//end productImage empty condition
				$inData["product_title"] = $_POST['txtProductTitle'];
                $inData["product_created"] = date('Y-m-d H:i:s');

                $insertFlag	= $this->common_model->insert('product',$inData);
				if($insertFlag)
				{
					$this->session->set_flashdata('success', 'Prodcut Added Successfully !!');
						redirect('resizeimage');
				}
				else
				{
					$this->session->set_flashdata('error', 'Failed to Add Product !!');
					redirect('product/add');
				}
        }
        $arrData['middle'] = 'product/add';
        $this->load->view('template', $arrData);
	}

}
