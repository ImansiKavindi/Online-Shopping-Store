 function myFunction() {
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("myBtn");

    if (moreText.style.display === "none" || moreText.style.display === "") {
        moreText.style.display = "block";
        btnText.innerHTML = "Read less";
    } else {
        moreText.style.display = "none";
        btnText.innerHTML = "Read more";
    }
}
