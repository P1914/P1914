#include <iostream>

class Rectangle {
private:
    double length;
    double width;

public:
    // Default constructor
    Rectangle() {
        length = 0.0;
        width = 0.0;
        std::cout << "Default constructor called. Length and Width set to 0." << std::endl;
    }

    // Parameterized constructor
    Rectangle(double l, double w) {
        length = l;
        width = w;
        std::cout << "Parameterized constructor called. Length and Width set to " << l << " and " << w << "." << std::endl;
    }

    // Copy constructor
    Rectangle(const Rectangle& rect) {
        length = rect.length;
        width = rect.width;
        std::cout << "Copy constructor called. Length and Width copied." << std::endl;
    }

    // Getter for length
    double getLength() const {
        return length;
    }

    // Setter for length
    void setLength(double l) {
        if (l >= 0) {
            length = l;
        } else {
            std::cout << "Length cannot be negative." << std::endl;
        }
    }

    // Getter for width
    double getWidth() const {
        return width;
    }

    // Setter for width
    void setWidth(double w) {
        if (w >= 0) {
            width = w;
        } else {
            std::cout << "Width cannot be negative." << std::endl;
        }
    }

    // Method to calculate the area of the rectangle
    double area() const {
        return length * width;
    }

    // Method to display the dimensions of the rectangle
    void display() const {
        std::cout << "Length: " << length << ", Width: " << width << std::endl;
    }
};

int main() {
    // Using the default constructor
    Rectangle rect1;
    rect1.display();
    std::cout << "Area: " << rect1.area() << std::endl;

    // Using the parameterized constructor
    Rectangle rect2(5.0, 3.0);
    rect2.display();
    std::cout << "Area: " << rect2.area() << std::endl;

    // Using the copy constructor
    Rectangle rect3(rect2);
    rect3.display();
    std::cout << "Area: " << rect3.area() << std::endl;

    // Using setters to modify dimensions
    rect1.setLength(4.0);
    rect1.setWidth(2.5);
    rect1.display();
    std::cout << "Area: " << rect1.area() << std::endl;

    // Attempting to set negative values
    rect1.setLength(-3.0);
    rect1.setWidth(-1.0);
    rect1.display();
    std::cout << "Area: " << rect1.area() << std::endl;

    return 0;
}

