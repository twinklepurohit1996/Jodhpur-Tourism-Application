<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public $data;
	private function load()
	{
		$this->load->helper(array('url','form','cookie','captcha'));
		$this->load->library(array("session","email","image_lib"));
		$this->load->database();
	}
	public function index()
	{
		$this->load();
		$this->cate();
		$this->load->view("jodhpur.php");
	}

	public function cate()
	{
		$this->load();
		$queryresult=$this->db->get("categories");
		$result=$queryresult->result_array();
		$this->session->set_userdata(array("result"=>$result));
	}

	public function item()
	{
		$this->load();
		$this->displayitem();
	}

	public function displayitem()
	{
		$this->load();
		$query=$this->db->get('addcategories');
		$data['res']=$query->result_array();
		$this->load->view('item',$data);
	}

	public function showall()
	{
		$this->load();
		$query=$this->db->get('addcategories');
		$data['popular']=$query->result_array();
		$this->load->view('cate',$data);
		
	}

	public function showcat($id)
	{
		$this->load();
		$this->db->where(array("cate_id"=>$id));
		$query=$this->db->get('addcategories');
		$data['popular']=$query->result_array();
		$this->load->view('cate',$data);

	}

	public function singleitem($id)
	{
		$this->load();
		$this->db->where(array("id"=>$id));
		$query=$this->db->get('addcategories');
		$data['single']=$query->result_array();
		$data['map']=$query->result_array();
		$this->load->view('singlePage',$data);

	}

	public function itemmap($id)
	{
		$this->load();
		$this->db->where(array("id"=>$id));
		$query=$this->db->get('addcategories');
		$data['map']=$query->result_array();
		$this->load->view('mapPage',$data);
	}

	public function maap()
	{
		$this->load();
		$this->load->view("map");
	}
	public function map($id)
	{
		$this->load();
		$this->db->where(array("id"=>$id));
		$query=$this->db->get('addcategories');
		$data['new']=$query->result_array();
		$this->load->view('map',$data);
	}

	public function booknow($catId)
	{
		$this->load();
		$_SESSION['placeid']=$catId;
		if(get_cookie('Login')==True)
			$this->load->view("home");
		else
			$this->load->view("login");
	}
	
	public function already()
	{
		$this->load();
		$this->load->view("login");
	}
	public function forgetPassword()
	{
		$this->load();
		$this->load->view("emailverifiyforpass");
	}
	public function newUser()
	{
		$this->load();
		$this->load->helper('captcha');	
		$vals = array(
		        'word'          => random_int(000000,999999),
		        'img_path'      => './assest/captcha/',
		        'img_url'		=> base_url().'/assest/captcha/',
		        'img_width'     => '150',
		        'img_height'    => 30,
		        'font_path'	    =>  base_url() . 'assest/font/arial.ttf',
		        'expiration'    => 3600,
		        'word_length'   => 8,
		        'font_size'     => 16,
		        'img_id'        => 'Imageid',
		        'pool'          => '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',

		);
		$this->data['cap'] = create_captcha($vals);
		$this->session->set_userdata(array("captcha"=>$this->data['cap']['word']));
		//var_dump($cap);
		$this->load->view("register",$this->data);
	}
	public function registration()
	{
		$this->load();
	   		 $config['upload_path']          = './upload/';
             $config['allowed_types']        = 'gif|jpg|png|webp|jpeg';
             $config['max_size']             = 100;
             $config['max_width']            = 10240;
             $copassword['max_height']           = 7680;
             $config['file_name']            ='image';
             $config['encrypt_name']         =TRUE;
             $this->load->library('upload', $config);


			$name= $this->input->post("uname");
			$email= $this->input->post("email");
			$mobile= $this->input->post("mobile");
			$pass= password_hash($this->input->post("pass"),PASSWORD_BCRYPT);
			$cpass= $this->input->post("cpass");
			$cap=$this->input->post("xcap");
			$this->data=array();
			if($this->session->userdata("captcha")!=$cap)
					$this->data['error']="Captcha Code Is not Match";
			else if($this->input->post("pass")!=$cpass)
					$this->data['error']="Password and Confirm password is not match";
			else if(!$email)
					$this->data['error']="Email is already register";
			else if(!$mobile)
					$this->data['error']="Mobile is already register";
			else if (!$this->upload->do_upload('xfile') )
               		$this->data['error'] =array('error'=>$this->upload->display_errors());
            else
             {
				$file_name=$this->upload->data('file_name');
					// the text image 
				
					/*$config['source_image'] ='./upload/'.$file_name;
					$config['wm_text'] = 'Copyright 2021 - LoginProject';
					$config['wm_type'] = 'text';
					$config['wm_font_path'] = './assest/font/arial.ttf';
					$config['wm_font_size'] = '16';
					$config['wm_font_color'] = 'ffffff';
					$config['wm_vrt_alignment'] = 'center';
					$config['wm_hor_alignment'] = 'center';
					$config['wm_padding'] = '20';*/

					//the overlay image
					/*$config['image_library'] = 'gd2';
					$config['source_image'] = base_url().'/upload/'.$file_name;
					$config['wm_type'] = 'overlay';
					$config['wm_overlay_path'] = base_url().'/upload/logo.jpg'; 
					$config['wm_opacity'] = 1;
					$config['wm_vrt_alignment'] = 'middle';
					$config['wm_hor_alignment'] = 'middle';
					$this->image_lib->initialize($config);
					$this->image_lib->watermark();
					echo $this->image_lib->display_errors();*/

				$arr=array("username"=>$name,"email"=>$email,"mobile"=>$mobile,"password"=>$pass,"image"=>$file_name);
			   	$this->db->insert("member",$arr);	
			 }

			 $this->newUser();
		}
	

	public function login()
	{
		$this->load();
	
				$value=$this->input->post("xemail");
				$pass=$this->input->post("xpass");
				$this->db->or_where(array("email"=>$value,"mobile"=>$value));
				$this->db->where(array("password"=>$pass));
				$query=$this->db->get("member");
				$row=$query->row();
						
				if(password_verify($this->input->post('xpass'), $row->password))
				{
					if($this->input->post("xrem")=="True")
					{
						 set_cookie('Username',$value,60*60*24);
						 set_cookie('Password',$pass,60*60*24);
						 set_cookie('Login',True ,60*6.*24);

					}
					$array=array("member_id"=>$row->id,"email"=>$value,"mobile"=>$row->mobile,"image"=>$row->image ,"Vemail"=>$row->emailVerify);
					$this->session->set_userdata($array);
					$query=$this->db->get('addcategories',array("id"=>$_SESSION['placeid']));
					$data['place']=$query->result_array();
					$this->load->view('home',$data);
					
				}
			else
			{
				echo "Email and password not mail";
				$this->load->view("login");
			}
		}

	public function booking()
	{
		$this->load();
		$config['protocol']    = 'smtp';
		$config['smtp_host']    = 'ssl://smtp.gmail.com';
		$config['smtp_port']    = '465';
		$config['smtp_user']    = 'twinklepurohitjd6@gmail.com';
		$config['smtp_pass']    = 'twinkle*123*123';
		$config['charset']    = 'utf-8';
		$config['newline']    = "\r\n";
		$config['mailtype'] = 'text'; 
		$config['validation'] = TRUE;   
		$this->email->initialize($config);

		$date= $this->input->post("date");
		$time= $this->input->post("time");
		$query=$this->db->insert('booking',array("userid"=>$_SESSION['member_id'],"placeid"=>$_SESSION['placeid'],"date"=>$date,"time"=>$time));	
		$message=" your Booking is successfully completed you book .................... Place ond date ".$date." and time ".$time;


		$this->email->from('twinklepurohitjd6@gmail.com', 'myname');
		$this->email->to($_SESSION['email']); 
		$this->email->subject("Booking confirmation");
		$this->email->message($message);  
		$this->email->send();
		$this->load->view("payment");
	}
	
	public function Logout()
	{
		$this->load();
		delete_cookie('Password');
		delete_cookie('Username');
		delete_cookie('Login');
		unset($_SESSION);
		$this->load->view("login");
	}

	public function verifyemail()
	{
		$this->load();
		$email=$this->input->post("xemail");
		$this->db->where(array("email"=>$email));
		$this->db->get("member");
		$this->db->last_query();
		delete_cookie('name');
		echo $this->db->affected_rows();
		
		if($this->db->affected_rows()>=1)
		{
			$config['protocol']    = 'smtp';
			$config['smtp_host']    = 'ssl://smtp.gmail.com';
			$config['smtp_port']    = '465';
			$config['smtp_user']    = 'twinklepurohitjd6@gmail.com';
			$config['smtp_pass']    = 'twinkle*123*123';
			$config['charset']    = 'utf-8';
			$config['newline']    = "\r\n";
			$config['mailtype'] = 'text'; 
			$config['validation'] = TRUE;   

			$this->email->initialize($config);
			$randomCode=array("forgetverficationCode"=>random_int(000000,999999));
			$this->session->set_userdata($randomCode);
			$this->session->set_userdata(array("email"=>$email));

			$this->email->from('twinklepurohitjd6@gmail.com', 'myname');
			$this->email->to($email); 

			$this->email->subject('Forget Password Verfication Code');
			$mess="Your Forget Password Verfication Code is ".$this->session->userdata("forgetverficationCode");
			$this->email->message($mess);  
			$this->email->send();
			$this->email->print_debugger();
			$this->load->view("otpcodeforpass");	
		}
		else
		{
		$mess="Email is not Registered!!";
		$this->load->view("register");
		}
						
	}

	public function otpcode()
	{
		$this->load();
		$code=$this->input->post("xcode");
		if($this->session->userdata("forgetverficationCode")!=$code)
		{
			echo "OTP not Match Successfully";
			$this->load->view("login");
		}
		else
		{
			echo "OTP Match Successfully";
			$this->load->view("resetpassforpass");
		}
	}

	public function resetpass()
	{
		$this->load();
		$new= password_hash($this->input->post("npass"),PASSWORD_BCRYPT);
		$reset=$this->input->post("rpass");
		if($this->input->post("npass")!=$reset)
		{
			echo "Password Not Match";
			$this->load->view("login");
		}
		else
		{
			$this->db->where(array("email"=>$this->session->userdata("email")));
			$this->db->update("member",array("password"=>$new));
			echo "Password match successfully!!";
			$this->load->view("login");
		}
	}
	public function EmailVerify()
	{

		$this->load();
		$code=random_int(000000,999999);
		$array=array("emailVerificationCode"=>$code);
		$this->session->set_userdata($array);

		$senderEmail=$this->session->userdata("email");
		$config['protocol']    = 'smtp';
		$config['smtp_host']    = 'ssl://smtp.gmail.com';
		$config['smtp_port']    = '465';
		$config['smtp_user']    = 'twinklepurohitjd6@gmail.com';
		$config['smtp_pass']    = 'twinkle*123*123';
		$config['charset']    = 'utf-8';
		$config['newline']    = "\r\n";
		$config['mailtype'] = 'text'; 
		$config['validation'] = TRUE;   

		$this->email->initialize($config);
		$this->email->from('twinklepurohitjd6@gmail.com', 'myname');
		$this->email->to($senderEmail); 
		$this->email->subject('Email Verfication Code');
		$mess="Your Email Verfication Code is ".$code;
		$this->email->message($mess);  
		$this->email->send();
		$this->email->print_debugger();
		$this->load->view("otpcodeforhome");
	}


	public function otpcodeh()
	{
		$this->load();
		$code=$this->input->post("xcode");
		if($this->session->userdata("emailVerificationCode")!=$code)
		{
			echo "OTP not Match Successfully";
		}
		else
		{
			echo "OTP Match Successfully";
			$this->db->where(array("email"=>$this->session->userdata("email")));
			$this->db->update("member",array("emailVerify"=>1));
			$query=$this->db->get('addcategories',array("id"=>$_SESSION['placeid']));
			$data['place']=$query->result_array();
			$this->load->view('home',$data);
			

		}
		//$this->load->view("home");
	}	
}
