<!DOCTYPE html>
<html lang="en">
<head>
  <title>You need to go back to see the history</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script language="javascript" type="text/javascript" src="js/getInfo.js"></script>

</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="https://kisaantesting.000webhostapp.com/">Kisan Code Challenge</a>
    </div>
  </div>
</nav>
<!--to display the user information-->
<div class="container">
    <h4>Name: </h4>
    <p id = "name"></p>
    <br>
    <h4>Number: </h4>
    <p id = "number"></p>

    <button type="button" class="btn btn-lg" data-toggle="modal" data-target="#compose">Send Message</button>

    <div class="modal fade" id="compose" role="dialog">
        <div class="modal-dialog">
        
            <!-- send otp modal content-->
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Send Otp</h4>
                </div>
                <div class="modal-body">
                <?php $otp = mt_rand(100000, 999999);?>
                    <p>Hi. Your OTP is: </p><p id ="msg"><?php echo $otp; ?></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" id="postMsg">Send</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        
        </div>
    </div>
    <p> Didn't work on the navbar links. Please click on the nav-brand or simply the back button of your browser to go back. Sorry! </p>

    

</div>

</body>
</html>