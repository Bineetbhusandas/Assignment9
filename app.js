
$(document).ready(function () {
	
        $('#passcheck').hide();
        let passwordError = true;
        $('#password').keyup(function () {
            validatePassword();
        });
        function validatePassword() {
            let passwrdValue =
                $('#password').val();
            if (passwrdValue.length == '') {
                $('#passcheck').show();
                passwordError = false;
                return false;
            }
            if ((passwrdValue.length < 3)||
                (passwrdValue.length > 10)) {
                $('#passcheck').show();
                $('#passcheck').html
    ("**length of your password must be between 3 and 10");
                $('#passcheck').css("color", "orange");
                passwordError = false;
                return false;
            } else {
                $('#passcheck').hide();
            }
        }
            
    
    });
    