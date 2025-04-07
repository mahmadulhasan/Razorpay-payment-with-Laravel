import { useForm, usePage } from "@inertiajs/react";
import React from "react";
import { FaCartShopping } from "react-icons/fa6";

interface ProductType {
  id: string; // Changed from product_id to match Laravel conventions
  name: string;
  price: string;
  description: string;
  image: string;
}

const Product = ({ datas }: { datas: ProductType[] }) => {
  const { flash, csrf_token } = usePage().props;
  const { post, processing, errors } = useForm();

  const addToCart = (product: ProductType) => {
    post("/addtocart", { // Changed endpoint to conventional RESTful route
      product_id: product.id,
      _token: csrf_token,
    }, {
      onError: (err) => console.error("Add to cart error:", err),
      onSuccess: () => console.log("Added to cart successfully")
    });
  };

  return (
    <div>
      {/* Error Display */}
      {errors.addToCart && (
        <div className="p-3 mb-4 text-red-700 bg-red-200 border border-red-400 rounded-lg">
          {errors.addToCart}
        </div>
      )}

      {/* Success Message */}
      {flash?.success && (
        <div className="p-3 mb-4 text-green-700 bg-green-200 border border-green-400 rounded-lg">
          {flash.success}
        </div>
      )}

      {/* Header */}
      <div className="flex justify-between p-4 bg-gradient-to-r from-red-200 via-red-300 to-yellow-200">
        <h1 className="text-bold text-xl font-medium">Products</h1>
        <a
          href="/cart"
          className="flex flex-row justify-center items-center gap-2 text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-teal-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
        >
          <FaCartShopping /> Cart
        </a>
      </div>

      <hr />

      {/* Product List */}
      <div className="flex flex-wrap gap-4 justify-center items-center mt-5">
        {datas.map((product, key) => (
          <div key={key} className="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
            <img
              className="rounded-t-lg w-full h-64 object-cover"
              src={product.product_image}
              alt={product.product_name}
            />
            <div className="p-5">
              <h5 className="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                {product.product_name}
              </h5>
              <p className="mb-5 font-normal text-gray-700 dark:text-gray-400">
                {product.product_description}
              </p>
              <div className="flex justify-between items-center">
                <p className="mb-3 font-semibold text-gray-900 dark:text-white">
                  Price: ${product.product_price}
                </p>
                <button
                  type="button"
                  onClick={() => addToCart(product)}
                  disabled={processing}
                  className={`text-white bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 ${
                    processing ? 'opacity-50 cursor-not-allowed' : ''
                  }`}
                >
                  {processing ? 'Adding...' : 'Add To Cart'}
                </button>
              </div>
            </div>
          </div>
        ))}
      </div>
    </div>
  );
};

export default Product;