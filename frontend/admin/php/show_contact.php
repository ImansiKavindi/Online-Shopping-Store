<?php

include '../../../backend/dbh.inc.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Valentino - User Management</title>
    <link rel="stylesheet" href="../css/show_users.css">
    <style>
        /* ...Your existing CSS... */
    </style>
</head>

<body>
    <?php
    include './sidebar.php';
    ?>

    <div class="content">
        <div class="title">
            <h2>Conatact Support's information</h2>
        </div>
        
        <div class="table-data">
            <table border="1">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                </tr>

                <?php
                $sql = "SELECT * FROM contact_us;";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);

                if ($resultCheck > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        echo "
                            <tr>
                          
                            <td>" . $row['Full_Name'] . "</td>
                            <td>" . $row['Email'] . "</td>
                            <td>" . $row['Message'] . "</td>
                        
                                <td>
                                    <button class='del-btn'><a href='http://localhost/valentino/backend/dbh.deletecontact.php?deletecontact=" . $id . "'>Delete</a></button>
                                    <p></p>
                                    <button class='del-btn'><a href='http://localhost/valentino/backend/dbh.updatecontact.php?updatecontact=" . $id . "'>Update</a></button>
                                </td>
                            </tr>
                        ";
                    }
                }
                ?>





            </table>
        </div>
    </div>
</body>

</html>
