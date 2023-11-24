document.addEventListener("DOMContentLoaded", function () {

    const container = document.getElementById('isotope-list');
    const items = container.querySelectorAll('.item');

    const optionLinks = document.querySelectorAll('#filters a');
    const paginationContainer = document.getElementById("pagination-container");
    let pageValue = 0;

    let selector = 'item';
    function handleFilterClick() {
        optionLinks.forEach(function (link) {
            link.classList.remove('selected');
        });

        this.classList.add('selected');

        selector = this.getAttribute('data-filter');
        selectedItemsArrays = []; //emptying the array
        pageValue = 0;
        countItems(selector); // run the function to count the num of pages after selector is defined
        console.log(selector);
        //filterItems(selector);
        console.log(selectedItemsArrays);

        return false;
    }



    //making pagination work
    console.log(items);
    let itemCount = 0;
    let selectedItems = []; //initialize array
    let selectedItemsArrays = []; // array to store selecteItems array

    function countItems(selector) { //function to count the num of pages
        items.forEach(item => {
            if (item.classList.contains(selector)) {

                itemCount++;
                selectedItems.push(item); // Add the item to the array
                if (itemCount % 4 === 0) {

                    selectedItemsArrays.push(selectedItems); // Push the 4 items to the main array
                    selectedItems = []; // Reset the array

                }
            }

        });
        if (selectedItems.length > 0) {
            selectedItemsArrays.push(selectedItems); // push even thought the items might not be 4 but less
            selectedItems = [];
        }

        //to display page numbers

        paginationContainer.innerHTML = '';
        for (let index = 0; index < selectedItemsArrays.length; index++) {
            const newAtag = document.createElement("a");

            // Add some content to the new div
            const pageNumber = 1 + index;
            //newAtag.setAttribute("href", '#');
            newAtag.setAttribute("value", pageNumber);
            newAtag.classList.add("select");
            const newContent = document.createTextNode(`Page ${pageNumber}`);
            newAtag.appendChild(newContent);
            // Add the newly created element and its content to the DOM
            paginationContainer.appendChild(newAtag);
        }

        //pagination click
        console.log(selectedItemsArrays);

        //display items at first load
        function displayItems(pageValue) {
            console.log(pageValue);
            console.log(selectedItemsArrays);
            console.log("selectedItemsArrays");
            firstArray = selectedItemsArrays[pageValue];
            console.log(firstArray);
            console.log("firstArray");
            items.forEach(function (item) {
                item.style.display = 'none';
            });

            firstArray.forEach(function (eachSelectedItem) {
                eachSelectedItem.style.display = 'block';
                console.log(eachSelectedItem);
            })

            // 
        }

        displayItems(pageValue);
        //pagination links a tags
        const paginationLink = document.querySelectorAll('#pagination-container a');
        function handlePaginationClick() {

            paginationLink.forEach(function (link) {
                link.classList.remove('select');
            });
            this.classList.add('select');
            paginationLinkSelector = this.getAttribute('value');
            console.log(paginationLinkSelector);
            pageValue = parseInt(paginationLinkSelector);
            pageValue--;
            console.log(selectedItemsArrays);
            console.log("selectedItemsArrays from handleclick function");
            displayItems(pageValue);
        }





        //display items
        // const itemsPerPage = 4; // Number of items per page
        // let currentPage = 1; // Current page
        // // Function to display items for a given page
        // function displayItemsForPage(page) {
        //     const pageIndex = page - 1;
        //     if (pageIndex >= 0 && pageIndex < selectedItemsArrays.length) {
        //         const itemsForPage = selectedItemsArrays[pageIndex];
        //         console.log(`Items for page ${page}:`, itemsForPage);
        //     } else {
        //         console.log("Page not found.");
        //     }
        // }

        // // Example: Display items for the first page (index 0)
        // displayItemsForPage(currentPage);

        //console.log(itemCount);
        //console.log(selectedItemsArrays);


        paginationLink.forEach(function (link) {
            link.addEventListener('click', handlePaginationClick);
        });

        itemCount = 0;
    }
    countItems(selector); // run the function to count the num of pages after selector is defined







    // function filterItems(selector) {
    //     items.forEach(function (item) {
    //         if (selector === 'item' || item.classList.contains(selector)) {
    //             item.style.display = 'block';
    //         } else {
    //             item.style.display = 'none';
    //         }
    //     });
    // }



    optionLinks.forEach(function (link) {
        link.addEventListener('click', handleFilterClick);
    });

    console.log('js running');
});

