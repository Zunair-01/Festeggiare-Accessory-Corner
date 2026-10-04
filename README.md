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
### 2. **Install PHP Dependencies**

Install all required Composer packages and backend dependencies:

```bash
composer install

```

### 3. **Configure Environment File**

Create your environment configuration file by copying the example file:

```bash
# Windows (CMD / PowerShell):
copy .env.example .env

# Linux / macOS / Git Bash:
cp .env.example .env

```

### 4. **Generate Application Key**

Generate a unique application key for encryption and session security:

```bash
php artisan key:generate

```

### 5. **Configure Database & Credentials**

Start your MySQL server (via XAMPP, WAMP, or local server), create a database named `festeggiare_db`, and update the `.env` file:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=festeggiare_db
DB_USERNAME=root
DB_PASSWORD=

# Stripe Payment Gateway Setup
STRIPE_KEY=your_stripe_publishable_key
STRIPE_SECRET=your_stripe_secret_key

```

### 6. **Run Database Migrations & Seeders**

Create all required database tables and populate default sample data:

```bash
php artisan migrate --seed

```

### 7. **Link Storage Directory**

Create the symbolic link to serve public uploads, images, and PDF invoices:

```bash
php artisan storage:link

```

### 8. **Start the Application**

Launch the local development server:

```bash
php artisan serve

```

Access the application in your browser at: **`http://127.0.0.1:8000`**

```

```

