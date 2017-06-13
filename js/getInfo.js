$(document).ready(function() {
    //function to parse the uri segment and get the value of the parameter corresponding to the passed tag name.
    function getQueryStringValue (key) {  
    return decodeURIComponent(window.location.search.replace(new RegExp("^(?:.*[&\\?]" + encodeURIComponent(key).replace(/[\.\+\*]/g, "\\$&") + "(?:\\=([^&]*))?)?.*$", "i"), "$1"));  
    }   
    var gid = getQueryStringValue("id");
    var numb;
    //post request to details.php for fetching the contact info based on the id parsed from the url;
    $.ajax({
            type: "Post",
            url: "./details.php",
            data: jQuery.param({ id: gid}),
            contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
            success: function(data) {
                console.log(data);
                var obj =JSON.parse(data);
                var temp = obj.contact;
                console.log(temp);
                var name = temp['fname'] + " " + temp['lname'];             
                $("#name").html(name);
                numb = temp['pnumb'];
                $("#number").html(numb);
            }
    }); 

    //post request to send the otp using twilio and save the otp history using send.php on click of the send button
    $('#postMsg').click(function(){
        var msg = document.getElementById('msg').textContent;
        console.log(msg);
        $.ajax({
                type: "Post",
                url: "./send.php",
                data: jQuery.param({ number: numb, otp: msg}),
                contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
                success: function(data) {
                    console.log(data);
                }
        }); 
    });
});