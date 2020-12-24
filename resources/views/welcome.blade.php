<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Мобилка</title>
    <link rel="stylesheet" href="./css/style.css" />

</head>

<body>
    <div class="preloader">
        <div class="preloader__row">
            <div class="preloader__item"></div>
            <div class="preloader__item"></div>
        </div>
    </div>

    <script>
        window.onload = function() {
            document.body.classList.add('loaded_hiding');
            window.setTimeout(function() {
                document.body.classList.add('loaded');
                document.body.classList.remove('loaded_hiding');
            }, 500);
        }
    </script>
    <!-- <div class="reit">
        <h3 class="reit-fio">Фамилия И.О.</h3>
        <table class="reit-table">
            <tbody></tbody>
        </table>
    </div>
    <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A02757284a10f0d9c189eba48adaca820da8245cd5a3f1c8b0e8169e66cc04c5b&amp;source=constructor" width="100%" height="100%" frameborder="0"></iframe> -->
    {{-- <script type="text/javascript" charset="utf-8" async
        src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A02757284a10f0d9c189eba48adaca820da8245cd5a3f1c8b0e8169e66cc04c5b&amp;width=100%25&amp;height=800&amp;lang=ru_RU&amp;scroll=true">
    </script> --}}
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=29812b58-dfa6-4497-a7da-4187cce10635"
        type="text/javascript"></script>
    <script src="https://yandex.st/jquery/2.2.3/jquery.min.js" type="text/javascript"></script>

    <!-- Библиотека JQuery.UI. Используем для работы со вкладками -->
    <script src="https://yandex.st/jquery-ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>


    <!-- CSS JQuery.UI. Используем для отрисовки вкладок -->
    <link rel="stylesheet" href="./css/jqUi.css" type="text/css" />


    <script src="/js/js.js"></script>


    <div class="accordion">
        <div class="tab">
            <input type="checkbox" id="tab1" name="tab-group">
            <label for="tab1" class="tab-title">0 Корпус</label>
            <section class="tab-content">
                <div id="tabs" style="width: 95%">
                    <ul>
                        <li><a id="1" href="#tab-1">Описание</a></li>
                        <li><a href="#tab-2">Карта</a></li>
                    </ul>
                    <div id="tab-1">
                        <p>Очень интересная информация о 0 корпусе</p>
                        <ul>
                            <li>Очень интересная информация о 0 корпусе</li>
                            <li>Очень интересная информация о 0 корпусе</li>
                        </ul>
                    </div>
                    <div id="tab-2" style="width: 100%; height: 300px; padding: 0;"></div>
                </div>

            </section>
        </div>


        <div class="tab">
            <input type="checkbox" id="tab2" name="tab-group">
            <label for="tab2" class="tab-title">1 Корпус</label>
            <section class="tab-content">
                <div id="tabs1" style="width: 95%">
                    <ul>
                        <li><a id="2" href="#tab-3">Описание</a></li>
                        <li><a href="#tab-4">Карта</a></li>
                    </ul>
                    <div id="tab-3">
                        <p>Очень интересная информация о 1 корпусе</p>
                        <ul>
                            <li>Очень интересная информация о 1 корпусе</li>
                            <li>Очень интересная информация о 1 корпусе</li>
                        </ul>
                    </div>
                    <div id="tab-4" style="width: 100%; height: 300px; padding: 0;"></div>
                </div>
            </section>
        </div>



        <div class="tab">
            <input type="checkbox" id="tab3" name="tab-group">
            <label for="tab3" class="tab-title">2 Корпус</label>
            <section class="tab-content">
                <div id="tabs2" style="width: 95%">
                    <ul>
                        <li><a id="3" href="#tab-5">Описание</a></li>
                        <li><a href="#tab-6">Карта</a></li>
                    </ul>
                    <div id="tab-5">
                        <p>Очень интересная информация о 2 корпусе</p>
                        <ul>
                            <li>Очень интересная информация о 2 корпусе</li>
                            <li>Очень интересная информация о 2 корпусе</li>
                        </ul>
                    </div>
                    <div id="tab-6" style="width: 100%; height: 300px; padding: 0;"></div>
                </div>
            </section>
        </div>

        <div class="tab">
            <input type="checkbox" id="tab4" name="tab-group">
            <label for="tab4" class="tab-title">3 Корпус</label>
            <section class="tab-content">
                <div id="tabs3" style="width: 95%">
                    <ul>
                        <li><a id="4" href="#tab-7">Описание</a></li>
                        <li><a href="#tab-8">Карта</a></li>
                    </ul>
                    <div id="tab-7">
                        <p>Очень интересная информация о 3 корпусе</p>
                        <ul>
                            <li>Очень интересная информация о 3 корпусе</li>
                            <li>Очень интересная информация о 3 корпусе</li>
                        </ul>
                    </div>
                    <div id="tab-8" style="width: 100%; height: 300px; padding: 0;"></div>
                </div>
            </section>
        </div>

        <div class="tab">
            <input type="checkbox" id="tab5" name="tab-group">
            <label for="tab5" class="tab-title">4 Корпус</label>
            <section class="tab-content">
                <div id="tabs4" style="width: 95%">
                    <ul>
                        <li><a id="5" href="#tab-9">Описание</a></li>
                        <li><a href="#tab-10">Карта</a></li>
                    </ul>
                    <div id="tab-9">
                        <p>Очень интересная информация о 4 корпусе</p>
                        <ul>
                            <li>Очень интересная информация о 4 корпусе</li>
                            <li>Очень интересная информация о 4 корпусе</li>
                        </ul>
                    </div>
                    <div id="tab-10" style="width: 100%; height: 300px; padding: 0;"></div>
                </div>
            </section>
        </div>

        <div class="tab">
            <input type="checkbox" id="tab6" name="tab-group">
            <label for="tab6" class="tab-title">5 Корпус</label>
            <section class="tab-content">
                <div id="tabs5" style="width: 95%">
                    <ul>
                        <li><a id="6" href="#tab-11">Описание</a></li>
                        <li><a href="#tab-12">Карта</a></li>
                    </ul>
                    <div id="tab-11">
                        <p>Очень интересная информация о 5 корпусе</p>
                        <ul>
                            <li>Очень интересная информация о 5 корпусе</li>
                            <li>Очень интересная информация о 5 корпусе</li>
                        </ul>
                    </div>
                    <div id="tab-12" style="width: 100%; height: 300px; padding: 0;"></div>
                </div>
            </section>
        </div>

        
        <div class="tab">
            <input type="checkbox" id="tab7" name="tab-group">
            <label for="tab7" class="tab-title">6 Корпус</label>
            <section class="tab-content">
                <div id="tabs6" style="width: 95%">
                    <ul>
                        <li><a id="7" href="#tab-13">Описание</a></li>
                        <li><a href="#tab-14">Карта</a></li>
                    </ul>
                    <div id="tab-13">
                        <p>Очень интересная информация о 6 корпусе</p>
                        <ul>
                            <li>Очень интересная информация о 6 корпусе</li>
                            <li>Очень интересная информация о 6 корпусе</li>
                        </ul>
                    </div>
                    <div id="tab-14" style="width: 100%; height: 300px; padding: 0;"></div>
                </div>
            </section>
        </div>

        <div class="tab">
            <input type="checkbox" id="tab8" name="tab-group">
            <label for="tab8" class="tab-title">7 Корпус</label>
            <section class="tab-content">
                <div id="tabs7" style="width: 95%">
                    <ul>
                        <li><a id="8" href="#tab-15">Описание</a></li>
                        <li><a href="#tab-16">Карта</a></li>
                    </ul>
                    <div id="tab-15">
                        <p>Очень интересная информация о 7 корпусе</p>
                        <ul>
                            <li>Очень интересная информация о 7 корпусе</li>
                            <li>Очень интересная информация о 7 корпусе</li>
                        </ul>
                    </div>
                    <div id="tab-16" style="width: 100%; height: 300px; padding: 0;"></div>
                </div>
            </section>
        </div>


        <div class="tab">
            <input type="checkbox" id="tab9" name="tab-group">
            <label for="tab9" class="tab-title">Спорт - база</label>
            <section class="tab-content">
                <div id="tabs8" style="width: 95%">
                    <ul>
                        <li><a id="9" href="#tab-17">Описание</a></li>
                        <li><a href="#tab-18">Карта</a></li>
                    </ul>
                    <div id="tab-17">
                        <p>Очень интересная информация о Спорт - база</p>
                        <ul>
                            <li>Очень интересная информация о Спорт - база</li>
                            <li>Очень интересная информация о Спорт - база</li>
                        </ul>
                    </div>
                    <div id="tab-18" style="width: 100%; height: 300px; padding: 0;"></div>
                </div>
            </section>
        </div>

        <div class="tab">
            <input type="checkbox" id="tab10" name="tab-group">
            <label for="tab10" class="tab-title">Поликлиника</label>
            <section class="tab-content">
                <div id="tabs9" style="width: 95%">
                    <ul>
                        <li><a id="10" href="#tab-19">Описание</a></li>
                        <li><a href="#tab-20">Карта</a></li>
                    </ul>
                    <div id="tab-19">
                        <p>Очень интересная информация Поликлиника</p>
                        <ul>
                            <li>Очень интересная информация Поликлиникаа</li>
                            <li>Очень интересная информация Поликлиника</li>
                        </ul>
                    </div>
                    <div id="tab-20" style="width: 100%; height: 300px; padding: 0;"></div>
                </div>
            </section>
        </div>


      
    <script>
        document.getElementById("1").click();
        document.getElementById("2").click();
        document.getElementById("3").click();
        document.getElementById("4").click();
        document.getElementById("5").click();
        document.getElementById("6").click();
        document.getElementById("7").click();
        document.getElementById("8").click();
        document.getElementById("9").click();
        document.getElementById("10").click();

    </script>
    <p id="test"></p>

<input type="button"   value="Say hello" onClick="showAndroidToast()" />

<script type="text/javascript">

    function showAndroidToast() {
        document.getElementById("test").innerHTML = Android.showToast();
        console.log( "[eq");
        console.log( JSON.stringify(Android.showToast() ) );
    }

   



</script>
<script type="text/javascript">

function getLocationConstant()
{
  if(navigator.geolocation)
  {
   navigator.geolocation.getCurrentPosition(onGeoSuccess,onGeoError);
  } else {
   alert("No GPS support");
  }
}


function onGeoSuccess(event)
{
    document.getElementById("location").value =  event.coords.latitude+", "+event.coords.longitude;
    alert("Success: "+event.coords.latitude+", "+event.coords.longitude);
}


function onGeoError(event)
{
  alert("Error code " + event.code + ". " + event.message);
}


</script>

<input type="text" name="location" id="location" style="width:278px;">
<button onclick="getLocationConstant()" >Click</button>
</body>

</html>
