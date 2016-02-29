

$(document).ready(function(){
    $("#submit").click(function(){
        var email = $("#email").val();
        var password = $("#password").val();
// Returns successful data submission message when the entered information is stored in database.
        var dataString = 'email='+ email + '&password='+ password;
        if(email==''||password=='')
        {
            alert("Please Fill All Fields");
        }
        else
        {
// AJAX Code To Submit Form.
            $.ajax({
                type: "POST",
                url: "ajax-example.php",
                data: dataString,
                cache: false,
                success: function(result){
                    if(result!="success!"){
                    $("#result").innerHtml = result;
                    }
                    else{
                        alert("That's you signed in, chief");
                        $_SESSION["user"] = $name;
                        //$.session.set("user", ""+email);
                        window.location.href = "home.php";
                    }


                }
            });
        }
        return false;
    });
});