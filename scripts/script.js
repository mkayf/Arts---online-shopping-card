document.addEventListener('DOMContentLoaded', () => {
    let navAnimate = false;
    let navLinks = document.getElementsByClassName('link');
    let navIcons = document.getElementsByClassName('nav-icons');
    let logo = document.getElementById('logo');
    let collapseBtn = document.getElementsByClassName('collapse-btn')[0];
    // Animate the navbar on scroll
    const changeValueOnScroll = () => {
        const scrollValue = document?.documentElement?.scrollTop;
        scrollValue > 100 ? navAnimate = true : navAnimate = false;
        if(navAnimate){
            document.getElementById('navbar').classList.add('sticky');
            // Change color of navigation elements to black on bottom scroll
            Array.from(navLinks).forEach((link) => {
                link.style.color = 'black';
            })
            Array.from(navIcons).forEach((icon) => {
                icon.style.filter = 'invert(0)';
            })
            logo.style.filter = 'invert(1)';
            // console.log(logo);
            collapseBtn.style.filter = 'invert(1)';
        }
        else{
            document.getElementById('navbar').classList.remove('sticky');
            // Change color of navigation elements to default on top scroll
            Array.from(navLinks).forEach((link) => {
                link.style.color = 'white';
            })
            Array.from(navIcons).forEach((icon) => {
                icon.style.filter = 'invert(1)';
            })
            logo.style.filter = 'invert(0)';
            collapseBtn.style.filter = 'invert(0)';
        }
    }

    window.addEventListener('scroll', changeValueOnScroll);

    // Change the color of navbar if user is on product-page for better UI
    console.log(window.location.pathname == '/arts-online-shopping-cart/product-page.php');
    if(window.location.pathname == '/arts-online-shopping-cart/product-page.php'){
        document.getElementById('navbar').classList.add('purple-navbar');
        console.log('purple-navbar');
    }
    else {
        document.getElementById('navbar').classList.remove('purple-navbar');
        console.log('not purple');
    }


})