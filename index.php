<pre>
<?php

require_once 'Summary.php';
require_once 'Prime.php';

error_reporting(E_ALL);
ini_set("display_errors", "On");

try {
    $summary = new Summary(1, 7);
    print_r($summary->get() . PHP_EOL);

    $summary
        ->setA(7)
        ->setB(-98);

    print_r($summary->get() . PHP_EOL);

    print_r("Is Prime [1...1000]: " . PHP_EOL);
    for ($k = 1; $k < 1000; $k++) {
        if (isPrime($k)) {
            print_r($k . PHP_EOL);
        }
    }

    $summary
        ->setA(7)
        ->setB('x');

    print_r($summary->get() . PHP_EOL . PHP_EOL);
} catch (Exception | TypeError $e) {
    print_r(PHP_EOL . "MyCatch" . PHP_EOL . $e->getFile() . ': ' . $e->getMessage());
}
?>
</pre>
