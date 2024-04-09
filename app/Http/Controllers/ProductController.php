<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProductController extends Controller
{
    public function update(Request $request, $id)
    {
        $product = User::find($id);
        if (!$product) {
            return response()->json(['error' => 'Товар не найден'], 404);
        }

        // Обновляем данные товара
        $product->update([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            // Другие поля для обновления
        ]);

        return response()->json(['message' => 'Данные товара успешно обновлены'], 200);
    }
}
