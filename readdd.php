<?php
$row = 1;
$handle = fopen("file.csv", "r");
$fp = fopen($CSVfile, "r");


   while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $num = count($data);
            $row++;
?>
<table  border="2"><tr>
<?
            if($row!=1){  // 第一筆不讀入，若您的CSV檔案內容包含欄位名稱請加上此判斷句
                    for ($c=0; $c < $num; $c++) {
                        $tmp[$c] =$data[$c];     //將取得的資料暫時存於$tmp陣列中
                    }?>

                 <td><?echo $tmp[0].' ';?></td>                 
                 <td><?echo $tmp[1].' ';?></td>
                 <td><?echo $tmp[2].' ';?></td>
                 <td><?echo $tmp[3].' ';?></td>
                 <td><?echo $tmp[4].' ';?></td>
                 <td><?echo $tmp[5].' ';?></td>
                 <td><?echo $tmp[6].' ';?></td>
                 <td><?echo $tmp[7].' ';?></td>
                 <td><?echo $tmp[8].' ';?></td>
                 <td><?echo $tmp[9].' ';?></td>
                 <td><?echo $tmp[10].' '; ?></td>                
                 <td><?echo $tmp[11].' ';?></td>
                 <td><?echo $tmp[12].' ';?></td>
                 <td><?echo $tmp[13].' ';?></td>
                 <td><?echo $tmp[14].' ';?></td>
                 <td><?echo $tmp[15].' ';?></td>
                 <td><?echo $tmp[16].' ';?></td>
                 <td><?echo $tmp[17].' ';?></td>
                 <td><?echo $tmp[18].' ';?></td>
                 <td><?echo $tmp[19].' ';?></td>
                 <td><?echo $tmp[20].' ';?> </td>          
                 <td><?echo $tmp[21].' ';?></td>
                 <td><?echo $tmp[22].' ';?></td>
                 <td><?echo $tmp[23].' ';?></td>
                 <td><?echo $tmp[24].' ';?></td>
                 <td><?echo $tmp[25].' ';?></td>
                 <td><?echo $tmp[26].' ';?></td>
                 <td><?echo $tmp[27].' ';?></td>
                 <td><?echo $tmp[28].' ';?></td>
                 <td><?echo $tmp[29].' ';?></td>			 
                 <td><?echo $tmp[30].' ';?></td>
				 <td><?echo $tmp[31].' ';?></td>
                 <td><?echo $tmp[32].' ';?></td>
                 <td><?echo $tmp[33].' ';?></td>
                 <td><?echo $tmp[34].' ';?></td>
                 <td><?echo $tmp[35].' ';?></td>
                 <td><?echo $tmp[36].' ';?></td>
                 <td><?echo $tmp[37].' ';?></td>
                 <td><?echo $tmp[38].' ';?></td>
                 <td><?echo $tmp[39].' ';?></td>
                 <td><?echo $tmp[40].' ';?></td>
                 <td><?echo $tmp[41].' ';?></td>
                 <td><?echo $tmp[42].' ';?></td>





				  


  <?            
              }
        }
	?></tr>
</table>	
<?
//fclose($fp);
      
?>