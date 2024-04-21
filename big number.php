<?php if (isset($_GET['password'])) {
    if (is_numeric($_GET['password'])){
        if (strlen($_GET['password']) < 4){
            if ($_GET['password'] > 999)
                die($flag);
            else
                print 'Too little';
        } else
                print 'Too long';
    } else
        print 'Password is not numeric';
}
?>