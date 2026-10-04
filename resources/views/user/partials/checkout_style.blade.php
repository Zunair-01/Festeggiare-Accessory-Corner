<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<style>
    body {
        background-color: #f8f9fa;
        font-family: 'Arial', sans-serif;
    }

    .checkout-container {
        padding: 30px;
        background-color: #fff;
        border-radius: 15px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        margin-top: 50px;
        animation: fadeIn 0.8s ease-in-out;
    }

    .checkout-title {
        font-size: 2.5rem;
        font-weight: 700;
        color: #333;
        margin-bottom: 20px;
        animation: slideInLeft 0.5s ease-in-out;
        border-bottom: 2px solid #28a745;
        padding-bottom: 10px;
        font-family: 'Playfair Display', serif;
    }

    .checkout-price, .checkout-shipping, .total-price, .checkout-quantity {
        font-size: 1.5rem;
        margin-top: 10px;
        animation: slideInRight 0.5s ease-in-out;
        font-family: 'Roboto', sans-serif;
    }

    .checkout-price {
        color: #007bff;
    }

    .checkout-shipping, .checkout-quantity, {
        color: #6c757d;
    }

    .total-price {
        color: #28a745;
        font-weight: bold;
        margin-top: 20px;
        border-top: 2px solid #28a745;
        padding-top: 10px;
    }

    .payment-form {
        margin-top: 20px;
        animation: slideInUp 0.5s ease-in-out;
    }

    .payment-btn {
        background-color: #28a745;
        border: none;
        padding: 15px 30px;
        font-size: 1.2rem;
        border-radius: 30px;
        color: #fff;
        transition: all 0.3s ease;
        width: 100%;
        cursor: pointer;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        font-family: 'Roboto', sans-serif;
    }

    .payment-btn:hover {
        background-color: #218838;
        transform: translateY(-2px);
    }

    .form-group label {
        font-size: 1.2rem;
        font-weight: 600;
        color: #495057;
        font-family: 'Roboto', sans-serif;
    }

    .form-control {
        border-radius: 30px;
        height: calc(2.25rem + 2px);
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        font-family: 'Roboto', sans-serif;
    }

    .form-control:focus {
        box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
        border-color: #28a745;
    }

    .card {
        border: none;
    }

    .card-element {
        border: 1px solid #ced4da;
        border-radius: 30px;
        padding: 10px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        transition: border-color 0.3s ease;
        font-family: 'Roboto', sans-serif;
    }

    .card-element:hover, .card-element:focus {
        border-color: #28a745;
    }

    @media (max-width: 768px) {
        .checkout-title {
            font-size: 2rem;
        }

        .checkout-price, .checkout-shipping, .total-price, .checkout-quantity {
            font-size: 1.25rem;
        }

        .payment-btn {
            padding: 10px 20px;
            font-size: 1rem;
        }
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

    @keyframes slideInLeft {
        from {
            transform: translateX(-100%);
            opacity: 0;
        }
        to {
            transform: translateX(0);
            opacity: 1;
        }
    }

    @keyframes slideInRight {
        from {
            transform: translateX(100%);
            opacity: 0;
        }
        to {
            transform: translateX(0);
            opacity: 1;
        }
    }

    @keyframes slideInUp {
        from {
            transform: translateY(100%);
            opacity: 0;
        }
        to {
            transform: translateY(0);
            opacity: 1;
        }
    }
</style>
