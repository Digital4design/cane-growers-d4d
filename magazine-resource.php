<?php @include 'header.php'; ?>

<!-- Inner Banner -->
<section class="inner-banner-nbg pt-40 pb-16 bg-off-white-100">
    <div class="container max-w-screen-2xl mx-auto flex flex-wrap items-center justify-between">
        <div class="w-full lg:w-7/12">
            <span class="green-label">News & Media - magazines</span>
            <h2 class="">Magazines</h2>            
            <p class="opacity-50 font-medium leading-7 text-black mt-4">Yorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim</p>
        </div>
    </div>
</section>

 <!-- Latest News -->
 <section class="latest-news pb-14 pt-7 lg:pt-12 lg:pb-24 xl:pt-16 xl:pb-32 bg-off-white-100">
    <div class="max-w-screen-2xl container mx-auto">
        <div class="news-top flex justify-between items-center pb-8 xl:pb-14">
            <div class="w-full xl:w-1/2">
                <h4>Latest Magazine Issues</h4>
            </div>
        </div>
        
        <div class="student-featured-resources flex flex-col"> 
            <div class="view list-view recent-news news-wrap">
                <div class="news-pic w-full md:w-2/5 block">
                    <img class="w-full" src="./assets/images/featured-resource-1.jpg" alt="Featured Image" />
                </div>
                <div class="news-content w-full md:w-3/5 md:pl-11 py-11">
                    <div class="news-top-area flex flex-col md:flex-row items-center gap-3">
                        <span class="badage news-badage">Magazine</span>
                        <span class="date font-medium text-black-ish opacity-50 pl-8">22nd April, 2023</span>
                    </div>
                    <h5 class="news-title">The sweet facts about how sugar is grown and processed</h5>
                    <p class="font-medium mt-5">Sugarcane is a tall tropical plant that is similar to bamboo. Cane is tall, reaching two to six metres in height. It has strong, jointed, fibrous stalks that store carbohydrates in the form of various sugars....</p>
                </div>
            </div>                    
            <div class="view list-view recent-news news-wrap">
                <div class="news-pic w-full md:w-2/5 block">
                    <img class="w-full" src="./assets/images/featured-resource-2.jpg" alt="Featured Image" />
                </div>
                <div class="news-content w-full md:w-3/5 md:pl-11 py-11">
                    <div class="news-top-area">
                        <span class="badage news-badage">Magazine</span>
                        <span class="date font-medium text-black-ish opacity-50 pl-8">22nd April, 2023</span>
                    </div>
                    <h5 class="news-title">Smartcane BMP is the Queensland sugarcane industry's voluntary best practice program</h5>
                    <p class="font-medium mt-5">Sugarcane is a tall tropical plant that is similar to bamboo. Cane is tall, reaching two to six metres in height. It has strong, jointed, fibrous stalks that store carbohydrates in the form of various sugars....</p>
                </div>
            </div>
            <div class="view list-view last-news recent-news news-wrap">
                <div class="news-pic w-full md:w-2/5 block">
                    <img class="w-full" src="./assets/images/featured-resource-3.jpg" alt="Featured Image" />
                </div>
                <div class="news-content w-full md:w-3/5 md:pl-11 py-11">
                    <div class="news-top-area">
                        <span class="badage news-badage">Magazine</span>
                        <span class="date font-medium text-black-ish opacity-50 pl-8">22nd April, 2023</span>
                    </div>
                    <h5 class="news-title">Check out our collection of important links to our industry partners</h5>
                    <p class="font-medium mt-5">Sugarcane is a tall tropical plant that is similar to bamboo. Cane is tall, reaching two to six metres in height. It has strong, jointed, fibrous stalks that store carbohydrates in the form of various sugars....</p>
                </div>
            </div>
        </div>
                
        <div class="md:hidden mt-16">
            <a href="#" class="btn">
                Browse all news & media
                <svg xmlns="http://www.w3.org/2000/svg" width="7" height="11" viewBox="0 0 7 11" fill="none">
                    <path d="M1.00012 1.5L5.00012 5.5L1 9.5" stroke="white" stroke-width="2" />
                </svg>
            </a>
        </div>
        
    </div>
</section>



<?php //@include './components/explore-information.php'; ?>

<div class="container mx-auto px-4 py-36">
    <div class="news-top flex justify-between items-center pb-8 xl:pb-14">
        <div class="w-full xl:w-1/2">
            <h4>All News & Media</h4>
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
            <a href="#" class="group">
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