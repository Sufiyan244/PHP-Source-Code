
<?php

include("config.php");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Table</title>
    <style>
        body {
            background-color: #f2f2f2;
            padding: 20px;
        }

        table {
            width: 100%;
            background-color: #fff;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1); 
            border-collapse: collapse;
        }

        h2 {
            text-align: center;
            font-weight: 800;
            font-size: 35px;
            color: #5B85BE;
            text-decoration: underline;
            
        }

        ::selection{
            background-color: #A9D0E3;
        }

        th,
        td {
            padding: 12px 15px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #28686F;
            color: white;
        }

        tr:hover {
            background-color: #f1f1f1;
            /* transform: translateY(5px); */
        }

        .btn {
            padding: 6px 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            color: #fff;
        }

        .edit-btn {
            background-color: #2196F3;
        }

        .delete-btn {
            background-color: #f44336;
        }

        .btn:hover {
            opacity: 0.8;
            
        }

        /* .alignment{ */
            /* display: inline-flex;
            justify-content: center;
            align-items: center; */
            /* padding: 10px 45%;
        } */
    </style>
</head>


    <?php 
    
        $query = "select * from register.users";
        $result = mysqli_query($connection , $query);
    
    
    ?>


<body>

    <h2>Users Data</h2>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Password</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>


            <?php  
            
                while($row = mysqli_fetch_assoc($result)){

                echo "            
                
                <tr>
                    <td>".$row['id']."</td>
                    <td>".$row['fullname']."</td>
                    <td>".$row['email']."</td>
                    <td>".$row['password']."</td>
                    <td>
                        <button class='btn edit-btn'>Update</button>
                        <button class='btn delete-btn'>Delete</button>
                    </td>
                </tr>";



                }
            
            
                
            
            ?>

        </tbody>
    </table>


    <div style=" display: flex; justify-content: center;">
    <a class='btn edit-btn' style="text-decoration: none;" href = "" >Update</a>

    </div>
</body>

</html>