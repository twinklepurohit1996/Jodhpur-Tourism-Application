<?php 
public function do_upload()
        {
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100;
                $config['max_width']            = 10240;
                $config['max_height']           = 7680;
                $config['file_name']            ='image';
                $config['encrypt_name']         =TRUE;

                $this->load->library('upload', $config);


                if ( !$this->upload->do_upload('image') )
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('upload_form', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());

                        $this->load->view('upload_success', $data);
                }
        }
?>