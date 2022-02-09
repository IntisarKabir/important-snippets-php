<?php




include 'traits/laravel.php';

/**
 *
 */
class Laravel {
  function __construct(){
  }
  public function add_foreign_key($fk_,$f_tbl,$cascade=false, $f_id='id'   ){
    $commands=array();
    //$commands[]= "";
    $str= "\$table->foreign('$fk_')->references('$f_id')->on('$f_tbl')";
    $append =  "->onDelete('cascade');";
    if ($cascade) $str .= $append;
    $commands[]=  $str ;
    $commands[]= "\$table->dropForeign('$fk_');";
    return $commands;
  }
  private static $methods = [
       'upper' => 'strtoupper',
       'lower' => 'strtolower',
       'nlc' => '$this->NLC'
   ];
  public function __call(string $method, array $parameters){
        if (!array_key_exists($method, self::$methods)) {
            throw new Exception('The ' . $method . ' is not supported.');
        }
        return call_user_func_array(self::$methods[$method], $parameters);
    }
  public function install_composer_package($pn,$pd, $service_provider, $alias ){
    return ["composer require $pn" ,
    "append to `providers` array: $pd\\$service_provider::class",
  "append to `aliases` array: '$alias' => $pd\Facades\\$alias::class"  ];
  }
  public function NLC($z){
    return "laravel new $z<br>";
  }
  public function serve(){
    return "php artisan serve";
  }
  public function mk_migr($t){
    return "php artisan make:migration create_" . $t . "s_table";
  }
  public static function seed_all(){
    return "php artisan db:seed";
  }

  public static function get_static() {
    return new static();
    }
    public static function get_self() {
    return new self();
    }

}




/*















*/











 ?>
