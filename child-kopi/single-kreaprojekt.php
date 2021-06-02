<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();
?>


<style>
    #primary {
        display: flex;
        flex-direction: column;
    }

</style>


<section id="primary" class="content-area">
    <main id="main" class="site-main">
        <article id="kreaprojekt">
            <div class="kreaprojekt-billede">
                <img class="billede" src="" alt="">
            </div>
            <div class="tekst">
                <h2 class="navn">
                </h2>
                <p class="beskrivelse"></p>
            </div>
        </article>

    </main>

    <script>
        let kreaprojekt;
        let aktuelKreaprojekt = <?php echo get_the_ID() ?>;

        const dbUrl = "https://nicolinechristiansen.dk/kea/tantelola/wordpress/wp-json/wp/v2/kreaprojekt/" + aktuelKreaprojekt;

        const container = document.querySelector("#kreaprojekt");

        async function getJson() {
            const data = await fetch(dbUrl);
            kreaprojekt = await data.json();

            visKreaprojekt();
        }

        function visKreaprojekt() {
            console.log("hej med dig", kreaprojekt);
            document.querySelector(".navn").textContent = kreaprojekt.title.rendered;
            document.querySelector(".billede").src = kreaprojekt.billede.guid;
            document.querySelector(".beskrivelse").textContent = kreaprojekt.beskrivelse;
        }





        getJson();

    </script>

</section>

<?php
get_footer();
