<?php
// Classes for Gedcom Date/Calendar functionality.
//
// Definitions for the Gregorian calendar
//
// NOTE: Since different calendars start their days at different times, (civil
// midnight, solar midnight, sunset, sunrise, etc.), we convert on the basis of
// midday.
//
// webtrees: Web based Family History software
// Copyright (C) 2014 Greg Roach
//
// This program is free software; you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation; either version 2 of the License, or
// (at your option) any later version.
//
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with this program; if not, write to the Free Software
// Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA

class WT_Date_Gregorian extends WT_Date_Calendar {
	const CALENDAR_ESCAPE = '@#DGREGORIAN@';
	const CAL_START_JD    = 2299161; // 15 OCT 1582

	static function calendarName() {
		return /* I18N: The gregorian calendar */ WT_I18N::translate('Gregorian');
	}

	function IsLeapYear() {
		if ($this->y>0) {
			return $this->y%4==0 && $this->y%100!=0 || $this->y%400==0;
		} else {
			return $this->y%4==-1 && $this->y%100!=-1 || $this->y%400==-1;
		}
	}

	static function YMDtoJD($year, $month, $day) {
		if ($year<0) { // 0=1BC, -1=2BC, etc.
			++$year;
		}
		$a=(int)((14-$month)/12);
		$year=$year+4800-$a;
		$month=$month+12*$a-3;
		return $day+(int)((153*$month+2)/5)+365*$year+(int)($year/4)-(int)($year/100)+(int)($year/400)-32045;
	}

	static function JDtoYMD($jd) {
		$a=$jd+32044;
		$b=(int)((4*$a+3)/146097);
		$c=$a-(int)($b*146097/4);
		$d=(int)((4*$c+3)/1461);
		$e=$c-(int)((1461*$d)/4);
		$m=(int)((5*$e+2)/153);
		$day=$e-(int)((153*$m+2)/5)+1;
		$month=$m+3-12*(int)($m/10);
		$year=$b*100+$d-4800+(int)($m/10);
		if ($year<1) { // 0=1BC, -1=2BC, etc.
			--$year;
		}
		return array($year, $month, $day);
	}
}
