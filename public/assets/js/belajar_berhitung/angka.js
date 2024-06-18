console.log("masuk");

const item_number = document.querySelectorAll(".img");

item_number.forEach((div) => {
    const deskripsi_angka = div.classList[1];
    div.addEventListener("click", () => {
        const data_angka = document.querySelectorAll(`ul.${deskripsi_angka}`);
        data_angka.forEach((elementUl) => {
            const liAngkaInt =
                elementUl.querySelector("li.angka-int").textContent;
            const liAngkaDes =
                elementUl.querySelector("li.angka-des").textContent;
            const liImgAngka =
                elementUl.querySelector("li.img-angka").textContent;

            const img_angka = document.querySelector(".img_angka");
            img_angka.removeAttribute("src");
            img_angka.setAttribute(
                "src",
                `/assets/img/counting-features/icon-angka/${liImgAngka}.jpg `
            );

            const containerItemMobil = document.querySelector(
                ".container-img-mobil"
            );
            containerItemMobil.innerHTML = "";
            const sumMobil = parseInt(liAngkaInt);
            const imgClass = "w-[70px]";

            for (let i = 1; i <= sumMobil; i++) {
                const imgElement = document.createElement("img");
                imgElement.src = "/assets/img/counting-features/icon-mobil.png";
                imgElement.alt = "gambar mobil";
                imgElement.classList.add(imgClass);

                containerItemMobil.appendChild(imgElement);
            }
            console.log(containerItemMobil);

            let textToSpeak = `Ini adalah angka ${liAngkaDes}`;
            const synthesis = window.speechSynthesis;
            const utterance = new SpeechSynthesisUtterance(textToSpeak);

            utterance.lang = "id-ID";
            return synthesis.speak(utterance);
        });
    });
});
