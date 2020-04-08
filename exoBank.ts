class Customer{
private name: string;
private idBank: number;

constructor( name: string, idBank: number){
  this.name = name;
  this.idBank = idBank;
}

getIdbank(): number{
  return this.idBank;
}
}

let client1 = new Customer ( "Amira", 62112 );
console.log(client1.getIdbank());
