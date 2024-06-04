<?php
// Q1 変数と文字列
$name = '成清';
echo '私の名前は「' . $name . '」です。';

// Q2 四則演算
$num = 5 * 4;
echo "$num\n";
echo $num/2;

// Q3 日付操作
date_default_timezone_set('Asia/tokyo');

echo date('現在時刻は、Y年m月d日 H時i分s秒です。');

// Q4 条件分岐-1 if文
$device = 'windows';
if ($device === 'windows' || $device === 'mac') {
    echo '使用osは、' . $device . 'です。';
} else {
    echo 'どちらでもありません。';
}

// Q5 条件分岐-2 三項演算子
$age = 18;
echo ($age < 18) ? '未成年です。' : '成人です。';


// Q6 配列
$prefecture = [
    '東京都',
    '神奈川県',
    '栃木県',
    '千葉県',
    '茨城県',
    '埼玉県',
    '群馬県'
    ];
echo $prefecture[2] . 'と' . $prefecture[3] . 'は関東地方の都道府県です。';

// Q7 連想配列-1
$capitals = [
    '東京都' => '新宿区',
    '神奈川県' => '横浜市',
    '千葉県' => '千葉市',
    '埼玉県' => 'さいたま市',
    '栃木県' => '宇都宮市',
    '群馬県' => '前橋市',
    '茨城県' => '水戸市'
    ];
foreach ($capitals as $state => $city) {
    echo $city . "\n";
}

// Q8 連想配列-2
$SearchPrefecture = '埼玉県';
if (array_key_exists($SearchPrefecture, $capitals)) {
    echo $SearchPrefecture . 'の県庁所在地は、' . $capitals[$SearchPrefecture] . 'です。';
}

// Q9 連想配列-3
$capitals['愛知県'] = '名古屋市';
$capitals['大阪府'] = '大阪市';

while ($PrefectureName = current($capitals)) {
  if (in_array($PrefectureName, ['東京都', '神奈川県', '栃木県', '千葉県', '茨城県', '埼玉県', '群馬県'])) {
      echo $PrefectureName . 'の県庁所在地は、' . $capitals[$PrefectureName] . 'です。' . "\n";
  } else {
      echo $PrefectureName . 'は関東地方ではありません。' . "\n";
  }
  next($capitals);
}

// Q10 関数-1
function hello($GreetName)
{
    return $GreetName . "さん、こんにちは。\n";
}

echo hello('金谷');
echo hello('安藤');

// Q11 関数-2
$price = 1000;
function calcTaxPrice($price)
{
    $taxInPrice = $price * 1.1;
    return $taxInPrice;
}
$taxInPrice = calcTaxPrice($price);

echo $price . '円の商品の税込み価格は' . $taxInPrice . "円です。\n";

// Q12 関数とif文
function distinguishNum($Number)
{
    if ($Number % 2 === 0) {
        return $Number . "は偶数です。\n";
    } else {
        return $Number . "は奇数です。\n";
    }
}

echo distinguishNum(11);
echo distinguishNum(24);

// Q13 関数とswitch文
function evaluateGrade($Grade)
{
    switch ($Grade) {
        case 'A':
        case 'B':
            return "合格です。\n";
        case 'C':
            return "合格ですが追加課題があります。\n";
        case 'D':
            return "不合格です。\n";
        default:
            return "判定不明です。講師に問い合わせてください。\n";
    }
}

echo evaluateGrade('A');
echo evaluateGrade('');

?>