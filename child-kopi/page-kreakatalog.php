<?php
get_header();
?>

<style>
    #primary {
        height: auto;
        margin-bottom: 5rem;
    }

    /* Toppen af dom */
    #top {
        display: flex;
        width: 1225px;
        justify-content: flex-start;
        margin: 0 auto;
    }


    .top_tekst {
        margin-bottom: 2rem;
    }

    .overskrift {
        text-align: center;
        margin-top: 2rem;
        font-size: 26px;
        font-weight: 700;
        color: #FFB583;
    }

    .paragraph {
        font-weight: 400;
    }

    /* Sitebar med titel og buttons */
    #indhold_sidebar {
        display: flex;
        flex-direction: column;
    }

    #indhold_sidebar .sitebar .tekst .underoverskrift {
        font-size: 18px;
        color: #FFB583;
        font-weight: 700;
        text-align: center;
    }

    .sitebar {
        display: block;
        align-self: center;
        padding: 1rem;

    }

    #filtrering {
        display: flex;
        flex-direction: row;
        justify-content: space-evenly;
        margin-bottom: 5rem;
        margin-top: 1rem;
    }

    #filtrering .filter {
        border: none;
        border-radius: 30px;
        color: white;
        background-color: #a46497;
        padding: 1rem;
        font-size: 16px;
        margin-top: 1rem;
    }

    #filtrering .filter:hover {
        cursor: pointer;
        font-weight: 600;
        transform: scale(1.08);
        color: #FFB583;
        background-color: #E0E8EE;

    }

    #filtrering .filter:focus {
        font-weight: 600;
        color: #FFB583;
        background-color: #E0E8EE;

    }


    /* Oversigten over projekter */

    #kreaprojekt-oversigt {
        display: flex;
        flex-direction: column;
        flex-wrap: wrap;
        justify-content: flex-start;
        margin: 0 1rem;
        grid-gap: 2rem;
    }

    #kreaprojekt-oversigt h3 {
        font-size: 18px;
        text-align: left;
    }

    .kreaprojekt {
        flex-basis: 30%;
        align-self: center;
    }

    .kreaprojekt img {
        width: 250px;
        height: 250px;
        border-radius: 20px;

    }

    .kreaprojekt .info {
        display: flex;
        flex-direction: column;
        padding-top: 1rem;
        padding-bottom: 1rem;
    }


    /* Overlay */

    .billede_og_overlay {
        position: relative;
    }

    .overlay {
        position: absolute;
        width: 100%;
        height: 97.9%;
        background-color: rgb(255, 255, 255, 80%);
        opacity: 0;
        transition: .2s ease;
        display: flex;
        justify-content: space-around;
        border: 0.5px solid lightgrey;
        border-radius: 20px;
    }

    .overlay:hover {
        opacity: 1;
    }

    .overlay .overlay_knap {
        align-self: center;
        background-color: #a46497;
        border: none;
        border-radius: 30px;
        width: 50px;
        height: 50px;
        font-size: 2rem;
        color: white;
    }


    .overlay .overlay_knap:hover {
        cursor: pointer;
        transform: scale(1.08);
    }


    /* Single view */


    #singleView {
        width: 100vw;
        /*height: 100vh;*/
        position: fixed;
        z-index: 2;
    }

    #single-content {
        display: flex;
        flex-direction: column-reverse;
        align-items: center;
        width: 70vw;
        background-color: rgb(255, 255, 255, 95%);
        margin: auto;
        border-radius: 20px;
        box-shadow: rgba(0 0 0 / 30%) -5px 20px 22px 0px;
    }

    .single-billede {
        display: none;
    }

    .single-navn {
        font-size: 26px;
        text-align: center;
        font-weight: 700;
        color: #FFB583;
    }

    .single-pris {
        font-size: 18px;
        text-align: center;
        margin-bottom: 1rem;
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
    }

    .single-beskrivelse {
        font-size: 12px;
    }

    .kreaprojekt-infotekst {
        padding: 2rem;
        align-self: center;
    }

    .single-knap {
        /*align-self: flex-start;*/
        align-self: center;

        height: 40px;
        width: 40px;
        margin-top: 1rem;
        margin-bottom: 1rem;
        /*margin-left: 6.8rem;*/
        background-color: #E0E8EE;
        border: none;
        border-radius: 30px;
        box-shadow: rgba(0, 0, 0, 0.3) 0px 12px 18px -6px;
    }

    .single-knap:hover {
        cursor: pointer;
        background-color: #F2E7FA;
    }

    /* Baggrundsstroke */

    .baggrunds_stroke {
        position: fixed;
        z-index: -100;
        top: 12%;
        left: -8%;
        overflow: hidden;
        width: 3000px;
    }


    @media (min-width: 600px) {

        /* Kreaprojekt oversigt */
        #kreaprojekt-oversigt {
            flex-direction: row;
            justify-content: center;
            /*justify-content: flex-start;*/
            /*flex-wrap: wrap;*/
        }

        .kreaprojekt img {
            width: auto;
            height: auto;
            border-radius: 20px;

        }

        /* Sitebar */

        .sitebar {
            height: auto;
            align-self: center;

        }


        /* Single view */

        #single-content {
            width: 80vw;
        }

    }

    @media (min-width:1300px) {

        /* Sidebar */
        #indhold_sidebar {
            flex-direction: row;
            margin-top: 2rem;
            justify-content: center;
            padding-left: 8rem;
            padding-right: 8rem;
        }

        .sitebar {
            align-self: flex-start;
            height: 36.5vw;
            border-right: 0.5px solid lightgrey;
            padding-right: 7rem;
            margin-left: 3rem;
            margin-right: 2rem;

        }


        .overskrift {
            text-align: left;
        }

        #indhold_sidebar .sitebar .tekst .underoverskrift {

            text-align: left;
        }

        #filtrering {
            flex-direction: column;
        }

        #filtrering .filter {
            background-color: transparent;
            color: black;
            padding: 0;
            text-align: left;
        }

        #filtrering .filter:hover {
            color: #a46497;
            background-color: transparent;


        }

        #filtrering .filter:focus {
            color: #a46497;
            background-color: transparent;


        }

        /* Kreaprojekt oversigt */
        #kreaprojekt-oversigt {
            justify-content: flex-start;
            flex-wrap: wrap;
        }

        /* Single view */

        #singleView {
            top: 25%;
        }

        .single-billede {
            display: block;
        }

        .single-navn {
            text-align: left;

        }

        .single-pris {

            text-align: left;

        }

        .single-beskrivelse {
            font-size: 16px;
        }

        #single-content {
            flex-direction: row;
            align-items: flex-start;
            width: 50vw;
        }

        .kreaprojekt-infotekst {
            padding: 0;
        }

        .single-knap-container {
            width: 8rem;
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
        <div class="single-knap-container">
            <button class="single-knap">X</button>
        </div>
    </div>
</section>

<section id="top">
    <div class="baggrunds_stroke">
        <img src="/kea/tantelola/wordpress/wp-content/themes/child/img/baggrundsstroke.png" alt="baggrundsstroke">
    </div>

</section>

<section id="liste">
    <template>
        <article class="kreaprojekt">
            <div class="billede_og_overlay">
                <div class="overlay">
                    <button class="overlay_knap">+</button>
                </div>
                <img src="" alt="" class="billede">
            </div>
            <div class="info">
                <h3 class="navn">
                </h3>
                <!--<button class="info_knap">Info</button>-->
                <!--<p class="pris"></p>-->
            </div>
        </article>
    </template>
</section>

<section id="primary" class="content-area">

    <main id="main" class="site-main">
        <section id="indhold_sidebar">
            <div class="sitebar">
                <div class="top_tekst">
                    <h1 class="overskrift">Kreakatalog</h1>
                    <div class="paragraph">
                        <p> Mangler I en hyggelig familieaktivitet, eller får du børnebørnene på besøg i weekenden?</p>
                        <p>Så kan du her se vores udvalg af kreaprojekter, som du kan kreerer i caféen eller tage med hjem to-go.</p>
                    </div>
                </div>
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
    <!--<div class="regnbue_divider">
        <img src="/kea/tantelola/wordpress/wp-content/themes/child/img/regnbue_streg.png" alt="regnbue_divider" class="regnbue">
    </div>-->
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
                    klon.querySelector(".kreaprojekt").addEventListener("click", () => {
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
            console.log("Nu kan du se mig");
            mySingle.querySelector(".single-knap").addEventListener("click", lukSingle);
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
            console.log("Jeg lukker single view");

        }

        getJson();

    </script>
</section>



<?php
get_footer();
?>
