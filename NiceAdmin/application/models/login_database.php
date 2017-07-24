<?php

Class Login_Database extends CI_Model {

// Insert registration data in database
public function registration_insert($data) {

// Query to check whether username already exist or not
$condition = "user_name =" . "'" . $data['user_name'] . "'";
$this->db->select('*');
$this->db->from('doctors');
$this->db->where($condition);
$this->db->limit(1);
$query = $this->db->get();
if ($query->num_rows() == 0) {

// Query to insert data in database
$this->db->insert('doctors', $data);
if ($this->db->affected_rows() > 0) {
return true;
}
} else {
return false;
}
}

// Read data using username and password
public function login($data) {

// $condition = "user_name =" . "'" . $data['username'] . "' AND " . "password =" . "'" . $data['password'] . "'";
// $this->db->select('*');
// $this->db->from('doctors');
// $this->db->where($condition);
// $this->db->limit(1);
// $query = $this->db->get();
$query = $this->db->get('doctors');
$qres = $query->result();
foreach ($qres as $res) {
    if($this->encrypt->decode($res->password)===$data['password'] && $res->user_name ===$data['username']){
        return true;
    }else{
        return false;
    }
}

}

// Read data from database to show data in admin page
public function read_user_information($username) {

$condition = "user_name =" . "'" . $username . "'";
$this->db->select('*');
$this->db->from('doctors');
$this->db->where($condition);
$this->db->limit(1);
$query = $this->db->get();

if ($query->num_rows() == 1) {
return $query->result();
} else {
return false;
}
}
    
public function nurse_login($data){
    
// $condition = "user_name =" . "'" . $data['username'] . "' AND " . "password =" . "'" . $data['password'] . "'";
// $this->db->select('*');
// $this->db->from('nurse');
// $this->db->where($condition);
// $this->db->limit(1);
// $query = $this->db->get();

// if ($query->num_rows() == 1) {
// return true;
// } else {
// return false;
// }
$query = $this->db->get('nurse');
$qres = $query->result();
foreach ($qres as $res) {
    if($this->encrypt->decode($res->password)===$data['password'] && $res->user_name ===$data['username']){
        return true;
    }else{
        return false;
    }
}


}

public function read_nurse_information($username){

    $condition = "user_name =" . "'" . $username . "'";
    $this->db->select('*');
    $this->db->from('nurse');
    $this->db->where($condition);
    $this->db->limit(1);
    $query = $this->db->get();

    if ($query->num_rows() == 1) {
    return $query->result();
    } else {
    return false;
    }
}
    public function cUsername($user){
        $this->db->select("*");
        $this->db->from('doctors');
        $this->db->where('user_name',$user);
        $this->db->limit(1);
        $query = $this->db->get();
        if($query->num_rows()===1){
            return true;
        }else{
            return false;
        }
    }
}

?>