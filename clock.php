<!DOCTYPE html>
<html>

<head>
    <title>Digital Clock</title>
    <!--Required to refresh every 1 second-->
    <meta http-equiv="refresh" content="1">
    <style>
        body {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: black;
            color: white;
            font-size: 50px;
        }
    </style>
</head>

<body>
<center><h1>Digital Clock</h1></center>
    <div>
  <center>    
 <?php
           session_start();//Using sessions in your original code serves the purpose of retaining the selected timezone across page        refreshes or different page views by the same user.

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $selectedTimeZone = $_POST['tim'];
            $_SESSION['selectedTimeZone'] = $selectedTimeZone;
        }

        if (isset($_SESSION['selectedTimeZone'])) {
            date_default_timezone_set($_SESSION['selectedTimeZone']);
            echo "<p>" . date("T:H:i:s") . "</p>";
        }
       ?>
</center>
 </div>
</body>
</html>
