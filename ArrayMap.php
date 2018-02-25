<?php
//
//use function array_map as map;
//use function array_filter as filter;
//
//class ArrayMap {
//
//    public function triplicateNumber($number) {
//        return $number * 3;
//    }
//
//    public function triplicateNumberForAnArrayWithForeach($arrayOfNumbers) {
//        foreach ($arrayOfNumbers as $number) {
//            $this->triplicateNumber($number);
//        }
//
//    }
//
//    public function mapArray($arrayOfNumbers) {
//        return  $arrayMap[] = map([$this, 'triplicateNumber'], $arrayOfNumbers);
//    }
//
//    public function filterResults() {
//        $resultOfArrayMap = $this->mapArray([2, 3, 4]);
//
//        $obtainNumbersGreaterThan10[] = filter($resultOfArrayMap, function($data) {
//            return $data >= 10;
//        });
//
//        print_r($obtainNumbersGreaterThan10);
//    }
//
//}
//
//$example = new ArrayMap();
//$example->filterResults();

//function multiply($inOne, $inTwo) {
//    return $inOne * $inTwo;
//}
//
//$first = [1, 2, 3, 4];
//$second = [10, 9, 8, 7];
//
//$result[] = array_map("multiply", $first, $second);
//
//print_r($result);

$numbers = [2, 4, 6];

function duplicateNumber($number) {
    return $number * 2;
}

$result[] = array_map("duplicateNumber", $numbers);

//foreach ($numbers as $number) {
//    $result[] = duplicateNumber($number);
//}

print_r($result);
