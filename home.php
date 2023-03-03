<?php
/*
Template Name: Главная страница
*/
?>

<?php get_header(); ?>
<main>
    <div class="box">
        <svg class="svg svg-rect">
            <rect class="rect" width="200" height="150" fill="#123456" x="100" y="75" rx="10"></rect>
        </svg>
        <svg class="svg">
            <circle r="100" fill="#cf1221" cx="50%" cy="50%" />
        </svg>
        <svg class="svg">
            <ellipse rx="100" ry="50" fill="gold" cx="50%" cy="50%" />
        </svg>
        <svg class="svg">
            <polygon points="100,100 300,100 200,200" fill="silver" />
        </svg>
        <svg class="svg">
            <line x1="50" y1="50" x2="350" y2="250" stroke="brown" stroke-width="15" />
        </svg>
        <svg class="svg">
            <polyline class="polyline" points="50,50 50,150 150,150 150,50 250,50 350,250" fill="none" stroke="orange" />
        </svg>

        <svg class="svg-text" width="400" height="300" viewBox="0 0 402 302" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path id="path" d="M113.068 1.00228C262.047 -2.07903 576.557 77.4187 274.921 300.916C178.668 250.931 -18.3521 243.314 2.71364 145.824C21.106 60.7063 186.025 33.5272 113.068 1.00228Z" stroke="black" />
            <text class="text">
                <textPath href="#path">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae ullam, voluptatum id vitae et facere voluptatibus at consectetur maiores accusamus dolore dolor, ab velit quasi optio, maxime commodi? Magnam, quod!
                </textPath>
            </text>
        </svg>
    </div>
    <img class="image" src="https://vsegda-pomnim.com/uploads/posts/2022-04/1649131857_25-vsegda-pomnim-com-p-prekrasnaya-priroda-foto-26.jpg" alt="">
</main>
<?php get_footer(); ?>