let url = 'https://api.sheety.co/8e3d03e0fd61640a3df6c65af4bd6617/restaurantMenu/menuItems';
fetch(url)
.then((response) => response.json())
.then(json => {
    document.getElementById("foodName").innerHTML = json.menuItems[0].item;
    document.getElementById("foodPrice").innerHTML = json.menuItems[0].price;
});