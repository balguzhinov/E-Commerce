<?php

setcookie('customer', $customer['firstname'], time()- 3600*24,"/");

header('Location: /');

?>
