document.getElementById("outer3").addEventListener("click", toggleState3);

function toggleState3() {
  let galleryView = document.getElementById("galleryView")
  let tilesView = document.getElementById("tilesView")
  let outer = document.getElementById("outer3");
  let slider = document.getElementById("slider3");
  let tilesContainer = document.getElementById("tilesContainer");
  if (slider.classList.contains("active")) {
    slider.classList.remove("active");
    outer.classList.remove("outerActive");
    galleryView.style.display = "flex";
    tilesView.style.display = "none";

    while (tilesContainer.hasChildNodes()) {
      tilesContainer.removeChild(tilesContainer.firstChild)
    }
  } else {
    slider.classList.add("active");
    outer.classList.add("outerActive");
    galleryView.style.display = "none";
    tilesView.style.display = "flex";

    for (let i = 0; i < imgObject.length - 1; i++) {
      let tileItem = document.createElement("div");
      tileItem.classList.add("tileItem");
      tileItem.style.background = "url(" + imgObject[i] + ")";
      tileItem.style.backgroundSize = "contain";
      tilesContainer.appendChild(tileItem);
    }
  };
}

let imgObject = [
  "https://ichip.ru/images/cache/2022/1/17/fit_960_530_false_crop_1920_1080_0_0_q90_564332_c5f198e461065f31d937b6aca.webp",
  "https://cdn.eteknix.com/wp-content/uploads/2020/11/1-compressed-5-2.jpg",
  "https://th.bing.com/th/id/R.af58eba7a8c54cca8faf4ae3d3308d6c?rik=hc%2b5GSK4NvSG2w&pid=ImgRaw&r=0",
  "https://1.bp.blogspot.com/-xFBCVRYgQl8/XPDvG6nXE5I/AAAAAAAAAic/-uIMMimoPvIlml7BFDZqD3lKwbmiUF0_QCLcBGAs/s1600/counter_strike_global_offensive_thumb800%2B%25281%2529.jpg",
  "https://www.jvfrance.com/wp-content/uploads/2020/06/Resident-Evil-Village-890x501.jpg",
  "https://m.media-amazon.com/images/I/91Vk1mS1x3L._AC_SX466_.png",
  "https://www.journaldugeek.com/files/2014/03/364593-600x337.jpg",
  "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTuNWfRJp7ensxp3CVdftAmjk00kjfKHor7Jpbpbibma0y6MdZ6OR-2BJHKcg6-wrgwYI8&usqp=CAU",
  "https://i.jeuxactus.com/datas/jeux/s/t/street-fighter-5/xl/street-fighter-5-5f2b0805b38a1.jpg",
  "https://images.ladepeche.fr/api/v1/images/view/5c6400343e454613ff216f05/large/image.jpg",
];

let mainImg = 0;
let prevImg = imgObject.length - 1;
let nextImg = 1;

function loadGallery() {

  let mainView = document.getElementById("mainView");
  mainView.style.background = "url(" + imgObject[mainImg] + ")";

  let leftView = document.getElementById("leftView");
  leftView.style.background = "url(" + imgObject[prevImg] + ")";

  let rightView = document.getElementById("rightView");
  rightView.style.background = "url(" + imgObject[nextImg] + ")";

  let linkTag = document.getElementById("linkTag")
  linkTag.href = imgObject[mainImg];

};

function scrollRight() {

  prevImg = mainImg;
  mainImg = nextImg;
  if (nextImg >= (imgObject.length - 1)) {
    nextImg = 0;
  } else {
    nextImg++;
  };
  loadGallery();
};

function scrollLeft() {
  nextImg = mainImg
  mainImg = prevImg;

  if (prevImg === 0) {
    prevImg = imgObject.length - 1;
  } else {
    prevImg--;
  };
  loadGallery();
};

document.getElementById("navRight").addEventListener("click", scrollRight);
document.getElementById("navLeft").addEventListener("click", scrollLeft);
document.getElementById("rightView").addEventListener("click", scrollRight);
document.getElementById("leftView").addEventListener("click", scrollLeft);
document.addEventListener('keyup', function (e) {
  if (e.keyCode === 37) {
    scrollLeft();
  } else if (e.keyCode === 39) {
    scrollRight();
  }
});

loadGallery();





const titreSpans = document.querySelectorAll('h1 span');
const btns = document.querySelectorAll('.btn-first');
const logo = document.querySelector('.logo');
const medias = document.querySelectorAll('.bulle');
const l1 = document.querySelector('.l1');
const l2 = document.querySelector('.l2');


window.addEventListener('load', () => {

  staggerFrom(titreSpans, 1, {
      top: -50,
      opacity: 0,
      ease: "power2.out"
    }, 0.3)
    .staggerFrom(btns, 1, {
      opacity: 0,
      ease: "power2.out"
    }, 0.3, '-=1')
    .from(l1, 1, {
      width: 0,
      ease: "power2.out"
    }, '-=2')
    .from(l2, 1, {
      width: 0,
      ease: "power2.out"
    }, '-=2')
    .from(logo, 0.4, {
      transform: "scale(0)",
      ease: "power2.out"
    }, '-=2')
    .staggerFrom(medias, 1, {
      right: -200,
      ease: "power2.out"
    }, 0.3, '-=1');
  TL.play();
})