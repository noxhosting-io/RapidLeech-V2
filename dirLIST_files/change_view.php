<?PHP
//dirLIST v0.3.0 change view file
session_start();
$_SESSION['view_mode_session'] = ($_SESSION['view_mode_session'] == 0) ? 1 : 0;
(empty($_GET['folder'])) ? header('Location: ../dirLIST.php') : header('Location: ../dirLIST.php?folder='.$_GET['folder']);
?>