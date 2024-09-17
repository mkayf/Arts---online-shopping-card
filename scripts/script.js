document.addEventListener("DOMContentLoaded", () => {
  let navAnimate = false;
  let navLinks = document.getElementsByClassName("link");
  let navIcons = document.getElementsByClassName("nav-icons");
  let logo = document.getElementById("logo");
  let collapseBtn = document.getElementsByClassName("collapse-btn")[0];
  // Animate the navbar on scroll

  const changeValueOnScroll = () => {
    const scrollValue = document?.documentElement?.scrollTop;
    scrollValue > 100 ? (navAnimate = true) : (navAnimate = false);
    if (navAnimate) {
      document.getElementById("navbar").classList.add("sticky");
      // Change color of navigation elements to black on bottom scroll
      Array.from(navLinks).forEach((link) => {
        link.style.color = "black";
      });
      Array.from(navIcons).forEach((icon) => {
        icon.style.filter = "invert(0)";
      });
      logo.style.filter = "invert(1)";
      // console.log(logo);
      collapseBtn.style.filter = "invert(1)";
    } else {
      document.getElementById("navbar").classList.remove("sticky");
      // Change color of navigation elements to default on top scroll
      Array.from(navLinks).forEach((link) => {
        link.style.color = "white";
      });
      Array.from(navIcons).forEach((icon) => {
        icon.style.filter = "invert(1)";
      });
      logo.style.filter = "invert(0)";
      collapseBtn.style.filter = "invert(0)";
    }
  };

  window.addEventListener("scroll", changeValueOnScroll);

  // Change the color of navbar if user is on product-page for better UI
  if (
    window.location.pathname == "/arts-online-shopping-cart/product-page.php"
  ) {
    document.getElementById("navbar").classList.add("purple-navbar");
  } else {
    document.getElementById("navbar").classList.remove("purple-navbar");
  }

  // Change the images in product page when user clicks on one of them

  let productImg1 = document.getElementById("product-img-1");
  let productImg2 = document.getElementById("product-img-2");
  let productMainImg = document.getElementById("product-main-img");

if(productImg1 && productImg2 && productMainImg){
    productImg1.addEventListener("click", () => {
        productMainImg.src = productImg1.src;
      });
    
      productImg2.addEventListener("click", () => {
        productMainImg.src = productImg2. src;
      });
} 

});

// Switch Tabs in admin panel 
function switchTabs(evnt, contentID){  

  const tabBtn = document.getElementsByClassName('tab-btn');

  for(let i = 0; i < tabBtn.length; i++){
   tabBtn[i].classList.remove('active'); 
  }

  const tabContent = document.getElementsByClassName('tab-content');

  for(let j = 0; j < tabContent.length; j++){
    tabContent[j].style.display = 'none';

  }

  evnt.target.classList.add('active');
  document.getElementById(contentID).style.display = 'block';

}