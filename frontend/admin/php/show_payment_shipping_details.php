<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Valentino - User Management</title>
    <link rel="stylesheet" href="../css/show_users.css">
    <style>
        /* Existing CSS */

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
            <h2>Shipping & Card Detail's Information</h2>
        </div>
        
        <div class="table-data">
            <table border="1">
                <tr>
                    <th>Name</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Province</th>
                    <th>Mobile Number</th>
                    <th>Card Number</th>
                    <th>CVC</th>
                    <th>Expire Date</th>
                    <th>Card Holder Name</th>
                    <th>Actions</th>
                </tr>

                <?php
                $sql = "SELECT * FROM shipping_details s JOIN payment_details p ON s.id = p.id";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);

                if ($resultCheck > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        echo "
                                <tr>
                                    <td>" . $row['name'] . "</td>
                                    <td>" . $row['address'] . "</td>
                                    <td>" . $row['city'] . "</td>
                                    <td>" . $row['province'] . "</td>
                                    <td>" . $row['mobileN'] . "</td>
                                    <td>" . $row['cardNumber'] . "</td>
                                    <td>" . $row['cvc'] . "</td>
                                    <td>" . $row['expireDate'] . "</td>
                                    <td>" . $row['cardHolderName'] . "</td>
                                    <td>
                                        <button class='del-btn'><a href='http://localhost/valentino/backend/dbh.deletecard.php?deletepc=" . $id . "'>Delete</a></button>
                                        <p></p>
                                        <button class='del-btn'><a href='http://localhost/valentino/backend/dbh.updatecard.php?updatepc=" . $id . "'>Update</a></button>
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
