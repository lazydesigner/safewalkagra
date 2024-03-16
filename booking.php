<?php include './common.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <?= $noindex ?>
    <title>Book our awesome service | Safewalk Network 24/7</title>
    <meta name="description" content="We offer top class Agra escorts at cash payment. All type of escorts available like Housewife, college girls, Russian models, etc">
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Book our awesome service | Safewalk Network 24/7" />
    <meta property="og:description" content="We offer top class Agra escorts at cash payment. All type of escorts available like Housewife, college girls, Russian models, etc" />
    <meta property="og:url" content="<?= get_url() ?>booking.html" />
    <meta property="og:site_name" content="Escort" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Book our awesome service | Safewalk Network 24/7" />
    <meta name="twitter:description" content="We offer top class Agra escorts at cash payment. All type of escorts available like Housewife, college girls, Russian models, etc" />
    <link rel="canonical" href="<?= get_url() ?>booking.html" />
    <!-- apart -->
    <style>
        .price-section {
            width: 100%;
            height: auto;
        }

        .price-heading {
            width: 100%;
            height: 150px;
            background-color: var(--secondary);
            color: white;
            display: grid;
            place-items: center;
            font-size: 1.5rem;
        }

        .price-heading h3 {
            font-weight: 400;
        }

        .price {
            width: 100%;
            height: 800px;
            /* background-image: url('../images/charmy.webp'); */
            background-position: center;
            background-repeat: no-repeat;
            background-size: 100% auto;
            background-attachment: fixed;
            display: grid;
            place-items: center;
        }

        .price-flex {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .price-list {
            width: 370px;
            height: 450px;
            background-color: white;
            text-align: center;
        }

        .session-timing {
            width: 100%;
            height: 90px;
        }

        .price-rate {
            width: 100%;
            height: 170px;
            background-color: var(--border);
            font-size: 2.1rem;
            display: grid;
            align-items: center;
            margin: 0;
            padding: 0 2%;
        }

        .price-rate p {
            font-size: small;
            margin: 0;
        }

        .price-list:first-child button {
            width: 60px;
            height: 45px;
            border: 2px solid var(--secondary);
            background-color: transparent;
            color: var(--text-color);
            border-radius: 5px;
        }

        .price-list:last-child button {
            width: 110px;
            height: 45px;
            color: var(--text-color);
            border: 2px solid var(--secondary);
            background-color: transparent;
            border-radius: 5px;
        }

        .price-list:nth-child(2) {
            transform: scale(1.15);
        }

        .price-list:nth-child(2) .session-timing {
            background-color: var(--link-color);
            color: white;
            display: grid;
            place-items: center;
            font-size: 1.1rem;
        }

        .price-partition {
            width: 80%;
            margin: 2% auto;
            padding: 2%;
        }

        .price-partition button {
            width: 100px;
            height: 40px;
            background-color: var(--link-color);
            color: white;
            cursor: pointer;
            border: 0;
            border-radius: 5px;
        }
    </style>

    <link rel="stylesheet" href="<?= get_url() ?>css/navbar.css">
    <style>
        .below-text h1 {
            font-size: 2.2rem;
        }

        .booking-form {
            width: 100%;
            height: 1200px;
            display: grid;
            place-items: center;
            background-color: grey;
            background-image: url('./images/charmy.webp');
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
            padding: 10% auto 5% auto;
        }

        .form-container {
            width: 38%;
            height: auto;
            background-color: #F7F7F7;
            padding: 4% 1.5%;
            margin-top: 10.5%;
            /* margin: auto; */
        }

        .form-container h3 {
            font-size: 2rem;
            margin: 0;
            font-weight: 500;
            color: #CC0033;
        }

        .form-group {
            margin: 3% 0;
        }

        .form-flex {
            width: 100%;
            display: flex;
            gap: 2%;
            align-items: center;
        }

        .form-group input,.form-group select {
            width: 100%;
            padding: 1%;
            height: 35px;
            border: 1px solid lightgrey;
            border-radius: 2px;
            outline: 0;
        }
        .form-group textarea{width: 100%;padding: 1%;border: 1px solid lightgrey;outline: 0;resize: vertical;}
        .form-group button{
            width: 110px;
            height: 45px;
            border: 2px solid var(--link-color);
            border-radius: 3px;
            cursor: pointer;
            color: var(--link-color);
            font-weight: 600;
        }

    </style>
    <?=$schema ?>
</head>

<body>
    <?php include './navbar.php' ?>
    <div class="safewalkheading">
        <div class="video-below-text">
            <div class="below-text">
                <h1>Booking</h1>
                <p>Call Us For further details</p>
            </div>
            <div class="below-button">
                <button>+91 <?= $phone_number ?></button>
            </div>
        </div>
    </div>
    <div class="booking-form">
        <div class="form-container">
            <small>Hi everyone, Please complete the following form in order to reserve the ideal friend for fun and enjoyment.</small>
            
            <h3>YOUR INFORMATION</h3>
            <div style="margin-top: 5%;">
                <div class="form-group">
                    <div class="form-flex">
                        <input type="text" placeholder="Your Name...">
                        <input type="text" placeholder="Your Email...">
                    </div>
                </div>
                <div class="form-group">
                    <input type="email" placeholder="Your Email Address...">
                </div>
            </div>
            <h3 style="font-size: 1.5rem;">BOOKING INFORMATION</h3>
            <div>
                <div class="form-group">
                    <div class="form-flex">
                        <select name="" id="">
                            <option value="">Select Model</option>
                            <option value="">Aditi</option>
                            <option value="">Anuradha</option>
                            <option value=""></option>
                        </select>
                        <input type="date" placeholder="mm/dd/yyyy">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-flex">
                        <select name="" id="">
                            <option value="">Select Duration</option>
                            <option value="">3 Hours</option>
                            <option value="">Night</option>
                        </select>
                        <select name="" id="">
                            <option value="">Point of Contact</option>
                            <option value="">Call</option>
                            <option value="">Email</option>
                            <option value="">WhatsApp</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <textarea name="" id="" placeholder="Special Message" cols="30" rows="8"></textarea>
                </div>
                <div class="form-group">
                    <button>SUBMIT</button>
                </div>
            </div>
            <div>
                <p style="line-height: 30px;font-size:.9rem;margin-bottom:15%">Our team will contact you with more information within fifteen minutes of completing the above form. When the chosen profiles arrive in the room you have reserved, you must pay them directly once she says, "We don't take advance":</p>
            </div>
        </div>
    </div>
    <section class="price-section">
        <div class="price-heading">
            <h3><strong>PRICE</strong></h3>
        </div>
        <div class="price">
            <div class="price-flex">
                <div class="price-list">
                    <div class="session-timing">
                        <h4>1 Hours 1 Sessions (Depends on Profile)</h4>
                    </div>
                    <div class="price-rate">
                        <span><strong>&#8377;8,9999 / &#8377;14,9999 / &#8377;19,9999 </strong>
                            <p>1 HOURS</p>
                        </span>
                    </div>
                    <div class="price-partition" style="border-bottom: 1px solid var(--border);"><small>1 HOURS 1 SESSION</small></div>
                    <div class="price-partition"><small>&#8377;8,999 - &#8377;19,999</small></div>
                    <div class="price-partition"><button>Call</button></div>
                </div>
                <div class="price-list">
                    <div class="session-timing">
                        <h4>3 Hours 2 Sessions (Depends on Profile)</h4>
                    </div>
                    <div class="price-rate">
                        <span><strong>&#8377;18,9999 / &#8377;23,9999 / &#8377;33,9999 </strong>
                            <p>3 HOURS</p>
                        </span>
                    </div>
                    <div class="price-partition" style="border-bottom: 1px solid var(--border);"><small>3 HOURS 2 SESSION</small></div>
                    <div class="price-partition"><small>&#8377;18,999 - &#8377;33,999</small></div>
                    <div class="price-partition"><button>BOOK NOW</button></div>
                </div>
                <div class="price-list">
                    <div class="session-timing">
                        <h4>Full Night 3 Sessions (Depends on Profile)</h4>
                    </div>
                    <div class="price-rate">
                        <span><strong>&#8377;23,9999 / &#8377;33,9999 / &#8377;48,9999 </strong>
                            <p>3 HOURS</p>
                        </span>
                    </div>
                    <div class="price-partition" style="border-bottom: 1px solid var(--border);"><small>Full Night</small></div>
                    <div class="price-partition"><small>&#8377;23,999 - &#8377;48,999</small></div>
                    <div class="price-partition"><button>WHATSAPP</button></div>
                </div>
            </div>
        </div>
    </section>
    <?php include './footer.php' ?>
</body>

</html>