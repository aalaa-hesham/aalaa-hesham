<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Not Found</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Baloo+Tamma+2:wght@600&display=swap");
body {
  margin: 0;
  padding: 0;
  width: 100%;
  height: 100vh;
  background: radial-gradient(50% 50% at 50% 50%, #8263ff 0%, #6004d6 100%);
  color: #fff;
}

.container {
  position: absolute;
  top: 10%;
  left: 5%;
}

h1 {
  font-family: "Baloo Tamma 2", cursive;
  font-size: 72px;
  line-height: 1.3;
}

.btnposi {
  position: absolute;
  top: 80%;
  left: 5%;
}

.btn {
  border: 3px solid #fff;
  font-size: 36px;
  font-family: "Baloo Tamma 2", cursive;
  background: none;
  padding: 10px 20px;
  font-size: 20px;
  cursor: pointer;
  color: #fff;
  transition: 0.8s;
  position: relative;
  overflow: hidden;
}

.btn:hover {
  color: #6004d6;
}

.btn::before {
  content: "";
  position: absolute;
  left: 0;
  width: 100%;
  height: 0%;
  background: #fff;
  z-index: -1;
  transition: 0.8s;
  top: 0;
  border-radius: 0 0 50% 50%;
}

.btn:hover::before {
  height: 180%;
}

.rain-deamon404 {
  position: relative;
  height: 100vh;
}

.rainw {
  position: absolute;
  border-left: 4px solid white;
  height: 100px;
  top: 10%;
  left: 80%;
  animation: rainWhitetop 1s ease-in-out infinite alternate-reverse;
}

.rainw2 {
  position: absolute;
  border-left: 4px solid white;
  height: 100px;
  top: 30%;
  left: 59%;
  animation: rainWhiteleft 1s ease-in-out infinite alternate-reverse;
}

.rainr {
  position: absolute;
  border-left: 4px solid red;
  height: 100px;
  top: 37%;
  left: 72%;
  animation: rainred 1s ease-in-out infinite alternate-reverse;
}

.rainw3 {
  position: absolute;
  border-left: 4px solid white;
  height: 100px;
  top: 70%;
  left: 90%;
  animation: rainWhiteRight 1s ease-in-out infinite alternate-reverse;
}

@keyframes rainWhitetop {
  0% {
    top: 10%;
  }
  100% {
    top: 20%;
  }
}

@keyframes rainWhiteleft {
  0% {
    top: 30%;
  }
  100% {
    top: 40%;
  }
}

@keyframes rainred {
  0% {
    top: 37%;
  }
  100% {
    top: 47%;
  }
}

@keyframes rainWhiteRight {
  0% {
    top: 70%;
  }
  100% {
    top: 80%;
  }
}

.demon404 {
  position: relative;
  width: 50%;
  height: 100vh;
  left: 36%;
  animation: deamons 1s ease infinite alternate;
}

@keyframes deamons {
  from {
    top: 3%;
  }
  to {
    top: 10%;
  }
}

.demond4 {
  position: absolute;
  top: 3%;
  left: 60%;
}

.demond42 {
  transform: rotateZ(-30deg);
  position: absolute;
  top: 60%;
  left: 60%;
}

.demond0 {
  transform: rotateZ(30deg);
  position: absolute;
  top: 30%;
  left: 90%;
}

    </style>
</head>

<body>
  <div class="container">
    <h1>Ooops! Sorry,<br> Page Not found </h1>
  </div>
  <div class="rain-deamon404">
    <div class="rain">
      <div class="rainw"></div>
      <div class="rainr"></div>

      <div class="rainw2"></div>
      <div class="rainw3"></div>
    </div>

    <div class="demon404">
      <div class="demond4">
        <svg width="160" height="142" viewBox="0 0 200 182" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M35.9819 92.1368L41.1604 22.3229L99.0318 61.7145L35.9819 92.1368Z" fill="#FE0000" stroke="white" stroke-width="3" />
          <path d="M101.665 61.9608L159.538 22.5713L164.714 92.3854L101.665 61.9608Z" fill="#FE0000" stroke="white" stroke-width="3" />
          <path d="M168.5 113.775C168.5 150.472 138.086 180.275 100.5 180.275C62.9136 180.275 32.5 150.472 32.5 113.775C32.5 77.0792 62.9136 47.2754 100.5 47.2754C138.086 47.2754 168.5 77.0792 168.5 113.775Z" fill="#FE0000" stroke="#F8F7F7" stroke-width="3" />
          <path d="M96.5899 93.187C97.3946 92.9504 98.3176 92.761 99.3589 92.619C100.448 92.4297 101.394 92.335 102.199 92.335C103.193 92.335 104.14 92.4297 105.039 92.619C105.986 92.8084 106.814 93.1397 107.524 93.613C108.234 94.039 108.802 94.6544 109.228 95.459C109.654 96.2164 109.867 97.1867 109.867 98.37V118.392H115.689C115.973 118.818 116.233 119.433 116.47 120.238C116.754 120.995 116.896 121.8 116.896 122.652C116.896 124.261 116.517 125.421 115.76 126.131C115.05 126.794 114.127 127.125 112.991 127.125H109.867V136C109.394 136.095 108.684 136.213 107.737 136.355C106.838 136.497 105.938 136.568 105.039 136.568C103.193 136.568 101.749 136.308 100.708 135.787C99.7139 135.266 99.2169 134.012 99.2169 132.024V127.125H81.6799C80.7332 126.604 79.9049 125.847 79.1949 124.853C78.4849 123.859 78.1299 122.628 78.1299 121.161C78.1299 120.356 78.2246 119.481 78.4139 118.534C78.6032 117.587 78.9582 116.759 79.4789 116.049L96.5899 93.187ZM99.7849 103.34H99.5719L89.4899 118.392H99.7849V103.34Z" fill="#FFFEFE" />
        </svg>
      </div>
      <div class="demond42">
        <svg width="160" height="142" viewBox="0 0 200 182" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M35.9819 92.1368L41.1604 22.3229L99.0318 61.7145L35.9819 92.1368Z" fill="#FE0000" stroke="white" stroke-width="3" />
          <path d="M101.665 61.9608L159.538 22.5713L164.714 92.3854L101.665 61.9608Z" fill="#FE0000" stroke="white" stroke-width="3" />
          <path d="M168.5 113.775C168.5 150.472 138.086 180.275 100.5 180.275C62.9136 180.275 32.5 150.472 32.5 113.775C32.5 77.0792 62.9136 47.2754 100.5 47.2754C138.086 47.2754 168.5 77.0792 168.5 113.775Z" fill="#FE0000" stroke="#F8F7F7" stroke-width="3" />
          <path d="M96.5899 93.187C97.3946 92.9504 98.3176 92.761 99.3589 92.619C100.448 92.4297 101.394 92.335 102.199 92.335C103.193 92.335 104.14 92.4297 105.039 92.619C105.986 92.8084 106.814 93.1397 107.524 93.613C108.234 94.039 108.802 94.6544 109.228 95.459C109.654 96.2164 109.867 97.1867 109.867 98.37V118.392H115.689C115.973 118.818 116.233 119.433 116.47 120.238C116.754 120.995 116.896 121.8 116.896 122.652C116.896 124.261 116.517 125.421 115.76 126.131C115.05 126.794 114.127 127.125 112.991 127.125H109.867V136C109.394 136.095 108.684 136.213 107.737 136.355C106.838 136.497 105.938 136.568 105.039 136.568C103.193 136.568 101.749 136.308 100.708 135.787C99.7139 135.266 99.2169 134.012 99.2169 132.024V127.125H81.6799C80.7332 126.604 79.9049 125.847 79.1949 124.853C78.4849 123.859 78.1299 122.628 78.1299 121.161C78.1299 120.356 78.2246 119.481 78.4139 118.534C78.6032 117.587 78.9582 116.759 79.4789 116.049L96.5899 93.187ZM99.7849 103.34H99.5719L89.4899 118.392H99.7849V103.34Z" fill="#FFFEFE" />
        </svg>
      </div>
      <div class="demond0">
        <svg width="160" height="142" viewBox="0 0 200 182" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M35.9819 92.1368L41.1604 22.3229L99.0318 61.7145L35.9819 92.1368Z" fill="white" stroke="#FE0000" stroke-width="3" />
          <path d="M101.665 61.9608L159.538 22.5713L164.714 92.3854L101.665 61.9608Z" fill="white" stroke="#FE0000" stroke-width="3" />
          <path d="M168.5 113.775C168.5 150.472 138.086 180.275 100.5 180.275C62.9136 180.275 32.5 150.472 32.5 113.775C32.5 77.0792 62.9136 47.2754 100.5 47.2754C138.086 47.2754 168.5 77.0792 168.5 113.775Z" fill="white" stroke="#FE0000" stroke-width="3" />
          <path d="M108.039 117.416C108.039 112.825 107.329 109.369 105.909 107.05C104.536 104.683 102.667 103.5 100.3 103.5C97.9333 103.5 96.0637 104.683 94.691 107.05C93.3657 109.369 92.703 112.825 92.703 117.416C92.703 122.149 93.342 125.676 94.62 127.995C95.9453 130.267 97.8387 131.403 100.3 131.403C102.761 131.403 104.655 130.267 105.98 127.995C107.353 125.676 108.039 122.149 108.039 117.416ZM100.371 140.065C97.6257 140.065 95.0933 139.592 92.774 138.645C90.502 137.698 88.5377 136.278 86.881 134.385C85.2717 132.492 84.0173 130.149 83.118 127.356C82.2187 124.516 81.769 121.203 81.769 117.416C81.769 113.677 82.2187 110.411 83.118 107.618C84.0647 104.778 85.3663 102.411 87.023 100.518C88.6797 98.6247 90.644 97.2047 92.916 96.258C95.188 95.3113 97.673 94.838 100.371 94.838C103.022 94.838 105.483 95.3113 107.755 96.258C110.027 97.2047 111.991 98.6247 113.648 100.518C115.305 102.411 116.606 104.778 117.553 107.618C118.5 110.411 118.973 113.677 118.973 117.416C118.973 121.203 118.5 124.516 117.553 127.356C116.654 130.149 115.376 132.492 113.719 134.385C112.11 136.278 110.145 137.698 107.826 138.645C105.554 139.592 103.069 140.065 100.371 140.065Z" fill="#FE0000" />
        </svg>
      </div>
    </div>
  </div>

  <div class="btnposi">
  <a href="../../index.php" class="homebutton">GO BACK HOME</button>
  </div>


</body>
</html>