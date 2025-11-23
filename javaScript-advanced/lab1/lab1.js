function Hamburger(size, stuffing) {
    if (!size) {
        throw new HamburgerException('no size given');
    }
    if (!stuffing) {
        throw new HamburgerException('no stuffing given');
    }

    var sizes = [Hamburger.SIZE_SMALL, Hamburger.SIZE_LARGE];
    var stuffings = [Hamburger.STUFFING_CHEESE, Hamburger.STUFFING_SALAD, Hamburger.STUFFING_POTATO];

    if (sizes.indexOf(size) === -1) {
        throw new HamburgerException('invalid size ' + size);
    }

    if (stuffings.indexOf(stuffing) === -1) {
        throw new HamburgerException('invalid stuffing ' + stuffing);
    }

    this._size = size;
    this._stuffing = stuffing;
    this._toppings = [];
}

Hamburger.SIZE_SMALL = { price: 50, calories: 20 };
Hamburger.SIZE_LARGE = { price: 100, calories: 40 };

Hamburger.STUFFING_CHEESE = { price: 10, calories: 20 };
Hamburger.STUFFING_SALAD = { price: 20, calories: 5 };
Hamburger.STUFFING_POTATO = { price: 15, calories: 10 };

Hamburger.TOPPING_MAYO = { price: 20, calories: 5 };
Hamburger.TOPPING_SPICE = { price: 15, calories: 0 };

Hamburger.prototype.addTopping = function (topping) {
    if (!topping || !topping.price) {
        throw new HamburgerException('invalid topping ' + topping);
    }

    if (this._toppings.indexOf(topping) !== -1) {
        throw new HamburgerException('duplicate topping');
    }

    this._toppings.push(topping);
};

Hamburger.prototype.removeTopping = function (topping) {
    var index = this._toppings.indexOf(topping);

    if (index === -1) {
        throw new HamburgerException('topping not found');
    }

    this._toppings.splice(index, 1);
};

Hamburger.prototype.getToppings = function () {
    return this._toppings.slice();
};

Hamburger.prototype.getSize = function () {
    return this._size;
};

Hamburger.prototype.getStuffing = function () {
    return this._stuffing;
};

Hamburger.prototype.calculatePrice = function () {
    var sum = 0;

    sum += this._size.price;
    sum += this._stuffing.price;

    for (var i = 0; i < this._toppings.length; i++) {
        sum += this._toppings[i].price;
    }

    return sum;
};

Hamburger.prototype.calculateCalories = function () {
    var sum = 0;

    sum += this._size.calories;
    sum += this._stuffing.calories;

    for (var i = 0; i < this._toppings.length; i++) {
        sum += this._toppings[i].calories;
    }

    return sum;
};

function HamburgerException(message) {
    this.message = message;
    this.name = 'HamburgerException';
}
