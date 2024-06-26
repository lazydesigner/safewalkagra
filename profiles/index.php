<?php include '../common.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <meta name="robots" content="noindex, nofollow, max-snippet:-1, max-video-preview:-1, max-image-preview:large">
    <link rel="shortcut icon" href="'.get_url().'images/our-service-your-satisfaction.png" type="image/x-icon" />
    <title>Profiles | Safewalk Network 24/7</title>
    <meta name="description" content="We offer top class Agra escorts at cash payment. All type of escorts available like Housewife, college girls, Russian models, etc">
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Profiles | Safewalk Network 24/7" />
    <meta property="og:description" content="We offer top class Agra escorts at cash payment. All type of escorts available like Housewife, college girls, Russian models, etc" />
    <meta property="og:url" content="<?= get_url() ?>" />
    <meta property="og:site_name" content="Escort" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Profiles | Safewalk Network 24/7" />
    <meta name="twitter:description" content="We offer top class Agra escorts at cash payment. All type of escorts available like Housewife, college girls, Russian models, etc" />
    <link rel="canonical" href="<?= get_url() ?>" />
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
            background-image: url('../images/charmy.webp');
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
            background-color: #F7F7F7;
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
        .profile-flex {
            width: 100%;
            display: flex;
            margin: 3% 0;
        }

        .profile-image {
            width: 65%;
        }

        .profile-details {
            width: 45%;
            padding: 0 1%;
        }

        .profile-btn {
            width: 100%;
            height: 50px;
            border: 0;
            outline: 0;
            background-color: #F7F7F7;
            color: #212529;
            display: grid;
            place-items: center;
            margin-bottom: 5%;
            font-weight: 800;
            cursor: pointer;
        }

        table {
            width: 100%;
            padding: 5%;
            font-size: .9rem;
        }

        table tr td {
            padding: 5% 2%;
            text-align: center;
            border-top: 1px solid rgb(229, 229, 229);
        }

        .profile-info {
            background-color: #F7F7F7;
            margin: 10% 0;
        }

        .profile-price {
            background-color: #F7F7F7;

        }

        .profile-h {
            width: 100%;
            height: 50px;
            border: 0;
            outline: 0;
            color: #F7F7F7;
            background-color: #212529;
            display: grid;
            place-items: center;
            font-weight: bold;
            font-size: small;
            margin-bottom: 10%;
        }

        table p {
            line-height: 25px;
        }

        table a {
            font-weight: bold;
            font-size: 1rem;
            background-color: wheat;
            padding: 1%;
        }

        .grid-of-profile-images {
            width: 100%;
            display: grid;
            grid-template-columns: repeat(2, minmax(48%, 1fr));
            column-gap: 2%;
            grid-auto-rows: 400px;
            padding: 0 3%;

            /* grid-template-rows: auto; */
        }

        .pro-images {
            width: auto;
            height: auto;
            padding: 0 2% 10% 2%;
        }

        .img-c {
            background-color: #F7F7F7;
            width: 100%;
            height: 100%;
        }
    </style>
</head>

<body>
    <?php include '../navbar.php' ?>
    <div class="safewalkheading">
        <div class="video-below-text">
            <div class="below-text">
                <h1>Profiles</h1>
                <p>Call Us For further details</p>
            </div>
            <div class="below-button">
                <button>+91 <?= $phone_number ?></button>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="profile-flex">
            <div class="profile-image">
                <div class="grid-of-profile-images">
                    <div class="pro-images">
                        <div class="img-c"></div>
                    </div>
                    <div class="pro-images">
                        <div class="img-c"></div>
                    </div>
                    <div class="pro-images">
                        <div class="img-c"></div>
                    </div>
                    <div class="pro-images">
                        <div class="img-c"></div>
                    </div>
                </div>
            </div>
            <div class="profile-details">
                <a href="<?= get_url() ?>booking"><button class="profile-btn">BOOK NOW</button></a>

                <div class="profile-btn" style="cursor: auto;">Profile</div>

                <div class="profile-info">
                    <div class="profile-h" style="margin-bottom: 0;">PROFILE</div>
                    <table>
                        <tr>
                            <td>Age</td>
                            <td>24</td>
                        </tr>
                        <tr>
                            <td>Height</td>
                            <td>5ft 3in</td>
                        </tr>
                        <tr>
                            <td>Figure</td>
                            <td>36-28-34</td>
                        </tr>
                        <tr>
                            <td>Profession</td>
                            <td>Model</td>
                        </tr>
                        <tr>
                            <td>Hair</td>
                            <td>Brownsh</td>
                        </tr>
                        <tr>
                            <td>Ethnicity</td>
                            <td>Russian</td>
                        </tr>
                        <tr>
                            <td>Nationality</td>
                            <td>RUSSIAN</td>
                        </tr>
                        <tr>
                            <td>Languages</td>
                            <td>English & Russian</td>
                        </tr>
                    </table>
                </div>
                <div class="profile-h">YOU GET ONLY WHAT YOU SEE !</div>

                <div class="profile-price">
                    <div class="profile-h" style="margin-bottom: 0;">OUT CALL PRICE</div>
                    <table>
                        <tr>
                            <td>1 HOURS 1 SESSION</td>
                            <td>15,000</td>
                        </tr>
                        <tr>
                            <td>3 HOURS 2 SESSIONS</td>
                            <td>25,000</td>
                        </tr>
                        <tr>
                            <td>FULL NIGHT 3 SESSIONS</td>
                            <td>35,000</td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div style="margin: 4% 0;"><b>Service:</b></div>
                                <a href="<?= get_url() ?>gallery">Best russian escorts in Agra</a>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga possimus cum illum est expedita. Quos dolores ducimus totam, non aliquam fugiat officia dolor odio obcaecati voluptate adipisci magni tempore nobis aspernatur mollitia necessitatibus! Omnis doloremque minima molestias itaque perferendis alias. Saepe et neque commodi quo quam maiores expedita dolores, sapiente possimus aperiam sint cum? Libero deserunt tempora pariatur delectus quibusdam hic alias recusandae, amet excepturi illum explicabo numquam esse, laborum similique sed laboriosam veritatis ut id iure? Quis dolore necessitatibus sunt, ex harum odio aperiam esse! Perspiciatis, quo molestias aliquam alias impedit corrupti atque? Officiis id soluta nam praesentium quam!</p>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <section class="price-section">
        <div class="price-heading">
            <h3>Safe Walk Agra <strong>PRICE</strong></h3>
        </div>
        <div class="price">
            <div class="price-flex">
                <div class="price-list">
                    <div class="session-timing">
                        <h4>1 Sessions</h4>
                    </div>
                    <div class="price-rate">
                        <span><strong>&#8377;14,9999</strong>
                            <p>1 HOUR</p>
                        </span>
                    </div>
                    <div class="price-partition" style="border-bottom: 1px solid var(--border);"><small>1 HOURS 1 SESSION</small></div>
                    <div class="price-partition"><small>&#8377;14,999 - &#8377;to 14,999</small></div>
                    <div class="price-partition"><button>Call</button></div>
                </div>
                <div class="price-list">
                    <div class="session-timing">
                        <h4>2 Sessions</h4>
                    </div>
                    <div class="price-rate">
                        <span><strong>&#8377;23,9999</strong>
                            <p>3 HOURS</p>
                        </span>
                    </div>
                    <div class="price-partition" style="border-bottom: 1px solid var(--border);"><small>3 HOURS 2 SESSION</small></div>
                    <div class="price-partition"><small>&#8377;18,999 - &#8377;23,999</small></div>
                    <div class="price-partition"><button>BOOK NOW</button></div>
                </div>
                <div class="price-list">
                    <div class="session-timing">
                        <h4>3 Sessions</h4>
                    </div>
                    <div class="price-rate">
                        <span><strong>&#8377;33,9999</strong>
                            <p>FULL NIGHT</p>
                        </span>
                    </div>
                    <div class="price-partition" style="border-bottom: 1px solid var(--border);"><small>Full Night 3 Sessions</small></div>
                    <div class="price-partition"><small>&#8377;23,999 - &#8377;33,999</small></div>
                    <div class="price-partition"><button>WHATSAPP</button></div>
                </div>
            </div>
        </div>
    </section>
    <?php include '../footer.php' ?>
</body>

</html>