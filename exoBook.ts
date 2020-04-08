class Book {
  title: string;
  price: number;
  year: number;

    constructor(title: string, price: number, year: number) {
      this.title = title;
      this.price = price;
      this.year = year;
    }
}

let harryPotter : Book = new Book ("harry potter", 30, 2009)
newBook.year=2010

console.log(harryPotter.title, harryPotter.price, harryPotter.year )
