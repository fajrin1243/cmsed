<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller {

	public function index()
	{
		$data['data'] = $this->model->get('user');
		$data['content'] = 'member_content';
		$this->load->view('main',$data,FALSE);
	}

	public function add($id="")
	{
		$data['content'] = 'member_add';
		$data['getMember'] = $this->model->get_where('user',array('idUser'=>$id));

		$this->load->view('main',$data,FALSE);
	}

	public function save($id="")
	{
		$post = $this->input->post();
		$data['getMember'] = $this->model->get_where('user',array('idUser'=>$id));
		$this->form_validation->set_rules('usernameMember', 'Username User', 'required');
		$this->form_validation->set_rules('nameUser', 'Nama User', 'required');
		$this->form_validation->set_rules('emailUser', 'Email User', 'required');
		$this->form_validation->set_rules('namaRole', 'Role User', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$data['content'] = 'module_add';
			$this->load->view('main',$data,FALSE);
		}
		else{
			if ($post['idMember']) {
				$this->model->update_data('member',$post,array('idMember'=>$post['idMember']));
			}
			else{
				$post['createdDate'] = date('Y-m-d H:i:s');
				$this->model->insert_data('member',$post);
			}
			redirect('pengaturan/user');
		}
	}
}

/* End of file User.php */
/* Location: ./application/modules/pengaturan/controllers/User.php */