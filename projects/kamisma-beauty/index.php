<?php
    include "../../config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="../../assets/css/index.css">
    <link rel="stylesheet" href="../../assets/css/language-select.css">
    

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200&display=swap" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous"> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script> -->
    <!-- <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Shippori+Mincho&display=swap" rel="stylesheet">
    
    <title>インベード株式会社 || INVADE Co., Ltd. - KAMISMA BEAUTY</title>
    <script src="https://unpkg.com/vue@next"></script>
    <script src="https://unpkg.com/vue-i18n@next"></script>
</head>

<body>
    <div class="wrapper2" id="kamismaBeautyApp">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"><img src="../../assets/images/invade-logo-2.svg" alt="INVADE" height="15"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <!-- <label>Lang.</label>
                <select v-model="$i18n.locale">
                  <option value="en">English</option>
                  <option value="ja">日本語</option>
                </select> -->
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="../../index.html">TOP</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#news">NEWS</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#about">ABOUT</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      PROJECTS
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="../kamismax/index.html">KAMISMAX</a></li>
                      <li><a class="dropdown-item active" aria-current="page" href="index.html">KAMISMA BEAUTY</a></li>
                      <li><a class="dropdown-item" href="../nile-beauty/index.html">NILE BEAUTY</a></li>
                      
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#profile">PROFILE</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#contact">CONTACT</a>
                  </li>
                  
                </ul>
                <!-- <select v-model="$i18n.locale">
                  <option value="ja">日本語</option>
                  <option value="en">English</option>
                </select> -->
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
                    <img src="../../assets/images/title-banner001-kmb.png" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="container-fluid px-0">
            <section class="section01">
              
                <p><?php echo $lang['kmb01text'] ?></p>
                <p><?php echo $lang['kmb01text2'] ?></p>
                <!-- <p>
                  <strong>KAMISMA BEAUTY</strong> is a…<br>
                  <strong>Top Notch Reservation Site for Hair Salons</strong><br>in order to increase the 
                  Stylists’ Statuses and the Value of the Reservation Spot.
                </p> -->
                <!-- <p>
                    掲載される美容師は、<br class="br_on_992">美容版ミシュラン・<strong>カミカリスマ</strong>に選出された<br class="br_on_768">日本を代表する美容師たち<br>
                    一流の技術に見合った価格以上の満足感を提供し<br>
                    日本の美容価値を世界基準に引き上げ、<br class="br_on_768">新しい予約のカタチで価値の向上に繋げます
                </p> -->

                <div class="emphasis-gray">
                    <h3><?php echo $lang['kmb01text3'] ?></h3>
                </div>


            </section>
            <hr>
            <section class="section02">
                <div class="emphasis">
                    <h3><span><?php echo $lang['kmb02title'] ?></span></h3>
                    <!-- <h1>幻の一枠</h1> -->
                </div>
                <div class="text-top">
                    <!-- <p>
                    一ヶ月に、一枠のみ<br>
                    一名のお客様だけが体験できる<br class="br_on_430">最上級のメニュー<br>
                    カミスマビューティー限定のメニューとして、<br class="br_on_576">一流の技術はもちろん<br>
                    最高のひと時・満足感・特別感をご提供します
                    </p> -->
                    <p style="white-space:pre-wrap;">
                    <?php echo $lang['kmb02text1'] ?><br>
                      <?php echo $lang['kmb02text2'] ?><br>
                      <?php echo $lang['kmb02text3'] ?>
                    </p>
                    <!-- <p>
                      一ヶ月に、一枠のみ<br>
                      一名のお客様だけが体験できる<br class="br_on_430">最上級のメニュー<br>
                      カミスマビューティー限定のメニューとして、<br class="br_on_576">一流の技術はもちろん<br>
                      最高のひと時・満足感・特別感をご提供します
                      </p> -->
                </div>
                <hr>
                <div class="emphasis">
                    <h3><span class="grey-gradient"><?php echo $lang['kmb03title'] ?></span></h3>
                </div>
                <div class="text-top">
                    <p style="white-space:pre-wrap;">
                      <?php echo $lang['kmb03text1'] ?><br>
                      <?php echo $lang['kmb03text2'] ?><br>
                      <?php echo $lang['kmb03text3'] ?>
                    </p>
                    <!-- <p>
                      一ヶ月に、三枠のみ<br>
                      三名のお客様だけが体験できるメニュー<br>
                      幻の一枠よりも身近に、<br class="br_on_576">それでいれ最高級の一流技術を<br class="br_on_430">体験いただけます
                    </p> -->
                </div>
                <div class="emphasis-gray">
                  <h3><?php echo $lang['kmb03text4'] ?></h3>
                </div>
            </section>
            <!-- <hr> -->
            <section class="section03">
              <div class="container">
                <!-- <p>
                  お客様の中には、<br class="br_on_500">自分に合う美容師と巡りあうために<br>
                  美容室を転々としている方も少なくありません
                </p> -->
                <p style="white-space:pre-wrap;"><?php echo $lang['kmb04text1'] ?></p>
                <p style="white-space:pre-wrap;"><?php echo $lang['kmb04text2'] ?></p>
                <!-- <p>
                  その中でクーポン利用などにもとらわれずに、<br class="br_on_992">最高の特別感を感じていただくことで<br>
                  お客様と美容師、<br class="br_on_430">双方の満足感をより向上したいと考えております。
                </p> -->
              </div>
            </section>
            <section class="section04">
              <div class="container">
                <img src="../../assets/images/stylists001.png" alt="スタイリスト一覧" class="img-fluid">
              <img src="../../assets/images/stylists002.png" alt="スタイリスト一覧" class="img-fluid">
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
                    <li><a href="https://kamismax.kamisma.com" target="_blank">KAMISMAX</a></li>
                    <li><a href="https://beauty.kamisma.com" target="_blank">KAMISMA BEAUTY</a></li>
                    <li><a href="https://beauty.nile.inc" target="_blank">NILE BEAUTY</a></li>
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
  const { createApp } = Vue;
  const { createI18n } = VueI18n;

  const i18n = createI18n({
    locale: "ja",
    messages: {
      en: {
        section01: {
          text: '<strong>KAMISMA BEAUTY</strong> is a…<br><strong>Top Notch Reservation Site<br class="br_on_500"> for Hair Salons</strong><br>in order to increase the Stylists’ Statuses and the Value of the Reservation Spot.',
          text2: 'The listed stylists are the ones selected into<br> <strong>Kami Charisma</strong> (stylists version of Michelin Guide), representing Japan. <br>By providing the first class skills of the stylists, we aim to make the value into a global standard, and increase the value of new reservation system.',
          text3: 'The Exclusive Menu via Kamisma Beauty'
        },
        section02: {
          title: 'Illusionary Reservation Spot',
          text1: 'One Reservation Spot a Month' ,
          text2: 'A First Class Menu for Only ONE Customer',
          text3: 'Exclusive Menu via Kamisma Beauty, \nProviding the Specialty, Top Notch Satisfaction, and the Best Time Spent.',
        },
        section03: {
          title: 'Exclusive Three Spots',
          text1: 'Three Reservation Spots a Month.',
          text2: 'Only available to three persons.',
          text3: 'As same as Illusionary Reservation Spot, \nBeing Able to Experience First Class Skills of the Stylists',
          text4: '<span>Experience the First Class Skills and the Best Satisfaction with Limited Reservation Spots</span>'
        },
        section04: {
          text1: 'For some people, they may go from salon to salon to match their needs and preferences.',
          text2: 'Without using coupons or any sort of discounts, we hope to match customers and stylists, and improve satisfactions of both.'
        },
        footer: {
          service: "Service",
        }
      },
      ja: {
        section01: {
          text: '<em>KAMISMA BEAUTY<br class="br_on_480">（カミスマビューティー）</em> は<br><strong>「美容師のステータス」</strong>・<strong><br class="br_on_500">「予約枠の価値」</strong>を<br class="br_on_768">高めるために誕生した<br>美容における<strong>最高峰の予約サイト</strong>',
          text2: '掲載される美容師は、<br class="br_on_992">美容版ミシュラン・<strong>カミカリスマ</strong>に選出された<br class="br_on_768">日本を代表する美容師たち<br>一流の技術に見合った価格以上の満足感を提供し<br>日本の美容価値を世界基準に引き上げ、<br class="br_on_768">新しい予約のカタチで価値の向上に繋げます',
          text3: '<span>KAMISMA BEAUTYだからこそ<br class="br_on_700">受けられる限定メニュー</span>'
        },
        section02: {
          title: '幻の一枠',
          text1:  '一ヶ月に、一枠のみ',
          text2: '一名のお客様だけが体験できる最上級のメニュー',
          text3: 'カミスマビューティー限定のメニューとして、\n一流の技術はもちろん\n最高のひと時・満足感・特別感をご提供します',
        },
        section03: {
          title: '星の三枠',
          text1: '一ヶ月に、三枠のみ',
          text2: '三名のお客様だけが体験できるメニュー',
          text3: '幻の一枠よりも身近に、\nそれでいれ最高級の一流技術を体験いただけます',
          text4: '<span>限られた予約枠で、<br class="br_on_992">一流の技術と最高の満足感を<br class="br_on_500">体感いただけます</span>'
        },
        section04: {
          text1: 'お客様の中には、\n自分に合う美容師と巡りあうために\n美容室を転々としている方も少なくありません',
          text2: 'その中でクーポン利用などにもとらわれずに、\n最高の特別感を感じていただくことで\nお客様と美容師、双方の満足感を\nより向上したいと考えております。'
        },
        footer: {
          service: "サービス",
        }
      },
      methods: {
        htmlToText: function (html) {
          this.utilityEl.innerHTML = html;
          return this.utilityEl.textContent;
        }
      }
    },
  });

  // console.log($t("footer.service"));
  const app = createApp({});
  app.use(i18n);
  app.mount("#kamismaBeautyApp");
</script>
</html>