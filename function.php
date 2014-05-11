<?php
/*
	This function will fetch the alexa rank of a domain and return it as a formatted integer
*/
	function AlexaRank($domain) {
		error_reporting(0);
		$get_alexa_rank = simplexml_load_file("http://data.alexa.com/data?cli=10&dat=s&url=" . $domain);
		$exe_alexa_rank = $get_alexa_rank->SD[1]->POPULARITY["TEXT"];
		$conv_alexa_rank = intval($exe_alexa_rank);
		$form_alexa_rank = number_format($conv_alexa_rank);
		if ($form_alexa_rank >= 1) {
			return $form_alexa_rank;
		} else {
			$form_alexa_rank = "N/A";
			return $form_alexa_rank;
		}
	}

	echo AlexaRank("madsobel.com");
?>
