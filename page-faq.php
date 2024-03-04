<?php include './common.php' ?>
<?php

$faq_arrow = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M11.9999 10.8284L7.0502 15.7782L5.63599 14.364L11.9999 8L18.3639 14.364L16.9497 15.7782L11.9999 10.8284Z"></path></svg>'


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
    <title>FAQ Pages | Safewalk Network 24/7</title>
    <meta name="description" content="We offer top class Agra escorts at cash payment. All type of escorts available like Housewife, college girls, Russian models, etc">
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="FAQ Pages | Safewalk Network 24/7" />
    <meta property="og:description" content="We offer top class Agra escorts at cash payment. All type of escorts available like Housewife, college girls, Russian models, etc" />
    <meta property="og:url" content="<?= get_url() ?>" />
    <meta property="og:site_name" content="Escort" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="FAQ Pages | Safewalk Network 24/7" />
    <meta name="twitter:description" content="We offer top class Agra escorts at cash payment. All type of escorts available like Housewife, college girls, Russian models, etc" />
    <link rel="canonical" href="<?= get_url() ?>" />
    <!-- apart -->
    <link rel="stylesheet" href="<?= get_url() ?>css/navbar.css">
    <style>
        p { line-height: 27px;font-size: small;}
        /* p:first-child{font-size: 1rem;} */
        .faq-question{
            width: 100%;
            height: auto;
            padding:0 1%;
            border-radius: 10px;
            background-color: #F7F7F7;
            color: var(--link-color);
            display: flex;
            align-items: center;
            justify-content: space-between;
            cursor: pointer;
            border-left: 3px solid var(--link-color);
        }
        .faq{margin:2% 0;
            border-radius: 10px;}
        .upgrate_faq_question{
            color: #F7F7F7;
            background-color: var(--link-color);            
        }
        .faq-arrow{width: 30px;transition:.25s;}
        .faq-answer{
            padding: 0 3%;
            max-height: 0;
            overflow: hidden;
            transition: .25s;
        }
    </style>
</head>

<body>
    <?php include './navbar.php' ?>
    <div class="container">
        <h1 style="font-weight: normal;"> Frequently Asked <b>Questions</b></h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita natus pariatur laboriosam reprehenderit ex, sapiente non id. Voluptates odio quia amet, expedita, architecto eveniet, doloremque placeat quam perferendis nam tenetur.</p>
    </div>
    <div class="container">
        <div class="faq">
            <div class="faq-question">
                <p>1. What are the advantages of independence?</p>
                <div class="faq-arrow"><?=$faq_arrow ?></div>
            </div>
            <div class="faq-answer">
                <p>Your hours are more freely chosen. You are free to set your own conditions and speak with clients before they visit you.</p>
            </div>
        </div>
        <div class="faq">
            <div class="faq-question">
                <p>2. How can I be certain that an authentic independent escort will provide me with an enjoyable experience?</p>
                <div class="faq-arrow"><?=$faq_arrow ?></div>
            </div>
            <div class="faq-answer">
                <p>Only the profiles that are displayed on my personal website are those of actual, independent escorts. You can tell how well-qualified they are by the way they communicate and handle their clients. The majority of them are employed professionals.</p>
            </div>
        </div>
        <div class="faq">
            <div class="faq-question">
                <p>3. Will I receive the exact profile I selected?</p>
                <div class="faq-arrow"><?=$faq_arrow ?></div>
            </div>
            <div class="faq-answer">
                <p>Please refrain from equating my services with those of any cheap escorts agency. I exclusively work with upper-class individuals, and I have many happy, loyal clients all across the city.</p>
            </div>
        </div>
    </div>
    <?php include './footer.php' ?>
    <script>
        const faqs = document.querySelectorAll('.faq')
        faqs.forEach(faq=>{
            const questionx = faq.querySelector('.faq-question')
            const ans = faq.querySelector('.faq-answer')
            const arrow = faq.querySelector('.faq-arrow')

            faq.addEventListener('click',()=>{
                if(questionx.classList.contains('upgrate_faq_question')){
                    questionx.classList.remove('upgrate_faq_question')
                    arrow.style.transform = 'rotate(0deg)';
                    ans.style.maxHeight = null
                }else{
                    questionx.classList.add('upgrate_faq_question')
                    arrow.style.transform = 'rotate(180deg)';
                    ans.style.maxHeight = ans.scrollHeight + 'px';
                }
               
            })

        });
    </script>
</body>

</html>