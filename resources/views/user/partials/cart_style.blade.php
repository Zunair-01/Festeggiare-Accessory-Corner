<style>
    .cart-container {
        padding: 20px;
        background-color: #f8f9fa;
        border-radius: 10px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        margin-top: 20px;
        animation: fadeIn 1s ease-in-out;
    }

    .product-image img {
        width: 100%;
        height: auto;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s;
        animation: zoomIn 1s ease-in-out;
    }

    .product-image img:hover {
        transform: scale(1.05);
    }

    .product-details {
        margin-top: 20px;
        animation: slideInRight 1s ease-in-out;
    }

    .product-title {
        font-size: 2rem;
        font-weight: bold;
        color: #333;
        animation: slideInLeft 1s ease-in-out;
    }

    .product-price {
        color: #d9534f;
        font-size: 1.75rem;
        margin-top: 10px;
        animation: bounceIn 1s ease-in-out;
    }

    .product-price small {
        color: #999;
    }

    .product-promo {
        color: #f0ad4e;
        font-size: 1rem;
        animation: fadeIn 2s ease-in-out;
    }

    .quantity-input {
        width: 70px;
        text-align: center;
    }

    .btn-custom {
        padding: 10px 20px;
        font-size: 1.1rem;
        border: none;
        border-radius: 5px;
        transition: background-color 0.3s, box-shadow 0.3s, transform 0.3s;
    }

    .btn-custom:hover {
        transform: translateY(-3px);
    }

    .buy-now-btn {
        background-color: #5cb85c;
        color: #fff;
        animation: pulse 2s infinite;
    }

    .buy-now-btn:hover {
        background-color: #4cae4c;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    }

    .add-to-cart-btn {
        background-color: #f0ad4e;
        color: #fff;
        animation: pulse 2s infinite;
    }

    .add-to-cart-btn:hover {
        background-color: #ec971f;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    }

    .product-thumbnails img {
        width: 70px;
        height: 70px;
        margin-right: 10px;
        border-radius: 5px;
        cursor: pointer;
        transition: transform 0.3s;
        animation: zoomIn 1s ease-in-out;
    }

    .product-thumbnails img:hover {
        transform: scale(1.1);
    }

    .brand-info a {
        color: #0275d8;
        text-decoration: none;
        transition: color 0.3s;
        animation: fadeIn 1.5s ease-in-out;
    }

    .brand-info a:hover {
        color: #025aa5;
    }

    .promotion-banner p {
        margin-top: 20px;
        color: #555;
        animation: fadeIn 2s ease-in-out;
    }

    .input-group-btn .btn {
        border-radius: 0;
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
        }
        to {
            transform: translateX(0);
        }
    }

    @keyframes slideInRight {
        from {
            transform: translateX(100%);
        }
        to {
            transform: translateX(0);
        }
    }

    @keyframes bounceIn {
        0%, 20%, 40%, 60%, 80%, 100% {
            -webkit-transform: translateY(0);
            transform: translateY(0);
        }
        50% {
            -webkit-transform: translateY(-20px);
            transform: translateY(-20px);
        }
    }

    @keyframes zoomIn {
        from {
            transform: scale(0);
        }
        to {
            transform: scale(1);
        }
    }

    @keyframes pulse {
        0%, 100% {
            transform: scale(1);
        }
        50% {
            transform: scale(1.05);
        }
    }
</style>
