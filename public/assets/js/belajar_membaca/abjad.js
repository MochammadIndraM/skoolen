console.log("masuk");

let data1_abjad;
const data_abjad = document.querySelectorAll(".img");
const data_img_abjad = document.querySelectorAll(".img-abjad");

data_abjad.forEach((div) => {
    const abjad_img = div.classList[1];
    div.addEventListener("click", () => {
        const data_abjad_img = document.querySelectorAll(`ul.${abjad_img}`);
        data_abjad_img.forEach((elementUl) => {
            const liHurufContent =
                elementUl.querySelector("li.abjad-huruf").textContent;
            const liImgDesContent =
                elementUl.querySelector("li.abjad-imgDes").textContent;
            const liDesContent =
                elementUl.querySelector("li.abjad-deskripsi").textContent;

            let textToSpeak = `Ini adalah huruf ${
                liHurufContent[0]
            }, ${liImgDesContent.substring(2)}`;
            console.log(textToSpeak);

            const textHuruf = document.querySelector(".text-huruf");
            textHuruf.innerHTML = liHurufContent;

            const desImg = document.querySelector(".des-img");
            desImg.removeAttribute("src");
            desImg.setAttribute(
                "src",
                `assets/img/reading-features/deskripsi-abjad/${liImgDesContent}.jpg`
            );

            const textDes = document.querySelector(".text-des");
            textDes.innerHTML = liDesContent;

            const synthesis = window.speechSynthesis;
            const utterance = new SpeechSynthesisUtterance(textToSpeak);

            return synthesis.speak(utterance);
        });
    });
});
