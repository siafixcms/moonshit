<table  border="0" cellspacing="0" cellpadding="0">
<tr>
   
    <td colspan="3"><div align='left' class='snoska1'>Полная информация о луне:</div></td>  
       
</tr>
<tr>
<?php $result1[img]="<img src='imgmoon/moon$moonday.jpg' alt='Лунный календарь' width='192' height='192'>";?>
      <td rowspan="5"><?php echo  "$result1[img]" ?></td>
      <td width="140px">Восход луны:</td>
    <td>
      <?php  echo "$mvos"; ?>
    </td>
  </tr>
  <tr class="polosi">
    <td>Закат луны:</td>
    <td><?php  echo "$mzak"; ?></td>
  </tr>
  <tr class="polosi">
    <td>Фаза луны:</td>
    <td ><?php echo "<strong>$faza[0] с $phasesrez7</strong>"; ?></td>
  </tr>
  <tr>
    <td>Луна в знаке:</td>
    <td><?php  echo "<strong>$moonznk1 ($moondata[11])</strong>"; ?></td>   
  </tr>
  <tr class="polosi">
    <td>&nbsp;</td>
    <td><?php echo "<strong>Лунный дом - $moondata[12]    $moondata[15]</strong>"; ?></td>
  </tr>
  <tr>
    <td>Видимость луны:</td>
    <td colspan="2"> <?php echo"<strong>$ppphase</strong>"; ?></td>   
  </tr>
  <tr>
    <td>Дистанция до луны::</td>
    <td colspan="2"><?php echo "<strong>$distanc</strong>"; ?></td>
  </tr>
  <tr class="polosi">
    <td>Возраст луны:</td>
    <td colspan="2"><?php echo "<strong>$moonages</strong>"; ?></td>
  </tr>
  <tr>
    <td>Новолуние:</td>
    <td colspan="2"><?php echo "<strong>$phasesrez1</strong>"; ?></td>
  </tr>
  <tr>
    <td>Вторая четверть:</td>
    <td colspan="2"><?php echo "<strong>$phasesrez2</strong>"; ?></td>
  </tr>
  <tr>
    <td>Полнолуние:</td>
    <td colspan="2"><?php echo "<strong>$phasesrez3</strong>"; ?></td>
  </tr>
  <tr>
    <td>Последняя четверть:</td>
    <td colspan="2"><?php echo "<strong>$phasesrez4</strong>"; ?></td>
  </tr>
  <tr>
    <td>Новолуние:</td>
    <td colspan="2"><?php echo "<strong>$phasesrez5</strong>"; ?></td>
    
   
  </tr>

</table>