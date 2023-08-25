<?php @include 'header.php'; ?>

<!-- Classifieds Tabs -->
    <section class="team-tabbed-sec classifieds-tabbed-sec">
        <div class="tabbed-top-sec">
            <div class="container max-w-screen-2xl mx-auto">
                <div class="tabbed-top-block">
                    <div class="tab-navigation flex flex-wrap">
                        <h2 class="b-12 w-full">Classifieds</h2>
                        <ul class="flex justify-center">
                            <li data-id="all" class="office active">All</li>
                            <li data-id="general" class="general">General</li>
                            <li data-id="property" class="property">Property</li>
                            <li data-id="employment" class="employment">Employment</li>
                            <li data-id="wanted" class="wanted">Wanted</li>                            
                        </ul>
                        <div class="btn-block">
                            <a href="javascript:void(0)" class="btn classified-popup-btn"> Submit or edit an ad 
                                <svg xmlns="http://www.w3.org/2000/svg" width="7" height="11" viewBox="0 0 7 11" fill="none">
                                    <path d="M1.00012 1.5L5.00012 5.5L1 9.5" stroke="white" stroke-width="2"></path>
                                </svg>
                            </a> 
                        </div>

                         <!-- Classified Modal -->
                        <div class="classified-popup max-w-lg p-8 m-auto rounded bg-off-white-100">
                            <div class="step-form">
                                <form action="">
                                    <div class="step-content step-one active">
                                        <div class="form-top">
                                            <h2>Submit or edit an Ad</h2>
                                            <p>The first five lines of an advertisement are free for CANEGROWERS members with subsequent lines charged at $5.50.</p>
                                            <p>Advertisements are charged at $11 per line including GST.</p>
                                        </div>
                                        
                                        <div class="radio-option">
                                            <input type="radio" name="radio" id="radio1" class="radio" checked/>
                                            <label for="radio1"><img class="svg-icon" src="assets/images/submit-listing.svg" alt=""> Submit a listing</label>
                                        </div>

                                        <div class="radio-option">
                                            <input type="radio" name="radio" id="radio2" class="radio"/>
                                            <label for="radio2"><img class="svg-icon" src="assets/images/change-listing.svg" alt=""> Change your listing</label>
                                        </div>

                                        <div class="radio-option">	
                                            <input type="radio" name="radio" id="radio3" class="radio"/>
                                            <label for="radio3"><img class="svg-icon" src="assets/images/remove-listing.svg" alt=""> Remove your listing</label>
                                        </div>
                                    
                                    </div>
                                    <div class="step-content step-two">
                                        <div class="form-top">
                                            <h2>Listing Details</h2>
                                            <p>Listing Type</p>
                                        </div>                    
                                        <div class="radio-option">
                                            <input type="radio" name="radio" id="radio4" class="radio" />
                                            <label for="radio1"><img class="svg-icon" src="assets/images/genrel.svg" alt="">General Classified</label>
                                        </div>
                                        <div class="radio-option">
                                            <input type="radio" name="radio" id="radio5" class="radio"/>
                                            <label for="radio2"><img class="svg-icon" src="assets/images/property.svg" alt="">Property</label>
                                        </div>
                                        <div class="radio-option">	
                                            <input type="radio" name="radio" id="radio6" class="radio"/>
                                            <label for="radio3"><img class="svg-icon" src="assets/images/employment.svg" alt="">Employment</label>
                                        </div>
                                        <div class="radio-option">	
                                            <input type="radio" name="radio" id="radio7" class="radio"/>
                                            <label for="radio3"><img class="svg-icon" src="assets/images/wanted.svg" alt="">Wanted</label>
                                        </div>                   
                                    </div>
                                    <div class="step-content step-three">
                                        <div class="form-top">
                                            <h2>Listing Details</h2>                        
                                        </div>
                                        <div class="listing-detail-fields">
                                            <div class="full-field">
                                                <label for="">Listing Title</label>
                                                <input type="text" placeholder="Enter your listing title">
                                            </div>                        
                                        </div>
                                        <div class="listing-detail-fields">
                                            <div class="half-field">
                                                <label for="">Price Type</label>
                                                <select name="" id="">
                                                    <option value="">Offer</option>
                                                    <option value="">Offer1</option>
                                                    <option value="">Offer2</option>
                                                    <option value="">Offer3</option>
                                                    <option value="">Offer4</option>
                                                </select>
                                            </div>
                                            <div class="half-field price">
                                                <label for="">Price</label>
                                                <input type="text" placeholder="Enter your price">
                                            </div>
                                        </div>
                                        <div class="listing-detail-fields">
                                            <div class="half-field">
                                                <label for="">Region/Postcode</label>
                                                <input type="number" placeholder="4873">
                                            </div>
                                            <div class="half-field city-name">
                                            <label for=""> Mossman</label>
                                            </div>
                                        </div>

                                        <div class="listing-detail-fields">
                                            <div class="full-field">
                                                <label for="">Listing Contact Number</label>
                                                <input type="text" placeholder="Enter listing contact number">
                                            </div>                        
                                        </div>
                                        <div class="listing-detail-fields">
                                            <div class="full-field">
                                                <label for="">Description & Details</label>
                                                <textarea name="" id="" placeholder="Enter your listing description and details..."></textarea>
                                            </div>        
                                        </div>
                                    </div>
                                    <div class="step-content step-four">
                                        <div class="form-top">
                                            <h2>Your Details</h2>                        
                                        </div>
                                        <div class="listing-detail-fields">
                                            <div class="full-field">
                                                <label for="">Full Name</label>
                                                <input type="text" placeholder="Enter your name">
                                            </div>                        
                                        </div>
                                        <div class="listing-detail-fields">
                                            <div class="full-field">
                                                <label for="">Contact Number</label>
                                                <input type="phone" placeholder="Enter your contact number">
                                            </div>                        
                                        </div>
                                        <div class="listing-detail-fields">
                                            <div class="full-field">
                                                <label for="">Email Address</label>
                                                <input type="mail" placeholder="Enter your email address">
                                            </div>                        
                                        </div>
                                        <div class="listing-detail-fields">
                                            <div class="full-field">
                                                <label for="">Membership Number (if applicable)</label>
                                                <input type="mail" placeholder="Enter your membership number">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                
                                <div class="next-btn flex justify-between">
                                    <a href="#" class="classified-prev-step" data-id="one"><i class="fa-solid fa-chevron-left"></i> Previous</a>
                                    <a href="#" class="btn bg-green lg:mt-6 classified-next-step" data-id="one">Next
                                        <img class="svg-icon" src="assets/images/btn-arrow.svg" alt="">
                                    </a>                    
                                </div>
                            </div>
                        </div>

                    </div>
                    
                </div>
                
            </div>
        </div>
        <div class="tabbed-content">           
            <div class="content-col active" data-match="all">
                <div class="classifieds-info">
                    <div class="container-right-full">
                        <div class="flex flex-wrap w-full">
                            <div class="lg:w-1/2 w-full">
                                <div class="classifieds-blocks h-900 overflow-auto custom-scroll">
                                    <div class="noc">8 <span class="cat">Classified</span> listings in <span class="city">Mulgrave</span></div> 
                                    <a href="javascript:void(0)" class="block">
                                    <span class="cat-name">Classified</span>
                                    <h6 class="title">D Massey Ferguson 3635 4WD</h6> 
                                    <p class="disc">5,500hrs, 6tonne tipper bin, Silvan Euro Spand CX2 Spreader, Portable bulk bin, Hustler Super Z Zero turn mower, Bunning Lowlander Mk 40-60 Ag Spreader(near new),Complete tracks to suit cane harvester, Half tracks to suit cane harvester, and Fuel trailer tank.</p>
                                    <ul>
                                        <li>
                                            <i><img src="assets/images/briefcase.svg" alt=""></i>
                                            <span>0437 293 241</span>
                                        </li>
                                        <li>
                                            <i><img src="assets/images/location-pin.svg" alt=""></i>
                                            <span>Mulgrave</span>
                                        </li>
                                    </ul>                                           
                                    </a>
                                    <a href="javascript:void(0)" class="block">
                                    <span class="cat-name">Classified</span>
                                    <h6 class="title">D Massey Ferguson 3635 4WD</h6> 
                                    <p class="disc">5,500hrs, 6tonne tipper bin, Silvan Euro Spand CX2 Spreader, Portable bulk bin, Hustler Super Z Zero turn mower, Bunning Lowlander Mk 40-60 Ag Spreader(near new),Complete tracks to suit cane harvester, Half tracks to suit cane harvester, and Fuel trailer tank.</p>
                                    <ul>
                                            <li>
                                                <i><img src="assets/images/briefcase.svg" alt=""></i>
                                                <span>0437 293 241</span>
                                            </li>
                                            <li>
                                                <i><img src="assets/images/location-pin.svg" alt=""></i>
                                                <span>Mulgrave</span>
                                            </li>
                                    </ul>
                                    </a>
                                    <a href="javascript:void(0)" class="block">
                                    <span class="cat-name">Classified</span>
                                    <h6 class="title">D Massey Ferguson 3635 4WD</h6> 
                                    <p class="disc">5,500hrs, 6tonne tipper bin, Silvan Euro Spand CX2 Spreader, Portable bulk bin, Hustler Super Z Zero turn mower, Bunning Lowlander Mk 40-60 Ag Spreader(near new),Complete tracks to suit cane harvester, Half tracks to suit cane harvester, and Fuel trailer tank.</p>
                                    <ul>
                                            <li>
                                                <i><img src="assets/images/briefcase.svg" alt=""></i>
                                                <span>0437 293 241</span>
                                            </li>
                                            <li>
                                                <i><img src="assets/images/location-pin.svg" alt=""></i>
                                                <span>Mulgrave</span>
                                            </li>
                                    </ul>
                                    </a>
                                    <a href="javascript:void(0)" class="block">
                                    <span class="cat-name">Classified</span>
                                    <h6 class="title">D Massey Ferguson 3635 4WD</h6> 
                                    <p class="disc">5,500hrs, 6tonne tipper bin, Silvan Euro Spand CX2 Spreader, Portable bulk bin, Hustler Super Z Zero turn mower, Bunning Lowlander Mk 40-60 Ag Spreader(near new),Complete tracks to suit cane harvester, Half tracks to suit cane harvester, and Fuel trailer tank.</p>
                                    <ul>
                                            <li>
                                                <i><img src="assets/images/briefcase.svg" alt=""></i>
                                                <span>0437 293 241</span>
                                            </li>
                                            <li>
                                                <i><img src="assets/images/location-pin.svg" alt=""></i>
                                                <span>Mulgrave</span>
                                            </li>
                                    </ul>
                                    </a>
                                </div>
                            </div>
                            <div class="lg:w-1/2 w-full">
                                <img class="w-full h-900" src="assets/images/contact-map.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content-col" data-match="general">
                <div class="contact-map-info">
                        <div class="container-right-full">
                            <div class="flex flex-wrap w-full">
                                <div class="lg:w-1/2 w-full h-900 pt-8">
                                    
                                </div>
                                <div class="lg:w-1/2 w-full">
                                    <img class="w-full h-900" src="assets/images/contact-map.jpg" alt="">
                                </div>
                            </div>

                        </div>
                </div>
            </div>

            <div class="content-col" data-match="property">
                <div class="contact-map-info">
                        <div class="container-right-full">
                            <div class="flex flex-wrap w-full">
                                <div class="lg:w-1/2 w-full h-900 pt-8">
                                    
                                </div>
                                <div class="lg:w-1/2 w-full">
                                    <img class="w-full h-900" src="assets/images/contact-map.jpg" alt="">
                                </div>
                            </div>

                        </div>
                </div>
            </div>

            <div class="content-col" data-match="employment">
                <div class="contact-map-info">
                        <div class="container-right-full">
                            <div class="flex flex-wrap w-full">
                                <div class="lg:w-1/2 w-full h-900 pt-8">
                                    
                                </div>
                                <div class="lg:w-1/2 w-full">
                                    <img class="w-full h-900" src="assets/images/contact-map.jpg" alt="">
                                </div>
                            </div>

                        </div>
                </div>
            </div>
            
            <div class="content-col" data-match="wanted">
                <div class="contact-map-info">
                        <div class="container-right-full">
                            <div class="flex flex-wrap w-full">
                                <div class="lg:w-1/2 w-full h-900 pt-8">
                                    
                                </div>
                                <div class="lg:w-1/2 w-full">
                                    <img class="w-full h-900" src="assets/images/contact-map.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

       

    
    <?php @include './components/footer-banner.php'; ?>
    <?php @include 'footer.php'; ?>