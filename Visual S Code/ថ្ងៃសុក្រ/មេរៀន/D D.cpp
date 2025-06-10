#include <iostream>
#include <string>

class Employee {
private:
    int id;
    std::string name;
    char gender;
    double salary;
    int workday;

public:
    
    Employee(int empId, std::string empName, char empGender, double empSalary, int empWorkday)
        : id(empId), name(empName), gender(empGender), salary(empSalary), workday(empWorkday) {}

    
    int getId() const { return id; }
    std::string getName() const { return name; }
    char getGender() const { return gender; }
    double getSalary() const { return salary; }
    int getWorkday() const { return workday; }

    
    void setId(int empId) { id = empId; }
    void setName(std::string empName) { name = empName; }
    void setGender(char empGender) { gender = empGender; }
    void setSalary(double empSalary) { salary = empSalary; }
    void setWorkday(int empWorkday) { workday = empWorkday; }

  
    void displayDetails() const {
        std::cout << "ID: " << id << std::endl;
        std::cout << "Name: " << name << std::endl;
        std::cout << "Gender: " << (gender == 'M' ? "Male" : "Female") << std::endl;
        std::cout << "Salary: $" << salary << std::endl;
        std::cout << "Workday: " << workday << " days" << std::endl;
    }
};

int main() {
    
    Employee emp1(1, "Pheak Phalla", 'M', 500.0, 31);

    
    std::cout << "Pheak Phalla :" << std::endl;
    emp1.displayDetails();

    return 0;
}

