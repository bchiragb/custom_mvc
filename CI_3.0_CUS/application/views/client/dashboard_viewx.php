<?php defined('BASEPATH') OR exit('No direct script access allowed'); $urlx = $_SERVER['REQUEST_URI'];
//
$fina = []; $query1 = $this->db->query("SELECT * FROM final_esti ORDER BY datime DESC ");
$row1 = $query1->result(); 
foreach($row1 as $ar) { 
    $fina[$ar->datime][] = array(
        'id' => $ar->id, 
        'lotid' => $ar->lotid, 
        'wt' => $ar->wt, 
        'color' => $ar->color, 
        'clarity' => $ar->clarity, 
        'quality' => $ar->quality, 
        'datime' => $ar->datime, 
        'tbl' => "final_esti", 
        'url' => "finalesti"
    ); 
} 
//
$grad = []; $query2 = $this->db->query("SELECT * FROM grader_esti ORDER BY r_datime DESC ");
$row2 = $query2->result(); foreach($row2 as $ar) { 
    $grad[$ar->r_datime][] = array(
        'id' => $ar->r_id, 
        'lotid' => $ar->r_lotid, 
        'wt' => $ar->r_wt, 
        'color' => $ar->r_color, 
        'clarity' => $ar->r_clarity, 
        'quality' => $ar->r_quality, 
        'datime' => $ar->r_datime, 
        'tbl' => "grader_esti", 
        'url' => "graderesti"
    ); 
} 
//
$gia = []; $query3 = $this->db->query("SELECT * FROM gia_esti ORDER BY g_datime DESC ");
$row3 = $query3->result(); foreach($row3 as $ar) { 
    $gia[$ar->g_datime][] = array(
        'id' => $ar->g_id, 
        'lotid' => $ar->g_lotid, 
        'wt' => $ar->g_wt, 
        'color' => $ar->g_color, 
        'clarity' => $ar->g_clarity, 
        'quality' => $ar->g_quality, 
        'datime' => $ar->g_datime, 
        'tbl' => "gia_esti", 
        'url' => "giaesti"
    );
} 
//
$mmarr = array_merge($fina, $grad, $gia);
krsort($mmarr); ?>

            <div class="page-wrapper">
                <div class="container-fluid">
                    
                    <div class="row heading-bg">
                        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                          <h5 class="txt-dark">All Estimation List - Date wise</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-default card-view">
                                <div class="panel-wrapper collapse in">
                                    <div class="panel-body">
                                        <div class="table-wrap">
                                            <div class="table-responsive customtbl">
                                                <table id="example501" class="table table-hover display pb-0 jsgrid">
                                                    <thead>
                                                        <tr>
                                                            <th>DateTime</th>
                                                            <th>Lotid</th>
                                                            <th>Wt</th>
                                                            <th>Color</th>
                                                            <th>Clarity</th>
                                                            <th>Quality</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($mmarr as $key => $valarr) {
                                                            foreach($valarr as $ar) { 
                                                                $elink = base_url($ar['url'].'/edit/'.$ar['id'].'/');
                                                                $arr2 = str_split($ar['quality'], 3);
                                                                $quality = strtoupper($arr2[0]).$arr2[1];
                                                                $datime = date("d/m/Y H:i:s", strtotime($ar['datime']));
                                                                echo '
                                                                <tr class="">
                                                                    <td>'.$datime.'</td>
                                                                    <td>'.$ar['lotid'].'</td>
                                                                    <td>'.number_format($ar['wt'], 2).'</td>
                                                                    <td>'.strtoupper($ar['color']).'</td>
                                                                    <td>'.strtoupper($ar['clarity']).'</td>
                                                                    <td>'.$quality.'</td>
                                                                    <td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;">
                                                                        <a href="'.$elink.'"><i class="fa fa-pencil"></i></a>
                                                                        <input class="jsgrid-button jsgrid-delete-button sa_warning" type="button" title="Delete" id="sa-warningx" data-val="'.$ar['id'].'" data-tbl="'.$ar['tbl'].'" data-url="'.$ar['url'].'/00/">
                                                                    </td>
                                                                </tr>
                                                                ';
                                                            } 
                                                        } ?>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th class="filterhead">Date & Time</th>
                                                            <th class="filterhead">Lotid</th>
                                                            <th class="filterhead">Wt</th>
                                                            <th class="filterhead">Color</th>
                                                            <th class="filterhead">Clarity</th>
                                                            <th class="filterhead">Quality</th>
                                                            <th class="filterhead remv1">Action</th>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
                <span class="parentx">aa0</span><span class="childx">bb2</span>
                <style type="text/css"> span#sa-lockx { color: #555; font-size: 16px; } 
                .table tr:first-child {
                    background: rgb(231 231 231);
                }
                .remv1 input  {
                    display: none;
                }
                .btn.btn-xs { color:#fff !important; }

                input.ser_box {
                    width: 100%;
                }
                .dt-buttons {
                    float: initial !important;
                }
                .table > tbody > tr > td, .jsgrid-table > tbody > tr > td, .table > tbody > tr > th, .jsgrid-table > tbody > tr > th, .table > tfoot > tr > td, .jsgrid-table > tfoot > tr > td, .table > tfoot > tr > th, .jsgrid-table > tfoot > tr > th, .table > thead > tr > td, .jsgrid-table > thead > tr > td, .table > thead > tr > th, .jsgrid-table > thead > tr > th {
                    padding: 6px !important; }
                table.dataTable thead .sorting::after, table.dataTable thead .sorting_asc::after, table.dataTable thead .sorting_desc::after {
                    top: 6px;
                }
                .table, .jsgrid-table {
                    border-bottom: 2px solid;
                }
                </style>
