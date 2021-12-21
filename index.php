<?php

// funzione dd
function dd(...$params)
{

  foreach ($params as $param) {
    # code...
    echo '<pre>';
    var_dump($param);
    echo '</pre>';
  }
  die();
};
// classe 
class movie{
    public $name;
    public $year;
    public $genre;
    public $features;
    public $age_content;
// costruttore 
    function __construct($name, $year,$genre,$features, $age_content = false){
        $this->name = $name;
        $this->year = $year;
        $this->genre = $genre;
        $this->age_content = $age_content;
        $this->features = $features;
    }
// metodo
    public function getNameAndYear(){
         $this->name;
         $this->year;
    }
}

$spiderman = new movie('spiderman',2021,'adventure/fantasy','superhero');
$it = new movie('it il pagliaccio',2019,'horror','violence',true);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section class="spiderman">
        <h1>
            <?php echo $spiderman->name ?>
        </h1>
        
        <h5>
            <?php echo $spiderman->year ?>
        </h5>
        <div>
            <span><?php echo $spiderman->genre ?></span>
            <span><?php echo $spiderman->features ?></span>
            <div>
                <?php if($spiderman->age_content)
                    echo 'contenuto esclusivo per adulti'  
                    ?>
            </div>
        </div>
    </section>
    <section class="it">
        <h1>
            <?php echo $it->name ?>
        </h1>
        
        <h5>
            <?php echo $it->year ?>
        </h5>
        <div>
            <span><?php echo $it->genre ?></span>
            <span><?php echo $it->features ?></span>
            <div>
                <?php if($it->age_content)
                    echo 'contenuto esclusivo per adulti'  
                    ?>
            </div>
        </div>
    </section>
</body>
</html>



