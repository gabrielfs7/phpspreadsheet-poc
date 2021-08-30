<?php

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;

$reader = IOFactory::createReader('Xlsx');
$spreadsheet = $reader->load(__DIR__ . '/questions.xlsx');
$worksheetCount = 0;
$rowCount = 0;

foreach ($spreadsheet->getWorksheetIterator() as $worksheet) {
    $worksheetCount++;

    echo PHP_EOL . '=============== WORKSHEET ' . $worksheetCount . ' ==========================' . PHP_EOL;

    foreach ($worksheet->getRowIterator() as $row) {
        $rowCount++;

        if ($rowCount >= 8) {
            exit(PHP_EOL . '.............end.................');
        }

        $cellCount = 0;

        foreach ($row->getCellIterator() as $cell) {
            $cellCount++;
            echo PHP_EOL . '=============== CELL ' . $rowCount . '/' . $cellCount . ' ==========================' . PHP_EOL;

            echo(
                'CELL - text: ' . var_export($cell->getFormattedValue(), true) . PHP_EOL .
                'CELL - Fill color: ' . var_export($cell->getStyle()->getFill()->getEndColor()->getRGB(), true) . PHP_EOL .
                'Font - Bold: ' . var_export($cell->getStyle()->getFont()->getBold(), true) . PHP_EOL .
                'Font - Italic: ' . var_export($cell->getStyle()->getFont()->getItalic(), true) . PHP_EOL .
                'Font - Size: ' . var_export($cell->getStyle()->getFont()->getSize(), true) . PHP_EOL .
                'Font - Name: ' . $cell->getStyle()->getFont()->getName() . PHP_EOL .
                'Font - color: ' . $cell->getStyle()->getFont()->getColor()->getRGB() . PHP_EOL
            );
            break;
        }
    }
}
