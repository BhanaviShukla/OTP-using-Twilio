$(document).ready(function() {
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