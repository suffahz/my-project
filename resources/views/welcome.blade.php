@extends('layouts.app')

@section('title', 'Welcome')

@section('welcome-styles')
    /* Hero Section */
    .hero {
        background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-4.0.3');
        background-size: cover;
        background-position: center;
        height: 100vh;
        display: flex;
        align-items: center;
        color: white;
        text-align: center;
    }

    .hero-content h1 {
        font-size: 3.5rem;
        font-weight: 700;
        margin-bottom: 1rem;
    }

    .hero-content p {
        font-size: 1.2rem;
        margin-bottom: 2rem;
    }

    /* About Section */
    .about-section {
        padding: 5rem 0;
        background-color: #f8f9fa;
    }

    .about-content {
        padding: 2rem;
    }

    .about-image {
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    /* Features Section */
    .features-section {
        padding: 5rem 0;
    }

    .feature-card {
        padding: 2rem;
        text-align: center;
        transition: all 0.3s ease;
        border-radius: 10px;
        margin-bottom: 2rem;
    }

    .feature-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .feature-icon {
        font-size: 2.5rem;
        color: var(--secondary-color);
        margin-bottom: 1rem;
    }

    /* News Section */
    .news-section {
        padding: 5rem 0;
        background-color: #f8f9fa;
    }

    .news-card {
        border-radius: 10px;
        overflow: hidden;
        margin-bottom: 2rem;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .news-image {
        height: 200px;
        object-fit: cover;
    }

    /* Contact Section */
    .contact-section {
        padding: 5rem 0;
    }

    .contact-info {
        background-color: var(--primary-color);
        color: white;
        padding: 2rem;
        border-radius: 10px;
    }

    .contact-form {
        background-color: white;
        padding: 2rem;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .hero-content h1 {
            font-size: 2.5rem;
        }
        
        .hero-content p {
            font-size: 1rem;
        }
    }
@endsection

@section('content')
    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content" data-aos="fade-up">
                <h1>Welcome to Excellence in Education</h1>
                <p>Nurturing minds, Shaping futures, Building tomorrow's leaders</p>
                <a href="#about" class="btn btn-primary btn-lg">Learn More</a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-4.0.3" alt="About Us" class="img-fluid about-image">
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="about-content">
                        <h2>About Our School</h2>
                        <p>Founded in 1990, our school has been committed to providing quality education and fostering academic excellence. We believe in creating an environment where students can thrive both academically and personally.</p>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i> State-of-the-art facilities</li>
                            <li><i class="fas fa-check text-success me-2"></i> Experienced faculty members</li>
                            <li><i class="fas fa-check text-success me-2"></i> Comprehensive curriculum</li>
                            <li><i class="fas fa-check text-success me-2"></i> Focus on holistic development</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="features-section">
        <div class="container">
            <h2 class="text-center mb-5" data-aos="fade-up">Why Choose Us</h2>
            <div class="row">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <h3>Quality Education</h3>
                        <p>We provide high-quality education that prepares students for future success.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h3>Expert Faculty</h3>
                        <p>Our experienced teachers are dedicated to student success.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-flask"></i>
                        </div>
                        <h3>Modern Facilities</h3>
                        <p>State-of-the-art facilities for enhanced learning experience.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- News Section -->
    <section id="news" class="news-section">
        <div class="container">
            <h2 class="text-center mb-5" data-aos="fade-up">Latest News</h2>
            <div class="row">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="news-card">
                        <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-4.0.3" alt="News 1" class="img-fluid news-image">
                        <div class="p-3">
                            <h4>Annual Sports Day</h4>
                            <p>Join us for our annual sports day celebration...</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="news-card">
                        <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-4.0.3" alt="News 2" class="img-fluid news-image">
                        <div class="p-3">
                            <h4>Science Fair 2024</h4>
                            <p>Students showcase their innovative projects...</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="news-card">
                        <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-4.0.3" alt="News 3" class="img-fluid news-image">
                        <div class="p-3">
                            <h4>Parent-Teacher Meeting</h4>
                            <p>Schedule for upcoming parent-teacher meeting...</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <h2 class="text-center mb-5" data-aos="fade-up">Contact Us</h2>
            <div class="row">
                <div class="col-lg-4" data-aos="fade-right">
                    <div class="contact-info">
                        <h3>Get in Touch</h3>
                        <p><i class="fas fa-map-marker-alt me-2"></i> 123 School Street, City, Country</p>
                        <p><i class="fas fa-phone me-2"></i> +1 234 567 890</p>
                        <p><i class="fas fa-envelope me-2"></i> info@schoolname.com</p>
                        <div class="social-links mt-4">
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8" data-aos="fade-left">
                    <div class="contact-form">
                        <form>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <input type="text" class="form-control" placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <input type="email" class="form-control" placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="Subject" required>
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" rows="5" placeholder="Your Message" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
