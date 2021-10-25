<?php
function show() {  //создание функции
echo "test";
return "test";
}

function validateData($data, $len) {
  return substr(ucfirst(mb_strtolower(trim($data))), 0, $len  ); // возврат данных return$data . " It's work" - на выходе получу "данные It's work"

}
  ?>
