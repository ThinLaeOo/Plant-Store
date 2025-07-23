<?php 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rain Forest Plant Shop</title>
    <link rel="stylesheet" href="/CSS/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
</head>

<body>

<!-- 1st section -->

    <div class="fSlide">
        <div class="row">
            <div class="col-md-12">
                <?php require_once "navbar.php" ?>
            </div>
        </div>

        <div class="fscontent">
            <div class="left">
                <h4>AMAZING PLANTS</h4>
                <h1><span class="rain">RAIN</span><br><span class="forest">FOREST</span></h1>
                <p>There is a moment in the life of any aspiring gardener that it is time to buy their first plant.</p>
                <a href="#" class="learn-btn">LEARN MORE</a>
            </div>
        
        </div>
    </div>

<!-- 2nd section -->
    <div class="mid">
        <div class="midSlide">

            <div class="slide">

                
                <div class="item" style="background-image: url(/plantStoreImages/WebsitePics/indoorPlants.png);">
                    <div class="content">
                        <div class="name">Indoor Plants</div>
                        <div class="des">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, eum!</div>
                        <button>See More</button>
                    </div>
                </div>
                <div class="item" style="background-image: url(/plantStoreImages/WebsitePics/bonsaitree.png);">
                    <div class="content">
                        <div class="name">Bonsai Trees</div>
                        <div class="des">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, eum!</div>
                        <button>See More</button>
                    </div>
                </div>
                <div class="item" style="background-image: url(/plantStoreImages/WebsitePics/bloomplant.png);">
                    <div class="content">
                        <div class="name">Blooming Plants</div>
                        <div class="des">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, eum!</div>
                        <button>See More</button>
                    </div>
                </div>
                <div class="item" style="background-image: url(https://i.ibb.co/Bq4Q0M8/img4.jpg);">
                    <div class="content">
                        <div class="name">Air-purifying Plants</div>
                        <div class="des">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, eum!</div>
                        <button>See More</button>
                    </div>
                </div>
                <div class="item" style="background-image: url(https://i.ibb.co/Bq4Q0M8/img4.jpg);">
                    <div class="content">
                        <div class="name">Self-watering Plants</div>
                        <div class="des">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, eum!</div>
                        <button>See More</button>
                    </div>
                </div>
                <div class="item" style="background-image: url(plantStoreImages/WebsitePics/petplant.png);">
                    <div class="content">
                        <div class="name">Pet-friendly Plants</div>
                        <div class="des">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, eum!</div>
                        <button>See More</button>
                    </div>
                </div>
                <div class="item" style="background-image: url(https://i.ibb.co/RNkk6L0/img6.jpg);">
                    <div class="content">
                        <div class="name">Outdoor Plants</div>
                        <div class="des">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, eum!</div>
                        <button>See More</button>
                    </div>
                </div>

            </div>
        
            <div class="button">
                <button class="prev" aria-label="Previous slide"><i class="fa-solid fa-arrow-left"></i></button>
                <button class="next" aria-label="Next slide"><i class="fa-solid fa-arrow-right"></i></button>
            </div>
        </div>

    </div>
    <script>
        let next = document.querySelector(".next");
        let prev = document.querySelector(".prev");

        next.addEventListener("click", function () {
        let items = document.querySelectorAll(".item");
        document.querySelector(".slide").appendChild(items[0]);
        });

        prev.addEventListener("click", function () {
        let items = document.querySelectorAll(".item");
        document.querySelector(".slide").prepend(items[items.length - 1]); // here the length of items = 6
        });
    </script>

<!-- 3rd section -->
    <div class="butn">
        <section class="container my-5">
        <h2 class="section-title">Top 5 Best Seller</h2>
        
        <div class="carousel-container">
            <button class="carousel-btn prev"><i class="fas fa-chevron-left"></i></button>
            <button class="carousel-btn next"><i class="fas fa-chevron-right"></i></button>
            
            <div class="carousel-inner">
                <div class="carousel-track">
                    <!-- Plant Card 1 -->
                    <div class="plant-card">
                        <img src="/plantStoreImages/spiderplant.png" alt="Crassula Ovata">
                        <div class="plant-card-body">
                            <div class="plant-name">Crassula Ovata</div>
                            <div class="plant-scientific">Jade Plant</div>
                            <div class="plant-description">I see more answers satisfying with doctors put or while flowers.</div>
                            
                        </div>
                    </div>
                    
                    <!-- Plant Card 2 -->
                    <div class="plant-card">
                        <img src="https://images.unsplash.com/photo-1520412099551-62b6bafeb5bb" alt="Monstera Deliciosa">
                        <div class="plant-card-body">
                            <div class="plant-name">How is Maya in</div>
                            <div class="plant-scientific">Monstera Deliciosa</div>
                            <div class="plant-description">A1 towards beautiful leaves with natural holes.</div>
                            
                        </div>
                    </div>
                    
                    <!-- Plant Card 3 -->
                    <div class="plant-card">
                        <img src="https://images.unsplash.com/photo-1517191434949-5e90cd67d2b6" alt="Ficus Lyrata">
                        <div class="plant-card-body">
                            <div class="plant-name">Fiddle Leaf Fig</div>
                            <div class="plant-scientific">Ficus Lyrata</div>
                            <div class="plant-description">Beautiful large leaves that make a statement.</div>
                            
                        </div>
                    </div>
                    
                    <!-- Plant Card 4 -->
                    <div class="plant-card">
                        <img src="https://images.unsplash.com/photo-1597848212624-a19eb35e2651" alt="Chlorophytum Comosum">
                        <div class="plant-card-body">
                            <div class="plant-name">Spider Plant</div>
                            <div class="plant-scientific">Chlorophytum Comosum</div>
                            <div class="plant-description">Easy to care for and produces baby spider plants.</div>
                            
                        </div>
                    </div>
                    
                    <!-- Plant Card 5 -->
                    <div class="plant-card">
                        <img src="https://images.unsplash.com/photo-1598880343358-5b6cd6415c4f" alt="Sansevieria">
                        <div class="plant-card-body">
                            <div class="plant-name">Snake Plant</div>
                            <div class="plant-scientific">Sansevieria</div>
                            <div class="plant-description">Nearly indestructible and purifies the air.</div>
                            
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
    </div>

    <!-- RarePLNTS Section -->
    <section class="rareplnts">
    <div class="content">
        <h1>RarePLNTS</h1>
        <p>
        Rare plants are the real gems from our online plant shop. This is the place
        where you can find the most special plant species and special varieties from all over the world.
        These plants are so special that there are often very few in stock. So be quick...
        </p>
        <button class="btn">Shop all Rare Plants</button>

        <div class="note">
        <img src="/plantStoreImages/WebsitePics/rareplt1.png" alt="Leaf" />
        <p>
            Variegation is extremely rare, as it is a difficult process to create genetic mutations!
        </p>
        </div>
    </div>

    <div class="product-card">
        <img src="/plantStoreImages/WebsitePics/rareplt3.png" alt="Alocasia" />
        <div class="product-info">
        <h3>Alocasia</h3>
        <p>Frydek Variegata</p>
        <p>€22.95</p>
        <button class="btn small">Shop now</button>
        </div>
    </div>

    <div class="image-right">
        <img src="/plantStoreImages/WebsitePics/rareplt2.png" alt="Hand Holding Plant" />
    </div>
    </section>
    

    <!-- 5th section  -->
    <section class="category-section">
        <div class="category-card" style="background-image: url('images/houseplants.jpg');">
            <div class="overlay">
            <h2>Seed Packs</h2>
            <button>See all</button>
            </div>
        </div>

        <div class="category-card" style="background-image: url('images/pots.jpg');">
            <div class="overlay">
            <h2>Pots</h2>
            <button>See all</button>
            </div>
        </div>

        <div class="category-card" style="background-image: url('images/care.jpg');">
            <div class="overlay">
            <h2>Care</h2>
            <button>See all</button>
            </div>
        </div>

        <div class="category-card" style="background-image: url('images/accessories.jpg');">
            <div class="overlay">
            <h2>Accessories</h2>
            <button>See all</button>
            </div>
        </div>
    </section>

    <!-- BabyPLNTS Section -->
    <section class="babyplnts">
    <div class="image-left">
        <img src="/plantStoreImages/WebsitePics/bbyplt1.png" alt="Hand Holding Plant" />
    </div>

    <div class="content">
        <h1>BabyPLNTS</h1>
        <p>
        Is your room already full of plants, but would you like even more green in your home?
        Then baby plants are ideal...
        </p>
        <button class="btn">Shop all BabyPLNTS</button>

        <div class="note">
        <img src="/plantStoreImages/WebsitePics/bbyplt2.png" alt="Constellation Leaf" />
        <p>Named for its starry splashes that twinkle like tiny constellations.</p>
        </div>
    </div>

    <div class="product-card">
        <img src="/plantStoreImages/WebsitePics/bbyplt3.png" alt="Monstera" />
        <div class="product-info">
        <h3>Monstera</h3>
        <p>Thai Constellation</p>
        <p>€22.45</p>
        <button class="btn small">Shop now</button>
        </div>
    </div>
    </section>


    <nav class="footer">
        <div class="row">
            <div class="col-md-12">
                <?php require_once "footer.php" ?>
            </div>
        </div>
    </nav>

</body>
</html>