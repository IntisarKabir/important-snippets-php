<?php



include '../classes/MockUp.php';
$mu = new MockUp;

include 'data.php';
$items= $mu->extractAllElem($itemsets);
$support = $mu->sortedCount($items);


const K=2;

$u_items=[];
$filtered=[];
$pruned=[];
$level=1;
foreach ($support as $key => $value) {
  $u_items[]= $key;
  if ($value > K) {
    $filtered[$key]=$value;
    $filtered[$level][]=$key;
  }else{
    $pruned[$level][]=$key;
  }
}



echo "<pre>";
print_r($filtered);
$mu->peek($pruned);



include 'functions/permutations2.php';

//$list = ['a', 'b', 'c'];


$list = $filtered[$level];




$result = iterator_to_array(combinations($list, 2));
foreach ($result as $row) {
    print implode(" => ", $row) . "\n";
}


$mu->br();
$list_as_str='';
foreach ($list as $k => $v) {
  $list_as_str .= $v;
}


$mu->pr($list_as_str);

$mu->br();


include 'functions/combinatorics.php';

foreach(new Combinations($list_as_str, 2) as $substring):
    echo $substring, ' ';
endforeach;




















echo "</pre>";







 ?>
