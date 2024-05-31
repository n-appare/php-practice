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
$prefecture = ['東京都', '神奈川県', '栃木県', '千葉県', '茨城県', '埼玉県', '群馬県'];
echo $prefecture[2] . 'と' . $prefecture[3] . 'は関東地方の都道府県です。';

// Q7 連想配列-1
$capitals = ['東京都' => '新宿区', '神奈川県' => '横浜市', '千葉県' => '千葉市', '埼玉県' => 'さいたま市', '栃木県' => '宇都宮市', '群馬県' => '前橋市', '茨城県' => '水戸市'];
echo $capitals['東京都'] . "\n";
echo $capitals['神奈川県'] . "\n";
echo $capitals['千葉県'] . "\n";
echo $capitals['埼玉県'] . "\n";
echo $capitals['栃木県'] . "\n";
echo $capitals['群馬県'] . "\n";
echo $capitals['茨城県'];

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
    echo $GreetName . "さん、こんにちは。\n";
}

hello('金谷');
hello('安藤');

// Q11 関数-2
function calcTaxPrice($price)
{
    $taxInPrice = $price * 1.1;
    echo $price . '円の商品の税込み価格は' . $taxInPrice . "円です。\n";
}

calcTaxPrice(1000);

// Q12 関数とif文
function distinguishNum($Number)
{
    if ($Number % 2 === 0) {
        echo $Number . "は偶数です。\n";
    } else {
        echo $Number . "は奇数です。\n";
    }
}

distinguishNum(11);
distinguishNum(24);

// Q13 関数とswitch文
function evaluateGrade($Grade)
{
    switch ($Grade) {
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
evaluateGrade('');

?>