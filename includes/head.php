<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="ISO 8859-1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./styles/general.css">
    <link rel="stylesheet" href="./styles/logos.css">
    <link rel="stylesheet" href="./styles/loading-screen.css">
    <link rel="stylesheet" href="./styles/header.css">
    <link rel="stylesheet" href="./styles/wp-icon.css">
    <link rel="stylesheet" href="./styles/nosotros.css">
    <link rel="stylesheet" href="./styles/servicios.css">
    <link rel="stylesheet" href="./styles/fotos.css">
    <link rel="stylesheet" href="./styles/formulario.css">
    <link rel="stylesheet" href="./styles/banners.css">
    <link rel="stylesheet" href="./styles/footer.css">
    <link rel="stylesheet" href="./styles/alerts.css">
    <link href="https://fonts.googleapis.com/css?family=Advent+Pro|BenchNine|Dancing+Script|Kaushan+Script|Merienda|Pragati+Narrow|Tenor+Sans&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="./icon/iconfinder_Cocktail_2376769.ico" type="image/x-icon">
    <title><?php echo TITLE; ?></title>
</head>

<body>

    <div id="loading"> <!--remover el style -->
        <div class="center" id="loading-flex">
            <div class="logo2 logos"></div>
            <h1>Cargando&#8230;</h1>
            <div id="gif" class="logos"></div>
        </div>
    </div>

<script>
setTimeout(iniciarPagina, 5000); //cambiar el 1 por 5

function iniciarPagina() {
    
    if (document.readyState == 'complete') 
    {
        document.getElementById("loading").style.display= "none";
        document.getElementById("body-loaded").style.display= "contents";
    }
} 
</script>
