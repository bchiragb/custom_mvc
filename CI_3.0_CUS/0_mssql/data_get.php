<?php 
$otherdb = $this->load->database('sqlserver', TRUE);

////
$sql1 = "SELECT * FROM Mas_Shape WHERE ItemTypeID = '2'";
$query1 = $otherdb->query($sql1); 
$row1 = $query1->result();

////
$sql1 = "EXEC dbo.dataset @id= '$idx'";
$query1 = $otherdb->query($sql1); 
$row1 = $query1->row_array(); 


parse_str($_POST['formdata'], $searcharray);
$rap = number_format((float)$row1['Price'], 2, '.', '');  
$prix = (int)round($pri);

?>