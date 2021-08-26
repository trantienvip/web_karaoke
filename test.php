<!DOCTYPE html>
<html lang="en">
<head>
    <?php require('lib/lib.php'); ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="time" name="gio" id="">
        <button type="submit">ok</button>
        
        <?php 
        date_default_timezone_set("Asia/Ho_Chi_Minh"); 
        $time = $_POST['gio'].':00';
        $conn = connect_db();
        $result = mysqli_query($conn,"SELECT * FROM `formdatphong` ORDER BY `gio_datphong`");
        while($row = $result->fetch_assoc()){
                $ham = array($row['gio_datphong']);
                foreach ($ham as $key => $value) {
                    // echo $time++;
                    echo date('H:i:s',$time + 3600);
                    // if ($row['gio_datphong'] == $time && $row['gio_datphong']=$time+4) {
                    //     echo $time+4;
                    // }

                    // $date = date('2011-11-25');
                    $newdate = strtotime ( '+1 Hour' , strtotime ( $time ) ) ;
                    echo $newdate = date ( 'H:i:s' , $newdate );
                }

            
        }
        
         ?>
    </form>
</body>
</html>