function checkform()
{
    var password = document.getElementById('password').value;
    var confirm_password = document.getElementById('confirm_password').value;

    if(password!==confirm_password)
    {
        alert('Password and Confirm Password does not matched!');
        return false;
    }
}