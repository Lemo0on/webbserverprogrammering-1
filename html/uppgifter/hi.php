<?php
header("Content-type: text/html; charset=utf-8");
if (empty($_GET['name'])) {
	echo '<h1>hi</h1>';
} else {
	echo '<h1>hey ', filter_input(INPUT_GET, 'name',
		FILTER_SANITIZE_SPECIAL_CHARS), '</h1>';
}