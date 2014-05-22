<?php

require('config.php');

$db = new mysqli(HOST, USER, PASS, DATABASE);

$db->query('SET NAMES utf8');