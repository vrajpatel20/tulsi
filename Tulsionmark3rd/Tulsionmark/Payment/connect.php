<?php
    // $name = $_POST['name'];
    // $phone = $_POST['phone'];
    // $address = $_POST['address'];
    // $payment = $_POST['payment'];

    //Database Connection
    $conn = new mysqli('localhost','root','','test');
    // if($conn->connect_error){
    //     die('Connection Failed :'.$conn->connect_error);
    // }
    // else{
    //     $stmt = $conn->prepare("insert into registration(name,phone,address,payment)values(?,?,?,?)");
    //     $stmt->bind_param("siss",$name,$phone,$address,$payment);
    //     $stmt->execute();
    //     echo "Your Order Successfully Place";
    //     echo "Please Wait 30Min";
    //     $stmt->close();
    //     $conn->close();
    // }
?>

<?php
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $payment = $_POST['payment'];

    //Database Connection
    $conn = new mysqli('localhost','root','','test');
    if($conn->connect_error){
        echo "$conn->connect_error";
        die('Connection Failed :'.$conn->connect_error);
    }
    else{
        $stmt = $conn->prepare("insert into registration(name,phone,address,payment)values(?,?,?,?)");
        $stmt->bind_param("siss",$name,$phone,$address,$payment);
        $execval = $stmt->execute();
        echo $execval;
        echo "Your Order Successfully Place";
        echo "Please Wait 30Min";
        $stmt->close();
        $conn->close();
    }
?>