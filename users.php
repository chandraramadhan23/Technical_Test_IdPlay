<?php
include 'includes/sidebar.php';
include 'config/db.php';
include 'functions/users.php';

$users = getUsers($conn);
?>

<div class="title">
    <h1>Users Page</h1>
    <p>Menampilkan table users.</p>
</div>

<table border="1" cellpadding="10" cellspacing="0" style="width: 100%; margin-top: 20px;">
    <thead>
        <tr>
            <th>No.</th>
            <th>Username</th>
            <th>Password</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $index => $user): ?>
            <tr>
                <td><?php echo $index + 1; ?></td>
                <td><?php echo ($user['username']); ?></td>
                <td><?php echo ($user['password']); ?></td>
                <td><?php echo ($user['email']); ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php
include 'includes/footer.php';
?>