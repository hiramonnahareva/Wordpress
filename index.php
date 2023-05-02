<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>" class="no-js">
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <?php wp_head(); ?>
</head>
 <body <?php body_class(); ?>>
    <header>
        <nav>
            <div class="logo">
                <img src="<?php header_image(); ?>" alt="">
            </div>
            <ul>
                <li><button>Sign up</button></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="top_section">
                <h2>Make self-purification <br> by reading Quran</h2>
                <p>Make self-purification by reading Quran. This website is all about holy quran. You <br> can read, you can listen and you can learn so many things about Islam.</p>
                <div class="buttons">
                <button class="read_btn"><img src="<?php echo get_template_directory_uri(); ?>./book.svg" alt=""> Read Quran</button>
                <button class="audio_btn"><img src="<?php echo get_template_directory_uri(); ?>./mic.svg" alt=""> Quran Audio</button>
                </div>
        </section>

        <section>
           <div class="banner_img_con">
            <img class="banner_img" src="<?php echo get_template_directory_uri(); ?>./Img1.svg" alt="">
            <img class="banner_img" src="<?php echo get_template_directory_uri(); ?>./Img2.svg" alt="">
           </div>
           <div class="counter_con">
            <div class="counter_text">
                <h3>30</h3>
                <p>Quran’s Chapters</p>
            </div>
            <div class="border"></div>
            <div class="counter_text">
                <h3>114</h3>
                <p>Quran’s Surahs</p>
            </div>
            <div class="border"></div>
            <div class="counter_text">
                <h3>6,666</h3>
                <p>Quran’s Verses</p>
            </div>
            <div class="border"></div>
            <div class="counter_text">
                <h3>86</h3>
                <p>Makki Surahs</p>
            </div>
            <div class="border"></div>
            <div class="counter_text">
                <h3>28</h3>
                <p>Madani Surahs</p>
            </div>
           </div>
        </section>
        <section>
            <div class="about_con">
                <img src="<?php echo get_template_directory_uri(); ?>./Images.svg" alt="">
                <div class="about_text_con">
                    <h2>About holy quran</h2>
                    <p>The Quran, also romanized Qur'an or Koran, is the central religious text of Islam, believed by Muslims to be a revelation from Allah. It is organized in 30 chapters, 114 surahs which consist of 6666 verses.</p> 
                     <p> In addition to its religious significance, it is widely regarded as the finest work in Arabic literature.</p>
                     <button class="learn_more_btn">Learn More</button>
                </div>
            </div>
        </section>
        <section>
            <div class="blog_con">
                <div class="top_part">
                    <h2>Latest Islamic blog</h2>
            <p>Read top free Islamic articles & blog posts on the Internet and know about islam.</p>
                </div>
            
                <div class="blogs">
                    <?php while(have_posts()) : the_post(); ?>
                    <article>
           <?php the_post_thumbnail(); ?>
           <div class="blog_text_con">
                    <h3><?php the_title();?></h3>
                    <div class="border_b"></div>
                    <p><?php the_content(); ?></p>
                    <button>Read Now</button>
                </div>
            </article>
          
            <!-- <article>
                <img src="<?php echo get_template_directory_uri(); ?>./blog2.svg" alt="">
                <div class="blog_text_con">
                    <h3>How many times bismillah repeated in Quran?</h3>
                    <div class="border_b"></div>
                    <p>How many times bismillah repeated in Quran? “In the name of God the most merciful...</p>
                    <button>Read Now</button>
                </div>
            </article>
            <article>
                <img src="<?php echo get_template_directory_uri(); ?>./blog3.svg" alt="">
                <div class="blog_text_con">
                    <h3>How many times bismillah repeated in Quran?</h3>
                    <div class="border_b"></div>
                    <p>How many times bismillah repeated in Quran? “In the name of God the most merciful...</p>
                    <button>Read Now</button>
                </div>
            </article>
            <article>
                <img src="<?php echo get_template_directory_uri(); ?>./blog4.svg" alt="">
                <div class="blog_text_con">
                    <h3>How many times bismillah repeated in Quran?</h3>
                    <div class="border_b"></div>
                    <p>How many times bismillah repeated in Quran? “In the name of God the most merciful...</p>
                    <button>Read Now</button>
                </div>
            </article> -->
            <?php endwhile; ?>
           </div>
        </div>
        <div class="read_all">
            <button class="read_btn">Read All</button>
        </div>
        </section>
    </main>

    <?php wp_footer(); ?>
</body>
</html>