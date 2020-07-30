// Owl Carousel Start..................



$(document).ready(function () {
    var one = $("#one");
    var two = $("#two");

    $('#customNextBtn').click(function () {
        one.trigger('next.owl.carousel');
    })
    $('#customPrevBtn').click(function () {
        one.trigger('prev.owl.carousel');
    })
    one.owlCarousel({
        autoplay: true,
        loop: true,
        dot: true,
        autoplayHoverPause: true,
        autoplaySpeed: 100,
        margin: 10,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 4
            }
        }
    });

    two.owlCarousel({
        autoplay: true,
        loop: true,
        dot: true,
        autoplayHoverPause: true,
        autoplaySpeed: 100,
        margin: 10,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });

});




// Owl Carousel End..................



//Contact message send option here


$('#contactSendBtn').click(function () {

    var name = $('#nameid').val();
    var mobile = $('#mobileid').val();
    var email = $('#emailid').val();
    var msg = $('#msgid').val();
    SendContact(name, mobile, email, msg);
})



function SendContact(name, mobile, email, msg) {


    // alert(name+mobile+email+msg);

    if (name.length == 0) {
        $('#contactSendBtn').html("Eneter Your Name");
        setTimeout(function () {
            $('#contactSendBtn').html("Send Now");
        }, 2000)
    } else if (mobile.length == 0) {
        $('#contactSendBtn').html("Eneter Your Mobile");
        setTimeout(function () {
            $('#contactSendBtn').html("Send Now");
        }, 2000)
    } else if (email.length == 0) {
        $('#contactSendBtn').html("Eneter Your Email");
        setTimeout(function () {
            $('#contactSendBtn').html("Send Now");
        }, 2000)
    } else if (msg.length == 0) {
        $('#contactSendBtn').html("Eneter Your Message");
        setTimeout(function () {
            $('#contactSendBtn').html("Send Now");
        }, 2000)
    } else {


        $('#contactSendBtn').html("Message is Sending");

        axios.post('/contactSend', {
            namea: name,
            mobile: mobile,
            email: email,
            msg: msg

        })
            .then(function (response) {

                if (response.status == 200) {
                    if (response.data == 1) {
                        $('#contactSendBtn').html("Message Sent");
                        setTimeout(function () {
                            $('#contactSendBtn').html("Send Now");

                        }, 3000)
                        $('#nameid').val("");
                        $('#mobileid').val("");
                        $('#emailid').val("");
                        $('#msgid').val("");
                    }



                } else {
                    $('#contactSendBtn').html("Message Failed");
                    setTimeout(function () {
                        $('#contactSendBtn').html("Send Now");
                    }, 3000)
                }

            }).catch(function (error) {

                $('#contactSendBtn').html("Message Failed");
                setTimeout(function () {
                    $('#contactSendBtn').html("Send Now");
                }, 3000)

            });

    }




}


