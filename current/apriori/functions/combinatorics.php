<?php






/* Combinations */
function nCr($n, $r)
{
  if ($r > $n)
  {
    return NaN;
  }
  if (($n - $r) < $r)
  {
    return nCr($n, ($n - $r));
  }
  $return = 1;
  for ($i = 0; $i < $r; $i++)
  {
    $return *= ($n - $i) / ($i +1);
  }
  return $return;
}

/* Permutations */
function nPr($n, $r)
{
  if ($r > $n)
  {
    return NaN;
  }
  if ($r)
  {
    return $n * (nPr($n -1, $r -1));
  }
  else
  {
    return 1;
  }
}


class Combinations implements Iterator
{
    protected $c = null;
    protected $s = null;
    protected $n = 0;
    protected $k = 0;
    protected $pos = 0;

    function __construct($s, $k) {
        if(is_array($s)) {
            $this->s = array_values($s);
            $this->n = count($this->s);
        } else {
            $this->s = (string) $s;
            $this->n = strlen($this->s);
        }
        $this->k = $k;
        $this->rewind();
    }
    function key() {
        return $this->pos;
    }
    function current() {
        $r = array();
        for($i = 0; $i < $this->k; $i++)
            $r[] = $this->s[$this->c[$i]];
        return is_array($this->s) ? $r : implode('', $r);
    }
    function next() {
        if($this->_next())
            $this->pos++;
        else
            $this->pos = -1;
    }
    function rewind() {
        $this->c = range(0, $this->k);
        $this->pos = 0;
    }
    function valid() {
        return $this->pos >= 0;
    }

    protected function _next() {
        $i = $this->k - 1;
        while ($i >= 0 && $this->c[$i] == $this->n - $this->k + $i)
            $i--;
        if($i < 0)
            return false;
        $this->c[$i]++;
        while($i++ < $this->k - 1)
            $this->c[$i] = $this->c[$i - 1] + 1;
        return true;
    }
}









 ?>
