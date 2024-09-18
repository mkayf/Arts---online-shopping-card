document.addEventListener("DOMContentLoaded", () => {
  let navAnimate = false;
  let navLinks = document.getElementsByClassName("link");
  let navIcons = document.getElementsByClassName("nav-icons");
  // let logo = document.getElementById("logo");
  let collapseBtn = document.getElementsByClassName("collapse-btn")[0];
  let navLogoDiv = document.querySelector('.nav-logo-div');
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
      navLogoDiv.style.paddingTop = '0';
      // console.log(navLogoDiv);
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
      navLogoDiv.style.paddingTop = '20px';
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




