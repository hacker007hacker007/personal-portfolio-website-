<?php 

include "lib/load.php";

session::start();

printf("the session value ..");
print_r($_SESSION);

if(session)