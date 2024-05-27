<?php
class Matematica {
    // metoda statica pt adunare
    public static function suma($param1, $param2) {
        $result = $param1 + $param2;
        echo "$param1 + $param2 = $result\n";
    }

    // scadere
    public static function scadere($param1, $param2) {
        $result = $param1 - $param2;
        echo "$param1 - $param2 = $result\n";
    }

    // inmultire
    public static function inmultire($param1, $param2) {
        $result = $param1 * $param2;
        echo "$param1 * $param2 = $result\n";
    }

    // impartire
    public static function impartire($param1, $param2) {
        // Check for division by zero
        if ($param2 == 0) {
            echo "Division by zero error!\n";
        } else {
            $result = $param1 / $param2;
            echo "$param1 / $param2 = $result\n";
        }
    }

    // ridicare la put.
    public static function ridicareLaPutere($param1, $param2) {
        $result = pow($param1, $param2);
        echo "$param1 ^ $param2 = $result\n";
    }
}

// test
Matematica::suma(5, 3);
Matematica::suma(10, 2);

Matematica::scadere(5, 3);
Matematica::scadere(10, 2);

Matematica::inmultire(5, 3);
Matematica::inmultire(10, 2);

Matematica::impartire(5, 3);
Matematica::impartire(10, 2);

Matematica::ridicareLaPutere(2, 3);
Matematica::ridicareLaPutere(5, 2);