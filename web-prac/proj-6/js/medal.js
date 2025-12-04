const name = location.pathname.split("/").pop().split("-")[0];

fetch("http://localhost:3000/countries")
  .then(r => r.json())
  .then(countries => {
    const c = countries.find(x => x.name === name);
    if (!c) return console.error("Страна не найдена");

  
    document.getElementById("country-name").textContent = c.name;
    document.getElementById("country-flag").src = "../../" + c.flag;

    document.getElementById("medal-name").textContent = "GOLD MEDALS";
    document.getElementById("medals").textContent = c.medals.gold;


    const table = document.querySelector(".table-info table");
    table.querySelectorAll("tr:not(:first-child)").forEach(tr => tr.remove()); // очищаем старые строки

    c.disciplines.forEach(d => {
      const tr = document.createElement("tr");
      tr.innerHTML = `<td>${d.name}</td><td>${d.gold}</td>`;
      table.appendChild(tr);
    });
  })
  .catch(e => console.error("Ошибка:", e));
