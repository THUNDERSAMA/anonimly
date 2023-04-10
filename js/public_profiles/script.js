//COMMENT

const commentBtn = document.querySelector('.comment-button');
const commentContainer = document.querySelector('.comment-container');
const Comment = document.querySelector('.comment');
const commentClose = document.querySelector('.comment-close')

commentBtn.addEventListener("click", () => {
  commentContainer.style.display = "flex";
});

commentClose.addEventListener("click", () => {
  commentContainer.style.display = "none";
});

window.onclick = function(event) {

  if (event.target.contains(Comment) && event.target !== Comment){
    commentContainer.style.display = "none";
    console.log("Closed");
  }
}