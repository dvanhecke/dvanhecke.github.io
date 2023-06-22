const burger = document.getElementsByClassName("hamburger")[0];
burger.addEventListener("click", function () {
    const state = burger.getAttribute("clicked");
    if (state === "true") {
        burger.setAttribute("clicked", "false");
        document.getElementById("menu").setAttribute("display", "false");
    }
    else {
        burger.setAttribute("clicked", "true");
        document.getElementById("menu").setAttribute("display", "true");
    }
});