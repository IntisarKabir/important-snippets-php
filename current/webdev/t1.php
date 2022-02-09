<?php



include 'autoloader.php';
include 'fun.php';





$lrva = new LaravelAjax;
//pp( $lrv->add_foreign_key('user_id','users', true));

echo $lrva->seed_all();

pp($lrva->install_composer_package(
  'yajra/laravel-datatables-oracle',
  'Yajra\DataTables','DataTablesServiceProvider','DataTables'
));
























//






 ?>
