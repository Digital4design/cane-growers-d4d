<?php @include 'header.php'; ?>

<!-- Inner Banner -->
<section class="inner-banner-nbg py-32 bg-off-white-100">
    <div class="container mx-auto">
        <span class="green-label">INFORMATION HUB</span>
        <h2 class="">Explore Our Resources</h2>            
        <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent auctor purus luctus enim egestas, ac scelerisque ante pulvinar. Donec ut rhoncus ex. Suspendisse ac rhoncus nisl, eu tempor urna. Curabitur vel bibendum lorem. Morbi convallis convallis diam sit amet lacinia. Aliquam in elementum tellus.</p>
    </div>
</section>

<?php @include 'featured-latest-news.php'; ?>
<?php @include 'explore-information.php'; ?>
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

<?php @include 'footer-banner.php'; ?>
<?php @include 'footer.php'; ?>