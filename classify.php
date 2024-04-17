<?php

include './vendor/autoload.php';

class Tokenizer {
    protected $tokenizer;

    public function __construct() {
        $this->tokenizer = new Fieg\Bayes\Tokenizer\WhitespaceAndPunctuationTokenizer();
    }

    public function tokenize($text) {
        return $this->tokenizer->tokenize($text);
    }
}

class Classifier extends Tokenizer {
    protected $classifier;

    public function __construct() {
        parent::__construct();
        $this->classifier = new Fieg\Bayes\Classifier($this->tokenizer);
    }

    public function train($category, $text) {
        $this->classifier->train($category, $text);
    }

    public function classify($text) {
        return $this->classifier->classify($text);
    }
}

class LanguageClassifier extends Classifier {
    public function __construct() {
        parent::__construct();
    }
}

$classifier = new LanguageClassifier();

$classifier->train('English', 'Hello');
$classifier->train('English', 'Hi');
$classifier->train('English', 'Phone');
$classifier->train('English', 'Charger');
$classifier->train('English', 'Please');
$classifier->train('English', 'You');
$classifier->train('English', 'Cabinet');
$classifier->train('English', 'TV');
$classifier->train('English', 'of');
$classifier->train('English', 'to');
$classifier->train('English', 'a');
$classifier->train('English', 'for');
$classifier->train('English', 'is');
$classifier->train('English', 'on');
$classifier->train('English', 'that');
$classifier->train('English', 'by');
$classifier->train('English', 'this');
$classifier->train('English', 'with');
$classifier->train('English', 'i');
$classifier->train('English', 'it');
$classifier->train('English', 'not');
$classifier->train('English', 'be');
$classifier->train('English', 'are');
$classifier->train('English', 'from');
$classifier->train('English', 'at');
$classifier->train('English', 'have');
$classifier->train('English', 'was');
$classifier->train('English', 'has');
$classifier->train('English', 'would');
$classifier->train('English', 'more');
$classifier->train('English', 'been');
$classifier->train('English', 'who');
$classifier->train('English', 'Goodbye');
$classifier->train('English', 'Thank you');
$classifier->train('English', 'Friend');
$classifier->train('English', 'Family');
$classifier->train('English', 'Table');
$classifier->train('English', 'Book');
$classifier->train('English', 'One');
$classifier->train('English', 'High');
$classifier->train('English', 'Low');
$classifier->train('English', 'Fear');
$classifier->train('English', 'Opportunity');
$classifier->train('English', 'Event');
$classifier->train('English', 'Place');
$classifier->train('English', 'Know');
$classifier->train('English', 'Where');
$classifier->train('English', 'Because');
$classifier->train('English', 'Like that');
$classifier->train('English', 'Just');
$classifier->train('English', 'How');
$classifier->train('English', 'We');
$classifier->train('English', 'Before');
$classifier->train('English', 'Need');
$classifier->train('English', 'Who');
$classifier->train('English', 'Yes');
$classifier->train('English', 'No');
$classifier->train('English', 'Now');
$classifier->train('English', 'Here');
$classifier->train('English', 'There');
$classifier->train('English', 'When');
$classifier->train('English', 'With');
$classifier->train('English', 'good morning');
$classifier->train('English', 'evening');
$classifier->train('English', 'fish');
$classifier->train('English', 'dog');
$classifier->train('English', 'cat');
$classifier->train('English', 'animal');
$classifier->train('English', 'motorcycle');
$classifier->train('English', 'chairman');
$classifier->train('English', 'citizens');
$classifier->train('English', 'senior');
$classifier->train('English', 'person');
$classifier->train('English', 'people');
$classifier->train('English', 'student');
$classifier->train('English', 'child');
$classifier->train('English', 'parent');
$classifier->train('English', 'father');
$classifier->train('English', 'mother');
$classifier->train('English', 'sun');
$classifier->train('English', 'rain');
$classifier->train('English', 'white');
$classifier->train('English', 'friend');
$classifier->train('English', 'love');
$classifier->train('English', 'place');
$classifier->train('English', 'school');
$classifier->train('English', 'cellphone');
$classifier->train('English', 'dress');
$classifier->train('English', 'pants');
$classifier->train('English', 'montain');
$classifier->train('English', 'night');
$classifier->train('English', 'plant');
$classifier->train('English', 'food');
$classifier->train('English', 'vegetable');
$classifier->train('English', 'drinks');
$classifier->train('English', 'numbers');
$classifier->train('English', 'man');
$classifier->train('English', 'women');
$classifier->train('English', 'black');
$classifier->train('English', 'brown');
$classifier->train('English', 'sky');
$classifier->train('English', 'blue');
$classifier->train('English', 'many');
$classifier->train('English', 'sleep');


$classifier->train('Tagalog', 'Kamusta');
$classifier->train('Tagalog', 'Makikiabot');
$classifier->train('Tagalog', 'Hala');
$classifier->train('Tagalog', 'Ayos');
$classifier->train('Tagalog', 'ako');
$classifier->train('Tagalog', 'sa');
$classifier->train('Tagalog', 'ang');
$classifier->train('Tagalog', 'si');
$classifier->train('Tagalog', 'kung');
$classifier->train('Tagalog', 'mga');
$classifier->train('Tagalog', 'may');
$classifier->train('Tagalog', 'na');
$classifier->train('Tagalog', 'ng');
$classifier->train('Tagalog', 'ay');
$classifier->train('Tagalog', 'at');
$classifier->train('Tagalog', 'ni');
$classifier->train('Tagalog', 'maganda');
$classifier->train('Tagalog', 'mataas');
$classifier->train('Tagalog', 'mababa');
$classifier->train('Tagalog', 'Ayaw');
$classifier->train('Tagalog', 'gusto');
$classifier->train('Tagalog', 'baka');
$classifier->train('Tagalog', 'tulad');
$classifier->train('Tagalog', 'maari');
$classifier->train('Tagalog', 'ito');
$classifier->train('Tagalog', 'kami');
$classifier->train('Tagalog', 'lahat');
$classifier->train('Tagalog', 'din');
$classifier->train('Tagalog', 'katakutan');
$classifier->train('Tagalog', 'pagkakataon');
$classifier->train('Tagalog', 'pangyayari');
$classifier->train('Tagalog', 'lugar');
$classifier->train('Tagalog', 'alam');
$classifier->train('Tagalog', 'saan');
$classifier->train('Tagalog', 'kasi');
$classifier->train('Tagalog', 'ganyan');
$classifier->train('Tagalog', 'ganoon');
$classifier->train('Tagalog', 'lang');
$classifier->train('Tagalog', 'para');
$classifier->train('Tagalog', 'paano');
$classifier->train('Tagalog', 'nang');
$classifier->train('Tagalog', 'natin');
$classifier->train('Tagalog', 'kaya');
$classifier->train('Tagalog', 'bago');
$classifier->train('Tagalog', 'kailangan');
$classifier->train('Tagalog', 'noon');
$classifier->train('Tagalog', 'sino');
$classifier->train('Tagalog', 'niyan');

$classifier->train('Spanish', 'Lamesa');
$classifier->train('Spanish', 'Libro');
$classifier->train('Spanish', 'Uno');
$classifier->train('Spanish', 'Adios');
$classifier->train('Spanish', 'hombre');
$classifier->train('Spanish', 'Libro');
$classifier->train('Spanish', 'Uno');
$classifier->train('Spanish', 'Adios');
$classifier->train('Spanish', 'gracias');
$classifier->train('Spanish', 'amigo');
$classifier->train('Spanish', 'amiga');
$classifier->train('Spanish', 'hola');
$classifier->train('Spanish', 'senora/senor');
$classifier->train('Spanish', 'por favor');
$classifier->train('Spanish', 'fiesta');
$classifier->train('Spanish', 'fiel');
$classifier->train('Spanish', 'amigo');
$classifier->train('Spanish', 'mesa');
$classifier->train('Spanish', 'familia');
$classifier->train('Spanish', 'noche');
$classifier->train('Spanish', 'Perro');
$classifier->train('Spanish', 'Gato');
$classifier->train('Spanish', 'Comida');
$classifier->train('Spanish', 'Bebida');
$classifier->train('Spanish', 'Trabajo');
$classifier->train('Spanish', 'Escuela');
$classifier->train('Spanish', 'Dinero');
$classifier->train('Spanish', 'Tiempo');
$classifier->train('Spanish', 'Música');
$classifier->train('Spanish', 'Baile');
$classifier->train('Spanish', 'Felicidad');
$classifier->train('Spanish', 'Tristeza');
$classifier->train('Spanish', 'Alegría');
$classifier->train('Spanish', 'Sueño');
$classifier->train('Spanish', 'Risa');
$classifier->train('Spanish', 'Canción');


if(isset($_POST['sentence'])) {
    $sentence = $_POST['sentence'];

    $result = $classifier->classify($sentence);

    echo "<p>Sentence: ".$sentence."</p>";
    echo "<p>English : ".$result['English']." Tagalog : ".$result['Tagalog']." Spanish :".$result['Spanish']."</p>";
}
?>
