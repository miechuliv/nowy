<?php
/**
 * vQmod XML Generator v3.0.0
 * 
 * Generate XML files for use with vQmod.
 * Built-in File Manager and Log Viewer.
 *
 * For further information please visit {@link http://www.vqmod.com/}
 * 
 * @author Simon Powers - UK Site Buidler Ltd <info@uksitebuilder.net> {@link http://uksb.github.com/vqgen/}
 * @copyright Copyright (c) 2013, UK Site Builder Ltd
 * @version $Id: functions.php,v 3.0.0 2013-01-28 10:00:00 sp Exp $
 * @license http://creativecommons.org/licenses/by-sa/3.0/ Creative Commons Attribution-ShareAlike 3.0 Unported License
 */

// Output Size in a nice format
function size_display($size){
	$sizetext = ($size>1023?' kb':' bytes');
	
	return ($size>1023?number_format(($size/1024),2,'.',''):$size) . $sizetext;
}

// Sort a multidimentional array
function multi_natcasesort($array, $index='file', $order='asc', $natsort=TRUE, $case_sensitive=FALSE){
	if(is_array($array) && count($array)>0){
			
		foreach(array_keys($array) as $key){
			$temp[$key]=$array[$key][$index];
		}
		
		if(!$natsort){ 
			($order=='asc')? asort($temp) : arsort($temp);
		}else{
			($case_sensitive)? natsort($temp) : natcasesort($temp);
			
			if($order!='asc'){ 
				$temp=array_reverse($temp,TRUE);
			}
		}
		   
		foreach(array_keys($temp) as $key){
			(is_numeric($key))? $sorted[]=$array[$key] : $sorted[$key]=$array[$key];
		}
		   
		return $sorted;
	}
	return $array;
}

function stripText($text)
{
	$text = ($text==''?time():$text);
	$text = strtolower(trim($text));
	$text = str_replace(' ', '-', str_replace(".", "-", $text));
	$clean = preg_replace("/[^A-Za-z0-9\-_]/", "", $text);
	
	return $clean;
}