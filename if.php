<?php
$score=51;
echo "我的成績" . $score;
echo "<br>";
echo "判斷為:";

if($score>=60){
    echo "及格";
}
else{
    echo"不及格";
}
echo "<br>";
if ($score>=90 && $score<=100) {
    $level="A";
}
if ($score>=80 && $score<=89) {
    $level="B";
}
if ($score>=70 && $score<=79) {
    $level="C";
}
if ($score>=60 && $score<=69) {
    $level="D";
}
if ($score>=0 && $score<=59) {
    $level="E";
}

echo "成績等級為:".$level;
echo "<br>";
switch ($level) {
    case 'A':
        echo "表現優良，值得肯定";
        break;
    case 'B':
        echo "表現不錯";
        break;
    case 'C':
        echo "加油";
        break;
    case 'D':
        echo "需再努力";
        break;
    default:
        echo"可憐阿";
        break;
}
