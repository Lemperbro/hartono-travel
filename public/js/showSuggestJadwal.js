function showSuggestions(inputs, data, suggest) {
    inputs.addEventListener('keyup', () => {
        const input = inputs.value.toLowerCase();
        const filteredData = Object.values(data).filter(function (entry) {
            if (input.length >= 3) {
                return  (entry.iata && entry.iata.length > 0) && (
                     entry.iata.toLowerCase().includes(input) ||
                    entry.city.toLowerCase().includes(input) ||
                    entry.state.toLowerCase().includes(input) ||
                    entry.name.toLowerCase().includes(input) 
                );
            }
        });

        if (filteredData.length > 0) {
            suggest.classList.remove('hidden');
        }
        // Clear suggestions
        suggest.innerHTML = "";

        // Display suggestions
        filteredData.forEach(function (entry) {
            const suggestionItem = document.createElement("div");
            const h1 = document.createElement('h1');
            const p = document.createElement('p');
            h1.className = "font-semibold";
            p.className = "text-xs";
            suggestionItem.className =
                "suggestion-item p-2 border-b-[1px] border-gray-400 cursor-pointer group hover:bg-orange-600 hover:text-white";

            state = entry.state.length > 0 ? entry.state + ',' : '';

            h1.textContent = entry.name + ' (' + entry.iata + ')';
            p.textContent = entry.city + ", " + state + " Indonesia";

            // Tambahkan elemen h1 dan p ke dalam suggestionItem
            suggestionItem.appendChild(h1);
            suggestionItem.appendChild(p);

            suggestionItem.addEventListener("click", function () {
                inputs.value = entry.city + ', Indonesia' + ' (' + entry.iata + ')';
                suggest.innerHTML = "";
                suggest.classList.add('hidden');
            });

            // Hapus teks default yang mungkin telah diatur sebelumnya
            suggestionItem.textContent = '';

            // Atur teks pada suggestionItem setelah menambahkan elemen-elemen
            suggestionItem.appendChild(h1);
            suggestionItem.appendChild(p);

            suggest.appendChild(suggestionItem);
        });

    });

    document.body.addEventListener('click', function (event) {
        const isClickInsideSuggestions = suggest.contains(event.target);
        const isClickInsideInput = inputs.contains(event.target);

        if (!isClickInsideSuggestions && !isClickInsideInput) {
            suggest.classList.add('hidden');
        }
    });
}