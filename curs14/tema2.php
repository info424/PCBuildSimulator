<?php
// definirea cercului
class Cerc {
    // raza
    public static $raza;

    // Constanta pt pi
    const PI = 3.14159;

    // metoda pt a calcula circumferinta
    public static function circumferinta() {
        $circumference = 2 * self::PI * self::$raza;
        echo "Cercul cu raza " . self::$raza . " are circumferinta egala cu $circumference\n";
    }

    // pt arie
    public static function arie() {
        $area = self::PI * pow(self::$raza, 2);
        echo "Cercul cu raza " . self::$raza . " are aria egala cu $area\n";
    }
}

// test
Cerc::$raza = 5;
Cerc::circumferinta();
Cerc::arie();

Cerc::$raza = 10;
Cerc::circumferinta();
Cerc::arie();
?>
<?php
