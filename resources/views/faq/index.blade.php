@include('layouts.header')

<style>
    /* FAQ Page Styles */
    .faq-section {
        background-color: #f9f9f9;
        padding: 60px 0;
    }

    .faq-container {
        max-width: 800px;
        margin: 0 auto;
    }

    .faq-item {
        background: #ffffff;
        border: 1px solid #e6e6e6;
        border-radius: 8px;
        margin-bottom: 30px;
        overflow: hidden;
        box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
    }

    .faq-question {
        background-color: #ffd700;
        color: #333;
        padding: 15px;
        margin: 0;
        border-top-left-radius: 8px;
        border-top-right-radius: 8px;
    }

    .faq-answer {
        padding: 25px;
        color: #555;
    }

    .faq-item:hover {
        transform: translateY(-5px);
        box-shadow: 0px 15px 30px rgba(0, 0, 0, 0.1);
    }
</style>

<section class="faq-section">
    <div class="container">
        <div class="faq-container">
            <div class="faq-item">
                <h3 class="faq-question">How do I place an order?</h3>
                <div class="faq-answer">
                    To place an order, please follow these steps:
                    <ol>
                        <li>Visit our website and browse our <a href="/" style="color: #0091ff">Homepage</a></li>
                        <li>Select <a href="/orders" style="color: #0091ff">Place Your Order</a></li> button on the header section of the page.</li>
                        <li>From the page fill in your details.</li>
                        <li>Review your order details and confirm the purchase by clicking on place your order button at the end of the form.</li>
                        <li>Order has been placed, you will receive a confirmation call from us.</li>
                    </ol>
                    If you encounter any difficulties during the ordering process, feel free to contact our customer support team for assistance.
                </div>
            </div>     
            
            <div class="faq-item">
                <h3 class="faq-question">What payment methods do you accept?</h3>
                <div class="faq-answer">
                    We accept various payment methods including credit cards (Visa, MasterCard, American Express), PayPal, Mpesa and bank transfers.
                </div>
            </div>

            <div class="faq-item">
                <h3 class="faq-question">How can I contact customer support?</h3>
                <div class="faq-answer">
                    You can contact our customer support team via email at emoredesigns39@gmail.com or by phone at +254-713-954-944. We are available 24/7 to assist you.
                </div>
            </div>

            <div class="faq-item">
                <h3 class="faq-question">Do you offer refunds?</h3>
                <div class="faq-answer">
                    Yes, we offer refunds for products that meet our refund policy criteria. Please refer to our <a href="/refund-policy" style="color: #0091ff">refund policy</a> page for more information.
                </div>
            </div>                   

            <div class="faq-item">
                <h3 class="faq-question">Can I cancel my subscription?</h3>
                <div class="faq-answer">
                    Yes, you can cancel your subscription at any time. Simply go to your account settings and follow the instructions for cancellation on your software solution admin panel.
                </div>
            </div>
        </div>
    </div>
</section>

@include('layouts.footer')
