<?php

  header('Content-Type:application/json; charset=utf-8');
  // $id=$_GET['id'];
  // $sql="SELECT * FROM sliderimg where id='$id'";
  $sql="SELECT * FROM sliderimg";
  mysql_connect('localhost','root', '');
  mysql_select_db('dd');
  $res=mysql_query($sql);
  $pic = array();
  $index = 0;
  while($row = mysql_fetch_assoc($res)) {
    // $pic = $row;
  	$pic[$index] = $row;
  	$index++;
  }
  echo json_encode($pic);

  // print_r($pic);

// [["images\/banner1.jpg","#27cacf"],["images\/banner2.jpg","#FFBACD"],["images\/banner3.jpg","#200D3B"],["images\/banner4.jpg","#5ED2C7"]]

// include './index1.html';



?>