<?php
// Criando e contando array com range e count
$numbers = range(1, 5);
echo "Array criado com range: " . print_r($numbers, true) . "\n";
echo "Número de elementos no array: " . count($numbers) . "\n\n";

// array_keys e array_values
$assocArray = ['a' => 1, 'b' => 2, 'c' => 3];
$keys = array_keys($assocArray);
$values = array_values($assocArray);
echo "Array Associativo: " . print_r($assocArray, true) . "\n";
echo "Chaves do Array: " . print_r($keys, true) . "\n";
echo "Valores do Array: " . print_r($values, true) . "\n\n";

// array_reverse
$reversedArray = array_reverse($numbers);
echo "Array Original: " . print_r($numbers, true) . "\n";
echo "Array Reverso: " . print_r($reversedArray, true) . "\n\n";

// Adicionando e removendo valores em um array
$fruits = ['apple', 'banana', 'orange'];
array_push($fruits, 'grape');
array_pop($fruits);
echo "Array de Frutas: " . print_r($fruits, true) . "\n\n";

// Verificando valores e chaves de um array
$foundKey = array_search('banana', $fruits);
$containsValue = in_array('apple', $fruits);
echo "Array de Frutas: " . print_r($fruits, true) . "\n";
echo "Chave encontrada para 'banana': $foundKey\n";
echo "Contém 'apple'? " . ($containsValue ? "Sim" : "Não") . "\n\n";

// array_count_values e array_unique
$duplicatesArray = ['a', 'b', 'a', 'c', 'b', 'a'];
$countedValues = array_count_values($duplicatesArray);
$uniqueValues = array_unique($duplicatesArray);
echo "Array com Duplicatas: " . print_r($duplicatesArray, true) . "\n";
echo "Contagem de Valores: " . print_r($countedValues, true) . "\n";
echo "Array com Valores Únicos: " . print_r($uniqueValues, true) . "\n\n";

// array_merge, array_combine, array_diff
$mergedArray = array_merge($numbers, $fruits);
$combinedArray = array_combine($keys, $values);
$diffArray = array_diff($numbers, [2, 4]);
echo "Array Merged: " . print_r($mergedArray, true) . "\n";
echo "Array Combined: " . print_r($combinedArray, true) . "\n";
echo "Array Diff: " . print_r($diffArray, true) . "\n\n";

// array_filter, array_map, array_reduce
$filteredArray = array_filter($numbers, fn($num) => $num % 2 == 0);
$mappedArray = array_map(fn($num) => $num * 2, $numbers);
$sum = array_reduce($numbers, fn($carry, $num) => $carry + $num, 0);
echo "Array Original: " . print_r($numbers, true) . "\n";
echo "Array Filtrado (pares): " . print_r($filteredArray, true) . "\n";
echo "Array Mapeado (dobro): " . print_r($mappedArray, true) . "\n";
echo "Soma dos Elementos: $sum\n\n";

// array_slice e array_splice
$slicedArray = array_slice($numbers, 1, 3);
$splicedArray = array_splice($fruits, 1, 2, ['kiwi', 'melon']);
echo "Array Original: " . print_r($numbers, true) . "\n";
echo "Array Sliced: " . print_r($slicedArray, true) . "\n";
echo "Array Original (antes do splice): " . print_r($fruits, true) . "\n";
echo "Array Spliced: " . print_r($splicedArray, true) . "\n";
echo "Array Original (após o splice): " . print_r($fruits, true) . "\n\n";

// compact, extract e list
$name = "John";
$age = 30;
$city = "New York";
$person = compact('name', 'age', 'city');
extract($person);
list($firstName, $lastName) = ['John', 'Doe'];
echo "Person Array: " . print_r($person, true) . "\n";
echo "Name: $name, Age: $age, City: $city\n";
echo "First Name: $firstName, Last Name: $lastName\n\n";

// shuffle e array_rand
$shuffledArray = $numbers;
shuffle($shuffledArray);
$randomKey = array_rand($numbers);
$randomValue = $numbers[$randomKey];
echo "Array Original: " . print_r($numbers, true) . "\n";
echo "Array Embaralhado: " . print_r($shuffledArray, true) . "\n";
echo "Chave Aleatória: $randomKey, Valor Aleatório: $randomValue\n\n";

// Ordenando array
$unsortedArray = [3, 1, 4, 1, 5, 9, 2, 6, 5, 3, 5];
$sortedArray = $unsortedArray;
sort($sortedArray);
rsort($sortedArray);
echo "Array Não Ordenado: " . print_r($unsortedArray, true) . "\n";
echo "Array Ordenado Crescente: " . print_r($sortedArray, true) . "\n";
echo "Array Ordenado Decrescente: " . print_r($sortedArray, true) . "\n\n";

// json_encode e json_decode
$personData = ['name' => 'Alice', 'age' => 25, 'city' => 'Wonderland'];
$jsonData = json_encode($personData);
$decodedData = json_decode($jsonData, true);
echo "Array Original: " . print_r($personData, true) . "\n";
echo "JSON Encoded Data: $jsonData\n";
echo "Decoded Data: " . print_r($decodedData, true) . "\n";