#include <iostream>
using namespace std;
//function to calculate rectangle;
int area(int width,int height){
	return width * height;
}
//function to calculate square;
int area(int side){
	return side * side;
}
//function to calculate circle;
double area(double radius){
	double PI = 3.14;
	return PI * radius * radius;
}
int main(){
	cout<<"Area of rectangle : "<<area(5,4)<<endl;
	cout<<"Area of square : "<<area(4)<<endl;
	cout<<"Area of circle : "<<area(4.5)<<endl;
	return 0;
}
