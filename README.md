# 🛍️ Laravel E-commerce Demo

This is a simple Laravel-based mini e-commerce project featuring a **Product View**, **Cart Page**, and **Payment Page** using **Razorpay Payment Gateway**. The UI is built with **Bootstrap**.

---

## 🚀 Features

- 🖼️ **Product Page** – Displays a product with details.
- 🛒 **Cart Page** – View and manage selected product(s).
- 💳 **Payment Page** – Checkout and pay using Razorpay.
- 🎨 **Bootstrap** – Responsive frontend UI.

---

## 🧰 Tech Stack

- **Framework:** Laravel 10+
- **Frontend:** Blade templates + Bootstrap 5
- **Payment Gateway:** Razorpay Payment API
- **Database:** MySQL (or any Laravel-supported DB)

---

## 💳 Razorpay Payment API

This project integrates **Razorpay’s Payment API** to handle secure online payments. Razorpay’s checkout form is used on the payment page, allowing users to complete transactions directly.

### Razorpay Integration Steps

1. **Razorpay Checkout Script**
   Included on the payment page using:
   ```html
   <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
