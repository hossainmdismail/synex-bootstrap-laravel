window.onscroll = function() {
    addShadowOnScroll();
};

function addShadowOnScroll() {
    const header = document.querySelector('header'); // Replace with your specific element selector
    if (window.scrollY > 74) {
        header.style.boxShadow = "rgb(0 0 0 / 16%) 0 4px 8px -1px"; // Adjust shadow properties as needed
    } else {
        header.style.boxShadow = "none";
    }
}
