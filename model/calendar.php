<?php
include 'class/Calendar.php';
include "class/data.php";
include "class/Data_for_days.php";

$data1 = new Dbdata();
$data1-> show_mount();

$dfd = new Data_for_days();
$dfd ->setDays($data1);

$calendar = new Calendar();
echo $calendar->show($dfd->day_event);


echo '<pre>';
print_r($dfd);
echo '</pre>';

echo '<pre>';
print_r($data1);
echo '</pre>';