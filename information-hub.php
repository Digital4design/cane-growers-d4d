<?php @include 'header.php'; ?>

<!-- Inner Banner -->
<section class="inner-banner-nbg pt-40 pb-16 bg-off-white-100">
    <div class="container max-w-screen-2xl mx-auto flex flex-wrap items-center justify-between">
        <div class="w-full lg:w-7/12">
            <span class="green-label">INFORMATION HUB</span>
            <h2 class="">Explore Our Resources</h2>            
            <p class="opacity-50 font-medium leading-7 text-black mt-4">Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent auctor purus luctus enim egestas, ac scelerisque ante pulvinar. Donec ut rhoncus ex. Suspendisse ac rhoncus nisl, eu tempor urna. Curabitur vel bibendum lorem. Morbi convallis convallis diam sit amet lacinia. Aliquam in elementum tellus.</p>
            <form class="flex flex-wrap items-center justify-between mt-20">
                <input type="text" name="" id="" placeholder="Search Our Information Hub" />
                <button class="btn">
                    Search Information 
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
                <h2 class="text-2xl xl:text-4xl text-black leading-8 xl:leading-44 capitalize font-serif font-medium">Featured Resources</h2>
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
                            <span class="badage resources-badage">Student Resources</span>
                            <span class="date font-medium text-black-ish opacity-50 pl-8">22nd April, 2023</span>
                        </div>
                        <h3 class="news-title">The sweet facts about how sugar is grown and processed</h3>
                        <p class="news-desc">Sugarcane is a tall tropical plant that is similar to bamboo. Cane is tall, reaching two to six metres in height. It has strong, jointed, fibrous stalks that store carbohydrates in the form of various sugars....</p>
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
                            <span class="badage resources-badage">Learn About Sugarcane</span>
                        </div>
                        <h3 class="news-title">CANEGROWERS Virtual Bus Tour</h3>
                    </div>
                </div>                    
                <div class="view list-view recent-news news-wrap">
                    <div class="news-pic w-full md:w-1/2 block">
                        <img class="w-full" src="./assets/images/featured-resource-2.jpg" alt="Featured Image" />
                    </div>
                    <div class="news-content w-full md:w-1/2 md:pl-8">
                        <div class="news-top-area">
                            <span class="badage resources-badage">Projects</span>
                        </div>
                        <h3 class="news-title">Smartcane BMP is the Queensland sugarcane industry's voluntary best practice program</h3>
                    </div>
                </div>
                <div class="view list-view last-news recent-news news-wrap">
                    <div class="news-pic w-full md:w-1/2 block">
                        <img class="w-full" src="./assets/images/featured-resource-3.jpg" alt="Featured Image" />
                    </div>
                    <div class="news-content w-full md:w-1/2 md:pl-8">
                        <div class="news-top-area">
                            <span class="badage resources-badage">Industry Information</span>
                        </div>
                        <h3 class="news-title">Check out our collection of important links to our industry partners</h3>
                    </div>
                </div>
            </div>
        </div>
                
        <div class="md:hidden mt-16">
            <a href="#" class="btn bg-mid-green text-white">
                Browse all news & media
                <svg xmlns="http://www.w3.org/2000/svg" width="7" height="11" viewBox="0 0 7 11" fill="none">
                    <path d="M1.00012 1.5L5.00012 5.5L1 9.5" stroke="white" stroke-width="2" />
                </svg>
            </a>
        </div>
        
    </div>
</section>



<?php @include './components/explore-information.php'; ?>
<div class="container mx-auto px-4 py-36">
    <div class="news-top flex justify-between items-center pb-8 xl:pb-14">
        <div class="w-full xl:w-1/2">
            <h2 class="text-2xl xl:text-4xl text-black leading-8 xl:leading-44 capitalize font-serif font-medium">All Information Hub Resources</h2>
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