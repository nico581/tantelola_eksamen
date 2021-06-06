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
    #kreaprojekt {
        display: flex;
        flex-direction: row;
        justify-content: center;
        margin: 5rem auto;
        gap: 2rem;
    }

    .navn {
        font-size: 26px;
        font-weight: 700;
    }

    .tekst {
        display: flex;
        flex-direction: column;
        align-self: center;
    }

    .billede {
        width: 400px;
        height: auto;
    }

    .knap {
        align-self: center;
        margin-top: 2rem;
    }

    .knap button {
        height: 2rem;
        width: 15rem;
        align-self: center;
        background-color: #E0E8EE;
        border: none;
        border-radius: 20px;
    }

    .knap button:hover {
        cursor: pointer;
        background-color: #F2E7FA;
    }

</style>

<section id="primary" class="content-area">
    <main id="main" class="site-main">
        <article id="kreaprojekt">
            <div class="kreaprojekt-billede">
                <img class="billede" src="" alt="">
            </div>

            <div class="tekst">
                <h1 class="navn">
                </h1>
                <h2 class="pris"></h2>
                <p class="beskrivelse"></p>
                <div class="knap">
                    <button>Tilbage til kreakatalog</button>
                </div>

            </div>

        </article>

    </main>

    <script>
        let kreaprojekt;
        let aktuelKreaprojekt = <?php echo get_the_ID() ?>;

        const kreakatalog = "http://nicolinechristiansen.dk/kea/tantelola/wordpress/kreakatalog/";

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
            document.querySelector(".beskrivelse").innerHTML = kreaprojekt.beskrivelse;
            document.querySelector(".pris").textContent = kreaprojekt.pris;
            document.querySelector(".knap button").addEventListener("click", () => {
                location.href = kreakatalog;
            })
        }





        getJson();

    </script>

</section>

<?php
get_footer();
