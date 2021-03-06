<!DOCTYPE html>

<html>

    <head>

        <title>TODO supply a title</title>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/mysass.css" rel="stylesheet" type="text/css"/>

        <script src="slider-master/js/jquery-1.9.1.min.js" type="text/javascript"></script>

        <script type="text/javascript" src="slider-master/js/jssor.js"></script>

        <script src="slider-master/js/jssor.slider.mini.js" type="text/javascript"></script>

        <script src="main.js" type="text/javascript"></script>

    </head>

    <body>

        <div id="fb-root"></div>

        <script>(function (d, s, id) {

                var js, fjs = d.getElementsByTagName(s)[0];

                if (d.getElementById(id))

                    return;

                js = d.createElement(s);

                js.id = id;

                js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.0";

                fjs.parentNode.insertBefore(js, fjs);

            }(document, 'script', 'facebook-jssdk'));</script>

        <div id="wrapper">     

            <div id="header">

                <img alt="logo" id="logo" src="images/logo.jpg">

                <div id="contacts">

                    <img src="images/phone_icon_32px.png" alt="phone"/>

                    <div id="phones">

                        0889 888 803

                        0889 888 805

                    </div>

                    <img src="images/skype_icon_32px.png" alt="skype"/>

                    <p>kanal3.bg</p>

                    <img src="images/camera_icon_32px.png" alt="camera"/>

                    <p>Твоят репортаж</p>

                    <div id="live"><div>НА ЖИВО</div></div>

                </div>

            </div>

            <div id="nav">

                <div id="time">23 ноември 16:20</div>

                <div id="rigthSide">

                    <div id="tabs">

                        <div id="news" class="tab">НОВИНИ</div>

                        <div id="sport" class="tab">СПОРТ</div>

                        <div id="transmissions" class="tab">ПРЕДАВАНИЯ</div>

                        <div id="faces" class="tab">ЛИЦАТА</div>

                        <div id="horoscope" class="tab">ХОРОСКОП</div>

                        <div id="theTime" class="tab">ВРЕМЕТО</div>

                    </div>

                    <div id="current">Актуално: ЕС увеличава финансирането на борбата с ебола</div>

                    <div id="search"><input type="search" /></div>

                </div>

            </div>

            <div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 700px; height: 394px;">

                <!-- Slides Container -->

                <!-- Loading Screen -->

                <div u="loading" style="position: absolute; top: 0px; left: 0px;">

                    <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;

                         background-color: #000000; top: 0px; left: 0px;width: 100%;height:100%;">

                    </div>

                    <div style="position: absolute; display: block; background: url(/Projects/slider-master/img/loading.gif) no-repeat center center;

                         top: 0px; left: 0px;width: 100%;height:100%;">

                    </div>

                </div>



                <div u="slides" style="cursor: pointer; position: absolute; overflow: hidden; left: 0px; top: 0px; width: 700px; height: 394px;">

                    <div><img u="image" src="slider-master/img/motor/001.jpg" alt=""/><p>Консумацията на месо от прилепи предизвикала епидемията от ебола</p></div>

                    <div><img u="image" src="slider-master/img/motor/002.jpg" alt=""/><p>ЕС увеличава финансирането на борбата с ебола</p></div>

                    <div><img u="image" src="slider-master/img/motor/003.jpg" alt=""/><p>Захариева: "Дупката" в КТБ е над очакванията</p></div>

                    <div><img u="image" src="slider-master/img/motor/004.jpg" alt=""/><p>Тежки санкций грозят снегопочистващите фирми в България</p></div>

                </div>

                <!-- bullet navigator container -->

                <div u="navigator" class="jssorb03" style="position: absolute; bottom: 4px; left: 6px;">

                    <!-- bullet navigator item prototype -->

                    <div u="prototype" style="position: absolute; width: 21px; height: 21px; text-align:center; line-height:21px; color:white; font-size:12px;"></div>

                </div>

                <!-- Bullet Navigator Skin End -->    

            </div>

            <div id="slider_description">

                <ul>

                    <li class="description">Консумацията на месо от прилепи предизвикала епидемията от ебола</li>

                    <li class="description">ЕС увеличава финансирането на борбата с ебола</li>

                    <li class="description">Захариева: "Дупката" в КТБ е над очакванията</li>

                    <li class="description">Тежки санкций грозят снегопочистващите фирми в България</li>

                </ul>

            </div>

            <div id="content">

                <div class="report">

                    <div class="head">Новини</div>

                    <div id="likeButton" class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="standard" data-action="like" data-show-faces="false" data-share="false"></div>

                    <div class="new"></div>

                    <div class="new"></div>

                    <div class="new"></div>

                </div>

                <div class="report">

                    <div class="head">Спорт</div>

                    <div class="new"></div>

                    <div class="new"></div>

                    <div class="new"></div>

                </div>

            </div>

        </div>

        <div id="footer">

            <div id="footTabs">

                <div id="footNews" class="footTab">Новини</div>

                <div id="footSport" class="footTab">Спорт</div>

                <div id="footFaces" class="footTab">Лицата</div>

                <div id="footProgram" class="footTab">Програмата</div>

                <div id="footHoroscope" class="footTab">Хороскоп</div>

            </div>

            <div id="footContacts">

                <div id="about" class="footContacts">За нас</div>

                <div id="ad" class="footContacts">Реклама</div>

                <div id="footContact" class="footContacts">Контакти</div>

                <div id="career" class="footContacts">Кариера</div>

            </div>

            <div id="original">

                &copy; Елит Медиа България ЕООД. Всички права запазени.

            </div>

        </div>

    </body>

</html>

