#include<iostream>
using namespace std;
class User
{
public:
	string FirstName;
	string LastName;
	int Age;
	string Email;
	
	User(string fname ,string lname, int age)
	{
		FirstName =fname;
		LastName =lname;
		Age = age;
		Email =fname + "" +lname + "@gamil.com";
	}
};
int main()
{
	User user("PhallaKissyou", "1914", 20);
	cout <<"First Name:" <<user.FirstName<<endl;
	cout <<"Last Name:" <<user.LastName<<endl;
	cout <<"Age" <<user.Age<<endl;
	cout <<"Email"<<user.Email<<endl;
	return 0;
}
