<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Kwadrat</title>
  </head>
  <body>
    <form action="KW.php" method="post"><!--создаем форму для работы с пользователем с
      атрибутом action. action отправляет внесенные данные безопасном режиме (post) в путь KW.php-->
      Podaj strone <br>
      <input type="text" name="side" placeholder="Strona kwadratu"><!--создает элемент формы.
      Тип - текстовое поле, имя - side, атрибут placeholder (вывод подсказывающего текста)-->
      <input type="submit" name="button" value="Zatwierdż"><!--создает элемент формы.
      Тип - кнопка для отправки формы на сервер, имя - button, value  (подписывает кнопку) -->
    </form>
  </body>
</html>
