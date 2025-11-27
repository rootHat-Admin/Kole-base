/**
 * @typedef {Object} Runner
 * @property {String} name
 * @property {String[]} paces
 * @typedef {Object} Result
 * @property {String} name
 * @property {String} averagePace
 * @property {String} fastestPace
 */

/**
 * @param {Runner[]} runners
 * @return {Result[]}
 */

function fastestRunners(runners) {
	// темп "M:SS" форматындағы мәнді секундқа ауыстыру
	const toSec = pace => {
		const [m, s] = pace.split(":").map(Number);
		return m * 60 + s;
	};

	// секундтарды қайтадан "M:SS" форматына ауыстыру
	const toPace = sec => {
		const m = Math.floor(sec / 60);
		const s = Math.round(sec % 60);
		return `${m}:${String(s).padStart(2,"0")}`;
	};

	// әрбір жүгірушінің жалпы уақытын (totalTime) қосу
	const withTotal = runners.map(r => {
		const totalTime = r.paces.reduce((sum, p) => sum + toSec(p), 0);
		return {...r, totalTime};
	});

	// барлық жүгірушілердің орташа уақытын есептеу
	const avgTotal = withTotal.reduce((sum, r) => sum + r.totalTime, 0) / withTotal.length;

	// орташа уақыттан тезірек жүгіргендерді сүзгіден өткізіп, уақыт бойынша сұрыптау
	const faster = withTotal
	.filter(r => r.totalTime < avgTotal)
	.sort((a, b) => a.totalTime - b.totalTime);
		
	// нәтижелік массивті құру
	return faster.map(r => {
		const avgPace = toPace(r.totalTime / r.paces.length); // орташа темп
		const fastestPace = r.paces.reduce((f, c) => toSec(c) < toSec(f) ? c : f); // ең жылдам темп
		return {name: r.name, averagePace: avgPace, fastestPace};
	});
}

// функциядан кейін: JSON файлын жүктеу және нәтижені HTML-ге шығару
fetch("js/runners.json").then(r => r.json()).then(data => {
	document.getElementById("fastest").innerHTML = `<strong>Ең жылдам жүгірушілер:</strong>
    <ul>
    ${fastestRunners(data).map(r => `<li>${r.name} - орташа қарқын: ${r.averagePace}, ең жылдам: ${r.fastestPace}</li>`).join("")}
    </ul>`;

});
