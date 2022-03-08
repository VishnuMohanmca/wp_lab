<?php

    if(isset($_POST['search_submit'])){
        $user_email= $_POST['user_email'];
        $con=mysqli_connect("localhost","root","","aquarium");
        $sql = "SELECT * FROM  user where email_Id='$user_email'";
        $result=$con->query($sql);
    }
    else{
        $result=null;
    }
    
?>
    <html>

    <head>
        <title>view page</title>
    </head>

    <body>
        <div class="container">
            <h2>VIEW</h2>
            <form action='11view.php' method='post'>
                <input type='email' name='user_email' id='user_email' placeholder='Type the email to search...' />
                <input type='submit' name='search_submit' id='search_submit' />
            </form>

            <table border="1">
                <tr>
                    <th>first_name</th>
                    <th>Last_name</th>
                    <th>Email</th>
                    <th>Password</th>
                </tr>
                <?php
    if($result!=null)
    {
        if($result->num_rows > 0)
        {
            while($row=$result->fetch_assoc())
            {
?>
                    <tr>
                        <td>
                            <?php echo $row['first_Name'];?>
                        </td>
                        <td>
                            <?php echo $row['last_Name'];?>
                        </td>
                        <td>
                            <?php echo $row['email_Id'];?>
                        </td>
                        <td>
                            <?php echo $row['passwrd'];?>
                        </td>
                    </tr>
                    <?php
            }
        }
    }
?>
            </table>

    </html>