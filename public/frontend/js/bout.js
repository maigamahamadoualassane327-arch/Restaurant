/**
     * Exemple de logique JS minimale pour récupérer le panier depuis le localStorage.
     * À remplacer par vos appels API/BDD côté serveur.
     */
    document.querySelectorAll("[data-action='add-to-cart']").forEach(button => {
      button.addEventListener("click", () => {
        const productId = button.dataset.productId;
        const currentCart = JSON.parse(localStorage.getItem("freshshop-cart") || "[]");
        currentCart.push({ productId, quantity: 1 });
        localStorage.setItem("freshshop-cart", JSON.stringify(currentCart));
        alert("Produit ajouté au panier (simulation).");
      });
    });