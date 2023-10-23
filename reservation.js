document.getElementById("reservation-form").addEventListener("submit", function (e) {
    e.preventDefault();
    
    // Collect form data
    const date = document.getElementById("date").value;
    const time = document.getElementById("time").value;
    const number = document.getElementById("number").value;
    const event = document.getElementById("event").value;
    
    // Send data to the server using AJAX (you can use fetch, axios, or other libraries)
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "reserve.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            const response = JSON.parse(xhr.responseText);
            if (response.success) {
                document.getElementById("confirmation-message").innerHTML = "Reservation successful!";
                document.getElementById("confirmation-message").style.display = "block";
            } else {
                document.getElementById("confirmation-message").innerHTML = "Reservation failed.";
                document.getElementById("confirmation-message").style.color = "red";
                document.getElementById("confirmation-message").style.display = "block";
            }
        }
    };
    
    const data = `name=${name}&email=${email}&date=${date}&time=${time}`;
    xhr.send(data);
});
