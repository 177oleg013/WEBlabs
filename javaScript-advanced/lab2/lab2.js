class Hamburger {
    constructor(size, stuffing) {
        if (!size) throw new HamburgerException('no size given');
        if (!stuffing) throw new HamburgerException('no stuffing given');

        const sizes = [Hamburger.SIZE_SMALL, Hamburger.SIZE_LARGE];
        const stuffings = [Hamburger.STUFFING_CHEESE, Hamburger.STUFFING_SALAD, Hamburger.STUFFING_POTATO];

        if (!sizes.includes(size)) throw new HamburgerException('invalid size ' + size);
        if (!stuffings.includes(stuffing)) throw new HamburgerException('invalid stuffing ' + stuffing);

        this._size = size;
        this._stuffing = stuffing;
        this._toppings = [];
    }

    addTopping(topping) {
        if (!topping || !topping.price) throw new HamburgerException('invalid topping ' + topping);
        if (this._toppings.includes(topping)) throw new HamburgerException('duplicate topping');

        this._toppings.push(topping);
    }

    removeTopping(topping) {
        const index = this._toppings.indexOf(topping);
        if (index === -1) throw new HamburgerException('topping not found');
        this._toppings.splice(index, 1);
    }

    get toppings() {
        return this._toppings.slice();
    }

    get size() {
        return this._size;
    }

    get stuffing() {
        return this._stuffing;
    }

    get price() {
        return this.calculatePrice();
    }

    get calories() {
        return this.calculateCalories();
    }

    calculatePrice() {
        let sum = this._size.price + this._stuffing.price;
        for (const top of this._toppings) {
            sum += top.price;
        }
        return sum;
    }

    calculateCalories() {
        let sum = this._size.calories + this._stuffing.calories;
        for (const top of this._toppings) {
            sum += top.calories;
        }
        return sum;
    }
}

Hamburger.SIZE_SMALL = { price: 50, calories: 20 };
Hamburger.SIZE_LARGE = { price: 100, calories: 40 };

Hamburger.STUFFING_CHEESE = { price: 10, calories: 20 };
Hamburger.STUFFING_SALAD = { price: 20, calories: 5 };
Hamburger.STUFFING_POTATO = { price: 15, calories: 10 };

Hamburger.TOPPING_MAYO = { price: 20, calories: 5 };
Hamburger.TOPPING_SPICE = { price: 15, calories: 0 };

class HamburgerException extends Error {
    constructor(message) {
        super(message);
        this.name = 'HamburgerException';
    }
}
