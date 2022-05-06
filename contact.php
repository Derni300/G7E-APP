<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav>
    <ul>
        <li style='padding-right: 2px'><a href="index.php">Acceuil</a></li>
        <li style='padding-right: 2px'><a href="box.php">La boite</a></li>
        <li style='padding-right: 2px'><a href="team.php">L'équipe</a></li>
        <li><a href="contact.php">Contact</a></li>

        <?php 
            if($_SESSION["loggedin"] = false){
                echo "<li style='float:right';><a href='login.php'>Se connecter</a></li>";
                echo "<li style='float:right; padding-right: 2px;'><a href='register.php'>S'inscrire</a></li>";
            } else {
                echo "<li style='float:right';><a href='logout.php'>Se déconnecter</a></li>";
                echo "<li style='float:right; padding-right: 2px;'><a class='inverted'> Bienvenu " . $_SESSION["username"] . " !</a></li>";
            }      
        ?>
    </ul>
</nav>

<br><br>

<div class="container-big">

    <br><br><br><br>

    <div class="capteur-line">
        <div class="capteur-left">
            <a href="https://www.facebook.com/InfiniteMeasuresFr">
                <img src="images/facebook.png" alt="Feature 01" style="width: 20em;">
            </a>
            <h4 style="font-size: 3em;">Notre Facebook</h4>
        </div>

        <div class="capteur-right">
            <a href="https://www.instagram.com/infinite_measures/">
                <img src="images/instagram.png" alt="Feature 02" style="width: 20em;">
            </a>
            <h4 style="font-size: 3em;">Notre instagram</h4>
        </div>
    </div>

    <br><br><br><br><br>

    <div class="capteur-line">
        <div class="capteur-left">
            <a href="https://twitter.com/InfiniteMeasur4">
                <img src="images/twitter.png" alt="Feature 03" style="width: 20em;">
            </a>
            <h4 style="font-size: 3em;">Notre Twitter</h4>
        </div>

        <div class="capteur-right">
            <a href="mailto:infinitemeasuresprocontact@gmail.com">
                <img src="images/email.png" alt="Feature 04" style="width: 20em;">
            </a>
            <h4 style="font-size: 3em;">Notre E-mail</h4>
        </div>
    </div>
</div>

<br>

<footer>
    <a href="contact.php">
        <img class="logo" src="images/logo_IM.png" alt="Logo" style="width: 10em;">
    </a>
    
    <ul>
        <li>
            <a href="https://www.facebook.com/InfiniteMeasuresFr">
                <span class="screen-reader-text">Facebook</span>
                <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.023 16L6 9H3V6h3V4c0-2.7 1.672-4 4.08-4 1.153 0 2.144.086 2.433.124v2.821h-1.67c-1.31 0-1.563.623-1.563 1.536V6H13l-1 3H9.28v7H6.023z" fill="#0270D7"></path>
                </svg>
            </a>
        </li>
        <li>
            <a href="https://www.instagram.com/infinite_measures/">
                <span class="screen-reader-text">Instagram</span>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Layer_1" width="16" height="16" viewBox="0 0 2476 2476"><defs><path id="SVGID_1_" d="M825.4 1238c0-227.9 184.7-412.7 412.6-412.7s412.7 184.8 412.7 412.7-184.8 412.7-412.7 412.7-412.6-184.8-412.6-412.7m-223.1 0c0 351.1 284.6 635.7 635.7 635.7s635.7-284.6 635.7-635.7-284.6-635.7-635.7-635.7S602.3 886.9 602.3 1238m1148-660.9c0 82 66.5 148.6 148.6 148.6 82 0 148.6-66.6 148.6-148.6s-66.5-148.5-148.6-148.5-148.6 66.5-148.6 148.5M737.8 2245.7c-120.7-5.5-186.3-25.6-229.9-42.6-57.8-22.5-99-49.3-142.4-92.6-43.3-43.3-70.2-84.5-92.6-142.3-17-43.6-37.1-109.2-42.6-229.9-6-130.5-7.2-169.7-7.2-500.3s1.3-369.7 7.2-500.3c5.5-120.7 25.7-186.2 42.6-229.9 22.5-57.8 49.3-99 92.6-142.4 43.3-43.3 84.5-70.2 142.4-92.6 43.6-17 109.2-37.1 229.9-42.6 130.5-6 169.7-7.2 500.2-7.2 330.6 0 369.7 1.3 500.3 7.2 120.7 5.5 186.2 25.7 229.9 42.6 57.8 22.4 99 49.3 142.4 92.6 43.3 43.3 70.1 84.6 92.6 142.4 17 43.6 37.1 109.2 42.6 229.9 6 130.6 7.2 169.7 7.2 500.3 0 330.5-1.2 369.7-7.2 500.3-5.5 120.7-25.7 186.3-42.6 229.9-22.5 57.8-49.3 99-92.6 142.3s-84.6 70.1-142.4 92.6c-43.6 17-109.2 37.1-229.9 42.6-130.5 6-169.7 7.2-500.3 7.2-330.5 0-369.7-1.2-500.2-7.2M727.6 7.5c-131.8 6-221.8 26.9-300.5 57.5-81.4 31.6-150.4 74-219.3 142.8C139 276.6 96.6 345.6 65 427.1 34.4 505.8 13.5 595.8 7.5 727.6 1.4 859.6 0 901.8 0 1238s1.4 378.4 7.5 510.4c6 131.8 26.9 221.8 57.5 300.5 31.6 81.4 73.9 150.5 142.8 219.3 68.8 68.8 137.8 111.1 219.3 142.8 78.8 30.6 168.7 51.5 300.5 57.5 132.1 6 174.2 7.5 510.4 7.5 336.3 0 378.4-1.4 510.4-7.5 131.8-6 221.8-26.9 300.5-57.5 81.4-31.7 150.4-74 219.3-142.8 68.8-68.8 111.1-137.9 142.8-219.3 30.6-78.7 51.6-168.7 57.5-300.5 6-132.1 7.4-174.2 7.4-510.4s-1.4-378.4-7.4-510.4c-6-131.8-26.9-221.8-57.5-300.5-31.7-81.4-74-150.4-142.8-219.3C2199.4 139 2130.3 96.6 2049 65c-78.8-30.6-168.8-51.6-300.5-57.5-132-6-174.2-7.5-510.4-7.5-336.3 0-378.4 1.4-510.5 7.5"></path></defs><clipPath id="SVGID_2_"><use overflow="visible" xlink:href="#SVGID_1_"></use></clipPath><path d="M-5964.9-5964.9H8447.9V8440.9H-5964.9z" clip-path="url(#SVGID_2_)"></path><defs><path id="SVGID_4_" d="M825.4 1238c0-227.9 184.7-412.7 412.6-412.7s412.7 184.8 412.7 412.7-184.8 412.7-412.7 412.7-412.6-184.8-412.6-412.7m-223.1 0c0 351.1 284.6 635.7 635.7 635.7s635.7-284.6 635.7-635.7-284.6-635.7-635.7-635.7S602.3 886.9 602.3 1238m1148-660.9c0 82 66.5 148.6 148.6 148.6 82 0 148.6-66.6 148.6-148.6s-66.5-148.5-148.6-148.5-148.6 66.5-148.6 148.5M737.8 2245.7c-120.7-5.5-186.3-25.6-229.9-42.6-57.8-22.5-99-49.3-142.4-92.6-43.3-43.3-70.2-84.5-92.6-142.3-17-43.6-37.1-109.2-42.6-229.9-6-130.5-7.2-169.7-7.2-500.3s1.3-369.7 7.2-500.3c5.5-120.7 25.7-186.2 42.6-229.9 22.5-57.8 49.3-99 92.6-142.4 43.3-43.3 84.5-70.2 142.4-92.6 43.6-17 109.2-37.1 229.9-42.6 130.5-6 169.7-7.2 500.2-7.2 330.6 0 369.7 1.3 500.3 7.2 120.7 5.5 186.2 25.7 229.9 42.6 57.8 22.4 99 49.3 142.4 92.6 43.3 43.3 70.1 84.6 92.6 142.4 17 43.6 37.1 109.2 42.6 229.9 6 130.6 7.2 169.7 7.2 500.3 0 330.5-1.2 369.7-7.2 500.3-5.5 120.7-25.7 186.3-42.6 229.9-22.5 57.8-49.3 99-92.6 142.3s-84.6 70.1-142.4 92.6c-43.6 17-109.2 37.1-229.9 42.6-130.5 6-169.7 7.2-500.3 7.2-330.5 0-369.7-1.2-500.2-7.2M727.6 7.5c-131.8 6-221.8 26.9-300.5 57.5-81.4 31.6-150.4 74-219.3 142.8C139 276.6 96.6 345.6 65 427.1 34.4 505.8 13.5 595.8 7.5 727.6 1.4 859.6 0 901.8 0 1238s1.4 378.4 7.5 510.4c6 131.8 26.9 221.8 57.5 300.5 31.6 81.4 73.9 150.5 142.8 219.3 68.8 68.8 137.8 111.1 219.3 142.8 78.8 30.6 168.7 51.5 300.5 57.5 132.1 6 174.2 7.5 510.4 7.5 336.3 0 378.4-1.4 510.4-7.5 131.8-6 221.8-26.9 300.5-57.5 81.4-31.7 150.4-74 219.3-142.8 68.8-68.8 111.1-137.9 142.8-219.3 30.6-78.7 51.6-168.7 57.5-300.5 6-132.1 7.4-174.2 7.4-510.4s-1.4-378.4-7.4-510.4c-6-131.8-26.9-221.8-57.5-300.5-31.7-81.4-74-150.4-142.8-219.3C2199.4 139 2130.3 96.6 2049 65c-78.8-30.6-168.8-51.6-300.5-57.5-132-6-174.2-7.5-510.4-7.5-336.3 0-378.4 1.4-510.5 7.5"></path></defs><clipPath id="SVGID_5_"><use overflow="visible" xlink:href="#SVGID_4_"></use></clipPath><path fill="#fff" d="M-450.2-450.2h3376.4v3376.4H-450.2z" clip-path="url(#SVGID_5_)"></path><g><defs><path id="SVGID_6_" d="M825.4 1238c0-227.9 184.7-412.7 412.6-412.7s412.7 184.8 412.7 412.7-184.8 412.7-412.7 412.7-412.6-184.8-412.6-412.7m-223.1 0c0 351.1 284.6 635.7 635.7 635.7s635.7-284.6 635.7-635.7-284.6-635.7-635.7-635.7S602.3 886.9 602.3 1238m1148-660.9c0 82 66.5 148.6 148.6 148.6 82 0 148.6-66.6 148.6-148.6s-66.5-148.5-148.6-148.5-148.6 66.5-148.6 148.5M737.8 2245.7c-120.7-5.5-186.3-25.6-229.9-42.6-57.8-22.5-99-49.3-142.4-92.6-43.3-43.3-70.2-84.5-92.6-142.3-17-43.6-37.1-109.2-42.6-229.9-6-130.5-7.2-169.7-7.2-500.3s1.3-369.7 7.2-500.3c5.5-120.7 25.7-186.2 42.6-229.9 22.5-57.8 49.3-99 92.6-142.4 43.3-43.3 84.5-70.2 142.4-92.6 43.6-17 109.2-37.1 229.9-42.6 130.5-6 169.7-7.2 500.2-7.2 330.6 0 369.7 1.3 500.3 7.2 120.7 5.5 186.2 25.7 229.9 42.6 57.8 22.4 99 49.3 142.4 92.6 43.3 43.3 70.1 84.6 92.6 142.4 17 43.6 37.1 109.2 42.6 229.9 6 130.6 7.2 169.7 7.2 500.3 0 330.5-1.2 369.7-7.2 500.3-5.5 120.7-25.7 186.3-42.6 229.9-22.5 57.8-49.3 99-92.6 142.3s-84.6 70.1-142.4 92.6c-43.6 17-109.2 37.1-229.9 42.6-130.5 6-169.7 7.2-500.3 7.2-330.5 0-369.7-1.2-500.2-7.2M727.6 7.5c-131.8 6-221.8 26.9-300.5 57.5-81.4 31.6-150.4 74-219.3 142.8C139 276.6 96.6 345.6 65 427.1 34.4 505.8 13.5 595.8 7.5 727.6 1.4 859.6 0 901.8 0 1238s1.4 378.4 7.5 510.4c6 131.8 26.9 221.8 57.5 300.5 31.6 81.4 73.9 150.5 142.8 219.3 68.8 68.8 137.8 111.1 219.3 142.8 78.8 30.6 168.7 51.5 300.5 57.5 132.1 6 174.2 7.5 510.4 7.5 336.3 0 378.4-1.4 510.4-7.5 131.8-6 221.8-26.9 300.5-57.5 81.4-31.7 150.4-74 219.3-142.8 68.8-68.8 111.1-137.9 142.8-219.3 30.6-78.7 51.6-168.7 57.5-300.5 6-132.1 7.4-174.2 7.4-510.4s-1.4-378.4-7.4-510.4c-6-131.8-26.9-221.8-57.5-300.5-31.7-81.4-74-150.4-142.8-219.3C2199.4 139 2130.3 96.6 2049 65c-78.8-30.6-168.8-51.6-300.5-57.5-132-6-174.2-7.5-510.4-7.5-336.3 0-378.4 1.4-510.5 7.5"></path></defs><clipPath id="SVGID_7_"><use overflow="visible" xlink:href="#SVGID_6_"></use></clipPath><g clip-path="url(#SVGID_7_)"><defs><path id="SVGID_8_" d="M-5964.9-5964.9H8447.9V8440.9H-5964.9z"></path></defs><clipPath id="SVGID_9_"><use overflow="visible" xlink:href="#SVGID_8_"></use></clipPath><g clip-path="url(#SVGID_9_)"><defs><path id="SVGID_10_" d="M-5964.9-5964.9H8447.9V8440.9H-5964.9z"></path></defs><clipPath id="SVGID_11_"><use overflow="visible" xlink:href="#SVGID_10_"></use></clipPath><path fill="#204bff" d="M-5964.9-5964.9H8440.9V8440.9H-5964.9z" clip-path="url(#SVGID_11_)"></path><defs><path id="SVGID_12_" d="M-5964.9-5964.9H8447.9V8440.9H-5964.9z"></path></defs><clipPath id="SVGID_13_"><use overflow="visible" xlink:href="#SVGID_12_"></use></clipPath><g clip-path="url(#SVGID_13_)"><defs><path id="SVGID_14_" d="M-3791.4-3601.5H8447.9V7174.7H-3791.4z"></path></defs><defs><path id="SVGID_15_" d="M-5964.9-5964.9H8447.9V8440.9H-5964.9z"></path></defs><clipPath id="SVGID_16_"><use overflow="visible" xlink:href="#SVGID_14_"></use></clipPath><clipPath id="SVGID_17_" clip-path="url(#SVGID_16_)"><use overflow="visible" xlink:href="#SVGID_15_"></use></clipPath><g clip-path="url(#SVGID_17_)"><defs><path id="SVGID_18_" d="M-3791.4-3601.4H8447.9V7174.8H-3791.4z"></path></defs><clipPath id="SVGID_19_"><use overflow="visible" xlink:href="#SVGID_18_"></use></clipPath></g><g clip-path="url(#SVGID_17_)"><defs><path id="SVGID_20_" d="M-5029.4-3010.6H6759.7V8356.5H-5029.4z"></path></defs><clipPath id="SVGID_21_"><use overflow="visible" xlink:href="#SVGID_20_"></use></clipPath><defs><path id="SVGID_22_" d="M-5964.9-5964.9H8447.9V8440.9H-5964.9z"></path></defs><clipPath id="SVGID_23_"><use overflow="visible" xlink:href="#SVGID_22_"></use></clipPath><g clip-path="url(#SVGID_23_)"><defs><path id="SVGID_24_" d="M-3594.4-844.1h8047v8047h-8047z"></path></defs><defs><path id="SVGID_25_" d="M-5964.9-5964.9H8447.9V8440.9H-5964.9z"></path></defs><clipPath id="SVGID_26_"><use overflow="visible" xlink:href="#SVGID_24_"></use></clipPath><clipPath id="SVGID_27_" clip-path="url(#SVGID_26_)"><use overflow="visible" xlink:href="#SVGID_25_"></use></clipPath><g clip-path="url(#SVGID_27_)"><defs><path id="SVGID_28_" d="M-3594.4-844.1h8047v8047h-8047z"></path></defs><clipPath id="SVGID_29_"><use overflow="visible" xlink:href="#SVGID_28_"></use></clipPath></g><g clip-path="url(#SVGID_27_)"><defs><path id="SVGID_30_" d="M-2469 478.3h6499.5v6499.5H-2469z"></path></defs><defs><path id="SVGID_31_" d="M-5964.9-5964.9H8447.9V8440.9H-5964.9z"></path></defs><clipPath id="SVGID_32_"><use overflow="visible" xlink:href="#SVGID_30_"></use></clipPath><clipPath id="SVGID_33_" clip-path="url(#SVGID_32_)"><use overflow="visible" xlink:href="#SVGID_31_"></use></clipPath><g clip-path="url(#SVGID_33_)"><defs><path id="SVGID_34_" d="M-2469 478.3h6499.5v6499.5H-2469z"></path></defs><clipPath id="SVGID_35_"><use overflow="visible" xlink:href="#SVGID_34_"></use></clipPath></g><g clip-path="url(#SVGID_33_)"><defs><path id="SVGID_36_" d="M-2891 900.4h6415.1v6218.1H-2891z"></path></defs><clipPath id="SVGID_37_"><use overflow="visible" xlink:href="#SVGID_36_"></use></clipPath><defs><path id="SVGID_38_" d="M-5964.9-5964.9H8447.9V8440.9H-5964.9z"></path></defs><clipPath id="SVGID_39_"><use overflow="visible" xlink:href="#SVGID_38_"></use>&lt;
                    </clipPath></g></g></g></g></g></g></g></g>
                </svg>
            </a>
        </li>
        <li>
            <a href="https://twitter.com/InfiniteMeasur4">
                <span class="screen-reader-text">Twitter</span>
                <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16 3c-.6.3-1.2.4-1.9.5.7-.4 1.2-1 1.4-1.8-.6.4-1.3.6-2.1.8-.6-.6-1.5-1-2.4-1-1.7 0-3.2 1.5-3.2 3.3 0 .3 0 .5.1.7-2.7-.1-5.2-1.4-6.8-3.4-.3.5-.4 1-.4 1.7 0 1.1.6 2.1 1.5 2.7-.5 0-1-.2-1.5-.4C.7 7.7 1.8 9 3.3 9.3c-.3.1-.6.1-.9.1-.2 0-.4 0-.6-.1.4 1.3 1.6 2.3 3.1 2.3-1.1.9-2.5 1.4-4.1 1.4H0c1.5.9 3.2 1.5 5 1.5 6 0 9.3-5 9.3-9.3v-.4C15 4.3 15.6 3.7 16 3z" fill="#0270D7"></path>
                </svg>
            </a>
        </li>
    </ul>
</footer>
</body>
</html>