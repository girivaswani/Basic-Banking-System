<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Credits</title>
</head>
<body>
<?php
if($_SERVER["REQUEST_METHOD"]=='POST'){
    $from = $_POST['from'];
    $to = $_POST['to'];
    if(strcmp($from,$to)!=0){
        $amt = $_POST['amt'];
        $conn = mysqli_connect('localhost','root','root','sparks');
        $query = 'SELECT u_credits FROM users WHERE u_name = "'.$from.'"';
        $result =  mysqli_query($conn,$query);
        while($row = mysqli_fetch_array($result)) {
            $debit = $row['u_credits'];
        }
        if($amt>$debit){
            echo "<script>
            alert('Transcation Failed due to insufficient credits!');
            window.location.href = 'transfer.php';
            </script>";
        }
        else{

        

        $queryr = 'SELECT u_credits FROM users WHERE u_name = "'.$to.'"';
        $result1 =  mysqli_query($conn,$queryr);
        while($row = mysqli_fetch_array($result1)) {
            $credit = $row['u_credits'];
        }
        $dec = $debit - $amt;
        $inc = $credit + $amt;
        $query1 = "UPDATE users SET u_credits = " . $dec . " WHERE u_name = '". $from . "'" ;
        $addcredit = mysqli_query($conn,$query1);
        $query5 = "UPDATE users SET u_credits = " . $inc . " WHERE u_name = '". $to . "'" ;
        $addcredit1 = mysqli_query($conn,$query5);
        $query2 = "INSERT INTO records (`sender`, `receiver`, `credits`) VALUES ('". $from ."', '". $to ."', '".$amt."');";
        $record = mysqli_query($conn,$query2);
        if(! $record){
            echo mysqli_error($conn);
        }
        echo "<script>
        alert('Transcation Sucessful');
        window.location.href = 'bankhomepage.php';
        </script>";
        }
    }
    else{
        echo "<script>
        alert('Sender and Receiver cannot be same!');
        window.location.href = 'transfer.php';
        </script>";
    }
}
?>
</body>
</html>