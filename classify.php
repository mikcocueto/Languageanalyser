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
$classifier->train('Tagalog', 'Kamusta');
$classifier->train('Tagalog', 'Makikiabot');
$classifier->train('Tagalog', 'Hala');
$classifier->train('Tagalog', 'Ayos');
$classifier->train('Spanish', 'Lamesa');
$classifier->train('Spanish', 'Libro');
$classifier->train('Spanish', 'Uno');
$classifier->train('Spanish', 'Adios');

if(isset($_POST['sentence'])) {
    $sentence = $_POST['sentence'];

    $result = $classifier->classify($sentence);

    echo "<p>Sentence: ".$sentence."</p>";
    echo "<p>English : ".$result['English']." Tagalog : ".$result['Tagalog']." Spanish :".$result['Spanish']."</p>";
}
?>
