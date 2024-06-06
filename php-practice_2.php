<?php
// Q1 tic-tac問題
echo '1から100までのカウントを開始します' . "\n";
for ($i = 1; $i <= 100; $i++) {
    if ($i % 4 === 0 && $i % 5 === 0) {
      echo 'tic-tac' . "\n";
    } elseif ($i % 5 === 0) {
      echo 'tac' . "\n";
    } elseif ($i % 4 === 0) {
      echo 'tic' . "\n";
    } else {
      echo $i . "\n";
    }
}

// Q2 多次元連想配列
$PersonalInfos = [
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
echo $PersonalInfos[1]['name'] . 'の電話番号は' . $PersonalInfos[1]['tel'] . 'です。' . "\n";

///問題2
foreach ($PersonalInfos as $x => $MemberInfomation) {
  echo $x + 1 . '番目の' . $PersonalInfos[$x]['name'] . 'のメールアドレスは' . $PersonalInfos[$x]['mail'] . 'で、電話番号は' . $PersonalInfos[$x]['tel'] . 'です。' . "\n";
}

///問題3
$AgeList = [25, 30, 18];
foreach ($AgeList as $x => $MemberInfomation) {
    $PersonalInfos[$x]['age'] = $MemberInfomation;
}
var_dump($PersonalInfos);

// Q3 オブジェクト-1
class Student
{
    public $StudentId;
    public $StudentName;

    public function __construct($id, $name)
    {
        $this->StudentId = $id;
        $this->StudentName = $name;
    }

    public function attend($ProgrammingClass)
    {
        echo $this->StudentName . 'は' . $ProgrammingClass . 'の授業に参加しました。学籍番号：' . $this->studentId;
    }
}

$Yamada = new Student(120, '山田');
echo '学籍番号'. $Yamada->StudentId . '番の生徒は' . $Yamada->StudentName . 'です。';

// Q4 オブジェクト-2
$Yamada = new Student(120, '山田');
$Yamada->attend('PHP');

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
