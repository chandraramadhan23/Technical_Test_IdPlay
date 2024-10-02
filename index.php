<?php
include 'includes/sidebar.php';
include 'config/db.php';
include 'functions/customer_sales.php';

$salesData = getCustomerSales($conn);
?>

<div class="title">
    <h1>Home Page</h1>
    <p>Multidimensi array dari table users dan table transactions.</p>
</div>

<table border="1" cellpadding="5" cellspacing="0">
    <thead>
        <tr>
            <th>No.</th>
            <th>Customer Name</th>
            <th>Customer Address</th>
            <th>Sales By</th>
            <th>Sales Mail</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($salesData as $index => $sale): ?>
            <tr>
                <td><?php echo $index + 1; ?></td>
                <td><?php echo ($sale['customer_name']); ?></td>
                <td><?php echo ($sale['customer_address']); ?></td>
                <td><?php echo ($sale['sales_by']); ?></td>
                <td><?php echo ($sale['sales_mail']); ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php
include 'includes/footer.php';
?>
