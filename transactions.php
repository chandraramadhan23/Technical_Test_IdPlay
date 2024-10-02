<?php
include 'includes/sidebar.php';
include 'config/db.php';
include 'functions/transactions.php';

$transactions = getTransactions($conn);
?>

<div class="title">
    <h1>Transactions Page</h1>
    <p>Menampilkan table transactions</p>
</div>

<table border="1" cellpadding="10" cellspacing="0" style="width: 100%; margin-top: 20px;">
    <thead>
        <tr>
            <th>No.</th>
            <th>Customer Name</th>
            <th>Customer Address</th>
            <th>Recurring</th>
            <th>Sales</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($transactions as $index => $trans): ?>
            <tr>
                <td><?php echo $index + 1; ?></td>
                <td><?php echo ($trans['customer_name']); ?></td>
                <td><?php echo ($trans['customer_address']); ?></td>
                <td><?php echo ($trans['recurring']); ?></td>
                <td><?php echo ($trans['sales']); ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php
include 'includes/footer.php';
?>