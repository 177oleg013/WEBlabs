class Hamburger {
  constructor(size, stuffing) {
    this.prices = {
      small: 50,
      big: 100,
      cheese: 10,
      salad: 20,
      potato: 15,
      mayo: 20,
      spice: 15
    };

    this.calories = {
      small: 20,
      big: 40,
      cheese: 20,
      salad: 5,
      potato: 10,
      mayo: 5,
      spice: 0
    };

    this.validSizes = ["small", "big"];
    this.validStuffings = ["cheese", "salad", "potato"];
    this.validToppings = ["mayo", "spice"];

    this.addedToppings = [];

    size = String(size).toLowerCase();
    stuffing = String(stuffing).toLowerCase();

    if (!this.validSizes.includes(size)) {
      throw new Error("Wrong size");
    }

    if (!this.validStuffings.includes(stuffing)) {
      throw new Error("Wrong stuffing");
    }

    this.size = size;
    this.stuffing = stuffing;
  }

  addTopping(topping) {
    topping = String(topping).toLowerCase();

    if (!this.validToppings.includes(topping)) {
      throw new Error("Invalid topping type");
    }

    if (this.addedToppings.includes(topping)) {
      throw new Error("Topping already added");
    }

    this.addedToppings.push(topping);
  }

  removeTopping(topping) {
    topping = String(topping).toLowerCase();

    if (!this.addedToppings.includes(topping)) {
      throw new Error("Topping not found");
    }

    this.addedToppings = this.addedToppings.filter(e => e !== topping);
  }

  getSize() {
    return this.size;
  }

  getToppings() {
    return this.addedToppings;
  }

  getStuffing() {
    return this.stuffing;
  }

  calculatePrice() {
    let sum = 0;
    sum += this.prices[this.size];
    sum += this.prices[this.stuffing];

    this.addedToppings.forEach(e => {
      sum += this.prices[e];
    });

    return sum;
  }

  calculateCalories() {
    let sum = 0;
    sum += this.calories[this.size];
    sum += this.calories[this.stuffing];

    this.addedToppings.forEach(e => {
      sum += this.calories[e];
    });

    return sum;
  }
}