<?php defined('BASEPATH') OR exit('No direct script access allowed'); 

$segment = $this->uri->segment_array();  $dbid = $segment[3];
$sesacc1 = $this->session->userdata('login_esti_local');  
if(empty($sesacc1['user_id'])) {  $redirectx = base_url().'dashboard/'; 
  ?><script type="text/javascript">var reload = '<?php echo $redirectx; ?>'; window.location = reload;  </script><?php
}

if($_SERVER['REQUEST_METHOD'] == 'POST') { extract($_POST); 
    $queryx = $this->db->get_where('final_esti', array('lotid' => $lotid, 'wt' => $lotwt)); 
    $datax1 = $queryx->row_array();
    if(empty($datax1)) {
        date_default_timezone_set('Asia/Calcutta');
        $currdatetime = date("Y-m-d H:i:s");
        $data = array('lotid' => $lotid, 'wt' => $lotwt, 'color' => $lotcol, 'clarity' => $lotcla, 'quality' => $lotqua, 'datime' => $currdatetime);
        $this->db->where('id', $dbid);
        $save = $this->db->update('final_esti', $data);
        if($save){
            $pagecall1 = base_url().'finalesti/00/';
        } else {
            $pagecall1 = base_url().'finalesti/01/';
        }
    } else {
       $pagecall1 = base_url().'finalesti/01/'; 
    }
    ?><script type="text/javascript">var reload = '<?php echo $pagecall1; ?>'; window.location = reload;  </script><?php
} else {
    $query13 = $this->db->query("SELECT * FROM final_esti WHERE id = '".$dbid."'");
    $row1 = $query13->row_array();
    $lotid = $row1['lotid']; 
    $lotwt = $row1['wt']; 
    $lotcol = strtoupper($row1['color']); 
    $lotcla = strtoupper($row1['clarity']); 
    $lotqua = $row1['quality']; 
    $arr2 = str_split($lotqua, 3);
    $quality = strtoupper($arr2[0]).$arr2[1];
} ?>
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row heading-bg">
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                  <h5 class="txt-dark">Edit Final Data</h5>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 txtrig">
                    <a class="btn btn-primary btn-sm" href="<?php echo base_url('finalesti/'); ?>">
                        <i class="ti-back-right"></i><span>Back</span>
                    </a>
                </div>      
            </div>

            <div class="row">
                <div class="col-sm-12 col-xs-12 ">
                    <div class="form-wrap card-view">
                        <form data-toggle="validator" role="form" novalidate="true" method="post" enctype="multipart/form-data">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label class="control-label mb-10">Lotid</label>
                                            <input type="text" class="form-control" name="lotid" value="<?php echo $lotid; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label class="control-label mb-10">Wt</label>
                                            <input type="text" class="form-control" name="lotwt" value="<?php echo $lotwt; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label class="control-label mb-10">Color</label>
                                            <input type="text" class="form-control" name="lotcol" value="<?php echo $lotcol; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label class="control-label mb-10">Clarity</label>
                                            <input type="text" class="form-control" name="lotcla" value="<?php echo $lotcla; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label class="control-label mb-10">Quality</label>
                                            <input type="text" class="form-control" name="lotqua" value="<?php echo $quality; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="form-group mt-30">
                                            <div class="col-sm-offset-2x col-sm-10c">
                                              <button type="submit" class="btn btn-success"><span class="btn-text">Update</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>  
        </div>
        <span class="parentx">aa1</span><span class="childx">bb1</span>
    