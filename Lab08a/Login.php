<?php
/**
 * Created by PhpStorm.
 * User: 1813014
 * Date: 25/02/2019
 * Time: 11:52
 */

include("dbConnect.php");

if (empty($_POST("username")) || empty($_POST("password"))) {
    echo "Both field are required";
} else {

}