<?php


include 'conexion.php';
$id = $_GET["id"];

$consulta = "SELECT * FROM usuario WHERE id_user=$id";
$res =  $con->query($consulta);

for ($row_no = $res->num_rows - 1; $row_no >= 0; $row_no--) {
    $res->data_seek($row_no);
    $row = $res->fetch_assoc();


}

if($row['estudo'] == 1) {

    $yn = 'Sim';

} else{

  $yn = 'Não';
}

echo '<html style="font-size: 16px;" lang="pt"><head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<meta name="keywords" content="Usuário, Olá, sou um usuário do CyberBus">
<meta name="description" content="">
<title>Sobre</title>
<link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Sobre.css" media="screen">
<script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
<script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
<meta name="generator" content="Nicepage 4.14.1, nicepage.com">
<link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="generator" content="Mobirise v5.6.11, mobirise.com">
<meta name="twitter:card" content="summary_large_image"/>
<meta name="twitter:image:src" content="">
<meta property="og:image" content="">
<meta name="twitter:title" content="Home">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
<link rel="shortcut icon" href="assets2/images/travel-1962320-960.webp" type="image/x-icon">
<meta name="description" content="">


<title>Home</title>
<link rel="stylesheet" href="assets2/web/assets/mobirise-icons2/mobirise2.css">
<link rel="stylesheet" href="assets2/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets2/bootstrap/css/bootstrap-grid.min.css">
<link rel="stylesheet" href="assets2/bootstrap/css/bootstrap-reboot.min.css">
<link rel="stylesheet" href="assets2/parallax/jarallax.css">
<link rel="stylesheet" href="assets2/dropdown/css/style.css">
<link rel="stylesheet" href="assets2/socicon/css/styles.css">
<link rel="stylesheet" href="assets2/theme/css/style.css">
<link rel="preload" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap" as="style" onload="this.onload=null;this.rel="stylesheet">
<noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap"></noscript>
<link rel="preload" as="style" href="assets2/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets2/mobirise/css/mbr-additional.css" type="text/css">

<section data-bs-version="5.1" class="menu menu3 cid-tcyq4YKfEM" once="menu" id="menu3-0">

<nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
    <div class="container">
        <div class="navbar-brand">
            <span class="navbar-logo">
              
                    <img src="assets/images/travel-1962320-960.webp" alt="" style="height: 3rem;">
                </a>
            </span>
            <span class="navbar-caption-wrap"><a class="navbar-caption text-black display-7" href="./index.html">CyberBus</a></span>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse" data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item"><a class="nav-link link text-black display-4" href="./index.html">Home</a></li>
                <li class="nav-item"><a class="nav-link link text-black display-4" href="./EspPost.php">Usuários</a></li>
                <li class="nav-item"><a class="nav-link link text-black display-4" href="./sobre2.html">Sobre</a>
                </li></ul>
            
            
        </div>
    </div>
</nav>
</section>

<script type="application/ld+json">{
    "@context": "http://schema.org",
    "@type": "Organization",
    "name": "",
    "logo": "images/default-logo.png"
}</script>
<body data-home-page="Sobre.html" data-home-page-title="Sobre" class="u-body u-xl-mode" data-lang="pt"><header class="u-clearfix u-header u-header" id="sec-cd40"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
</div></header>
<section class="u-align-center u-clearfix u-white u-section-1" id="carousel_37b1">
  <div class="u-clearfix u-sheet u-sheet-1">
    <h1 class="u-text u-text-1">'.$row['nome'].''.' #'.$row['id_user'].'</h1>
    <div class="u-clearfix u-layout-wrap u-layout-wrap-1">
      <div class="u-gutter-0 u-layout">
        <div class="u-layout-col">
          <div class="u-align-center u-container-style u-layout-cell u-size-20 u-layout-cell-1">
            <div class="u-container-layout u-container-layout-1">
              <div alt="" class="u-image u-image-circle u-image-1" data-image-width="512" data-image-height="512"></div>
            </div>
          </div>
          <div class="u-align-left u-container-style u-layout-cell u-palette-1-base u-size-20 u-layout-cell-2">
            <div class="u-container-layout u-valign-top u-container-layout-2">
              <h1 class="u-text u-text-default u-text-font u-text-2">Olá, sou um usuário do CyberBus</h1>
            </div>
          </div>
          <div class="u-align-center u-container-style u-layout-cell u-size-20 u-layout-cell-3">
            <div class="u-container-layout u-container-layout-3">
              <h3 class="u-text u-text-default u-text-3">Detalhes</h3><br>
              <h4 class="u-text u-text-default u-text-3">Etudante: '.$yn.'</h4>
              <p class="u-text u-text-4">
      
                <span style="font-weight: 700;">Nome:&nbsp'.$row['nome'].'</span><br><br>
                <span style="font-weight: 700;">Saldo:&nbspR$'.$row['saldo'].'</span> <br>
                
                <br><b>Último acesso: <br>'.date('d/m/Y \a\s h:i:s', strtotime($row['tempo'])).'</b>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="u-clearfix u-section-2" id="sec-f131">
  <div class="u-clearfix u-sheet u-sheet-1"></div>
</section>
<section data-bs-version="5.1" class="footer4 cid-tcywWeLsU6" once="footers" id="footer4-8">





  <div class="container">
      <div class="row mbr-white">
          <div class="col-6 col-lg-3">
              <div class="media-wrap col-md-4 col-12">
                  <a href="">
                      <img src="assets2/images/jxojfikv-400x400-removebg-preview.png" alt="Mobirise Website Builder">
                      
                  </a>
              </div>
          </div>

          <div class="col-12 col-md-6 col-lg-3">
              
              <p class="mbr-text mbr-fonts-style mb-4 display-4"><br><br><br></p>
              
              
          </div>
          <div class="col-12 col-md-6 col-lg-3">
              
              <ul class="list mbr-fonts-style display-4">
                  <li class="mbr-text item-wrap"><span style="font-size: 1.1rem;">Universidade Estadual do Oeste do Paraná;</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li><li class="mbr-text item-wrap"><span style="font-size: 1.1rem;">Engenharia&nbsp;</span>Mecânica.<span style="font-size: 1.1rem;">&nbsp; &nbsp;</span><span style="font-size: 1.1rem;">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="font-size: 1.1rem;">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="font-size: 1.1rem;">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="font-size: 1.1rem;">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="font-size: 1.1rem;">&nbsp; &nbsp;</span></li>
              </ul>
          </div>
          <div class="col-12 col-md-6 col-lg-3">
              
              <ul class="list mbr-fonts-style display-4">
                  <li class="mbr-text item-wrap"><span style="font-size: 1.1rem;">Centro de Engenharia e Ciências Exatas(CECE).</span></li><li class="mbr-text item-wrap"><span style="font-size: 1.1rem;">Paraná, Foz do Iguaçu(2022).<br></span><br></li>
              </ul>
          </div>
          
      </div>
  </div>
  </section><script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>  <script src="assets/smoothscroll/smooth-scroll.js"></script>  <script src="assets/ytplayer/index.js"></script>  <script src="assets/dropdown/js/navbar-dropdown.js"></script>
  '
?>