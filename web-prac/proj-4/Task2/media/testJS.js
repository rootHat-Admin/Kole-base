function fasterRunner(runners) {
    const toSec = pace => {
        const [m, s] = pace.split(":").map(Number);
        return m * 60 + s;
    };

    const toPace = sec => {
        const m = Math.floor(sec / 60);
        const s = Math.round(sec % 60);
        return `${m}:${String(s).padStart(2, "0")}`;
    };

    const withTotal = runners.map(r => {
        const totalTime = r.paces.reduce((sum, p) => sum + toSec(p), 0);
        return {...r, totalTime};
    });

    const avgPace = withTotal.reduce((sum, r) => sum + r.totalTime, 0) / withTotal.length;

    c
};