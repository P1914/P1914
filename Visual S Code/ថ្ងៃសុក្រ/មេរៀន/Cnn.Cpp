#include <iostream>
#include <cmath> 

int main() {
    double a, b, c;

    
    std::cout << "Enter the coefficient a: ";
    std::cin >> a;
    std::cout << "Enter the coefficient b: ";
    std::cin >> b;
    std::cout << "Enter the coefficient c: ";
    std::cin >> c;

    
    c = 9;

    
    std::cout << "The quadratic equation formed is: ";
    std::cout << a << "x^2 + " << b << "x + " << c << " = 0" << std::endl;


    double discriminant = b * b - 4 * a * c;

  
    if (discriminant > 0) {
        
        double root1 = (-b + sqrt(discriminant)) / (2 * a);
        double root2 = (-b - sqrt(discriminant)) / (2 * a);
        std::cout << "The equation has two distinct real roots: " << root1 << " and " << root2 << std::endl;
    } else if (discriminant == 0) {
        
        double root = -b / (2 * a);
        std::cout << "The equation has one real root: " << root << std::endl;
    } else {
       
        double realPart = -b / (2 * a);
        double imaginaryPart = sqrt(-discriminant) / (2 * a);
        std::cout << "The equation has complex roots: " << realPart << " + " << imaginaryPart << "i and "
                  << realPart << " - " << imaginaryPart << "i" << std::endl;
    }

    return 0;
}

