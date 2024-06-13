console.log("masuk");

const playContainer = document.querySelectorAll(".play-container");
const showVideoElement = document.querySelector("#showVideo");
const buttonCloseElement = document.querySelector(".button-close");
const contentYtElement = document.querySelector(".content-yt");

playContainer.forEach((div) => {
    div.addEventListener("click", () => {
        showVideoElement.classList.remove("hidden");
        showVideoElement.classList.add("flex");

        const frameYtElement = div.querySelector("iframe");
        frameYtElement.classList.remove("hidden");
        contentYtElement.innerHTML = frameYtElement.outerHTML;
    });
});

const frameYt = document.querySelectorAll("iframe");
buttonCloseElement.addEventListener("click", () => {
    frameYt.forEach((element) => {
        element.classList.add("hidden");
    });
    showVideoElement.classList.remove("flex");
    showVideoElement.classList.add("hidden");
});
