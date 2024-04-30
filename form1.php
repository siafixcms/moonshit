 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>Лунный календарь</title>
<meta name="keywords" content="" />
<meta name="description" content="Лунный календарь" />
<link href="default.css" rel="stylesheet" type="text/css" />
</head>
<body>
<p>&nbsp;</p>
<p>&nbsp;</p>

 <div align="center"><h1>Лунный календарь</h1>
<form action="<?php echo "index.php"; ?>" method="post" name="form1" >
       <table width="505" height="95" border="0" cellpadding="0" cellspacing="0" background="img/mosabaqa.jpg">
         <tr><td>&nbsp;</td></tr>
  <tr>
    <td>&nbsp;&nbsp;<span class="form1">день</span>      <select name="dd">
           <?php $arg=1; do { echo "<option value='$arg'"; if($arg == $dd) echo "selected"; echo ">$arg"; $arg+=1; }
		  while($arg<32); ?>
      </select></td>
<td><span class="form1">месяц</span>  <select name="mm">
                       <option value='1'    <?php if($mm == '1')  echo "selected"; ?> >январь
                  <option value='2'    <?php if($mm == '2') echo "selected"; ?> >февраль
                  <option value='3'    <?php if($mm == '3')    echo "selected"; ?> >март
                  <option value='4'    <?php if($mm == '4')  echo "selected"; ?> >апрель
                  <option value='5'    <?php if($mm == '5')     echo "selected"; ?> >май
                  <option value='6'    <?php if($mm == '6')    echo "selected"; ?> >июнь
                  <option value='7'    <?php if($mm == '7')    echo "selected"; ?> >июль
                  <option value='8'    <?php if($mm == '8')  echo "selected"; ?> >август
                  <option value='9'    <?php if($mm == '9')echo "selected"; ?> >сентябрь
                  <option value='10'   <?php if($mm == '10') echo "selected"; ?> >октябрь
                  <option value='11'   <?php if($mm == '11')  echo "selected"; ?> >ноябрь
                  <option value='12'   <?php if($mm == '12') echo "selected"; ?> >декабрь              
      </select></td>
    <td><span class="form1">год</span>      <select name="yy">
          <?php $arg=1970; do { echo "<option value='$arg'"; if($arg == $yy) echo "selected"; echo ">$arg"; $arg+=1; }
		  while($arg<2033); ?>
        </select>      </td>
    <td><span class="form1">час</span>      <select name="chas">
        <?php $arg=0; do { echo "<option value='$arg'"; if($arg == $chas) echo "selected"; echo ">$arg"; $arg+=1; }
		  while($arg<24); ?>
      </select></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;&nbsp;<span class="form1">город</span>      <select name='city'>
        <?php $cityar = array("Орел","Брянск","Калуга","Москва","Калининград","Великий Новгород","Псков","Санкт-Петербург","Воркута","Сыктывкар","Вологда","Петрозаводск","Мурманск","Архангельск","Тула","Рязань","Владимир","Иваново","Кострома","Ярославль","Тверь","Смоленск","Курск","Железногорск","Белгород","Воронеж","Тамбов","Липецк","Киров","Йошкар-Ола","Чебоксары", "Саранск", "Нижний Новгород", "Казань", "Пенза", "Самара", "Ульяновск", "Саратов", "Волгоград", "Астрахань", "Элиста", "Ростов на Дону", "Краснодар", "Ставрополь", "Нальчик", "Владикавказ", "Грозный", "Махачкала", "Пермь", "Екатеринбург", "Курган", "Челябинск", "Уфа", "Оренбург", "Ижевск", "Кемерово", "Барнаул", "Новосибирск", "Омск", "Томск", "Тюмень", "Чита", "Улан-Уде", "Кызыл", "Иркутск", "Красноярск", "Якутск","Благовещенск", "Биробиджан", "Хабаровск", "Владивосток", "Магадан", "Петропавловск Камч", "Южно Сахалинск", "Таллин", "Рига", "Вильнюс", "Минск", "Витебск", "Могилев", "Гомель", "Брест", "Гродно", "Киев", "Чернигов", "Сумы", "Полтава", "Харьков", "Луганск", "Донецк", "Запорожье", "Херсон", "Днепропетровск", "Черкассы", "Кировоград", "Николаев", "Одесса", "Житомир", "Винница", "Ровно", "Хмельницкий", "Тернополь", "Львов", "Симферополь", "Кишинев", "Тбилиси", "Цхинвал", "Батуми", "Сухуми", "Ереван", "Баку", "Алма-Ата", "Талды-Курган", "Семипалатинск", "Павлодар", "Канск", "Комсомольск-на-Амуре", "Магнитогорск", "Нефтеюганск", "Новороссийск", "Норильск");
    asort($cityar);
    foreach ( $cityar as $value ) {  echo "<option value='$value'"; 
	if ($city == $value) { echo "selected"; } echo ">$value"; } ?>
      </select></td>    
    <td>&nbsp;</td>
    <td><span class="form1">мин</span>   <select name="min">
                  <?php $arg=0; do { echo "<option value='$arg'"; if($arg == $min) echo "selected"; echo ">$arg"; $arg+=5; }
		  while($arg<60); ?>
        </select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2"><input name="button" type="submit" value="Рассчитать Лунный день"/></td>
    </tr> <tr><td>&nbsp;</td></tr>
</table>
</form></div>

<table width="100%"  border="0" cellpadding="0" cellspacing="0">
  

  <tr>
    <td colspan="2" height="30"><?php echo "<strong>$city</strong> ($north , $east), UTC $tzone,   Время: <strong>$dd $mom $yy $vrtime</strong>";  ?></td>    
  </tr>
  <tr>
    <td class="polosi" colspan="2" height="30"><?php echo "<strong> <span style='font-size: 20px'>$moonday</span> -й лунный день</strong> (c $phasesrez6)";?></td>
  </tr>
 </table>
  
<?php include ("infomoon.php"); ?>
	  
<table width="100%"  border="0" cellpadding="0" cellspacing="0">
<tr>
    <td colspan='2'><div align='left'><h3>Лунный календарь характеристика дня</h3></div></td>
  </tr>

<tr>
    <td colspan='2'> <?php // echo "$myr[mday]";
	if ($moonday<10 || $moonday==10) $pattern="|$moonday@@(.*)$moonday@@@|sei";
	if (($moonday>10 && $moonday<20) || ($moonday==20)) $pattern="|$moonday!@@(.*)$moonday!@@@|sei";
	if ($moonday>20) $pattern="|$moonday!!@@(.*)$moonday!!@@@|sei";
	$lines = file_get_contents('moonday.txt');
	preg_match($pattern, $lines, $arr);
	echo "$arr[1]";  ?>
    </td>
  </tr>  
<tr>
    <td><?php 
	if ($idmoonfaze=="") $idmoonfaze=1;
	$pattern="|$idmoonfaze@@(.*)$idmoonfaze@@@|sei";
	$lines = file_get_contents('fase.txt');
	preg_match($pattern, $lines, $arr);
	echo "<p>&nbsp;</p>";
	echo "$arr[1]"; ?> 
  </td>
  </tr> 
</table>
</body>
</html>