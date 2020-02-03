<?php $strSQL = "SELECT * FROM province ORDER BY PROVINCE_NAME ASC";
                            $objQuery = mysql_query($strSQL);
                            while($province = mysql_fetch_array($objQuery))
                        {?>
                        <option value="<?php echo '$province[PROVINCE_NAME]';?>">
                          <?php echo '$province[PROVINCE_NAME]';?></option>
                        <?php } ?>