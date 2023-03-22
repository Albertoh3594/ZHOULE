teams().then(response => {
    let teamsDrop = document.querySelector('#equipos_drop');
    let teamsArray = response.teams;
    teamsArray.forEach(team => {
        let link = document.createElement('a');
        link.href = `/team/${team.id}`;
        link.textContent = `${team.name}`;
        teamsDrop.append(link);
    });

});

async function teams() {
    let teams = await fetch('/api/navTeams');
    let teamsJSON = await teams.json();

    return { 'teams': teamsJSON };
}
