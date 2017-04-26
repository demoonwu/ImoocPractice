<?php
/**
 * Created by PhpStorm.
 * User: wangyun
 * Date: 16/8/9
 * Time: 下午2:26
 */
require_once("./page_class.php");
//每页显示的条数
  $page_size=20;
//总条目数
  $nums=1024;
//每次显示的页数
  $sub_pages=10;
//得到当前是第几页
  $pageCurrent=$_GET["p"];
  //if(!$pageCurrent) $pageCurrent=1;

  $subPages=new SubPages($page_size,$nums,$pageCurrent,$sub_pages,"test.php?p=",2);
