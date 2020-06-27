# count-medal
PHP count medal 

EXAMPLE:

input

    get_medal(
      array(
        array('Indonesia', 'gold'),
        array('India', 'silver'),
        array('Korea Selatan', 'gold' ),
        array('India', 'silver'),
        array('India', 'gold'),
        array('Indonesia', 'silver'),
        array('Indonesia', 'gold'),
      )
    );
    
output

    Array(
        Array (
          [negara] => 'Indonesia'
          [gold] => 2
          [silver] => 1
          [bronze] => 0
        ),
        Array (
          [negara] => 'India'
          [gold] => 1
          [silver] => 2
          [bronze] => 0
        ),
        Array (
          [negara] => 'Korea Selatan'
          [gold] => 1
          [silver] => 0
          [bronze] => 0
        )
     )
