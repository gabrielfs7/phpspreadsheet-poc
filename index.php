<?php

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;

$reader = IOFactory::createReader('Xlsx');
$spreadsheet = $reader->load(__DIR__ . '/questions.xlsx');
$worksheetCount = 0;
$rowCount = 0;

foreach ($spreadsheet->getWorksheetIterator() as $worksheet) {
    $worksheetCount++;

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
                'CELL - Fill color: ' . var_export($cell->getStyle()->getFill()->getStartColor()->getRGB(), true) . PHP_EOL
            );

            $richText = $cell->getValue();

            if ($richText instanceof PhpOffice\PhpSpreadsheet\RichText\RichText) {
                foreach ($richText->getRichTextElements() as $element) {
                    echo(
                        '   RichText CELL - text: ' . var_export($element->getText(), true) . PHP_EOL .
                        '   RichText Font - Bold: ' . var_export($element->getFont()->getBold(), true) . PHP_EOL .
                        '   RichText Font - Italic: ' . var_export($element->getFont()->getItalic(), true) . PHP_EOL .
                        '   RichText Font - Size: ' . var_export($element->getFont()->getSize(), true) . PHP_EOL .
                        '   RichText Font - Name: ' . $element->getFont()->getName() . PHP_EOL .
                        '   RichText Font - color: ' . $element->getFont()->getColor()->getRGB() . PHP_EOL
                    );
                }
            } else {
                echo(
                    'Font - Bold: ' . var_export($cell->getStyle()->getFont()->getBold(), true) . PHP_EOL .
                    'Font - Italic: ' . var_export($cell->getStyle()->getFont()->getItalic(), true) . PHP_EOL .
                    'Font - Size: ' . var_export($cell->getStyle()->getFont()->getSize(), true) . PHP_EOL .
                    'Font - Name: ' . $cell->getStyle()->getFont()->getName() . PHP_EOL .
                    'Font - color: ' . $cell->getStyle()->getFont()->getColor()->getRGB() . PHP_EOL
                );
            }
            break;
        }
    }
}
