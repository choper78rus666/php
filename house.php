<?
class House{
    private $number;
    private $level;
    private $rooms_is_level;
    private $rooms = [];// [level, room, human]
    
    function __construct($number, $level, $rooms_is_level){
        $this->number = $number;
        $this->level = $level;
        $this->rooms_is_level = $rooms_is_level;
        for($i = 0; $i < $level; $i++){
            for($j = 1; $j <= $rooms_is_level; $j++){
                $this->rooms[] = [
                    'level' => $i+1,
                    'room' => $i * $rooms_is_level + $j,
                    'human' => ""
                ];
            }
        }
    }
    
    function get_rooms(){
        return $this->level * $this->rooms_is_level;
    }
    
    function get_room_number($human_name){
        foreach($this->rooms as $value){
            if(is_object($value['human']) && $value['human']->getName() === $human_name){
                echo "<br>". $human_name ." проживает в картире №" . $value['room'];
                return;
            }
        }
        echo "<br>". $human_name ." не проживает в этом доме";
    }
    
    function get_humans_is_room(){
        $i = 0;
        foreach($this->rooms as $value){
            if(!empty($value['human'])){
                $i++;
            }
        }
        return $i;
    }
    
    function add($add_humans){
        $i = 0;
        $add_humans_resault = $add_humans;
        foreach($add_humans as $value){
            $j = 0;
            foreach($this->rooms as $key=>$isroom){
                if($isroom['level'] === $value[0] && empty($isroom['human'])){
                    $this->rooms[$key]['human'] = $value[1];
                    echo $value[1]->getName() . " заселили на " . $value[0] . " этаж в квартиру №" . $isroom['room'] . "<br>";
                    array_shift($add_humans_resault);
                    $i++;
                    if($i === 3){
                        return $add_humans_resault;
                    }
                    continue 2;
                    
                } elseif($isroom['level'] === $value[0]){
                    $j++;
                    if($j == $this->rooms_is_level){
                        $add_humans_resault[] = array_shift($add_humans_resault);
                        echo "<div style='color:red;'>" . $value[1]->getName() . " помещен в конец очереди</div>";
                    }
                }
                
            }
        }
         return $add_humans_resault;
    }
}

class Human{
    private $name;
    
    function __construct($name){
        $this->name = $name;
    }
    
    function getName(){
        return $this->name;
    }
}

$wait_humans = [
    [1, new Human('Elba')],
    [1, new Human('Brock')],
    [2, new Human('Николай')],
    [4, new Human('Groovi')],
    [3, new Human('Viktory')],
    [5, new Human('Mazi')],
    [3, new Human('Pini')],
    [3, new Human('Gansta')],
    [3, new Human('Finka')],
    [2, new Human('Гоша')],
    [5, new Human('Маша')],
];

$house = new House(12, 5, 3);
echo "Заселяем<br>";
$wait_humans = $house->add($wait_humans);
echo "<br>Заселяем<br>";
$wait_humans = $house->add($wait_humans);
echo "<br>Заселяем<br>";
$wait_humans = $house->add($wait_humans);
echo "<br>Заселяем<br>";
$wait_humans = $house->add($wait_humans);

echo "<br><br>В доме " . $house->get_rooms() . " квартир<br>";
$house->get_room_number('Николай');
$house->get_room_number('Finka');
echo "<br>В доме проживает " . $house->get_humans_is_room() . " человек";

?>