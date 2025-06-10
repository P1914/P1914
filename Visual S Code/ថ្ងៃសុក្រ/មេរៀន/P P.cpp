#include<iostream>
using namespace std;
class 
 Fanta{
private:

public:
int id,QTY;
string name;
double price;
    void input()
    {
        cout<<"ID int :";
        cin>>id;
        cout<<"Name String:";
        cin>>name;
        cout<<" QTY int:";
        cin>>QTY;
        cout<<" Price double:";
        cin>>price;
        
    }
    void output()const{
        cout<<"ID :"<<id;
        cout<<"  Name :"<<name;
        cout<<"  QTY :"<<QTY;
        cout<<"  Price :"<<price<<"$";
        cout<<"  Total :"<<"$"<<QTY*price;

    }

};
    int main()
    {
        Fanta Thefanta ;
        Thefanta.input();cout<<endl;
        Thefanta.output();
    }
