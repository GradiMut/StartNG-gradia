var modal = document.getElementById("myModal"); // get modal

var btn = document.getElementById("myBtn"); // get button to open modal

// open the modal when click on button
btn.onclick = function() {
    modal.style.display = "block";
}

// close when user click outside of the modal
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none"
    }
}
