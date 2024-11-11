@include('sidebar.head')
<!DOCTYPE html>
<html>

<head>
    <title>Receipt</title>
    <style>
        body {
            font-family: 'Courier New', Courier, monospace;
            font-size: 12px;
            max-width: 250px;
            /* Small width to mimic a bill */
            margin: auto;
            height: 150px;
        }

        h1,
        h2,
        h3 {
            font-size: 16px;
            text-align: center;
            margin: 5px 0;
        }

        p {
            margin: 2px 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 10px;
        }

        th,
        td {
            font-size: 12px;
            padding: 5px;
            border-bottom: 1px dashed #000;
            /* Dotted line to mimic receipt */
        }

        th {
            text-align: left;
        }

        td {
            text-align: right;
        }

        .total {
            font-weight: bold;
        }

        .center {
            text-align: center;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>

<body>

    <h1>Store Name</h1>
    <p class="center">Address Line 1</p>
    <p class="center">Address Line 2</p>
    <p class="center">Phone: 123-456-7890</p>
    <h2>Receipt</h2>

    <p>Invoice #: {{ $invoice_number }}</p>
    <p>Date: {{ $date }}</p>
    <p>Party: {{ $party->party_name }}</p>
    <p>Phone: {{ $phone_number }}</p>

    <table>
        <thead>
            <tr>
                <th>Item</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach($items as $item)
            <tr>
                <td>{{ $item['item_name'] }}</td>
                <td>{{ $item['quantity'] }}</td>
                <td>{{ $item['price'] }}</td>
                <td>{{ $item['total'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <h3 class="total">Total: {{ $totalAmount }}</h3>

    <p>Payment Method: {{ $payment_method }}</p>
    @if($payment_method === 'Cash')
    <p>Cash Paid: {{ $cash_details }}</p>
    @endif

    <div class="footer">
        <p>Thank you for your purchase!</p>
        <p>Visit Again!</p>
    </div>

</body>

</html>

@include('sidebar.footbar')