<?php include "quote/template/head.php"; ?>
<link rel="stylesheet" href="dist/css/contact.css">
<link rel="stylesheet" href="dist/css/main.css">
</head>

<body class="lang_tw">
    <?php
    include "quote/template/nav.php";
    ?>
    <main>
        <div class="bread-crumbs-wrap">
            <div class="head-bg">
                <img class="pc" src="dist/images/header-bg-pc.png" alt="">
                <img class="mb" src="dist/images/header-bg-mb.png" alt="">
            </div>
            <div class="bread-crumbs">
                <span class="bread-text">Home</span>
                <span class="bread-arrow"></span>
                <span class="bread-text active">聯絡我們</span>
            </div>
        </div>
        <div class="banner-wrap">
            <div class="title-text">
                聯絡我們
            </div>
            <div class="small-text">CONTACT US</div>
            <div class="side-text">
                <span>Jing-Chi Brand</span>
            </div>
            <div class="floating-bubble-2">
                <img src="dist/images/common-bubbles-2.png" alt="">
            </div>
        </div>
        <div class="content-wrap">
            <div class="text-wrap">
                <div class="big-text">京淇品牌整合行銷有限公司</div>
                <div class="small-text">Jing-Chi Brand Integrated Marketing Co., Ltd</div>
                <div class="text-line"></div>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3614.458223648916!2d121.51079108704657!3d25.052453780332424!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442a96c9548e873%3A0x45913c8326f6c6b5!2zMTAz5Y-w5YyX5biC5aSn5ZCM5Y2A5aSq5Y6f6LevMTAw6Jmf!5e0!3m2!1szh-TW!2stw!4v1692175776552!5m2!1szh-TW!2stw" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="address-wrap">
                <div class="content-line">
                    <div class="title-wrap">ADDR</div>
                    <a href="https://goo.gl/maps/zef7TDP7Ja72zBzF7" target="_blank" class="text-wrap">
                        103016 臺北市大同區太原路100號3樓
                    </a>
                </div>
                <div class="content-line">
                    <div class="title-wrap">TEL</div>
                    <a href="tel:+(02)2550-5767" class="text-wrap">
                        (02) 2550-5767
                    </a>
                </div>
                <div class="content-line">
                    <div class="title-wrap">FAX</div>
                    <a href="fax:+(02) 2578-0220" class="text-wrap">
                        (02) 2578-0220</a>
                </div>
                <div class="content-line">
                    <div class="title-wrap">EMAIL</div>
                    <a href="mailto:service@jhic.com.tw" class="text-wrap">
                        service@jhic.com.tw
                    </a>
                </div>
            </div>
        </div>
        </div>
        <div class="form-wrap">
            <div class="deco-1">
                <img src="dist/images/contact-icon.png" alt="">
            </div>
            <div class="deco-2">
                <img src="dist/images/common-bubbles-1.png" alt="">
            </div>
            <div class="inside-wrap">
                <div class="form-text">
                    有任何品牌合作需求，歡迎隨時與我們聯繫<br>可填寫以下連絡表單，我們將盡快派專人為您服務！
                </div>
                <form action="">
                    <div class="w100">
                        <label for="companyName">公司名稱</label>
                        <input id="companyName" type="text" placeholder="請填寫公司名稱">
                    </div>
                    <div class="w50 req">
                        <label class="req" for="name"><span>*</span>姓名</label>
                        <input required id="name" type="text" placeholder="請填寫姓名">
                    </div>
                    <div class="w50-m">
                        <label for="email">E-mail</label>
                        <input id="email" type="email" placeholder="請填寫E-mail">
                    </div>
                    <div class="w50 req">
                        <label class="req" for="phone"><span>*</span>電話</label>
                        <input required id="phone" type="text" placeholder="請填寫電話號碼">
                    </div>
                    <div class="w50-m">
                        <label for="fax">傳真</label>
                        <input id="fax" type="text" placeholder="請填寫傳真號碼">
                    </div>
                    <div class="w100-t req">
                        <label class="req" for="companyName"><span>*</span>內容</label>
                        <textarea required name="" id="" cols="30" rows="10" placeholder="請填寫內容"></textarea>
                    </div>
                    <div class="contact-btn">
                        <a href="javascript:;">
                            <span>送出</span>
                        </a>
                    </div>
                </form>
                <svg id="svg1" viewBox="0 0 1000 1000" width="400" height="400">
                    <path id="path1"></path>
                    <g id="dot-container3"></g>
                </svg>
                <svg id="svg2" viewBox="0 0 1000 1000" width="650" height="650" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <linearGradient id="gradient" x1="0%" y1="0%" x2="0%" y2="100%">
                            <stop offset="0%" stop-color="#feedc7" />
                            <stop offset="100%" stop-color="#ffd67d" />
                        </linearGradient>
                    </defs>
                    <path id="path2"></path>
                    <g id="dot-container2"></g>
                    <use xlink:href="#path2" fill="url(#gradient)" />
                </svg>
            </div>

        </div>
    </main>
    <?php
    include "quote/template/footer.php";
    include "quote/template/gotop.php";
    ?>
    <script src="dist/js/main.js"></script>
    <script src="dist/js/function.js"></script>
</body>

</html>