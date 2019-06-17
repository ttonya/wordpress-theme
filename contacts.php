<?php get_header(); ?>

<h2 class="title">Контакты</h2>

<p>+700000</p>
<p>a----@yandex.ru</p>

 <div class="main-form">
            <p class="form-heading">Пригласить на мероприятие:</p>

             <form class="main-form-f" action="mail.php" method="POST">
<p class="form-input">Ваше имя: </p> <input class="main-form-input" type="text" name="name"></br>
<p class="form-input">Номер:</p> <input class="main-form-input" type="text" name="number"> </br>
<p class="form-input">Мероприятие:</p> <input class="main-form-input" type="text" name="event"></br>
<p class="form-input">Дата проведения: </p> <input class="main-form-input" type="text" name="date"></br>

<input type="submit" value="Отправить" class="btn-form btn btn-sm btn-header btn-outline-secondary">
</form>

<?php get_footer(); ?>