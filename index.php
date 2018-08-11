<?php
error_reporting(E_ALL);
ini_set("display_errors",1);
include_once "classes/Page_Data.class.php";//页面变量放在了一个叫Page_Data.class的类里。
$pageData=new Page_Data();
$pageData->title="一个小游戏";
/**写这个程序是因为前不久和家人聚会喝酒，当地有喝酒划拳，输的人罚酒的喜欢。
 其中一种典型的划拳方式就是：两个人划拳，各自用一只手按一定规则出0到5个手指，代表0到5个数字，并喊出一个数字，代表双方手指数字之和。其中一人猜对而另一人没有，则猜对者获胜。其他情况则重来。
 得知这个喝酒划拳的习惯以后，我就想到可用一个简易的程序来表示，刚好最近看《PHP for Absolute beginner，2nd》这本书学到了HTML表单和PHP函数等等基本知识，进行了一些修改和运用，就得到了这个程序。
 这是一个很简陋的版本，以后会做一些修改，并且把酒席上划拳的所有类型玩法都做出来形成一个集合。*/
$pageData->content=include_once"views/navigation.php";
$navigationIsClicked=isset($_GET['page']);	
if($navigationIsClicked){
$pageData->content.=include_once"views/quiz.php";//调用了quiz.php这个文件，这是这个划拳游戏的主要代码所在。
}
$page=include_once "templates/page.php";
echo $page;
