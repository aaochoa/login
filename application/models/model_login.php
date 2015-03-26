<?php

class Model_login extends CI_Model
{

public function can_log_in ()
{

  $this->db->where('Code',$this->input->post('Code'));
  $this->db->where('Password',md5($this->input->post('Password')));

  $query = $this->db->get('users');

  if ($query->num_rows()==1) {

    return true;
  } else {
    return false;
  }
}

}
