<?php
session_start();
include 'config/database.php';
$conn = connectDB();
// Any database operations if needed
closeDB($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Programming Books Store</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/user/headers.css" rel="stylesheet">
    <link href="assets/css/user/footer.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
    <!-- Header -->
    <?php include 'includes/header.php'; ?>

    <!-- About Us Content -->
    <div class="container py-5">
        <h1 class="text-center mb-4">Terms of Service</h1>
        <p class="text-center mb-4">Welcome to Programming Books for Every Developer. By accessing or using our website and services,
            <br> 
            you agree to comply with and be bound by these Terms of Service. 
            Please read them carefully.</p>
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h2 class="mb-3">Acceptance of Terms</h2>
                        <p>By using the website Programming Books for Every Developer (accessible at [your website URL]), you agree to these Terms of Service, our Privacy Policy, and any additional policies or guidelines we may provide. If you do not agree to these Terms, please do not use the website.</p>

                        <h2 class="mb-3 mt-4">Changes to Terms</h2>
                        <p>We reserve the right to update or modify these Terms at any time. Any changes will be posted on this page with an updated "Effective Date." It is your responsibility to review these Terms periodically for changes. Your continued use of the website after such changes constitutes acceptance of the new Terms.</p>

                        <h2 class="mb-3 mt-4">Services</h2>
                        <p>We provide an online platform for purchasing books related to programming, software development, and other technical subjects ("Products"). Our website allows users to browse, purchase, and download books, subject to availability and applicable laws.</p>

                        <h2 class="mb-3 mt-4">Account Creation</h2>
                        <p>To use certain features of the website, such as purchasing products, you may be required to create an account. You agree to:
                        <br>
                        <br>
                        - Provide accurate, current, and complete information during the registration process.
                        <br>
                        <br>
                        - Maintain the confidentiality of your account login credentials and are responsible for all activities that occur under your account.
                        <br>
                        <br>
                        - Notify us immediately of any unauthorized use of your account.</p>
                        <h2 class="mb-3 mt-4">Product Information and Availability</h2>
                        <p>We strive to provide accurate descriptions of our Products, including titles, authors, formats, and pricing. However, we do not warrant the accuracy, completeness, or reliability of any information on the website. We reserve the right to update, modify, or discontinue any Products without prior notice.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="assets/js/script.js"></script>
</body>

</html>