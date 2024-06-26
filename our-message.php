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
    <title>Our Message | Safewalk Network 24/7</title>
    <meta name="description" content="We offer top class Agra escorts at cash payment. All type of escorts available like Housewife, college girls, Russian models, etc">
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Our Message | Safewalk Network 24/7" />
    <meta property="og:description" content="We offer top class Agra escorts at cash payment. All type of escorts available like Housewife, college girls, Russian models, etc" />
    <meta property="og:url" content="<?= get_url() ?>our-message.html" />
    <meta property="og:site_name" content="Escort" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Our Message | Safewalk Network 24/7" />
    <meta name="twitter:description" content="We offer top class Agra escorts at cash payment. All type of escorts available like Housewife, college girls, Russian models, etc" />
    <link rel="canonical" href="<?= get_url() ?>our-message.html" />
    <!-- apart -->
    <link rel="stylesheet" href="<?= get_url() ?>css/navbar.css?v=1">
    <style>
        .below-text h1 {
            font-size: 2.2rem;
        }

        .form-group {
            margin: 2% 0;
        }

        .message-flex {
            width: 100%;
            height: auto;
            display: flex;
            margin: 2% 0;
        }

        .message-info {
            flex: 1;
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
            justify-content: center;
            align-items: center;
        }

        .form-flex>div {
            width: 100%;
        }

        input,
        select {
            width: 97%;
            height: 40px;
            border: 0;
            outline: 0;
            border-radius: 3px;
            color: var(--text-color)
        }

        label {
            font-weight: 700;
        }

        textarea {
            border-radius: 5px;
            width: 100%;
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
        .video-below-text .below-text{color: white;}
    </style>
    <?=$schema ?>
</head>

<body>
    <?php include './navbar.php' ?>
    <div class="safewalkheading">
        <div class="video-below-text">
            <div class="below-text">
                <h1>Personal message</h1>
                <p>Call Us For further details</p>
            </div>
            <div class="below-button">
                <button><?= $phone_number ?></button>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="message-flex">
            <div class="message-info"  style="padding: 0 1%;">
            <p><b>Dear Visitors,</b></p>

<p>Welcome to Safe walk Agra web portal</p>

<p>We have been in Escort service Since last 2 decades. We have served more than 20K unique clients with 4.7 star rating on an average.</p>

<p>Nowadays, It is very common to hear about fake customers, fake providers, and frauds by different escorts. So we have a grievance form here where you can share all your problems. Our local agents are always ready to listen and solve it as soon as possible.</p>

<p>Safewalk is a reputed agency working in <a href="https://www.safewalkbangalore.com/" target="_blank" rel="nofollow">Bangalore</a>, <a href="https://www.safewalkgoa.com/" target="_blank" rel="nofollow">Goa</a> and <a href="<?=get_url() ?>">Agra</a>. We need to take care of our customers and their issues.</p>

<p>If you feel Cheated by any means you can contact our head office. We will be there to solve the same issue as soon as possible. Feel free and comfortable to contact via this form with solid proofs like  Screenshot, payment proofs etc. If this is about the bad behaviour of our escort then we might ask for a video or audio recording. Safewalkagra is a reputed agency in India, we make loyal and privileged customers. </p>

<p>We secure your identity and personal information</p>

            </div>
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
                                <label for="">Number*</label><br><br>
                                <input type="number">
                            </div>
                            <div>
                                <label for="">Point of Contact*</label><br><br>
                                <select name="" id="">
                                    <option value="call">Point of Contact</option>
                                    <option value="call">Call</option>
                                    <option value="email">Email</option>
                                    <option value="message">Message</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Message*</label><br><br>
                        <textarea name="" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <button>SEND MESSAGE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php include './footer.php' ?>
</body>

</html>