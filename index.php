<?php 
ini_set('display_errors', 0); //���� ����� ������
error_reporting(0);
//ini_set('display_errors', 1); // ����� ������
//error_reporting(E_ALL);
date_default_timezone_set('Europe/Moscow'); // ����� � ������� ������ �� ��������

if (isset ($_POST['dd'])) { $dd=$_POST['dd']; } else {$date_tek=time(); $dd=date("d",$date_tek); }
$dd2=$dd-1; $dd3=$dd+1;
if (isset ($_POST['mm'])) { $mm=$_POST['mm']; } else {$date_tek=time(); $mm=date("m",$date_tek); }
if (isset ($_POST['yy'])) { $yy=$_POST['yy']; } else {$date_tek=time(); $yy=date("Y",$date_tek); }
if (isset ($_POST['chas'])) { $chas=$_POST['chas']; } else {$date_tek=time(); $chas=date("H",$date_tek); }
if (isset ($_POST['min'])) { $min=$_POST['min']; } else {$date_tek=time(); $min=date("i",$date_tek); }
if (isset ($_POST['city'])) { $city=$_POST['city']; } else { $city="������"; }


$leto=0;
$date=$yy.'-'.$mm.'-'.$dd; $date2=$yy.'-'.$mm.'-'.$dd2; $date3=$yy.'-'.$mm.'-'.$dd3;
$time=$chas.':'.$min.':'.'00';
$time2='00:00:00';


if ($city=="����")  { $myrow['north']=52.58;  $myrow['east']=36.06;  $myrow['gmt']=+3; }
if ($city=="������")  { $myrow['north']=53.16;  $myrow['east']=34.23;  $myrow['gmt']=+3; }
if ($city=="������")  { $myrow['north']=54.32;  $myrow['east']=36.16;  $myrow['gmt']=+3; }
if ($city=="������")  { $myrow['north']=55.45;  $myrow['east']=37.37;  $myrow['gmt']=+3; }
if ($city=="�����������")  { $myrow['north']=54.41;  $myrow['east']=20.31;  $myrow['gmt']=+2; }
if ($city=="������� ��������")  { $myrow['north']=58.31;  $myrow['east']=30.17;  $myrow['gmt']=+3; }
if ($city=="�����")  { $myrow['north']=57.49;  $myrow['east']=28.20;  $myrow['gmt']=+3; }
if ($city=="�����-���������")  { $myrow['north']=59.57;  $myrow['east']=30.19;  $myrow['gmt']=+3; }
if ($city=="�������")  { $myrow['north']=67.29;  $myrow['east']=64;  $myrow['gmt']=+3; }
if ($city=="���������")  { $myrow['north']=61.41;  $myrow['east']=50.49;  $myrow['gmt']=+3; }
if ($city=="�������")  { $myrow['north']=59.13;  $myrow['east']=39.37;  $myrow['gmt']=+3; }
if ($city=="������������")  { $myrow['north']=61.46;  $myrow['east']=34.23;  $myrow['gmt']=+3; }
if ($city=="��������")  { $myrow['north']=68.59;  $myrow['east']=33.07;  $myrow['gmt']=+3; }
if ($city=="�����������")  { $myrow['north']=64.36;  $myrow['east']=40.32;  $myrow['gmt']=+3; }
if ($city=="����")  { $myrow['north']=54.12;  $myrow['east']=37.37;  $myrow['gmt']=+3; }
if ($city=="������")  { $myrow['north']=54.39;  $myrow['east']=39.43;  $myrow['gmt']=+3; }
if ($city=="��������")  { $myrow['north']=56.08;  $myrow['east']=40.23;  $myrow['gmt']=+3; }
if ($city=="�������")  { $myrow['north']=57.00;  $myrow['east']=40.58;  $myrow['gmt']=+3; }
if ($city=="��������")  { $myrow['north']=57.47;  $myrow['east']=40.57;  $myrow['gmt']=+3; }
if ($city=="���������")  { $myrow['north']=57.38;  $myrow['east']=39.53;  $myrow['gmt']=+3; }
if ($city=="�����")  { $myrow['north']=56.52;  $myrow['east']=35.55;  $myrow['gmt']=+3; }
if ($city=="��������")  { $myrow['north']=54.48;  $myrow['east']=32.02;  $myrow['gmt']=+3; }
if ($city=="�����")  { $myrow['north']=51.44;  $myrow['east']=36.11;  $myrow['gmt']=+3; }
if ($city=="������������")  { $myrow['north']=52.20;  $myrow['east']=35.21;  $myrow['gmt']=+3; }
if ($city=="��������")  { $myrow['north']=50.36;  $myrow['east']=36.36;  $myrow['gmt']=+3; }
if ($city=="�������")  { $myrow['north']=51.40;  $myrow['east']=39.12;  $myrow['gmt']=+3; }
if ($city=="������")  { $myrow['north']=52.43;  $myrow['east']=41.26;  $myrow['gmt']=+3; }
if ($city=="������")  { $myrow['north']=52.37;  $myrow['east']=39.37;  $myrow['gmt']=+3; }
if ($city=="�����")  { $myrow['north']=58.37;  $myrow['east']=49.43;  $myrow['gmt']=+3; }
if ($city=="������-���")  { $myrow['north']=56.39;  $myrow['east']=47.53;  $myrow['gmt']=+3; }
if ($city=="���������")  { $myrow['north']=56.08;  $myrow['east']=47.16;  $myrow['gmt']=+3; }
if ($city=="�������")  { $myrow['north']=54.09;  $myrow['east']=45.09;  $myrow['gmt']=+3; }
if ($city=="������ ��������")  { $myrow['north']=56.20;  $myrow['east']=44.00;  $myrow['gmt']=+3; }
if ($city=="������")  { $myrow['north']=55.47;  $myrow['east']=49.08;  $myrow['gmt']=+3; }
if ($city=="�����")  { $myrow['north']=53.13;  $myrow['east']=45.01;  $myrow['gmt']=+3; }
if ($city=="������")  { $myrow['north']=53.12;  $myrow['east']=50.10;  $myrow['gmt']=+4; }
if ($city=="���������")  { $myrow['north']=54.18;  $myrow['east']=48.12;  $myrow['gmt']=+3; }
if ($city=="�������")  { $myrow['north']=51.31;  $myrow['east']=45.58;  $myrow['gmt']=+3; }
if ($city=="���������")  { $myrow['north']=48.43;  $myrow['east']=44.31;  $myrow['gmt']=+3; }
if ($city=="���������")  { $myrow['north']=46.22;  $myrow['east']=48.03;  $myrow['gmt']=+3; }
if ($city=="������")  { $myrow['north']=46.19;  $myrow['east']=44.15;  $myrow['gmt']=+3; }
if ($city=="������ �� ����")  { $myrow['north']=47.13;  $myrow['east']=39.42;  $myrow['gmt']=+3; }
if ($city=="���������")  { $myrow['north']=45.02;  $myrow['east']=39.01;  $myrow['gmt']=+3; }
if ($city=="����������")  { $myrow['north']=45.03;  $myrow['east']=41.59;  $myrow['gmt']=+3; }
if ($city=="�������")  { $myrow['north']=43.28;  $myrow['east']=43.37;  $myrow['gmt']=+3; }
if ($city=="�����������")  { $myrow['north']=43.01;  $myrow['east']=44.40;  $myrow['gmt']=+3; }
if ($city=="�������")  { $myrow['north']=43.19;  $myrow['east']=45.40;  $myrow['gmt']=+3; }
if ($city=="���������")  { $myrow['north']=42.59;  $myrow['east']=47.29;  $myrow['gmt']=+3; }
if ($city=="�����")  { $myrow['north']=58.00;  $myrow['east']=56.13;  $myrow['gmt']=+5; }
if ($city=="������������")  { $myrow['north']=56.51;  $myrow['east']=60.36;  $myrow['gmt']=+5; }
if ($city=="������")  { $myrow['north']=55.27;  $myrow['east']=65.18;  $myrow['gmt']=+5; }
if ($city=="���������")  { $myrow['north']=55.10;  $myrow['east']=61.24;  $myrow['gmt']=+5; }
if ($city=="���")  { $myrow['north']=54.44;  $myrow['east']=55.58;  $myrow['gmt']=+5; }
if ($city=="��������")  { $myrow['north']=51.47;  $myrow['east']=55.03;  $myrow['gmt']=+5; }
if ($city=="������")  { $myrow['north']=56.50;  $myrow['east']=53.12;  $myrow['gmt']=+4; }
if ($city=="��������")  { $myrow['north']=55.22;  $myrow['east']=86.05;  $myrow['gmt']=+7; }
if ($city=="�������")  { $myrow['north']=53.21;  $myrow['east']=83.46;  $myrow['gmt']=+6; }
if ($city=="�����������")  { $myrow['north']=55.02;  $myrow['east']=82.56;  $myrow['gmt']=+6; }
if ($city=="����")  { $myrow['north']=55.00;  $myrow['east']=73.24;  $myrow['gmt']=+6; }
if ($city=="�����")  { $myrow['north']=56.29;  $myrow['east']=84.57;  $myrow['gmt']=+6; }
if ($city=="������")  { $myrow['north']=57.09;  $myrow['east']=65.30;  $myrow['gmt']=+5; }
if ($city=="����")  { $myrow['north']=52.02;  $myrow['east']=113.29;  $myrow['gmt']=+9; }
if ($city=="����-���")  { $myrow['north']=51.50;  $myrow['east']=107.36;  $myrow['gmt']=+8; }
if ($city=="�����")  { $myrow['north']=51.42;  $myrow['east']=94.25;  $myrow['gmt']=+7; }
if ($city=="�������")  { $myrow['north']=52.19;  $myrow['east']=104.18;  $myrow['gmt']=+8; }
if ($city=="����������")  { $myrow['north']=56.00;  $myrow['east']=92.49;  $myrow['gmt']=+6; }
if ($city=="������")  { $myrow['north']=62.02;  $myrow['east']=129.39;  $myrow['gmt']=+9; }
if ($city=="������������")  { $myrow['north']=50.15;  $myrow['east']=127.34;  $myrow['gmt']=+9; }
if ($city=="����������")  { $myrow['north']=48.48;  $myrow['east']=132.55;  $myrow['gmt']=+10; }
if ($city=="���������")  { $myrow['north']=48.29;  $myrow['east']=135.05;  $myrow['gmt']=+10; }
if ($city=="�����������")  { $myrow['north']=43.07;  $myrow['east']=131.55;  $myrow['gmt']=+10; }
if ($city=="�������")  { $myrow['north']=59.35;  $myrow['east']=150.48;  $myrow['gmt']=+11; }
if ($city=="������������� ����")  { $myrow['north']=53.03;  $myrow['east']=158.39;  $myrow['gmt']=+12; }
if ($city=="���� ���������")  { $myrow['north']=46.58;  $myrow['east']=142.45;  $myrow['gmt']=+10; }
if ($city=="������")  { $myrow['north']=59.25;  $myrow['east']=24.45;  $myrow['gmt']=+2; }
if ($city=="����")  { $myrow['north']=56.58;  $myrow['east']=24.05;  $myrow['gmt']=+2; }
if ($city=="�������")  { $myrow['north']=54.41;  $myrow['east']=25.17;  $myrow['gmt']=+2; }
if ($city=="�����")  { $myrow['north']=53.55;  $myrow['east']=27.35;  $myrow['gmt']=+3; }
if ($city=="�������")  { $myrow['north']=55.11;  $myrow['east']=30.10;  $myrow['gmt']=+3; }
if ($city=="�������")  { $myrow['north']=53.54;  $myrow['east']=30.21;  $myrow['gmt']=+2; }
if ($city=="������")  { $myrow['north']=52.40;  $myrow['east']=31.00;  $myrow['gmt']=+3; }
if ($city=="�����")  { $myrow['north']=52.06;  $myrow['east']=23.42;  $myrow['gmt']=+2; }
if ($city=="������")  { $myrow['north']=53.40;  $myrow['east']=23.50;  $myrow['gmt']=+3; }
if ($city=="����")  { $myrow['north']=50.25;  $myrow['east']=30.30;  $myrow['gmt']=+2; }
if ($city=="��������")  { $myrow['north']=51.30;  $myrow['east']=31.16;  $myrow['gmt']=+2; }
if ($city=="����")  { $myrow['north']=50.54;  $myrow['east']=34.46;  $myrow['gmt']=+2; }
if ($city=="�������")  { $myrow['north']=49.36;  $myrow['east']=34.33;  $myrow['gmt']=+2; }
if ($city=="�������")  { $myrow['north']=50.00;  $myrow['east']=36.15;  $myrow['gmt']=+2; }
if ($city=="�������")  { $myrow['north']=48.34;  $myrow['east']=39.20;  $myrow['gmt']=+2; }
if ($city=="������")  { $myrow['north']=48.00;  $myrow['east']=37.46;  $myrow['gmt']=+3; }
if ($city=="���������")  { $myrow['north']=47.49;  $myrow['east']=35.10;  $myrow['gmt']=+2; }
if ($city=="������")  { $myrow['north']=46.38;  $myrow['east']=32.37;  $myrow['gmt']=+2; }
if ($city=="��������������")  { $myrow['north']=48.27;  $myrow['east']=34.59;  $myrow['gmt']=+2; }
if ($city=="��������")  { $myrow['north']=49.26;  $myrow['east']=32.03;  $myrow['gmt']=+2; }
if ($city=="����������")  { $myrow['north']=48.30;  $myrow['east']=32.18;  $myrow['gmt']=+2; }
if ($city=="��������")  { $myrow['north']=46.58;  $myrow['east']=32.00;  $myrow['gmt']=+2; }
if ($city=="������")  { $myrow['north']=46.28;  $myrow['east']=30.44;  $myrow['gmt']=+2; }
if ($city=="�������")  { $myrow['north']=50.15;  $myrow['east']=28.40;  $myrow['gmt']=+3; }
if ($city=="�������")  { $myrow['north']=49.14;  $myrow['east']=28.27;  $myrow['gmt']=+3; }
if ($city=="�����")  { $myrow['north']=50.37;  $myrow['east']=26.15;  $myrow['gmt']=+2; }
if ($city=="�����������")  { $myrow['north']=49.25;  $myrow['east']=26.59;  $myrow['gmt']=+2; }
if ($city=="���������")  { $myrow['north']=49.33;  $myrow['east']=25.26;  $myrow['gmt']=+2; }
if ($city=="�����")  { $myrow['north']=49.49;  $myrow['east']=24.01;  $myrow['gmt']=+2; }
if ($city=="�����������")  { $myrow['north']=44.57;  $myrow['east']=34.06;  $myrow['gmt']=+2; }
if ($city=="�������")  { $myrow['north']=47.01;  $myrow['east']=28.49;  $myrow['gmt']=+2; }
if ($city=="�������")  { $myrow['north']=41.41;  $myrow['east']=44.51;  $myrow['gmt']=+4; }
if ($city=="�������")  { $myrow['north']=42.14;  $myrow['east']=43.57;  $myrow['gmt']=+3; }
if ($city=="������")  { $myrow['north']=41.38;  $myrow['east']=41.40;  $myrow['gmt']=+3; }
if ($city=="������")  { $myrow['north']=43.00;  $myrow['east']=42.01;  $myrow['gmt']=+3; }
if ($city=="������")  { $myrow['north']=40.11;  $myrow['east']=44.32;  $myrow['gmt']=+4; }
if ($city=="����")  { $myrow['north']=40.23;  $myrow['east']=49.52;  $myrow['gmt']=+4; }
if ($city=="����-���")  { $myrow['north']=43.46;  $myrow['east']=76.56;  $myrow['gmt']=+6; }
if ($city=="�����-������")  { $myrow['north']=44.59;  $myrow['east']=78.20;  $myrow['gmt']=+6; }
if ($city=="�������������")  { $myrow['north']=50.27;  $myrow['east']=80.14;  $myrow['gmt']=+6; }
if ($city=="��������")  { $myrow['north']=52.17;  $myrow['east']=76.57;  $myrow['gmt']=+6; }
if ($city=="�����")  { $myrow['north']=56.12;  $myrow['east']=95.42;  $myrow['gmt']=+7; }
if ($city=="�����������-��-�����")  { $myrow['north']=50.33;  $myrow['east']=137.00;  $myrow['gmt']=+10; }
if ($city=="������������")  { $myrow['north']=53.23;  $myrow['east']=59.02;  $myrow['gmt']=+5; }
if ($city=="�����������")  { $myrow['north']=61.06;  $myrow['east']=72.36;  $myrow['gmt']=+5; }
if ($city=="������������")  { $myrow['north']=44.43;  $myrow['east']=37.46;  $myrow['gmt']=+3; }
if ($city=="��������")  { $myrow['north']=69.20;  $myrow['east']=88.13;  $myrow['gmt']=+7; }

//require_once("config.php"); $select=mysql_query("SELECT * FROM geo WHERE city='$city'"); 
//$myrow = mysql_fetch_array($select);
$zonedop=$tzone=$myrow['gmt']+$leto; $tzone='+'.$tzone;
$north=$myrow['north']; $east=$myrow['east']; 

 require( 'moonphase.inc.php' ); //���������� ��������� ������ ������� ���������

if ($myrow['east'] > 114) { $myrow['east']=114; }  // ��������� � ������ ������� � ������ (������� �� ������������)
//if ($myrow['north'] < 48) { $myrow['east']=48; }  // ��������� � ������ ������� � ������ (������� �� ������������)

 
 $moondata =  phase(strtotime($date . ' ' . $time . ' ' . $tzone), $myrow['north'], $myrow['east'], $zonedop );
 $moondata2 = phase(strtotime($date . ' ' . $time2 . ' ' . $tzone), $myrow['north'], $myrow['east'], $zonedop ); //������ ���� �� 00:00:00
 $moondata3 = phase(strtotime($date2 . ' ' . $time2 . ' ' . $tzone), $myrow['north'], $myrow['east'], $zonedop ); //������ ���� �� ����� �����
 $moondata4 = phase(strtotime($date3 . ' ' . $time2 . ' ' . $tzone), $myrow['north'], $myrow['east'], $zonedop ); //������ ���� �� ����� ������
 //
 //����������� ������ ������ ������� ��� � ������ �������� ����
 $srday1=strtotime($date . ' ' . $time); //��������� ����� ��������� �������������
 
 $moonvoshod=$moondata2[9];
 $moonvoshod1=($moonvoshod - floor($moonvoshod))*60; //������
 $moonvoshod=floor($moonvoshod).':'.floor($moonvoshod1).':00';
 $srday2=strtotime($date . ' ' . $moonvoshod . ' ' . $tzone); //��������� ����� ������� ���� �� 00:00:00
 $moonvoshodstar=$moondata3[9];
 $moonvoshodstar1=($moonvoshodstar - floor($moonvoshodstar))*60; //������
 $moonvoshodstar=floor($moonvoshodstar).':'.floor($moonvoshodstar1).':00';
 $srday3=strtotime($date2 . ' ' . $moonvoshodstar . ' ' . $tzone); //��������� ����� ������� ���� ����� (����� �����)
 $moonvoshodstarzav=$moondata4[9];
 $moonvoshodstarzav1=($moonvoshodstarzav - floor($moonvoshodstarzav))*60; //������
 $moonvoshodstarzav=floor($moonvoshodstarzav).':'.floor($moonvoshodstarzav1).':00';
 $srday4=strtotime($date3 . ' ' . $moonvoshodstarzav . ' ' . $tzone); //��������� ����� ������� ���� ������ (����� ������)
 
 $moonvozrast=ceil($moondata[2]); // ������� ����������������
 $moonvozrast2=ceil($moondata3[2]); // ������� ����� �����
  
 $moontime=$moondata[2];
 $moonages=degtime3($moontime);
 $prosc=degtime4($myrow['north']);
 //��������� ���� � %
 $ppphaser=round($moondata[1] , 3) * 100;
 $ppphase=$ppphaser.'%'; //��������� ����
 $distanc= floor($moondata[3]);  $distanc= $distanc.' ��'; // ���������

//
// ������ ������ ���  
	$gmt=$tzone*3600;
   	$phases  = array();
	$phases  = phasehunt(strtotime($date  . ' ' . $time)) ; // ���� ������
	$phases2 = phasehunt(strtotime($date2 . ' ' . $time)) ; // ���� ����� �����
	$phases3 = phasehunt(strtotime($date3 . ' ' . $time)) ; // ���� ����� ������
	$phases[0]+=$gmt; $phases[1]+=$gmt; $phases[2]+=$gmt; $phases[3]+=$gmt; $phases[4]+=$gmt; $moonstar=0; $moonstar+=$gmt;
	$phases2[0]+=$gmt; $phases2[1]+=$gmt; $phases2[2]+=$gmt; $phases2[3]+=$gmt; $phases2[4]+=$gmt;
	$phases3[0]+=$gmt; $phases3[1]+=$gmt; $phases3[2]+=$gmt; $phases3[3]+=$gmt; $phases3[4]+=$gmt;
	
	$srday2+=$gmt;  $srday3+=$gmt;  $srday4+=$gmt;
	//������������ ���� GMT ����� ������
	$phasesgmt0=gmdate("j F Y l G:i", $phases2[0]); $phasesgmt0=strtotime($phasesgmt0); //��������� 1 �������� ����� �����
	$phasesgmt1=gmdate("j F Y l G:i", $phases2[1]); $phasesgmt1=strtotime($phasesgmt1); // 2 �������� ����� �����
	$phasesgmt2=gmdate("j F Y l G:i", $phases2[2]); $phasesgmt2=strtotime($phasesgmt2); // ���������� 3 �������� ����� �����
	$phasesgmt3=gmdate("j F Y l G:i", $phases2[3]); $phasesgmt3=strtotime($phasesgmt3); // ��������� �������� ����� �����
	$phasesgmt4=gmdate("j F Y l G:i", $phases2[4]); $phasesgmt4=strtotime($phasesgmt4); // ���������
	$phasesgmt5=gmdate("j F Y l G:i", $phases[0]); $phasesgmt5=strtotime($phasesgmt5); // ��������� 1 �������� 
	$phasesgmt6=gmdate("j F Y l G:i", $phases3[0]); $phasesgmt6=strtotime($phasesgmt6); // ��������� 1 �������� ����� ������
	
	$phasesgmt7=gmdate("j F Y l G:i", $phases[0]); $phasesgmt7=strtotime($phasesgmt7); //��������� 1 �������� 
	$phasesgmt8=gmdate("j F Y l G:i", $phases[1]); $phasesgmt8=strtotime($phasesgmt8); // 2 ��������
	$phasesgmt9=gmdate("j F Y l G:i", $phases[2]); $phasesgmt9=strtotime($phasesgmt9); // ���������� 3 �������� 
	$phasesgmt10=gmdate("j F Y l G:i", $phases[3]); $phasesgmt10=strtotime($phasesgmt10); // ��������� �������� 
	$phasesgmt11=gmdate("j F Y l G:i", $phases[4]); $phasesgmt11=strtotime($phasesgmt11); // ���������
	
	
	
	$srday2=gmdate("j F Y l G:i", $srday2); $srday2=strtotime($srday2);
	$srday3=gmdate("j F Y l G:i", $srday3); $srday3=strtotime($srday3);
	$srday4=gmdate("j F Y l G:i", $srday4); $srday4=strtotime($srday4);
	$phasesgmtnew=$phasesgmt4+(12*3600);
	$phasesgmtfull=$phasesgmt2+(12*3600);
		
	//
	//
	//
	//
	//
	//
	//
	// //����������� ������� ���� � ��������� $phases[4]
		
	if ($phasesgmt7>$srday1) { $dataper=$dataper2=$phasesgmt0; } 
	else { $dataper=$dataper2=$phasesgmt7;  } //������ 1������� ���
	
//	$date4=date("Y-m-d", $dataper2);
//	$moondata5 = phase(strtotime($date4 . ' ' . $time2 . ' ' . $tzone), $myrow['north'], $myrow['east'], $zonedop );
//	$mmdd=$moondata5[9];
//	$mmdd1=($mmdd - floor($mmdd))*60; //������
//   $mmdd=floor($mmdd).':'.floor($mmdd1).':00';
//	$srday5=strtotime($date4 . ' ' . $mmdd . ' ' . $tzone); //������ ���� � ���������
		
	//$moonper3=strtotime($dataper .' ' . $time); //���� �����. �����	 
	$moonper3=$dataper; //���� ���������
	$dataperxxx=$dataper;
//
//	
// ������ ������� ���� � ���������
$newmoonarg=$moonper31=$dataper1=$moonper3; //������ ���������
$newmoonarg=date("Y-m-d" , $newmoonarg);
$moonarg=0;
$moonarg2 = phase(strtotime($newmoonarg . ' ' . $time2 . ' ' . $tzone), $myrow['north'], $myrow['east'], $zonedop ); //���� �� 00:00:00
$moonargvoshod=strtotime($newmoonarg . ' ' . $moonarg2[7]); //������ ���� � ���� ��������� � ������ ����


//������ ������� ���
$moonday=0;	
					
//if ($moonargvoshod > $dataper2) $moonday=-1;
$dataper=date("Y-m-d" , $dataper);     ///
$dateuser=date("Y-m-d" , $srday1);    ///
$moonper3=strtotime($dataper . ' ' . $time2); //������ ���� �� ���� ��������� � 00:00 ��� ��������
$moonper4=strtotime($dateuser . ' ' . $time2); //������ ���� �� ���� ������������ � 00:00 ��� ��������

	 while ($moonper3 < $moonper4)	
	 {  $moonper3=$moonper3 + 24*3600;	
	   	$moonday+=1; 
		//echo "�������+1<br>";
		   }
		  		   
		 //
		//
		// ��� ������� ��������� 
		while ($dataperxxx < $srday1)   
	    {

//		$dataperxxx=date("Y-m-d" , $dataperxxx);
		//echo "<br><br><br>dataperxxx = $dataperxxx<br><br><br>";

$dataperxxx_kostyl=date("Y-m-d" , $dataperxxx);
		
		$moondata5 = phase(strtotime($dataperxxx_kostyl . ' ' . $time2 . ' ' . $tzone), $myrow['north'], $myrow['east'], $zonedop ); //���� �� 00:00:00  // ����� ��� ������� ���������
		  $moonper2=strtotime($moondata5[7]); //���� ������� ���� �����
		  
		  $moonper2xxx=date("Y-m-d" , $moonper2);
		  $moonper2xxx2='01:28:00';
		  $moonper2_2=strtotime($moonper2xxx . ' ' . $moonper2xxx2);
		  if ( $moonper2 < $moonper2_2 ) {$xpara=+1; }  // echo "<br>1��� ������ ���������<br>";

//		  $dataperxxx=strtotime($dataperxxx) + 24*3600;
		  $dataperxxx=$dataperxxx + 24*3600;
//		     }
}
		//
		//
		//moonargvoshod - //������ ���� � ���� ��������� � ������ ����
		//dataper2 - // ���� ��������� � ������
		//$xs1=date("Y-m-d G:i" , $moonargvoshod);
		////srday1-��������� ����� ��������� �������������
		////srday2-��������� ����� ������� ���� �� 00:00:00

//��� ����������� ������� ���� � ��������� �� 19 ���� 2012
$datavoscor1=strtotime('2012-07-19');
$datavoscor2=strtotime('2012-08-17 08:00');
if (($srday1>$datavoscor1) and ($srday1<$datavoscor2)) { 
														$datavoscor=strtotime('2012-07-19' . ' ' . '06:25');
														 $moonargvoshod=$datavoscor;
					 
													 }
 
	   
// ������� ��������� �������� 1-� ����		   
if (($moonday!=0) and ($moonargvoshod>$dataper2)) {$moonday+=1; } 
if (($moonday==0) and ($moonargvoshod>$dataper2) and ($srday1>$srday2)) {$moonday+=1;  }
if (($moonday==0) and ($moonargvoshod>$dataper2) and ($srday1<$srday2)) {$moonday+=1;   }


		  
if ($srday1>$srday2) {$moonday+=1;  }

//
//
//������� ���������
if (isset ($xpara) and ($xpara==1)) { $moonday-=1; 
//echo "��������"; 
					}
if ($moonday==31)   {$moonday-=1;} //�� ������ ������
if ($moonday==32)   {$moonday-=2;} //�� ������ ������
if ($moonday==0)   {$moonday+=1;} //�� ������ ������
//
//

	//
	// �������� moonstar � ������ ������� ���� ������ ����, 
	//
	if ($moonday==1) { $moonstar=$phasesgmt7; }  // �������� ������� ������� ���
	else { 
		$petia = strtotime($date . ' ' . $time );
		if ($srday2 > $petia) { $moonstar=$srday3; } else { $moonstar=$srday2; }
		 }
	
		
			
	if (($srday1 > $phasesgmt0) && ($srday1 < $phasesgmt1) ) { $moonstar2=$phases2[0]; $faza[0]="��������  1-� ��������"; }
	if (($srday1 > $phasesgmt1) && ($srday1 < $phasesgmt2) ) { $moonstar2=$phases2[1]; $faza[0]="��������  2-� ��������"; }
	if (($srday1 > $phasesgmt2) && ($srday1 < $phasesgmt3) ) { $moonstar2=$phases2[2]; $faza[0]="��������� 3-� ��������"; }
	if (($srday1 > $phasesgmt3) && ($srday1 < $phasesgmt4) ) { $moonstar2=$phases2[3]; $faza[0]="��������� 4-� ��������"; }
	if (($srday1 > $phasesgmt4) && ($moonvozrast==1) && ($srday1 < $phasesgmtnew)) { $moonstar2=$phases2[4]; $faza[0]="���������";}
	if (($srday1 > $phasesgmt2) &&  ($srday1 < $phasesgmtfull)) { $moonstar2=$phases2[2]; $faza[0]="����������";}
	if ($moonvozrast==2) { $moonstar2=$phases3[0]; $faza[0]="��������  1-� ��������"; }
	
	$phasesrez1=gmdate("j F Y l G:i", $phases[0]);
	$phasesrez2=gmdate("j F Y l G:i", $phases[1]);
	$phasesrez3=gmdate("j F Y l G:i", $phases[2]);
	$phasesrez4=gmdate("j F Y l G:i", $phases[3]);
	$phasesrez5=gmdate("j F Y l G:i", $phases[4]);
	
	$moonstar = date("j F G:i", $moonstar);
	$moonstar2 =  gmdate("j F G:i", $moonstar2);
	$phasesgmt0 =  date("j F G:i", $phasesgmt0); // ����� ���������
	$srday4=  date("j F G:i", $srday4);
   

	$phasesmas[0]="/January/"; $phasesmas[1]="/February/"; $phasesmas[2]="/March/"; $phasesmas[3]="/April/"; 
	$phasesmas[4]="/May/"; $phasesmas[5]="/June/"; $phasesmas[6]="/July/"; $phasesmas[7]="/August/";
	$phasesmas[8]="/September/"; $phasesmas[9]="/October/"; $phasesmas[10]="/November/"; $phasesmas[11]="/December/";
	$phasesmas[12]="/Monday/"; $phasesmas[13]="/Tuesday/"; $phasesmas[14]="/Wednesday/"; $phasesmas[15]="/Thursday/";
	$phasesmas[16]="/Friday/"; $phasesmas[17]="/Saturday/"; $phasesmas[18]="/Sunday/";
	$phasesmas2[0]="������"; $phasesmas2[1]="�������"; $phasesmas2[2]="�����"; $phasesmas2[3]="������";
	$phasesmas2[4]="���"; $phasesmas2[5]="����"; $phasesmas2[6]="����"; $phasesmas2[7]="�������"; $phasesmas2[8]="��������";
	$phasesmas2[9]="�������"; $phasesmas2[10]="������"; $phasesmas2[11]="�������";
	$phasesmas2[12]="�����������"; $phasesmas2[13]="�������"; $phasesmas2[14]="�����";
	$phasesmas2[15]="�������"; $phasesmas2[16]="�������"; $phasesmas2[17]="������"; $phasesmas2[18]="�����������";
	
	$phasesrez1 = preg_replace($phasesmas, $phasesmas2, $phasesrez1);
	$phasesrez2 = preg_replace($phasesmas, $phasesmas2, $phasesrez2);
	$phasesrez3 = preg_replace($phasesmas, $phasesmas2, $phasesrez3);
	$phasesrez4 = preg_replace($phasesmas, $phasesmas2, $phasesrez4);
	$phasesrez5 = preg_replace($phasesmas, $phasesmas2, $phasesrez5);
	$phasesrez6 = preg_replace($phasesmas, $phasesmas2, $moonstar);
	$phasesrez7 = preg_replace($phasesmas, $phasesmas2, $moonstar2);
	
	//� ����� �������
	switch ($moondata[10]) {case '1' : $moonznk1="����"; break;}
	switch ($moondata[10]) {case '2' : $moonznk1="������"; break;}
	switch ($moondata[10]) {case '3' : $moonznk1="���������"; break;}
	switch ($moondata[10]) {case '4' : $moonznk1="����"; break;}
	switch ($moondata[10]) {case '5' : $moonznk1="����"; break;}
	switch ($moondata[10]) {case '6' : $moonznk1="����"; break;}
	switch ($moondata[10]) {case '7' : $moonznk1="�����"; break;}
	switch ($moondata[10]) {case '8' : $moonznk1="���������"; break;}
	switch ($moondata[10]) {case '9' : $moonznk1="��������"; break;}
	switch ($moondata[10]) {case '10': $moonznk1="��������"; break;}
	switch ($moondata[10]) {case '11': $moonznk1="�������"; break;}
	switch ($moondata[10]) {case '12': $moonznk1="����"; break;}
	
	$mvos = strtotime($moondata2[7]); $mvos=date("H:i", $mvos);
	$mzak = strtotime($moondata2[8]); $mzak=date("H:i", $mzak);

$mvos_min=substr($mvos, 0, 2)*60+substr($mvos, -2);
$mvos_tom = strtotime($moondata3[7]); $mvos_tom=date("H:i", $mvos_tom);
$mvos_tom_min=substr($mvos_tom, 0, 2)*60+substr($mvos_tom, -2);
if($mvos_min<$mvos_tom_min){$mvos="no";$moonday=$moonday-1;}

$mzak_min=substr($mzak, 0, 2)*60+substr($mzak, -2);
$mzak_tom = strtotime($moondata3[8]); $mzak_tom=date("H:i", $mzak_tom);
$mzak_tom_min=substr($mzak_tom, 0, 2)*60+substr($mzak_tom, -2);
if($mzak_min<$mzak_tom_min){$mzak="no";}

//} //button

//} //button

//require_once("config.php");
//$select=mysql_query("SELECT * FROM geo ORDER BY city");
//$myrow = mysql_fetch_array($select);

$northarg=floor(($north-floor($north))*100);
$north=floor($north).'� '.$northarg."'".'N';
$eastarg=floor(($east-floor($east))*100);
$east=floor($east).'� '.$eastarg."'".'E';
    switch ($mm) {case '1' : $mom="������"; break;}
	switch ($mm) {case '2' : $mom="�������"; break;}
	switch ($mm) {case '3' : $mom="�����"; break;}
	switch ($mm) {case '4' : $mom="������"; break;}
	switch ($mm) {case '5' : $mom="���"; break;}
	switch ($mm) {case '6' : $mom="����"; break;}
	switch ($mm) {case '7' : $mom="����"; break;}
	switch ($mm) {case '8' : $mom="�������"; break;}
	switch ($mm) {case '9' : $mom="��������"; break;}
	switch ($mm) {case '10': $mom="�������"; break;}
	switch ($mm) {case '11': $mom="������"; break;}
	switch ($mm) {case '12': $mom="�������"; break;}
	$vrtime=date("H:i", $srday1);
//require_once("config.php");
//$sel=mysql_query("SELECT * FROM moonday WHERE id='$moonday' ");
//$myr = mysql_fetch_array($sel);
//$sel2=mysql_query("SELECT * FROM znak WHERE id='$moondata[10]' ");
//$myr2 = mysql_fetch_array($sel2);

if ($faza[0]=="���������") { $idf=1; $idmoonfaze=1; }
if ($faza[0]=="��������  1-� ��������") { $idf=2; $idmoonfaze=2; }
if ($faza[0]=="��������  2-� ��������") { $idf=2; $idmoonfaze=3; }
if ($faza[0]=="����������") { $idf=3;  $idmoonfaze=4; }
if ($faza[0]=="��������� 3-� ��������") { $idf=4; $idmoonfaze=5; }
if ($faza[0]=="��������� 4-� ��������") { $idf=4; $idmoonfaze=6; }

//$sel3=mysql_query("SELECT * FROM faza WHERE id='$idf'");
//$myr3 = mysql_fetch_array($sel3);
//
//
// 
//
//
//
include ("form1.php"); 




?>








