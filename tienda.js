

// Obtener todos los elementos con clase 'btn-add-cart' y 'icon-close'
const addButtons = document.querySelectorAll('.btn-add-cart');
const removeButtons = document.querySelectorAll('.icon-close');

// Función para agregar un producto al carrito y la base de datos
const addProductToCart = (product) => {
    const title = product.querySelector('h2').textContent;
    const price = product.querySelector('p').textContent;

    const data = new FormData();
    data.append('add_to_cart', 1);
    data.append('title', title);
    data.append('price', price);

    fetch('guardar_carrito.php', {
        method: 'POST',
        body: data,
    })
        .then((response) => response.json())
        .then((data) => {
            console.log(data);
            // Actualiza el carrito en la interfaz si es necesario
            // Puedes usar el código existente para mostrar el carrito en la interfaz
        })
        .catch((error) => {
            console.error('Error al agregar el producto al carrito:', error);
        });
};

// Función para eliminar un producto del carrito y la base de datos
const removeProductFromCart = (productId) => {
    const data = new FormData();
    data.append('remove_from_cart', 1);
    data.append('product_id', productId);

    fetch('guardar_carrito.php', {
        method: 'POST',
        body: data,
    })
        .then((response) => response.json())
        .then((data) => {
            console.log(data);
            // Actualiza el carrito en la interfaz si es necesario
            // Puedes usar el código existente para mostrar el carrito en la interfaz
        })
        .catch((error) => {
            console.error('Error al eliminar el producto del carrito:', error);
        });
};

// Agregar eventos click a los botones de agregar
addButtons.forEach((button) => {
    button.addEventListener('click', (event) => {
        const product = event.target.parentElement;
        addProductToCart(product);
    });
});

// Agregar eventos click a los botones de eliminar
removeButtons.forEach((button) => {
    button.addEventListener('click', (event) => {
        const product = event.target.parentElement;
        const productId = product.getAttribute('data-product-id');
        removeProductFromCart(productId);
    });
});
