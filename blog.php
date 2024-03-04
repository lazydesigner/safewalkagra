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
    <title>Blog | Safewalk Network 24/7</title>
    <meta name="description" content="We offer top class Agra escorts at cash payment. All type of escorts available like Housewife, college girls, Russian models, etc">
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Blog | Safewalk Network 24/7" />
    <meta property="og:description" content="We offer top class Agra escorts at cash payment. All type of escorts available like Housewife, college girls, Russian models, etc" />
    <meta property="og:url" content="<?= get_url() ?>" />
    <meta property="og:site_name" content="Escort" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Blog | Safewalk Network 24/7" />
    <meta name="twitter:description" content="We offer top class Agra escorts at cash payment. All type of escorts available like Housewife, college girls, Russian models, etc" />
    <link rel="canonical" href="<?= get_url() ?>" />
    <!-- apart -->
    <link rel="stylesheet" href="<?= get_url() ?>css/navbar.css">

    <style>
        .grid-of-blogs{
            width: 100%;
            height: auto;
            display: grid;
            grid-template-columns: repeat(3, minmax(30%, 1fr));
            grid-template-rows: auto;
            column-gap: 2%;
            margin: 2% 0;
        }
        .grid-items{
            width: auto;
            height: auto;
            margin: 2% 0;
        }
        .blog-image{
            width: 100%;
            aspect-ratio: 5/4;
            background-color: lightgrey;
        }
        .blog-image img{
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .blog-heading h2{
            font-weight: 600;
            color: var(--link-color);
        }
        .blog-para p{
            margin: 0;
            line-height: 26px;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            overflow: hidden;
            -webkit-line-clamp: 7; /* Number of lines to display */
        }
        .blog-read-more{
            width:  100%;
            margin: 7% 0;
        }
        .blog-read-more button{
            width: 80px;
            height: 25px;
            border-radius: 5px;
            border: 1px solid lightgray;
            background-color: transparent;
            cursor: pointer;
            font-size: x-small;
            color: var(--text-color);
        }
    </style>
</head>

<body>
    <?php include './navbar.php' ?>
    <div class="safewalkheading">
        <div class="video-below-text">
            <div class="below-text">
                <h1>Blogs</h1>
                <p>Call Us For further details</p>
            </div>
            <div class="below-button">
                <button>+91 <?= $phone_number ?></button>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="grid-of-blogs">
            <div class="grid-items">
                <div class="blog-card">
                    <a href=""><div class="blog-image"></div></a>
                    <div class="blog-heading">
                        <a href=""><h2>Lorem ipsum dolor sit amet.</h2></a>
                    </div>
                    <div class="blog-para">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut porro molestiae, beatae iste perferendis accusantium nisi doloremque nam quos maiores odit! Magnam quidem nemo suscipit, amet laudantium enim! Dolorem aut nulla labore distinctio voluptates voluptatem quisquam nam, ipsum error corporis illo laboriosam. Harum in sequi soluta laboriosam dolore amet esse.</p>
                    </div>
                    <div class="blog-read-more"><a href=""><button aria-label="see what is inside this blog">READ MORE</button></a></div>
                </div>
            </div>
            <div class="grid-items">
                <div class="blog-card">
                    <a href=""><div class="blog-image"></div></a>
                    <div class="blog-heading">
                        <a href=""><h2>Lorem ipsum dolor sit amet.</h2></a>
                    </div>
                    <div class="blog-para">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut porro molestiae, beatae iste perferendis accusantium nisi doloremque nam quos maiores odit! Magnam quidem nemo suscipit, amet laudantium enim! Dolorem aut nulla labore distinctio voluptates voluptatem quisquam nam, ipsum error corporis illo laboriosam. Harum in sequi soluta laboriosam dolore amet esse.</p>
                    </div>
                    <div class="blog-read-more"><a href=""><button aria-label="see what is inside this blog">READ MORE</button></a></div>
                </div>
            </div>
            <div class="grid-items">
                <div class="blog-card">
                    <a href=""><div class="blog-image"></div></a>
                    <div class="blog-heading">
                        <a href=""><h2>Lorem ipsum dolor sit amet.</h2></a>
                    </div>
                    <div class="blog-para">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut porro molestiae, beatae iste perferendis accusantium nisi doloremque nam quos maiores odit! Magnam quidem nemo suscipit, amet laudantium enim! Dolorem aut nulla labore distinctio voluptates voluptatem quisquam nam, ipsum error corporis illo laboriosam. Harum in sequi soluta laboriosam dolore amet esse.</p>
                    </div>
                    <div class="blog-read-more"><a href=""><button aria-label="see what is inside this blog">READ MORE</button></a></div>
                </div>
            </div>
            <div class="grid-items">
                <div class="blog-card">
                    <a href=""><div class="blog-image"></div></a>
                    <div class="blog-heading">
                        <a href=""><h2>Lorem ipsum dolor sit amet.</h2></a>
                    </div>
                    <div class="blog-para">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut porro molestiae, beatae iste perferendis accusantium nisi doloremque nam quos maiores odit! Magnam quidem nemo suscipit, amet laudantium enim! Dolorem aut nulla labore distinctio voluptates voluptatem quisquam nam, ipsum error corporis illo laboriosam. Harum in sequi soluta laboriosam dolore amet esse.</p>
                    </div>
                    <div class="blog-read-more"><a href=""><button aria-label="see what is inside this blog">READ MORE</button></a></div>
                </div>
            </div>
            <div class="grid-items">
                <div class="blog-card">
                    <a href=""><div class="blog-image"></div></a>
                    <div class="blog-heading">
                        <a href=""><h2>Lorem ipsum dolor sit amet.</h2></a>
                    </div>
                    <div class="blog-para">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut porro molestiae, beatae iste perferendis accusantium nisi doloremque nam quos maiores odit! Magnam quidem nemo suscipit, amet laudantium enim! Dolorem aut nulla labore distinctio voluptates voluptatem quisquam nam, ipsum error corporis illo laboriosam. Harum in sequi soluta laboriosam dolore amet esse.</p>
                    </div>
                    <div class="blog-read-more"><a href=""><button aria-label="see what is inside this blog">READ MORE</button></a></div>
                </div>
            </div>
        </div>
    </div>


    <?php include './footer.php' ?>
</body>
</html>    