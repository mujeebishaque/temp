<?php

	include 'links.php';
	include('../simple_html_dom.php');

function news ()  {
	$top_k = 10000;
	$html = file_get_contents('http://www.espn.com/espn/latestnews', NULL, NULL, 0, $top_k);
	$doc = str_get_html($html);
	$number = 1;

	foreach($doc->find('li') as $ul) {
	    foreach($ul->find('a') as $li)  
	     echo '<p class="links" style="color:black;">' . $number++ . ' - ' .$li->innertext . '</p>' . '<hr />';	
	}	
}

function upcoming_events()  {
	$top_k = 100000;
	$html = file_get_contents('http://espnevents.com/schedule/', NULL, NULL, 0, $top_k);
	$doc = str_get_html($html);
	$number = 1;
	foreach($doc->find('li') as $ul) {
	    foreach($ul->find('a') as $li)  {
	    	foreach($li->find('h3') as $h)  {
	        	echo '<p class="links" style="color:black;">' . $number++ . ' - ' .$h->innertext . '</p>' . '<hr />';	
	    	}
	    }  
	}
}
function armed_forces_competition()  {
	$top_k = 100000;
	$html = file_get_contents('http://espnevents.com/armed-forces-classic/', NULL, NULL, 0, $top_k);
	$doc = str_get_html($html);
	$number = 1;
	foreach($doc->find('li') as $ul) {
	    foreach($ul->find('a') as $li)  {
	    	foreach($li->find('h3') as $h)  {
	        	echo '<p class="links" style="color:black;">' . $number++ . ' - ' .$h->innertext . '</p>' . '<hr />';	
	    	}
	    }  
	}	
}
/*
	 require_once '../curl.php';		
	 $curl = new Curl;
	 $curl->follow_redirects = false;
	 $response = $curl->get('http://www.espn.com/espn/latestnews', $vars = array()); 
	 $regex = '#<li><a>(.*?)</a></li>#';
	 preg_match_all($regex, $response, $posts, PREG_SET_ORDER);
	 print_r($posts);
*/