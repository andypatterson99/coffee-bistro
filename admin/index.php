<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    include 'header.php';
    // include 'workspace.php';
?>
 <div class="intro">
   <h1 class="display-6 text-center">Welcome back <br> Let's get back on track!</h1> <br>
     <h1 class="display-4 text-center">Notification Wall</h1>
   <div class="notification-wall d-flex justify-content-center">
     <div class="my-card head-wall d-flex justify-content-center">
       <h1 class="font-weight-light">Critical</h1>
       <h1 class="font-weight-light">Important</h1>
       <h1 class="font-weight-light">Nice to have</h1>
       </div>
    </div>
    <div class="notification-wall d-flex justify-content-center">
     <div class="my-card body-wall d-flex justify-content-left">
       <h1 class="font-weight-light">Critical Task</h1>
       <h1 class="font-weight-light">Important Task</h1>
       <h1 class="font-weight-light">Nice to have Task</h1>
       </div>
    </div>
   </div>
 </div>




    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src="app.js"></script>
</body>
</html>