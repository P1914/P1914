#include<iostream>
using namespace std;
class Test{
	public:
		//constructor
		Test(){
			cout<<"Constructor called"<<endl;
		}
		//destructor
		~Test(){
		cout<<"Destructor called"<<endl;
		}
};
		int main(){
		Test t, t1, t2, t3;
		return 0;
}
