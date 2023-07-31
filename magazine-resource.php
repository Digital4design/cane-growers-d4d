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
                <h2 class="text-2xl xl:text-4xl text-black leading-8 xl:leading-44 capitalize font-serif font-medium">Latest Magazine Issues</h2>
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
                    <h3 class="news-title">The sweet facts about how sugar is grown and processed</h3>
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
                    <h3 class="news-title">Smartcane BMP is the Queensland sugarcane industry's voluntary best practice program</h3>
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
                    <h3 class="news-title">Check out our collection of important links to our industry partners</h3>
                    <p class="font-medium mt-5">Sugarcane is a tall tropical plant that is similar to bamboo. Cane is tall, reaching two to six metres in height. It has strong, jointed, fibrous stalks that store carbohydrates in the form of various sugars....</p>
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



<?php //@include './components/explore-information.php'; ?>

<div class="container mx-auto px-4 py-36">
    <div class="news-top flex justify-between items-center pb-8 xl:pb-14">
        <div class="w-full xl:w-1/2">
            <h2 class="text-2xl xl:text-4xl text-black leading-8 xl:leading-44 capitalize font-serif font-medium">All News & Media</h2>
        </div>
        <!-- <div class="hidden md:flex justify-end w-full xl:w-1/2">
            <div class="flex flex-wrap items-center justify-end">
                <span>category by</span>
            
                <div class="relative">
                    <button class="custom-select-dropdown" type="button">
                        <span>Soil Health</span>
                        <svg class="w-2.5 h-2.5 ml-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>
                    </button> -->
                    <!-- Dropdown menu -->
                    <!-- <div class="custom-select-dropdown-options pt-20 top-0">
                        <ul class="py-2" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a data-value="Overview" class="cursor-pointer block px-8 py-4 hover:opacity-50">Overview</a>
                            </li>
                            <li>
                                <a data-value="Soil Health" class="cursor-pointer block px-8 py-4 hover:opacity-50">Soil Health</a>
                            </li>
                            <li>
                                <a data-value="Nutrient Management" class="cursor-pointer block px-8 py-4 hover:opacity-50">Nutrient Management</a>
                            </li>
                            <li>
                                <a data-value="Water Sense" class="cursor-pointer block px-8 py-4 hover:opacity-50">Water Sense</a>
                            </li>
                            <li>
                                <a data-value="Growers, Research & the Reef" class="cursor-pointer block px-8 py-4 hover:opacity-50">Growers, Research & the Reef</a>
                            </li>
                            <li>
                                <a data-value="Our Growers. Our Story" class="cursor-pointer block px-8 py-4 hover:opacity-50">Our Growers. Our Story</a>
                            </li>
                        </ul>
                    </div> -->
                <!-- </div>
                <span>filter by</span>
                <div class="relative">
                    <button class="custom-select-dropdown" type="button">
                        <span>Soil Health</span>
                        <svg class="w-2.5 h-2.5 ml-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>
                    </button> -->
                    <!-- Dropdown menu -->
                    <!-- <div class="custom-select-dropdown-options pt-20 top-0">
                        <ul class="py-2" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a data-value="Overview" class="cursor-pointer block px-8 py-4 hover:opacity-50">Overview</a>
                            </li>
                            <li>
                                <a data-value="Soil Health" class="cursor-pointer block px-8 py-4 hover:opacity-50">Soil Health</a>
                            </li>
                            <li>
                                <a data-value="Nutrient Management" class="cursor-pointer block px-8 py-4 hover:opacity-50">Nutrient Management</a>
                            </li>
                            <li>
                                <a data-value="Water Sense" class="cursor-pointer block px-8 py-4 hover:opacity-50">Water Sense</a>
                            </li>
                            <li>
                                <a data-value="Growers, Research & the Reef" class="cursor-pointer block px-8 py-4 hover:opacity-50">Growers, Research & the Reef</a>
                            </li>
                            <li>
                                <a data-value="Our Growers. Our Story" class="cursor-pointer block px-8 py-4 hover:opacity-50">Our Growers. Our Story</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> -->
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