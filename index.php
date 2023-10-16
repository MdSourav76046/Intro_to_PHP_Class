<?php 
    include_once 'Book.php';
    include_once 'Customer.php';

    $newCustomer = new Customer(1, "Md", "Sourav","mdsourav76046");
    echo $newCustomer."\n"; 
    echo '<br>';


    // $newBook  = new Book(201001, "Life of an Ancient One", "Sourav", 10);
    // echo $newBook;

    $majid = new Customer(23, "Majid", "Bhuiyan", "majid@gmail.com");
    echo $majid;
?>