<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title>Форма обратной связи</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<div class="container">
    <h1>Форма обратной связи</h1>

    <div class="form__wrapper">
        <!-- Форма обратной связи -->
        <form id="feedback-form" action="" enctype="multipart/form-data" novalidate method="post">
            <div class="form-row">
                <!-- Имя пользователя -->
                <div class="form-group">
                    <label for="name" class="control-label">Имя</label>
                    <input id="name" type="text" name="name" class="form-control" value="" placeholder="Имя" minlength="2"
                           maxlength="30" required="required">
                    <div class="invalid-feedback"></div>
                </div>
                <!-- Email пользователя -->
                <div class="form-group">
                    <label for="email" class="control-label">Email-адрес</label>
                    <input id="email" type="email" name="email" required="required" class="form-control" value=""
                           placeholder="Email-адрес">
                    <div class="invalid-feedback"></div>
                </div>

                <!-- Возраст пользователя -->
                <div class="form-group">
                    <label for="age" class="control-label">Возраст пользователя</label>
                    <input id="age" type="email" name="age" required="required" class="form-control" value=""
                           placeholder="Ваш возраст">
                    <div class="invalid-feedback"></div>
                </div>

            </div>
            <!-- Сообщение пользователя -->
            <div class="form-group">
                <label for="message" class="control-label">Сообщение</label>
                <textarea id="message" name="message" class="form-control" rows="3"
                          placeholder="(не менее 20 символов)" minlength="20" maxlength="500"
                          required="required"></textarea>
                <div class="invalid-feedback"></div>
            </div>
            <!-- Пол пользователя -->
            <div class="form-group">
                <label for="gender" class="control-label">Ваш пол</label>
                <input type="radio" id="male" name="gender" value="male">
                <label for="male">Мужской</label>
                <input type="radio" id="female" name="gender" value="female">
                <label for="female">Женский</label><br>
            </div>

            <!-- Файлы, для прикрепления к форме -->
            <div class="form-group form-attachments" data-count="5">
                <div class="form-attachments__wrapper">
                    <input type="file" name="myfile[]" multiple id="myfile">
                    <div class="form-attachments__items">
                        <div class="form-attachments__description">
                            <div>Нажмите чтобы добавить файлы к сообщению.</div>
                            <div>Можно добавить до 5 файлов с разрешением jpg, jpeg, bmp, gif, png.</div>
                        </div>
                    </div>
                </div>
            </div>



            <!-- Сообщение при ошибке -->
            <div class="form-error d-none">
                Исправьте данные и отправьте форму ещё раз.
            </div>

            <!-- Индикация отправки данных формы на сервер -->
            <div class="progress d-none">
                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
                     style="width: 0"></div>
            </div>

            <!-- Кнопка для отправки формы на сервер -->
            <div class="form-submit">
                <button type="submit">Отправить сообщение</button>
            </div>

        </form>

        <!-- Сообщение об успешной отправки формы -->
        <div class="form-result-success d-none">
            <div>Форма успешно отправлена. Нажмите на <a href="#" data-target="#feedback-form">ссылку</a>, чтобы отправить ещё
                одно сообщение.
            </div>
        </div>

    </div>
<?php
require 'send.php';




?>
</div>


</body>

</html>
