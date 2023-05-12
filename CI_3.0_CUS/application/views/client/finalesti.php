<?php defined('BASEPATH') OR exit('No direct script access allowed'); $urlx = $_SERVER['REQUEST_URI']; ?>

            <div class="page-wrapper">
                <div class="container-fluid">
                    <?php if(strpos($urlx, '00') !== false) { ?>
                        <div class="alert alert-success alert-dismissable martop_15">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <i class="zmdi zmdi-check pr-15 pull-left"></i><p class="pull-left">Success.. Data save/update/delete successfully.</p> 
                            <div class="clearfix"></div>
                        </div>
                    <?php } if(strpos($urlx, '01') !== false) { ?>
                        <div class="alert alert-danger alert-dismissable martop_15">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <i class="zmdi zmdi-block pr-15 pull-left"></i><p class="pull-left">Opps! Somthing went wrong.</p>
                            <div class="clearfix"></div>
                        </div>
                    <?php } ?> 


                    <div class="row heading-bg">
                        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                          <h5 class="txt-dark">All Final Data</h5>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 txtrig">
                            <a class="btn btn-primary btn-sm" href="<?php echo base_url('finalesti/add/'); ?>">
                                <i class="fa fa-plus"></i><span> Add New</span>
                            </a>
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
                                                            <th>TID</th>
                                                            <th>Lotid</th>
                                                            <th>Wt</th>
                                                            <th>Color</th>
                                                            <th>Clarity</th>
                                                            <th>Quality</th>
                                                            <th>Date & Time</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $query13 = $this->db->query("SELECT * FROM final_esti");
                                                        $row = $query13->result();
                                                        foreach($row as $ar) { $elink = base_url('finalesti/edit/'.$ar->id.'/');
                                                            $arr2 = str_split($ar->quality, 3);
                                                            $quality = strtoupper($arr2[0]).$arr2[1];
                                                            $datime = date("d/m/Y H:i:s", strtotime($ar->datime));
                                                            echo '
                                                            <tr class="">
                                                                <td>'.$ar->id.'</td>
                                                                <td>'.$ar->lotid.'</td>
                                                                <td>'.number_format($ar->wt, 2).'</td>
                                                                <td>'.strtoupper($ar->color).'</td>
                                                                <td>'.strtoupper($ar->clarity).'</td>
                                                                <td>'.$quality.'</td>
                                                                <td>'.$datime.'</td>
                                                                <td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;">
                                                                    <a href="'.$elink.'"><i class="fa fa-pencil"></i></a>
                                                                    <input class="jsgrid-button jsgrid-delete-button sa_warning" type="button" title="Delete" id="sa-warningx" data-val="'.$ar->id.'" data-tbl="final_esti" data-url="finalesti/00/">
                                                                </td>
                                                            </tr>
                                                            ';
                                                        } ?>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th class="filterhead remv1">TID</th>
                                                            <th class="filterhead">Lotid</th>
                                                            <th class="filterhead">Wt</th>
                                                            <th class="filterhead">Color</th>
                                                            <th class="filterhead">Clarity</th>
                                                            <th class="filterhead">Quality</th>
                                                            <th class="filterhead">Date & Time</th>
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
                <span class="parentx">aa1</span><span class="childx">bb1</span>
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
