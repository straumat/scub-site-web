$('#contact_form').submit(function () {
    var name = $("#name").val();
    var email = $("#email").val();
    var phone = $("#phone").val();
    var subject = $("#subject").val();
    var message = $("#message").val();
    var dataString = 'name=' + name + '&email=' + email + '&phone=' + phone + '&subject=' + subject + '&message=' + message;
    alert(dataString);
    $.ajax({
        type: "POST",
        url: "envoyer-email.php",
        data: dataString,
        cache: false,
        success: function () {
            $("#contact_form").fadeOut(300);
            $("#notice").fadeIn(400);
        }
    });
    return false;
});


(function () {

    "use strict";

    /*=====================================
    Sticky
    ======================================= */
    window.onscroll = function () {
        var header_navbar = document.querySelector(".navbar-area");
        var sticky = header_navbar.offsetTop;

        if (window.pageYOffset > sticky) {
            header_navbar.classList.add("sticky");
        } else {
            header_navbar.classList.remove("sticky");
        }


        // show or hide the back-top-top button
        var backToTo = document.querySelector(".scroll-top");
        if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
            backToTo.style.display = "block";
        } else {
            backToTo.style.display = "none";
        }
    };


    //===== navbar-toggler
    let navbarToggler = document.querySelector(".navbar-toggler");
    navbarToggler.addEventListener('click', function () {
        navbarToggler.classList.toggle("active");
    })


    //WOW Scroll Spy
    var wow = new WOW({
        //disabled for mobile
        mobile: false
    });
    wow.init();

    //====== counter up
    var cu = new counterUp({
        start: 0,
        duration: 2000,
        intvalues: true,
        interval: 100,
    });
    cu.start();


    //======= portfolio-btn active
    var elements = document.getElementsByClassName("portfolio-btn");
    for (var i = 0; i < elements.length; i++) {
        elements[i].onclick = function () {

            // remove class from sibling

            var el = elements[0];
            while (el) {
                if (el.tagName === "BUTTON") {
                    //remove class
                    el.classList.remove("active");

                }
                // pass to the new sibling
                el = el.nextSibling;
            }

            this.classList.add("active");
        };
    }


    var navLinks = document.querySelectorAll(".navbar-nav .nav-item a");

    navLinks.forEach(function (navLink) {
        navLink.addEventListener("click", function (event) {
            event.target.parentNode.childNodes.forEach(function (node) {
                if (!node.isEqualNode(event.target) && node.classList) {
                    node.classList.toggle("show");
                }
            });
        });
    });

    navLinks.forEach(e =>
        e.addEventListener('click', () => {
            e.classList.toggle('show');
        })
    )


})();