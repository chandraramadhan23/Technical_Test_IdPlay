<?php

function getTransactions($conn) {
    $sql = "SELECT * FROM transactions";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $transactions = [];
        while ($row = $result->fetch_assoc()) {
            $transactions[] = $row;
        }
        return $transactions;
    } else {
        return [];
    }
}
?>