<htmlpageheader name="page-header" class="center">
    <h2>BOW - Buy Online Weed - Your source for all the strains to fix your pain.</h2>
</htmlpageheader>

<div class="address-info">
    <h3>BuyOnlineWeed</h3>
    <h5>123 Sample Street</h5>
    <h5>Nowheresville, Idunno</h5>
    <h5>12345</h5>
</div>

<div class="">
    <h3>Sales Receipt</h3>
</div>

<div id="transaction-container" class="container-fluid">
    <div class="row">
        <div class="center">
            <table id="transaction-details" class="">
                <thead>
                    <tr class="">
                        <th>Date</th>
                        <th>Status</th>
                        <th>Customer Email</th>
                        <th>Cost</th>
                    </tr>
                </thead>

                <tbody>
                    <tr class="">
                        <td>{{ $created_at }}</td>
                        <td>{{ $status }}</td>
                        <td>{{ $email }}</td>
                        <td>${{ $cost }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<htmlpagefooter name="page-footer">
    Thank you for your business! We look forward to serving you again.
</htmlpagefooter>

<style>
    .container {
        margin: 0 15px;
    }
    .container-fluid {
        margin: 0;
    }
    .row {
        margin-left: -0.75rem;
        margin-right: -0.75rem;
    }
    .center {
        text-align: center;
        margin-left: auto;
        margin-right: auto;
    }
    #transaction-container {
        margin-top: 25px;
        margin-bottom: 50px;
        background: #f5f5f5;
        border: 1px solid #eceeef;
    }
    table, thead, tbody {
        width: 100%;
    }
    thead {
        border-bottom: 1px solid #eceee0;
    }
    th, td {
        text-align: center;
    }
</style>