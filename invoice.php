<?php

require_once __DIR__ . '/vendor/autoload.php';

print_r($_POST);
$Billed_To=$_POST['Billed_To'];
$Date_Issued=$_POST['Date_Issued'];
$Invoice_Number='INV-'.time();
$Due_Date=$_POST['Due_Date'];
$DESCRIPTION=$_POST['DESCRIPTION'];
$RATE=$_POST['RATE'];
$QTY=$_POST['QTY'];
$AMOUNT=($_POST['RATE']*$_POST['QTY']);
$Total=$AMOUNT;
$Paid=$_POST['Paid'];
$Balance_Due=$AMOUNT-$_POST['Paid'];
$Note=$_POST['Note'];


$html='<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INVOICE</title>
	<style>
        body{
            background-color: #f2f2f2;
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<body>
	<div style="border: 3px solid #34B3F1; height: 100%; width: 100%;">
		<table style="width: 100%; border-collapse: collapse;">
			<tbody>
				<tr style=" height: 200px;" ></tr>
				<tr> 
					<td style="">
						<div style=" height: 200px; width: 39%; ">
							<img src="codingboss.png" alt="logo" style="height: 120px; width:120px; margin-top: 10px; margin-left: 10px;">
						</div>
					</td>
					<td style="text-align: right;">
						<div style="text-align: right;  height: 200px; width: 60%; margin-top: 20px; ">
							<p style="font-size: 40px; font-weight: bold; color: #2873e4;">INVOICE</p><br>
							<p style="font-size: 30px; color: #000000;">BHUIYAN INTERNATIONAL</p>
							<p style="font-size: 18px; color: #7F8487;">769/1 west shewrapara, mirpur,Dhaka, dhaka-1216</p>
							<p style="font-size: 18px; color: #7F8487;">Bangladesh</p>
							<p style="font-size: 18px; color: #7F8487;">01727706200</p>
						</div>
					</td>
					<td style=" width: 4%; ">

					</td>
				</tr>
			</tbody>
		</table>
		<br>
		<table style="width: 30%; margin-top: 20px; border-collapse: collapse;">
					<thead>
						<tr style="background-color: #34B3F1;">
							<th style="color: #ffffff; height: 35px; font-size: 20px;">Billed To</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td style="text-align: center;height: 35px; width: 100%;">'.$Billed_To.'</td>
						</tr>
					</tbody>
		</table>
		<br>
		<table style="width: 100%; margin-top: 20px; border-collapse: collapse;">
					<thead >
						<tr style="background-color: #34B3F1;">
							<th style="width: 25%; color: #ffffff; height: 35px; font-size: 20px;">Date Issued</th>
							<th style="width: 25%; color: #ffffff; height: 35px; font-size: 20px;">Due Date</th>
							<th style="width: 25%; color: #ffffff; height: 35px; font-size: 20px;">Invoice Number</th>
						</tr>
					</thead>
					<tbody>
						<tr style="text-align: center;">
							<td style="text-align: center;height: 35px; font-size: 18px;">'.$Date_Issued.'</td>
							<td style="text-align: center;height: 35px; font-size: 18px;">'.$Due_Date.'</td>
							<td style="text-align: center;height: 35px; font-size: 18px;">'.$Invoice_Number.'</td>
						</tr>
					</tbody>
			</table>
			<br>
			<table style="width: 100%; margin-top: 40px; border-collapse: collapse;">
                <thead>
                    <tr style="background-color: #34B3F1;">
                        <th style="width: 25%; color: #ffffff; height: 35px; font-size: 20px; "> DESCRIPTION </th>
                        <th style="width: 25%; color: #ffffff; height: 35px; font-size: 20px; ">RATE </th>
                        <th style="width: 25%; color: #ffffff; height: 35px; font-size: 20px; ">QTY </th>
                        <th style="width: 25%; color: #ffffff; height: 35px; font-size: 20px; ">AMOUNT </th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="text-align: center;height: 35px; font-size: 20px;">
                        <td style="text-align: center; font-size: 18px;">'.$DESCRIPTION.'</td>
                        <td style="text-align: center; font-size: 18px;">'.$RATE.' tk</td>
                        <td style="text-align: center; font-size: 18px;">'.$QTY.'</td>
                        <td style="text-align: center; font-size: 18px;">'.$AMOUNT.' tk</td>
                    </tr>
					<tr style="text-align: center;height: 35px; font-size: 20px;">
						<td></td>
						<td></td>
						<td style=" height: 35px; font-size: 20px;"> </td>
						<td></td>
					</tr>
					<tr style="text-align: center;height: 35px; font-size: 20px;">
						<td></td>
						<td></td>
						<td style="text-align: right;color: #34B3F1; height: 35px; font-size: 20px;">Total :</td>
						<td style="text-align: center; font-size: 18px;">'.$Total.' tk</td>
                    </tr>
					<tr style="text-align: center;height: 35px; font-size: 20px;">
						<td></td>
						<td></td>
						<td style="text-align: right;color: #34B3F1; height: 35px; font-size: 20px;">Paid :</td>
						<td style="text-align: center; font-size: 18px;">- '.$Paid.' tk</td>
					</tr>
					<tr style="text-align: center;height: 35px; font-size: 20px;">
						<td></td>
						<td></td>
						<td style="text-align: right;color: #ffffff;background-color: #34B3F1; height: 35px; font-size: 20px;">      Balance Due :</td>
						<td style="text-align: center; font-size: 18px;">'.$Balance_Due.' tk</td>
					</tr>
                </tbody>
            </table>
			<div style="padding: 30px;">
				<h3>Notes</h3>
				<p>'.$Note.'</p>
				<br>
				<h3>Terms</h3>
				<p>Termes and Conditions</p>
			</div>
		</div>

</body>
</html>  ';

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$mpdf->Output();