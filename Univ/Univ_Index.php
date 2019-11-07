<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../Css/w3.css">
    <link rel="stylesheet" href="../Css/font.css">
    <link rel="stylesheet" href="../Css/styleAccueil.css" />
    <link rel="stylesheet" href="../Css/styleButton.css">
    <title>Projet</title>

<body>

<br>
<!-- Sidebar/menu -->

<nav class="w3-sidebar w3-blue w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>

    <a href="../index.php" ><h1>Accueil</h1></a></br>
    <h2>Etablissements de restauration</h2>
    <div class="w3-bar-block">

        <table>
            <tr>
                <td> <button style="background-color: white ; color: black;"><a href="../index.php"  class="w3-bar-item w3-button w3-hover-white">
                            RESTAURANT UNIVERSITAIRE LE TETRE </br></br> 2, Route de la Jonelière</a></button></td>
            </tr>
            <tr>
                <td> <button><a href="Détail_univ.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">
                            Détail Du Résultat Sanitaire</a></button></td>
            </tr>
            <tr>
                <td> <button><a href="Fréquentation_Univ.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">
                            Fréquentations mensuelle de l’établissement</a></button></td>
            </tr>


        </table>
    </div>

</nav>

<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">

    <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>

</header>



<div class="w3-main" style="margin-left:340px;margin-right:40px">

    <div class="w3-container" style="margin-top:20px" id="showcase">

        <img src="../image/Resto_univ.png">

    </div>

    <div class="gallery">


    </div>

</body>
</head>
</html>