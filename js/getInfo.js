$(document).ready(function() {
    function getQueryStringValue (key) {  
    return decodeURIComponent(window.location.search.replace(new RegExp("^(?:.*[&\\?]" + encodeURIComponent(key).replace(/[\.\+\*]/g, "\\$&") + "(?:\\=([^&]*))?)?.*$", "i"), "$1"));  
    }  

// Would write the value of the QueryString-variable called name to the console  
    var gid = getQueryStringValue("id");
    var numb;
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