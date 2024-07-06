<?php
require_once('./dompdf/autoload.inc.php');
require 'db_connect.php';

use Dompdf\Dompdf;

$dompdf = new Dompdf();

$selectreservation = "SELECT reservation.resId,  reservation.checkInDate, reservation.checkOutDate,reservation.custUid,reservation.roomId
                FROM reservation";

$resultreservation = mysqli_query($conn, $selectreservation);

$html = '<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>  reservation Report</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        header {
            text-align: center;
            margin-bottom: 20px;
        }

        h3 {
            color: #3498db;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #3498db;
            color: white;
        }

        .footer {
            margin-top: 20px;
            text-align: center;
            color: #555;
        }
    </style>
</head>
<body>

    <header>
        <h3>reservation Report</h3>
    </header>

    <table>
        <thead>
            <tr>
                <th>Customer ID</th>
                <th>Check In Date</th>
                <th>Check Out Date</th>
                <th>Customer UID</th>
                <th>Room ID</th>
                
            </tr>
        </thead>
        <tbody>';

while ($row = mysqli_fetch_assoc($resultreservation)) {
    $html .= '<tr>';
    $html .= '<td>' . $row['resId'] . '</td>';
    $html .= '<td>' . $row['checkInDate'] . '</td>';
    $html .= '<td>' . $row['checkOutDate'] . '</td>';
    $html .= '<td>' . $row['custUid'] . '</td>';
    $html .= '<td>' . $row['roomId'] . '</td>';
   
    
    if ($row['resId'] == 1) {
        $html .= '<span ></span>';
    } elseif ($row['checkInDate'] == 2) {
        $html .= '<span>Unpaid</span>';
    } 

    $html .= '</td>';
   
    $html .= '</tr>';
    
    
}

$html .= '</tbody>
    </table>

    <div class="footer">
        <h6>Generated By CTO on ' . date('Y-m-d') . '</h6>
    </div>

</body>
</html>';

$dompdf->loadHTML($html);

$dompdf->setPaper('A4', 'landscape');

$dompdf->render();

$dompdf->stream();
?>
