<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nature Place Footer</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .footer {
            background-color:rgb(17, 43, 23);
            padding: 60px 0 20px;
            color: #333;
        }
        
        .footer h5 {
            font-weight: 600;
            margin-bottom: 20px;
            color:rgb(231, 223, 196);
        }
        
        .footer-links {
            list-style: none;
            padding: 0;
        }
        
        .footer-links li {
            margin-bottom: 10px;
        }
        
        .footer-links a {
            color: rgb(231, 223, 196);
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .footer-links a:hover {
            color:rgb(181, 225, 200);
        }
        
        .social-link {
            display: inline-block;
            background:rgb(139, 175, 154);
            color: white;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            text-align: center;
            line-height: 36px;
            margin-right: 10px;
            transition: background 0.3s;
        }
        
        .social-link:hover {
            background: rgb(231, 223, 196);
            color: white;
        }
        
        
        .contact-info {
            color: rgb(231, 223, 196);
            margin-top: 20px;
        }
        
        .ftrquote {
            border-top: 1px solid #ddd;
            padding-top: 20px;
            margin-top: 40px;
            text-align: center;
            color: white;
        }
        
        .instagram-handle {
            font-weight: 600;
            color:rgb(156, 220, 184);
        }
    </style>
</head>
<body>
    <!-- Footer Section -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <!-- Social/Instagram Column -->
                <div class="col-md-4 mb-4">
                    <h5>Follow us on Instagram <span class="instagram-handle">@RainForestPlantStore</span></h5>
                    <div class="social-icons mt-3">
                        <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                
                <!-- Quick Links Column -->
                <div class="col-md-2 mb-4">
                    <h5>About Us</h5>
                    <ul class="footer-links">
                        <li><a href="#">Programs</a></li>
                        <li><a href="#">Events</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Join Our Team</a></li>
                    </ul>
                </div>

                
                <!-- Contact Column -->
                <div class="col-md-3 mb-4">
                    <h5>Send Us A Message →</h5>
                    <div class="contact-info">
                        <p><i class="fas fa-phone me-2"></i> (+95) 942-114-8225</p>
                        <p><i class="fas fa-map-marker-alt me-2"></i> 222 University Road<br>Kamayut, Yangon</p>
                    </div>
                </div>
            </div>
            
            <!-- Copyright Row -->
            <div class="row">
                <div class="col-12">
                    <div class="ftrquote">
                        <p>PLANT MORE AND SAVE THE WORLD. THE BEST PLANT STORE.</p>
                        <p>Deliver across south east asia.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>