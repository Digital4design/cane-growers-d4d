jQuery(document).ready(function() {
    jQuery('.classified').slick({
        slidesToShow: 2,
        centerMode: true,
        centerPadding: '150px',
        infinite:true,
        slidesToScroll: 1,
        autoplay: false,
        nav:true,
        autoplaySpeed: 2000,
        prevArrow: $('.prev-arrow'),
        nextArrow: $('.next-arrow'),
        responsive: [
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                centerPadding: '150px',
              }
            },
            {
              breakpoint: 640,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                centerPadding: '75px',
              }
            },
          ]
    })
    jQuery('.key-issues-slider').slick({
        slidesToShow: 4,
        centerMode: true,
        centerPadding: '150px',
        infinite:true,
        slidesToScroll: 1,
        autoplay: false,
        nav:true,
        autoplaySpeed: 2000,
        prevArrow: $('.prev-arrow'),
        nextArrow: $('.next-arrow'),
    })
    jQuery('.team-row-slider').slick({
        slidesToShow: 4,
        centerMode: true,
        centerPadding: '150px',
        infinite:true,
        slidesToScroll: 1,
        autoplay: false,
        nav:true,
        autoplaySpeed: 2000,
        prevArrow: $('.prev-arrow'),
        nextArrow: $('.next-arrow'),
    })
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