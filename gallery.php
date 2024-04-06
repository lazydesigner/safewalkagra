<?php include './common.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <?=$noindex ?>
    <title>Gallery | Safewalk Network 24/7</title>
    <meta name="description" content="We offer top class Agra escorts at cash payment. All type of escorts available like Housewife, college girls, Russian models, etc">
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Gallery | Safewalk Network 24/7" />
    <meta property="og:description" content="We offer top class Agra escorts at cash payment. All type of escorts available like Housewife, college girls, Russian models, etc" />
    <meta property="og:url" content="<?= get_url() ?>gallery.html" />
    <meta property="og:site_name" content="Escort" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Gallery | Safewalk Network 24/7" />
    <meta name="twitter:description" content="We offer top class Agra escorts at cash payment. All type of escorts available like Housewife, college girls, Russian models, etc" />
    <link rel="canonical" href="<?= get_url() ?>gallery.html" />
    <!-- apart -->
    <style>
        .grid-of-profiles{
    width: 100%;
    height: auto;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(30%, 1fr));
    grid-auto-rows: 550px;
    border-radius: 5px;
    column-gap: 3%;
}
.grid-item{
    width: auto;
    height: auto;
    margin: 3% 0;
    border-radius: 5px;
    border:1px solid #36454F;
    position: relative;
}
.profiles{
    width: 100%;
    height: 100%;
    display: grid;
    align-items: center;
    cursor: pointer;
    position: relative;
}

.profiles img{
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    z-index: -1;
    object-fit: cover;
}

.profile-band{
    width: 100%;
    height: 60px;
    background-color: rgba(0, 0, 0, 0.239);
    color: white;
    font-size: 1.4rem;
    display: grid;
    /* justify-content: end; */
}
.profile-band div{width: 90%;margin: auto;display: grid;justify-content: end;}
.profile-band p{margin:.5% 0;}
.profile-band button{width:180px;height:50px;padding:1.5% 1%;background-color: var(--link-color);border: 0;border-radius: 2px;font-weight: bold;font-size: 1rem;color: white;}
        /* GALLERY */
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
            background-image: url('./images/High profile models.webp');
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
    <link rel="stylesheet" href="<?= get_url() ?>css/navbar.css?v=1">
    <style>
        .below-text h1 {
            font-size: 2.2rem;
        }
    </style>
    <?=$schema ?>
</head>

<body>
    <?php include './navbar.php' ?>
    <div class="safewalkheading">
        <div class="video-below-text">
            <div class="below-text">
                <h1>Agra Escorts | Gallery You get only what you see</h1>
                <p>Call Us For further details</p>
            </div>
            <div class="below-button">
                <button><?= $phone_number ?></button>
            </div>
        </div>
    </div>

    <div class="container">
    <div class="grid-of-profiles">
            <div class="grid-item">
               <a href="<?=get_url()?>models/russian-escort-in-agra-ahana.html"><div class="profiles">
                    <img src="<?=get_url() ?>images/ahana russian escort.png" loading="lazy" width="100%" height="100%" alt="Ahana Russian Escort">
                    <div class="profile-band">
                        <div>
                            <span>
                                <p>Ahana</p>
                                <button>RUSSIAN MODEL</button>
                            </span>
                        </div>
                    </div>
                </div></a>
            </div>
            <div class="grid-item">
            <a href="<?=get_url()?>models/best-price-russian-call-girl-in-agra.html"> <div class="profiles">
                    <img src="<?=get_url() ?>images/Julia russian escort.png" loading="lazy" width="100%" height="100%" alt="Ahana Russian Escort">
                    <div class="profile-band">
                        <div>
                            <p>Julia</p>
                            <button>RUSSIAN MODEL</button>
                        </div>
                    </div>
                </div></a>
            </div>
            <div class="grid-item">
            <a href="<?=get_url()?>models/shalini-premium-bdsm-escort.html"><div class="profiles">
                    <img src="<?=get_url() ?>images/Shalini russian Escort.png" loading="lazy" width="100%" height="100%" alt="Ahana Russian Escort">
                    <div class="profile-band">
                        <div>
                            <p>Shalini</p>
                            <button>BDSM</button>
                        </div>
                    </div>
                </div></a>
            </div>
            <div class="grid-item">
            <a href="<?=get_url() ?>models/young-college-call-girl-in-agra.html"><div class="profiles">
                    <img src="<?=get_url() ?>images/Dolly Sharma college escorts.png" loading="lazy" width="100%" height="100%" alt="Ahana Russian Escort">
                    <div class="profile-band">
                        <div>
                            <p>Dolly Sharma</p>
                            <button>COLLEGE ESCORT</button>
                        </div>
                    </div>
                </div></a>
            </div>
            <div class="grid-item">
            <a href="<?=get_url() ?>models/avanya-college-escort-in-agra.html"><div class="profiles">
                    <img src="<?=get_url() ?>images/Avanya college call girl.png" loading="lazy" width="100%" height="100%" alt="Ahana Russian Escort">
                    <div class="profile-band">
                        <div>
                            <p>Avanya</p>
                            <button>COLLEGE ESCORT</button>
                        </div>
                    </div>
                </div></a>
            </div>
            <div class="grid-item">
            <a href="<?=get_url() ?>models/high-profile-escort-in-agra-kamayani.html"><div class="profiles">
                    <img src="<?=get_url() ?>images/kamayani  college escorts.png" loading="lazy" width="100%" height="100%" alt="Ahana Russian Escort">
                    <div class="profile-band">
                        <div>
                            <p>kamayani</p>
                            <button>HIGH PROFILE</button>
                        </div>
                    </div>
                </div></a>
            </div>
            <div class="grid-item">
            <a href="<?=get_url() ?>models/independent-escort-service-in-agra.html"><div class="profiles">
                    <img src="<?=get_url() ?>images/Ritika escorts.png" loading="lazy" width="100%" height="100%" alt="Independent Escort">
                    <div class="profile-band">
                        <div>
                            <p>Ritika</p>
                            <button>INDEPENDENT ESCORT</button>
                        </div>
                    </div>
                </div></a>
            </div>
            <div class="grid-item">
            <a href="<?=get_url() ?>models/best-punjabi-call-girl-in-agra.html"><div class="profiles">
                    <img src="<?=get_url() ?>images/jasleen Kaur call girl service.png" loading="lazy" width="100%" height="100%" alt="punjabi Escort service">
                    <div class="profile-band">
                        <div>
                            <p>Jasleen Kaur</p>
                            <button>PUNJABI</button>
                        </div>
                    </div>
                </div></a>
            </div>
            <div class="grid-item">
            <a href="<?=get_url() ?>models/mature-housewife-escort-near-agra.html"><div class="profiles">
                    <img src="<?=get_url() ?>images/Anshiat pandey escorts service.png" loading="lazy" width="100%" height="100%" alt="Housewife Escort">
                    <div class="profile-band">
                        <div>
                            <p>Anshiat Pandey</p>
                            <button>HOUSEWIFE ESCORT</button>
                        </div>
                    </div>
                </div></a>
            </div>
            <div class="grid-item">
            <a href="<?=get_url() ?>models/akannki-is-a-premium-mature-milf.html"><div class="profiles">
                    <img src="<?=get_url() ?>images/Akannki housewife call girl.png" loading="lazy" width="100%" height="100%" alt="Housewife escort Provider">
                    <div class="profile-band">
                        <div>
                            <p>Akannki</p>
                            <button>HOUSEWIFE ESCORT</button>
                        </div>
                    </div>
                </div></a>
            </div>
            <div class="grid-item">
            <a href="<?=get_url() ?>models/best-model-escort-in-agra.html"><div class="profiles">
                    <img src="<?=get_url() ?>images/Afsana model call girl service.png" loading="lazy" width="100%" height="100%" alt="model Escort">
                    <div class="profile-band">
                        <div>
                            <p>Afsana</p>
                            <button>MODEL ESCORT</button>
                        </div>
                    </div>
                </div></a>
            </div>
            <div class="grid-item">
            <a href="<?=get_url() ?>models/agra-escort-service-provider-anastasia.html"><div class="profiles">
                    <img src="<?=get_url() ?>images/Puja model call girl.png" loading="lazy" width="100%" height="100%" alt="Russian Model Escort">
                    <div class="profile-band">
                        <div>
                            <p>Anastasia</p>
                            <button>MODEL ESCORT</button>
                        </div>
                    </div>
                </div></a>
            </div>
        </div>
    </div>


    <?php include './common-price.php' ?>
    <?php include './footer.php' ?>
</body>
</html>    