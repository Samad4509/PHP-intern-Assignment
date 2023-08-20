<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                <div class="card-body">
                        <?php 
                            if(isset($_POST['submit'])){
                            $user=$_POST['username'];
                            $pass=$_POST['password'];
                            if($user=="admin"&& $pass=="admin")
                            {
                                echo ("user and password matched");
                            }
                            else{
                                echo("error !please enter your data");
                            }
                            }
                        ?>
                </div>
            </div>
            </div>
        </div>
    </div>
</html>