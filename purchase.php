<?php
  session_start();
  $con= mysqli_connect("localhost","root","","feast");

  if(mysqli_connect_error()){
    echo"<script>
    alert('Cannot connect to database');
    window.location.href='mycart.php';    
    </script>";
    exit();
  }

  if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['purchase'])){
        $full_name = mysqli_real_escape_string($con, $_POST['full_name']);
        $phone_no = mysqli_real_escape_string($con, $_POST['Phone_no']);
        $address = mysqli_real_escape_string($con, $_POST['address']);
        $pay_mode = mysqli_real_escape_string($con, $_POST['pay_mode']);
        
        $query1 = "INSERT INTO `order_manager` (`Full_name`, `Phone_no`, `Address`, `Pay_mode`) 
                   VALUES ('$full_name', '$phone_no', '$address', '$pay_mode')";
        if(mysqli_query($con, $query1)){
            $Order_id=mysqli_insert_id($con);
            $query2="INSERT INTO `user_orders`(`Order_id`, `Item_name`, `Price`, `Quantity`) VALUES (?,?,?,?)";
            $stmt=mysqli_prepare($con,$query2);
            if($stmt){
                mysqli_stmt_bind_param($stmt,"isii",$Order_id,$Item_name,$Price,$Quantity);
                foreach($_SESSION['cart'] as $key=> $values){
                  $Item_name=$values['Item_name'];
                  $Price=$values['Price'];
                  $Quantity=$values['Quantity'];
                  mysqli_stmt_execute($stmt);
                }
                unset($_SESSION['cart']);
                echo"<script>
                 alert('Order Placed');
                 window.location.href='product.php';    
                </script>";
            }
            else{
                echo"<script>
                 alert('SQL Query Prepared error');
                 window.location.href='mycart.php';    
                </script>";
            }
        }
        else{
            echo"<script>
              alert('SQL error');
              window.location.href='mycart.php';    
            </script>";
        }
    }
  }
?>