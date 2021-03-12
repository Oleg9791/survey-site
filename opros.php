<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<!-- Форма опроса пользователя,который прошел регитрацию и выполнил вход-->
<div class="container">
    <div class="row">
        <div class="col-sm">
        </div>
        <div class="col-sm">
            <form action="checkopros.php" method="post">
                <div id="q1"><span>1. Как часто Вы пользуетесь услугами такси?</span><br>
                    <input type="radio" class="form-check-input mt-0" aria-label="Radio button for following text input"
                           name="q1" value="Несколько раз в месяц"><span>Несколько раз в месяц</span><br>
                    <input type="radio" class="form-check-input mt-0" name="q1" value="Один раз в месяц"><span>Один раз в месяц</span><br>
                    <input type="radio" class="form-check-input mt-0" name="q1" value="Несколько раз в год"><span>Несколько раз в год</span><br>
                    <input type="radio" class="form-check-input mt-0" name="q1" value="Никогда"><span>Никогда</span>
                </div>
                <br>
                <div id="q2"><span>2. По какой причине Вы чаще всего пользуетесь услугами такси?</span><br>
                    <input type="radio" class="form-check-input mt-0" name="q2"
                           value="Поездка в аэропорт/ из аэропорта"><span>Поездка в аэропорт/ из аэропорта</span><br>
                    <input type="radio" class="form-check-input mt-0" name="q2"
                           value="Поездка за развлечением / домой"><span>Поездка за развлечением / домой</span><br>
                    <input type="radio" class="form-check-input mt-0" name="q2"
                           value="Поездка на работу/ с работы"><span>Поездка на работу/ с работы</span><br>
                    <input type="radio" class="form-check-input mt-0" name="q2" value="В случае спешки"><span>В случае спешки</span><br>
                </div>
                <br>
                <div id="q3"><span>3. В какое время дня Вы больше всего пользуетесь услугами такси?</span><br>
                    <input type="radio" class="form-check-input mt-0" name="q3"
                           value="Утром, в первой половине дня"><span>Утром, в первой половине дня</span><br>
                    <input type="radio" class="form-check-input mt-0" name="q3"
                           value="После обеда"><span>После обеда</span><br>
                    <input type="radio" class="form-check-input mt-0" name="q3" value="Вечером"><span>Вечером</span><br>
                    <input type="radio" class="form-check-input mt-0" name="q3" value="Ночью"><span>Ночью</span></div>
                <br>
                <div id="q4"><span>4. По каким причинам Вы больше не пользуетесь услугами такси?</span><br>
                    <input type="radio" class="form-check-input mt-0" name="q4" value="Цена"><span>Цена</span><br>
                    <input type="radio" class="form-check-input mt-0" name="q4" value="Неприятные чувства"><span>Неприятные чувства</span><br>
                    <input type="radio" class="form-check-input mt-0" name="q4" value="Плохой опыт с таксистами"><span>Плохой опыт с таксистами</span>
                </div>
                <br>
                <div id="q5"><span>5. Каким способом Вы чаще всего заказываете такси?</span><br>
                    <input type="radio" class="form-check-input mt-0" name="q5"
                           value="По телефону"><span>По телефону</span><br>
                    <input type="radio" class="form-check-input mt-0" name="q5"
                           value="По Интернету"><span>По Интернету</span><br>
                    <input type="radio" class="form-check-input mt-0" name="q5" value="Лично, помахав рукой"><span>Лично, помахав рукой</span><br>
                    <input type="radio" class="form-check-input mt-0" name="q5" value="Я ищу стоянку такси"><span>Я ищу стоянку такси</span>
                </div>
                <br>

                <input type="submit" class="btn btn-info" value="Отправить">
            </form>

        </div>
        <div class="col-sm">
        </div>
    </div>
</div>


<?php
// Функция ini_set не отображает вывод всех ошибок на экране пользователя
ini_set('display_errors', 'Off');
include "checkopros.php"; ?>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"></script>
</body>
</html>

