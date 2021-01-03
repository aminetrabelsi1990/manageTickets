/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import '../sass/app/app.scss';

// Need jQuery? Install it with "yarn add jquery", then uncomment to import it.
// import $ from 'jquery';

window.onload = function(){

  /**  toggle password */
    let btn = document.getElementById("toggle-password");
    let btnSecond = document.getElementById("toggle-password-second");
    let btnThird = document.getElementById("toggle-password-third");
    let btnResetFirst = document.getElementById("toggle-password-reset-first");
    let btnResetSecond = document.getElementById("toggle-password-reset-second");
    let btnOld = document.getElementById("toggle-password-old");
    let btnNew = document.getElementById("toggle-password-new");

    let input = document.getElementById("inputPassword");
    let inputSecond = document.getElementById("user_password_password_first");
    let inputThird= document.getElementById("user_password_password_second");
    let inputRestFirst= document.getElementById("user_reset_password_password_first");
    let inputRestSecond= document.getElementById("user_reset_password_password_second");
    let oldPassword= document.getElementById("old_password");
    let newPassword= document.getElementById("new_password");


    if (btn) {
      btn.addEventListener("click", function(e) {
        e.preventDefault();
        togglePassword(input, btn) 
      });
    }

    if (btnSecond) {
      btnSecond.addEventListener("click", function(e) {
        e.preventDefault();
        togglePassword(inputSecond, btnSecond) 
      });
    }

    if (btnThird) {
      btnThird.addEventListener("click", function(e) {
        e.preventDefault();
        togglePassword(inputThird, btnThird) 
      });
    }

    if (btnResetFirst) {
      btnResetFirst.addEventListener("click", function(e) {
        e.preventDefault();
        togglePassword(inputRestFirst, btnResetFirst) 
      });
    }

    if (btnResetSecond) {
      btnResetSecond.addEventListener("click", function(e) {
        e.preventDefault();
        togglePassword(inputRestSecond, btnResetSecond) 
      });
    }

    if (btnOld) {
      btnOld.addEventListener("click", function(e) {
        e.preventDefault();
        togglePassword(oldPassword, btnOld) 
      });
    }

    if (btnNew) {
      btnNew.addEventListener("click", function(e) {
        e.preventDefault();
        togglePassword(newPassword, btnNew) 
      });
    }

  /**  burger menu */
  let btnMenu = document.getElementById("menu-btn");
    if (btnMenu) {
      btnMenu.addEventListener("click", function(e) { 
      burgermenu() ;
    });
  }

  /**  notifications filter */
  let item = document.getElementById("notification_filter_item_one");
  let link = window.location.search;
  
  if ((link == '?type=general')) {
    item.classList.remove("active");
  }else if((link == '?type=individual') ){
    item.classList.remove("active");
  }
}

function togglePassword(input, icon) {
    if ((input.type === "password")) {
      input.type = "text";
      icon.classList.add("visibility");
    } else {
      input.type = "password";
      icon.classList.remove("visibility");
    }
}

function burgermenu() {
  var x = document.getElementById("menu-btn");
  var menu = document.getElementById("burger_menu");
  var footer = document.getElementById("footer");
  var filter = document.getElementById("filter");
  var profile = document.getElementById("profile_section");
  var quiz = document.getElementById("quiz_details__page");
  var quizForm = document.getElementById("quiz_form");
  var legal = document.getElementById("legal_page");
  var profilImage = document.getElementById("profil_img");
  var notifications = document.getElementById("messages_list");
  var showNotif = document.getElementById("show_notif");

  if (x.checked) {
    menu.classList.add("collapsed");
    footer.style.display = "none";
    if (filter) {
      filter.style.display = "none";
    }
    if (profile) {
      profile.style.display = "none";
    }
    if (quizForm) {
      quizForm.style.display = "none";
    }
    if (quiz) {
      quiz.style.display = "none";
    }
    if (legal) {
      legal.style.display = "none";
    }
    if (profilImage) {
      profilImage.style.display = "none";
    }
    if (notifications) {
      notifications.style.display = "none";
    }
    if (showNotif) {
      showNotif.style.display = "none";
    }

  } else {
    menu.classList.remove("collapsed");
    footer.style.display = "flex";
    if (filter) {
      filter.style.display = "block";
    }
    if (profile) {
      profile.style.display = "block";
    }
    if (quiz) {
      quiz.style.display = "block";
    }
    if (quizForm) {
      quizForm.style.display = "block";
    }
    if (legal) {
      legal.style.display = "block";
    }
    if (profilImage) {
      profilImage.style.display = "block";
    }
    if (notifications) {
      notifications.style.display = "block";
    }
    if (showNotif) {
      showNotif.style.display = "block";
    }
  }
}