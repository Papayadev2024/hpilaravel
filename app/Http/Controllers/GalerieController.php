<?php

namespace App\Http\Controllers;

use App\Models\Galerie;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class GalerieController extends Controller
{
	/**
	 * Display a listing of the resource.
	 */
	public function index()
	{
		$galerie = Galerie::all();
		return view('pages.galerie.index', compact('galerie'));
	}

	/**
	 * Show the form for creating a new resource.
	 */
	public function create()
	{
		$productos = Products::all();
		return view('pages.galerie.create', compact('productos'));
	}

	/**
	 * Store a newly created resource in storage.
	 */
	public function store(Request $request)
	{

		$data = $request->all();


		try {
			$request->validate([
				'product_id' => 'required',
			]);

			foreach ($data as $key => $value) {
				
				
				// Comprueba si la clave comienza con 'imagen'
				if (strpos($key, 'imagen') === 0)  {
					
					if ($request->hasFile($key)) {
						$file = $request->file($key);
						$routeImg = 'storage/images/imagen/';
						$nombreImagen = Str::random(10) . '_' . $file->getClientOriginalName();

						$this->saveImg($file, $routeImg, $nombreImagen);

						$data['imagen'] = $routeImg . $nombreImagen;
						$producto = Galerie::create($data);
						// $AboutUs->name_image = $nombreImagen;
					}
				}
			}

			 return redirect()->route('galerie.index')->with('success', 'Publicación creado exitosamente.');
		} catch (\Throwable $th) {
			//throw $th;
			dump($th);
		}
	}
	public function saveImg($file, $route, $nombreImagen)
	{
		$manager = new ImageManager(new Driver());
		$img =  $manager->read($file);


		if (!file_exists($route)) {
			mkdir($route, 0777, true); // Se crea la ruta con permisos de lectura, escritura y ejecución
		}

		$img->save($route . $nombreImagen);
	}

	/**
	 * Display the specified resource.
	 */
	public function show(string $id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 */
	public function edit(string $id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 */
	public function update(Request $request, string $id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 */
	public function destroy(string $id)
	{
		//
	}
	public function updateVisible(Request $request)
	{
		try {
      $id = $request->id;

      $status = $request->status;

      $testimony = Galerie::findOrFail($id);

      $testimony->visible = $status;

      $testimony->save();

      return response()->json(['message' => 'Estado modificado.']);
    } catch (\Throwable $th) {
      return response()->json(['message' => $th], 400);
    }
	}
	public function borrar(string $id)
	{
		//
	}
}
