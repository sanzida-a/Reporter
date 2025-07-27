# Reporter
The reporter is a website where a user can report a crime,and can get emergency help by one click.

# The Reporter - Crime Reporting Website

A web-based crime reporting system that allows citizens to report crimes, get emergency help by one click and view crime statistics. The gps will track his location and send it to the users.They can also get police control room numbers and emergency numbers to contact.And people who report the crime can do it anonymously.The website was created using HTML, CSS, Javascript, PHP and MYSQL.


## ✨ Features

### Core Functionality
- **Crime Reporting**: Users can report various types of crimes including murder, rape, robbery, scams, and child abuse
- **User Authentication**: Secure login and registration system with user roles (admin/user)
- **Police Control Room (PCR)**: Direct access to police station contact information
- **Crime Categories**: Organized reporting by crime type with dedicated pages
- **Blog System**: Latest crime news and updates
- **Comment System**: Users can comment on posts and engage in discussions

### User Interface
- **Responsive Design**: Mobile-friendly interface using Bootstrap
- **Interactive Slider**: Homepage slider showcasing different crime awareness content
- **Modal Login/Signup**: Convenient popup authentication system
- **Social Media Integration**: Links to social media platforms
- **Search Functionality**: Built-in search feature

### Administrative Features
- **Admin Dashboard**: Separate admin interface for managing reports
- **Post Management**: Ability to accept, reject, or keep posts as pending
- **User Management**: Admin can manage user accounts
- **Statistics Dashboard**: Real-time statistics of posts and their status

## 🛠️ Technologies Used

### Frontend
- **HTML5** - Semantic markup
- **CSS3** - Styling with custom CSS files
- **JavaScript** - Interactive functionality
- **Bootstrap 3** - Responsive framework
- **jQuery** - DOM manipulation and AJAX
- **Font Awesome** - Icons
- **Revolution Slider** - Homepage slider
- **Owl Carousel** - Content carousels

### Backend
- **PHP** - Server-side scripting
- **MySQL** - Database management
- **Session Management** - User authentication

### Libraries & Plugins
- **BxSlider** - Testimonial slider
- **Retina.js** - High-resolution display support
- **ImagesLoaded** - Image loading utility

## 📦 Installation

### Prerequisites
- Web server (Apache/Nginx)
- PHP 7.0 or higher
- MySQL 5.6 or higher
- Modern web browser

### Step-by-step Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/yourusername/the-reporter.git
   cd the-reporter
   ```

2. **Set up web server**
   - Place the project files in your web server's document root
   - Ensure PHP is properly configured

3. **Database setup**
   - Import the `final.sql` file into your MySQL database
   - Update database credentials in `connect.php`

4. **Configuration**
   - Update database connection settings
   - Configure file permissions as needed

## 🗄️ Database Setup

The project includes a complete database schema in `final.sql`. The database includes the following tables:

- **users** - User account information
- **post** - Crime reports and posts
- **comments** - User comments on posts
- **catagory** - Crime categories
- **emergency** - Emergency location data
- **police** - Police station information
- **signup** - User registration data

### Import Database
```sql
mysql -u username -p database_name < final.sql
```

## ⚙️ Configuration

### Database Configuration
Update `connect.php` with your database credentials:

```php
$server = "localhost";
$user = "your_username";
$password = "your_password";
$database = "your_database_name";
```

### File Structure Requirements
Ensure the following directories exist and are writable:
- `/upload/blog/` - Blog post images
- `/upload/others/` - Other uploaded content
- `/upload/slide/` - Slider images
- `/upload/team/` - Team/user images

## 🚀 Usage

### For Users
1. **Registration**: Sign up using the modal popup on the homepage
2. **Login**: Access your account through the sign-in modal
3. **Report Crime**: Navigate to specific crime category pages to report incidents
4. **View Updates**: Check the "What's New" section for latest crime reports
5. **Contact Police**: Use the PCR (Police Control Room) page for emergency contacts

### For Administrators
1. **Admin Login**: Use admin credentials to access the admin panel
2. **Manage Posts**: Review, approve, or reject user-submitted crime reports
3. **User Management**: Monitor and manage user accounts
4. **Content Moderation**: Oversee comments and discussions

### Police Control Room Contacts
The system includes contact information for major police stations in Dhaka:
- Adabor, Airport, Badda, Cantonment, Demra, Dhanmondi, Gulshan


## 🎯 Key Pages

- **Homepage (`index.php`)** - Main landing page with crime awareness slider
- **PCR (`PCR.php`)** - Police Control Room contacts and emergency reporting
- **Blog (`blog.php`)** - Latest crime news and updates
- **Single Post (`single-post.php`)** - Individual post view with comments
- **About (`about.php`)** - Information about the platform

## 🤝 Contributing

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

### Development Guidelines
- Follow PHP PSR standards
- Use meaningful commit messages
- Test thoroughly before submitting
- Update documentation as needed


## ⚠️ Important Notes

- This is a prototype/educational project
- Ensure proper security measures before production deployment
- Some placeholder content and test data may be present
- Regular backups of the database are recommended

## 📄 License

This project is open source and available under the [MIT License](LICENSE).

---

**Disclaimer**: This system is designed for educational and demonstration purposes. Ensure compliance with local laws and regulations before deploying in a production environment.
