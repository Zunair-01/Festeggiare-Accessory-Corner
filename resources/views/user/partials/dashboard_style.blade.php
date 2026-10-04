<style>
    .product-card {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .product-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .product-thumb img {
        border-radius: 10px 10px 0 0;
        transition: transform 0.3s ease;
    }

    .product-thumb img:hover {
        transform: scale(1.05);
    }

    .product-badges {
        position: absolute;
        top: 10px;
        left: 10px;
    }

    .product-badges .badge {
        font-size: 0.75rem;
        padding: 0.25rem 0.5rem;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .product-thumb:hover .badge {
        opacity: 1;
    }

    .search-form {
        display: flex;
        justify-content: center;
        margin-bottom: 20px;
    }

    .search-form .form-control {
        margin-right: 10px;
    }
</style>
