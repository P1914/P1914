#include <iostream>
using namespace std;
// Define function template;
template <typename T>

// Define function name;
T Max(T a,T b)
{
	return (a>b) ? a : b;
}
int main()
{
	//Define integer
	int a=5, b =10;
	cout<< "Max => "<< a <<" and " <<b <<" is  :"<< Max(a, b) <<endl;
	//define double
	double x=5.5, y=10.1;
	cout<< "Max => "<< x <<" and " <<y <<" is  :"<< Max(x, y) <<endl;
	//Define cher
	char c1='A', c2 ='B';
	cout<< "Max => "<< c1 <<" and " <<c2 <<" is  :"<< Max(c1, c2) <<endl;
	return 0;
}
