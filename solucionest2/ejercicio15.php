<?php

 $nom1 = $_GET['nombres1'];
 $nom2 = $_GET['nombres2'];
 $nom3 = $_GET['nombres3'];

 $array = [
     $nom1,
     $nom2,
     $nom3
 ];
 foreach ($array as $op) {
 echo ' ' . $op;
 }