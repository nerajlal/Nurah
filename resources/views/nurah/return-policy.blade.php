@extends('nurah.layouts.app')

@section('title', 'Return & Refund Policy - Nurah Perfumes')

@push('styles')
<style>
    .page-hero {
        position: relative;
        height: 40vh;
        min-height: 300px;
        background-color: var(--black);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .hero-content {
        position: relative;
        color: var(--white);
        text-align: center;
        padding: 20px;
        z-index: 2;
    }

    .hero-title {
        font-family: 'Playfair Display', serif;
        font-size: 42px;
        font-weight: 700;
        margin-bottom: 10px;
    }

    .hero-subtitle {
        font-size: 16px;
        opacity: 0.9;
        max-width: 600px;
        margin: 0 auto;
    }

    .policy-section {
        padding: 80px 20px;
        max-width: 1000px;
        margin: 0 auto;
    }

    .policy-card {
        background: var(--white);
        border: 1px solid var(--border);
        border-radius: 12px;
        padding: 40px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.03);
    }
    
    .policy-content h2 {
        font-family: 'Playfair Display', serif;
        font-size: 24px;
        margin-top: 30px;
        margin-bottom: 15px;
        color: var(--black);
        font-weight: 700;
        border-bottom: 1px solid var(--border);
        padding-bottom: 10px;
    }
    
    .policy-content h2:first-child {
        margin-top: 0;
    }
    
    .policy-content p {
        margin-bottom: 15px;
        line-height: 1.8;
        color: var(--text);
        font-size: 15px;
    }
    
    .policy-content ul {
        margin-bottom: 20px;
        padding-left: 20px;
    }
    
    .policy-content li {
        margin-bottom: 10px;
        color: var(--text);
        line-height: 1.6;
    }

    .highlight-box {
        background: var(--bg-light);
        padding: 20px;
        border-radius: 8px;
        border-left: 4px solid var(--black);
        margin: 20px 0;
    }

    .contact-link {
        color: var(--black);
        text-decoration: underline;
        font-weight: 600;
    }

    @media(max-width: 768px) {
        .hero-title {
            font-size: 32px;
        }
        .policy-card {
            padding: 25px;
        }
    }
</style>
@endpush

@section('content')
    <!-- Hero Header -->
    <div class="page-hero">
        <div class="hero-content">
            <h1 class="hero-title">Returns & Refunds</h1>
            <p class="hero-subtitle">Simple, transparent, and customer-friendly.</p>
        </div>
    </div>

    <!-- Content -->
    <section class="policy-section">
        <div class="policy-card">
            <div class="policy-content">
                <p>We want you to be completely satisfied with your purchase. If for any reason you are not happy, we have a straightforward return process in place.</p>

                <h2>Return Window</h2>
                <p>You may initiate a return within <strong>7 days</strong> of receiving your order. We check the delivery date from our courier partner's tracking system.</p>

                <h2>Eligibility Criteria</h2>
                <ul>
                    <li>The product must be unused and in the same condition as received.</li>
                    <li>It must be in the original packaging with the seal intact.</li>
                    <li>We require the receipt or proof of purchase included in the box.</li>
                </ul>

                <h2>Damaged or Defective Items</h2>
                <p>In the unlikely event that your product arrives damaged or leaking, please take photos/videos and email us within 24 hours of delivery. We will issue a free replacement immediately.</p>

                <h2>Refund Process (COD Orders)</h2>
                <p>Since all our orders are Cash on Delivery, we cannot refund to the original source. Instead, refunds are processed securely via Bank Transfer or UPI.</p>
                <div class="highlight-box">
                    <strong>Steps for Refund:</strong>
                    <ol style="margin-top: 10px; margin-left: 20px;">
                        <li>Our team approves the return pickup.</li>
                        <li>Courier picks up the item within 2-3 days.</li>
                        <li>Once it reaches our warehouse and passes QC, we ask for your Bank/UPI details.</li>
                        <li>Refund is initiated within 24 hours of QC approval.</li>
                    </ol>
                </div>

                <h2>Return Shipping</h2>
                <p>For damaged or defective items, reverse shipping is free. For returns due to personal preference (e.g., "changed mind"), a nominal shipping fee of ₹100 will be deducted from the refund amount.</p>

                <h2>Contact Us</h2>
                <p>To initiate a return, please write to us at <a href="mailto:support@nurahperfumes.com" class="contact-link">support@nurahperfumes.com</a> with your Order ID.</p>
            </div>
        </div>
    </section>
@endsection
