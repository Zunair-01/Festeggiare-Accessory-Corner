# Festeggiare Accessory Corner

An elegant e-commerce website for wedding and event accessories featuring Admin and Customer roles. Admins can manage products, view orders, and handle inventory, while customers explore collections, add to cart, and complete secure payments. The system includes responsive design, advanced filtering, and automated invoice generation.

---

## 🚀 Key Features

- **Role-Based Access Control:** Separate workflows and dashboards for Admins and Customers.
- **Inventory & Order Management:** Real-time stock tracking and automated order status updates.
- **Seamless Checkout:** Integrated shopping cart with secure payment processing.
- **Invoice Generation:** Automated PDF invoice processing upon order placement.
- **Advanced Filtering:** Multi-criteria search by category, price, and event type.

---

## 🛠️ Tech Stack

- **Backend:** Laravel / PHP
- **Payment Processing:** Stripe Gateway API
- **Frontend:** HTML, CSS, Bootstrap, JavaScript, Ajax
- **Database:** MySQL

---

## 💻 Local Setup Instructions

Follow these step-by-step instructions to set up and run the project in your local development environment:

1. **Clone the repository:**
Clone the repository to your local machine and navigate into the project directory:
   ```bash
   git clone [https://github.com/Zunair-01/festeggiare-accessory-corner.git](https://github.com/Zunair-01/festeggiare-accessory-corner.git)
   
2. Install PHP Dependencies
Install all required Composer packages and project dependencies:
composer install

4. Environment Configuration
Create a .env file by copying the sample environment file:
# On Windows Command Prompt / PowerShell:
copy .env.example .env
# On Linux / macOS / Git Bash:
cp .env.example .env

4. Generate Application Key
Generate the Laravel encryption key:
php artisan key:generate

5. Database Setup & Environment Variables
Start your local MySQL server (e.g., via XAMPP or WAMP).

Create a new MySQL database (e.g., festeggiare_db).

Open the .env file and update your database credentials and Stripe API keys:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=festeggiare_db
DB_USERNAME=root
DB_PASSWORD=

# Stripe API Credentials
STRIPE_KEY=your_stripe_publishable_key
STRIPE_SECRET=your_stripe_secret_key

6. Run Migrations & Seeders
Execute database migrations along with sample data seeders:
php artisan migrate --seed

7. Create Storage Link
Create the symbolic link to make uploaded product images and generated invoices publicly accessible:
php artisan storage:link

8. Run the Application
Start the Laravel development server:
php artisan serve

Once running, access the application in your browser at http://127.0.0.1:8000.
