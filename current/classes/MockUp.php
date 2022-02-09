<?php






/**
 * MockUp
 */
class MockUp {
  function __construct(){
  }
  public function sortedCount($items,$print=true, $desc=true){
    $support = array_count_values($items);
    if ($desc)  arsort($support);
    if ($print) print_r($support);
    return $support;
  }
  public function extractAllElem($arrOfArr){
    $items=array();
    foreach ($arrOfArr as $itemset) {
    foreach ($itemset as $item){
      $items[]=$item;
    }
    }
    return $items;
  }
  public function peek($v){
    echo "</pre>";
    print_r($v);
    echo "<pre>";
  }
  public function br($n=1){
    for ($i=0; $i < $n; $i++) {
      echo "<br>";
    }
  }
  public function pre_pr($v){
    echo "<pre>";
    print_r($v);
    echo "</pre>";
  }

  public function pr($v){
    print_r($v);
  }
}










 ?>
