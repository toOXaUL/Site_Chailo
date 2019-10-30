<?php
  $name = htmlspecialchars($_POST["input-name"]);
  $email = htmlspecialchars($_POST["input-email"]);
  $match = htmlspecialchars($_POST["input-select-match"]);
  $ticketType = htmlspecialchars($_POST["input-ticket-type"]);

  $my_email = "example@mail.com";
  $subject = "Замовлення квитка";
  $message = "Замовник: " . $name . "\nКвиток на матч: " . $match . "\nТип квитка: " . $ticketType . "\nEmail: " . $email;

  if(isset($_POST["done"])) {
    mail($my_email, $subject, $message);
    header("Location:done-order.php");
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel = "stylesheet" href = "style/css/ticket_order.css" type = "text/css">
    <link rel = "stylesheet" href = "style/css/media-queries/media-queries-ticket-order.css" type = "text/css">
    <link rel = "shortcut icon" href = "style/assets/images/favicon.jpg" type = "image/jpg">
    <title>"Динамо" Київ</title>
  </head>
  <body>
    <header>
      <div class = "header-block">
        <div class = "header-text">
          <section>
            <span>ФК "Динамо" Київ</span><br>
            <span id = "add-text">Фан-сторінка</span>
          </section>
        </div>
        <section>
            <div class = "club-logo-block">
              <a href = "index.html"><img src = "style/assets/images/club_logo.png"></a>
            </div>
        </section>
      </div>
      <div class = "nav-bar">
        <section>
          <nav>
            <ul class = "ul-nav">
              <li class = "li-nav"><a href = "index.php">ГОЛОВНА</a></li>
              <li class = "li-nav"><a href = "ticket_order.php">ЗАМОВОЛЕННЯ КВИТКІВ</a></li>
              <li class = "li-nav"><a href = "match_history.php">ІСТОРІЯ МАТЧІВ</a></li>
              <li class = "li-nav"><a href = "about.php">ПРО КЛУБ</a></li>
            </ul>
          </nav>
        </section>
      </div>
    </header>
    <main>
      <div class = "form-order-block">
        <div class = "form-text">
          <span>Зробити замовлення квитка:</span>
        </div>
        <form action = "" method = "post">
          <label>Ваше ім'я:</label>
          <div id = "input-name">
            <input type = "text" name = "input-name" placeholder = "Ім'я" required>
          </div>
          <br><br>
          <label>Ваш E-mail:</label>
          <div id = "input-email">
            <input type = "text" name = "input-email" placeholder = "E-mail" required>
          </div>
          <br><br>
          <label>Оберіть матч:</label>
          <div id = "input-match">
            <select name = "input-select-match">
              <option value = "'Динамо К' VS 'Карпати'">"Динамо К" VS "Карпати"</option>
              <option value = "'Динамо К' VS 'Карпати'">"Динамо К" VS "Шахтар"</option>
              <option value = "'Динамо К' VS 'Карпати'">"Динамо К" VS "Олімпік"</option>
              <option value = "'Динамо К' VS 'Карпати'">"Динамо К" VS "Чорноморець"</option>
            </select>
          </div>
          <br><br>
          <label>Тип квитка:</label>
          <br>
          <input type = "radio" name = "input-ticket-type" value = "Звичайний">
          <label>Звичайний</label>
          <br>
          <input type = "radio" name = "input-ticket-type" value = "VIP">
          <label>VIP</label>
          <br>
          <input type = "radio" name = "input-ticket-type" value = "VIP+">
          <label>VIP+</label>
          <br>
          <input type = "radio" name = "input-ticket-type" value = "deluxe">
          <label>Deluxe</label>
          <br><br>
          <hr><br>
            <input id = "submit" type = "submit" name = "done" value = "Відправити">
        </form>
      </div>
    </main>
    <footer>
      <div class = "footer-block">
        <section id = "footer-links-1">
          <a href = "https://www.facebook.com/fcdynamoua/" target = "_blank">Facebook</a>
          <br>
          <a href = "https://www.instagram.com/fc_dynamo_kyiv/?hl=ru" target = "_blank">Instagram</a>
        </section>
        <section id = "footer-links-2">
          <a href = "contacts.html" target = "_blank">Контакти</a>
        </section>
      </div>
      <div class = "footer-last-block">
        <section>
          <span>© ФК "Динамо" Київ - 2019р.</span>
        </section>
      </div>
    </footer>
  </body>
</html>
