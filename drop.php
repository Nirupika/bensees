<select name="category" class="form-control">
                <?php
                foreach ($cat as $item){
                    echo "<option value='$item->drug_id'>$item->drug_name</option>";

                }
                ?>

            </select>








<?php
include_once("c_drugs.php");
$d = new  drugs();
$cat = $d->getall();

?>
