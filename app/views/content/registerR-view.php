<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">
                        <h4>Registro de Restaurante</h4>
                    </div>
                    <div class="card-body">
                        <form>
                            <!-- Nombre del Restaurante -->
                            <div class="mb-3">
                                <label for="restaurantName" class="form-label">Nombre del Restaurante</label>
                                <input type="text" class="form-control" id="restaurantName" required>
                            </div>
                            
                            <!-- Dirección del Restaurante -->
                            <div class="mb-3">
                                <label for="restaurantAddress" class="form-label">Dirección</label>
                                <input type="text" class="form-control" id="restaurantAddress" required>
                            </div>
                            
                            <!-- Correo Electrónico -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Correo Electrónico</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                            
                            <!-- Número de Teléfono -->
                            <div class="mb-3">
                                <label for="phone" class="form-label">Número de Teléfono</label>
                                <input type="tel" class="form-control" id="phone" required>
                            </div>
                            
                            <!-- Tipo de Cocina -->
                            <div class="mb-3">
                                <label for="cuisineType" class="form-label">Tipo de Cocina</label>
                                <input type="text" class="form-control" id="cuisineType" required>
                            </div>
                            
                            <!-- Horarios de Apertura -->
                            <div class="mb-3">
                                <label for="openingHours" class="form-label">Horarios de Apertura</label>
                                <input type="text" class="form-control" id="openingHours" required>
                            </div>
                            
                            <!-- Imagen del Restaurante -->
                            <div class="mb-3">
                                <label for="restaurantImage" class="form-label">Imagen del Restaurante</label>
                                <input type="file" class="form-control" id="restaurantImage">
                            </div>
                            
                            <!-- Descripción del Restaurante -->
                            <div class="mb-3">
                                <label for="description" class="form-label">Descripción</label>
                                <textarea class="form-control" id="description" rows="3" required></textarea>
                            </div>
                            
                            <!-- Términos y Condiciones -->
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="terms" required>
                                <label class="form-check-label" for="terms">Acepto los términos y condiciones</label>
                            </div>
                            
                            <!-- Botón de Registro -->
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Registrar Restaurante</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
