class Person{
name: string;
lastname: string;
birthday: string = "";

constructor(name: string, lastname: string, birthday?: string){
  this.name = name;
  this.lastname = lastname;
  if(birthday) {
  this.birthday = birthday;
  }
}

fullName(){
  console.log("Je m'appelle " + this.name + " " + this.lastname);
}
}
let kira:Person = new Person ( "kira", "kiri" );
kira.fullName()
