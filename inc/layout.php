<?php

	class Layout {
		public $title = '';

		// Main Navigation
		public $formNav = array(
			'Form step 1' => array(
				'url' => '#step1'
			),
			'Form step 2' => array(
				'url' => '#step2'
			),
			'Form step 3' => array(
				'url' => '#step3'
			),
			'Form step 4' => array(
				'url' => '#step4'
			),
			'Form step 5' => array(
				'url' => '#step4'
			)
		);

		public $navTitle = '';

		/*function __construct() {
			date_default_timezone_set('UTC'); 
			$this->navTitle = basename($_SERVER['PHP_SELF'], ".php");
		}
		*/

		// Layout listed Contructor
		public function start() {
			require('head.php');
			require('header.php');
			//require('formnav.php');
		}

		public function end() {
			require('footer.php');
		}

	} 

	$Layout = new Layout();
?>