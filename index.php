<?php
    require_once 'Classes/User.php';
    require_once 'Classes/PremiumUser.php';

    $User1 = new User('antonio', 'russo', 'drake@gmail.com', 24);
    var_dump($User1);

    $PremiumUser1 = new User('drake', 'antonio', 'russo', 'drake@gmail.com', 24, 'Premium', 50);
    var_dump($PremiumUser1);



    
?>