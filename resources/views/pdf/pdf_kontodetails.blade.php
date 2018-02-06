<!doctype html>

<html>
<head>
    <style>
        /*Table*/
        table {
            background-color: transparent
        }

        caption {
            padding-top: 8px;
            padding-bottom: 8px;
            color: #777;
            text-align: left
        }

        th {
            text-align: left
        }

        .table {
            width: 100%;
            max-width: 100%;
            margin-bottom: 20px
        }

        .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th,
        .table > thead > tr > td, .table > thead > tr > th {
            padding: 8px;
            line-height: 1.42857143;
            vertical-align: top;
            border-top: 1px solid #ddd
        }
        .fix-5-12 {
            max-width: 464px !important;
        }

        .table > thead > tr > th {
            vertical-align: bottom;
            border-bottom: 2px solid #ddd
        }
        .text-ac{
            color: #0492e4;
            background: -webkit-linear-gradient(#0492e4, #5843a0);
            background: linear-gradient(#0492e4, #5843a0);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            white-space: nowrap;
        }
        .gradient-blue{
            background: #0492e4;
            background: -webkit-linear-gradient(left, #00b8ff 0%, #0084ff 100%);
            background: linear-gradient(to right, #00b8ff 0%, #0084ff 100%);
            height: 3px;
            width: auto;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
<h1 class="text-ac"><strong>Sunshine Wellness</strong></h1>

<table class="table">
    <tr>
        <th>BIC</th>
        <td>{{get_option('bank_swift_code') }}</td>
    </tr>
    <tr>
        <th>Kontonummer</th>
        <td>{{get_option('account_number') }}</td>
    </tr>
    <tr>
        <th>Unsere Bank</th>
        <td>{{get_option('branch_name') }}</td>
    </tr>
    <tr>
        <th>Adresse der Bank</th>
        <td>{{get_option('branch_address') }}</td>
    </tr>
    <tr>
        <th>Zahlungsempfänger</th>
        <td>{{get_option('account_name') }}</td>
    </tr>
    <tr>
        <th>IBAN</th>
        <td>{{get_option('iban') }}</td>
    </tr>
    <tr>
        <th>Verwendungszweck</th>
        <td>Immo-2017/{{ $user->id }}</td>
    </tr>
</table>
</body>
</html>
