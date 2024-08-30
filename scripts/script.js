document.addEventListener('DOMContentLoaded', () => {
    let navAnimate = false;

    const changeValueOnScroll = () => {
        const scrollValue = document?.documentElement?.scrollTop;
        scrollValue > 100 ? navAnimate = true : navAnimate = false;
        if(navAnimate){
            document.getElementById('navbar').classList.add('sticky');
        }
        else{
            document.getElementById('navbar').classList.remove('sticky');
        }
    }

    window.addEventListener('scroll', changeValueOnScroll);

})