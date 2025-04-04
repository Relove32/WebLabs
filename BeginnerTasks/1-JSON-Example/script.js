let repositories = [];

async function Search() {
    let userName = userNameInput.value;

    const response = await fetch("http://api.github.com/users/" + userName + "/repos", { method: "GET" })
    repositories = await response.json();
    console.log(repositories);
    for (let i = 0; i < repositories.length; i++) {
        createReposirotyBlock(repositories[i]);
    }
}

function createReposirotyBlock(repo) {
    let block = document.createElement('div');

    let title = document.createElement('h3');
    title.classList.add("repo-title");
    title.innerHTML = repo.name;

    // КОНТЕНТ

    block.append(title);
    repositoriesContainer.append(block);
}

let userNameInput = document.getElementById("userName");
let startSearcingButton = document.getElementById("startSearcing");
let repositoriesContainer = document.getElementById("repositoriesContainer");

startSearcingButton.addEventListener("mousedown", Search)