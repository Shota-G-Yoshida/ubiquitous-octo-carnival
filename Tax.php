<?php

class Tax {
    public function mul(int $price): int {
        $result = $price * 1.1;
        return $result;
    }
}

$thing = new Tax;
echo $thing -> mul($argv[1]);

?>