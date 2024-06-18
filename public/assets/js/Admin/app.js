// fungsi reviewImage
function previewImage() {
    const photo = document.querySelector("#photo");
    const imgPreview = document.querySelector(".img-preview");

    imgPreview.style.display = "block";

    //data gambar
    const oFReader = new FileReader();
    oFReader.readAsDataURL(photo.files[0]);

    oFReader.onload = function (oFREvent) {
        imgPreview.src = oFREvent.target.result;
    };
}

// fungsi buka tutup modal-add
const buttonCancelAElement = document.getElementById("button-cancel-add");
const buttonCancelUElement = document.getElementById("button-cancel-update");
const iconCancelDElement = document.getElementById("icon-cancel-delete");
const buttonCancelDCElement = document.getElementById("button-cancel-delete");

const buttonAddElement = document.getElementById("button-add");
const modalAddElement = document.getElementById("modal-add");
buttonAddElement.addEventListener("click", () => {
    modalAddElement.classList.remove("hidden");
    modalAddElement.classList.add("flex");
});
buttonCancelAElement.addEventListener("click", () => {
    modalAddElement.classList.remove("flex");
    modalAddElement.classList.add("hidden");
});

const modalUpdateElement = document.getElementById("modal-update");
buttonCancelUElement.addEventListener("click", () => {
    modalUpdateElement.classList.remove("flex");
    modalUpdateElement.classList.add("hidden");
});

const modalDeleteElement = document.getElementById("modal-delete");
iconCancelDElement.addEventListener("click", () => {
    modalDeleteElement.classList.remove("flex");
    modalDeleteElement.classList.add("hidden");
});
buttonCancelDCElement.addEventListener("click", () => {
    modalDeleteElement.classList.remove("flex");
    modalDeleteElement.classList.add("hidden");
});
