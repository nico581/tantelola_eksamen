<?php
get_header();
?>

<style>
    #top {
        text-align: center;
        height: 120px;
        padding-top: 50px;
        padding-bottom: 50px;
    }

    #kreaprojekt-oversigt {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        margin-left: 5rem;
        margin-right: 5rem;
        grid-gap: 2rem;
    }

    #kreaprojekt-oversigt h3 {
        font-size: 1.5rem;
    }

    .kreaprojekt {
        background: grey;
    }

    #filtrering {
        text-align: center;
    }

    #filtrering .filter {
        padding: 1rem;
        width: 20vw;
        margin: 2rem;
        background-color: #E0E8EE;
        border: none;
    }

    #filtrering .filter:hover {
        background-color: #F2E7FA;
    }

    #filtrering .filter:active {
        background-color: #F2E7FA;
    }

</style>
<section id="top">
    <div class="regnbue_divider">
        <img src="" alt="">
    </div>
    <div class="tekst">
        <h2>Kreakatalog</h2>
    </div>
</section>

<section id="liste">
    <template>
        <article class="kreaprojekt">
            <img src="" alt="" class="billede">
            <h3 class="navn">
            </h3>
        </article>
    </template>
</section>

<section id="primary" class="content-area">

    <main id="main" class="site-main">
        <nav id="filtrering"></nav>
        <section id="kreaprojekt-oversigt"> </section>
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
                    klon.querySelector(".billede").src = kreaprojekt.billede.guid;
                    klon.querySelector("article").addEventListener("click", () => {
                        Runner.displayPopup = kreaprojekt.link;
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
