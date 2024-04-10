<?php include './common.php' ?>
<?php

    $phone = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M21 16.42V19.9561C21 20.4811 20.5941 20.9167 20.0705 20.9537C19.6331 20.9846 19.2763 21 19 21C10.1634 21 3 13.8366 3 5C3 4.72371 3.01545 4.36687 3.04635 3.9295C3.08337 3.40588 3.51894 3 4.04386 3H7.5801C7.83678 3 8.05176 3.19442 8.07753 3.4498C8.10067 3.67907 8.12218 3.86314 8.14207 4.00202C8.34435 5.41472 8.75753 6.75936 9.3487 8.00303C9.44359 8.20265 9.38171 8.44159 9.20185 8.57006L7.04355 10.1118C8.35752 13.1811 10.8189 15.6425 13.8882 16.9565L15.4271 14.8019C15.5572 14.6199 15.799 14.5573 16.001 14.6532C17.2446 15.2439 18.5891 15.6566 20.0016 15.8584C20.1396 15.8782 20.3225 15.8995 20.5502 15.9225C20.8056 15.9483 21 16.1633 21 16.42Z"></path></svg>';
    $email = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M3 3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3ZM12.0606 11.6829L5.64722 6.2377L4.35278 7.7623L12.0731 14.3171L19.6544 7.75616L18.3456 6.24384L12.0606 11.6829Z"></path></svg>';
    $whatsapp = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M7.25361 18.4944L7.97834 18.917C9.18909 19.623 10.5651 20 12.001 20C16.4193 20 20.001 16.4183 20.001 12C20.001 7.58172 16.4193 4 12.001 4C7.5827 4 4.00098 7.58172 4.00098 12C4.00098 13.4363 4.37821 14.8128 5.08466 16.0238L5.50704 16.7478L4.85355 19.1494L7.25361 18.4944ZM2.00516 22L3.35712 17.0315C2.49494 15.5536 2.00098 13.8345 2.00098 12C2.00098 6.47715 6.47813 2 12.001 2C17.5238 2 22.001 6.47715 22.001 12C22.001 17.5228 17.5238 22 12.001 22C10.1671 22 8.44851 21.5064 6.97086 20.6447L2.00516 22ZM8.39232 7.30833C8.5262 7.29892 8.66053 7.29748 8.79459 7.30402C8.84875 7.30758 8.90265 7.31384 8.95659 7.32007C9.11585 7.33846 9.29098 7.43545 9.34986 7.56894C9.64818 8.24536 9.93764 8.92565 10.2182 9.60963C10.2801 9.76062 10.2428 9.95633 10.125 10.1457C10.0652 10.2428 9.97128 10.379 9.86248 10.5183C9.74939 10.663 9.50599 10.9291 9.50599 10.9291C9.50599 10.9291 9.40738 11.0473 9.44455 11.1944C9.45903 11.25 9.50521 11.331 9.54708 11.3991C9.57027 11.4368 9.5918 11.4705 9.60577 11.4938C9.86169 11.9211 10.2057 12.3543 10.6259 12.7616C10.7463 12.8783 10.8631 12.9974 10.9887 13.108C11.457 13.5209 11.9868 13.8583 12.559 14.1082L12.5641 14.1105C12.6486 14.1469 12.692 14.1668 12.8157 14.2193C12.8781 14.2457 12.9419 14.2685 13.0074 14.2858C13.0311 14.292 13.0554 14.2955 13.0798 14.2972C13.2415 14.3069 13.335 14.2032 13.3749 14.1555C14.0984 13.279 14.1646 13.2218 14.1696 13.2222V13.2238C14.2647 13.1236 14.4142 13.0888 14.5476 13.097C14.6085 13.1007 14.6691 13.1124 14.7245 13.1377C15.2563 13.3803 16.1258 13.7587 16.1258 13.7587L16.7073 14.0201C16.8047 14.0671 16.8936 14.1778 16.8979 14.2854C16.9005 14.3523 16.9077 14.4603 16.8838 14.6579C16.8525 14.9166 16.7738 15.2281 16.6956 15.3913C16.6406 15.5058 16.5694 15.6074 16.4866 15.6934C16.3743 15.81 16.2909 15.8808 16.1559 15.9814C16.0737 16.0426 16.0311 16.0714 16.0311 16.0714C15.8922 16.159 15.8139 16.2028 15.6484 16.2909C15.391 16.428 15.1066 16.5068 14.8153 16.5218C14.6296 16.5313 14.4444 16.5447 14.2589 16.5347C14.2507 16.5342 13.6907 16.4482 13.6907 16.4482C12.2688 16.0742 10.9538 15.3736 9.85034 14.402C9.62473 14.2034 9.4155 13.9885 9.20194 13.7759C8.31288 12.8908 7.63982 11.9364 7.23169 11.0336C7.03043 10.5884 6.90299 10.1116 6.90098 9.62098C6.89729 9.01405 7.09599 8.4232 7.46569 7.94186C7.53857 7.84697 7.60774 7.74855 7.72709 7.63586C7.85348 7.51651 7.93392 7.45244 8.02057 7.40811C8.13607 7.34902 8.26293 7.31742 8.39232 7.30833Z"></path></svg>';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <?= $noindex ?>
    <title>Contact us | Safewalk Network 24/7</title>
    <meta name="description" content="We offer top class Agra escorts at cash payment. All type of escorts available like Housewife, college girls, Russian models, etc">
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Contact us | Safewalk Network 24/7" />
    <meta property="og:description" content="We offer top class Agra escorts at cash payment. All type of escorts available like Housewife, college girls, Russian models, etc" />
    <meta property="og:url" content="<?= get_url() ?>contact-us.html" />
    <meta property="og:site_name" content="Escort" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Contact us | Safewalk Network 24/7" />
    <meta name="twitter:description" content="We offer top class Agra escorts at cash payment. All type of escorts available like Housewife, college girls, Russian models, etc" />
    <link rel="canonical" href="<?= get_url() ?>contact-us.html" />
    <!-- apart -->
    <link rel="stylesheet" href="<?= get_url() ?>css/navbar.css?v=1">
    <style>
        .below-text h1 {
            font-size: 2.2rem;
        }

        .form-group {
            margin: 2% 0;
        }
        .video-below-text .below-text{color: white;}

        .message-flex {
            width: 100%;
            height: auto;
            display: flex;
            margin: 2% 0;
        }

        .message-info {
            flex: 1;
            padding: .2% 1.5%;
        }

        .message-form {
            flex: 1;
            background-color: #F7F7F7;
            padding: 1.5%;
        }

        .form-group {
            width: 100%;
        }

        .form-flex {
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .form-flex>div {
            width: 100%;
        }

        input,
        select {
            width: 95%;
            height: 40px;
            border: 1px solid lightgrey;
            outline: 0;
            border-radius: 3px;
            color: var(--text-color)
        }

        label {
            font-weight: 700;
        }

        textarea {
            border-radius: 5px;
            width: 98%;
            resize: vertical;
            border: 1px solid lightgrey;
        }

        .form-group button {
            height: 50px;
            width: 150px;
            border: 0;
            border-radius: 3px;
            background-color: var(--link-color);
            color: white;
            cursor: pointer;
        }

        .follow-flex {
            display: flex;
            gap: 1.5%;
        }

        .follow-flex>div {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            background-color: #F7F7F7;
            border-radius: 50%;
            display: grid;
            box-shadow: 0 3px 2px .5px lightgrey;
            cursor: pointer;
            place-items: center;
        }

        .follow-flex>div>svg {
            width: 15px;
        }

        .message-info h3 {
            font-size: 1.6rem;
            margin: 0 0 .5rem 0;
        }

        .message-info h4 {
            font-size: 1.4rem;
            margin: 0 0 .5rem 0;
        }

        .contact-info .contact-info-flex {
            margin: 4% 0;
            font-size: .9rem;
        }

        .contact-info-flex {
            color: var(--link-color);
            display: flex;
            align-items: center;
        }

        .inner-message-info .contact-info-flex {
            color: var(--text-color)
        }

        .contact-info-flex b {
            color: var(--text-color)
        }

        .contact-info-flex div {
            width: 25px;
            height: 25px;
            border: 1px solid var(--link-color);
            border-radius: 50%;
            display: grid;
            margin-right: 1.5%;
            place-items: center;
        }

        .contact-info-flex>div>svg {
            width: 15px
        }

        .inner-message-info {
            margin-top: 10%;
        }

        input[name="subject"] {
            width: 97.5%;
        }
    </style>
    <?=$schema ?>
</head>

<body>
    <?php include './navbar.php' ?>
    <div class="safewalkheading">
        <div class="video-below-text">
            <div class="below-text">
                <h1>Contact Us</h1>
                <p>Call Us For further details</p>
            </div>
            <div class="below-button">
                <button><?= $phone_number ?></button>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="message-flex">
            <div class="message-form">
                <h2>Contact <span style="font-weight: normal;">Us</span></h2>
                <p>Feel free to ask for details, don't save any questions!</p>
                <form action="">
                    <div class="form-group">
                        <div class="form-flex">
                            <div>
                                <label for="">Full Name*</label><br><br>
                                <input type="text">
                            </div>
                            <div>
                                <label for="">Email Address*</label><br><br>
                                <input type="email">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-flex">
                            <div>
                                <label for="">Subject</label><br><br>
                                <input type="text" name="subject">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Message*</label><br><br>
                        <textarea name="" id="" cols="30" rows="15"></textarea>
                    </div>
                    <div class="form-group">
                        <button>SEND MESSAGE</button>
                    </div>
                </form>
            </div>
            <div class="message-info">
                <div class="inner-message-inf">
                    <h3><span style="font-weight: normal;">OUR</span> OFFICE</h3>
                    <div class="contact-info">
                        <div class="contact-info-flex">
                            <div><?= $phone ?></div><b>Phone: </b> <?= $phone_number ?>
                        </div>
                        <div class="contact-info-flex">
                            <div><?= $whatsapp ?></div><b>Whatsapp: </b> <?= $phone_number ?>
                        </div>
                        <div class="contact-info-flex">
                            <div><?= $email ?></div><b>Email: </b> ramanarora7869@gmail.com
                        </div>
                    </div>
                </div>
                <div class="inner-message-info">
                    <h4><span style="font-weight: normal;">Business</span> Hours</h4>
                    <div class="contact-info">
                        <div class="contact-info-flex">
                            <div style="border: 0;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20ZM13 12H17V14H11V7H13V12Z"></path>
                                </svg></div> Monday - Friday - 11am to 2am
                        </div>
                        <div class="contact-info-flex">
                            <div style="border: 0;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20ZM13 12H17V14H11V7H13V12Z"></path>
                                </svg></div>Saturday - 24hrs
                        </div>
                        <div class="contact-info-flex">
                            <div style="border: 0;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20ZM13 12H17V14H11V7H13V12Z"></path>
                                </svg></div>Sunday - 24hrs
                        </div>
                    </div>
                </div>
                <div class="inner-message-info">
                    <h4><span style="font-weight: normal;">Follow</span> Us</h4>
                    <div class="follow-flex">
                        <div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M14 13.5H16.5L17.5 9.5H14V7.5C14 6.47062 14 5.5 16 5.5H17.5V2.1401C17.1743 2.09685 15.943 2 14.6429 2C11.9284 2 10 3.65686 10 6.69971V9.5H7V13.5H10V22H14V13.5Z"></path>
                            </svg></div>
                        <div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M18.2048 2.25H21.5128L14.2858 10.51L22.7878 21.75H16.1308L10.9168 14.933L4.95084 21.75H1.64084L9.37084 12.915L1.21484 2.25H8.04084L12.7538 8.481L18.2048 2.25ZM17.0438 19.77H18.8768L7.04484 4.126H5.07784L17.0438 19.77Z"></path>
                            </svg></div>
                        <div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12.001 9C10.3436 9 9.00098 10.3431 9.00098 12C9.00098 13.6573 10.3441 15 12.001 15C13.6583 15 15.001 13.6569 15.001 12C15.001 10.3427 13.6579 9 12.001 9ZM12.001 7C14.7614 7 17.001 9.2371 17.001 12C17.001 14.7605 14.7639 17 12.001 17C9.24051 17 7.00098 14.7629 7.00098 12C7.00098 9.23953 9.23808 7 12.001 7ZM18.501 6.74915C18.501 7.43926 17.9402 7.99917 17.251 7.99917C16.5609 7.99917 16.001 7.4384 16.001 6.74915C16.001 6.0599 16.5617 5.5 17.251 5.5C17.9393 5.49913 18.501 6.0599 18.501 6.74915ZM12.001 4C9.5265 4 9.12318 4.00655 7.97227 4.0578C7.18815 4.09461 6.66253 4.20007 6.17416 4.38967C5.74016 4.55799 5.42709 4.75898 5.09352 5.09255C4.75867 5.4274 4.55804 5.73963 4.3904 6.17383C4.20036 6.66332 4.09493 7.18811 4.05878 7.97115C4.00703 9.0752 4.00098 9.46105 4.00098 12C4.00098 14.4745 4.00753 14.8778 4.05877 16.0286C4.0956 16.8124 4.2012 17.3388 4.39034 17.826C4.5591 18.2606 4.7605 18.5744 5.09246 18.9064C5.42863 19.2421 5.74179 19.4434 6.17187 19.6094C6.66619 19.8005 7.19148 19.9061 7.97212 19.9422C9.07618 19.9939 9.46203 20 12.001 20C14.4755 20 14.8788 19.9934 16.0296 19.9422C16.8117 19.9055 17.3385 19.7996 17.827 19.6106C18.2604 19.4423 18.5752 19.2402 18.9074 18.9085C19.2436 18.5718 19.4445 18.2594 19.6107 17.8283C19.8013 17.3358 19.9071 16.8098 19.9432 16.0289C19.9949 14.9248 20.001 14.5389 20.001 12C20.001 9.52552 19.9944 9.12221 19.9432 7.97137C19.9064 7.18906 19.8005 6.66149 19.6113 6.17318C19.4434 5.74038 19.2417 5.42635 18.9084 5.09255C18.573 4.75715 18.2616 4.55693 17.8271 4.38942C17.338 4.19954 16.8124 4.09396 16.0298 4.05781C14.9258 4.00605 14.5399 4 12.001 4ZM12.001 2C14.7176 2 15.0568 2.01 16.1235 2.06C17.1876 2.10917 17.9135 2.2775 18.551 2.525C19.2101 2.77917 19.7668 3.1225 20.3226 3.67833C20.8776 4.23417 21.221 4.7925 21.476 5.45C21.7226 6.08667 21.891 6.81333 21.941 7.8775C21.9885 8.94417 22.001 9.28333 22.001 12C22.001 14.7167 21.991 15.0558 21.941 16.1225C21.8918 17.1867 21.7226 17.9125 21.476 18.55C21.2218 19.2092 20.8776 19.7658 20.3226 20.3217C19.7668 20.8767 19.2076 21.22 18.551 21.475C17.9135 21.7217 17.1876 21.89 16.1235 21.94C15.0568 21.9875 14.7176 22 12.001 22C9.28431 22 8.94514 21.99 7.87848 21.94C6.81431 21.8908 6.08931 21.7217 5.45098 21.475C4.79264 21.2208 4.23514 20.8767 3.67931 20.3217C3.12348 19.7658 2.78098 19.2067 2.52598 18.55C2.27848 17.9125 2.11098 17.1867 2.06098 16.1225C2.01348 15.0558 2.00098 14.7167 2.00098 12C2.00098 9.28333 2.01098 8.94417 2.06098 7.8775C2.11014 6.8125 2.27848 6.0875 2.52598 5.45C2.78014 4.79167 3.12348 4.23417 3.67931 3.67833C4.23514 3.1225 4.79348 2.78 5.45098 2.525C6.08848 2.2775 6.81348 2.11 7.87848 2.06C8.94514 2.0125 9.28431 2 12.001 2Z"></path>
                            </svg></div>
                        <div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M6.27051 7.62976C8.86829 7.07312 10.816 4.76401 10.816 2H13.8463V7.15152H17.4826V10.7879H13.8463V16.2424C13.8463 16.7566 14.044 17.4493 14.7554 17.9091C15.2296 18.2156 16.2397 18.3671 17.7857 18.3636V22H13.5432C11.0329 22 8.99778 19.9649 8.99778 17.4545V10.7879H6.27051V7.62976Z"></path>
                            </svg></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include './footer.php' ?>
</body>

</html>