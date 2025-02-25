import './bootstrap';

window.toggleItem = function (itemId) {
    const itemName = document.querySelector(`#itemName-${itemId}`);
    const itemQuantity = document.querySelector(`#itemQuantity-${itemId}`);

    if (itemName && itemQuantity){
        itemName.classList.toggle('line-through');
        itemQuantity.classList.toggle('line-through');
    }
};
