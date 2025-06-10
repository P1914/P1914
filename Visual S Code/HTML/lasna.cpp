#include<iostream>
using namespace std;
string Name;
//Base Class
class person
{
public:
	//data member
	string name;
	int age;
	//parameter constructor
	person(const string &n,int a): name (n) , age(a)
	{
	}
    //copy constructor
	person(const person &other): name (other.name),age
	(other .age)
	{
	cout<<"Copy constuctor called /n";
	}
	void display()
	{
	
		cout<<"Name :"<< name <<", Age :"<< age <<endl;
	}
};
int main()
{
	person person1("DAlin", 18);
	person person2 = person1;
	person person3 = person2;
	
	person1.display();
	person2.display();
	person3.display();
	return 0;
}
