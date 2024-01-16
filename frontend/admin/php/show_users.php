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
        h3 {
            text-align: center;
        }

        .popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            z-index: 9999;
        }

        /* Styles for the blurred background */
        .blur {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(5px);
            z-index: 9998;
        }

        /* Styles for the buttons in the pop-up box */
        .popup-buttons {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 20px;
        }

        .btn1 {

            display: block;
            width: 40%;
            padding: 10px;
            border: none;
            border-radius: 4px;
            background-color: #4CAF50;
            color: #000000;
            font-weight: bold;
            cursor: pointer;
        }

        .btn2 {

            display: block;
            width: 40%;
            padding: 10px;
            border: none;
            border-radius: 4px;
            background-color: #fe3939;
            color: #ffffff;
            font-weight: bold;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <?php
    include './sidebar.php';
    ?>

    <div class="content">
        <div class="title">
            <h2>User's information</h2>
        </div>
        <div class="add-btn">
            <button><a href="./addusers.php">Add User</a></button>
        </div>
        <div class="table-data">
            <table border="1">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                </tr>

                <?php
                $sql = "SELECT * FROM users;";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);

                if ($resultCheck > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['user_id'];
                        echo "
                                <tr>
                                    <td>" . $row['name'] . "</td>
                                    <td>" . $row['email'] . "</td>
                                    <td>" . $row['address'] . "</td>
                                    <td>
                                        <button class='del-btn'><a href='http://localhost/valentino/backend/dbh.deleteusers.php?deleteusers=" . $id . "'>Delete</a></button>
                                        <p></p>
                                        <button class='del-btn'><a href='http://localhost/valentino/backend/dbh.updateusers.php?updateusers=" . $id . "'>Update</a></button>
                        
                                       
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