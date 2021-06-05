<?php
    include_once("db.php");

    $msg = "";
    if(isset($_POST['submit'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $msg = "";
        $ip="";

        // IP Address Detection
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        }
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }


        //Database Entry
        $sql = "INSERT INTO contact(fname,lname,email,msg,ip) VALUES('$fname','$lname','$email','$message','$ip')";

        if ($conn->query($sql) === TRUE)
		{
		    $msg = "Your Message has Successfully been Sent to Al-Amin Islam Hridoy!";
        }
		else
		{
            $msg = "There was an Error Connecting with the Database. Please Try Again Later!". $conn->error;
        }

        //Show Modal
        echo "<script type='text/javascript'>
            $(document).ready(function(){
            $('#SuccessModal').modal('show');
            });
            </script>";
      
    }
?>


<!-- Modal Code -->
<div class="modal fade" id="SuccessModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content dark-vertion black-bg">
            <div class="modal-body">
                <h4 style="color: #0bceaf; text-align: center"><?php echo $msg; ?></h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

