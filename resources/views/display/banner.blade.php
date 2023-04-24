<section class="w-full min-h-0 p-1 mt-32">
    <div class="banner w-11/12 h-60 m-auto p-5 rounded-lg">
        <h1 class="text-5xl text-center text-white">Propiedades en Argentina y en el Uruguay</h1>
        <h3 class="text-2xl text-center mt-4 text-white">A un clic de distancia</h3>

        <form method="GET" action="{{ route('index') }}" class="w-full min-h-0 mt-5 flex items-center justify-evenly">
            <select name="type" class="w-48 text-base p-3">
                <option value="">Tipo de propiedad</option>
                <option value="casa">Casa</option>
                <option value="departamento">Departamento</option>
                <option value="terreno">Terreno</option>
                <option value="cochera">Cochera</option>
                <option value="lote">Lote</option>
                <option value="chalet">Chalet</option>
            </select>
            <select name="operation" class="w-48 text-base p-3">
                <option value="">Operación</option>
                <option value="Venta">Venta</option>
                <option value="Alquiler">Alquiler</option>
            </select>

           
            <input type="text" class="w-32 text-base p-3" placeholder="M² mínimos">
            <input type="text" class="w-32 text-base p-3" placeholder="M² maximos">

            <select name="select" class="text-base p-3">
                <option value="">N° Ambientes</option>
                <option value="monoambiente">Monoambiente</option>
                <option value="2">2 Ambientes</option>
                <option value="3">3 Ambientes</option>
                <option value="4">4 Ambientes</option>
                <option value="5">5 Ambientes</option>
                <option value="6">6 Ambientes</option>
            </select>
            <button>
                <i
                    class="fas fa-search text-white text-xl border-2 border-white p-3 rounded hover:bg-white hover:text-black"></i>
            </button>
        </form>
    </div>
</section>
