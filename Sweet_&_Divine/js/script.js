document.getElementById("orderForm").addEventListener("submit", function(event) {
    event.preventDefault();
    let item = document.getElementById("foodItem").value;
    let quantity = document.getElementById("quantity").value;
    document.getElementById("orderStatus").innerText = `Order placed: ${quantity} x ${item}`;
});

