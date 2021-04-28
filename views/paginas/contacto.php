<main class="contenedor seccion">
            <h1>Contacto</h1>

            <picture>
                <source srcset="build/img/destacada3.webp" type="image/webp">
                <source srcset="build/img/destacada3.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/destacada3.jpg" alt="Imagen Contacto">
            </picture>

            <h2>Llene el Formulario de Contacto</h2>

            <form class="formulario" action="/contacto" method="POST">
                <fieldset>
                    <legend>Información Personal</legend>

                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" placeholder="Tu Nombre" name="contacto[nombre]" required>

                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Tu Email" name="contacto[email]" required>

                    <label for="telefono">Teléfono</label>
                    <input type="tel" name="telefono" id="telefono" placeholder="Tu Telefono" name="contacto[telefono]">

                    <label for="mensaje">Mensaje</label>
                    <textarea name="mensaje" id="mensaje" name="contacto[mensaje]" required></textarea>
                </fieldset>

                <fieldset>
                    <legend>Información sobre la Propiedad</legend>

                    <label for="opciones">Vende o Compra</label>
                    <select name="opciones" id="opciones" name="contacto[tipo]" required>
                        <option value="" disabled selected>-- Seleccione --</option>
                        <option value="Compra">Compra</option>
                        <option value="Vende">Vende</option>
                    </select>

                    <label for="presupuesto">Precio o Presupuesto</label>
                    <input type="number" name="presupuesto" id="presupuesto" placeholder="Tu Precio o Presupuesto" name="contacto[precio]" required>
                </fieldset>

                <fieldset>
                    <legend>Contacto</legend>
                    <p>¿Cómo desea ser contactado?</p>

                    <div class="forma-contacto">
                        <label for="contactar-telefono">Teléfono</label>
                        <input type="radio" name="contacto" id="contactar-telefono" value="telefono" name="contacto[contacto]" required>

                        <label for="contactar-email">Email</label>
                        <input type="radio" name="contacto" id="contactar-email" value="email" name="contacto[contacto]" required>
                    </div>

                    <p>Si eligió teléfono, elija la fecha y la hora</p>

                    <label for="fecha">Fecha</label>
                    <input type="date" name="fecha" id="fecha" name="contacto[fecha]">

                    <label for="hora">Hora</label>
                    <input type="time" name="hora" id="hora" min="9:00" max="18:00" name="contacto[hora]">
                </fieldset>

                <input type="submit" value="Enviar" class="boton-verde">
            </form>
        </main>