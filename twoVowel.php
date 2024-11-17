<?php
class Node {
    public $value;
    public $next;

    public function __construct($value) {
        $this->value = $value;
        $this->next = null;
    }
}
class LinkedList {
    public $head;

    public function __construct() {
        $this->head = null;
    }

    public function add($value) {
        $newNode = new Node($value);
        if ($this->head === null) {
            $this->head = $newNode;
        } 
        else {
            $current = $this->head;
            while ($current->next !== null) {
                $current = $current->next;
            }
            $current->next = $newNode;
        }
    }

    private function countVowels($string) {
        $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
        $count = 0;
        for ($i = 0; $i < strlen($string); $i++) {
            if (in_array($string[$i], $vowels)) {
                $count++;
            }
        }
        return $count;
    }
}

?>