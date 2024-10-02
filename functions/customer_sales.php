<?php

// Menggunakan join untuk menggabungkan tabel
function getCustomerSales($conn) {
    $sql = "SELECT t.customer_name, t.customer_address, u.username AS sales_by, u.email AS sales_mail
            FROM transactions t
            JOIN users u ON t.Sales = u.username";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $sales = [];
        while ($row = $result->fetch_assoc()) {
            $sales[] = $row;
        }
        return $sales;
    } else {
        return [];
    }
}
?>
