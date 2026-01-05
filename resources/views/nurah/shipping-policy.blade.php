@extends('nurah.layouts.app')

@section('title', 'Shipping Policy - Nurah Perfumes')

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
            <h1 class="hero-title">Shipping Policy</h1>
            <p class="hero-subtitle">Fast, reliable, and handled with care.</p>
        </div>
    </div>

    <!-- Content -->
    <section class="policy-section">
        <div class="policy-card">
            <div class="policy-content">
                <p>At Nurah Perfumes, we maintain the highest standards of delivery to ensure that your fragrances arrive safely and on time.</p>

                <h2>Delivery Areas</h2>
                <p>We deliver to over 10,000 pincodes across India. Whether you reside in a major metropolitan city or a remote location, our logistics partners ensure comprehensive coverage.</p>

                <div class="highlight-box">
                    <strong>Payment Method:</strong> We currently operate exclusively on <span style="font-weight: 800;">Cash on Delivery (COD)</span>. You can pay strictly upon receiving your order.
                </div>

                <h2>Shipping Charges</h2>
                <p>We believe in transparent pricing. We offer <strong>Free Shipping</strong> on all prepaid and COD orders across India. The price you see at checkout is the final price you pay.</p>

                <h2>Delivery Timelines</h2>
                <p>We dispatch orders within 24 hours of confirmation. Delivery timelines depend on your location:</p>
                <ul>
                    <li><strong>Metro Cities (Mumbai, Delhi, Bangalore, etc.):</strong> 3-5 business days</li>
                    <li><strong>Rest of India:</strong> 5-7 business days</li>
                    <li><strong>Remote Locations:</strong> 7-10 business days</li>
                </ul>

                <h2>Tracking Your Order</h2>
                <p>Once your order is shipped, you will receive a tracking ID via Email and SMS. You can use this ID on our logistics partner's website to track your package in real-time.</p>

                <h2>Damaged or Tampered Packages</h2>
                <p>If you suspect that the package has been tampered with or is damaged upon arrival, please refuse the delivery and contact our support team immediately at <a href="mailto:support@nurahperfumes.com" class="contact-link">support@nurahperfumes.com</a>. We will arrange a replacement at no extra cost.</p>
            </div>
        </div>
    </section>
@endsection
