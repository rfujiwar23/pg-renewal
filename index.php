<?php
    include "config.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/index.css">
    <title><?php echo $lang['title'] ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200&display=swap" rel="stylesheet">
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    
</head>
<body>
    
    <div class="wrapper">
      <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="assets/images/invade-logo-2.svg" alt="INVADE" height="15"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                    <a class="nav-link active" href="../../index.php"><?php echo $lang['home'] ?></a>
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
                      <li><a class="dropdown-item" href="projects/kamismax/index.php">KAMISMAX</a></li>
                      <li><a class="dropdown-item" href="projects/kamisma-beauty/index.php">KAMISMA BEAUTY</a></li>
                      <li><a class="dropdown-item active" href="projects/nile-beauty/index.php">NILE BEAUTY</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../../index.php#profile"><?php echo $lang['profile'] ?></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../../index.php#contact"><?php echo $lang['contact'] ?></a>
                  </li>
            </div>
          </div>
      </nav>


            <!-- <div class="row justify-content-center">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <h1><?php echo $lang['title'] ?></h1>
                </div>
            </div> -->
            <div class="language-select">
              <a href="index.php?lang=en"><?php echo $lang['lang_en'] ?></a>
            | <a href="index.php?lang=ja"><?php echo $lang['lang_ja'] ?></a>
            </div>
        <section class="top-banner">

          <div class="logo">
            <h1><img src="/assets/images/invade-logo-2.svg" class="img-fluid" alt="INVADE インベード株式会社"><br>
              <span><?php echo $lang['title'] ?></span>
            </h1>

          </div>

        </section>
        <section class="part4" id="news">
          <div class="sect">
            <span>01</span>
            <p>／</p>
          </div>
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="our-projects">
                  <div class="text">
                    <h6>FROM US</h6>
                    <h3><span>NEWS</span></h3>
                    <!-- <h2>{{ $t("about.title") }}</h2> -->
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12">
              </div>
            </div>
          </div>
          <!-- <div id="list" class="row">

          </div> -->

          <div id="list-up" class="ac-container">

          </div>

          
          
        </section>
        <section class="part1" id="about">
          <div class="sect">
            <span>02</span>
            <p>／</p>
          </div>
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="about-our-company">
                  <div class="text">
                    <h6>What is INVADE Co., Ltd?</h6>
                    <h3><span>ABOUT</span></h3>
                    <!-- <h2>{{ $t("about.title") }}</h2> -->
                    <h5><?php echo $lang['concept'] ?></h5>
                    <p><?php echo $lang['conceptDescription'] ?></p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 px-0 info">
                <div class="">
                  <div style="visibility: hidden;">
                    <dl>
                      <dt>会社名</dt>
                      <dd>インベード株式会社</dd>
                    </dl>
                    <dl>
                      <dt>事業内容</dt>
                      <dd>インターネット、携帯電話網、その他通信システムを利用したデジタルコンテンツの企画、デザイン、制作、運営及び販売業務
                      ウェブコンテンツに関する企画、デザイン、制作、運営業務
                      情報システムの研究および開発
                      各種イベントの企画、制作等
                      </dd>
                    </dl>
                    <dl>
                      <dt>開発実績：</dt>
                      <dd>
                        <div class="inner">
                          <dl>
                            <dt>2021年6月</dt>
                            <dd>KAMISMA BEAUTY<br>（カミカリスマ美容師予約サービス）</dd>
                          </dl>
                          <dl>
                            <dt>2021年7月</dt>
                            <dd>NILE<br>（全世界対応B2Bマッチングプラットフォーム）</dd>
                          </dl>
                        </div>
                      </dd>
                    </dl>   
                    <dl>
                      <dt>資本金</dt>
                      <dd>300万円</dd>
                    </dl>
                  </div>
                </div>
                <!-- <img src="images/world-map.png" alt="" class="img-fluid"> -->
              </div>
            </div>
          </div>
        </section>
        <section class="part2" id="projects">
          <div class="sect">
            <span>03</span>
            <p>／</p>
          </div>
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="our-projects">
                  <div class="text">
                    <h6>Our Services</h6>
                    <h3><span>PROJECTS</span></h3>
                    <!-- <h2>{{ $t("about.title") }}</h2> -->
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 px-0">
                
                <!-- <img src="images/world-map.png" alt="" class="img-fluid"> -->
              </div>
            </div>
            
            <div class="services">

              <div class="item">
                  <div class="img">
                    <img src="assets/images/003-kamismax.png" :alt="$t('kmx.title')" class="img-fluid">
                  </div>
                  <div class="title">
                    <h4><?php echo $lang['kmxTitle'] ?></h4>
                  </div>
                  <div class="type">
                    <h5><?php echo $lang['kmxType'] ?></h5>
                  </div>
                  <div class="body">
                    <p style="white-space:pre-wrap;"><?php echo $lang['kmxBody'] ?></p>
                  </div>
                  <div class="link">
        
                    
                    <p><a class="btn-details" href="projects/kamismax/index.php">
                    <?php echo $lang['go_to_details'] ?>
                    </a></p>
                  </div>
              </div>
              <div class="item">
                  <div class="img">
                    <img src="assets/images/001-kamisma-beauty-logo.png" alt="KAMISMA Beauty" class="img-fluid">
                  </div>
                  <div class="title">
                    <h4><?php echo $lang['kmbTitle'] ?></h4>
                  </div>
                  <div class="type">
                    <h5><?php echo $lang['kmbType'] ?></h5>
                  </div>
                  <div class="body">
                    <p style="white-space:pre-wrap;"><?php echo $lang['kmbBody'] ?></p>
                  </div>
                  <div class="link">
                    
                    
                    <p><a class="btn-details" href="projects/kamisma-beauty/index.php">
                    <?php echo $lang['go_to_details'] ?>
                    </a></p>
                  </div>
              </div>
              <div class="item">
                  <div class="img">
                    <img src="assets/images/002-nile.png" alt="KAMISMA Beauty" class="img-fluid">
                  </div>
                  <div class="title">
                    <h4><?php echo $lang['nileTitle'] ?></h4>
                  </div>
                  <div class="type">
                    <h5><?php echo $lang['nileType'] ?></h5>
                  </div>
                  <div class="body">
                    <p style="white-space:pre-wrap;"><?php echo $lang['nileBody'] ?></p>
                  </div>
                  <div class="link">
                    
                  
                    <p><a class="btn-details" href="projects/nile-beauty/index.php"><?php echo $lang['go_to_details'] ?></a></p>
                    <!-- open modal -->
                    
                  </div>                 
              </div>

              


            </div>
          </div>
        </section>
        <section class="part3" id="profile">
          <div class="sect">
            <span>04</span>
            <p>／</p>
          </div>
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="our-projects">
                  <div class="text">
                    <h6>Corporate</h6>
                    <h3><span>PROFILE</span></h3>
                    <!-- <h2>{{ $t("about.title") }}</h2> -->
                  </div>
                </div>
              </div>
              <div class="corporate-profile col-lg-6 col-md-6 col-sm-12 px-0">
                <div class="info">
                  <h3><span><?php echo $lang['companyName'] ?></span></h3>
                  <p><?php echo $lang['invadeName'] ?></p>

                  <h3><?php echo $lang['business'] ?></h3>
                  <p style="white-space:pre-wrap;"><?php echo $lang['businessDetails'] ?></p>

                  <h3><?php echo $lang['creations'] ?></h3>
                  <dl>
                    <dt><strong><?php echo $lang['creation01Date'] ?>:</strong><span><?php echo $lang['creation01Name'] ?></span></dt>
                    <dd><?php echo $lang['creation01Title'] ?></dd>
                    <dt><strong><?php echo $lang['creation02Date'] ?>:</strong><span><?php echo $lang['creation02Name'] ?></span></dt>
                    <dd><?php echo $lang['creation02Title'] ?></dd>
                  </dl>

                  <h3><?php echo $lang['capital'] ?></h3>
                  <p><?php echo $lang['capitalPrice'] ?></p>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="part5" id="contact">
          <div class="sect">
            <span>05</span>
            <p>／</p>
          </div>
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="our-projects">
                  <div class="text">
                    <h6>QUESTIONS?</h6>
                    <h3><span>CONTACT</span></h3>
                    <!-- <h2>{{ $t("about.title") }}</h2> -->
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12">
              </div>
            </div>
            
          <div class="container">
            <form action="confirm.php" method="post" name="form" onsubmit="return validate()">
              <div class="contact-form col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-sm-12">
                  <div class="block">
                  <label>NAME<span>※</span></label>
                  <input type="text" name="name" placeholder="山田太郎" value="">
                  </div>
                  <!-- <div class="block">
                  <label>ふりがな<span>※</span></label>
                  <input type="text" name="furigana" placeholder="やまだたろう" value="">
                  </div> -->
                  <div class="block">
                  <label>EMAIL<span>※</span></label>
                  <input type="text" name="email" placeholder="info@invade.co.jp" value="">
                  </div>
                  <div class="block">
                  <label>TEL</label>
                  <input type="text" name="tel" placeholder="0000000000" value="">
                  </div>
                  <div class="block">
                  <label>MESSAGE<span>※</span></label>
                  <textarea name="content" rows="5" placeholder="お問合せ内容を入力"></textarea>
                  </div>
                  <h6><span>※</span><?php echo $lang['imp'] ?></h6>
              </div>

              

              <div class="info-box col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-8 offset-md-2 my-4">
                  <h2><span><?php echo $lang['title-m'] ?></span></h2>
                  <ul>
                  <li><?php echo $lang['line1'] ?></li>
                  <li><?php echo $lang['line2'] ?></li>
                  <li><?php echo $lang['line3'] ?></li>
                  <li><?php echo $lang['line4'] ?></li>
                  </ul>
              </div>

              <div class="text-center">
                  <button type="submit" class="btn btn-primary"><?php echo $lang['send'] ?></button>
              </div>


              </form>
          </div>

          </div>
        </section> 

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
                  <li><a href="#">KAMISMAX</a></li>
                  <li><a href="#">KAMISMA BEAUTY</a></li>
                  <li><a href="#">NILE BEAUTY</a></li>
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
<script>

      let response = [];

      fetch("https://jnews.microcms.io/api/v1/news/?limit=50", {
              headers: {
                  "X-API-KEY": "2788fca6-1836-4e83-ae3c-c582735707d7"
              }
          })
          .then(function(res) {
              return res.json();
          })
          .then(function(json) {
            console.log(json);
              var fragment = document.createDocumentFragment();
              var accordionList = document.createDocumentFragment();
              
              for (var i = 0; i < json.contents.length; i++) {

                
                  // console.log(json.contents);
                  response = json.contents;
                
                  // console.log(response[i].body);
                  // console.log(response[i].title);
                  // console.log(response[i].type.category);
                  // console.log(response[i].createdAt.substring(0,10));
                 
            
                  var title = document.createElement('h2');
                  title.innerHTML = json.contents[i].title;

                  // var type = document.createElement('h5');
                  // type.className = json.contents[i].type[i].id;
                  // type.innerHTML = "<span>" + json.contents[i].type[i].category + "</span>";

                  var postDate = document.createElement('p');
                  postDate.innerHTML = json.contents[i].createdAt.substring(0,10);


                  var body = document.createElement('div');
                  body.className = "post-contents";
                  body.innerHTML = json.contents[i].body;
                  

                  var textContents = document.createElement('div');
                  textContents.className = "textContents col-md-4 col-sm-6";
                  textContents.appendChild(title);
                  // textContents.appendChild(type);
                  // textContents.appendChild(postDate);
                  // textContents.appendChild(body);

                  
                  // console.log(textContents);

                // const rightNow = new Date();
                // const theYear = rightNow.getFullYear();
                // const theMonth = rightNow.getMonth() + 1;
                // const theDay = rightNow.getDate() - 1 ;

                // const yesNow = theYear + '-' + theMonth + '-' + theDay
                
                

                // var Year = json.contents[0].createdAt.substring(0,4);
                // var Month = json.contents[0].createdAt.substring(5,7);
                // var DayNum = json.contents[0].createdAt.substring(8,10);
                
                // var articleDate = Year + '-' + Month + '-' + DayNum;

                // console.log(articleDate);
                // console.log(yesNow);

                var d1 = new Date(); //"now"
                var d2 = new Date(response[i].createdAt); 
                var diff = Math.abs(d1-d2); 
                var diffDays = Math.ceil(diff / (1000 * 60 * 60 * 24))


                if(diffDays <= 3) {
                  var text = 'New';
                  var diffDayClass = "new";
                } else {
                  var text = '> ' + 3 + 'days';
                  var diffDayClass = "older";
                } 
                  console.log(text);
                  
                  // creating accordion
                  var inputLabel = document.createElement('input');
                  inputLabel.type = "radio";
                  inputLabel.name = "accordion-1";
                  inputLabel.id = response[i].id;
                  
                  // console.log(inputLabel);

                  var createLabel = document.createElement('label');
                  createLabel.htmlFor = response[i].id;
                  createLabel.innerHTML = '<em>' + response[i].createdAt.substring(0,10) + '</em>' + ' ' + response[i].title + '<span class="'+ diffDayClass + '">' + text + '</span>';

                  console.log(createLabel);

                  var createArticle = document.createElement('article');
                  createArticle.innerHTML = response[i].body;

                  // console.log(createArticle);

                  var accordionDiv = document.createElement('div');
                  accordionDiv.className = 'each';
                  accordionDiv.appendChild(inputLabel);
                  accordionDiv.appendChild(createLabel);
                  accordionDiv.appendChild(createArticle);

                  console.log(accordionDiv);

                  // creating accordion
                  

                  fragment.appendChild(textContents);
                  // console.log(fragment);
                  
                  accordionList.appendChild(accordionDiv);

                

              }
              // document.getElementById('list').appendChild(fragment);
              document.getElementById('list-up').appendChild(accordionList);
              
          })
    </script>
</html>