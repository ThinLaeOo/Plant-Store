<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plant Tinder - Go Green</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
        }
        
        .hero-section {
            background-color: #2e8b57;
            color: white;
            padding: 60px 0;
        }
        
        .plant-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: transform 0.3s;
            margin: 0 15px;
            width: 300px;
            flex: 0 0 auto;
        }
        
        .plant-card:hover {
            transform: translateY(-10px);
        }
        
        .plant-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        
        .plant-card-body {
            padding: 20px;
        }
        
        .plant-name {
            font-weight: bold;
            font-size: 1.2rem;
            margin-bottom: 5px;
        }
        
        .plant-scientific {
            color: #6c757d;
            font-style: italic;
            font-size: 0.9rem;
        }
        
        .plant-description {
            margin: 10px 0;
            font-size: 0.9rem;
        }
        
        .plant-rating {
            color: #ffc107;
        }
        
        .carousel-container {
            position: relative;
        }
        
        .carousel-inner {
            overflow-x: auto;
            scroll-behavior: smooth;
            -webkit-overflow-scrolling: touch;
            padding: 20px 0;
        }
        
        .carousel-track {
            display: flex;
            gap: 20px;
        }
        
        .carousel-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: white;
            border: none;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
            z-index: 10;
            cursor: pointer;
        }
        
        .carousel-btn.prev {
            left: 10px;
        }
        
        .carousel-btn.next {
            right: 10px;
        }
        
        .section-title {
            position: relative;
            display: inline-block;
            margin-bottom: 30px;
        }
        
        .section-title:after {
            content: '';
            position: absolute;
            width: 50%;
            height: 3px;
            background-color: #2e8b57;
            bottom: -10px;
            left: 0;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Plant Tinder</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">My photo</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container text-center">
            <h1>Go green.</h1>
            <p class="lead">The world of plants</p>
            <p>Discover everything you need to swear about your plants, treat them with kindness and they will take care of you.</p>
        </div>
    </section>

    <!-- Plants Carousel -->
    <section class="container my-5">
        <h2 class="section-title">Top 5 of the most</h2>
        
        <div class="carousel-container">
            <button class="carousel-btn prev"><i class="fas fa-chevron-left"></i></button>
            <button class="carousel-btn next"><i class="fas fa-chevron-right"></i></button>
            
            <div class="carousel-inner">
                <div class="carousel-track">
                    <!-- Plant Card 1 -->
                    <div class="plant-card">
                        <img src="https://images.unsplash.com/photo-1598880940080-ff9a29891b85" alt="Crassula Ovata">
                        <div class="plant-card-body">
                            <div class="plant-name">Crassula Ovata</div>
                            <div class="plant-scientific">Jade Plant</div>
                            <div class="plant-description">I see more answers satisfying with doctors put or while flowers.</div>
                            <div class="plant-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <span class="ms-2">Bruce Irvine - 4</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Plant Card 2 -->
                    <div class="plant-card">
                        <img src="https://images.unsplash.com/photo-1520412099551-62b6bafeb5bb" alt="Monstera Deliciosa">
                        <div class="plant-card-body">
                            <div class="plant-name">How is Maya in</div>
                            <div class="plant-scientific">Monstera Deliciosa</div>
                            <div class="plant-description">A1 towards beautiful leaves with natural holes.</div>
                            <div class="plant-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span class="ms-2">4.5</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Plant Card 3 -->
                    <div class="plant-card">
                        <img src="https://images.unsplash.com/photo-1517191434949-5e90cd67d2b6" alt="Ficus Lyrata">
                        <div class="plant-card-body">
                            <div class="plant-name">Fiddle Leaf Fig</div>
                            <div class="plant-scientific">Ficus Lyrata</div>
                            <div class="plant-description">Beautiful large leaves that make a statement.</div>
                            <div class="plant-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <span class="ms-2">4.0</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Plant Card 4 -->
                    <div class="plant-card">
                        <img src="https://images.unsplash.com/photo-1597848212624-a19eb35e2651" alt="Chlorophytum Comosum">
                        <div class="plant-card-body">
                            <div class="plant-name">Spider Plant</div>
                            <div class="plant-scientific">Chlorophytum Comosum</div>
                            <div class="plant-description">Easy to care for and produces baby spider plants.</div>
                            <div class="plant-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="ms-2">5.0</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Plant Card 5 -->
                    <div class="plant-card">
                        <img src="https://images.unsplash.com/photo-1598880343358-5b6cd6415c4f" alt="Sansevieria">
                        <div class="plant-card-body">
                            <div class="plant-name">Snake Plant</div>
                            <div class="plant-scientific">Sansevieria</div>
                            <div class="plant-description">Nearly indestructible and purifies the air.</div>
                            <div class="plant-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span class="ms-2">4.7</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const track = document.querySelector('.carousel-track');
            const nextBtn = document.querySelector('.carousel-btn.next');
            const prevBtn = document.querySelector('.carousel-btn.prev');
            const cards = document.querySelectorAll('.plant-card');
            const cardWidth = cards[0].offsetWidth + 20; // width + margin
            
            let currentPosition = 0;
            const maxPosition = (cards.length - 1) * cardWidth;
            
            nextBtn.addEventListener('click', function() {
                if (currentPosition > -maxPosition) {
                    currentPosition -= cardWidth;
                    track.style.transform = `translateX(${currentPosition}px)`;
                }
            });
            
            prevBtn.addEventListener('click', function() {
                if (currentPosition < 0) {
                    currentPosition += cardWidth;
                    track.style.transform = `translateX(${currentPosition}px)`;
                }
            });
            
            // Enable horizontal scrolling with mouse drag
            let isDown = false;
            let startX;
            let scrollLeft;
            
            track.addEventListener('mousedown', (e) => {
                isDown = true;
                startX = e.pageX - track.offsetLeft;
                scrollLeft = track.scrollLeft;
            });
            
            track.addEventListener('mouseleave', () => {
                isDown = false;
            });
            
            track.addEventListener('mouseup', () => {
                isDown = false;
            });
            
            track.addEventListener('mousemove', (e) => {
                if(!isDown) return;
                e.preventDefault();
                const x = e.pageX - track.offsetLeft;
                const walk = (x - startX) * 2; //scroll-fast
                track.scrollLeft = scrollLeft - walk;
            });
        });
    </script>
</body>
</html>