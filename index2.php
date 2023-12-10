<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="popoutform_style.css">
  <title>Document</title>
</head>
<body>
<div class="center">
  <button id="show-login">Связаться</button>
</div>
<div class="popup">
  <div class="close-btn">&times;</div>
  <div class="form">
    <h2>Форма Связи</h2>
    <div class="form-element">
      <input type="text" id="telephone" placeholder="Номер телефона">
    </div>
    <div class="form-element">
      <input type="text" id="email" placeholder="Email">
    </div>
    <div class="form-element">
      <input type="message" id="message" placeholder="Сообщение">
    </div>
    <div class="form-element">
      <button>Отправить</button>
    </div>
  </div>
</div>
<script src="popoutform.js"></script>
</body>
</html>
