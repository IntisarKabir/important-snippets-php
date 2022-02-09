<?php






trait ImportantPackages{
  public function comp_pckg_list(){
    return ['yajra/laravel-datatables-oracle'];
  }
}



trait Faker{
  public function all_avail(){
    return [
      'name','safeEmail','phoneNumber','randomElement'
    ];
  }
}




trait CRUD_R{
  public function steps(){
    echo "//extract from req<br>from request get draw<br>";
    echo "from request get start<br>";
    echo "from request get length (total number of rows per page)<br>";
    echo "from request get order(columnIndex_arr)<br>"; ////
    echo "from request get columns(columnName_arr)<br>";
    echo "from request get order(order_arr)<br>";
    echo "from request get search(search_arr)<br>";
    /////
    echo "get columnIndex by slicing out the\
      column index of the first element of columnIndex_arr";
    echo "get columnName by slicing out the 'data' index\
      of the columnIndex index from columnName_arr";
    echo " get columnSortOrder(asc or desc) from the 'dir' \
     index of the first(0th) element of order_arr";
    echo "get searchValue from the 'value' index of search_arr<br>";
    echo "get _totalRecords by running static select('count(*) as allcount') \
    on the Student Model and then ending the chain with 'count' method<br>";
    echo "to get _totalRecordswithFilter clone prev step and Before Ending the chain \
    insert this: ->where('name', 'like', '%' . _searchValue . '%') <br>";
    echo "to get _records first run 'orderBy' on Student model with params _columnName , _columnSortOrder<br>";
    echo "->where('students.name', 'like', '%' . _searchValue . '%')<br>";
    echo "->orWhere('students.email', 'like', '%' . _searchValue . '%')<br>";
    echo "...'students.branch'........<br>";
    echo "->select('students.*')<br>";
    echo "->skip(_start)<br>";
    echo "->take(_rowperpage)<br>";
    echo "->get();<br>";
    echo "_data_arr = array();<br>";
    echo "start foreach loop on _records<br>";
    echo "from _record array extract id, name, email, mobile, branch into _data_arr<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";



  }
}















 ?>
