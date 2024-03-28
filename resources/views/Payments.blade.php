<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> ST Johns Payments </title>

<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<link href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" rel="stylesheet">
<link href="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.css" rel="stylesheet">
<link href="assets/bootstrap-table.min.css" rel="stylesheet">

</head>
<div class="container mt-2 mb-2">
		<table
		id="table"
		data-toggle="table"
		data-pagination="true"
		data-search="true"
		data-search-align="left"
		data-show-columns="true"
		data-show-toggle="true"
		data-show-refresh="true"
		data-show-fullscreen="true"
		data-show-export="true"
		data-id-field="id"
		data-show-pagination-switch="true"
		data-pagination-pre-text="Previous"
		data-pagination-next-text="Next"
		data-pagination-h-align="left"
		data-pagination-detail-h-align="right"
		data-page-list="[10, 20, 30, 40, 50, All]">
		<thead>
		<tr>

		<th colspan="9" data-align="center"> ST Johns Ambulance Payments</th>
			
		</tr>
		<tr>
        <tr>
                <th data-checkbox="false" data-valign="middle"> </th>
                <th data-field="id" data-sortable="true" data-switchable="false">ID</th>
                
                <th data-field="name" data-sortable="true">Name</th>
                <th data-field="phone" data-sortable="true">Phone</th>
                <th data-field="email" data-sortable="true">Code</th>
				<th data-field="idno" data-sortable="true" data-switchable="false">Date Time</th>
                <th data-field="purpose" data-sortable="true">Amount</th>
                <th data-field="time_in" data-sortable="true">Paybill</th>
                <th data-field="time_out" data-sortable="true">Account No</th>
          

		
		</tr>
		
		</thead>
		<tbody>
        @foreach($transactions as $transaction)
            <tr>
                <td>{{ $transaction['id'] }}</td>
                <td>{{ $transaction['TransactionType'] }}</td>
				<td>{{ $transaction['FirstName'] }}</td>
				<td>{{ $transaction['MSISDN'] }}</td>
                <td>{{ $transaction['TransID'] }}</td>
				<td>{{ \Carbon\Carbon::createFromFormat('YmdHis', $transaction['TransTime'])->format('d-m-Y H:i:s') }}</td>
                <td>{{ $transaction['TransAmount'] }}</td>
                <td>{{ $transaction['BusinessShortCode'] }}</td>
                <td>{{ $transaction['BillRefNumber'] }}</td>              
               
            </tr>
        @endforeach
    </tbody>
		
		</table>

</div>


<script src="https://code.jquery.com/jquery-3.3.1.min.js"> </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"> </script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"> </script>
<script src="assets/bootstrap-table.min.js"> </script>

<script src="https://unpkg.com/tableexport.jquery.plugin/tableExport.min.js"></script>
<script src="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.js"></script>

<script src="https://unpkg.com/bootstrap-table@1.16.0/dist/extensions/export/bootstrap-table-export.min.js"></script>




</html>
