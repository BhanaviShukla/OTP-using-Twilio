<!DOCTYPE html>
<html lang="en">
<head>
  <title>Otp Challenge</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script language="javascript" type="text/javascript" src="js/ajax.js"></script>

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
      <a class="navbar-brand" href="#">Kisan Code Challenge</a>
    </div>
    <div class="collapse navbar-collapse" id="navbar">
      <ul class="nav navbar-nav">
        <li class="active"><a data-toggle="tab" href="#contacts">Contacts</a></li>
        <li><a data-toggle="tab" href="#kuchhto">Message History</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="tab-content">
    <div id="contacts" class="tab-pane fade in active">
      <h3>Contacts</h3>
      <div id="result"></div>
      <p> Only the first one works. The number which was given to me, required OTP to get verified. Hence didn't use it. Instead I can send you screenshots of the OTP that I got on my number.
    </div>
    <div id ="kuchhto" class="tab-pane fade">
      <h3>History</h3>
      <div id = "history"></div>
    </div>
  </div>

</body>
</html>