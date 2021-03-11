<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

return [
    'database' => [
        'name' => 'mytodo',
        'username' => 'admin',
        'password' => '123456Zx',
        'connection' => 'mysql:host=127.0.0.1',
        'option' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ],
   'link'=>'http://localhost:9070/',
    'text'=>'Check out this Meetup with SoCal AngularJS! ',

    'datasql'=>"-- mytodo.Users definition

CREATE TABLE `Users` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `LastName` varchar(255) NOT NULL,
  `FirstName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `birthday` varchar(100) NOT NULL,
  `ReportSubject` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `phone_num` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Company` varchar(100) DEFAULT NULL,
  `Position` varchar(100) DEFAULT NULL,
  `AboutMe` varchar(150) DEFAULT NULL,
  `avatar` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '/public/img/rick-sanchez.png',
  PRIMARY KEY (`ID`),
  UNIQUE KEY `Email` (`Email`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;"

];
