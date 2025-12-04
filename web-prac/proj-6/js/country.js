const name = location.pathname.split("/").pop().split("-")[0];

fetch("http://localhost:3000/countries")
    .then(r => r.json())
    .then(c => c.find(x => x.name === name))
    .then(c => {
        if (!c) return console.error("Страна не найдена");

        document.getElementById("country-name").textContent = c.name;
        document.getElementById("country-flag").src = "../" + c.flag;

        const row = document.querySelector("table tr:nth-child(2)");
        row.children[0].textContent = c.medals.gold;
        row.children[1].textContent = c.medals.silver;
        row.children[2].textContent = c.medals.bronze;
        row.children[3].textContent = c.medals.gold + c.medals.silver + c.medals.bronze;
    })
    .catch(e => console.error("Ошибка:", e));
