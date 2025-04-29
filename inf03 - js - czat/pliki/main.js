const responses = [
    "Tak, widziałem już ten film, super!",
    "Nie, ale chętnie pójdę na jakiś film.",
    "Mam zamiar zostać w domu.",
    "Nie wiem, może pójdę z kolegami.",
    "Tak, ale nie jestem pewien jeszcze.",
    "To zależy, o jakim filmie mówisz?",
    "Na pewno nie, mam inne plany.",
    "Zastanawiam się nad tym, może pójdę.",
    "Chciałbym, ale muszę sprawdzić godzinę."
];

function sendMessage() {
    const messageInput = document.getElementById('messageInput');
    const messageText = messageInput.value.trim();

    if (messageText !== "") {
        const messageDiv = document.createElement("div");
        messageDiv.classList.add("message", "jolanta");

        const imgElement = document.createElement("img");
        imgElement.src = "Jolka.jpg";
        imgElement.alt = "Jolanta Nowak";

        const pElement = document.createElement("p");
        pElement.innerText = messageText;

        messageDiv.appendChild(imgElement);
        messageDiv.appendChild(pElement);

        const chat = document.getElementById("chat");
        chat.appendChild(messageDiv);

        messageInput.value = "";

        chat.scrollIntoView({ behavior: "smooth", block: "end" });
    }
}

function generateRandomReply() {
    const randomIndex = Math.floor(Math.random() * responses.length);
    const randomResponse = responses[randomIndex];

    const messageDiv = document.createElement("div");
    messageDiv.classList.add("message", "krzysztof");

    const imgElement = document.createElement("img");
    imgElement.src = "Krzysiek.jpg";
    imgElement.alt = "Krzysztof Łukasiński";

    const pElement = document.createElement("p");
    pElement.innerText = randomResponse;

    messageDiv.appendChild(imgElement);
    messageDiv.appendChild(pElement);

    const chat = document.getElementById("chat");
    chat.appendChild(messageDiv);

    chat.scrollIntoView({ behavior: "smooth", block: "end" });
}
