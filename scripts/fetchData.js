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
