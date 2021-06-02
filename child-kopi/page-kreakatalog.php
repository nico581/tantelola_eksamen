<?php
get_header();
?>

<style>
    /* Toppen af dom */
    #top {
        text-align: center;
        height: 120px;
        padding-top: 50px;
        padding-bottom: 50px;
    }

    .regnbue {
        position: relative;
        top: -3.1rem;

    }

    /* #top .top_tekst {
        display: flex;
        flex-direction: row;
        margin-left: 8rem;
        gap: 2rem;
    }
*/
    #top .overskrift {
        font-size: 26px;
        font-weight: 700;
    }

    #top .paragraph {
        font-weight: 400;
    }

    /* Sitebar med titel og buttons */
    #indhold_sidebar {
        display: grid;
        grid-template-columns: 1fr 3fr;
    }

    #indhold_sidebar .sitebar .tekst .underoverskrift {
        font-size: 16px;
        color: #a46497;
    }

    .sitebar {
        display: block;
        padding-left: 8.5rem;
    }

    #filtrering .filter {
        display: block;
        border: none;
        background-color: transparent;
        font-size: 16px;
        margin-top: 1rem;
    }


    /* Oversigten over projekter */

    #primary {
        margin-top: 10rem;
    }

    #kreaprojekt-oversigt {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        margin-right: 5rem;
        margin-left: 2rem;
        grid-gap: 2rem;
    }

    #kreaprojekt-oversigt h3 {
        font-size: 1.5rem;
    }

    .kreaprojekt {
        background: white;
    }

</style>
<section id="top">
    <div class="regnbue_divider">
        <img src="/kea/tantelola/wordpress/wp-content/themes/child/img/regnbue_streg.png" alt="regnbue_divider" class="regnbue">
    </div>
    <div class="top_tekst">
        <h1 class="overskrift">Kreakatalog</h1>
        <div class="paragraph">
            <p> Mangler I en hyggelig familieaktivitet, eller får du børnebørnene på besøg i weekenden?</p>
            <p>Så kan du her se vores udvalg af kreaprojekter, som du kan kreerer i caféen eller tage med hjem to-go.</p>
        </div>
    </div>
</section>

<section id="liste">
    <template>
        <article class="kreaprojekt">
            <img src="" alt="" class="billede">
            <div class="info">
                <h3 class="navn">
                </h3>
                <p class="pris"></p>
            </div>
        </article>
    </template>
</section>

<section id="primary" class="content-area">

    <main id="main" class="site-main">
        <section id="indhold_sidebar">
            <div class="sitebar">
                <div class="tekst">
                    <h2 class="underoverskrift">Prisklasse</h2>
                </div>
                <nav id="filtrering"></nav>
            </div>
            <section id="kreaprojekt-oversigt">
            </section>
        </section>

    </main>

    <script>
        let kreaprojekt;
        let categories;
        let filterKreaprojekt = "alle";

        const url = "https://nicolinechristiansen.dk/kea/tantelola/wordpress/wp-json/wp/v2/kreaprojekt?per_page=100";
        const catUrl = "https://nicolinechristiansen.dk/kea/tantelola/wordpress/wp-json/wp/v2/categories";


        async function getJson() {
            let data = await fetch(url);
            let catdata = await fetch(catUrl);
            kreaprojekter = await data.json();
            categories = await catdata.json();
            console.log(categories);
            visKreaprojekter();
            opretKnapper();
        }

        function opretKnapper() {
            categories.forEach(cat => {
                document.querySelector("#filtrering").innerHTML += `<button class="filter" data-kreaprojekt="${cat.id}">${cat.name}</button>`
            })

            addEventListenerToButtons();

        }

        function addEventListenerToButtons() {
            document.querySelectorAll("#filtrering button").forEach(elm => {
                elm.addEventListener("click", filtrering);
            })
        }

        function filtrering() {
            filterKreaprojekt = this.dataset.kreaprojekt;
            console.log(filterKreaprojekt);

            visKreaprojekter();

        }

        function visKreaprojekter() {

            console.log(kreaprojekter);
            let temp = document.querySelector("template");
            let container = document.querySelector("#kreaprojekt-oversigt");
            container.innerHTML = "";
            kreaprojekter.forEach(kreaprojekt => {
                if (filterKreaprojekt == "alle" || kreaprojekt.categories.includes(parseInt(filterKreaprojekt))) {
                    let klon = temp.cloneNode(true).content;
                    klon.querySelector(".navn").textContent = kreaprojekt.title.rendered;
                    klon.querySelector(".pris").textContent = kreaprojekt.pris;
                    klon.querySelector(".billede").src = kreaprojekt.billede.guid;
                    klon.querySelector("article").addEventListener("click", () => {
                        location.href = kreaprojekt.link;
                    })
                    container.appendChild(klon);
                }

            })
        }

        getJson();

    </script>
</section>



<?php
get_footer();
?>
