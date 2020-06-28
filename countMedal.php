<?php

  function perolehan_medali($arr)
  {
    // check null arr
    if (empty($arr)) {
      return "no data";
    } else {
      $all_array = [];
      $countries = [];
      $country = [];

      // get unique all country
      foreach ($arr as $key => $val) {
        // check country is unexists
        if (!in_array($val[0], $countries)) {
          array_push($countries, $val[0]);
        }
      }

      foreach ($countries as $kC => $vC) {
        $country["negara"] = $vC;
        $medal = [];
        // get one country in arr
        foreach ($arr as $kA => $vA) {
          // check country is exists
          if ($vA[0] == $vC) {
            // add medal
            array_push($medal, $vA[1]);
          }
        }
        //  get count medal
        $count_medal = array_count_values($medal);
        // check null medal with key array unexists
        if (!array_key_exists("gold", $count_medal)) {
          $t["gold"] = 0;
          $count_medal = array_merge($count_medal, $t);
        }
        if (!array_key_exists("silver", $count_medal)) {
          $t["silver"] = 0;
          $count_medal = array_merge($count_medal, $t);
        }
        if (!array_key_exists("bronze", $count_medal)) {
          $t["bronze"] = 0;
          $count_medal = array_merge($count_medal, $t);
        }
        // sorting medal (gold, silver, bronze)
        ksort($count_medal);
        // merge one country and count medal
        $country = array_merge($country, $count_medal);
        // add country to all_array
        $all_array[] = $country;
      }
      // print all array
      return $all_array;
    }
  }


  // TEST CASES
  print_r(perolehan_medali(
    array(
      array('Indonesia', 'gold'),
      array('India', 'silver'),
      array('Korea Selatan', 'gold'),
      array('India', 'silver'),
      array('India', 'gold'),
      array('Indonesia', 'silver'),
      array('Indonesia', 'gold'),
    )
  ));

  print_r(perolehan_medali([])); // no data
  ?>
