#include <iostream>
#include <string>

const int DAYS_IN_WEEK = 7;
const int SLOTS_PER_DAY = 5;


void displaySchedule(const std::string schedule[DAYS_IN_WEEK][SLOTS_PER_DAY]) {
    const std::string days[DAYS_IN_WEEK] = {"Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"};
    
    for (int i = 0; i < DAYS_IN_WEEK; ++i) {
        std::cout << days[i] << ":" << std::endl;
        for (int j = 0; j < SLOTS_PER_DAY; ++j) {
            if (!schedule[i][j].empty()) {
                std::cout << "  Slot " << j + 1 << ": " << schedule[i][j] << std::endl;
            } else {
                std::cout << "  Slot " << j + 1 << ": You in.....!!" << std::endl;
            }
        }
        std::cout << std::endl;
    }
}

int main() {

    std::string schedule[DAYS_IN_WEEK][SLOTS_PER_DAY] = {
        {"Math", "Physics", "Chemistry", "Biology", "PE"},
        {"History", "Math", "Physics", "Chemistry", "Art"}, 
        {"Math", "Computer Science", "Biology", "", "PE"}, 
        {"History", "Geography", "Math", "Art", ""}, 
        {"Math", "Physics", "Chemistry", "Biology", "PE"}, 
        {"", "", "", "", ""},
        {"", "", "", "", ""}  
    };

    displaySchedule(schedule);

    return 0;
}

