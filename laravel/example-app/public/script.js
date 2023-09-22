document.addEventListener("DOMContentLoaded", function() {
  setTimeout(function() {
    document.querySelector(".second-navbar").classList.add("sticky");
  }, 4000); // Delay of 2000 milliseconds (2 seconds)
});

let previousSrc; // Variable to store the previous image source

function changeImage(imagePath) {
    var mainImage = document.querySelector('.main-image');
    mainImage.src = imagePath;
}

function revertImage(originalImagePath) {
    var mainImage = document.querySelector('.main-image');
    mainImage.src = originalImagePath;
}

const imagesContainer = document.querySelector('.images-container');
const imageColumns = document.querySelectorAll('.image-column');
const imageLeft = document.querySelector('.image-left');
const imageRight = document.querySelector('.image-right');

let currentIndex = 0;

// Function to show the next image
function showNextImage() {
  if (currentIndex < imageColumns.length - 1) {
    currentIndex++;
    imagesContainer.scrollLeft += imageColumns[currentIndex].offsetWidth;
  }
}

// Function to show the previous image
function showPreviousImage() {
  if (currentIndex > 0) {
    currentIndex--;
    imagesContainer.scrollLeft -= imageColumns[currentIndex].offsetWidth;
  }
}

imageLeft.addEventListener('click', showPreviousImage);
imageRight.addEventListener('click', showNextImage);
// Избиране на всички елементи с клас "custom-image-container"
const imageContainers = document.querySelectorAll('.custom-image-container');

document.addEventListener("DOMContentLoaded", function() {
  window.addEventListener("scroll", function() {
    var container = document.querySelector(".firstrow-container");
    var containerPosition = container.getBoundingClientRect().top;
    var screenPosition = window.innerHeight / 1.3; // Adjust this threshold as needed

    if (containerPosition < screenPosition) {
      container.style.opacity = "1";
      container.style.transform = "translateY(0)";
    }
  });
});

document.addEventListener("DOMContentLoaded", function() {
  var customSecondRowContainer = document.querySelector(".custom-secondrow-container");
  var items = customSecondRowContainer.querySelectorAll(".custom-image-container");
  var currentIndex = 0;

  function showItem(index) {
    items.forEach(function(item, i) {
      if (i === index) {
        item.classList.add("active");
      } else {
        item.classList.remove("active");
      }
    });
  }

  function autoSlide() {
    currentIndex = (currentIndex + 1) % items.length;
    showItem(currentIndex);
    setTimeout(autoSlide, 3000); // Adjust delay as needed (3000ms = 3 seconds)
  }

  window.addEventListener("scroll", function() {
    var containerPosition = customSecondRowContainer.getBoundingClientRect().top;
    var screenPosition = window.innerHeight / 1.3;

    if (containerPosition < screenPosition) {
      customSecondRowContainer.classList.add("active");
      autoSlide();
    }
  });
});
document.addEventListener("DOMContentLoaded", function() {
  var thirdRowContainer = document.querySelector(".thirdrow-container");

  window.addEventListener("scroll", function() {
    var containerPosition = thirdRowContainer.getBoundingClientRect().top;
    var screenPosition = window.innerHeight / 1.3;

    if (containerPosition < screenPosition) {
      thirdRowContainer.classList.add("active");
    }
  });
});
document.addEventListener("DOMContentLoaded", function() {
  var forthRowContainer = document.querySelector(".forthrow-container");

  window.addEventListener("scroll", function() {
    var containerPosition = forthRowContainer.getBoundingClientRect().top;
    var screenPosition = window.innerHeight / 1.3;

    if (containerPosition < screenPosition) {
      forthRowContainer.classList.add("active");
    }
  });
});


// Функция за задаване на цвят на първата дума
function setFirstWordColor(paragraph, color) {
    const words = paragraph.textContent.split(' ');
    words[0] = `<span style="color:${color}">${words[0]}</span>`;
    paragraph.innerHTML = words.join(' ');
}

// Задаване на цветове
setFirstWordColor(imageContainers[0].querySelector('p'), '#5FB865'); 
setFirstWordColor(imageContainers[1].querySelector('p'), '#008AEE'); 
setFirstWordColor(imageContainers[2].querySelector('p'), '#5FB865'); 

document.addEventListener("DOMContentLoaded", function() {
  var sixthRowContainer = document.querySelector(".sixthrow-container");

  window.addEventListener("scroll", function() {
    var containerPosition = sixthRowContainer.getBoundingClientRect().top;
    var screenPosition = window.innerHeight / 1.3;

    if (containerPosition < screenPosition) {
      sixthRowContainer.classList.add("active");
    }
  });
});

document.addEventListener("DOMContentLoaded", function () {
  // Function to fetch and display products
  function fetchProducts() {
    // Make an AJAX request to your PHP backend
    const xhr = new XMLHttpRequest();
    xhr.open("GET", "get_products.php", true);

    xhr.onload = function () {
      if (xhr.status === 200) {
        const products = JSON.parse(xhr.responseText);

        // Get the product container
        const productContainer = document.getElementById("product-container");

        // Clear previous products
        productContainer.innerHTML = "";

        // Loop through the products and create HTML elements for each
        products.forEach((product) => {
          const productCard = document.createElement("div");
          productCard.classList.add("product-card");

     
          productCard.innerHTML = `
            <div class="product-image">
              <img src="${product.image_url}" alt="${product.name}">
            </div>
            <div class="product-details">
              <h2${product.name}</h2>
              <p> ${product.description}</p>
              <p> ${product.price}</p>
            </div>
          `;

 
          productContainer.appendChild(productCard);
        });
      } else {
        console.error("Failed to fetch products.");
      }
    };

    xhr.send();
  }

  
  fetchProducts();

 
  setInterval(fetchProducts, 30000); 
});

document.addEventListener("DOMContentLoaded", function () {
  const messageContainer = document.getElementById("message-container");
  const form = document.querySelector("form");

  form.addEventListener("submit", function (event) {
    event.preventDefault(); 

    function showMessage(status, message) {
      messageContainer.innerHTML = `<div class="${status}-message">${message}</div>`;
    }

   
   
    fetch("process_form.php", {
      method: "POST",
      body: new FormData(form), 
    })
      .then((response) => response.json())
      .then((data) => {
        showMessage(data.status, data.message);
      })
      .catch((error) => {
        console.error("Error:", error);
        showMessage("error", "Грешка при изпращане на заявката.");
      });
  });
});
document.addEventListener("DOMContentLoaded", function () {
  // Function to fetch and display products
  function fetchProducts() {

    const xhr = new XMLHttpRequest();
    xhr.open("GET", "get_products.php", true);

    xhr.onload = function () {
      if (xhr.status === 200) {
        const products = JSON.parse(xhr.responseText);

        // Get the product container
        const productContainer = document.getElementById("product-container");

        // Clear previous products
        productContainer.innerHTML = "";

        // Loop through the products and create HTML elements for each
        products.forEach((product) => {
          const productCard = document.createElement("div");
          productCard.classList.add("product-card");

          // Create HTML structure for the product card (name, description, price, image)
          productCard.innerHTML = `
            <div class="product-image">
              <img src="${product.image_url}" alt="${product.name}">
            </div>
            <div class="product-details">
              <h2>${product.name}</h2>
              <p>${product.description}</p>
              <p>${product.price}</p>
            </div>
          `;

          // Append the product card to the container
          productContainer.appendChild(productCard);
        });
      } else {
        console.error("Failed to fetch products.");
      }
    };

    xhr.send();
  }

  // Fetch and display products initially
  fetchProducts();

  // Implement a function to fetch and display products periodically (e.g., every 30 seconds)
  setInterval(fetchProducts, 30000); // Adjust the interval as needed
});
document.addEventListener("DOMContentLoaded", function () {
  // Function to fetch and display products
  function fetchProducts() {
    // Make an AJAX request to your PHP backend
    const xhr = new XMLHttpRequest();
    xhr.open("GET", "get_products.php", true);

    xhr.onload = function () {
      if (xhr.status === 200) {
        const products = JSON.parse(xhr.responseText);

        // Get the product container
        const productContainer = document.getElementById("product-container");

        // Clear previous products
        productContainer.innerHTML = "";

        
        products.forEach((product) => {
          const productCard = document.createElement("div");
          productCard.classList.add("product-card");

         
          productCard.style.transform = "scale(0.8)"; // Initial scale

          // Create HTML structure for the product card (name, description, price, image)
          productCard.innerHTML = `
            <div class="product-image">
              <img src="${product.image_url}" alt="${product.name}">
            </div>
            <div class="product-details">
              <h2>${product.name}</h2>
              <p>${product.description}</p>
              <p>${product.price}</p>
            </div>
          `;

          // Append the product card to the container
          productContainer.appendChild(productCard);

         
          setTimeout(() => {
            productCard.style.transform = "scale(1)";
          }, 10); 
        });
      } else {
        console.error("Failed to fetch products.");
      }
    };

    xhr.send();
  }

  // Fetch and display products initially
  fetchProducts();

  // Implement a function to fetch and display products periodically (e.g., every 30 seconds)
  setInterval(fetchProducts, 30000); // Adjust the interval as needed
});

function updateCartCount() {
  const cartCount = document.getElementById('cart-count');
  if (cartCount) {
      // Calculate the total number of items in the cart (you should have this logic implemented)
      const totalItemsInCart = /* Calculate total items */
      cartCount.textContent = totalItemsInCart;
  }
}

// Call the function to update the cart count when needed
updateCartCount();
