<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel = "stylesheet" href = "style/css/ticket_order.css" type = "text/css">
    <link rel = "stylesheet" href = "style/css/media-queries-ticket_order.css" type = "text/css">
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
            <input type = "text" name = "input-name" placeholder = "Ім'я">
          </div>
          <br><br>
          <label>Ваш E-mail:</label>
          <div id = "input-email">
            <input type = "text" name = "input-email" placeholder = "E-mail">
          </div>
          <br><br>
          <label>Оберіть матч:</label>
          <div id = "input-match">
            <select name = "input-select-match">
              <option value = "1">"Динамо К" VS "Карпати"</option>
              <option value = "2">"Динамо К" VS "Шахтар"</option>
              <option value = "3">"Динамо К" VS "Олімпік"</option>
              <option value = "4">"Динамо К" VS "Чорноморець"</option>
            </select>
          </div>
          <br><br>
          <label>Тип квитка:</label>
          <br>
          <input type = "radio" name = "input-ticket-type" value = "basic">
          <label>Звичайний</label>
          <br>
          <input type = "radio" name = "input-ticket-type" value = "vip">
          <label>VIP</label>
          <br>
          <input type = "radio" name = "input-ticket-type" value = "vip+">
          <label>VIP+</label>
          <br>
          <input type = "radio" name = "input-ticket-type" value = "deluxe">
          <label>Deluxe</label>
          <br><br>
            <input id = "submit" type = "submit" name = "done" value = "Відправити">
        </form>
      </div>
    </main>
  </body>
</html>
