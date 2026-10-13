<?php
class Node {
    public $data;
    public $next = null;

    public function __construct($data) {
        $this->data = $data;
    }
}

$a = new Node("A");
$b = new Node("B");
$c = new Node("C");

$a->next = $b;
$b->next = $c;

$current = $a;

while ($current !== null) {
    echo $current->data . " ";
    $current = $current->next;
}

?>
