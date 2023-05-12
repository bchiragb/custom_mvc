<?php defined('BASEPATH') OR exit('No direct script access allowed');  ?>

            <?php $year = date("Y");
            $page = isset($page) ? $page : 0;
            //if($page != 0) {
                $ttime = "Load Time (Seconds): {elapsed_time}";  
                $duse = "Data Usage: ".showmemory(); ?>
                <footer class="footer container-fluid pl-30 pr-30">
                    <div class="row">
                        <div class="col-sm-12">
                            <p><?php echo $year; ?> &copy; Proloop. All Rights Reserved. <?php echo $ttime; ?> </p>
                        </div>
                    </div>
                </footer>
            <?php //} ?>
            </div>
        </div>


        <input id="siteurl" class="dn" value="<?php echo base_url(); ?>" type="text" readonly="readonly" >
        <?php foreach ($js as $key => $value) { if(!empty($value)) { //ASSETS_PATH  JS_PATH ?>
        <script src="<?php echo ASSETS_PATH.'client/'.$value; ?>"></script>
        <?php } } foreach ($djs as $key => $value) {  if(!empty($value)) { ?>
        <script src="<?php echo $value; ?>"></script>
        <?php } } foreach ($css as $key => $value) { if(!empty($value)) { //ASSETS_PATH   CSS_PATH  JS_PATH ?>
        <link href="<?php echo ASSETS_PATH.'client/'.$value; ?>" rel="stylesheet">
        <?php } } foreach ($dcss as $key => $value) { if(!empty($value)) { ?>
        <link href="<?php echo $value; ?>" rel="stylesheet">
        <?php } } ?>   
    </body>
</html>