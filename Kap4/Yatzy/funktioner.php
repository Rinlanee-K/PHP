<?php

declare (strict_types=1);

/**
 * Sparar undan en cookie med angivet namn
 * @param string $namn
 * @return void
 */
function sparaNamn(string $namn): void {
    //Sätter cookien i 'en 'namn' till värdet på inparametern
    setcookie('namn', $namn);

    return;
}

/**
 * returnerar ett tärningskast med en vanlig tärning
 * @return int - Tärningens värde
 */
function rullaTarning(): int {
    $varde = random_int(1, 6);

    return $varde;
}

/**
 * Funktion för att avgör vilka tärningar som ska slås om
 * @param array $post element tarning_=on betyder att tärningen ska slås om
 *                    element t_ har tärningens tidigare värde
 * @return array 5 heltal med tärningens
 */
function slaOmTarningar(array $post): array {
    $ret = [];
    for ($i = 0; $i < 5; $i++) {
        if (isset($post["tarning_$i"])) {
            //Slå om tärning
            $ret[$i] = rullaTarning();
        } else {
            //Behåll tärningens värde (gör om till heltal)
            $ret[$i] = (int) $post["t_$i"];
        }
    }

    //Returnera tärningens nya värden
    return $ret;
}

function utvarderaTarningar(array $tarning): array {
    

    switch (count(array_count_values($tarning))) {
        case 1:
            return ["resultat" => "Yatzy!", "varde" => 50];
        case 2:
            if (raknaFyrtal(array_count_values($tarning)) !== 0) {
                return ["resultat" => "Fyrtal", "varde" => raknaFyrtal(array_count_values($tarning))];
            } else {
                return ["resultat" => "Kåk", "varde" => raknaKak(array_count_values($tarning))];
            }
        case 3;
            if (raknaTretal(array_count_values($tarning)) !== 0) {
                return ["resultat" => "Tretal", "varde" => raknaTretal(array_count_values($tarning))];
            } else {
                return ["resultat" => "Två par", "varde" => raknaTvaPar(array_count_values($tarning))];
            }
        case 4;
            return ["resultat" => "Par", "varde" => raknaPar(array_count_values($tarning))];
        case 5;
            if (raknaStorStege($tarning)) {
                return ["resultat" => "Stor stege", "varde" => 20];
            } elseif (raknaLitenStege($tarning)) {
                return ["resultat" => "Liten stege", "varde" => 15];
            } else {
                return ["resultat" => "Chans", "varde" => raknaChans(array_count_values($tarning))];
            }
        default;
            break;
    }
    return ["resultat" => "Par", "varde" => 7];
}

function raknaPar(array $values): int {
    foreach ($values as $ogon => $antal) {
        if ($antal == 2) {
            return 2 * $ogon;
        }
    }
}

function raknaFyrtal(array $values): int {
    foreach ($values as $ogon => $antal) {
        if ($antal == 4) {
            return 4 * $ogon;
        }
    }
    return 0;
}

function raknaTretal(array $values): int {
    foreach ($values as $ogon => $antal) {
        if ($antal == 3) {
            return 3 * $ogon;
        }
    }
    return 0;
}

function raknaTvaPar(array $values): int {
    $summa = 0;
    foreach ($values as $ogon => $antal) {
        if ($antal !== 1) {
            $summa += $ogon * $antal;
        }
    }

    return $summa;
}

function raknaKak(array $values): int {
    $summa = 0;
    foreach ($values as $ogon => $antal) {
        $summa += $ogon * $antal;
    }

    return $summa;
}

function raknaLitenStege(array $values): bool {
    $litenStege = array(1, 2, 3, 4, 5);
    foreach ($litenStege as $tal) {
        if (in_array($tal, $values) && !in_array(6, $values)) {
            return true;
        }
    }
    return false;
}

function raknaStorStege(array $values): bool {
    $storStege = array(2, 3, 4, 5, 6);
    foreach ($storStege as $tal) {
        if (in_array($tal, $values) && !in_array(1, $values)) {
            return true;
        }
    }
    return false;
}

function raknaChans(array $values): int {
    $summa = 0;
    foreach ($values as $ogon => $antal) {
        $summa += $ogon;
    }
    return $summa;
}
