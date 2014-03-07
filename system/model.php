<?php

class Model {

  public $db;
  public $time_updated;
  public $time_created;

  function __construct() {
    global $config;
    $this->db = new MysqliDb(
      $config['db_host'],
      $config['db_username'],
      $config['db_password'],
      $config['db_name']
    );
  }

  public function gettimes($attr, $value, $table) {
    $this->db->where($attr, $value);
    $entity             = $this->db->getOne($table);
    $this->time_created = $entity["time_created"];
    $this->time_updated = $entity["time_updated"];
  }

  // 2 weeks ago
  public function timestamp($input){
    $input = explode(" ", $input);
    $time = time();
    $cantity = $input[0];
    $type = $input[1];
    switch ($type) {
      case "weeks":
        return $time - ($cantity*604800);
        break;
      case "week":
        return $time - ($cantity*604800);
        break;
      case "days":
        return $time - ($cantity*86400);
        break;
      case "day":
        return $time - ($cantity*86400);
        break;
    }
  }

  public function ago($tm, $rcs = 0) {
    $cur_tm = time(); $dif = $cur_tm-$tm;
    if($dif == 0){
      return "just now";
    } else {
      $pds = array('second','minute','hour','day','week','month','year','decade');
      $lngh = array(1,60,3600,86400,604800,2630880,31570560,315705600);
      for($v = sizeof($lngh)-1; ($v >= 0)&&(($no = $dif/$lngh[$v])<=1); $v--); if($v < 0) $v = 0; $_tm = $cur_tm-($dif%$lngh[$v]);

      $no = floor($no); if($no <> 1) $pds[$v] .='s'; $x=sprintf("%d %s ",$no,$pds[$v]);
      if(($rcs == 1)&&($v >= 1)&&(($cur_tm-$_tm) > 0)) $x .= time_ago($_tm);
      return $x . " ago";
    }
  }

  public function prepare($datas) {
    for($i = 0; $i < count($datas); $i++) {
      if($datas[$i]["time_updated"] == 0){
        $datas[$i]["time_updated"] = "-";
      } else {
        $datas[$i]["time_updated"] = $this->ago($datas[$i]["time_updated"]);
      }
      $datas[$i]["time_created"] = $this->ago($datas[$i]["time_created"]);
    }
    return $datas;
  }

}
