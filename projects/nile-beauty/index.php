<?php
    include "../../config.php";
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="../../assets/css/nile.css">
    <link rel="stylesheet" href="../../assets/css/language-select.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200&display=swap" rel="stylesheet">
    
<!-- PT Serif -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@1,400;1,700&family=Shippori+Mincho&display=swap" rel="stylesheet">    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Shippori+Mincho&display=swap" rel="stylesheet">
    
    <title><?php echo $lang['title-nile'] ?></title>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>
</head>

<body>
    <div class="wrapper4" id="nileApp">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="../../index.php"><img src="../../assets/images/invade-logo-2.svg" alt="INVADE" height="15"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="../../index.php"><?php echo $lang['home'] ?></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../../index.php#news"><?php echo $lang['news'] ?></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../../index.php#about"><?php echo $lang['about'] ?></a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <?php echo $lang['project'] ?>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="../kamismax/index.php">KAMISMAX</a></li>
                      <li><a class="dropdown-item" href="../kamisma-beauty/index.php">KAMISMA BEAUTY</a></li>
                      <li><a class="dropdown-item active" href="index.php">NILE BEAUTY</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../../index.php#profile"><?php echo $lang['profile'] ?></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../../index.php#contact"><?php echo $lang['contact'] ?></a>
                  </li>
                </ul>
              </div>
            </div>
        </nav>

            <div class="language-select">
              <a href="index.php?lang=en"><?php echo $lang['lang_en'] ?></a>
            | <a href="index.php?lang=ja"><?php echo $lang['lang_ja'] ?></a>
            </div>
        
        <div class="title-banner">
            <div class="logo-area">
                <div class="logo-img">
                    <img src="../../assets/images/nile/nile-beauty.png" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="container-fluid px-0">
            <section class="section01">
              <div class="container">
                <div class="intro col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-sm-12">
                    <div class="intro-text">
                      <h6 class="text-center"><?php echo $lang['above-video-text'] ?></h6>
                    </div>
                    <div class="video-container">
                      <iframe class="responsive-iframe" src="https://www.youtube.com/embed/niUeC32DTLA"></iframe>
                    </div>  
                    <div class="video-bottom-text">
                      <p><?php echo $lang['bottom-video-text'] ?></p>
                    </div>
                </div>
              </div>
            </section>
            <section class="section02">
              <div class="background-text">
                <h2>ABOUT NILE</h2>
              </div>
              <div class="container">
                <div class="about">
                  <p><?php echo $lang['about-nile'] ?></p>
                </div>
              </div>
            </section>
            <section class="section03">
              
              <div class="container">
                <h3>With NILE, you can...</h3>
                <div class="row">
                  <div class="col-lg-3 col-sm-6 mb-3">
                    <div class="card h-100" data-aos="zoom-right">
                      <img src="../../assets/images/nile/img001.png" alt="exhibition" class="img-fluid">
                      <div class="card-body">
                        <p class="card-text smaller"><?php echo $lang['youcan1'] ?></p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 mb-3">
                    <div class="card h-100" data-aos="zoom-right">
                      <img src="../../assets/images/nile/img002.png" alt="exhibition" class="img-fluid">
                      <div class="card-body">
                        <p class="card-text smaller"><?php echo $lang['youcan2'] ?></p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 mb-3">
                    <div class="card h-100" data-aos="zoom-right">
                      <img src="../../assets/images/nile/img003.png" alt="exhibition" class="img-fluid">
                      <div class="card-body">
                        <p class="card-text smaller"><?php echo $lang['youcan3'] ?></p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 mb-3">
                    <div class="card h-100" data-aos="zoom-right">
                      <img src="../../assets/images/nile/img004.png" alt="exhibition" class="img-fluid">
                      <div class="card-body">
                        <p class="card-text smaller"><?php echo $lang['youcan4'] ?></p>
                      </div>
                    </div>
                  </div>

                </div>
                <div class="list">

                  <ul>
                    <li><?php echo $lang['youcan5'] ?></li>
                    <li><?php echo $lang['youcan6'] ?></li>
                    <li><?php echo $lang['youcan7'] ?></li>
                  </ul>
                </div>
              </div>
            </section>
            <section class="section04">
              <div class="container">
                <h2 class="mb-3">You can start easily with NILE.</h2>
                  
                  <div class="row">


                    <div class="col-lg-4 col-md-4 mb-3 d-flex align-items-stretch">
                      <div class="card">
                        <div class="card-body d-flex flex-column top-text">
                          <p class="card-text mb-4"><?php echo $lang['top1'] ?></p>
                        </div>
                        <img src="../../assets/images/nile/st001.png" alt="image" class="img-fluid">
                        <div class="card-body d-flex flex-column bottom-text">
                          <p class="card-text mb-4"><?php echo $lang['bottom1'] ?></p>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 mb-3 d-flex align-items-stretch">
                      <div class="card">
                        <div class="card-body d-flex flex-column top-text">
                          <p class="card-text mb-4"><?php echo $lang['top2'] ?></p>
                        </div>
                        <img src="../../assets/images/nile/st002.png" alt="image" class="img-fluid">
                        <div class="card-body d-flex flex-column bottom-text">
                          <p class="card-text mb-4"><?php echo $lang['bottom2'] ?></p>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 mb-3 d-flex align-items-stretch">
                      <div class="card">
                        <div class="card-body d-flex flex-column top-text">
                          <p class="card-text mb-4"><?php echo $lang['top3'] ?></p>
                        </div>
                        <img src="../../assets/images/nile/st003.png" alt="image" class="img-fluid">
                        <div class="card-body d-flex flex-column bottom-text">
                          <p class="card-text mb-4"><?php echo $lang['bottom3'] ?></p>
                        </div>
                      </div>
                    </div>
                    
                    
                  </div>
                  <p class="text-center my-3 small"></p>
              </div>
              <hr>
              <div class="container end">
                <div class="to-end"><?php echo $lang['message'] ?></div>
                <div class="to-link">
                  <h6><?php echo $lang['register'] ?></h6>
                  <p class="link"><a href="https://beauty.nile.inc">https://beauty.nile.inc</a></p>
                </div>
                <div class="to-link">
                  <h6><?php echo $lang['service-p'] ?></h6>
                  <p class="link"><a href="https://beauty.nile.inc/service">https://beauty.nile.inc/service</a></p>
                </div>
              </div>
            </section>
        </div>
        <section class="footer">
            <div class="container">
              <div class="row">
                <div class="col-sm-4 company-footer text-center">
                  <h5>INVADE Co., Ltd.</h5>
                  <p>TEL: 03-5962-8585
                  <br><strong>email:</strong><a href="info@invade.co.jp">info@invade.co.jp</a></p>
                </div>
                <div class="col-sm-4 text-center">
                  <h5><?php echo $lang['service-footer'] ?></h5>
                  <ul class="p-0" style="list-style: none;">
                    <li><a href="https://beauty.kamisma.com" target="_blank">KAMISMA BEAUTY</a></li>
                    <li><a href="https://beauty.nile.inc" target="_blank">NILE BEAUTY</a></li>
                    <li><a href="https://kamismax.kamisma.com" target="_blank">KAMISMAX</a></li>
                  </ul>
                </div>
                <div class="col-sm-4">
                  
                </div>
              </div>
              <hr>
              <p class="text-center">Copyright INVADE Co., Ltd. All Rights Reserved</p>
            </div>
        </section>
    </div>
</body>


</html>