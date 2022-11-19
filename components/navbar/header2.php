<?php
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  $loggedin=true;
}
else{
  $loggedin=false;
}
echo "<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Header</title>
    <link rel='stylesheet' href='../../../Project-SMART/components/navbar/header2.css'>
</head>

<body>
    <div class='body'>
        <header>
            <img src='../../../Project-SMART/components/navbar/img1.jpg' alt='' class='banner'>
            <a href='../../../Project-SMART/genral/index.php' class='logo'>SMART</a>
            <div class='toggle'></div>
            <nav>
                <ul>
                    <li><a href='../../../Project-SMART/genral/index.php'>Home</a></li>
                    <li><a href='../../../Project-SMART/genral/about.php'>About</a></li>
                    
                    <li><a href='../../../Project-SMART/genral/contact.php'>Contact Us</a></li>";
                    
                    if(!$loggedin){
                        echo "<li><a href='../../../Project-SMART/genral/join.php'>Join</a></li>";
                    }
                    
                    if($loggedin){
                        echo "
                    <li><a href='../../../Project-SMART/genral/logout.php'>Logout</a></li>";
                    }

                    
                echo"</ul>
            </nav>
        </header>
        
        <script>
            window.addEventListener('scroll', function () {
                const header = document.querySelector('header');
                header.classList.toggle('sticky', window.scrollY > 0);
            });
            const navigation = document.querySelector('nav');
            document.querySelector('.toggle').onclick = function () {
                this.classList.toggle('active');
                navigation.classList.toggle('active');
            }
        </script>
    </div>
</body>

</html>";

?>