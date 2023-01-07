<?php error_reporting(0);
include "./includes/admin_header.php";

if(isset($_GET['source'])){
    $source=$_GET['source'];
}else{
    $source='';
}
switch ($source) {
    case 'add':
        include "./pages/add.php";
    break;
    case 'view':
        include "./pages/view.php";
    break;
    default:
        include "./pages/view.php";
    break;
}













include "./includes/admin_footer.php";