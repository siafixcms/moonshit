<?php
date_default_timezone_set('Europe/Moscow'); // чтобы у хостера ошибки не сыпались

//require_once("config.php"); $select=mysql_query("SELECT * FROM geo WHERE city='$city'"); 
//$myrow = mysql_fetch_array($select);

 // Ошибочные определения
 define( 'ERR_UNDEF',	-1 );

 // Астрономические константы
 define( 'EPOCH',	2444238.5 );	// 1980 Январь 0.0


// Константы, определяющие очевидную орбиту Солнца
 define( 'ELONGE',	278.833540 );	// ecliptic longitude of the Sun at epoch 1980.0 //эклиптическая долгота Солнца с 1980.0
 define( 'ELONGP',	282.596403 );	// ecliptic longitude of the Sun at perigee
 define( 'ECCENT',	0.016718 );	    // eccentricity of Earth's orbit
 define( 'SUNSMAX',	1.495985e8 );	// semi-major axis of Earth's orbit, km
 define( 'SUNANGSIZ',	0.533128 );	// sun's angular size, degrees, at semi-major axis distance

 // Элементы орбиты Луны, эпоха 1980.0
 define( 'MMLONG',	64.975464 );	// moon's mean longitude at the epoch
 define( 'MMLONGP',	349.383063 );	// mean longitude of the perigee at the epoch
 define( 'MLNODE',	151.950429 );	// mean longitude of the node at the epoch
 define( 'MINC',	5.145396 );	// inclination of the Moon's orbit//склонение орбиты Луны
 define( 'MECC',	0.054900 );	// eccentricity of the Moon's orbit
 define( 'MANGSIZ',	0.5181 );	// moon's angular size at distance a from Earth
 define( 'MSMAX',	384401.0 );	// semi-major axis of Moon's orbit in km
 define( 'MPARALLAX',	0.9507 );	// parallax at distance a from Earth
 define( 'SYNMONTH',	29.53058868 );	// synodic month (new Moon to new Moon) ////лунный месяц(с новай Луны/до новой Луны)


//Переход от эклипческих координат к экваториальным
 function ebeta ($argbeta, $argliamba) {
$Ei=23.441884;
$sinBeta=(sin(torad($argbeta))*cos(torad($Ei)))+(cos(torad($argbeta))*sin(torad($Ei))*sin(torad($argliamba)));
$beta=todeg(asin($sinBeta));
 return ($beta);  }
 function eliamba ($ebeta, $eliamba) {
 $Ei=23.441884;
 $y=sin(torad($eliamba))*cos(torad($Ei)) - tan(torad($ebeta))*sin(torad($Ei));
 $x=cos(torad($eliamba));
 $alfa_is=todeg(atan($y/$x));
 if ($y < 0 && $x > 0) $eliamba=($alfa_is+360) / 15;
 if ($y > 0 && $x < 0) $eliamba=($alfa_is+180) / 15;
 if ($y > 0 && $x > 0) $eliamba=($alfa_is+360) / 15;
 if ($y < 0 && $x < 0) $eliamba=($alfa_is+180) / 15;
   return ($eliamba);  }
   
   function time24 ($arg) {
if ($arg > 24) {
do { $arg=$arg-24; }
while ($arg > 24 || $arg==24); }
if ($arg < 0) $arg=$arg+24; 
return ($arg); }

function degtime ($arg) {  
$arg1=$arg*60; //часы, градусы
$arg2=($arg1 - floor($arg1))*60; //минуты
$arg3=($arg2 - floor($arg2))*60; //секунды
$arg=floor($arg1).'°'.floor($arg2)."'".floor($arg3).'"';
return ($arg);  }

function degtimeg ($arg) {  
$arg1=$arg; //часы, градусы
$arg2=($arg1 - floor($arg1))*60; //минуты
$arg3=($arg2 - floor($arg2))*60; //секунды
$arg=floor($arg1).'°'.floor($arg2)."'".floor($arg3).'"';
return ($arg);  }

function degtime2 ($arg) {  
//if($arg < 0) $arg=$arg * (-);
$arg1=$arg; //часы, градусы
$arg2=($arg1 - floor($arg1))*60; //минуты
$arg3=($arg2 - floor($arg2))*60; //секунды
$arg=floor($arg1).':'.floor($arg2);
return ($arg);  }

function degtime3 ($arg) {  //численную дату переводим в часовую
//if($arg < 0) $arg=$arg * (-);
$arg1=$arg; //дни
$arg2=($arg1 - floor($arg1))*24; //часы
$arg3=($arg2 - floor($arg2))*60; //минуты
$arg=floor($arg1).дн.' '.floor($arg2).ч.' '.floor($arg3).м;
return ($arg);  }

function degtime4 ($arg) {  //часовую переводим в десятичную
//if($arg < 0) $arg=$arg * (-);
$arg1=$arg; //градусы
$arg2=($arg1 - floor($arg1))/60*100; //минуты
$arg3=$arg2 + floor($arg1); //десятичный результат
$arg=$arg3;
return ($arg);  }

 // Handy mathematical functions.
 function sgn ( $arg )		{ return (($arg < 0) ? -1 : ($arg > 0 ? 1 : 0)); } 	// extract sign
 function fixangle ( $arg )	{ return ($arg - 360.0 * (floor($arg / 360.0))); }	// fix angle
 function torad ( $arg )		{ return ($arg * (pi() / 180.0)); }			// deg->rad
 function todeg ( $arg )		{ return ($arg * (180.0 / pi())); }			// rad->deg
 function dsin ( $arg )		{ return (sin(torad($arg))); }				// sin from deg
 function dcos ( $arg )		{ return (cos(torad($arg))); }				// cos from deg


 // jtime - convert internal date and time to astronomical Julian
 // time (i.e. Julian date plus day fraction)
 function jtime ( $timestamp )  {
	$julian = ( $timestamp / 86400 ) + 2440587.5;	// (seconds / (seconds per day)) + julian date of epoch
	return $julian;
 }



 // jdaytosecs - convert Julian date to a UNIX epoch
 function jdaytosecs ( $jday=0 )  {
	$stamp = ( $jday - 2440587.5 ) * 86400;	// (juliandate - jdate of unix epoch) * (seconds per julian day)
	return $stamp;
 }



 // jyear - convert Julian date to year, month, day, which are
 // returned via integer pointers to integers
 //jyear - конвертированная дата к юлианскому, году, месяцу, дню, которые являются
 //возвращенный через целочисленные указатели на целых числа
 function jyear ( $td, &$yy, &$mm, &$dd )  {
	$td += 0.5;	// astronomical to civil.
	$z = floor( $td );
	$f = $td - $z;

	if ( $z < 2299161.0 )  {
		$a = $z;
	}
	else  {
		$alpha = floor( ($z - 1867216.25) / 36524.25 );
		$a = $z + 1 + $alpha - floor( $alpha / 4 );
	}

	$b = $a + 1524;
	$c = floor( ($b - 122.1) / 365.25 );
	$d = floor( 365.25 * $c );
	$e = floor( ($b - $d) / 30.6001 );

	$dd = $b - $d - floor( 30.6001 * $e ) + $f;
	$mm = $e < 14 ? $e - 1 : $e - 13;
	$yy = $mm > 2 ? $c - 4716 : $c - 4715;
 }



 //  meanphase  --  Calculates time of the mean new Moon for a given
 //                 base date. This argument K to this function is the
 //                 precomputed synodic month index, given by:
 //
 //                        K = (year - 1900) * 12.3685
 //
 //                 where year is expressed as a year and fractional year.  
 
 //meanphase 	-   Вычисляет время новой Луны для конкретной даты
 //					основная дата. Этот параметр K к этой функции
 //					предварительно вычисленный synodic индекс месяца, данный:
 //
 //							K = (год - 1900) * 12.3685
 //
 //					где год выражен как год и дробный год.
 
 function meanphase ( $sdate, $k )  {

	// Time in Julian centuries from 1900 January 0.5
	$t = ( $sdate - 2415020.0 ) / 36525;
	$t2 = $t * $t;	// Square for frequent use 
	$t3 = $t2 * $t;	// Cube for frequent use 

	$nt1 = 2415020.75933 + SYNMONTH * $k
		+ 0.0001178 * $t2
		- 0.000000155 * $t3
		+ 0.00033 * dsin( 166.56 + 132.87 * $t - 0.009173 * $t2 );

	return ( $nt1 );
 }



 // truephase - given a K value used to determine the mean phase of the
 // new moon, and a phase selector (0.0, 0.25, 0.5, 0.75),
 // obtain the true, corrected phase time.

 //truephase - данный коэффициент теплопроводности определяет фазу
 //новая луна, и селектор фазы (0.0, 0.25, 0.5, 0.75),
 //получите истину, исправленное время фазы.
 
 function truephase ( $k, $phase )  {
	$apcor = 0;

	$k += $phase;			// add phase to new moon time
	$t = $k / 1236.85;		// time in Julian centuries from 1900 January 0.5
	$t2 = $t * $t;			// square for frequent use
	$t3 = $t2 * $t;			// cube for frequent use

	// mean time of phase
	$pt = 2415020.75933
		+ SYNMONTH * $k
		+ 0.0001178 * $t2
		- 0.000000155 * $t3
		+ 0.00033 * dsin( 166.56 + 132.87 * $t - 0.009173 * $t2 );

	// Sun's mean anomaly
	$m = 359.2242
		+ 29.10535608 * $k
		- 0.0000333 * $t2
		- 0.00000347 * $t3;

	// Moon's mean anomaly
	$mprime = 306.0253
		+ 385.81691806 * $k
		+ 0.0107306 * $t2
		+ 0.00001236 * $t3;

	// Moon's argument of latitude
	$f = 21.2964
		+ 390.67050646 * $k
		- 0.0016528 * $t2
		- 0.00000239 * $t3;

	if ( ($phase < 0.01) || (abs($phase - 0.5) < 0.01) )  {
		// Corrections for New and Full Moon.
		$pt += ( 0.1734 - 0.000393 * $t ) * dsin( $m )
			+ 0.0021 * dsin( 2 * $m  )
			- 0.4068 * dsin( $mprime )
			+ 0.0161 * dsin( 2 * $mprime )
			- 0.0004 * dsin( 3 * $mprime )
			+ 0.0104 * dsin( 2 * $f )
			- 0.0051 * dsin( $m + $mprime )
			- 0.0074 * dsin( $m - $mprime )
			+ 0.0004 * dsin( 2 * $f + $m )
			- 0.0004 * dsin( 2 * $f - $m )
			- 0.0006 * dsin( 2 * $f + $mprime )
			+ 0.0010 * dsin( 2 * $f - $mprime )
			+ 0.0005 * dsin( $m + 2 * $mprime );
		$apcor = 1;
	}
	elseif ( (abs($phase - 0.25) < 0.01 || (abs($phase - 0.75) < 0.01)) )  {
		$pt += ( 0.1721 - 0.0004 * $t ) * dsin( $m )
			+ 0.0021 * dsin( 2 * $m )
			- 0.6280 * dsin( $mprime )
			+ 0.0089 * dsin( 2 * $mprime )
			- 0.0004 * dsin( 3 * $mprime )
			+ 0.0079 * dsin( 2 * $f )
			- 0.0119 * dsin( $m + $mprime )
			- 0.0047 * dsin( $m - $mprime )
			+ 0.0003 * dsin( 2 * $f + $m )
			- 0.0004 * dsin( 2 * $f - $m )
			- 0.0006 * dsin( 2 * $f + $mprime )
			+ 0.0021 * dsin( 2 * $f - $mprime )
			+ 0.0003 * dsin( $m + 2 * $mprime )
			+ 0.0004 * dsin( $m - 2 * $mprime )
			- 0.0003 * dsin( 2 * $m + $mprime );
		if ( $phase < 0.5 )  {
			// First quarter correction.
			$pt += 0.0028 - 0.0004 * dcos( $m ) + 0.0003 * dcos( $mprime );
		}
		else {
			// Last quarter correction.
			$pt += -0.0028 + 0.0004 * dcos( $m ) - 0.0003 * dcos( $mprime );
		}
		$apcor = 1;
	}
	if ( !$apcor )  {
		print "truephase() called with invalid phase selector ($phase).\n";
		exit( ERR_UNDEF );
	}
	return ( $pt );
 }



 // phasehunt - find time of phases of the moon which surround the current
 // date.  Five phases are found, starting and ending with the
 // new moons which bound the current lunation
 
 //phasehunt - находят время фаз луны, заданной
 //даты. Пять фаз найдены, начальные и конечные с
 //новые луны, которые связывали текущую лунацию
 
   //function phasehunt ( $time=-1 )  {
	function phasehunt ( $time=0 )  {
	
	if ( empty($time) || $time == -1 )  {
		$time = time();
	}
	$sdate = jtime( $time );
	$adate = $sdate - 45; 
	jyear( $adate, $yy, $mm, $dd );
	$k1 = floor( ($yy + (($mm - 1) * (1.0 / 12.0)) - 1900) * 12.3685 );
	$adate = $nt1 = meanphase( $adate,  $k1 );

	while (1)  {
		$adate += SYNMONTH;
		$k2 = $k1 + 1;
		$nt2 = meanphase( $adate, $k2 );
		if (($nt1 <= $sdate) && ($nt2 > $sdate))  {
			break;
		}
		$nt1 = $nt2;
		$k1 = $k2;
        }                 

	return array (	jdaytosecs( truephase($k1, 0.0) ),
			jdaytosecs( truephase($k1, 0.25) ),
			jdaytosecs( truephase($k1, 0.5) ), 
			jdaytosecs( truephase($k1, 0.75) ),
			jdaytosecs( truephase($k2, 0.0) )
	);
 }



 // phaselist() - Find time of phases of the moon between two dates.
 // Times (in & out) are seconds_since_1970

 //phaselist () - Находят время фаз луны между двумя датами.
 //Время(входа & выхода) в секундах начиная с seconds_since_1970
 
 function phaselist ( $sdate, $edate )  {
	if ( empty($sdate) || empty($edate) )  {
		return array();
	}

	$sdate = jtime( $sdate );
	$edate = jtime( $edate );

	$phases = array();
	$d = $k = $yy = $mm = 0;

	jyear( $sdate, $yy, $mm, $d );
	$k = floor(($yy + (($mm - 1) * (1.0 / 12.0)) - 1900) * 12.3685) - 2;

	while (1)  {
		++$k;
		foreach ( array(0.0, 0.25, 0.5, 0.75) as $phase )  {
			$d = truephase( $k, $phase );
			if ( $d >= $edate )  {
				return $phases;
			}
			if ( $d >= $sdate )  {
				if ( empty($phases) )  {
					array_push( $phases, floor(4 * $phase) );
				}
				array_push( $phases, jdaytosecs($d) );
			}
		}
	}  // End while(1)
 }



 // kepler() - solve the equation of Kepler
 //kepler () - решаем уравнение Kepler-а
 
 function kepler ( $m, $ecc ) {
	$EPSILON = 1e-6;
	$m = torad( $m );
	$e = $m;
	do  {
		$delta = $e - $ecc * sin( $e ) - $m;
		$e -= $delta / ( 1 - $ecc * cos($e) );
	} while ( abs($delta) > $EPSILON );
	return ( $e );
 }



 // phase() - calculate phase of moon as a fraction:
 //
 // The argument is the time for which the phase is requested,
 // expressed as a Julian date and fraction.  Returns the terminator
 // phase angle as a percentage of a full circle (i.e., 0 to 1),
 // and stores into pointer arguments the illuminated fraction of
 // the Moon's disc, the Moon's age in days and fraction, the
 // distance of the Moon from the centre of the Earth, and the
 // angular diameter subtended by the Moon as seen by an observer
 // at the centre of the Earth.
 
 // phase() - вычисляет фазу луны как фракция:
 //
 //Параметр - время, в течение которого фазу требуют,
 //выраженный как Юлианская дата и фракция. Возвращает терминатор
 //угол фазы как процент от полного круга (то есть, от 0 до 1),
 //и память в параметры указателя освещенная фракция
 //диск Луны, возраст Луны в днях и фракции,
 //расстояние Луны от центра Земли, и
 //угловой диаметр подимел тенденцию Луной как замечено наблюдателем
 //в центре Земли.
 
 
 function phase ( $time=0, $Fi, $Dol, $gm )  {
	if ( empty($time) || $time == 0 )  {
		$time = time();
	}
	$pdate = jtime( $time );

	$pphase;	// illuminated fraction
	$mage;		// age of moon in days
	$dist;		// distance in kilometres
	$angdia;	// angular diameter in degrees
	$sudist;	// distance to Sun
	$suangdia;	// sun's angular diameter

//	my ($Day, $N, $M, $Ec, $Lambdasun, $ml, $MM, $MN, $Ev, $Ae, $A3, $MmP,
//	   $mEc, $A4, $lP, $V, $lPP, $NP, $y, $x, $Lambdamoon, $BetaM,
//	   $MoonAge, $MoonPhase,
//	   $MoonDist, $MoonDFrac, $MoonAng, $MoonPar,
//	   $F, $SunDist, $SunAng,
//	   $mpfrac);

	// Calculation of the Sun's position.
	$Day = $pdate - EPOCH;						// date within epoch //дата с начала юникс 1970 года
	$N = fixangle( (360 / 365.2422) * $Day );			// mean anomaly of the Sun //рассчитываем аномалию солнца
	$M = fixangle( $N + ELONGE - ELONGP );				// convert from perigee co-ordinates //конвертируем для координат перигея
									//   to epoch 1980.0
	$Ec = kepler( $M, ECCENT );					// solve equation of Kepler
	$Ec = sqrt( (1 + ECCENT) / (1 - ECCENT) ) * tan( $Ec / 2 );
	$Ec = 2 * todeg( atan($Ec) );					// true anomaly
	$Lambdasun = fixangle( $Ec + ELONGP );				// Sun's geocentric ecliptic longitude
	# Orbital distance factor.
	$F = ( (1 + ECCENT * cos(torad($Ec))) / (1 - ECCENT * ECCENT) );
	$SunDist = SUNSMAX / $F;					// distance to Sun in km
	$SunAng = $F * SUNANGSIZ;					// Sun's angular size in degrees


	// Calculation of the Moon's position.
	//Вычисление позиции Луны.

	// Moon's mean longitude. //находим среднюю долготу луны
	$ml = fixangle( 13.1763966 * $Day + MMLONG );

	// Moon's mean anomaly. //находим среднюю аномалию луны
	$MM = fixangle( $ml - 0.1114041 * $Day - MMLONGP );

	// Moon's ascending node mean longitude. //находим среднюю долготу восходящего узла MN
	$MN = fixangle( MLNODE - 0.0529539 * $Day );

	// Evection. //Эвекция
	$Ev = 1.2739 * sin( torad(2 * ($ml - $Lambdasun) - $MM) );

	// Annual equation. // годичное уравнение
	$Ae = 0.1858 * sin( torad($M) );

	// Correction term. // третья поправка
	$A3 = 0.37 * sin( torad($M) );

	// Corrected anomaly. //Исправленная средняя аномалия луны
	$MmP = $MM + $Ev - $Ae - $A3;

	// Correction for the equation of the centre. //поправка за уравнение центра
	$mEc = 6.2886 * sin( torad($MmP) );

	// Another correction term. //еще одна поправка
	$A4 = 0.214 * sin( torad(2 * $MmP) );

	// Corrected longitude.////Исправленная долгота.
	$lP = $ml + $Ev + $mEc - $Ae + $A4;

	// Variation. //Изменение
	$V = 0.6583 * sin( torad(2 * ($lP - $Lambdasun)) );

	// True longitude.//Истинная долгота.
	$lPP = $lP + $V;

	// Corrected longitude of the node.// Исправленная долгота восходящего узла
	$NP = $MN - 0.16 * sin( torad($M) );

	// Y inclination coordinate.	////Y координата склонности.
	$y = sin( torad($lPP - $NP) ) * cos( torad(MINC) );

	// X inclination coordinate. //Х координаты сконности
	$x = cos(torad($lPP - $NP));

	//Эклиптическая долгота 
	$Lambdamoon = todeg( atan2($y, $x) );
	$Lambdamoon += $NP;

	//Эклиптическая широта 
	$BetaM = todeg( asin(sin(torad($lPP - $NP)) * sin(torad(MINC))) );

	//Переводим в экваториальные координаты
	$alfa1=eliamba($BetaM,$Lambdamoon);
	$beta1=ebeta($BetaM,$Lambdamoon);
	
	//Находим координаты Луны через 12 часов
	$betaSm=0.05*cos(torad($lPP-$NP));
	$liambaSm=0.55+0.06*cos(torad($MmP));
	$BetaM2=$BetaM+$betaSm*12;
	$Lambdamoon2=$Lambdamoon+$liambaSm*12;
	$beta2 = ebeta ($BetaM2,$Lambdamoon2); 
	$alfa2 = eliamba($BetaM2,$Lambdamoon2);
	
	//Вычисление поправки за паралакс
	$Fi=degtime4($Fi); //геоцентрическая широта наблюдателя
	$Dol=degtime4($Dol);//геоцентрическая долгота наблюдателя
	$h=0; //высота над уровнем моря
	$u=todeg(atan(0.996647*tan(torad($Fi))));
	$PsinFi=(0.996647*sin(torad($u)))+(($h/6378140)*sin(torad($Fi)));
	$PcosFi=(cos(torad($u)))+(($h/6378140)*cos(torad($Fi)));
	
	$betaI=($beta1+$beta2) / 2;
	$Hgeo=todeg(acos(-tan(torad($Fi))*tan(torad($betaI))));
	//расстояние до луны от центра земли
	$MoonDist = ( MSMAX * (1 - MECC * MECC)) / (1 + MECC * cos(torad($MmP + $mEc)) );
	// Calculate Moon's angular diameter.
	//Вычисляем угловой диаметр Луны.
	$MoonDFrac = $MoonDist / MSMAX;
	$MoonAng = MANGSIZ / $MoonDFrac; //
	// Calculate Moon's parallax.
	//Вычисление параллакса Луны.
	$MoonPar = MPARALLAX / $MoonDFrac; //горизонтальный паралакс луны
	//Возраст Луны в степенях
	$MoonAge = $lPP - $Lambdasun;
	$mage = SYNMONTH * ( fixangle($MoonAge) / 360.0 );
	//
	$r=60.268322*$MoonDFrac; //r - растояние от небесного тела до центра земли
	//$r=1/sin(torad($MoonPar));
	//Паралакс
	$Par1=todeg(atan(($PcosFi*sin(torad($Hgeo))) / ($r*cos(torad($beta1))-$PcosFi*cos(torad($Hgeo))))) / 15;
	$Par2=todeg(atan(($PcosFi*sin(torad($Hgeo))) / ($r*cos(torad($beta2))-$PcosFi*cos(torad($Hgeo))))) / 15;
	$alfaIs1=$alfa1-$Par1;
	$alfaIs2=$alfa2-$Par2;
	$His1=$Hgeo+$Par1;
	$His2=$Hgeo+$Par2;
	$betaIs1=todeg(atan(cos(torad($His1)) * ($r*sin(torad($beta1))-$PsinFi) / ($r*cos(torad($beta1))*cos(torad($Hgeo))-$PcosFi)));
	$betaIs2=todeg(atan(cos(torad($His2)) * ($r*sin(torad($beta2))-$PsinFi) / ($r*cos(torad($beta2))*cos(torad($Hgeo))-$PcosFi)));
	
	
	//восход и заход местного звездного времени LST
	$Hv1=(1/15)*(todeg(acos(-tan(torad($Fi))*tan(torad($betaIs1)))));
	$Hv2=(1/15)*(todeg(acos(-tan(torad($Fi))*tan(torad($betaIs2)))));
	$LSTr1=time24(24-$Hv1+$alfaIs1); 
	$LSTr2=time24(24-$Hv2+$alfaIs2); 
	$LSTs1=time24($alfaIs1+$Hv1); 
	$LSTs2=time24($alfaIs2+$Hv2); 
	//находим наилучшее приблежение
	$TR=(12.03*$LSTr1) / (12.03+$LSTr1-$LSTr2);
	$TS=(12.03*$LSTs1) / (12.03+$LSTs1-$LSTs2);
	//
	$betaSr=($betaIs1+$betaIs2) / 2;
	$Diam=0.5181 / $MoonDist;
	$Fir=todeg(acos(sin(torad($Fi))/cos(torad($betaSr))));
	$R=0.567;
	$Xr=$R+($Diam/2);
	$Yr=todeg(asin(sin(torad($Xr))/sin(torad($Fir))));
	$Tp=240*$Yr/cos(torad($betaSr));
	$Tp=$Tp / 3600; //переводим в доли часа
	$Tri=time24($TR-$Tp);
	$Tsi=time24($TS+$Tp);
	//преход от местного звездного времени LST к гринвическому звездному времени GST
	$Doli=$Dol / 15;
	//$Doli=0;
	//$gm=4;
	$GSTr=time24($Tri-$Doli); //если долгота восточная вычитаем, если западная прибавляем
	$GSTs=time24($Tsi-$Doli);
	
	$TR=time24($TR-$Doli);
	$TS=time24($TS-$Doli);
	
	$To=time24((0.0657098 * $Day) - 17.411472); 
	$GMTr=$GMTreal=time24((($GSTr-$To)*0.997270)+$gm); 
	$GMTs=time24((($GSTs-$To)*0.997270)+$gm);
	
	
	
	$TR=time24((($TR-$To)*0.997270)+$gm); 
	$TS=time24((($TS-$To)*0.997270)+$gm);
	$TR=degtime2($TR);      //результат без поправак
	$TS=degtime2($TS);
	$GMTr=degtime2($GMTr);  //результат с поправками
	$GMTs=degtime2($GMTs);
	
	//Расчитываем транзит луны через знаки зодиака через эклиптич. долготу луны
	$moonlam=$Lambdamoon;if($Lambdamoon<0){$moonlam=360+$Lambdamoon;}
	if($moonlam > 360) $moonlam-=360;
	$moonlambada=$moonlam;
	$cikl=30;
	if (($cikl > $moonlam) || ($cikl==$moonlam))  { $zstart=$moonlam; $znak=1; }
	else { $znak=1;
	do { $moonlam-=$cikl;
		 $znak+=1; }
		 while($cikl < $moonlam);
		 $zstart=($znak*$cikl)-$moonlambada; }
		 $zstart=degtimeg($zstart);
	//Расчитываем транзит луны через 28 лунных домов через эклиптич. долготу луны	
	$moonlam28=$Lambdamoon;
	if($moonlam28 > 360) $moonlam28-=360;
	$cikl28=360/28;
	if (($cikl28 > $moonlam28) || ($cikl28==$moonlam28))  { $zs28=$moonlam28; $znak28=1; }
	else { $znak28=1;
	do { $moonlam28-=$cikl28;
		 $znak28+=1; }
		 while($cikl28 < $moonlam28);
		 $zs28=($znak28*$cikl28)-$moonlambada; }	 
		 
		 
	
	
	// Phase of the Moon.
	//Фаза луны
	$MoonPhase = (1 - cos(torad($MoonAge))) / 2;
	$pphase = $MoonPhase;
	$dist = $MoonDist;
	$angdia = $MoonAng;
	$sudist = $SunDist;
	$suangdia = $SunAng;
	$mpfrac = fixangle($MoonAge) / 360.0;
	

	return array ( $mpfrac, $pphase, $mage, $dist, $angdia, $sudist, $suangdia, $GMTr, $GMTs, $GMTreal, $znak, $zstart, $znak28, $Fi, $Dol);
 }




?>
