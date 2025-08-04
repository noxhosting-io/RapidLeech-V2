<?php
// You can do something here before finish executing the script
@date_default_timezone_set(date_default_timezone_get());
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link title="Rapidleech Style" href="templates/bootstrap/styles/rl_style_pm.css" rel="stylesheet" type="text/css" />
 <link href="templates/bootstrap/styles/css/bootstrap.css" rel="stylesheet">
 <link rel="stylesheet" href="templates/bootstrap/styles/css2/bootstrap.css" media="screen">
 <link href="templates/bootstrap/styles/modern_dark.css" rel="stylesheet">


    <link href="css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="templates/bootstrap/styles/font-awesome/css/font-awesome.min.css">
<title><?php
if (!isset($nn)) $nn = "\r\n";
if (!isset($page_title)) {
	echo 'Rapidleech v2 rev. '.$rev_num;
} else {
	echo htmlentities($page_title);
}
?></title>
<script type="text/javascript">
/* <![CDATA[ */
var php_js_strings = [];
php_js_strings[87] = " <?php echo lang(87); ?>";
php_js_strings[281] = "<?php echo lang(281); ?>";
pic1= new Image(); 
pic1.src="templates/bootstrap/images/ajax-loading.gif";
/* ]]> */
</script>
<script type="text/javascript" src="classes/js.js"></script>
<?php
if ($options['ajax_refresh']) { echo '<script type="text/javascript" src="classes/ajax_refresh.js"></script>'.$nn; }
if ($options['flist_sort']) { echo '<script type="text/javascript" src="classes/sorttable.js"></script>'.$nn; }
?>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const themeToggleButton = document.getElementById('theme-toggle');
        const currentTheme = localStorage.getItem('theme');

        // Apply saved theme or default to dark-mode
        if (currentTheme) {
            document.body.classList.add(currentTheme);
        } else {
            document.body.classList.add('dark-mode');
        }

        themeToggleButton.addEventListener('click', function(e) {
            e.preventDefault();
            document.body.classList.toggle('dark-mode');
            
            let theme = 'light-mode';
            if(document.body.classList.contains('dark-mode')) {
                theme = 'dark-mode';
            }
            localStorage.setItem('theme', theme);
        });
    });
</script>
<style>
    .navbar-brand-logo {
        padding: 5px 15px;
    }
    .navbar-brand-logo img {
        height: 40px;
        width: auto;
    }
</style>
</head>

<body>