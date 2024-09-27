// Fetch data according to clicked tabs and using AJAX

// Switch Tabs in admin panel
function switchTabs(evnt, contentID) {
  // Remove active class from tab button
  const tabBtn = document.getElementsByClassName("tab-btn");

  for (let i = 0; i < tabBtn.length; i++) {
    tabBtn[i].classList.remove("active");
  }

  // Hide other contents
  const tabContent = document.getElementsByClassName("tab-content");

  for (let j = 0; j < tabContent.length; j++) {
    tabContent[j].style.display = "none";
  }

  // Add active class to clicked button
  evnt.target.classList.add("active");

  // Show the main content
  document.getElementById(contentID).style.display = "block";

  // Call functions according to clicked tabs
  if (contentID == "panel-products-section") {
    loadProducts();
  }
}

// Function to load all products

const loadProducts = () => {
  fetch("./partials/sendData.php?type=products")
    .then((response) => response.json())
    .then((data) => {
      let productContainer = document.querySelector(
        ".panel-products-container"
      );
      productContainer.innerHTML = "";

      if (data.length > 0) {
        data.forEach((product) => {
          productContainer.innerHTML += `
                    <div class="panel-product my-4">
                      <div class="row">
                        <div class="col col-1">
                         <img src="${
                           product.product_img_1
                         }" class="panel-product-img" width="70px" height="70px">
                        </div>
                        <div class="col col-2">
                        <label>Product name</label>
                        <p class="panel-product-name">${product.product_name.substr(
                          0,
                          20
                        )}</p>
                        </div>
                            <div class="col col-4">
                            <label>Product description</label>
                            <p class="panel-product-desc">${product.product_desc.substr(
                              0,
                              50
                            )}...</p>
                            </div>
                            <div class="col col-2">
                            <label>Product price</label>
                            <p class="panel-product-price">PKR ${
                              product.product_price
                            }</p>
                            </div>
                            <div class="col col-2">
                            <label>Product stock</label>
                            <p class="panel-product-stock">${
                              product.product_stock
                            }</p>
                            </div>
                            <div class="col col-1 panel-action-div">
                            <button class="edit-product" data-bs-toggle="modal" data-bs-target="#updateModal"  onclick="actionOnProduct(${
                              product.product_ID
                            }, 'update')"><i class="fa-solid fa-pencil"></i></button>
                            <button class="delete-product" data-bs-toggle="modal" data-bs-target="#deleteModal" onclick="actionOnProduct(${
                              product.product_ID
                            }, 'delete')"><i class="fa-solid fa-trash"></i></button>
                            </div>
                          </div>  
                    </div>
                `;
        });
      } else {
        productContainer.innerHTML += "<h5>No products available</h5>";
      }
    });
};

// Get product ID on click of edit and delete button and perform update or delete product action and put the values in update modal

const updatePlaceHolder = document.getElementById("update-placeholder");
const deletePlaceHolder = document.getElementById("delete-placeholder");
const updateName = document.getElementById("update-p-name");
const updateDesc = document.getElementById("update-p-desc");
const updatePrice = document.getElementById("update-p-price");
const updateStock = document.getElementById("update-p-stock");

const actionOnProduct = (productId, action) => {
  
  if(action === 'update'){
    fetch("./partials/update_product.php", {
      method: "POST",
      headers: {
        "Content-Type": "Application/json",
      },
      body: JSON.stringify(productId),
    })
      .then((response) => response.json())
      .then((data) => {
        updatePlaceHolder.value = productId;
        updateName.value = data.product_name;
        updateDesc.value = data.product_desc;
        updatePrice.value = data.product_price;
        updateStock.value = data.product_stock;
      });
  }
  else if(action === 'delete'){
      deletePlaceHolder.value = productId; 
  }
    
};


// A function to send email of user subscribed to news letter in db

let newsModal = new bootstrap.Modal(document.getElementById('news-modal'));

const newsForm = document.getElementById('news-form');
newsForm.addEventListener('submit', (e) => {
  e.preventDefault();
  const email = e.target.news_email.value;
  fetch('./partials/sendData.php?type=newsletter_sub', {
    method : 'POST',
    headers : {
      "Content-Type" : "Application/json"
    },
    body : JSON.stringify(email)

  })
  .then(response => response.json())
  .then((value) => {
    console.log(value);
    newsModal.show()    
  })
  .catch(error => console.log(error));
  
  e.target.reset();
})


// A function to submit feedback form to the db

const feedbackForm = document.getElementsByClassName('feedback-form')[0];

if(feedbackForm){

  feedbackForm.addEventListener('submit', (e) => {

    const feedbackModal = new bootstrap.Modal(document.getElementById('feedback-modal'));
  
    e.preventDefault();
    const fullName = e.target.f_name.value;
    const email = e.target.f_email.value;
    const comment = e.target.f_comment.value;
  
    fetch('./partials/sendData.php?type=feedback', {
      method : "POST",
      headers : {
        'Content-Type' : 'Application/json'
      },
      body : JSON.stringify({fullName, email, comment})
    })
    .then(response => response.json())
    .then(feedbackModal.show())
    .catch(error => console.log(error));
  
    e.target.reset();
  })
}




// A function to submit contact us form to db

const contactForm = document.getElementsByClassName('contact-form')[0];

if(contactForm){
contactForm.addEventListener('submit', (e) => {
  e.preventDefault();

  const contactModal = new bootstrap.Modal(document.getElementById('contact-modal'));

  const name = e.target.name.value;
  const email = e.target.email.value;
  const subject = e.target.subject.value;
  const message = e.target.message.value;

  if(name !== '' && email !== '' && message !== ''){
    fetch('./partials/sendData.php?type=contact', {
      method : "POST",
      headers : {
        'Content-Type' : 'Application/json'
      },
      body : JSON.stringify({name, email, subject, message})
    })
    .then(response => response.json())
    .then(contactModal.show())
    .catch(error => console.log(error));
    document.getElementById('contact-error').innerHTML = '';
  }
  else{
    document.getElementById('contact-error').innerHTML = 'Please fill all required fields highlighted with *';
  } 
  e.target.reset();
})
}