#include <iostream>
using namespace std;

// Function to find the greatest common divisor (GCD)
int gcd(int a, int b) {
    while (b != 0) {
        int temp = b;
        b = a % b;
        a = temp;
    }
    return a;
}

// Function to reduce the fraction
void reduceFraction(int num, int denom, int &reducedNum, int &reducedDenom) {
    int divisor = gcd(num, denom);
    reducedNum = num / divisor;
    reducedDenom = denom / divisor;
}

int main() {
    int a, b;
    cout << "Enter a: ";
    cin >> a;
    cout << "Enter b: ";
    cin >> b;

    int reducedNum, reducedDenom;
    reduceFraction(a, b, reducedNum, reducedDenom);

    cout << "So that: " << a << " / " << b << " : " << reducedNum << "/" << reducedDenom << endl;

    return 0;
}
