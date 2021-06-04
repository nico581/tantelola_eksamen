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

    #top .regnbue {
        position: absolute;
        margin-top: -3.1rem;
        left: 0rem;

    }

    #top .top_tekst {
        margin: 0 auto;
        padding: 1rem;
    }

    #top .overskrift {
        font-size: 26px;
        font-weight: 700;
    }

    #top .paragraph {
        font-weight: 400;
    }

    /* Sitebar med titel og buttons */
    #indhold_sidebar {
        display: flex;
        flex-direction: column;
        margin-top: 15rem;
    }

    #indhold_sidebar .sitebar .tekst .underoverskrift {
        font-size: 18px;
        /*color: #a46497;*/
    }

    .sitebar {
        display: block;
        align-self: center;
        padding: 1rem;

    }

    #filtrering .filter {
        /*display: block;*/
        display: flex;
        flex-direction: column;
        align-items: center;
        border: none;
        background-color: transparent;
        font-size: 16px;
        font-weight: 500;
        margin-top: 1rem;
    }

    #filtrering .filter:hover {
        cursor: pointer;
        color: #a46497;
        font-weight: 600;

    }

    #filtrering .filter:focus {
        color: #a46497;
        font-weight: 600;

    }


    /* Oversigten over projekter */

    #kreaprojekt-oversigt {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        margin: 0 1rem;
        grid-gap: 2rem;
        align-self: center;
    }

    #kreaprojekt-oversigt h3 {
        font-size: 16px;
        text-align: center;
    }

    .kreaprojekt {
        background: rgb(255, 255, 255, 60);
        border-bottom-right-radius: 20px;
        border-bottom-left-radius: 20px;

    }

    .kreaprojekt .info {
        display: flex;
        flex-direction: column;
        padding-top: 1rem;
        padding-bottom: 1rem;
    }

    .info_knap {
        height: 2rem;
        width: 5rem;
        align-self: center;
        background-color: #E0E8EE;
        border: none;
        border-radius: 20px;
        box-shadow: rgba(0, 0, 0, 0.3) 0px 12px 18px -6px;

    }

    .info_knap:hover {
        cursor: pointer;
        background-color: #F2E7FA;
    }

    /* Single view */


    #singleView {
        width: 100vw;
        height: 100vh;
        position: fixed;
        /*text-align: center;*/
    }


    #single-content {
        display: flex;
        flex-direction: row;
        width: 80vw;
        background-color: rgb(255, 255, 255, 95%);
        margin: auto;
        border-radius: 20px;
        box-shadow: rgba(0 0 0 / 30%) -5px 20px 22px 0px;
    }

    #singleView.vis {
        display: block;
    }

    #singleView.forsvind {
        displaY: none;
    }

    .kreaprojekt-billede {
        padding: 2rem;

    }

    .single-billede {
        align-self: center;
        max-width: 500px;
    }

    .kreaprojekt-infotekst {
        align-self: center;
    }

    .single-knap {
        height: 3rem;
        width: 12rem;
        margin-top: 1rem;
        margin-right: 1rem;
        background-color: #E0E8EE;
        border: none;
        border-radius: 20px;
        box-shadow: rgba(0, 0, 0, 0.3) 0px 12px 18px -6px;
    }

    .single-knap:hover {
        cursor: pointer;
        background-color: #F2E7FA;
    }

    @media (min-width: 600px) {
        #indhold_sidebar {
            flex-direction: row;
            margin-top: auto;
        }

        #primary {
            margin-top: 10rem;
            margin-bottom: 5rem;
        }

        #kreaprojekt-oversigt {
            margin: 0 auto;
        }

        .sitebar {
            height: 16.5vw;
            align-self: flex-start;
            border-right: 0.5px solid lightgrey;
            padding-left: 8.5rem;
            padding-right: 7rem;
        }



    }

</style>

<section id="singleView">
    <div id="single-content">
        <div class="kreaprojekt-billede">
            <img class="single-billede" src="" alt="">
        </div>
        <div class="kreaprojekt-infotekst">
            <h1 class="single-navn"></h1>
            <h2 class="single-pris"></h2>
            <p class="single-beskrivelse"></p>

        </div>
        <button class="single-knap">X</button>
    </div>
</section>

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
                <button class="info_knap">Info</button>
                <!--<p class="pris"></p>-->
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

</section>

<section id="bund">
    <div class="regnbue_divider">
        <img src="/kea/tantelola/wordpress/wp-content/themes/child/img/regnbue_streg.png" alt="regnbue_divider" class="regnbue">
    </div>
    <script>
        //Variabler//
        let kreaprojekt;
        let categories;
        let filterKreaprojekt = "alle";
        let mySingle = document.querySelector("#singleView");

        mySingle.classList.add("forsvind");

        const url = "https://nicolinechristiansen.dk/kea/tantelola/wordpress/wp-json/wp/v2/kreaprojekt?per_page=100";
        const catUrl = "https://nicolinechristiansen.dk/kea/tantelola/wordpress/wp-json/wp/v2/categories";


        //Henter content fra Pods & opretter knapper //
        async function getJson() {
            let data = await fetch(url);
            let catdata = await fetch(catUrl);
            kreaprojekter = await data.json();
            categories = await catdata.json();
            console.log(categories);
            visKreaprojekter();
            console.log("Nu viser jeg kreaprojekter");
            opretKnapper();
            console.log("Nu opretter jeg knapper");
        }

        // Funktion der opretter kategori knapper i html //
        function opretKnapper() {
            categories.forEach(cat => {
                document.querySelector("#filtrering").innerHTML += `<button class="filter" data-kreaprojekt="${cat.id}">${cat.name}</button>`
            })

            addEventListenerToButtons();

        }

        //Tilføjer eventlistener til knapperne, som gør at kreaprojekterne bliver filtreret efter kategori //
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

        //Funktion som placere information fra pods i de respektive tags som er tilføjet til oversigten //

        function visKreaprojekter() {

            console.log(kreaprojekter);
            let temp = document.querySelector("template");
            let container = document.querySelector("#kreaprojekt-oversigt");
            container.innerHTML = "";
            kreaprojekter.forEach(kreaprojekt => {
                if (filterKreaprojekt == "alle" || kreaprojekt.categories.includes(parseInt(filterKreaprojekt))) {
                    let klon = temp.cloneNode(true).content;
                    klon.querySelector(".navn").textContent = kreaprojekt.title.rendered;
                    //klon.querySelector(".pris").textContent = kreaprojekt.pris;//
                    klon.querySelector(".billede").src = kreaprojekt.billede.guid;
                    //klon.querySelector(".info_knap").addEventListener("click", () => { location.href = kreaprojekt.link;})
                    klon.querySelector(".info_knap").addEventListener("click", () => {
                        visSingle(kreaprojekt);
                    })
                    container.appendChild(klon);
                }

            })
        }

        //Funktion der skal vise specifik info omkring et kreaprojekt
        function visSingle(valgte) {
            mySingle.classList.remove("forsvind");
            mySingle.classList.add("vis");
            console.log("Jeg har tilføjet display block");
            mySingle.querySelector(".single-knap").addEventListener("click", lukSingle);
            console.log("Jeg lukker single view");
            //mySingle.querySelector("#single-content").
            mySingle.querySelector(".single-navn").textContent = valgte.title.rendered;
            mySingle.querySelector(".single-billede").src = valgte.billede.guid;
            mySingle.querySelector(".single-beskrivelse").innerHTML = valgte.beskrivelse;
            mySingle.querySelector(".single-pris").textContent = valgte.pris;
            console.log("Jeg viser single view");

        }

        //Funktion som lukker den specifikke info om kreaprojekt
        function lukSingle() {
            mySingle.classList.remove("vis");
            mySingle.classList.add("forsvind");

        }

        getJson();

    </script>
</section>



<?php
get_footer();
?>
