<?php
if(isset($_POST['checkEmail'])){
    if($user){
        echo $user['email'];
    }else{
        echo 'Email chưa đăng kí ';
    }
}
?>
<form method="post">
    <input type="email" name="email">
    <input type="submit" name ="checkEmail" value="check"> 
</form>