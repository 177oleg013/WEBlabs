function createNewUser() {
  const firstName = prompt("Enter first name:");
  const lastName = prompt("Enter last name:");

  const newUser = {
    firstName,
    lastName,
    getLogin() {
      return this.firstName[0].toLowerCase() + this.lastName.toLowerCase();
    }
  };

  return newUser;
}

const user = createNewUser();
console.log(user.getLogin());
