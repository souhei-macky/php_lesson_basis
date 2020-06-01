<?php

//section5

//問題1
$name = '牧野';
echo '私の名前は「' . $name . '」です。'."\n";

//問題2
$num = 5 * 4 ;
echo $num . "\n";
echo $num / 2 . "\n";

//問題3 
date_default_timezone_set('Asia/Tokyo');
echo date('現在の時刻は、Y年m月d日 H時i分s秒です。');
echo "\n";

//問題4
$age = 21;
if ($age >= 20) {
    echo '成人です。';
} else {
    echo '未成年です。';
}
echo "\n";


//問題5
$device = 'windows';
if ($device === 'mac' || 'windows' ) {
    echo '使用OSは、' . $device . 'です。';
} else {
    echo 'どちらでもありません。';
}
echo "\n";


//問題6
$prefectures = ['東京都', '神奈川県', '埼玉県', '栃木県', '千葉県', '群馬県', '茨城県'];
echo $prefectures[3] . 'と' . $prefectures[4] . 'は関東地方の都道府県です。';
echo "\n";

//問題7
$cities = [
    '東京都'=>'新宿区',
    '神奈川県'=>'横浜市',
    '千葉県'=>'千葉市',
    '埼玉県'=>'さいたま市',
    '栃木県'=>'宇都宮市',
    '群馬県'=>'前橋市',
    '茨城県'=>'水戸市'
];
    
foreach ($cities as $city) {
    echo $city . "\n";
}

//問題8
foreach ($cities as $prefecture => $city) {
    if ($prefecture === '埼玉県') {
        echo $prefecture . 'の県庁所在地は、' . $city . 'です。';
    }
}
echo "\n";

//問題9
$cities += [
    '愛知県'=>'名古屋市',
    '沖縄県'=>'那覇市' 
];
    
foreach ($cities as $prefecture => $city) {
    if ($prefecture === '愛知県' || $prefecture === '沖縄県') {
        echo $prefecture . 'は関東地方ではありません。';
    } else {
        echo $prefecture . 'の県庁所在地は、' . $city . 'です。';
    }    
    echo "\n";
}

//問題10
function hello($name) 
{
    return $name . 'さん、こんにちは。' . "\n";
}

echo hello('金谷');
echo hello('安藤');

//問題11
function calcTaxInPrice($price) 
{
    return $price *= 1.08;
}

$price = 1000;
$taxInPrice = calcTaxInPrice($price);
echo $price . '円の商品の税込価格は' . $taxInPrice . '円です。' . "\n";

//問題12
function distinguishNum($num) 
{
    if ($num % 2 === 0) {
        return $num . 'は偶数です。' . "\n";
    } else {
        return $num . 'は奇数です。' . "\n";
    }
}

echo distinguishNum(11);
echo distinguishNum(24);

//問題13
function evaluateGrade($score) 
{
    switch ($score) {
        case 'A':
        case 'B':
            echo '合格です。';
            break;
        case 'C':
            echo '合格ですが追加課題があります。';
            break;
        case 'D':
            echo '不合格です。';
            break;
        default:
            echo '判定不明です。講師に問い合わせてください。';
            break;
    }
    echo "\n";
}

evaluateGrade('A');
evaluateGrade('E');


//section6

//Q1
echo '1から100までのFizzBuzzを実行します。' . "\n";

for ($i = 1; $i <= 100; $i++) {
    if ($i % 15 === 0) {
        echo 'FizzBuzz';
    } elseif ($i % 3 === 0) {
        echo 'Fizz';
    } elseif ($i % 5 === 0) {
        echo 'Buzz';
    } else {
        echo $i;
    }
    echo "\n";
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
echo $personalInfos[1]['name'] . 'の電話番号は' . $personalInfos[1]['tel'] . 'です。' . "\n";


//問題2
foreach ($personalInfos as $index => $person) {
    $index++;
    echo $index . '番目の' . $person['name'] . 'メールアドレスは' . $person['mail'] . 'で、電話番号は' . $person['tel'] . 'です。' . "\n";
}

//問題3
$ageList = [25, 30, 18];

foreach ($ageList as $index => $age) {
    $personalInfos[$index]['age'] = $age;
}

var_dump($personalInfos);
