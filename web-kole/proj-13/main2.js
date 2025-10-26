var aqi = 176;

if (aqi >= 0 && aqi <= 50) {
    console.log(`${aqi} — жақсы`);
} else if (aqi >= 51 && aqi <= 100) {
    console.log(`${aqi} — зиянды (сезімтал топтар)`);
} else if (aqi >= 101 && aqi <= 150) {
    console.log(`${aqi} — зиянды`);
} else if (aqi >= 151 && aqi <= 200) {
    console.log(`${aqi} — зиянды`);
} else if (aqi >= 201 && aqi <= 300) {
    console.log(`${aqi} — өте зиянды`);
} else {
    console.log(`${aqi} — қауіпті`);
}
