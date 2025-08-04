<?PHP
//dirLIST v0.3.0 language changer file
session_start();
$_SESSION['lang_id'] = $_GET['lang_id'];
header('Location: ../dirLIST.php?folder='.$_GET['folder']);
exit;
?>