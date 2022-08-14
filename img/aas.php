                        <?php
                            $i = 1;
                            while($row = mysqli_fetch_assoc($order)) {     ?>
                                <tr>
                                    <th><?php echo $i++; ?></th>
                                    <th><?php echo $row['Product-Name']; ?></th>
                                    <th>
                                        <img style='width:100px;' src="../../img/<?php echo $row['Image']; ?>">
                                    </th>
                                    <th><?php echo $row['Brand']; ?></th>
                                    <th><?php echo $row['Quality']; ?></th>
                                    <th><input type="number" name="quantity[]"></th>
                                    <th><?php echo $row['Price']; ?></th>
                                    <th>&nbsp;</th>
                                    <th><a href="delete.php">Delete</a></th>
                                </tr>
                            <?php   }   ?>   
        if(isset($_GET['id'])){
        $id = $_GET['id'];
        $order = mysqli_query($conn,"SELECT `Product-Name`,`Image`,`Brand`,`Quality`,`Price` FROM `product-data` WHERE `ID`=$id");
    }