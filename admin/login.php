<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">

</head>
<body class="logBody">
<div class="stripes"></div>
        <div class="admin-form">
        <form method="POST">
            <h2 class="display-2">Admin Login</h2>
           <table class="formStyle">
               <tr>
                   <td>Username</td>
                   <td><input type="text" name="username" placeholder="Enter your username"></td>
               </tr>
               <tr>
                   <td>Password</td>
                   <td><input type="password" name="password" placeholder="Enter your password"></td>
               </tr>
               <tr>
                   <td>
                       <button class="btn" name="login">Login</button>
                   </td>
               </tr>
           </table>
            <!-- <button  onclick="Alert.render('We will get started right away :)')" class="btn btn-light" name="submitOrder">Place Order</button> -->
        </form>

        <?php 
            if(isset($_POST['login'])){
                include '../includes/config.php';
                $user = $_POST['username'];
                $pw = $_POST['password'];

                $qry = "SELECT * FROM admin WHERE username = '$user' AND password = '$pw'";
                $rs = $conn->query($qry);
                $num = $rs->num_rows;
                $rows = $rs->fetch_assoc();
                if($num > 0){
                    session_start();
                    $_SESSION['username'] = $rows['username'];
                    $_SESSION['password'] = $rows['password'];
                    header("Location: index.php");
                }

               
            }
        ?>







    
        </div>
    <div class="stripes"></div>
    <div class="stripes"></div>
    <div class="stripes"></div>
    <div class="stripes"></div>

<footer class="logFoot"></footer>



<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  

</body>
</html>