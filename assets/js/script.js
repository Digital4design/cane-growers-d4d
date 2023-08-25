jQuery(document).ready(function() {
   
    var keyIssueSwiper = new Swiper(".key-issues-slider", {
        slidesPerView: 1.2,
        spaceBetween: 16,
        navigation: {
            nextEl: '.classified-slider-arrow .next-arrow',
            prevEl: '.classified-slider-arrow .prev-arrow',
        },
        breakpoints: {
            640: {
                slidesPerView: 2.5,
                spaceBetween: 16,
            },
            1024: {
                slidesPerView: 3.3,
                spaceBetween: 30,
            },
            1199: {
                slidesPerView: 4.5,
                spaceBetween: 30,
            },
        },
    });
    
    var classifiedSwiper = new Swiper(".classified-swiper", {
        slidesPerView: 1.2,
        spaceBetween: 16,
        navigation: {
            nextEl: '.classified-slider-arrow .next-arrow',
            prevEl: '.classified-slider-arrow .prev-arrow',
        },
        breakpoints: {
            767: {
                slidesPerView: 1.5,
                spaceBetween: 30,
            },
            1024: {
                slidesPerView: 2.3,
                spaceBetween: 30,
            },
        },
    });

    var classifiedSwiper = new Swiper(".team-row-slider", {
        slidesPerView: 1.2,
        spaceBetween: 16,
        navigation: {
            nextEl: '.classified-slider-arrow .next-arrow',
            prevEl: '.classified-slider-arrow .prev-arrow',
        },
        breakpoints: {
            640: {
                slidesPerView: 2.5,
                spaceBetween: 30,
            },
            1024: {
                slidesPerView: 3.3,
                spaceBetween: 30,
            },
            1199: {
                slidesPerView: 4.5,
                spaceBetween: 30,
            },
        },
    });
});

var oldScrollY = window.scrollY;
var header = document.getElementById('site-header');
window.addEventListener('scroll', ()=>{
    headerFixed();
});
window.addEventListener('load', ()=>{
    headerFixed();
    menubar();
})
window.addEventListener('resize', ()=>{
    menubar();
})
const headerFixed = (e) => {
    if(window.scrollY < 200) {
        header.style.top = '0';
    }
    else {
        if(oldScrollY < window.scrollY){
            header.style.top = '-100px';
        }
        else {
            header.style.top = '0';
            header.classList.add('bg-off-white-100');
            header.classList.add('transition-all');
            header.classList.add('duration-500');
            header.classList.add('header-fixed');
        }
    }
    if(window.scrollY==0) {
        header.classList.remove('bg-off-white-100');
        header.classList.remove('transition-all');
        header.classList.remove('header-fixed');
    }
    oldScrollY = window.scrollY;
}

const showMobileMenu = () => {
    let navbar = document.querySelector('.site-header nav');
    navbar.classList.add('shown');
}
const closeMobileMenu = () => {
    let navbar = document.querySelector('.site-header nav');
    navbar.classList.remove('shown');
}
let mobileMenuShowIcon = document.getElementsByClassName('toggle-mobile-menu-icon');
let mobileMenuCloseIcon = document.getElementsByClassName('mobile-menu-cross-icon');
mobileMenuShowIcon[0].addEventListener('click', showMobileMenu);
mobileMenuCloseIcon[0].addEventListener('click', closeMobileMenu);

function menubar() {
    if(window.innerWidth <1200) {            
        let anchor = document.querySelectorAll('.dropable');
        anchor.forEach((dropable)=> dropable.querySelector("a").addEventListener('click', openMobileDropdownMenu))
        
        function openMobileDropdownMenu(){
            let dropdownItem = document.querySelectorAll('.header-dropdown');
            dropdownItem.forEach(item=> {
                if(item.classList.contains('shown')) {
                    item.classList.remove('shown');
                }
            }
            )
            this.nextElementSibling.classList.add('shown');
        }
        
        let secondBackBtn = document.querySelectorAll('.second-layer-back-btn');
        secondBackBtn.forEach(btn=>{
            btn.addEventListener('click', gotoFirstLayerMenu);
        })        
        function gotoFirstLayerMenu() {
            if(this.closest('.header-dropdown').classList.contains('shown')) {
                this.closest('.header-dropdown').classList.remove('shown');
            }
        }
        
        let outerMenu = document.querySelectorAll('.outer-menu');
        outerMenu.forEach(menu=>menu.querySelector('.dropdown-menu-heading').addEventListener('click', openInnerMenu));
        function openInnerMenu(){
            console.log(this);
            let innerMenus = document.querySelectorAll('.inner-menu');
            innerMenus.forEach(menu=>{
                if(menu.classList.contains('shown')) {
                    menu.classList.remove('shown');
                }
            })
            this.nextElementSibling.classList.add('shown')
        }
        
        let thirdBackBtn = document.querySelectorAll('.third-layer-back-btn');
        thirdBackBtn.forEach(btn=>{
            btn.addEventListener('click', gotoSecondLayerMenu);
        })        
        function gotoSecondLayerMenu() {
            console.log('gekki de')
            if(this.closest('.inner-menu').classList.contains('shown')) {
                this.closest('.inner-menu').classList.remove('shown');
            }
        }
    }
}

/* Remove Classes from mobile menu while resizing the window to up 1200px */
window.addEventListener('resize', ()=>{
    if(window.innerWidth >= 1200) {
        let headerDropdown = document.querySelectorAll('.header-dropdown');
        let innerMenuItems = document.querySelectorAll('.inner-menu');
        headerDropdown.forEach(dropdown=>dropdown.classList.remove('shown'))
        innerMenuItems.forEach(menuItem=>menuItem.classList.remove('shown'))
    }
})

let scrollDown = document.querySelector('.scroll-down');
if(scrollDown) {
    scrollDown.addEventListener('click', ()=>{
        let scrollToPosition = document.querySelector('.grower-parteners').offsetTop;
        scroll({
            top: scrollToPosition,
            behavior: "smooth"
        });
    })
}

let dropdownButton = document.querySelector('.custom-select-dropdown');
if(dropdownButton) {
    dropdownButton.addEventListener('click', openDropdownItems);
}
function openDropdownItems() {
    this.classList.toggle('show')
    this.nextElementSibling.classList.toggle('show')
}
let dropdownOptions = document.querySelector('.custom-select-dropdown-options ul');
if(dropdownOptions) {
    
    let dropdownOptionsAll = dropdownOptions.querySelectorAll('a');
    dropdownOptionsAll.forEach(link=>link.addEventListener('click', changeDropdownValue))
    
    function changeDropdownValue() {
        let dropdownText = document.querySelector('.custom-select-dropdown span');
        dropdownText.textContent = this.dataset.value;
    }
}

window.onclick = function(event) {
    if (!event.target.matches('.custom-select-dropdown')) {
        let dropdownBtn = document.getElementsByClassName("custom-select-dropdown")[0];
        if(dropdownBtn) {
            if(dropdownBtn.classList.contains('show')) {
                dropdownBtn.classList.remove('show');
            }
        }
        var dropdowns = document.getElementsByClassName("custom-select-dropdown-options");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}

/* About us Tabbing */
let tabs = document.querySelectorAll('.tabbed-top-sec ul li');
tabs.forEach(tab=>{
    tab.addEventListener('click', changeTab);
})
function changeTab() {
    /* Remove Class from tabs */
    let tabItems = document.querySelectorAll('.tabbed-top-sec ul li');
    tabItems.forEach(tabItem=>tabItem.classList.remove('active'));
    this.classList.add('active');
    
    /* Remove Class from Tabs Content */
    let tabContent = this.closest('.tabbed-top-sec').nextElementSibling;
    tabContent.querySelector('.content-col').classList.remove('active');
    
    let tabContentPart = tabContent.querySelectorAll('.content-col');
    tabContentPart.forEach(part=>{
        if (part.getAttribute("data-match") === this.dataset.id) {
            part.classList.add('active')
        }else{
            part.classList.remove('active')
        }
    })
}

/* Accordion */
let allAccordionTitle = document.querySelectorAll('.accordion-title');
let allAccordionContent = document.querySelectorAll('.accordion-content');
allAccordionTitle.forEach(title=>{
    title.addEventListener('click', openAccordion);
});
function openAccordion() {
    if(window.innerWidth < 1024) {
        console.log('hello')
        allAccordionContent.forEach(accordionContent=>{
            if(accordionContent.classList.contains('show')) {
                accordionContent.classList.remove('show');
            }
        })
        this.nextElementSibling.classList.add('show');
    }
}


/* Contact Accordion */
var accItem = document.getElementsByClassName('accordionItem');
    var accHD = document.getElementsByClassName('accordionItemHeading');
    for (i = 0; i < accHD.length; i++) {
        accHD[i].addEventListener('click', toggleItem, false);
    }
    function toggleItem() {
        var itemClass = this.parentNode.className;
        for (i = 0; i < accItem.length; i++) {
            accItem[i].className = 'accordionItem close';
        }
        if (itemClass == 'accordionItem close') {
            this.parentNode.className = 'accordionItem open';
        }
    }

    window.addEventListener('DOMContentLoaded', (event) => {

        let svgImages = document.querySelectorAll("img.svg-icon");
        
        if (svgImages) {
            svgImages.forEach(function (img) {
                var imgID = img.id;
                var imgClass = img.className;
                var imgURL = img.src;
        
                fetch(imgURL).then(function (response) {
                    return response.text();
                }).then(function (text) {
                    var parser = new DOMParser();
                    var xmlDoc = parser.parseFromString(text, "text/xml");
        
                    // Get the SVG tag, ignore the rest
                    var svg = xmlDoc.getElementsByTagName('svg')[0];
        
                    // Add replaced image's ID to the new SVG
                    if (typeof imgID !== 'undefined') {
                        svg.setAttribute('id', imgID);
                    }
                    // Add replaced image's classes to the new SVG
                    if (typeof imgClass !== 'undefined') {
                        svg.setAttribute('class', imgClass + ' replaced-svg');
                    }
        
                    // Remove any invalid XML tags as per http://validator.w3.org
                    svg.removeAttribute('xmlns:a');
        
                    // Check if the viewport is set, if the viewport is not set the SVG wont't scale.
                    if (!svg.getAttribute('viewBox') && svg.getAttribute('height') && svg.getAttribute('width')) {
                        svg.setAttribute('viewBox', '0 0 ' + svg.getAttribute('height') + ' ' + svg.getAttribute('width'))
                    }
        
                    // Replace image with new SVG
                    img.parentNode.replaceChild(svg, img);
                });
            })
        }
        });

/* About Tabs as Accordion Work in mobile view */
    if(window.innerWidth <= 768) {      
        let aboutTabs = document.querySelector('.tab-list');
        let tabListItems = aboutTabs.querySelectorAll('li.item');
        let aboutTabSelectedValue = document.querySelector('.selectedValue');
        
        aboutTabSelectedValue.addEventListener('click', aboutList);
        function aboutList() {
            aboutTabs.classList.add('autoHeight');
        }
        
        
        tabListItems.forEach(item=>{
            item.addEventListener('click', aboutAccordion);
        })
        
        function aboutAccordion() {
            aboutTabs.classList.remove('autoHeight');
            aboutTabSelectedValue.textContent = this.textContent
        }   
    }

    /* Classified Modal */
    let classifiedBtn = document.querySelector('.classified-popup-btn');
    classifiedBtn.addEventListener('click', openClassifiedModal);

    function openClassifiedModal() {
        this.parentNode.nextElementSibling.classList.toggle('block');
    }


    let classifiedNextStep = document.querySelector('.classified-next-step');
    let classifiedPrevStep = document.querySelector('.classified-prev-step');
    let stepContentOne = document.querySelector('.classified-popup .step-one');
    let stepContentTwo = document.querySelector('.classified-popup .step-two');
    let stepContentThree = document.querySelector('.classified-popup .step-three');
    let stepContentFour = document.querySelector('.classified-popup .step-four');

    classifiedNextStep.addEventListener('click', changeFormNextSteps);
    function changeFormNextSteps() {
        let dataId = this.getAttribute('data-id');
        switch(dataId) {
            case 'one': 
                    this.setAttribute('data-id','two');
                    classifiedPrevStep.setAttribute('data-id','two');
                    stepContentOne.classList.remove('active')
                    stepContentTwo.classList.add('active')
                break;
            case 'two':
                this.setAttribute('data-id','three');
                classifiedPrevStep.setAttribute('data-id','three');
                stepContentTwo.classList.remove('active')
                stepContentThree.classList.add('active')
                break;
            case 'three': 
                this.setAttribute('data-id','four');
                classifiedPrevStep.setAttribute('data-id','four');
                stepContentThree.classList.remove('active')
                stepContentFour.classList.add('active')
                break;
        }
    }

    // let classifiedPrevStep = document.querySelector('.classified-prev-step');
    classifiedPrevStep.addEventListener('click', changeFormPrevSteps);
    function changeFormPrevSteps() {
        let dataId = this.getAttribute('data-id');
        switch(dataId) {
            case 'four': 
                this.setAttribute('data-id','three');
                classifiedNextStep.setAttribute('data-id','three');
                stepContentFour.classList.remove('active')
                stepContentThree.classList.add('active')
                break;
            case 'three': 
                this.setAttribute('data-id','two');
                classifiedNextStep.setAttribute('data-id','two');
                stepContentThree.classList.remove('active')
                stepContentTwo.classList.add('active')
                break;
            case 'two': 
                this.setAttribute('data-id','one');
                classifiedNextStep.setAttribute('data-id','one');
                stepContentTwo.classList.remove('active')
                stepContentOne.classList.add('active')
                break;
        }
    }

