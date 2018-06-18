function aggregate($data){
      $n = [];
      foreach ($data as $k => $v) {
          for ($i=0; $i < sizeof($v); $i++) {
              $n[$i][$k] = $v[$i];
          }
      }
      return $n;
  }
