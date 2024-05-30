<?php
// Definirea clasei abstracte Vehicul
abstract class Vehicul {
    // Proprietăți protejate
    protected $marca;
    protected $model;
    protected $numarRoti;
    protected $tipMotor;
    protected $numarLocuri;

    public function __construct($marca, $model, $numarRoti, $tipMotor, $numarLocuri) {
        $this->marca = $marca;
        $this->model = $model;
        $this->numarRoti = $numarRoti;
        $this->tipMotor = $tipMotor;
        $this->numarLocuri = $numarLocuri;
    }


    // Metode abstracte
    abstract public function claxoneaza();
    abstract public function semnalizeaza();

    // Gettere pentru proprietăți
    public function getMarca() {
        return $this->marca;
    }

    public function getModel() {
        return $this->model;
    }

    public function getNumarRoti() {
        return $this->numarRoti;
    }

    public function getTipMotor() {
        return $this->tipMotor;
    }

    public function getNumarLocuri() {
        return $this->numarLocuri;
    }
}

// Definirea clasei Masina care extinde Vehicul
class Masina extends Vehicul {
    // Constructor pentru inițializarea proprietăților
    // Implementarea metodei claxoneaza
    public function claxoneaza() {
        echo "Masina $this->marca $this->model claxoneaza.\n";
    }

    // Implementarea metodei semnalizeaza
    public function semnalizeaza() {
        echo "Masina $this->marca $this->model semnalizeaza.\n";
    }
}

// Definirea clasei Motocicleta care extinde Vehicul
class Motocicleta extends Vehicul {
    // Constructor pentru inițializarea proprietăților

    // Implementarea metodei claxoneaza
    public function claxoneaza() {
        echo "Motocicleta $this->marca $this->model claxoneaza.\n";
    }

    // Implementarea metodei semnalizeaza
    public function semnalizeaza() {
        echo "Motocicleta $this->marca $this->model semnalizeaza.\n";
    }
}

// Definirea clasei Garaj
class Garaj {
    // Proprietăți pentru a deține listele de mașini și motociclete
    private $listaMasini = array();
    private $listaMotociclete = array();

    // Metodă pentru a adăuga o mașină în garaj
    public function adaugaMasina(Masina $masina) {
        $this->listaMasini[] = $masina;
    }

    // Metodă pentru a elimina o mașină din garaj
    public function eliminaMasina() {
        if (count($this->listaMasini) > 0) {
            $index = array_rand($this->listaMasini);
            unset($this->listaMasini[$index]);
            $this->listaMasini = array_values($this->listaMasini);
        }
    }

    // Metodă pentru a adăuga o motocicletă în garaj
    public function adaugaMotocicleta(Motocicleta $motocicleta) {
        $this->listaMotociclete[] = $motocicleta;
    }

    // Metodă pentru a elimina o motocicletă din garaj
    public function eliminaMotocicleta() {
        if (count($this->listaMotociclete) > 0) {
            $index = array_rand($this->listaMotociclete);
            unset($this->listaMotociclete[$index]);
            $this->listaMotociclete = array_values($this->listaMotociclete);
        }
    }

    // Metode de acces pentru liste
    public function getListaMasini() {
        return $this->listaMasini;
    }

    public function getListaMotociclete() {
        return $this->listaMotociclete;
    }
}

// Funcție pentru a crea un Garaj cu un număr dat de mașini și motociclete
function creeazaGaraj($numarMasini, $numarMotociclete) {
    // Liste predefinite de mașini și motociclete
    $masini = [
        new Masina('Dacia', 'Logan', 4, 'benzina', 5),
        new Masina('Toyota', 'Corolla', 4, 'diesel', 5),
        new Masina('Tesla', 'Model S', 4, 'electric', 5),
        new Masina('BMW', 'X5', 4, 'benzina', 5),
        new Masina('Audi', 'A4', 4, 'diesel', 5)
    ];

    $motociclete = [
        new Motocicleta('Ducati', 'Diavel', 2, 'benzina', 2),
        new Motocicleta('Yamaha', 'R1', 2, 'benzina', 2),
        new Motocicleta('Honda', 'CBR600RR', 2, 'benzina', 2),
        new Motocicleta('Kawasaki', 'Ninja', 2, 'benzina', 2),
        new Motocicleta('Harley-Davidson', 'Iron 883', 2, 'benzina', 2)
    ];

    // Crearea unei instanțe noi de Garaj
    $garaj = new Garaj();

    // Adăugarea mașinilor în garaj
    for ($i = 0; $i < $numarMasini; $i++) {
        $masina = $masini[array_rand($masini)];
        $garaj->adaugaMasina($masina);
    }

    // Adăugarea motocicletelor în garaj
    for ($i = 0; $i < $numarMotociclete; $i++) {
        $motocicleta = $motociclete[array_rand($motociclete)];
        $garaj->adaugaMotocicleta($motocicleta);
    }

    return $garaj;
}

// Funcție pentru a combina listele și a afișa vehiculele electrice și vehiculele cu mai mult de 4 locuri
function afiseazaGaraj($garaj) {
    $listaMasini = $garaj->getListaMasini();
    $listaMotociclete = $garaj->getListaMotociclete();

    // Combinarea listelor
    $vehicule = array_merge($listaMasini, $listaMotociclete);

    // Contoare
    $numarElectrice = 0;
    $numarMaiMultDe4Locuri = 0;

    // Iterarea prin lista combinată
    foreach ($vehicule as $vehicul) {
        if ($vehicul->getTipMotor() == 'electric') {
            $numarElectrice++;
        }
        if ($vehicul->getNumarLocuri() > 4) {
            $numarMaiMultDe4Locuri++;
        }
    }

    echo "Numarul de vehicule electrice: $numarElectrice\n";
    echo "Numarul de vehicule cu mai mult de 4 locuri: $numarMaiMultDe4Locuri\n";
}

// Testarea funcțiilor
$garaj = creeazaGaraj(3, 2);
afiseazaGaraj($garaj);
?>
