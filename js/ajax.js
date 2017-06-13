$(document).ready(function() {
    //post request to fetch the user data using the id passed as uri segment. posts to list.php; formats the response and writes it to the document.
    $.ajax({
            type: "Post",
            url: "./list.php",
            success: function(data) {
                console.log(data);
                var obj =JSON.parse(data);
                var temp = obj.contact;
                console.log(temp);
                var result = "<ul>"
                $.each(temp, function() {
                    var gid = this['id'];
                    var uri = "https://kisaantesting.000webhostapp.com/sendMessage.php?id="+gid;
                    var res = encodeURI(uri);                    
                    result = result + "<li><a href = " + res + "><button type='button' class='btn btn-link details'>" + this['first_name'] + " " + this['last_name'] + "</button></a></li>";        
                });
                result = result + "</ul>"
                $("#result").html(result);
            }
    }); 
    //post request to fetch the otp history. calls history.php; formats the response and writes it to the document.
    $.ajax({
            type: "Post",
            url: "./history.php",
            success: function(data) {
                console.log(data);
                var obj =JSON.parse(data);
                var temp = obj.contact;
                console.log(temp);
                var result = "<ul>"
                $.each(temp, function() {          
                    result = result + "<li>" + this['first_name'] + " " + this['last_name'] + " " + this['number'] + " " +  this['timestamp'] + " " + this['otp'] + " "+ "</button></a></li>";        
                });
                result = result + "</ul>"
                $("#history").html(result);
            }
    }); 
});