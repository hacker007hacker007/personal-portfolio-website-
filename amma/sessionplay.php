
<pre>
<?php

include 'lib/load.php';

print("_session\n");
print_r($_SESSION);
print("_server\n");
print_r($_SERVER);

if (isset($_GET['clear'])) {
    print("cleaning..\n");
    Session::unset();
}

if (isset($_SESSION['a'])) {
    printf("a already exits.... value: ".Session::get('a'). "\n");
} else {
    Session::set('a', time());
    printf("assigning the value.... value: $_SESSION[a] \n");
}
if (isset($_GET['destory'])) {
    printf("destroy...\n");
    Session::destroy();
}



?>
