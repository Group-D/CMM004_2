

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
                        alert("That's you signed in, chief!!");

                        //var form = $('<form action="http://bbhubapp.azurewebsites.net/Home.php" method="POST">' +
                          //  '<input type="text" name="user" value="'+email+'" />' +
                            //'</form>');
                        //$('body').append(form);

                        var form =$("#myForm");
                        form.submit();
                        //$.session.set("user", ""+email);
                        //window.location.href = "http://bbhubapp.azurewebsites.net/Home.php";
                    }


                }
            });
        }
        return false;
    });
});