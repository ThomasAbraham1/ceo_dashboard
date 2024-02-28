
<?php

//upload.php

include 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;

if ($_FILES["select_excel"]["name"] != '') {
    $allowed_extension = array('xls', 'xlsx');
    $file_array = explode(".", $_FILES['select_excel']['name']);
    $file_extension = end($file_array);
    if (in_array($file_extension, $allowed_extension)) {
        $reader = IOFactory::createReader('Xlsx');
        $spreadsheet = $reader->load($_FILES['select_excel']['tmp_name']);
        $writer = IOFactory::createWriter($spreadsheet, 'Html');
        $message = $writer->save('php://output');
    } else {
        $message = '<div class="alert alert-danger">Only .xls or .xlsx file allowed</div>';
    }
    $worksheet = $spreadsheet->getActiveSheet();
    error_reporting(0);

    //  echo '<table>' . PHP_EOL;
    //  foreach ($worksheet->getRowIterator() as $row) {
    //      echo '<tr>' . PHP_EOL;
    //      $cellIterator = $row->getCellIterator();
    //      $cellIterator->setIterateOnlyExistingCells(FALSE); // This loops through all cells,
    //                                                         //    even if a cell value is not set.
    //                                                         // For 'TRUE', we loop through cells
    //                                                         //    only when their value is set.
    //                                                         // If this method is not called,
    //                                                         //    the default value is 'false'.
    //      foreach ($cellIterator as $cell) {
    //          echo '<td>' .
    //               $cell->getValue() .
    //               '</td>' . PHP_EOL;
    //      }
    //      echo '</tr>' . PHP_EOL;
    //  }
    //  echo '</table>' . PHP_EOL;
    // }
    // else
    // {
    //  $message = '<div class="alert alert-danger">Please Select File</div>';
    // }

    echo $message;
} ?>
<?php
// Include PhpSpreadsheet autoload file
require 'vendor/autoload.php';

// use PhpOffice\PhpSpreadsheet\IOFactory;

// Load the Excel file
$excelFile = 'Financial data.xlsx'; // Change this to the path of your Excel file
$spreadsheet = IOFactory::load($excelFile);

// Select the active worksheet
$worksheet = $spreadsheet->getActiveSheet();

// Find the column index of the column named 'REVENUE'
$columnIndex = null;
foreach ($worksheet->getRowIterator() as $row) {
    $cellIterator = $row->getCellIterator();
    foreach ($cellIterator as $cell) {
        if ($cell->getValue() == 'REVENUE') {
            $columnIndex = $cell->getColumn();
            break 2;
        }
    }
}
error_reporting(0);
// If 'REVENUE' column found, calculate total
if ($columnIndex) {
    $total = 0;
    foreach ($worksheet->getColumnIterator($columnIndex) as $column) {
        foreach ($column->getCellIterator() as $cell) {
            $value = $cell->getValue();
            // Skip non-numeric values and header row
            if (is_numeric($value) && $cell->getRow() != 1) {
                $total += $value;
            }
        }
    }

    // Print the total
    echo "Total REVENUE: $total";
} else {
    echo "Column 'REVENUE' not found in the Excel file.";
}
?>
