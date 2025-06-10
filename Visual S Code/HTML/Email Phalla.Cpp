#include<iostream>
using namespace std;
class User
{
public:
	string FirstName;
	string LastName;
	int Age;
	string Email;
	
	User()
	{
		FirstName ="Udom";
		LastName ="Phalla";
		Age = 0;
		Email ="udomphalla@gamil.com";
	}
};
int main()
{
	User user;
	cout <<"First Name:" <<user.FirstName<<endl;
	cout <<"Last Name:" <<user.LastName<<endl;
	cout <<"Age" <<user.Age<<endl;
	cout <<"Email"<<user.Email<<endl;
	return 0;
}
