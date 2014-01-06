<?php

class html {

	public static function dataGrid($array) {

		$str = self::htmlStartTable($array[0]);

		foreach($array as $key => $val) {
			$str .= self::htmlTR($val);
		}
	
		$str .= self::htmlStopTable($array[0]);
		return $str;
	}
	
	
	
	public static function htmlStartTable($array) {
		$keys = array_keys($array);

		$str = "<table style='border:1px solid grey'>\n<tr>\n";

		foreach ($keys as $val) {
			if (!is_numeric($val)) {
				$str .= "<th>$val</th>\n";
			}			
		}
		$str .= "</tr>";
		return $str;
	}
	
	public static function htmlStopTable() {
		$str = "</table>";
		return $str;	
	}
	
	public static function htmlTR($array) {
		
			$str = "<tr>";
			foreach($array as $key => $subval) {
				if (!is_numeric($key)) {
					$str .= "<td style='border:1px solid grey'>$subval</td>\n";
				}
			}
			$str .= "</tr>\n\n";
		return $str;
	
	}
	
	
	public static function secondsToRemainingTime($timestamp) {
	
		$display_max = 2;
		$display = 0;
		$seconde = 1;
		$minute = $seconde * 60;
		$hour = $minute * 60;
		$day = $hour * 24;
		$month = $day * 30;
		$week = $day * 7;
		$year = $day * 365.25;
		
		$str_an = " an ";
		$str_ans = " ans ";
		$str_mois = " mois ";
		$str_an = "an";
		$str_an = "an";
		$str_an = "an";
		$str_an = "an";
		$str_an = "an";
		$str_an = "an";
		
		
		
		$result = "";
	
		if ($timestamp / $year >= 1) {
			if ((int) ($timestamp / $year) == 1) {
				$result = (int) ($timestamp / $year) . $str_an;
			} else {
				$result = (int) ($timestamp / $year) . $str_ans;
			}
			$display++;
			if ($display == 2) {
				return $result;
			}
			$timestamp %= $year;
			
		}
		
		if ($timestamp / $month >= 1) {
			if ((int) ($timestamp / $month) == 1) {
				$result .= (int) ($timestamp / $month) . $str_mois;
			} else {
				$result .= (int) ($timestamp / $month) . $str_mois;
			}
			$display++;
			if ($display == 2) {
				return $result;
			}
			$timestamp %= $month;
		}
		
		if ($timestamp / $day >= 1) {
			if ((int) ($timestamp / $day) == 1) {
				$result .= (int) ($timestamp / $day) . " jour ";
			} else {
				$result .= (int) ($timestamp / $day) . " jours ";
			}
			
			$display++;
			if ($display == 2) {
				return $result;
			}
			$timestamp %= $day;
		}
		
		if ($timestamp / $hour >= 1) {
			if ((int) ($timestamp / $hour) == 1) {
				$result .= (int) ($timestamp / $hour) . " heure ";
			} else {
				$result .= (int) ($timestamp / $hour) . " heures ";
			}
			
			$display++;
			if ($display == 2) {
				return $result;
			}
			$timestamp %= $hour;
		}
		
		if ($timestamp / $minute >= 1) {
			if ((int) ($timestamp / $minute) == 1) {
				$result .= (int) ($timestamp / $minute) . " minute ";
			} else {
				$result .= (int) ($timestamp / $minute) . " minutes ";
			}
			
			$display++;
			if ($display == 2) {
				return $result;
			}
			$timestamp %= $minute;
		}
		
		if ($timestamp / $seconde >= 1) {
			if ((int) ($timestamp / $seconde) == 1) {
				$result .= (int) ($timestamp / $seconde) . " seconde ";
			} else {
				$result .= (int) ($timestamp / $seconde) . " secondes ";
			}
			
			$display++;
			if ($display == 2) {
				return $result;
			}
			$timestamp %= $seconde;
		}
		
		return $result;
	}
	
	
	public static function getIssuesBar($issuesCountArray, $width = 100, $height = 10) {
	
		$color['new'] = "#fcbdbd";
		$color['feedback'] = "#e3b7eb";
		$color['acknowledged'] = "#ffcd85";
		$color['confirmed'] = "#fff494";
		$color['assigned'] = "#c2dfff";
		$color['resolved'] = "#d2f5b0";
		$color['closed'] = "#c9ccc4";
		
		$all = $issuesCountArray['All'];
		$html = "<div style=\" width:".$width."px; height:". $height."px;\">";
			
			foreach($issuesCountArray as $k => $it) {
				if ($k != "All") {
					
					$thWith = (int)($it / $all * $width);
					$html .= "<div style=\" float:left;width:".$thWith."px; height:".$height."px; background-color: $color[$k] \"></div>";
					
				
				}

			}
		$html .= "<div style=\"clear:both\"></div></div>";
		return $html;
	}

}
