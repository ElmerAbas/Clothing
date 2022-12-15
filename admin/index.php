<?php 

include('../middleware/adminMiddleware.php');  
include('includes/header.php');

?>


<div class="dash">
    <div class="dash-card">
        <div class="dash-header">
            <h3>Visitor</h3>
        </div>
        <div class="dash-body">
            <table class="dash-table">
                <thead>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Number</th>
                </thead>

                <tbody>
                <?php 
                                $user = getAll("users");

                                if(mysqli_num_rows($user) > 0)
                                {
                                    foreach($user as $item)
                                    {
                                        ?>

                        <tr>
                            <td> <?= $item['name']; ?> </td>
                            <td> <?= $item['address']; ?> </td>
                            <td> <?= $item['email']; ?> </td>
                            <td> <?= $item['phone']; ?> </td>
                        </tr>

                        <?php
                                    }
                                }
                                else
                                {
                                    echo "No records found";
                                }

                            ?>

                    </tbody>
                </tbody>
            </table>
        </div>

    </div>
</div>



<?php include('includes/footer.php'); ?>