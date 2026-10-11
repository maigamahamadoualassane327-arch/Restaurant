

    /**
     * Exemple d'utilisation du localStorage pour pré-remplir le panier.
     * Remplacez par vos appels à la base de données côté serveur.
     */
    const cartData = JSON.parse(localStorage.getItem("freshshop-cart") || "[]");
    const hasItems = cartData.length > 0;

    document.querySelectorAll("[data-if='cart-empty']").forEach(el => {
      el.style.display = hasItems ? "none" : "block";
    });

    document.querySelectorAll("[data-if='cart-has-items']").forEach(el => {
      el.style.display = hasItems ? "" : "none";
    });

    // Cette section est purement illustrative.
