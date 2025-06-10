#include<iostream>
using namespce std;
temlate<typename T>
class MyClass
{
	private:
		T value;
		
	public:
		//constructor
		MyClass(T v) : value(v){ }
		//get value
		T getValue()
		{
			return value;
		}
};
int main()
{
	MyClass<int> intObject(42);
	cout << "Int value :"<< intObject.getValue() <<endl;
	
}
