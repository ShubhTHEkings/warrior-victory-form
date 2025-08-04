## 🚀 Live Deployment

This project is live and running on an **Amazon AWS EC2** instance.

🌐 **Live URL:** http://<your-ec2-public-ip> (replace with your actual EC2 IP or domain)

To host it yourself on EC2:

1. Launch an Ubuntu EC2 instance.
2. Install Apache, PHP, and MySQL (LAMP stack).
3. Upload the project files to `/var/www/html/`.
4. Ensure port 80 is open in EC2 Security Groups.
5. Access it via your public EC2 IP in the browser.

---

## 🔐 Database Setup on EC2

Make sure your MySQL server is installed and running on your EC2 instance. Use the credentials in `submit.php` and the SQL below:

```sql
CREATE DATABASE facebook;

USE facebook;

CREATE TABLE users (
  id INT PRIMARY KEY,
  name VARCHAR(100),
  age INT,
  city VARCHAR(100),
  phone VARCHAR(15)
);
