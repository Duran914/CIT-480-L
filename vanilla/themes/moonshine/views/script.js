// DropDown Menu

function dropdownMenu() {
  var x = document.getElementById('DropDownMenuClick');
    if (x.className === "SiteMenu") {
      x.className += " Responsive";
    } else{
      x.className = "SiteMenu";
   }
}

//FaceBook component
(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  /*****************
  YELP component
*****************/

// yelp zipcode search input
const searchZipBtn = document.querySelector('#yelpForm');

let myHeaders = new Headers();
myHeaders.append("Authorization", "Bearer " + yelpApiKey);


function brewerySearch(event){
  // will migrate css in dedicated css file in actual project
  if (document.querySelector('#zipcode').value === '') {
   document.querySelector('#error').style.display = 'block';
    document.querySelector('#error').innerHTML = "Please enter a vaild city or zipcode";
  }else{
  document.querySelector('#error').style.display = "none";
   document.querySelector('#loading').style.display = 'block';
    document.querySelector('#results').innerHTML = '';
     queryBrewsResults();
  }
  event.preventDefault();
}

function queryBrewsResults() {
const zipCode = document.querySelector('#zipcode').value;
const radius = document.querySelector('input[name="mi"]:checked').value * 1609.344; //convert meters to miles
 let xhttp = new XMLHttpRequest;
  xhttp.open("GET", `https://cors-anywhere.herokuapp.com/https://api.yelp.com/v3/businesses/search?categories=breweries&limit=20&location=${zipCode}&distance=${radius}`, true)
   xhttp.setRequestHeader("Authorization", "Bearer " + yelpApiKey);
    xhttp.onreadystatechange = function(){
      if(this.readyState === 4 && this.status === 200){
        const data = JSON.parse(this.responseText);
        let brews = data.businesses;
        let output = '';
          for (let i = 0; i < brews.length; i++) {
            output += `<div class="searchedReturn">
            <div class="breweryReturnImg">
            <img class="yelpImg" src='${brews[i].image_url}'>
            </div>
            <div class="breweryReturnText">
            <strong><span class="breweryNameText">${brews[i].name} <i class="fas fa-beer"></i></span></strong><br>
            <strong class="breweryinfotext">Location:</strong> <a href="https://maps.google.com/?q=58250 ${brews[i].location.address1}, 
            ${brews[i].location.city} ${brews[i].location.state}">${brews[i].location.address1}, 
            ${brews[i].location.city} ${brews[i].location.state}</a> <i class="fas fa-map-marker"></i><br>
            <strong class="breweryinfotext">Phone Number:</strong> <a href="tel:${brews[i].phone}">${brews[i].phone}</a> <i class="fas fa-phone"></i> <br>
            <strong class="breweryinfotext">Price Range:</strong> <i>${brews[i].price}</i><br>
            <strong class="breweryinfotext">Rating:</strong> ${brews[i].rating}/5 <i class="fas fa-star"></i><br>
            <strong class="breweryinfotext">View on Yelp:</strong> <a class="yelpLink" href="${brews[i].url}">Click Me <i class="fab fa-yelp"></i></a><br>
            </div>
            </div><br>
            `;
          }
       document.querySelector('#error').style.display = 'none';
       document.querySelector('#loading').style.display = 'none';
       document.querySelector('#results').innerHTML = output;
      clearFields(zipCode);
       }
       else {
        document.querySelector('#error').style.display = "block";
        document.querySelector('#error').innerHTML = "No brewery found!";
        document.querySelector('#loading').style.display = 'none';
       }  
    }
    xhttp.send();
  }

  clearFields = (zipCode) => {
    zipCode = '';
  }

  /*****************
  BEER component
*****************/  

  function beerSearch(event){
    if (document.querySelector('#beerName').value === '') {
      // will migrate css in dedicated css file in actual project
      document.querySelector('#beerError').style.display = 'block';
       document.querySelector('#beerError').innerHTML = "Please enter a beer name";
     }else{
     document.querySelector('#beerError').style.display = "none";
       queryBeerResults();
     }
   event.preventDefault();
  }
  
  function queryBeerResults() {
    const beerName = document.querySelector('#beerName').value;
    // USING AJAX
      let xhttp = new XMLHttpRequest();
       xhttp.open("GET", `https://api.punkapi.com/v2/beers?beer_name=${beerName}`, true);
        xhttp.onreadystatechange = function() {
         if (this.readyState == 4 && this.status == 200) {
          const beerinfo = JSON.parse(this.responseText);
          let beerOutput = '';
          console.log(beerinfo);
          
           if (beerinfo.length === 0) {
            document.querySelector('#beerError').style.display = "block";
            document.querySelector('#beerError').innerHTML = "No beer found!";
            } else{
            for (let i = 0; i < beerinfo.length; i++) {
              beerOutput += `<div class="searchedBeerReturn">
              <img class="beerImg" src='${beerinfo[i].image_url}'><br>
              <strong>Beer Name:</strong> ${beerinfo[i].name}<br>
              <strong>Description:</strong>${beerinfo[i].description}<br>
              <strong>Alcohol by volume:</strong> ${beerinfo[i].abv}%<br>
              <strong>Food Pairing:</strong> ${beerinfo[i].food_pairing[i]}<br>
              <strong>IBU level:</strong> ${beerinfo[i].ibu}<br>
              <strong>Hops:</strong> ${beerinfo[i].ingredients.hops[i].name}<br>
              </div><br>
              `;
            }
          }
          document.querySelector('#beerInfo').innerHTML = beerOutput;
        }
      }
      xhttp.send();
    }
