// const imageChild = document.querySelector(".image-child");
// const prevCont = document.querySelector(".preview-container");
// const prevClose = document.querySelector(".close");
// $(document).ready(function(){
// $(".image-child").click(function(){
//     $(".preview-container").css("display", "flex");
//     //prevCont.style.display = "flex";
// });
// $(".close").click(function(){
//     $(".preview-container").css("display", "none");
//     //prevCont.style.display = "flex";
// });
// });
// imageChild.addEventListener("click", () => {
//     prevCont.style.display = "flex";
// });

// prevClose.addEventListener("click", () => {
//     prevCont.style.display = "none";
// });
const prevcont = document.querySelector(".preview-container");
const closeimg = document.querySelector("#close-prev");
const imgchild = document.querySelector(".image-child");

imgchild.addEventListener("click", () => {
    prevcont.style.display = "flex";
  });
  
  closeimg.addEventListener("click", () => {
    prevcont.style.display = "none";
  });