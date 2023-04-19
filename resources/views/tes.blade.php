<x-layouts.app-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Invoice</h1>
                <p>Invoice #123456</p>
                <p>Invoice Date: January 1, 2023</p>
                <p>Due Date: January 31, 2023</p>
                <svg id="barcode"></svg>
            </div>
            <div class="col-md-6 text-right">
                <img src="logo.png" alt="Company Logo" class="logo">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h2>Bill To:</h2>
                <p>John Doe</p>
                <p>123 Main Street</p>
                <p>Anytown, USA 12345</p>
            </div>
            <div class="col-md-6 text-right">
                <h2>Ship To:</h2>
                <p>Jane Smith</p>
                <p>456 Oak Street</p>
                <p>Anytown, USA 12345</p>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>Description</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Product 1</td>
                    <td>2</td>
                    <td>$50.00</td>
                    <td>$100.00</td>
                </tr>
                <tr>
                    <td>Product 2</td>
                    <td>1</td>
                    <td>$75.00</td>
                    <td>$75.00</td>
                </tr>
            </tbody>
        </table>
        <div class="row">
            <div class="col-md-6">
                <h3>Notes:</h3>
                <p>Thank you for your business.</p>
            </div>
            <div class="col-md-6 text-right">
                <h3>Subtotal: $175.00</h3>
                <h3>Tax: $10.50</h3>
                <h3>Total: $185.50</h3>
            </div>
        </div>
    </div>

</x-layouts.app-layout>
