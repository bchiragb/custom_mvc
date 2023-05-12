<?php defined('BASEPATH') OR exit('No direct script access allowed'); $urlx = $_SERVER['REQUEST_URI']; 
$sesacc1 = $this->session->userdata('login_esti_local'); $usrx = $sesacc1['user_iad']; $usrx1 = $sesacc1['user_empid']; ?>

            <div class="page-wrapper">
                <div class="container-fluid">
                    <div class="row heading-bg">
                        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                          <h5 class="txt-dark">All Data Comparison Details</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-default card-view">
                                <div class="panel-wrapper collapse in">
                                    <div class="panel-body">
                                        <div class="table-wrap">
                                            <div class="table-responsive customtbl">
                                                <table id="example501" class="table table-bordered table-hover display pb-0 jsgrid">
                                                    <thead>
                                                        <tr>
                                                            <th rowspan="2">TID</th>
                                                            <th rowspan="2">Lid</th>
                                                            <th colspan="3">Weight</th>
                                                            <th colspan="3">Color</th>
                                                            <th colspan="3">Clarity</th>
                                                            <th colspan="3">Quality</th>
                                                            <th rowspan="2">Act</th>
                                                        </tr>
                                                        <tr>
                                                            <th class="spth"><p class="fright">Fi1</p></th>
                                                            <th class="spth"><p class="fright">Gr1</p></th>
                                                            <th class="spth"><p class="fright">GI1</p></th>
                                                            <th class="spth"><p class="fright">Fi1</p></th>
                                                            <th class="spth"><p class="fright">Gr1</p></th>
                                                            <th class="spth"><p class="fright">GI1</p></th>
                                                            <th class="spth"><p class="fright">Fi1</p></th>
                                                            <th class="spth"><p class="fright">Gr1</p></th>
                                                            <th class="spth"><p class="fright">GI1</p></th>
                                                            <th class="spth"><p class="fright">Fi1</p></th>
                                                            <th class="spth"><p class="fright">Gr1</p></th>
                                                            <th class="spth"><p class="fright">GI1</p></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php 
                                                        $query13 = $this->db->query("SELECT *, final_esti.id as fid FROM final_esti
                                                        LEFT JOIN grader_esti ON grader_esti.r_lotid = final_esti.lotid
                                                        LEFT JOIN gia_esti ON gia_esti.g_lotid = final_esti.lotid
                                                        ");
                                                        $row = $query13->result();
                                                        foreach($row as $ar) { $elink = base_url('dashboard/view/'.$ar->fid.'/');
                                                            
                                                            if($ar->quality != "") { $arr1 = str_split($ar->quality, 3); $quality1 = strtoupper($arr1[0]).$arr1[1]; } else { $quality1 = ""; }
                                                            if($ar->r_quality != "") { $arr2 = str_split($ar->r_quality, 3); $quality2 = strtoupper($arr2[0]).$arr2[1]; } else { $quality2 = ""; }
                                                            if($ar->g_quality != "") { $arr3 = str_split($ar->g_quality, 3); $quality3 = strtoupper($arr3[0]).$arr3[1]; } else { $quality3 = ""; }

                                                            //$mbox = '<a href="'.$elink.'"><i class="fa fa-pencil"></i></a><input class="jsgrid-button jsgrid-delete-button sa_warning" type="button" title="Delete" id="sa-warningx" data-val="'.$ar->fid.'" data-tbl="department" data-url="work/00/">';
                                                            //$mbox = '<a href="'.$elink.'"><i class="fa fa-eye"></i></a>';
                                                            $mbox = '<a class="btn btn-primary btn-xs btn-outline" href="'.$elink.'"><i class="fa fa-eye"></i> View</a>';

                                                            echo '
                                                            <tr class="">
                                                                <td>'.$ar->fid.'</td>
                                                                <td>'.$ar->lotid.'</td>
                                                                <td>'.number_format($ar->wt, 2).'</td>
                                                                <td>'.number_format($ar->r_wt, 2).'</td>
                                                                <td>'.number_format($ar->g_wt, 2).'</td>
                                                                <td>'.strtoupper($ar->color).'</td>
                                                                <td>'.strtoupper($ar->r_color).'</td>
                                                                <td>'.strtoupper($ar->g_color).'</td>
                                                                <td>'.strtoupper($ar->clarity).'</td>
                                                                <td>'.strtoupper($ar->r_clarity).'</td>
                                                                <td>'.strtoupper($ar->g_clarity).'</td>
                                                                <td>'.$quality1.'</td>
                                                                <td>'.$quality2.'</td>
                                                                <td>'.$quality3.'</td>
                                                                <td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;">
                                                                    '.$mbox.'
                                                                </td>
                                                            </tr>
                                                            ';
                                                        } ?>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th class="filterhead remv1" rowspan="2">TID</th>
                                                            <th class="filterhead" rowspan="2">Lotid</th>
                                                            <th class="filterhead remv1"colspan="3">Weight</th>
                                                            <th class="filterhead remv1"colspan="3">Color</th>
                                                            <th class="filterhead remv1"colspan="3">Clarity</th>
                                                            <th class="filterhead remv1"colspan="3">Quality</th>
                                                            <th class="filterhead remv1" rowspan="2">Act</th>
                                                        </tr>
                                                        <tr>
                                                            <th class="filterhead"><p class="fright">Final</p></th>
                                                            <th class="filterhead"><p class="fright">Grader</p></th>
                                                            <th class="filterhead"><p class="fright">GIA</p></th>
                                                            <th class="filterhead"><p class="fright">Final</p></th>
                                                            <th class="filterhead"><p class="fright">Grader</p></th>
                                                            <th class="filterhead"><p class="fright">GIA</p></th>
                                                            <th class="filterhead"><p class="fright">Final</p></th>
                                                            <th class="filterhead"><p class="fright">Grader</p></th>
                                                            <th class="filterhead"><p class="fright">GIA</p></th>
                                                            <th class="filterhead"><p class="fright">Final</p></th>
                                                            <th class="filterhead"><p class="fright">Grader</p></th>
                                                            <th class="filterhead"><p class="fright">GIA</p></th>
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
                <span class="parentx">aa0</span><span class="childx">bb1</span>
                <style type="text/css"> 
                #example501 { width: 99% !important; text-align: center !important; } 
                .table>thead:first-child>tr:first-child>th { text-align: center; } 
                span#sa-lockx { color: #555; font-size: 16px; } 
                .table tr:first-child {
                    background: rgb(231 231 231);
                }
                .table th.spth {
                    background: rgb(231 231 231) !important;
                    text-align: center;
                }
                .remv1 input  {
                    display: none;
                }
                i.fa.fa-eye, a.btn.btn-primary.btn-xs.btn-outline {
                    color: #444 !important;
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

