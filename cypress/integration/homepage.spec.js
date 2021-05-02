/// <reference types="cypress" />

describe('Carga la página principal', () => {
    it('Prueba el Header de la página principal', () => {
        cy.visit('/');
        
        cy.get('[data-cy="heading-sitio"]').should('exist');
        cy.get('[data-cy="heading-sitio"]').invoke('text').should('equal', 'Venta de Casas y Departamentos Exclusivos de Lujo');
    });

    it('Prueba el bloque de los iconos principales', () => {
        cy.get('[data-cy="heading-nosotros"]').should('exist');
        cy.get('[data-cy="heading-nosotros"]').should('have.prop', 'tagName').should('equal', 'H2');
        
        cy.get('[data-cy="iconos-nosotros"]').should('exist');
        cy.get('[data-cy="iconos-nosotros"]').find('.icono').should('have.length', 3);
    });

    it('Prueba el bloque de las propiedades en venta', () => {
        cy.get('[data-cy="anuncio"]').should('have.length', 3);

        cy.get('[data-cy="enlace-propiedad"]').should('have.class', 'boton-amarillo-block');
        cy.get('[data-cy="enlace-propiedad"]').should('not.have.class', 'boton-amarillo');
        cy.get('[data-cy="enlace-propiedad"]').first().invoke('text').should('equal', 'Ver Propiedad');

        cy.get('[data-cy="enlace-propiedad"]').first().click();
        cy.get('[data-cy="titulo-propiedad"]').should('exist');

        cy.wait(1000);
        cy.go('back');
    });

    it('Prueba el Routing hacia todas las propiedades', () => {
        cy.get('[data-cy="todas-propiedades"]').should('exist');
        cy.get('[data-cy="todas-propiedades"]').should('have.class', 'boton-verde');
        cy.get('[data-cy="todas-propiedades"]').invoke('attr', 'href').should('equal', '/propiedades');
        cy.get('[data-cy="todas-propiedades"]').click();

        cy.get('[data-cy="heading-propiedades"]').invoke('text').should('equal', 'Casas y Depas en Venta');

        cy.wait(1000);
        cy.go('back');
    });

    it('Prueba el bloque de contacto', () => {
        cy.get('[data-cy="imagen-contacto"]').should('exist');
        cy.get('[data-cy="imagen-contacto"]').find('H2').invoke('text').should('equal', 'Encuentra la Casa de tus Sueños');
        cy.get('[data-cy="imagen-contacto"]').find('P').invoke('text').should('equal', 'Llena el formulario de contacto y un asesor se pondrá en contacto contigo a la brevedad');

        cy.get('[data-cy="imagen-contacto"]').find('a').invoke('attr', 'href').then(href => {
            cy.visit(href);
        });
        cy.get('[data-cy="heading-contacto"]').should('exist');

        cy.wait(1000);
        cy.visit('/');
    });

    it('Prueba los testimoniales y el blog', () => {
        cy.get('[data-cy="blog"]').should('exist');
        cy.get('[data-cy="blog"]').find('H3').invoke('text').should('equal', 'Nuestro Blog');
        cy.get('[data-cy="blog"]').find('IMG').should('have.length', 2);
    
        cy.get('[data-cy="testimoniales"]').should('exist');
        cy.get('[data-cy="testimoniales"]').find('H3').invoke('text').should('equal', 'Testimoniales');
    });
});