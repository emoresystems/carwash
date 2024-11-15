@include('layouts.header')

<style>
    /* Refund Policy Page Styles */
    .refund-policy-section {
        background-color: #f9f9f9;
        padding: 60px 0;
    }

    .refund-policy-container {
        max-width: 800px;
        margin: 0 auto;
    }

    .refund-policy-item {
        background: #ffffff;
        border: 1px solid #e6e6e6;
        border-radius: 8px;
        margin-bottom: 30px;
        overflow: hidden;
        box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
    }

    .refund-policy-header {
        background-color: #ffd700;
        color: #333;
        padding: 15px;
        margin: 0;
        border-top-left-radius: 8px;
        border-top-right-radius: 8px;
    }

    .refund-policy-content {
        padding: 25px;
        color: #555;
    }

    .refund-policy-item:hover {
        transform: translateY(-5px);
        box-shadow: 0px 15px 30px rgba(0, 0, 0, 0.1);
    }
</style>

<section class="refund-policy-section">
    <div class="container">
        <div class="refund-policy-container">
            <div class="refund-policy-item">
                <h2 class="refund-policy-header">Refund Policy</h2>
                <div class="refund-policy-content">
                    <p>
                        At Emore, customer satisfaction is our top priority. We strive to provide high-quality software and graphic design services to our clients. However, we understand that there may be circumstances where a refund is necessary. Please review our refund policy below for more information on refund eligibility, procedures, and timelines.
                    </p>
                </div>
            </div>

            <div class="refund-policy-item">
                <h3 class="refund-policy-header">Eligibility for Refund</h3>
                <div class="refund-policy-content">
                    <p>
                        To be eligible for a refund, the following conditions must be met:
                    </p>
                    <ul>
                        <li>The refund request must be made within 30 days of the order date.</li>
                        <li>The product or service purchased must be defective or not as described.</li>
                        <li>The issue must be reported to our customer support team and documented for review.</li>
                    </ul>
                </div>
            </div>

            <div class="refund-policy-item">
                <h3 class="refund-policy-header">Refund Process</h3>
                <div class="refund-policy-content">
                    <p>
                        To request a refund, please follow these steps:
                    </p>
                    <ol>
                        <li>Contact our customer support team to initiate the refund request.</li>
                        <li>Provide detailed information about the issue and reasons for the refund.</li>
                        <li>Our team will review your request and determine eligibility for a refund.</li>
                        <li>If approved, the refund will be processed within 5 business days.</li>
                    </ol>
                </div>
            </div>

            <div class="refund-policy-item">
                <h3 class="refund-policy-header">Contact Us</h3>
                <div class="refund-policy-content">
                    <p>
                        If you have any questions or concerns about our refund policy, please contact us at emoredesigns39@gmail.com. Our customer support team is available to assist you and address any issues you may have.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

@include('layouts.footer')
