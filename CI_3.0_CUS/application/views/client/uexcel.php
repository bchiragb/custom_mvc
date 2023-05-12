<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
$errorx = ""; $blankdata['exist'] = array(); $blankdata['row'] = array(); 
$expfile = MPATH.'application\views\client\XLSXReader.php';
require($expfile); 

$sesacc1 = $this->session->userdata('logged_user_esti');  
$userid = $sesacc1['user_id'];

if(isset($_POST['importSubmit'])){  extract($_POST);
    $csvMimes = array('application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    if(!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'], $csvMimes)){
        if(is_uploaded_file($_FILES['file']['tmp_name'])){
            date_default_timezone_set('Asia/Calcutta');
            $currdatetime = date("Y-m-d H:i:s");   
            //upload file and get fild name
            $filenm = basename($_FILES['file']['name']);
            $temp = explode(".", $_FILES["file"]["name"]);
            $newfilename = round(microtime(true)) . '.' . end($temp);
            $uploadFilePath = MPATH.'assets/'.$newfilename;
            move_uploaded_file($_FILES["file"]["tmp_name"], $uploadFilePath);


            //get data into array
            $row = 1; $arrx = array(); $finalarr = array(); $cbx = array(); 
            $xlsx = new XLSXReader($uploadFilePath); //D:\wamp\www\estimation\assets/excel/1645420663.xlsx
            $sheetNames = $xlsx->getSheetNames();
            $array = $xlsx->getSheetData('Sheet1');
            $array = array_map('array_filter', $array);
            $arrx = array_filter($array);
            
            //tbl
            $estinm = $estitbl; $tbl = ""; $lid = "";
            if($estinm == 1) { 
                $tbl = "final_esti"; $l_id = "lotid"; $l_wt = "wt";  $l_col = "color";  $l_cla = "clarity";  $l_qua = "quality"; $l_datime = "datime"; 
            } else if($estinm == 2) { 
                $tbl = "grader_esti"; $l_id = "r_lotid"; $l_wt = "r_wt";  $l_col = "r_color";  $l_cla = "r_clarity";  $l_qua = "r_quality"; $l_datime = "r_datime"; 
            } else { 
                $tbl = "gia_esti"; $l_id = "g_lotid"; $l_wt = "g_wt";  $l_col = "g_color";  $l_cla = "g_clarity";  $l_qua = "g_quality"; $l_datime = "g_datime"; 
            }

            $c = 1;
            foreach($arrx as $kk => $arr){
                $countar = count($arr);
                if($countar < 6) { $chkval = 1;
                    $sqlx = "SELECT * FROM ".$tbl." WHERE ".$l_id." = '".$arr[0]."'";
                    $query3 = $this->db->query($sqlx);
                    $row3 = $query3->row_array(); 
                    if($query3->num_rows() == 0) {
                        date_default_timezone_set('Asia/Calcutta');
                        $currdatetime = date("Y-m-d H:i:s");
                        $datasetx = array(
                            $l_id => $arr[0],
                            $l_wt => number_format($arr[1], 2),
                            $l_col => strtoupper($arr[2]),
                            $l_cla => strtoupper($arr[3]),
                            $l_qua => $arr[4],
                            $l_datime => $currdatetime
                        );
                        $save = $this->db->insert($tbl, $datasetx);
                    } else {
                       $blankdata['exist'][] = $c;
                    }
                } else {
                    $blankdata['row'][] = $c;
                } 
            $c++;   
            }
        } else {
            $errorx = 'error in file upload';
        } 
    } else {
        $errorx = 'wrong file';
    }
}   ?>
            <div class="page-wrapper">
                <div class="container-fluid pt-0">
                    <div class="row heading-bg mb-0">
                        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                          <h5 class="txt-dark">Upload Data Using Excel</h5>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 txtrig">
                            <a class="btn btn-primary btn-sm" href="<?php echo base_url('dashboard/'); ?>">
                                <i class="ti-back-right"></i><span> Back</span>
                            </a>
                        </div>      
                    </div>
                
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-default card-view">
                                <div class="panel-wrapper collapse in">
                                    <div class="panel-body">
                                        <div class="form-wrap">
                                            <div class="row">
                                                <div class="col-md-12 mb-30">
                                                    <a class="btn btn-primary btn-sm" href="<?php echo base_url('assets/demo.png'); ?>" target="_blank">View samle img of excel file</a> 
                                                </div>    
                                            </div>
                                            <form data-toggle="validator" role="form" novalidate="true" method="post" enctype="multipart/form-data">
                                                <div class="row">
                                                    <div class="col-md-10">
                                                        <label class="control-label mb-10 text-left">File upload</label>
                                                        <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                            <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                                                            <span class="input-group-addon fileupload btn btn-info btn-anim btn-file"><i class="fa fa-upload"></i> <span class="fileinput-new btn-text">Select file</span> <span class="fileinput-exists btn-text">Change</span>
                                                            <input type="file" name="file">
                                                            </span> <a href="#" class="input-group-addon btn btn-danger btn-anim fileinput-exists" data-dismiss="fileinput"><i class="fa fa-trash"></i><span class="btn-text"> Remove</span></a> 
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group mb-30">
                                                            <label class="control-label mb-10 text-left">Estimation</label>
                                                            <select class="form-control" name="estitbl">
                                                                <option value="1">Final Estimation</option>
                                                                <option value="2">Grading Estimation</option>
                                                                <option value="3">GIA Estimation</option>
                                                            </select>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group mt-00">
                                                            <input type="submit" class="btn btn-success" name="importSubmit" value="Upload">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <?php if($errorx != "") { ?>Error: <?php echo $errorx; ?><?php }
                                            if(!empty($blankdata['row'])) { echo "<br>"; $rownoo1 = implode(',', $blankdata['row']); ?>
                                                File have data missing in this row (<?php echo $rownoo1; ?>)
                                            <?php } 
                                            if(!empty($blankdata['exist'])) { echo "<br>"; $rownoo2 = implode(',', $blankdata['exist']); ?>
                                                File have duplicate data in this row (<?php echo $rownoo2; ?>)
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <span class="parentx">aa4</span><span class="childx">bb1</span>

