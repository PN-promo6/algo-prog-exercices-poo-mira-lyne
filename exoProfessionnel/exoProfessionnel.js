class Playground {
  public static void main(String[] args) {
    Client miramasse = new client("Miramasse", 159985);
    ClientPro mira = new ClientPro("Mira", 55364, 6496579889);
    System.out.println(miramasse.name + miramasse.accountNumber);
    System.out.println(mira.name + mira.accountNumber + mira.siret);

  }
}

class Client {
  String name;
  int accountNumber;

  Client(String name, int accountNumber) {
    this.name = name;
    this.accountNumber = accountNumber;
  }
}

class ClientPro extends Client {
  int siret;

  ClientPro(String name, int accountNumber, int siret) {
    super(name, accountNumber);
    this.siret = siret;
  }
}
