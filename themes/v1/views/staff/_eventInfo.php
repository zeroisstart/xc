<tr>
 
                                            <th><?php
// echo substr($data_>no,0,16);
if ($data->se_type ==1 ) {
	echo '事假';
}
else {
	echo '病假';
}

?></th>
       <th>
       <?php 
       echo substr($data->se_date_time,0,16);
       ?>
       
       </th>
   <th>
       <?php 
       echo substr($data->se_date_time_end,0,16);
       ?>
       
       </th>
   <th>
       <?php 
       echo $data->se_desc;
       ?>
       
       </th>