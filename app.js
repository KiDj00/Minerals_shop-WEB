let nameSpan = document.querySelector('.nameSort');
let priceSpan = document.querySelector('.priceSortAsc');
let priceSpan1 = document.querySelector('.priceSortDesc');
let allProductsDiv = document.querySelector('.allProducts');
let searchInput = document.querySelector('.searchInput');

nameSpan.addEventListener('click', () => {
  let sortType = "title";

  $.ajax({
    url: 'ajax.php',
    type: 'POST',
    data: {
      sortType,
    },
    success: (response) => {
      let minerals = JSON.parse(response);
      let html = "";
      minerals.forEach(mineral => {
        html += `<div class="product">
          <a href="post.php?id=${mineral.id}"><img class="mineral-image" src="${mineral.img}" alt="Greska"></a>
          <p>username: ${mineral.username}</p><br>
          <p>mineral: ${mineral.title}</p><br>
          <p>locality: ${mineral.locality}</p><br>
          <p>price: $${mineral.price}</p><br>
          <br><br><br>
        </div>`;
      });

      allProductsDiv.innerHTML = html;
    }
  });
});

priceSpan.addEventListener('click', () => {
  let sortType = "price ASC";

  $.ajax({
    url: 'ajax.php',
    type: 'POST',
    data: {
      sortType,
    },
    success: (response) => {
      let minerals = JSON.parse(response);
      let html = "";
      minerals.forEach(mineral => {
        html += `<div class="product">
          <a href="post.php?id=${mineral.id}"><img class="mineral-image" src="${mineral.img}" alt="Greska"></a>
          <p>username: ${mineral.username}</p><br>
          <p>mineral: ${mineral.title}</p><br>
          <p>locality: ${mineral.locality}</p><br>
          <p>price: $${mineral.price}</p><br>
          <br><br><br>
        </div>`;
      });

      allProductsDiv.innerHTML = html;
    }
  });
});

priceSpan1.addEventListener('click', () => {
  let sortType = "price DESC";

  $.ajax({
    url: 'ajax.php',
    type: 'POST',
    data: {
      sortType,
    },
    success: (response) => {
      let minerals = JSON.parse(response);
      let html = "";
      minerals.forEach(mineral => {
        html += `<div class="product">
          <a href="post.php?id=${mineral.id}"><img class="mineral-image" src="${mineral.img}" alt="Greska"></a>
          <p>username: ${mineral.username}</p><br>
          <p>mineral: ${mineral.title}</p><br>
          <p>locality: ${mineral.locality}</p><br>
          <p>price: $${mineral.price}</p><br>
          <br><br><br>
        </div>`;
      });

      allProductsDiv.innerHTML = html;
    }
  });
});

searchInput.addEventListener('keyup', () => {

  let searchText = searchInput.value;

  $.ajax({
    url: 'ajax.php',
    type: 'POST',
    data: {
      searchText,
    },
    success: (response) => {
      let minerals = JSON.parse(response);
      let html = "";
      minerals.forEach(mineral => {
        html += `<div class="product">
          <a href="post.php?id=${mineral.id}"><img class="mineral-image" src="${mineral.img}" alt="Greska"></a>
          <p>username: ${mineral.username}</p><br>
          <p>mineral: ${mineral.title}</p><br>
          <p>locality: ${mineral.locality}</p><br>
          <p>price: $${mineral.price}</p><br>
          <br><br><br>
        </div>`;
      });

      if(html == ""){
        html = "<strong>Ne postoje minerali sa zadatim nazivom</strong>";
      }

      allProductsDiv.innerHTML = html;
    }
  });


});