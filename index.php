<?php

//section5

//問題1
$name = '牧野'; 
echo "私の名前は「".$name."」です。\n";

//問題2
$num = 5 * 4 ;
echo $num."\n";
echo ($num / 2)."\n";

//問題3 
echo date('現在の時刻は、'.'Y年m月d日 H時i分s秒'."です。\n");

//問題4
$age = 21;
if ($age >= 20){
    echo "成人です。\n";
} else {
    echo "未成年です。\n";
}

//問題5
$device = 'mac';
if ($device === 'mac' || 'windows' ) {
    echo "使用OSは、".$device."です。\n";
} else {
    echo "どちらでもありません。\n";
}

//問題6
$Prefectures = ['東京都', '神奈川県', '埼玉県', '栃木県', '千葉県', '群馬県', '茨城県'];
echo $Prefectures[3]."と".$Prefectures[4]."は関東地方の都道府県です。\n";

//問題7
$cities = [
    '東京都'=>'新宿区',
    '神奈川県'=>'横浜市',
    '千葉県'=>'千葉市',
    '埼玉県'=>'さいたま市',
    '栃木県'=>'宇都宮市',
    '群馬県'=>'前橋市',
    '茨城県'=>'水戸市'];
    
foreach ($cities as $value) {
    echo $value."\n";
}

//問題8
$key1 = array_search('さいたま市', $cities);
$value1 = $cities[$key1];
echo $key1."の県庁所在地は、".$value1."です。\n";

//問題9
$cities += [
    '愛知県'=>'名古屋市',
    '沖縄県'=>'那覇市'];
    
foreach ($cities as $key => $value){
    if($key == '愛知県' || $key == '沖縄県') {
        echo $key."は関東地方ではありません。\n";
    } else {
        echo $key."の県庁所在地は、".$value."です。\n";
    }    
}

//問題10
function hello ($name){
    echo $name."さん、こんにちは。\n";
}

hello('金谷');
hello('安藤');

//問題11
function calcTaxInPrice($price){
    $taxInPrice = $price*1.08;
    return $price."円の商品の税込価格は".$taxInPrice."円です。\n";
}

$price = 1000;
echo calcTaxInPrice($price);


//問題12
function distinguishNum($num){
    if ($num % 2 == 0){
        return $num."は偶数です。\n";
    } else {
        return $num."は奇数です。\n";
    }
}

echo distinguishNum(20);

//問題13
function evaluateGrade($score){
    switch ($score){
        case 'A':
        case 'B':
            echo "合格です。\n";
            break;
            
        case 'C':
            echo "合格ですが追加課題があります。\n";
            break;
            
        case 'D':
            echo "不合格です。\n";
            break;
            
        default:
            echo "判定不明です。講師に問い合わせてください。\n";
            break;
    }
}

evaluateGrade('A');
evaluateGrade('E');


//section6

//Q1
echo "1から100までのFizzBuzzを実行します。\n";

for ($i = 1; $i <= 100; $i++) {
    if($i % 15 == 0) {
        echo "FizzBuzz\n";
    } elseif($i % 3 == 0) {
        echo "Fizz\n";
    } elseif($i % 5 == 0) {
        echo "Buzz\n";
    } else {
        echo "$i\n";
    }
}

//Q2 
$personalInfos = [
    [
        'name' => 'Aさん',
        'mail' => 'aaa@mail.com',
        'tel'  => '09011112222'
    ],
    [
        'name' => 'Bさん',
        'mail' => 'bbb@mail.com',
        'tel'  => '08033334444'
    ],
    [
        'name' => 'Cさん',
        'mail' => 'ccc@mail.com',
        'tel'  => '09055556666'
    ],
];

//問題1
echo $personalInfos[1]['name']."の電話番号は".$personalInfos[1]['tel']."です。\n";


//問題2
foreach ($personalInfos as $key => $value) {
    $key += 1;
    echo $key."番目の".$value['name']."メールアドレスは".$value['mail']."で、電話番号は".$value['tel']."です。\n";
}

//問題3
$ageList = [25, 30, 18];

// $personalInfos[0]['age'] = 25;
// $personalInfos[1]['age'] = 30;
// $personalInfos[2]['age'] = 28;

foreach ($ageList as $key => $value) {
    $personalInfos[$key]['age'] = $value;
}

var_dump($personalInfos);









