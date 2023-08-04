<?php @include 'header.php'; ?>

<!-- Inner Banner -->
<section class="inner-banner-nbg pt-40 bg-off-white-100">
    <div class="custom-container mx-auto flex flex-wrap items-center justify-between">
        <div class="w-full xl:w-7/12">
            <span class="green-label">NEws & Media</span>
            <h2 class="">Latest News & Media</h2>            
            <p class="opacity-50 font-medium leading-7 text-black mt-4">Yorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim</p>
            <form class="flex flex-wrap items-center justify-between mt-20">
                <input type="text" name="" id="" placeholder="Search Our News  & Media" />
                <button class="btn">
                    Search news & media
                    <svg xmlns="http://www.w3.org/2000/svg" width="7" height="11" viewBox="0 0 7 11" fill="none">
                        <path d="M1.00012 1.5L5.00012 5.5L1 9.5" stroke="white" stroke-width="2"/>
                    </svg>
                </button>
            </form>
        </div>
        <div class="w-full xl:w-5/12">
            <img src="./assets/images/internal-banner-logo.png" alt="" class="max-w-5xl md:max-w-md sm:max-w-sm w-full my-8 mx-auto" />
        </div>
    </div>
</section>

 <!-- Latest News -->
 <section class="latest-news bg-off-white-100">
    <div class="custom-container">
        <div class="news-top">
            <h4>Featured News & Media</h4>
        </div>
        
        <div class="news-feature-data"> 
            <!-- Featured News -->
            <div class="group">
                <div class="grid-view view featured-news news-wrap">
                    <div class="news-pic block">
                        <img src="./assets/images/featured-news.jpg" alt="Featured Image" width="100%" />
                    </div>
                    <div class="news-content xl:px-8">
                        <div class="news-top-area">
                            <span class="badage news-badage">Student Resources</span>
                            <span class="date">18th April, 2023</span>
                        </div>
                        <h5 class="news-title">Could 2023 be the bumper year we've been waiting for?</h5>
                        <p class="news-desc">The 2023 sugarcane crush is just weeks away and once again growers are heading into harvest with a sense of trepidation and optimism.While Queensland's sugar mills are yet to release their official crop estimates.</p>
                    </div>
                </div>
            </div> 
            <!-- Recent News -->
            <div>                
                <div class="view list-view recent-news news-wrap">
                    <div class="news-pic w-full md:w-1/2 block">
                        <img class="w-full" src="./assets/images/tracktor.jpg" alt="Featured Image" />
                    </div>
                    <div class="news-content w-full md:w-1/2 md:pl-8">
                        <div class="news-top-area">
                            <span class="badage news-badage">Learn About Sugarcane</span>
                        </div>
                        <h6 class="news-title">Is government failing Australians on fire ants?</h6>
                    </div>
                </div>
                
                <div class="view list-view recent-news news-wrap">
                    <div class="news-pic w-full md:w-1/2 block">
                        <img class="w-full" src="./assets/images/chimani.jpg" alt="Featured Image" />
                    </div>
                    <div class="news-content w-full md:w-1/2 md:pl-8">
                        <div class="news-top-area">
                            <span class="badage news-badage">Projects</span>
                        </div>
                        <h6 class="news-title">Sugarcane - the solution to air travel's emissions problem</h6>
                    </div>
                </div>
                <div class="view list-view last-news recent-news news-wrap">
                    <div class="news-pic w-full md:w-1/2 block">
                        <img class="w-full" src="./assets/images/girl.jpg" alt="Featured Image" />
                    </div>
                    <div class="news-content w-full md:w-1/2 md:pl-8">
                        <div class="news-top-area">
                            <span class="badage news-badage">Industry Information</span>
                        </div>
                        <h6 class="news-title">Changing Face of Grower Representation - Australian Canegrower - August 2022</h6>
                    </div>
                </div>
            </div>
        </div>
                
        <div class="md:hidden my-16">
            <a class="btn btn-green">
                Browse all news & media
                <svg xmlns="http://www.w3.org/2000/svg" width="7" height="11" viewBox="0 0 7 11" fill="none">
                    <path d="M1.00012 1.5L5.00012 5.5L1 9.5" stroke="white" stroke-width="2" />
                </svg>
            </a>
        </div>
        
    </div>
</section>



<?php require('./components/explore-information.php'); ?>

<div class="container mx-auto px-4 md:py-36 py-16">
    <div class="news-top flex justify-between items-center pb-8 xl:pb-14">
        <div class="w-full xl:w-1/2">
            <h4>All News & Media</h4>
        </div>
        <div class="hidden md:flex justify-end w-full xl:w-1/2">
            
        </div>
    </div>
    <div class="grid-view-wrap">
        <?php @include './components/resource-grid-view.php'; ?>
        <?php @include './components/resource-grid-view.php'; ?>
    </div>
    <div class="grid-view-wrap">
        <?php @include './components/resource-grid-view.php'; ?>
        <?php @include './components/resource-grid-view.php'; ?>
    </div>
        
    <ul class="number-pagination">
        <li>
            <a href="#" class="group">
                <svg xmlns="http://www.w3.org/2000/svg" width="5" height="8" viewBox="0 0 5 8" fill="none">
                    <path class="group-hover:stroke-green" d="M4 1L1 4L4 7" stroke="#1E1E1E" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                Previous
            </a>
        </li>
        <li class="active"><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li>
            <a href="#" class="group">
                Next
                <svg xmlns="http://www.w3.org/2000/svg" width="5" height="8" viewBox="0 0 5 8" fill="none">
                    <path class="group-hover:stroke-green" d="M1 7L4 4L1 1" stroke="#1E1E1E" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
        </li>
    </ul>

</div>

<?php @include './components/footer-banner.php'; ?>
<?php @include 'footer.php'; ?>