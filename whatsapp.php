
          <!-- WHATSAPP LINK START -->

          <style>
      .whatsapp-btn-container {
    position: fixed;
    right: 30px;
    opacity: 0;
    bottom: -50px;
    padding: 24px;
    animation: fade-up 1000ms forwards;
    animation-delay: 1000ms;
}

@keyframes fade-up {
    100% {
        bottom: 24px;
        opacity: 1;
    }
}

.whatsapp-btn-container .whatsapp-btn {
    font-size: 48px;
    color: #25d366;
    display: inline-block;
    transition: all 400ms;
}

.whatsapp-btn-container .whatsapp-btn:hover {
    transform: scale(1.2);
}

.whatsapp-btn-container span {
    position: absolute;
    top: 0;
    left: 4px;
    font-family: "Roboto", sans-serif;
    font-weight: bold;
    color: #075e54;
    transform: rotateZ(20deg) translateX(10px);
    opacity: 0;
    transition: all 400ms;
}

.whatsapp-btn-container .whatsapp-btn:hover + span {
    transform: rotateZ(0deg) translateX(0px);
    opacity: 1;
}
    </style>

      <div class="whatsapp-btn-container">
        <a class="whatsapp-btn" href="https://wa.me/+9203312345814"><i class="fab fa-whatsapp" ></i></a>
        <span>Contact Us</span>
    </div>
      
       <!-- WHATSAPP LINK END -->