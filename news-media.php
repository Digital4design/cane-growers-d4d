<?php @include 'header.php'; ?>

<!-- Inner Banner -->
<section class="inner-banner-nbg pt-40 pb-16 bg-off-white-100">
    <div class="container max-w-screen-2xl mx-auto flex flex-wrap items-center justify-between">
        <div class="w-full lg:w-7/12">
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
        <div class="w-full lg:w-5/12">
            <img src="./assets/images/internal-banner-logo.png" alt="" class="max-w-5xl w-full" />
        </div>
    </div>
</section>

 <!-- Latest News -->
 <section class="latest-news pb-14 lg:pb-24 xl:pb-44 px-4 bg-off-white-100">
    <div class="max-w-screen-2xl container mx-auto">
        <div class="news-top flex justify-between items-center pb-8 xl:pb-14">
            <div class="w-full xl:w-1/2">
                <h2 class="text-2xl xl:text-4xl text-black leading-8 xl:leading-44 capitalize font-serif font-medium">Featured News & Media</h2>
            </div>
        </div>
        
        <div class="news-feature-data flex flex-col md:flex-row gap-x-6"> 
            <!-- Featured News -->
            <div class="md:w-1/2 w-full overflow-hidden group xl:pr-3">
                <div class="grid-view view featured-news news-wrap">
                    <div class="news-pic block">
                        <img src="./assets/images/resource-bg.jpg" alt="Featured Image" width="100%" />
                    </div>
                    <div class="news-content xl:px-8">
                        <div class="news-top-area py-6 xl:pt-10 xl:pb-10">
                            <span class="badage news-badage">News</span>
                            <span class="date font-medium text-black-ish opacity-50 pl-8">22nd April, 2023</span>
                        </div>
                        <h3 class="news-title">Could 2023 be the bumper year we've been waiting for?</h3>
                        <p class="news-desc">The 2023 sugarcane crush is just weeks away and once again growers are heading into harvest with a sense of trepidation and optimism.While Queensland's sugar mills are yet to release their official crop estimates, we...</p>
                    </div>
                </div>
            </div> 
            <!-- Recent News -->
            <div class="md:w-1/2 w-full xl:pl-3">
            
                <div class="view list-view recent-news news-wrap">
                    <div class="news-pic w-full md:w-1/2 block">
                        <img class="w-full" src="./assets/images/featured-resource-1.jpg" alt="Featured Image" />
                    </div>
                    <div class="news-content w-full md:w-1/2 md:pl-8">
                        <div class="news-top-area">
                            <span class="badage news-badage">Media Releases</span>
                        </div>
                        <h3 class="news-title">Is government failing Australians on fire ants?</h3>
                    </div>
                </div>                    
                <div class="view list-view recent-news news-wrap">
                    <div class="news-pic w-full md:w-1/2 block">
                        <img class="w-full" src="./assets/images/featured-resource-2.jpg" alt="Featured Image" />
                    </div>
                    <div class="news-content w-full md:w-1/2 md:pl-8">
                        <div class="news-top-area">
                            <span class="badage news-badage">Video</span>
                        </div>
                        <h3 class="news-title">Sugarcane - the solution to air travel's emissions problem</h3>
                    </div>
                </div>
                <div class="view list-view last-news recent-news news-wrap">
                    <div class="news-pic w-full md:w-1/2 block">
                        <img class="w-full" src="./assets/images/featured-resource-3.jpg" alt="Featured Image" />
                    </div>
                    <div class="news-content w-full md:w-1/2 md:pl-8">
                        <div class="news-top-area">
                            <span class="badage news-badage">Magazine</span>
                        </div>
                        <h3 class="news-title">Changing Face of Grower Representation - Australian Canegrower - August 2022</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<?php require('./components/explore-information.php'); ?>

<div class="container mx-auto px-4 py-36">
    <div class="news-top flex justify-between items-center pb-8 xl:pb-14">
        <div class="w-full xl:w-1/2">
            <h2 class="text-2xl xl:text-4xl text-black leading-8 xl:leading-44 capitalize font-serif font-medium">All News & Media</h2>
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
            <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="5" height="8" viewBox="0 0 5 8" fill="none">
                    <path class="group-hover:stroke-dark-green" d="M4 1L1 4L4 7" stroke="#1E1E1E" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
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
            <a href="#">
                Next
                <svg xmlns="http://www.w3.org/2000/svg" width="5" height="8" viewBox="0 0 5 8" fill="none">
                    <path class="group-hover:stroke-dark-green" d="M1 7L4 4L1 1" stroke="#1E1E1E" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
        </li>
    </ul>

</div>

<?php @include './components/footer-banner.php'; ?>
<?php @include 'footer.php'; ?>