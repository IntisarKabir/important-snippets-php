<?php





trait Basic{
  public function initial_imports(){
    return "
import numpy as np;
import re;import collections;import contractions;
import seaborn as sns;import matplotlib.pyplot as plt;
plt.style.use('dark_background')";
  }
}




class BFND
{
  use Basic;
  function __construct()
  {
    // code...
  }
  public function ml_algos(){
    echo 'MNBM SVM, LSTM';
  }
}


$bfnd = new BFND();
print_r ( $bfnd->initial_imports()  );

















 ?>
