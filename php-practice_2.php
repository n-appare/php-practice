<?php
// Q1 tic-tac問題
echo '1から100までのカウントを開始します' . "\n";
for ($i = 1; $i <= 100; $i++) {
    if ($i % 4 === 0 && $i % 5 === 0) {
      echo 'tic-tac' . "\n";
    } else if ($i % 5 === 0) {
      echo 'tac' . "\n";
    } else if ($i % 4 === 0) {
      echo 'tic' . "\n";
    } else {
      echo $i . "\n";
    }
}

// Q2 多次元連想配列
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
///問題1
echo $personalInfos[1]['name'] . 'の電話番号は' . $personalInfos[1]['tel'] . 'です。' . "\n";

///問題2
foreach ($personalInfos as $memberOrder => $memberInfomation) {
  echo $memberOrder + 1 . '番目の' . $personalInfos[$memberOrder]['name'] . 'のメールアドレスは' . $personalInfos[$memberOrder]['mail'] . 'で、電話番号は' . $personalInfos[$memberOrder]['tel'] . 'です。' . "\n";
}

///問題3
$ageList = [25, 30, 18];
foreach ($ageList as $memberOrder => $memberInfomation) {
    $personalInfos[$memberOrder]['age'] = $memberInfomation;
}
var_dump($personalInfos);

// Q3 オブジェクト-1
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($programmingClass)
    {
        echo $this->studentName . 'は' . $programmingClass . 'の授業に参加しました。学籍番号：' . $this->studentId;
    }
}

$yamada = new Student(120, '山田');
echo '学籍番号'. $yamada->studentId . '番の生徒は' . $yamada->studentName . 'です。';

// Q4 オブジェクト-2
$yamada = new Student(120, '山田');
$yamada->attend('PHP');

// Q5 定義済みクラス
///問題1
$OneMonthAgo = new DateTime('now', new DateTimeZone('Asia/Tokyo'));
$OneMonthAgo->modify('-1 months');
echo $OneMonthAgo->format('Y-m-d');

///問題2
$Today = new DateTime('now', new DateTimeZone('Asia/Tokyo'));
$PastDay = new DateTime('1992-4-25');
$NumberOfDays = $PastDay->diff($Today);
echo 'あの日から' . $NumberOfDays->format('%a') . '日経過しました。';
?>