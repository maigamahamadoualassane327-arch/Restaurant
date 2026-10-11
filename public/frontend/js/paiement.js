/**
     * Exemple basique pour pré-remplir les totaux (à remplacer par vos données réelles).
     */
    const orderSummary = {
      subtotal: 49.90,
      shipping: 4.90,
      taxes: 2.50,
      total: 57.30
    };
    document.querySelector("[data-field='subtotal']").textContent = `€${orderSummary.subtotal.toFixed(2)}`;
    document.querySelector("[data-field='shipping']").textContent = `€${orderSummary.shipping.toFixed(2)}`;
    document.querySelector("[data-field='taxes']").textContent = `€${orderSummary.taxes.toFixed(2)}`;
    document.querySelector("[data-field='grand-total']").textContent = `€${orderSummary.total.toFixed(2)}`;