  <?php defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends MY_Controller {

  function __construct() {
      parent::__construct(); //date_default_timezone_set('Asia/Calcutta');  
      if(!$this->input->is_ajax()) {  //redirect(base_url(), 'refresh'); }
  }

  public function is_ajax() {
    return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest' && strtolower($_SERVER['HTTP_HOST']) == 'localhost';
  }

  public function uslogin() { extract($_POST);
    $empid = $data[0]['value'];
    $pass = md5($data[1]['value']);
    $queryx = $this->db->get_where('users', array('empid'=> $empid, 'emppass'=> $pass));  //, 'ismana'=> 1
    $data = $queryx->row_array(); 
    if(is_null($data)) {
      echo 'Login Invalid. User not found';
    } else {
      $session_data = array(
        'user_id' => $empid,
        'user_empid' => $empid,
        'user_empnm' => $data['empnm'],
        'user_iad' => $data['isadmin'],
      );
      $this->session->set_userdata('login_esti_local', $session_data);      
      echo 1;
    }
  }

  public function detrecod() { extract($_POST);
    $sesacc1 = $this->session->userdata('login_esti_local');  
    if($ids != "0") {
      if( !empty($ids) && !empty($tbl)) { 
        $this->db->where('id', $ids);
        $this->db->delete($tbl); 
        echo 1;
      }
    } 
  }

  public function lockon() { extract($_POST);
    //$sesacc1 = $this->session->userdata('login_esti_local');  
    //$usrx = $sesacc1['user_iad']; if($usrx == 0) { echo 1; exit(); }
    $data = array('lockr' => 1);
    $this->db->where('id', $ids);
    $save = $this->db->update($tbl, $data);
    echo 1;
  }

  public function lockall() { extract($_POST);
    $sesacc1 = $this->session->userdata('login_esti_local');
    $empid = $sesacc1['user_empid'];
    $queryx = $this->db->get_where('users', array('empid'=> $empid)); 
    $datax = $queryx->row_array(); 
    $deparid = $datax['isadmin'];
    //
    $data = array('lockr' => 1);
    $this->db->where('lockr', 0);
    $this->db->where('departid', $deparid);
    $this->db->update('work', $data);
    echo 1;
  }

}

