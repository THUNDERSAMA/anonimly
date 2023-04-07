// document.body.contentEditable = true;

var gbl="";

$(document).ready(function () {
  $('#search').click(function () {

    $('#searchoff').animate({
      width: 'toggle'
    }, {
      duration: 400,
      specialEasing: {
        width: 'swing',
        height: 'swing'
      }
    });

    $('#chatoff, #postoff, #profileoff').animate({
      width: 'hide'
    }, {
      duration: 400,
      specialEasing: {
        width: 'swing',
        height: 'swing'
      }
    });

  });

  $('#chat').click(function () {

    $('#chatoff').animate({
      width: 'toggle'
    }, {
      duration: 400,
      specialEasing: {
        width: 'swing',
        height: 'swing'
      }
    });

    $('#searchoff, #postoff, #profileoff').animate({
      width: 'hide'
    }, {
      duration: 400,
      specialEasing: {
        width: 'swing',
        height: 'swing'
      }
    });

  });

  $('#post').click(function () {

    $('#postoff').animate({
      width: 'toggle'
    }, {
      duration: 400,
      specialEasing: {
        width: 'swing',
        height: 'swing'
      }
    });

    $('#chatoff, #searchoff, #profileoff').animate({
      width: 'hide'
    }, {
      duration: 400,
      specialEasing: {
        width: 'swing',
        height: 'swing'
      }
    });

  });


  $('#profile').click(function () {

    // $('#profileoff').slideToggle(400);

    $('#profileoff').animate({
      width: 'toggle'
    });

    $('#searchoff, #chatoff, #postoff').animate({
      width: 'hide'
    });

  });

  $('.dark, .close-parent').click(function () {

    $('#searchoff, #chatoff, #postoff, #profileoff').animate({
      width: 'hide'
    }, {
      duration: 400,
      specialEasing: {
        width: 'swing',
        height: 'swing'
      }
    });

  });

});

// MODALS

// const modal = document.querySelector("#pollmodal");
// const openModal = document.querySelector("#openpoll");
// // const closeModal = document.querySelector(".close-button");

// // modal.showModal();

// openModal.addEventListener("click", () => {
//   modal.style.display = "block";
// });





// const form = document.querySelector(".form-container");

// modalcont.addEventListener("click", () => {
//   modalcont.style.display = "none;"
// });

// window.addEventListener("click", function(e) {
//     if (document.getElementById('form-container').contains(e.target)) {
//       modalcont.style.display = "none;"
//     } else {
//         // Clicked outside the box
//     }
// });

// window.onclick = function () {
//   var form = document.getElementById('form-container');
//   document.onclick = function (div) {
//     if (div.target.id !== 'form-container') {
//       modalcont.style.display = 'none';
//     }
//   };
// };

// $(document).on('click', function (e) {
//   var container = $("#form-container");
//   if (!$(e.target).closest(container).length) {
//     container.hide();
//   }
// });



// IMAGE INPUT

var isAdvancedUpload = function () {
  var div = document.createElement('div');
  return (('draggable' in div) || ('ondragstart' in div && 'ondrop' in div)) && 'FormData' in window && 'FileReader' in window;
}();

let draggableFileArea = document.querySelector(".drag-file-area");
let browseFileText = document.querySelector(".browse-files");
let uploadIcon = document.querySelector(".upload-icon");
let dragDropText = document.querySelector(".dynamic-message");
let fileInput = document.querySelector(".default-file-input");
let cannotUploadMessage = document.querySelector(".cannot-upload-message");
let cancelAlertButton = document.querySelector(".cancel-alert-button");
let uploadedFile = document.querySelector(".file-block");
let fileName = document.querySelector(".file-name");
let fileSize = document.querySelector(".file-size");
let progressBar = document.querySelector(".progress-bar");
let removeFileButton = document.querySelector(".remove-file-icon");
let uploadButton = document.querySelector(".upload-button");
let cancelButton = document.querySelector(".cancel-button");
let coverPreview = document.getElementById('imprv1');
let coverPreview1 = document.getElementById('imprv');
let fileFlag = 0;

fileInput.addEventListener("click", () => {
  fileInput.value = '';
  console.log(fileInput.value);
 
  
});
$("#upl").click(function(){
  $("#mdimg").click();
});
function previewImage(imgD) {
  const reader = new FileReader();
  reader.readAsDataURL(imgD);
  // PREVIEW
  reader.addEventListener("load", function () {
    coverPreview.src = reader.result;
    coverPreview1.src = reader.result;
   // localStorage.setItem("img", reader.result);
    gbl=reader.result;
    //console.log(reader.result);
    console.log(reader.result);
  });
  
}
fileInput.addEventListener("change", e => {
  //fileInput.value=; 
  console.log(" > " + fileInput.files[0]);
  // coverPreview.src = fileInput.value;
  console.log(fileInput.value);
  previewImage(fileInput.files[0]);
  uploadIcon.innerHTML = 'check_circle';
  dragDropText.innerHTML = 'File Dropped Successfully!';
  document.querySelector(".label").innerHTML = `drag & drop or <span class="browse-files"> <input type="file" class="default-file-input" id="mdik" style=""/> <span class="browse-files-text" style="top: 0;"> browse file</span></span>`;
  uploadButton.innerHTML = `Upload`;
  fileName.innerHTML = fileInput.files[0].name;
  fileSize.innerHTML = (fileInput.files[0].size / 1024).toFixed(1) + " KB";
  uploadedFile.style.cssText = "display: flex;";
  progressBar.style.width = 0;
  fileFlag = 0;
});

uploadButton.addEventListener("click", () => {
  let isFileUploaded = fileInput.value;
  if (isFileUploaded != '') {
    
    if (fileFlag == 0) {
      fileFlag = 1;
      var width = 0;
      var id = setInterval(frame, 50);
      function frame() {
        if (width >= 390) {
          clearInterval(id);
          uploadButton.innerHTML = `<span class="material-icons-outlined upload-button-icon"> check_circle </span> Uploaded`;

          cancelButton.innerHTML = 'Done';

          document.querySelector(".addlayout").style.display = "none";
          document.querySelector(".image-parent").style.display = "flex";


        } else {
          width += 39;
          progressBar.style.width = width + "px";
        }
      }
    }
    cannotUploadMessage.style.cssText = "display: none;";
  } else {
    cannotUploadMessage.style.cssText = "display: flex; animation: fadeIn linear 1.5s;";
  }
});

cancelAlertButton.addEventListener("click", () => {
  cannotUploadMessage.style.cssText = "display: none;";
});

//
const cancel = document.querySelector(".cancel-button");
const modalcont = document.querySelector(".modal-container");
const mediabtn = document.querySelector(".add-btn");
const imgedit = document.querySelector(".image-edit");
const imgprev = document.querySelector(".image-preview");
const prevcont = document.querySelector(".preview-container");
const closeimg = document.querySelector("#close-prev");
const uploadContainer = document.querySelector('.upload-files-container');


//EXIT IMAGE INPUT

cancel.addEventListener("click", function () {
  modalcont.style.display = "none";
  document.querySelector('.topbar').style.cssText = "z-index: 11;";
});

// window.onclick = function(event) {

//   if (event.target.contains(uploadContainer) && event.target !== uploadContainer){
//     modalcont.style.display = "none";
//     console.log("Closed");
//   }
// }


mediabtn.addEventListener("click", () => {
  modalcont.style.display = "block";
  document.querySelector('.topbar').style.cssText = "z-index: 14;";
});

//EDIT AND PREVIEW

imgedit.addEventListener("click", () => {
  modalcont.style.display = "flex";
  document.querySelector('.topbar').style.cssText = "z-index: 14;";
});

imgprev.addEventListener("click", () => {
  prevcont.style.display = "flex";
  document.querySelector('.topbar').style.cssText = "z-index: 14;";
});

//CLOSE

closeimg.addEventListener("click", () => {
  prevcont.style.display = "none";
  document.querySelector('.topbar').style.cssText = "z-index: 11;";
});

// window.onclick = function(event) {

//   if (event.target.contains(uploadContainer) && event.target !== uploadContainer){
//     modalcont.style.display = "none";
//     console.log("Closed");
//   }
// }



if (isAdvancedUpload) {
  ["drag", "dragstart", "dragend", "dragover", "dragenter", "dragleave", "drop"].forEach(evt =>
    draggableFileArea.addEventListener(evt, e => {
      e.preventDefault();
      e.stopPropagation();
    })
  );

  ["dragover", "dragenter"].forEach(evt => {
    draggableFileArea.addEventListener(evt, e => {
      e.preventDefault();
      e.stopPropagation();
      uploadIcon.innerHTML = 'file_download';
      dragDropText.innerHTML = 'Drop your file here!';
    });
  });

  draggableFileArea.addEventListener("drop", e => {
    uploadIcon.innerHTML = 'check_circle';
    dragDropText.innerHTML = 'File Dropped Successfully!';
    // document.querySelector(".label").innerHTML = `drag & drop or <span class="browse-files"> <input type="file" class="default-file-input" style=""/> <span class="browse-files-text" style="top: -23px; left: -20px;"> browse file</span> </span>`;
    uploadButton.innerHTML = `Upload`;

    let files = e.dataTransfer.files;
    fileInput.files = files;
    console.log(files[0].name + " " + files[0].size);
    console.log(document.querySelector(".default-file-input").value);
    fileName.innerHTML = files[0].name;
    fileSize.innerHTML = (files[0].size / 1024).toFixed(1) + " KB";
    uploadedFile.style.cssText = "display: flex;";
    progressBar.style.width = 0;
    fileFlag = 0;
  });
}

removeFileButton.addEventListener("click", () => {
  uploadedFile.style.cssText = "display: none;";
  fileInput.value = '';
  uploadIcon.innerHTML = 'file_upload';
  dragDropText.innerHTML = 'Drag & drop any file here';
  document.querySelector(".label").innerHTML = `or <span class="browse-files"> <input type="file" class="default-file-input"/> <span class="browse-files-text">browse file</span> <span>from device</span> </span>`;
  uploadButton.innerHTML = `Upload`;
});


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