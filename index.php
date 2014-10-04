<pre>
<?php
//前面有兩個斜線為註解，不會輸出或編譯
//最上面的「<pre>」是為了直接顯示換行，可不使用HTML規範的「 <br/> 」，不然範例文件會很複雜。
//php程式需要包在< ? php ? > 裡，記得 < ? 之間不能有空白如此範例。
?>
<?php 
//輸出網頁文字只要前面為 echo 後面接「 "" 」或「 '' 」的文字即可
//最後一定要「 ; 」 結尾
echo 'Hello World';
?>

<?PHP
//數字相加
echo 1+1;
?>

<?PHP
//數字相加，也可以加文字的數字，但不建議使用
echo 1+'1'+1;
?>

<?PHP
echo 1+"1"+1;
?>

<?PHP
//錯誤的文字相加
echo "Hello"+" "+"World";
?>

<?PHP
//文字相加的方式，使用「 . 」
echo "Hello"." "."World";
?>

<?PHP
//PHP 的陣列
//變數為「$」開頭，指定為陣列可以直接給「 [] 」 或 「 array() 」

$var = [];
//$var = array();
$var[]="aaa";
$var[]="bbb";
print_r($var);

//如果變數後不加 「 [] 」給值的話，會換掉原本的變數型態
$var = [];
$var[]="aaa";
$var[]="bbb";
$var="ccc";
print_r($var);

//為了換行可以這樣加換行符號，因為最開頭使用了「 <pre> 」，不然HTML的換行符號為 「<br/>」
//如果使用 「 '' 」則沒有效果，會當文字輸出。
echo "\r\n";
echo '\r\n';
echo "\r\n";

//相同的效果，這代表陣列0給的值是 aaa
$var = array(0=>"aaa",1=>"bbb");
print_r($var);


//如何取出值
echo $var[0];
echo "\r\n";

//陣列索引可以不是數字
$var = array("john"=>"100","justin"=>"60");
print_r($var);
//取出john
echo $var["john"];
?>