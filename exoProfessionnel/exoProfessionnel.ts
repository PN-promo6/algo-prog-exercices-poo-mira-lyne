class Client {
  accountNumber: string;
  name: string;

  constructor(accountNumber: string, name: string) {
    this.accountNumber = accountNumber;
    this.name = name;
  }
}

class ProfessionnelClient extend Client {
  siret: number;

  constructor(siret: number, accountNumber: string, name: string){
    super(accountNumber, name);
    this.siret = siret;
  }

}

Let newClient: Client = new Client("FR2354", "Lucas");

console.log(newClient.accountNumber, newClient.name)

let newProClient: ProfessionnelClient = new ProfessionnelClient("FR6495", "lydia")
