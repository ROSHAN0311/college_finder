# College Helper

College Helper is a web application designed to help students find and get recommendations for colleges based on their preferences and profiles. The platform provides features such as college search, recommendations, career guidance, and detailed college information.

## Features

- **College Search:** Search for colleges by name, city, and other criteria.
- **Personalized Recommendations:** Get college recommendations based on your profile and preferences.
- **Career Guidance:** Explore career options and related information.
- **College Details:** View detailed information about colleges, including courses, fees, and contact details.
- **User Accounts:** Register and log in to save your preferences and wishlist.

## Getting Started

### Prerequisites

- PHP 7.x or above
- MySQL
- Web server (e.g., Apache)

### Installation

1. Clone or download this repository.
2. Import the SQL files from the `db/` directory into your MySQL database.
3. Update database credentials in the PHP files if needed.
4. Place the project folder in your web server's root directory.
5. Access the application via your browser.

## Project Structure

- `index.php` - Home page
- `login.php`, `register.php` - User authentication
- `college_view.php` - College details page
- `career.php`, `career_view.php` - Career guidance pages
- `backend-search.php` - Backend for search functionality
- `content-based-filter/` - Recommendation engine
- `db/` - Database SQL files

## License

This project is for educational purposes.
