const deleteForms = document.querySelectorAll(".delete-form");
console.log(deleteForms);

deleteForms.forEach((element) => {
    const title = element.getAttribute("data-name");

    element.addEventListener("submit", (e) => {
        e.preventDefault();
        const accept = confirm(
            `Il fumetto "${title}" verrà eliminato. Vuoi procedere?`
        );

        if (accept) {
            e.target.submit();
        }
    });
});
