Esta es la página web diseñada para el trabajo final del curso de HTML5. Se pretende que sea la página web de una empresa cárnica de Mieres.

La parte principal de la página y que se muestra en el centro, se compone de 6 artículos ordenados en vertical, a los cuales se puede acceder bajando manualmente con las flechas del navegador o la rueda del ratón, o con un menú deslizable que estará siempre accesible en la parte izquierda de la pantalla.
Este menú se desliza hacia la parte interna de la página al poner encima el ratón y nos permite navegar por los diferentes artículos publicados. En vez de saltar directamente, la página se desliza de forma más o menos suave hasta el artículo objetivo, gracias a las funciones insertadas en smoothscroll.js.

En el artículo #inicio tenemos el logo de la empresa y 6 diapositivas a las que se le han añadido varias transformaciones en el archivo estilo.css.

En el artículo #empresa se muestra información general de la empresa con varias fotos, y se ha maquetado a izquierda y derecha alternativamente texto y fotos.

En el artículo #productos se ha añadido un mini menú a la izquierda de la página con las 4 variedades de carne principales. Se ha realizado con las funcionalidades de flex-box en el archivo estilo.css.
Al elegir cualquiera de las 4 opciones aparece una lista con los distintos productos y fotos de ellos en el panel de la derecha.

En el artículo de #galería se ha insertado un slider de fotografías que incorpora un panel de navegación en su parte inferior, con miniaturas de la fotos que se muestran. Se puede avanzar y retroceder tanto en la foto grande superior como en las miniaturas del panel de navegación. Se ha implementado a partir del archivo de jquery.flexslider.js.

En el artículo #localización se han colocado dos mapas de googlemaps para localizar la empresa cárnica y la carnicería, mediante las etiquetas de <iframe> proporcionadas por googlemaps.

En el artículo #contacto se muestran los datos de contacto de la empresa y la carnicería. También hay una zona para enlaces a las diferentes redes sociales de que dispone la empresa, aunque los enlaces de twiter, linkedin, youtube y rss todavía no son funcionales.
Al final se ha añadido un formulario de pedido, en el que se requieren una serie de datos para formalizar un pedido de productos. Al aceptar el pedido se ejecuta el archivo guardar.php que guarda los datos del pedido en un archivo pedidos.txt, aunque al estar la web alojada en github da un error "405 Not Allowed" al intentar hacerlo.

Se ha logrado bastante compatibilidad en diversos navegadores para ordenador y para móvil, aunque hay funcionalidades que no están soportadas por todos ellos. Las principales son, Internet Explorer no soporta las flex-box del artículo de productos, y Mozilla Firefox no soporta flexslider de la galería fotográfica.
