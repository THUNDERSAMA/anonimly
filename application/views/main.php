<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script defer src="<?php echo base_url("js/script.js")?>"></script>
  <link rel="stylesheet" href="<?php echo base_url("css/style.css")?>" />
  <link rel="stylesheet" href="<?php echo base_url("css/style-cards.css")?>" />
  <link rel="stylesheet" href="<?php echo base_url("css/style-offcanvas.css")?>" />
  <link rel="stylesheet" href="<?php echo base_url("css/style-modals.css")?>" />
  <link rel="stylesheet" href="<?php echo base_url("css/style-comments.css")?>" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

  <link rel="icon" type="image/x-icon" href="<?php echo base_url("images/rotating-planet.png")?>">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/font-awesome.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

  <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined" rel="stylesheet" />
  <title>Main Feed</title>
  <style>
     .loader {
              display: none;
    position: fixed;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    z-index: 999;
    background: rgba(0, 0, 0, 0.38) url("<?php echo base_url("/images/loader.gif")?>") center no-repeat;;
border-radius: 16px;
box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
backdrop-filter: blur(5.3px);
-webkit-backdrop-filter: blur(5.3px);
border: 1px solid rgba(0, 0, 0, 0.68);



    /* background: rgba(255,255,255,0.8)  */
}

body.loading{
    overflow: hidden;   
}
/* Make spinner image visible when body element has the loading class */
body.loading .loader{
    display: block;
}
  </style>
</head>

<body>
  <!-- MODALS -->
  <?php
$this->load->library('session');
 // $this->session->userdata('auth');

?>
<!-- <h1></h1> -->
  <nav class="modal-container">
    <form class="form-container" id="form-container" enctype="multipart/form-data">
      <div class="upload-files-container">
        <div class="drag-file-area">
          <span class="material-icons-outlined upload-icon"> file_upload </span>
          <h3 class="dynamic-message">Drag & drop any file here</h3>
          <label class="label">or
            <span class="browse-files">
              <input type="file" class="default-file-input" id="mdimg"/>
              <span class="browse-files-text">browse file</span>
              <span> from device </span>
            </span>
          </label>
        </div>
        <span class="cannot-upload-message">
          <span class="material-icons-outlined">error</span>
          Please select a file first
          <span class="material-icons-outlined cancel-alert-button">cancel</span>
        </span>
        <div class="file-block">
          <div class="file-info">
            <span class="material-icons-outlined file-icon">description</span>
            <span class="file-name"> </span> | <span class="file-size"> </span>
          </div>
          <span class="material-icons remove-file-icon">delete</span>
          <div class="progress-bar"></div>
        </div>
        <div class="buttons">
          <button class="upload-button" id="upl">Upload</button>
          <button class="cancel-button">Cancel</button>
        </div>
      </div>
    </form>
  </nav>

  <!-- <nav class="modal-container">
    <div class="modal" id="pollmodal">
      <div class="poll-head">
        Create Poll
      </div>
      <div class="poll-form">
        <form action="">
          <textarea name="" placeholder=" Write something..."></textarea>
          <input type="text" placeholder=" + Add option">
          <input type="text" placeholder=" + Add option">
          
        </form>
        <button>
          +
        </button>
      </div>
    </div>
  </nav> -->

  <nav class="navbar bg-glass">
    <ul class="navbar-nav">
      <li class="logo">
        <a href="#" class="nav-link">
          <span class="link-text logo-text">campuspace</span>
          <svg height="150" viewBox="0 0 107 107" class="css-1j8o68f">
            <path xmlns="http://www.w3.org/2000/svg"
              d="M86.386 27.227c7.55 0 13.614-6.064 13.614-13.614S93.936 0 86.386 0 72.772 6.064 72.772 13.613c0 3.59 1.486 6.931 3.713 9.406L59.901 40.593c-2.475-2.351-5.817-3.836-9.406-3.836-3.589 0-6.93 1.361-9.282 3.713L24.63 25.247c1.114-1.485 1.733-3.342 1.733-5.322 0-4.95-4.084-9.034-9.035-9.034s-9.035 4.084-9.035 9.034 4.085 9.035 9.035 9.035c2.352 0 4.456-.867 6.064-2.352l16.585 15.223a13.749 13.749 0 0 0-2.97 8.54c0 3.589 1.36 6.807 3.588 9.158L22.278 78.836c-2.352-1.98-5.322-3.094-8.664-3.094C6.064 75.742 0 81.806 0 89.356s6.065 13.613 13.614 13.613 13.614-6.064 13.614-13.613c0-3.59-1.361-6.807-3.59-9.159L41.833 60.89c2.351 1.98 5.322 3.094 8.663 3.094h.62l2.35 21.04c-4.95.99-8.787 5.322-8.787 10.644 0 6.064 4.827 10.89 10.892 10.89s10.89-4.826 10.89-10.89-4.826-10.892-10.89-10.892h-.372l-2.351-21.04c3.218-.618 6.064-2.227 8.044-4.702l16.832 12.129c-.743 1.361-1.238 2.846-1.238 4.579 0 4.95 4.084 9.034 9.035 9.034s9.035-4.084 9.035-9.034-4.085-9.035-9.035-9.035c-2.723 0-5.074 1.238-6.683 3.094L62.005 57.673a13.171 13.171 0 0 0 2.104-7.179c0-3.217-1.114-6.064-2.97-8.415L77.847 24.38c2.351 1.732 5.321 2.846 8.54 2.846z"
              fill="#df49a6" />
          </svg>
        </a>
      </li>
      <li class="nav-item" id="search">
        <a href="#offcanvas" class="nav-link">
          <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF">
            <path d="M0 0h24v24H0V0z" fill="none" />
            <path
              d="M15.5 14h-.79l-.28-.27c1.2-1.4 1.82-3.31 1.48-5.34-.47-2.78-2.79-5-5.59-5.34-4.23-.52-7.79 3.04-7.27 7.27.34 2.8 2.56 5.12 5.34 5.59 2.03.34 3.94-.28 5.34-1.48l.27.28v.79l4.25 4.25c.41.41 1.08.41 1.49 0 .41-.41.41-1.08 0-1.49L15.5 14zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"
              fill="currentColor" class="fa-secondary" />
          </svg>
          <span class="link-text">Search</span>
        </a>
      </li>

      <li class="nav-item" id="chat">
        <a href="#" class="nav-link">
          <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF">
            <path d="M0 0h24v24H0V0z" fill="none" />
            <path
              d="M22 6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6zm-2 0l-8 4.99L4 6h16zm0 12H4V8l8 5 8-5v10z"
              fill="currentColor" class="fa-secondary" />
          </svg>
          <span class="link-text">Global Chat</span>
        </a>
      </li>

      <li class="nav-item" id="post">
        <a href="#" class="nav-link">
          <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF">
            <path d="M0 0h24v24H0V0z" fill="none" />
            <path
              d="M13 7h-2v4H7v2h4v4h2v-4h4v-2h-4V7zm-1-5C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"
              fill="currentColor" class="fa-secondary" />
          </svg>
          <span class="link-text">New Post</span>
        </a>
      </li>

      <li class="nav-item" id="logout">
        <a href="#" class="nav-link">
          <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF">
            <path d="M0 0h24v24H0V0z" fill="none" />
            <path
              d="M15 8v8H5V8h10m1-2H4c-.55 0-1 .45-1 1v10c0 .55.45 1 1 1h12c.55 0 1-.45 1-1v-3.5l4 4v-11l-4 4V7c0-.55-.45-1-1-1z" fill="currentColor" class="fa-secondary"/>
          </svg>
          <span class="link-text">Video Call</span>
        </a>
      </li>

      <li class="nav-item" id="profile">
        <a href="#" class="nav-link">
          <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF">
            <path d="M0 0h24v24H0V0z" fill="none" />
            <path
              d="M12 5.9c1.16 0 2.1.94 2.1 2.1s-.94 2.1-2.1 2.1S9.9 9.16 9.9 8s.94-2.1 2.1-2.1m0 9c2.97 0 6.1 1.46 6.1 2.1v1.1H5.9V17c0-.64 3.13-2.1 6.1-2.1M12 4C9.79 4 8 5.79 8 8s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 9c-2.67 0-8 1.34-8 4v3h16v-3c0-2.66-5.33-4-8-4z"
              fill="currentColor" class="fa-secondary" />
          </svg>
          <span class="link-text">Profile</span>
        </a>
      </li>
 

    
      <!-- <li class="nav-item" id="themeButton">
        <a href="#" class="nav-link">
          <svg class="theme-icon" id="lightIcon" aria-hidden="true" focusable="false" data-prefix="fad"
            data-icon="moon-stars" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
            class="svg-inline--fa fa-moon-stars fa-w-16 fa-7x">
            <g class="fa-group">
              <path fill="currentColor"
                d="M320 32L304 0l-16 32-32 16 32 16 16 32 16-32 32-16zm138.7 149.3L432 128l-26.7 53.3L352 208l53.3 26.7L432 288l26.7-53.3L512 208z"
                class="fa-secondary"></path>
              <path fill="currentColor"
                d="M332.2 426.4c8.1-1.6 13.9 8 8.6 14.5a191.18 191.18 0 0 1-149 71.1C85.8 512 0 426 0 320c0-120 108.7-210.6 227-188.8 8.2 1.6 10.1 12.6 2.8 16.7a150.3 150.3 0 0 0-76.1 130.8c0 94 85.4 165.4 178.5 147.7z"
                class="fa-primary"></path>
            </g>
          </svg>
          <svg class="theme-icon" id="solarIcon" aria-hidden="true" focusable="false" data-prefix="fad" data-icon="sun"
            role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
            class="svg-inline--fa fa-sun fa-w-16 fa-7x">
            <g class="fa-group">
              <path fill="currentColor"
                d="M502.42 240.5l-94.7-47.3 33.5-100.4c4.5-13.6-8.4-26.5-21.9-21.9l-100.4 33.5-47.41-94.8a17.31 17.31 0 0 0-31 0l-47.3 94.7L92.7 70.8c-13.6-4.5-26.5 8.4-21.9 21.9l33.5 100.4-94.7 47.4a17.31 17.31 0 0 0 0 31l94.7 47.3-33.5 100.5c-4.5 13.6 8.4 26.5 21.9 21.9l100.41-33.5 47.3 94.7a17.31 17.31 0 0 0 31 0l47.31-94.7 100.4 33.5c13.6 4.5 26.5-8.4 21.9-21.9l-33.5-100.4 94.7-47.3a17.33 17.33 0 0 0 .2-31.1zm-155.9 106c-49.91 49.9-131.11 49.9-181 0a128.13 128.13 0 0 1 0-181c49.9-49.9 131.1-49.9 181 0a128.13 128.13 0 0 1 0 181z"
                class="fa-secondary"></path>
              <path fill="currentColor" d="M352 256a96 96 0 1 1-96-96 96.15 96.15 0 0 1 96 96z" class="fa-primary">
              </path>
            </g>
          </svg>
          <svg class="theme-icon" id="darkIcon" aria-hidden="true" focusable="false" data-prefix="fad"
            data-icon="sunglasses" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
            class="svg-inline--fa fa-sunglasses fa-w-18 fa-7x">
            <g class="fa-group">
              <path fill="currentColor"
                d="M574.09 280.38L528.75 98.66a87.94 87.94 0 0 0-113.19-62.14l-15.25 5.08a16 16 0 0 0-10.12 20.25L395.25 77a16 16 0 0 0 20.22 10.13l13.19-4.39c10.87-3.63 23-3.57 33.15 1.73a39.59 39.59 0 0 1 20.38 25.81l38.47 153.83a276.7 276.7 0 0 0-81.22-12.47c-34.75 0-74 7-114.85 26.75h-73.18c-40.85-19.75-80.07-26.75-114.85-26.75a276.75 276.75 0 0 0-81.22 12.45l38.47-153.8a39.61 39.61 0 0 1 20.38-25.82c10.15-5.29 22.28-5.34 33.15-1.73l13.16 4.39A16 16 0 0 0 180.75 77l5.06-15.19a16 16 0 0 0-10.12-20.21l-15.25-5.08A87.95 87.95 0 0 0 47.25 98.65L1.91 280.38A75.35 75.35 0 0 0 0 295.86v70.25C0 429 51.59 480 115.19 480h37.12c60.28 0 110.38-45.94 114.88-105.37l2.93-38.63h35.76l2.93 38.63c4.5 59.43 54.6 105.37 114.88 105.37h37.12C524.41 480 576 429 576 366.13v-70.25a62.67 62.67 0 0 0-1.91-15.5zM203.38 369.8c-2 25.9-24.41 46.2-51.07 46.2h-37.12C87 416 64 393.63 64 366.11v-37.55a217.35 217.35 0 0 1 72.59-12.9 196.51 196.51 0 0 1 69.91 12.9zM512 366.13c0 27.5-23 49.87-51.19 49.87h-37.12c-26.69 0-49.1-20.3-51.07-46.2l-3.12-41.24a196.55 196.55 0 0 1 69.94-12.9A217.41 217.41 0 0 1 512 328.58z"
                class="fa-secondary"></path>
              <path fill="currentColor"
                d="M64.19 367.9c0-.61-.19-1.18-.19-1.8 0 27.53 23 49.9 51.19 49.9h37.12c26.66 0 49.1-20.3 51.07-46.2l3.12-41.24c-14-5.29-28.31-8.38-42.78-10.42zm404-50l-95.83 47.91.3 4c2 25.9 24.38 46.2 51.07 46.2h37.12C489 416 512 393.63 512 366.13v-37.55a227.76 227.76 0 0 0-43.85-10.66z"
                class="fa-primary"></path>
            </g>
          </svg>
          <span class="link-text">Theme</span>
        </a>
      </li> -->
    </ul>
  </nav>

  <span>
    <div class="topbar">
      <a href="#" class="nav-lik">
        <span class="link-txt logo-txt">campuspace</span>
        <svg height="150" viewBox="0 0 107 107" class="css-1j8o68f">
          <path xmlns="http://www.w3.org/2000/svg"
            d="M86.386 27.227c7.55 0 13.614-6.064 13.614-13.614S93.936 0 86.386 0 72.772 6.064 72.772 13.613c0 3.59 1.486 6.931 3.713 9.406L59.901 40.593c-2.475-2.351-5.817-3.836-9.406-3.836-3.589 0-6.93 1.361-9.282 3.713L24.63 25.247c1.114-1.485 1.733-3.342 1.733-5.322 0-4.95-4.084-9.034-9.035-9.034s-9.035 4.084-9.035 9.034 4.085 9.035 9.035 9.035c2.352 0 4.456-.867 6.064-2.352l16.585 15.223a13.749 13.749 0 0 0-2.97 8.54c0 3.589 1.36 6.807 3.588 9.158L22.278 78.836c-2.352-1.98-5.322-3.094-8.664-3.094C6.064 75.742 0 81.806 0 89.356s6.065 13.613 13.614 13.613 13.614-6.064 13.614-13.613c0-3.59-1.361-6.807-3.59-9.159L41.833 60.89c2.351 1.98 5.322 3.094 8.663 3.094h.62l2.35 21.04c-4.95.99-8.787 5.322-8.787 10.644 0 6.064 4.827 10.89 10.892 10.89s10.89-4.826 10.89-10.89-4.826-10.892-10.89-10.892h-.372l-2.351-21.04c3.218-.618 6.064-2.227 8.044-4.702l16.832 12.129c-.743 1.361-1.238 2.846-1.238 4.579 0 4.95 4.084 9.034 9.035 9.034s9.035-4.084 9.035-9.034-4.085-9.035-9.035-9.035c-2.723 0-5.074 1.238-6.683 3.094L62.005 57.673a13.171 13.171 0 0 0 2.104-7.179c0-3.217-1.114-6.064-2.97-8.415L77.847 24.38c2.351 1.732 5.321 2.846 8.54 2.846z"
            fill="#df49a6" />
        </svg>
      </a>
    </div>
  </span>

  <!-- SEARCH BOX -->
  <nav>
    <div class="offcanvas" id="searchoff">
      <div class="offc1">
        <input type="text" placeholder="Type here to search..." autofocus />
      </div>
      <div class="close-parent">
        <div class="close">
          <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFFaa"
            class="fa-secondary">
            <path d="M0 0h24v24H0V0z" fill="none" />
            <path
              d="M18.3 5.71c-.39-.39-1.02-.39-1.41 0L12 10.59 7.11 5.7c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41L10.59 12 5.7 16.89c-.39.39-.39 1.02 0 1.41.39.39 1.02.39 1.41 0L12 13.41l4.89 4.89c.39.39 1.02.39 1.41 0 .39-.39.39-1.02 0-1.41L13.41 12l4.89-4.89c.38-.38.38-1.02 0-1.4z" />
          </svg>
        </div>
      </div>
      <div class="search-container">
        <li class="suggest">
          <a href="">trending 1</a>
        </li>
        <li class="suggest">
          <a href="">trending 2</a>
        </li>
        <li class="suggest">
          <a href="">trending 3</a>
        </li>
      </div>
    </div>
  </nav>

  <!-- NEW POST -->
  <nav>
    <div class="offcanvas" id="postoff">
      <div class="offc2">New Post</div>
      <div class="close-parent">
        <div class="close">
          <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFFaa"
            class="fa-secondary">
            <path d="M0 0h24v24H0V0z" fill="none" />
            <path
              d="M18.3 5.71c-.39-.39-1.02-.39-1.41 0L12 10.59 7.11 5.7c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41L10.59 12 5.7 16.89c-.39.39-.39 1.02 0 1.41.39.39 1.02.39 1.41 0L12 13.41l4.89 4.89c.39.39 1.02.39 1.41 0 .39-.39.39-1.02 0-1.41L13.41 12l4.89-4.89c.38-.38.38-1.02 0-1.4z" />
          </svg>
        </div>
      </div>
      <div class="create-post-container">
        <div class="create-post">
          <textarea class="post-title" type="text" placeholder="Give a title..." id="title"></textarea>

          <!-- <hr> -->

          <textarea class="post-descrp" type="text" placeholder="Type something..." autofocus id="body"></textarea>

          <span class="addlayout">
            <span class="add-btn add-btn-1">
              <img src="<?php echo base_url("svg-sources/image_white_24dp.svg")?>" alt="ico" />
              <button href="">Add Image</button>
            </span>
            <!-- <span class="add-btn add-btn-2">
              <img src="<?php echo base_url("svg-sources/videocam_white_24dp.svg")?>" alt="ico" />
              <button href="">Add Video</button>
            </span> -->
            <!-- <span class="add-btn" id="openpoll">
              <img src="<?php echo base_url("svg-sources/poll_white_24dp.svg")?>" alt="ico">
              <button href="">Polls</button>
            </span> -->
          </span>

          <div class="image-parent">
            <div class="image-added-container">
              <div class="image-added">
                <img
                  src=""
                  alt="imgg" id="imprv" />
                Media added!
              </div>

              <span>
                <button class="image-preview">Preview</button>
                <button class="image-edit">Edit</button>
                <button class="image-del">Delete</button>
              </span>
            </div>
          </div>
        </div>

        <div class="postnow">
          <button class="postnow-btn" id="pupload">Post</button>
        </div>
      </div>
    </div>
  </nav>

  <nav class="preview-container">
    <div class="preview-child">
      <button class="close close-prev" id="close-prev">
        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFFaa"
          class="fa-secondary">
          <path d="M0 0h24v24H0V0z" fill="none" />
          <path
            d="M18.3 5.71c-.39-.39-1.02-.39-1.41 0L12 10.59 7.11 5.7c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41L10.59 12 5.7 16.89c-.39.39-.39 1.02 0 1.41.39.39 1.02.39 1.41 0L12 13.41l4.89 4.89c.39.39 1.02.39 1.41 0 .39-.39.39-1.02 0-1.41L13.41 12l4.89-4.89c.38-.38.38-1.02 0-1.4z" />
        </svg>
      </button>
      <img  alt="imgg" id="imprv1"/>
    </div>

  </nav>

  <!-- GLOBAL CHAT -->
  <nav>
    <div class="offcanvas" id="chatoff">
      <div class="offc2">Global Chat</div>
      <div class="close-parent">
        <div class="close">
          <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFFaa"
            class="fa-secondary">
            <path d="M0 0h24v24H0V0z" fill="none" />
            <path
              d="M18.3 5.71c-.39-.39-1.02-.39-1.41 0L12 10.59 7.11 5.7c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41L10.59 12 5.7 16.89c-.39.39-.39 1.02 0 1.41.39.39 1.02.39 1.41 0L12 13.41l4.89 4.89c.39.39 1.02.39 1.41 0 .39-.39.39-1.02 0-1.41L13.41 12l4.89-4.89c.38-.38.38-1.02 0-1.4z" />
          </svg>
        </div>
      </div>
      <div class="chat">
        <div class="chat-container">
          <div class="chat-left">
            <div class="chat-pfp">
              <img
                src="https://images.unsplash.com/photo-1457449940276-e8deed18bfff?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                alt="pfp" />
            </div>
            <div class="chat-text">Hello World</div>
          </div>

          <div class="chat-right">
            <div class="chat-text">How are you?</div>
            <div class="chat-pfp">
              <img
                src="https://media.licdn.com/dms/image/D4D03AQH527wsfrdxUA/profile-displayphoto-shrink_200_200/0/1677842168072?e=1684972800&v=beta&t=AxrRYLvpR5qhXCoFaJrU4c6DqhFfk5LSp4AFuBG0D0o"
                alt="pfp" />
            </div>
          </div>

          <div class="chat-left">
            <div class="chat-pfp">
              <img
                src="https://images.unsplash.com/photo-1457449940276-e8deed18bfff?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                alt="pfp" />
            </div>
            <div class="chat-text">Did you hear about campuspace?</div>
          </div>

          <div class="chat-right">
            <div class="chat-text">Yeah, crazy stuff right!</div>
            <div class="chat-pfp">
              <img
                src="https://media.licdn.com/dms/image/D4D03AQH527wsfrdxUA/profile-displayphoto-shrink_200_200/0/1677842168072?e=1684972800&v=beta&t=AxrRYLvpR5qhXCoFaJrU4c6DqhFfk5LSp4AFuBG0D0o"
                alt="pfp" />
            </div>
          </div>
        </div>
      </div>
      <div class="chat-input">
        <div>
          <textarea autoresize placeholder="Send a chat..."></textarea>
        </div>

        <img src="<?php echo base_url("svg-sources/send_white_24dp.svg")?>" alt="Send" />
      </div>
    </div>
  </nav>

  <!-- PROFILE -->

  <nav class="pfp-nav">
    <div class="offcanvas" id="profileoff">
      <div class="offc2">Profile</div>
      <div class="close-parent">
        <div class="close">
          <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFFaa"
            class="fa-secondary">
            <path d="M0 0h24v24H0V0z" fill="none" />
            <path
              d="M18.3 5.71c-.39-.39-1.02-.39-1.41 0L12 10.59 7.11 5.7c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41L10.59 12 5.7 16.89c-.39.39-.39 1.02 0 1.41.39.39 1.02.39 1.41 0L12 13.41l4.89 4.89c.39.39 1.02.39 1.41 0 .39-.39.39-1.02 0-1.41L13.41 12l4.89-4.89c.38-.38.38-1.02 0-1.4z" />
          </svg>
        </div>
      </div>

      <div class="profile-container">
        <div class="pfpimg-container">
          <img
            src="<?php echo ($this->session->userdata('auth')['IMAGES']); ?>"
            alt="pfpimg" />
        </div>
        <div class="pfp-name">
          <h2><?php echo ($this->session->userdata('auth')['SIID']); ?></h2>
        </div>
        <div class="pfp-bio">
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
        </div>

        <div class="profile-info">
          <div class="inf">
            <h3>434K</h3>
            <small>followers</small>
          </div>
          <div class="inf">
            <h3>545K</h3>
            <small>following</small>
          </div>
        </div>

        <div class="profile-more">
          <button href="">See More</button>
          <img src="<?php echo base_url("svg-sources/arrow_outward_white_24dp.svg")?>" alt="" />
        </div>
      </div>
    </div>
  </nav>

  <!-- COMMENTS -->

  <nav class="comment-container">
    <div class="comment">
      <div class="comment-post-title">
        <a href="#">
          Comments
        </a>
        <div class="close comment-close">
          <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFFaa"
            class="fa-secondary">
            <path d="M0 0h24v24H0V0z" fill="none" />
            <path
              d="M18.3 5.71c-.39-.39-1.02-.39-1.41 0L12 10.59 7.11 5.7c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41L10.59 12 5.7 16.89c-.39.39-.39 1.02 0 1.41.39.39 1.02.39 1.41 0L12 13.41l4.89 4.89c.39.39 1.02.39 1.41 0 .39-.39.39-1.02 0-1.41L13.41 12l4.89-4.89c.38-.38.38-1.02 0-1.4z" />
          </svg>
        </div>
      </div>

      <div class="posted-comment" id="pscmts">

        <div class="dark-container ">

          <a class="dark-pfp" href="#">
            <img
              src="https://media.licdn.com/dms/image/D4D03AQH527wsfrdxUA/profile-displayphoto-shrink_200_200/0/1677842168072?e=1684972800&v=beta&t=AxrRYLvpR5qhXCoFaJrU4c6DqhFfk5LSp4AFuBG0D0o"
              alt="">
          </a>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et inventore Atque rerum
          iusto laborum earum! Iure eveniet est corporis?
          <ul class="comment-react">
            <li class="react-like">
              <a href="#">
                <img src="<?php echo base_url("svg-sources/thumb_up_white_24dp.svg")?>" alt="ico" />
              </a>
            </li>

            <li class="react-dislike">
              <a href="#">
                <img src="<?php echo base_url("svg-sources/thumb_down_white_24dp.svg")?>" alt="ico" />
              </a>
            </li>
          </ul>
        </div>

        <div class="dark-container">

          <a class="dark-pfp" href="#">
            <img
              src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=388&q=80"
              alt="">
          </a>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et inventore Atque rerum
          iusto laborum earum! Iure eveniet est corporis?
          <ul class="comment-react">
            <li class="react-like">
              <a href="#">
                <img src="<?php echo base_url("svg-sources/thumb_up_white_24dp.svg")?>" alt="ico" />
              </a>
            </li>

            <li class="react-dislike">
              <a href="#">
                <img src="<?php echo base_url("svg-sources/thumb_down_white_24dp.svg")?>" alt="ico" />
              </a>
            </li>
          </ul>
        </div>
        <div class="dark-container">

          <a class="dark-pfp" href="#">
            <img
              src="https://images.unsplash.com/photo-1574100004472-e536d3b6bacc?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80"
              alt="">
          </a>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et inventstrum dolorum. Obcaecati?Lorem ipsum dolor
          sit amet
          consectetur adipisicing elit. Earrporis?
          <ul class="comment-react">
            <li class="react-like">
              <a href="#">
                <img src="<?php echo base_url("svg-sources/thumb_up_white_24dp.svg")?>" alt="ico" />
              </a>
            </li>

            <li class="react-dislike">
              <a href="#">
                <img src="<?php echo base_url("svg-sources/thumb_down_white_24dp.svg")?>" alt="ico" />
              </a>
            </li>
          </ul>
        </div>
        <div class="dark-container">

          <a class="dark-pfp" href="#">
            <img
              src="https://images.unsplash.com/photo-1573496799515-eebbb63814f2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=869&q=80"
              alt="">
          </a>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et inventore Atque rerum
          iusto laborum earum! Iure eveniet est corporis?
          <ul class="comment-react">
            <li class="react-like">
              <a href="#">
                <img src="<?php echo base_url("svg-sources/thumb_up_white_24dp.svg")?>" alt="ico" />
              </a>
            </li>

            <li class="react-dislike">
              <a href="#">
                <img src="<?php echo base_url("svg-sources/thumb_down_white_24dp.svg")?>" alt="ico" />
              </a>
            </li>
          </ul>
        </div>
        <div class="dark-container">

          <a class="dark-pfp" href="#">
            <img
              src="https://images.unsplash.com/photo-1498758536662-35b82cd15e29?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=388&q=80"
              alt="">
          </a>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et inventore Atque rerum
          iusto laborum earum! Iure eveniet est corporis?
          <ul class="comment-react">
            <li class="react-like">
              <a href="#">
                <img src="<?php echo base_url("svg-sources/thumb_up_white_24dp.svg")?>" alt="ico" />
              </a>
            </li>

            <li class="react-dislike">
              <a href="#">
                <img src="<?php echo base_url("svg-sources/thumb_down_white_24dp.svg")?>" alt="ico" />
              </a>
            </li>
          </ul>
        </div>

        <div class="dark-container">

          <a class="dark-pfp" href="#">
            <img
              src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80"
              alt="">
          </a>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et inventore Atque rerum
          iusto laborum earum! Iure eveniet est corporis?
          <ul class="comment-react">
            <li class="react-like">
              <a href="#">
                <img src="<?php echo base_url("svg-sources/thumb_up_white_24dp.svg")?>" alt="ico" />
              </a>
            </li>

            <li class="react-dislike">
              <a href="#">
                <img src="<?php echo base_url("svg-sources/thumb_down_white_24dp.svg")?>" alt="ico" />
              </a>
            </li>
          </ul>
        </div>
        <div class="dark-container">

          <a class="dark-pfp" href="#">
            <img
              src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80"
              alt="">
          </a>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et inventstrum dolorum. Obcaecati?Lorem ipsum dolor
          sit amet
          consectetur adipisicing elit. Earrporis?
          <ul class="comment-react">
            <li class="react-like">
              <a href="#">
                <img src="<?php echo base_url("svg-sources/thumb_up_white_24dp.svg")?>" alt="ico" />
              </a>
            </li>

            <li class="react-dislike">
              <a href="#">
                <img src="<?php echo base_url("svg-sources/thumb_down_white_24dp.svg")?>" alt="ico" />
              </a>
            </li>
          </ul>
        </div>
        <div class="dark-container">

          <a class="dark-pfp" href="#">
            <img
              src="https://plus.unsplash.com/premium_photo-1663126392174-bb8bb772949b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
              alt="">
          </a>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et inventore Atque rerum
          iusto laborum earum! Iure eveniet est corporis?
          <ul class="comment-react">
            <li class="react-like">
              <a href="#">
                <img src="<?php echo base_url("svg-sources/thumb_up_white_24dp.svg")?>" alt="ico" />
              </a>
            </li>

            <li class="react-dislike">
              <a href="#">
                <img src="<?php echo base_url("svg-sources/thumb_down_white_24dp.svg")?>" alt="ico" />
              </a>
            </li>
          </ul>
        </div>
        <div class="dark-container">

          <a class="dark-pfp" href="#">
            <img
              src="https://images.unsplash.com/photo-1543269664-56d93c1b41a6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
              alt="">
          </a>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et inventore
          odit quo repudiandae omnis, laudantium laborum placeat. Atque rerum
          iusto laborum earum! Iure eveniet est corporis?
          <ul class="comment-react">
            <li class="react-like">
              <a href="#">
                <img src="<?php echo base_url("svg-sources/thumb_up_white_24dp.svg")?>" alt="ico" />
              </a>
            </li>

            <li class="react-dislike">
              <a href="#">
                <img src="<?php echo base_url("svg-sources/thumb_down_white_24dp.svg")?>" alt="ico" />
              </a>
            </li>
          </ul>
        </div>
      </div>

      <div class="comment-input">
        <textarea placeholder="Type a comment..." id="cmtarea"></textarea>
        <div id="cmtbt">
        <button ><img src="<?php echo base_url("svg-sources/send_white_24dp.svg")?>" alt=""></button>
        <div>
      </div>
    </div>
  </nav>

  <main>
    <section class="dark">
      <div class="container py-4" id="postslist">
        <!-- <h1 class="h1 text-center" id="pageHeaderTitle">My Cards Dark</h1> -->

        <article class="postcard dark blue">
          <a class="postcard__img_link" href="#">
            <img class="postcard__img" src="https://picsum.photos/1000/1000" alt="Image Title" />
          </a>
          <div class="postcard__text">
            <h1 class="postcard__title blue"><a href="#">Topic Title</a></h1>
            <div class="postcard__subtitle small">
              <time datetime="2020-05-25 12:00:00">
                <i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
              </time>
            </div>
            <div class="postcard__bar"></div>
            <div class="postcard__preview-txt">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi,
              fugiat asperiores inventore beatae accusamus odit minima enim,
              commodi quia, doloribus eius! Ducimus nemo accusantium maiores
              velit corrupti tempora reiciendis molestiae repellat vero. Eveniet
              ipsam adipisci illo iusto quibusdam, sunt neque nulla unde ipsum
              dolores nobis enim quidem excepturi, illum quos!
            </div>
            <div class="postcard-profile">
              <a href="">
                <img
                  src="https://images.unsplash.com/photo-1679412330254-90cb240038c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80"
                  alt="pfp" />
                <div>Noobmaster69</div>
              </a>
            </div>
            <ul class="postcard__tagbox">
              <li class="tag__item">
                <img src="<?php echo base_url("svg-sources/thumb_up_white_24dp.svg")?>" alt="ico" />

                <!-- <i class="fas fa-tag mr-2"></i>Upvote -->
              </li>
              <li class="tag__item">
                <img src="<?php echo base_url("svg-sources/thumb_down_white_24dp.svg")?>" alt="ico" />

                <!-- <i class="fas fa-clock mr-2"></i>Downvote -->
              </li>
              <li class="tag__item comment-button play blue">
                <a href="#">
                  <img src="<?php echo base_url("svg-sources/forum_white_24dp.svg")?>" alt="ico" />

                  <!-- <i class="fas fa-play mr-2"></i>Comment -->
                </a>
              </li>
            </ul>
          </div>
        </article>
       
        
        
      </div>
    </section>

  
  </main>
  <span class="loader"></span>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@5/dark.css" />
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>
 
  <script>
    var loaded_posts = [];
    const primg="<?php echo ($this->session->userdata('auth')['IMAGES']); ?>";
    const pris="<?php echo ($this->session->userdata('auth')['SIID']); ?>";
    var toastMixin = Swal.mixin({
    toast: true,
    icon: 'success',
    title: 'General Title',
    animation: false,
    position: 'top-right',
    showConfirmButton: false,
    timer: 2000,
    timerProgressBar: true,
    didOpen: (toast) => {
      toast.addEventListener('mouseenter', Swal.stopTimer)
      toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
  });
     $(document).ready(function () {
     
      localStorage.setItem("img", "");
      gbl="";
     
      $( "#pupload" ).click(function() {
        //var inputFile=$('#mdimg');
        //const inputd = document.getElementById('mdik');
        const image = document.getElementById('imprv1');
  const imageUrl = image.src;
  const fileName = imageUrl.substring(imageUrl.lastIndexOf('/') + 1);
        const datas = new FormData();
      var title = $('#title').val();
      var body = $('#body').val();
      console.log(gbl);//localStorage.getItem("img")
      datas.append('image',gbl);
  datas.append('title', title);
  datas.append('body', body);
      if(title.length===0)
      {
        toastMixin.fire({
          title: "&#128552; Title can't be empty",
    icon: 'error',
  
  });
  

      }
      else{
        if(body.length===0)
      {
        toastMixin.fire({
          title: " &#128556; Post body can't be empty",
    icon: 'error'
  });
  

      }
      else{
    $.ajax({
  url: '<?php echo base_url("index.php/MainController/postupl") ?>',
  method: 'POST',
  data: datas,
  processData: false, 
    contentType: false,
    beforeSend: function() {
    $("body").addClass("loading");
  },
  complete: function() {
    $("body").removeClass("loading");
  },
  success: function(response) {
    console.log(response);
   
      Swal.fire(
  '&#128526; You have done it!',
  'Keep posting keep sharing  &#128077;',
  'success'
);
$('#title').val('');
$('#body').val('');
document.querySelector(".addlayout").style.display = "flex";
          document.querySelector(".image-parent").style.display = "none";
          $('#searchoff, #chatoff, #postoff, #profileoff').animate({
      width: 'hide'
    }, {
      duration: 400,
      specialEasing: {
        width: 'swing',
        height: 'swing'
      }
    });
    const jsonData = JSON.parse(response);
    console.log(jsonData.path);
    if(jsonData.path!=null)
    {
      console.log("hello");
      var imx="http://localhost/anonimly/uploads/";
    $('#postslist').prepend('<article class="postcard dark blue"><a class="postcard__img_link" href="#"> <img class="postcard__img" src="'+imx+jsonData.path+'" alt="Image Title"/> </a> <div class="postcard__text"> <h1 class="postcard__title blue"><a href="#">'+title+'</a></h1> <div class="postcard__subtitle small"> <time datetime="2020-05-25 12:00:00"> <i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020 </time> </div> <div class="postcard__bar"></div> <div class="postcard__preview-txt">'+body+' </div> <div class="postcard-profile"> <a href=""> <img src="'+primg+'" alt="pfp" /> <div>'+pris+'</div> </a> </div> <ul class="postcard__tagbox"> <li class="tag__item"> <img src="<?php echo base_url("svg-sources/thumb_up_white_24dp.svg")?>" alt="ico" /> <!-- <i class="fas fa-tag mr-2"></i>Upvote --> </li> <li class="tag__item"> <img src="<?php echo base_url("svg-sources/thumb_down_white_24dp.svg")?>" alt="ico" /> <!-- <i class="fas fa-clock mr-2"></i>Downvote --> </li> <li class="tag__item comment-button play blue"> <a href="#"> <img src="<?php echo base_url("svg-sources/forum_white_24dp.svg")?>" alt="ico" /> <!-- <i class="fas fa-play mr-2"></i>Comment --> </a> </li> </ul> </div> </article>');
    }
    else
    {
      $('#postslist').prepend('<article class="postcard dark blue"><div class="postcard__text"> <h1 class="postcard__title blue"><a href="#">'+title+'</a></h1> <div class="postcard__subtitle small"> <time datetime="2020-05-25 12:00:00"> <i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020 </time> </div> <div class="postcard__bar"></div> <div class="postcard__preview-txt">'+body+' </div> <div class="postcard-profile"> <a href=""> <img src="'+primg+'" alt="pfp" /> <div>'+pris+'</div> </a> </div> <ul class="postcard__tagbox"> <li class="tag__item"> <img src="<?php echo base_url("svg-sources/thumb_up_white_24dp.svg")?>" alt="ico" /> <!-- <i class="fas fa-tag mr-2"></i>Upvote --> </li> <li class="tag__item"> <img src="<?php echo base_url("svg-sources/thumb_down_white_24dp.svg")?>" alt="ico" /> <!-- <i class="fas fa-clock mr-2"></i>Downvote --> </li> <li class="tag__item comment-button play blue"> <a href="#"> <img src="<?php echo base_url("svg-sources/forum_white_24dp.svg")?>" alt="ico" /> <!-- <i class="fas fa-play mr-2"></i>Comment --> </a> </li> </ul> </div> </article>');

    }

  },
  error: function(errorThrown) {
    console.log(errorThrown);
  }
});
// e.preventDefault(); 

// $(document).on({
//     ajaxStart: function(){
//         $("body").addClass("loading"); 
//     },
//     ajaxStop: function(){ 
//         $("body").removeClass("loading"); 
//     }    
// }); 
// ajaxStart: function(){
//         $("body").addClass("loading"); 
//     },
//     ajaxStop: function(){ 
//         $("body").removeClass("loading"); 
//     } 
      }
    }
});
//load post




  // $(window).scroll(function() {
  //   if($(window).scrollTop() + $(window).height() == $(document).height()) {
  //     load_more_posts();
  //   }
  // });
  load_more_posts('load');
  $(window).scroll(function() {
    if($(window).scrollTop() + $(window).height() > $(document).height() - 100) {
     // alert("bottom!");
      load_more_posts('scroll');
    }
  });
});
var flag=0;
function load_more_posts(source) {
  var last_ranking = 90; 
  if (loaded_posts.length > 0) {
    var last_post_id = loaded_posts[loaded_posts.length - 1].ID;
    last_ranking = loaded_posts[loaded_posts.length - 1].RATINGS;
    console.log(last_ranking);
    console.log(loaded_posts.length);
  }
  $.ajax({
    url: '<?php echo base_url("index.php/MainController/feedload") ?>',
    method: 'POST',
    data: {last_ranking: last_ranking ,loaded_posts: loaded_posts.join(',')},
    success: function(response) {
      var posts = JSON.parse(response);
      console.log(source);
      if (source === 'load') {
        $('#blog-posts').html('');
      }
      for (var i = 0; i < posts.length; i++) {
        if (!post_exists(posts[i].ID)) { 
          // if(flag%2==0)
          // {//'<div class="post">' + posts[i].TITLE + '</div>'
            if (posts[i].IMAGE==null) {
              $('#postslist').append('<article class="postcard dark blue"> <div class="postcard__text"> <h1 class="postcard__title blue"><a href="#">'+posts[i].TITLE+'</a></h1> <div class="postcard__subtitle small"> <time datetime="2020-05-25 12:00:00"> <i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020 </time> </div> <div class="postcard__bar"></div> <div class="postcard__preview-txt">'+atob(posts[i].POST)+' </div> <div class="postcard-profile"> <a href=""> <img src="'+posts[i].IMAGES+'" alt="pfp" /> <div>'+posts[i].SIID+'</div> </a> </div> <ul class="postcard__tagbox"> <li class="tag__item" id="pl'+posts[i].ID+'"> <a href="javascript:plike('+posts[i].ID+');" ><img src="<?php echo base_url("svg-sources/thumb_up_white_24dp.svg")?>" alt="ico" /></a> <!-- <i class="fas fa-tag mr-2"></i>Upvote --> </li> <li class="tag__item" id="pd'+posts[i].ID+'"> <a href="javascript:pdlike('+posts[i].ID+');" ><img src="<?php echo base_url("svg-sources/thumb_down_white_24dp.svg")?>" alt="ico" /></a> <!-- <i class="fas fa-clock mr-2"></i>Downvote --> </li> <li class="tag__item comment-button play blue"> <a href="javascript:cmtload('+posts[i].ID+');" id="cmtt"> <img src="<?php echo base_url("svg-sources/forum_white_24dp.svg")?>" alt="ico" /> <!-- <i class="fas fa-play mr-2"></i>Comment --> </a> </li> </ul> </div> </article>');

            }
            else{
            var imx="http://localhost/anonimly/uploads/";
          $('#postslist').append('<article class="postcard dark blue"> <a class="postcard__img_link" href="#"> <img class="postcard__img" src="'+imx+posts[i].IMAGE+'" alt="Image Title" /> </a> <div class="postcard__text"> <h1 class="postcard__title blue"><a href="#">'+posts[i].TITLE+'</a></h1> <div class="postcard__subtitle small"> <time datetime="2020-05-25 12:00:00"> <i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020 </time> </div> <div class="postcard__bar"></div> <div class="postcard__preview-txt">'+atob(posts[i].POST)+' </div> <div class="postcard-profile"> <a href=""> <img src="'+posts[i].IMAGES+'" alt="pfp" /> <div>'+posts[i].SIID+'</div> </a> </div> <ul class="postcard__tagbox"> <li class="tag__item" id="pl'+posts[i].ID+'"> <a href="javascript:plike('+posts[i].ID+');" ><img src="<?php echo base_url("svg-sources/thumb_up_white_24dp.svg")?>" alt="ico" /></a> <!-- <i class="fas fa-tag mr-2"></i>Upvote --> </li> <li class="tag__item" id="pd'+posts[i].ID+'"> <a href="javascript:pdlike('+posts[i].ID+');" ><img src="<?php echo base_url("svg-sources/thumb_down_white_24dp.svg")?>" alt="ico" /></a> <!-- <i class="fas fa-clock mr-2"></i>Downvote --> </li> <li class="tag__item comment-button play blue"> <a href="javascript:cmtload('+posts[i].ID+');" id="cmtt"> <img src="<?php echo base_url("svg-sources/forum_white_24dp.svg")?>" alt="ico" /> <!-- <i class="fas fa-play mr-2"></i>Comment --> </a> </li> </ul> </div> </article>');
         // }
        }
         // flag++;
          loaded_posts.push(posts[i]);
        }
      }
    }
  });
  
}
function post_exists(post_id) {
  for (var i = 0; i < loaded_posts.length; i++) {
    if (loaded_posts[i].ID == post_id) {
      return true;
    }
  }
  return false;
}

// $(document).on({
//     ajaxStart: function(){
//         $("body").addClass("loading"); 
//     },
//     ajaxStop: function(){ 
//         $("body").removeClass("loading"); 
//     }    
// }); 
function cmtload(i) {
       // console.log("test");
  const commentContainer = document.querySelector('.comment-container');
  
 $('#cmtbt').html(' <button onclick="sendcmt('+i+')"><img src="<?php echo base_url("svg-sources/send_white_24dp.svg")?>" alt=""></button>');
 $('#pscmts').html(' ');
 //console.log(cdata);
 var cdata={
                           
                           pid:i,
                           
                    };
        $.ajax({
  url: '<?php echo base_url("index.php/MainController/cmtload") ?>',
  method: 'POST',
  data: cdata,
  dataType: "json",
  cache:false,
  success: function(response) {
    //var posts = JSON.parse(response);
    //console.log(posts);
   
    var lenx=response.length;
    console.log(lenx);
    if (lenx>0) {
      
    
      for (var lc = 0; lc< lenx; lc++) {
    $('#pscmts').append('<div class="dark-container"> <a class="dark-pfp" href="#"> <img src="'+response[lc].MASKER_IMAGE+'" alt=""> </a> <span>'+response[lc].COMMENT+'</span><ul class="comment-react"> <li class="react-like" id="cl'+response[lc].ID+'"> <a href="javascript:cl('+response[lc].ID+');"> <img src="<?php echo base_url("svg-sources/thumb_up_white_24dp.svg")?>" alt="ico" /> </a> </li> <li class="react-dislike" id="cdl'+response[lc].ID+'" > <a href="javascript:cdis('+response[lc].ID+');"> <img src="<?php echo base_url("svg-sources/thumb_down_white_24dp.svg")?>" alt="ico" /> </a> </li> </ul> </div>')

    }
  }
//$('#cmtarea').val('');
//$('#pscmts').append('<div class="dark-container first"> <a class="dark-pfp" href="#"> <img src="'+primg+'" alt=""> </a> '+comment+'<ul class="comment-react"> <li class="react-like"> <a href="javscript:sicmtlik('+response+');"> <img src="<?php echo base_url("svg-sources/thumb_up_white_24dp.svg")?>" alt="ico" /> </a> </li> <li class="react-dislike"> <a href="javscript:sicmtdis('+response+');"> <img src="<?php echo base_url("svg-sources/thumb_down_white_24dp.svg")?>" alt="ico" /> </a> </li> </ul> </div>')
commentContainer.style.display = "flex";
},
  error: function(errorThrown) {
    console.log(errorThrown);
  }
});

}
function sendcmt(i)
{
  var comment = $('#cmtarea').val();
  if(comment.length===0)
      {
        toastMixin.fire({
          title: "&#128552; Comment can't be empty",
    icon: 'error',
  });
  }
      else{
        var cdata={
                           
                            pid:i,
                            mimg:primg,
                            cmt:comment,
                            
                     };
                     console.log(cdata);
        $.ajax({
  url: '<?php echo base_url("index.php/MainController/comtupl") ?>',
  method: 'POST',
  data: cdata,
  success: function(response) {
    console.log(response);
   
      Swal.fire(
  '&#128526; You have done it!',
  'Keep Commenting  &#128077;',
  'success'
);
$('#cmtarea').val('');
$('#pscmts').prepend('<div class="dark-container"> <a class="dark-pfp" href="#"> <img src="'+primg+'" alt=""> </a> <span>'+comment+'</span><ul class="comment-react"> <li class="react-like"> <a href="javascript:cl('+response+');"> <img src="<?php echo base_url("svg-sources/thumb_up_white_24dp.svg")?>" alt="ico" /> </a> </li> <li class="react-dislike"> <a href="javascript:cdis('+response+');"> <img src="<?php echo base_url("svg-sources/thumb_down_white_24dp.svg")?>" alt="ico" /> </a> </li> </ul> </div>')
},
  error: function(errorThrown) {
    console.log(errorThrown);
  }
});
            }
}
function plike(i)
{

 
  var cdata={
                           
                           pid:i,
                          
                           
                    };
                    console.log(cdata);
       $.ajax({
 url: '<?php echo base_url("index.php/MainController/postlike") ?>',
 method: 'POST',
 data: cdata,
 success: function(response) {
   console.log(response);
  
   $("#pd"+i).css("background-color", "rgba(83, 83, 83, 0.4)");
   $("#pl"+i).css("background-color", "green");
 },
 error: function(errorThrown) {
   console.log(errorThrown);
 }
});
}
function pdlike(i)
{
  
  var cdata={
                           
                           pid:i,
                        
                           
                    };
                  //  console.log(cdata);
       $.ajax({
 url: '<?php echo base_url("index.php/MainController/postdislike") ?>',
 method: 'POST',
 data: cdata,
 success: function(response) {
   console.log(response);
   $("#pd"+i).css("background-color", "red");
   $("#pl"+i).css("background-color", "rgba(83, 83, 83, 0.4)");
 },
 error: function(errorThrown) {
   console.log(errorThrown);
 }
});
}
function cl(i)
{
  
  var cdata={
                           
                           pid:i,
                          
                           
                    };
                    console.log(cdata);
       $.ajax({
 url: '<?php echo base_url("index.php/MainController/commlike") ?>',
 method: 'POST',
 data: cdata,
 success: function(response) {
   console.log(response);
  
   $("#cdl"+i).css("background-color", "rgba(83, 83, 83, 0.4)");
   $("#cl"+i).css("background-color", "green");
 },
 error: function(errorThrown) {
   console.log(errorThrown);
 }
});
}
function cdis(i)
{
 
  var cdata={
                           
                           pid:i,
                        
                           
                    };
                  //  console.log(cdata);
       $.ajax({
 url: '<?php echo base_url("index.php/MainController/commdislike") ?>',
 method: 'POST',
 data: cdata,
 success: function(response) {
   console.log(response);
   $("#cdl"+i).css("background-color", "red");
   $("#cl"+i).css("background-color", "rgba(83, 83, 83, 0.4)");
 },
 error: function(errorThrown) {
   console.log(errorThrown);
 }
});
}
    </script>
</body>