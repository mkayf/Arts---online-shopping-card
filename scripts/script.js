document.addEventListener('DOMContentLoaded', () => {
    let navAnimate = false;
    let navLinks = document.getElementsByClassName('link');
    let navIcons = document.getElementsByClassName('nav-icons');
    let logo = document.getElementsByClassName('nav-logo-div')[0];
    let collapseBtn = document.getElementsByClassName('collapse-btn')[0];
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
            logo.style.color = 'black';
            collapseBtn.style.filter = 'invert(0)';
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
            logo.style.color = 'white';
            collapseBtn.style.filter = 'invert(1)';
        }
    }

    window.addEventListener('scroll', changeValueOnScroll);

})