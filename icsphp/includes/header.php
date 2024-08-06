<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>User Signup | Registration and Login System</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous">
    </script>
    <script type="text/javascript">
    function checkpass() {
        if (document.signup.password.value != document.signup.confirmpassword.value) {
            alert(' Password and Confirm Password field does not match');
            document.signup.confirmpassword.focus();
            return false;
        }
        return true;
    }
    </script>

</head>

<body class="bg-primary">