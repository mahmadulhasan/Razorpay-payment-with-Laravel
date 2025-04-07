import React, { useEffect, useState } from 'react'

const cart = ({datas}) => {

    const [total, setTotal] = useState(0)
    useEffect(()=>{
        const totalprice = datas.reduce((acc,item) => acc + parseFloat(item.product_price),0)
        setTotal(totalprice)
    })

    return (
        <div className="max-w-4xl mx-auto p-6 bg-white shadow-lg rounded-lg">
          <h2 className="text-2xl font-bold text-center mb-6">Shopping Cart</h2>
          <div className="overflow-x-auto">
            <table className="w-full border-collapse border border-gray-300">
              <thead>
                <tr className="bg-gray-100 text-left">
                  <th className="p-3 border">Product</th>
                  <th className="p-3 border">product description</th>
                  <th className="p-3 border">Price</th>
                </tr>
              </thead>
              <tbody>
                {datas.map((data) => (
                  <tr key={data.id} className="border">
                    <td className="p-3 flex items-center gap-3">
                      <img
                        src={data.product_image}
                        alt="product"
                        className="w-12 h-12 object-cover"
                      />
                      <span>{data.product_name}</span>
                    </td>
                    <td className="p-3 border">{data.product_description}</td>
                    
                    <td className="p-3 border">₹{data.product_price}</td>
                  </tr>
                ))}
              </tbody>
            </table>
          </div>
    
          <div className="flex flex-col md:flex-row justify-between items-center mt-6 gap-4">
            <div className="flex items-center  rounded-lg overflow-hidden w-full md:w-1/2">
              </div>
    
            <div className="w-full md:w-1/3 bg-gray-100 p-4 rounded-lg">
              <div className="flex justify-between text-lg">
                
              </div>
              <div className="flex justify-between text-xl font-bold">
                <span>Total:</span>
                <span>₹{total}</span>
              </div>
            </div>
          </div>
    
          <button className="mt-6 w-full bg-green-500 text-white py-3 rounded-lg hover:bg-green-600 transition">
            Proceed to Checkout
          </button>
        </div>
      );
}

export default cart
