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
        <h1 class="text-center mb-4">Privacy Policy</h1>
        <p class="text-center mb-4">At Programming Books for Every Developer, we are committed to protecting your privacy and ensuring that your personal information is handled in a safe and responsible manner. This Privacy Policy outlines the types of information we collect, how we use it, and the steps we take to protect it. By using our website and services, you agree to the terms of this Privacy Policy.
           </p>
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h2 class="mb-3">Information We Collect</h2>
                        <p>We collect the following types of personal information from users of our website:
                            <br>
                            <br>

                        a. Personal Information
                        <br>
                        <br>
                         Registration Information: When you create an account, we may collect your name, email address, shipping address, and phone number.
                        <br>
                        <br>
                        Order Information: When you make a purchase, we collect your billing information (such as credit card details), shipping address, and order history.
                        <br> 
                        <br>
                        Payment Information: We process payments through secure payment gateways, and we may collect payment details (credit card numbers, billing addresses) required for processing payments.</p>

                        <h2 class="mb-3 mt-4">How we use your Information</h2>
                        <p>We use the information we collect for the following purposes:
                            <br>
                            <br>

                        To Process Orders: We use your personal and payment information to process and fulfill orders.
                        <br>
                        <br>
                        To Communicate with You: We may send you order confirmations, shipping notifications, and other communications related to your purchase or account.
                        <br>
                        <br>
                        To Improve Our Services: We use non-personal information, such as usage data and analytics, to improve our website, services, and user experience.
                        <br>
                        <br>
                        To Personalize Your Experience: We use cookies and other tracking technologies to offer tailored content and recommendations based on your preferences.
                        <br>
                        <br>
                        To Respond to Inquiries: If you contact us with a question or request, we use your contact information to respond to your inquiry.</p>

                        <h2 class="mb-3 mt-4">Sharing of your Information</h2>
                        <p>We do not sell, rent, or trade your personal information to third parties. However, we may share your information in the following situations:
                        <br>
                        <br>

                        Service Providers: We may share your personal and payment information with third-party service providers (e.g., payment processors, shipping companies) to complete your order and provide services.
                        <br>
                        <br>
                        Legal Compliance: We may disclose your information if required to do so by law or in response to a valid legal request (e.g., subpoenas, court orders).
                        <br>
                        <br>
                        Business Transfers: In the event of a merger, acquisition, or sale of assets, your personal information may be transferred as part of the transaction.</p>

                        
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